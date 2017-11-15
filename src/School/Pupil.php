<?php declare(strict_types=1);

namespace School;

class Pupil
{
    /**
     * @var integer
     */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }


    /**
     * @return integer
     */
    public function getId() : int
    {
        return $this->id;
    }
}
