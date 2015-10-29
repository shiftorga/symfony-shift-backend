<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="Messages", indexes={@ORM\Index(name="Datum", columns={"Datum"}), @ORM\Index(name="SUID", columns={"SUID"}), @ORM\Index(name="RUID", columns={"RUID"})})
 * @ORM\Entity
 */
class Messages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Datum", type="integer", nullable=false)
     */
    private $datum;

    /**
     * @var string
     *
     * @ORM\Column(name="isRead", type="string", length=1, nullable=false)
     */
    private $isread = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RUID", referencedColumnName="UID")
     * })
     */
    private $ruid;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SUID", referencedColumnName="UID")
     * })
     */
    private $suid;

    /**
     * @return int
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * @param int $datum
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;
    }

    /**
     * @return string
     */
    public function getIsread()
    {
        return $this->isread;
    }

    /**
     * @param string $isread
     */
    public function setIsread($isread)
    {
        $this->isread = $isread;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getRuid()
    {
        return $this->ruid;
    }

    /**
     * @param User $ruid
     */
    public function setRuid($ruid)
    {
        $this->ruid = $ruid;
    }

    /**
     * @return User
     */
    public function getSuid()
    {
        return $this->suid;
    }

    /**
     * @param User $suid
     */
    public function setSuid($suid)
    {
        $this->suid = $suid;
    }
}
