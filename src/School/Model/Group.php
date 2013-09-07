<?php

namespace School\Model;

use School\Model\Pupil;

final class Group
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $pupils = array();

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

    /**
     * @param $pupils
     */
    public function setPupils(array $pupils)
    {
        $this->pupils = $pupils;
    }

    /**
     * @return array
     */
    public function getPupils()
    {
        return $this->pupils;
    }

    public function addPupil(Pupil $pupil)
    {
        $this->pupils[] = $pupil;
    }
}
