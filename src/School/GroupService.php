<?php
namespace School;

$intro = <<<INTRO


   "Extract Till You Drop"

    Mathias Verraes
    @mathiasverraes
    verraes.net

    Domain-Driven Design workshops
    August 2015: Berlin, Ghent

    Coupon "IPC" ➙ EUR —150
    verraes.net/workshops


    Domain-Driven Design Europe
    Brussels, January 2016:
    dddeurope.com



INTRO;



use School\GroupRepository;
use School\PupilAlreadyInGroupException;
use School\PupilRepository;
use School\TooManyPupilsException;

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
        $addPupil = $this->pupilRepository->find($pupilId);
        if (count($pupils) < 3) {
            $tmp = false;
            foreach ($pupils as $pupil) {
                if ($pupil->getId() == $addPupil->getId()) {
                    $tmp = true;
                }
            }
            if (!$tmp) {
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
