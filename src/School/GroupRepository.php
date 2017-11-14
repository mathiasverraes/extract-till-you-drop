<?php declare(strict_types=1);

namespace School;

interface GroupRepository
{
    public function find(int $id) : Group;

    public function persist(Group $group) : void;
}
