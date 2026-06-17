<?php

namespace Entpay\Mse\Client\Model;

use GuzzleHttp\Psr7\Stream;

class FileDownloadResponse
{
    private $stream;

    private $filename;

    public function __construct($stream, $filename)
    {
        $this->stream   = $stream;
        $this->filename = $filename;
    }

    /**
     * @return Stream
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }
}
