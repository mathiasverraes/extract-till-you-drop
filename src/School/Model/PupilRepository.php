<?php

namespace School\Model;

use School\Model\Pupil;

interface PupilRepository
{
    /**
     * @param int $id
     * @return Pupil
     */
    public function find($id);

    public function persist(Pupil $pupil);
}
