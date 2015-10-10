<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shifttypes
 *
 * @ORM\Table(name="ShiftTypes", indexes={@ORM\Index(name="angeltype_id", columns={"angeltype_id"})})
 * @ORM\Entity
 */
class Shifttypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\AngelType
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\AngelType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="angeltype_id", referencedColumnName="id")
     * })
     */
    private $angelType;

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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return AngelType
     */
    public function getAngelType()
    {
        return $this->angelType;
    }

    /**
     * @param AngelType $angelType
     */
    public function setAngelType(AngelType $angelType)
    {
        $this->angelType = $angelType;
    }
}
