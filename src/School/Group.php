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
     * @var Pupil[]
     */
    private $pupils = array();

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return Pupil[]
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
