<?php declare(strict_types=1);

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
