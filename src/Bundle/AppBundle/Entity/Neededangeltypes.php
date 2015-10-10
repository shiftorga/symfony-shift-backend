<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Neededangeltypes
 *
 * @ORM\Table(name="NeededAngelTypes", indexes={@ORM\Index(name="room_id", columns={"room_id", "angel_type_id"}), @ORM\Index(name="shift_id", columns={"shift_id"}), @ORM\Index(name="angel_type_id", columns={"angel_type_id"}), @ORM\Index(name="IDX_C2AA7D0254177093", columns={"room_id"})})
 * @ORM\Entity
 */
class Neededangeltypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer", nullable=false)
     */
    private $count;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\Angeltypes
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\Angeltypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="angel_type_id", referencedColumnName="id")
     * })
     */
    private $angelType;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\Shifts
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\Shifts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shift_id", referencedColumnName="SID")
     * })
     */
    private $shift;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\Room
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="room_id", referencedColumnName="RID")
     * })
     */
    private $room;

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Angeltypes
     */
    public function getAngelType()
    {
        return $this->angelType;
    }

    /**
     * @param Angeltypes $angelType
     */
    public function setAngelType($angelType)
    {
        $this->angelType = $angelType;
    }

    /**
     * @return Shifts
     */
    public function getShift()
    {
        return $this->shift;
    }

    /**
     * @param Shifts $shift
     */
    public function setShift($shift)
    {
        $this->shift = $shift;
    }

    /**
     * @return Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param Room $room
     */
    public function setRoom($room)
    {
        $this->room = $room;
    }
}
