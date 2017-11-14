<?php declare(strict_types=1);

namespace School;

interface PupilRepository
{
    public function find(int $id) : Pupil;

    public function persist(Pupil $pupil) : void;
}
