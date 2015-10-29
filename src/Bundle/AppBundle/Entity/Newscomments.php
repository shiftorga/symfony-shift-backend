<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newscomments
 *
 * @ORM\Table(name="NewsComments", indexes={@ORM\Index(name="Refid", columns={"Refid"}), @ORM\Index(name="UID", columns={"UID"})})
 * @ORM\Entity
 */
class Newscomments
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datum", type="datetime", nullable=false)
     */
    private $datum = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UID", referencedColumnName="UID")
     * })
     */
    private $uid;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\News
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\News")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Refid", referencedColumnName="ID")
     * })
     */
    private $refid;

    /**
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * @param \DateTime $datum
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;
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
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param User $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return News
     */
    public function getRefid()
    {
        return $this->refid;
    }

    /**
     * @param News $refid
     */
    public function setRefid($refid)
    {
        $this->refid = $refid;
    }
}
