<?php declare(strict_types=1);

namespace School\Tests;

use PHPUnit\Framework\TestCase;
use School\Group;
use School\GroupRepository;
use School\GroupService;
use School\Pupil;
use School\PupilAlreadyInGroupException;
use School\PupilRepository;
use School\TooManyPupilsException;

final class GroupServiceTest extends TestCase {

    public function __construct () {
        parent::__construct();
    }
}
