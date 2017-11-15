<?php declare(strict_types=1);

namespace School;

class Group
{
    private $id;

    /**
     * @var Pupil[]
     */
    private $pupils = [];

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return Pupil[]
     */
    public function getPupils() : array
    {
        return $this->pupils;
    }

    public function addPupil(Pupil $pupil) : void
    {
        $this->pupils[] = $pupil;
    }
}
