<?php

namespace School;

use School\Pupil;

interface PupilRepository
{
    /**
     * @param int $id
     * @return Pupil
     */
    public function find($id);

    public function persist(Pupil $pupil);
}
