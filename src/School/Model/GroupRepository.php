<?php

namespace School\Model;

use School\Model\Group;

interface GroupRepository
{
    /**
     * @param int $id
     * @return Group
     */
    public function find($id);

    public function persist(Group $group);
}
