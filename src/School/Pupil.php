<?php declare(strict_types=1);

namespace School;

final class Pupil
{
    /**
     * @var integer
     */
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
