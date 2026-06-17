<?php

namespace Entpay\Mse\Client\Utils;

class Sm3
{
    private static $IV      = '7380166f4914b2b9172442d7da8a0600a96f30bc163138aae38dee4db0fb0e4e';
    private static $LEN     = 512;
    private static $STR_LEN = 64;

    public static function sign($str)
    {
        $l   = strlen($str) * 8;
        $k   = Sm3::getK($l);
        $bt  = Sm3::getB($k);
        $str = $str . $bt . pack('J', $l);

        $count = strlen($str);
        $l     = $count / Sm3::$STR_LEN;
        $vr    = hex2bin(Sm3::$IV);
        for ($i = 0; $i < $l; ++$i) {
            $vr = Sm3::cf($vr, substr($str, $i * Sm3::$STR_LEN, Sm3::$STR_LEN));
        }

        return bin2hex($vr);
    }

    private static function getK($l)
    {
        $v = $l % Sm3::$LEN;

        return $v + Sm3::$STR_LEN < Sm3::$LEN
            ? Sm3::$LEN       - Sm3::$STR_LEN       - $v       - 1
            : (Sm3::$LEN * 2) - Sm3::$STR_LEN - $v - 1;
    }

    private static function getB($k)
    {
        $arg = [128];
        $arg = array_merge($arg, array_fill(0, intval($k / 8), 0));

        return pack('C*', ...$arg);
    }

    public static function signFile($file)
    {
        $l  = filesize($file) * 8;
        $k  = Sm3::getK($l);
        $bt = Sm3::getB($k) . pack('J', $l);

        $hd  = fopen($file, 'r');
        $vr  = hex2bin(Sm3::$IV);
        $str = fread($hd, Sm3::$STR_LEN);
        if ($l > Sm3::$LEN - Sm3::$STR_LEN - 1) {
            do {
                $vr  = Sm3::cf($vr, $str);
                $str = fread($hd, Sm3::$STR_LEN);
            } while (!feof($hd));
        }

        $str   = $str . $bt;
        $count = strlen($str) * 8;
        $l     = $count / Sm3::$LEN;
        for ($i = 0; $i < $l; ++$i) {
            $vr = Sm3::cf($vr, substr($str, $i * Sm3::$STR_LEN, Sm3::$STR_LEN));
        }

        return bin2hex($vr);
    }

    private static function t($i)
    {
        return $i < 16 ? 0x79CC4519 : 0x7A879D8A;
    }

    private static function cf($ai, $bi)
    {
        $wr = array_values(unpack('N*', $bi));
        for ($i = 16; $i < 68; ++$i) {
            $wr[$i] = Sm3::p1($wr[$i - 16]
                    ^
                    $wr[$i - 9]
                    ^
                    Sm3::lm($wr[$i - 3], 15))
                ^
                Sm3::lm($wr[$i - 13], 7)
                ^
                $wr[$i - 6];
        }
        $wr1 = [];
        for ($i = 0; $i < 64; ++$i) {
            $wr1[] = $wr[$i] ^ $wr[$i + 4];
        }

        list($a, $b, $c, $d, $e, $f, $g, $h) = array_values(unpack('N*', $ai));

        for ($i = 0; $i < 64; ++$i) {
            $ss1 = Sm3::lm(
                (Sm3::lm($a, 12) + $e + Sm3::lm(Sm3::t($i), $i % 32) & 0xFFFFFFFF),
                7
            );
            $ss2 = $ss1 ^ Sm3::lm($a, 12);
            $tt1 = (Sm3::ff($i, $a, $b, $c) + $d + $ss2 + $wr1[$i]) & 0xFFFFFFFF;
            $tt2 = (Sm3::gg($i, $e, $f, $g) + $h + $ss1 + $wr[$i])  & 0xFFFFFFFF;
            $d   = $c;
            $c   = Sm3::lm($b, 9);
            $b   = $a;
            $a   = $tt1;
            $h   = $g;
            $g   = Sm3::lm($f, 19);
            $f   = $e;
            $e   = Sm3::p0($tt2);
        }

        return pack('N*', $a, $b, $c, $d, $e, $f, $g, $h) ^ $ai;
    }

    private static function ff($j, $x, $y, $z)
    {
        return $j < 16 ? $x ^ $y ^ $z : ($x & $y) | ($x & $z) | ($y & $z);
    }

    private static function gg($j, $x, $y, $z)
    {
        return $j < 16 ? $x ^ $y ^ $z : ($x & $y) | (~$x & $z);
    }

    private static function lm($a, $n)
    {
        return $a >> (32 - $n) | (($a << $n) & 0xFFFFFFFF);
    }

    private static function p0($x)
    {
        return $x ^ Sm3::lm($x, 9) ^ Sm3::lm($x, 17);
    }

    private static function p1($x)
    {
        return $x ^ Sm3::lm($x, 15) ^ Sm3::lm($x, 23);
    }
}
