<?php

namespace School\Persistence;

use School\Persistence\DatabaseException;
use School\Model\Group;
use School\Model\GroupRepository;
use School\Model;

class DbGroupRepository implements GroupRepository
{
    /**
     * @return GroupRepository
     */
    public static function instance()
    {
        return new DbGroupRepository();
    }

    /**
     * @param int $id
     * @throws DatabaseException
     * @return Group
     */
    public function find($id)
    {
        throw new DatabaseException;
    }

    public function persist(Group $group)
    {
        throw new DatabaseException;
    }
}
