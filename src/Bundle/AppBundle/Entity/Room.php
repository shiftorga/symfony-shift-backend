<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="Room", uniqueConstraints={@ORM\UniqueConstraint(name="Name", columns={"Name"})})
 * @ORM\Entity
 */
class Room
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=35, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Man", type="text", length=65535, nullable=true)
     */
    private $man;

    /**
     * @var string
     *
     * @ORM\Column(name="FromPentabarf", type="string", length=1, nullable=false)
     */
    private $frompentabarf = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="show", type="string", length=1, nullable=false)
     */
    private $show = 'Y';

    /**
     * @var integer
     *
     * @ORM\Column(name="Number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @var integer
     *
     * @ORM\Column(name="RID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rid;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getMan()
    {
        return $this->man;
    }

    /**
     * @param string $man
     */
    public function setMan($man)
    {
        $this->man = $man;
    }

    /**
     * @return string
     */
    public function getFrompentabarf()
    {
        return $this->frompentabarf;
    }

    /**
     * @param string $frompentabarf
     */
    public function setFrompentabarf($frompentabarf)
    {
        $this->frompentabarf = $frompentabarf;
    }

    /**
     * @return string
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * @param string $show
     */
    public function setShow($show)
    {
        $this->show = $show;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * @param int $rid
     */
    public function setRid($rid)
    {
        $this->rid = $rid;
    }
}
