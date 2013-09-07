<?php

namespace School;

use School\Pupil;

final class Group
{
    /**
     * @var integer
     */
    private $id;

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
