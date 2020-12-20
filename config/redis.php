<?php

class R
{
    protected static $instance = null;

    protected function __construct() {}
    protected function __clone() {}

    public static function instance()
    {
        if (self::$instance === null)
        {
            self::$instance = new Redis();
            self::$instance->connect('/home/u228065/redis.socket');
        }
        return self::$instance;
    }

    public static function __callStatic($method, $args)
    {
        return call_user_func_array(array(self::instance(), $method), $args);
    }

    public static function get($name) {
        return self::instance()->get($name);
    }

    public static function set($name, $value) {
        return self::instance()->set($name, $value);
    }
}
