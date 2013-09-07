<?php

namespace School;

use School\Model\GroupRepository;
use School\Model\PupilAlreadyInGroupException;
use School\Model\PupilRepository;
use School\Model\TooManyPupilsException;

class GroupService
{
    /**
     * @var GroupRepository
     */
    private $repository;

    /**
     * @var PupilRepository
     */
    private $pupilRepository;

    public function __construct(GroupRepository $repository, PupilRepository $pupilRepository)
    {
        $this->repository = $repository;
        $this->pupilRepository = $pupilRepository;
    }

    public function add($id, $pupilId)
    {
        $group = $this->repository->find($id);

        $pupils = $group->getPupils();
        if (count($pupils) <= 5) {
            $addPupil = $this->pupilRepository->find($pupilId);
            $tmp = false;
            foreach ($pupils as $pupil) {
                if ($pupil->getId() == $addPupil->getId()) {
                    $tmp = true;
                }
            }
            if(!$tmp) {
                $group->addPupil($addPupil);
                $this->repository->persist($group);
            } else {
                throw new PupilAlreadyInGroupException;
            }
        } else {
            throw new TooManyPupilsException();
        }

    }
}
