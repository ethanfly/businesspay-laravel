<?php

namespace Ethanfly\BusinessPay\Contracts;

interface ConfigRepository
{
    /**
     * Get a configuration value.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Set a configuration value.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return void
     */
    public function set($key, $value);
}
