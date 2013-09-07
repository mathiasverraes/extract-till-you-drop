<?php

namespace School\Model;

final class Pupil
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    public function __construct($id)
    {
        $this->id = $id;
    }


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
