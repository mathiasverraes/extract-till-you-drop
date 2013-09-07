<?php

namespace School\Infrastructure;

final class Session
{
    private $values = array();

    public function __construct(array $values = array())
    {
        $this->values = $values;
    }

    /**
     * @return Session
     */
    public static function instance()
    {
        return new Session();
    }

    public function get($key)
    {
        return $this->values[$key];
    }

    public function set($key, $value)
    {
        $this->values[$key] = $value;
    }
}