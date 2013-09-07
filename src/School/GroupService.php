<?php

namespace School;

use School\Persistence\DbGroupRepository;
use School\Persistence\DbPupilRepository;
use School\Model\TooManyPupilsException;

class GroupService
{
    public function add($id, $pupilId)
    {
        $repository = DbGroupRepository::instance();
        $group = $repository->find($id);

        $pupils = $group->getPupils();
        if (count($pupils) <= 5) {
            $addPupil = DbPupilRepository::instance()->find($pupilId);
            $tmp = false;
            foreach ($pupils as $pupil) {
                if ($pupil->getId() == $addPupil->getId()) {
                    $tmp = true;
                }
            }
            if(!$tmp) {
                $group->addPupil($addPupil);
                $repository->persist($group);
            }
        } else {
            throw new TooManyPupilsException();
        }

    }
}
