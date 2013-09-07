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
    private $pupils;


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
    public function setPupils($pupils)
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
