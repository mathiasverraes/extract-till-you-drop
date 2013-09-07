<?php

namespace School\Persistence;

use School\Persistence\DatabaseException;
use School\Model\Pupil;
use School\Model\PupilRepository;

class DbPupilRepository implements PupilRepository
{
    /**
     * @return PupilRepository
     */
    public static function instance()
    {
        return new DbPupilRepository();
    }

    /**
     * @param int $id
     * @throws DatabaseException
     * @return Pupil
     */
    public function find($id)
    {
        throw new DatabaseException;
    }

    public function persist(Pupil $pupil)
    {
        throw new DatabaseException;
    }
}
