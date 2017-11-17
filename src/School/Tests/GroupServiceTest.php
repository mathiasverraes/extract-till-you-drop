<?php declare(strict_types=1);

namespace School\Tests;

use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ObjectProphecy;
use School\Group;
use School\GroupRepository;
use School\GroupService;
use School\Pupil;
use School\PupilAlreadyInGroupException;
use School\PupilRepository;
use School\TooManyPupilsException;

final class GroupServiceTest extends TestCase {

    /** @var Pupil */
    private $pupil;

    /** @var Group */
    private $group;

    /** @var GroupService */
    private $groupService;

    /** @var  GroupRepository | ObjectProphecy */
    private $groupRepository;

    /** @var  PupilRepository | ObjectProphecy */
    private $pupilRepository;


    protected function setUp () {
        parent::setUp();

        $this->group = new Group(123);
        $this->groupRepository = $this->prophesize(GroupRepository::class);

        $this->pupil = new Pupil(456);
        $this->pupilRepository = $this->prophesize(PupilRepository::class);
        /** @noinspection PhpParamsInspection */
        $this->groupService = new GroupService($this->groupRepository->reveal(), $this->pupilRepository->reveal());
    }

}
