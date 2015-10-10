<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shiftentry
 *
 * @ORM\Table(name="ShiftEntry", indexes={@ORM\Index(name="TID", columns={"TID"}), @ORM\Index(name="UID", columns={"UID"}), @ORM\Index(name="SID", columns={"SID", "TID"}), @ORM\Index(name="freeloaded", columns={"freeloaded"}), @ORM\Index(name="IDX_CDA1BE70C1B1383E", columns={"SID"})})
 * @ORM\Entity
 */
class Shiftentry
{
    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="freeload_comment", type="text", length=65535, nullable=true)
     */
    private $freeloadComment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="freeloaded", type="boolean", nullable=false)
     */
    private $freeloaded;

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
     *   @ORM\JoinColumn(name="TID", referencedColumnName="id")
     * })
     */
    private $tid;

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
     * @var \Engel\Bundle\AppBundle\Entity\Shifts
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\Shifts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SID", referencedColumnName="SID")
     * })
     */
    private $sid;

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getFreeloadComment()
    {
        return $this->freeloadComment;
    }

    /**
     * @param string $freeloadComment
     */
    public function setFreeloadComment($freeloadComment)
    {
        $this->freeloadComment = $freeloadComment;
    }

    /**
     * @return boolean
     */
    public function isFreeloaded()
    {
        return $this->freeloaded;
    }

    /**
     * @param boolean $freeloaded
     */
    public function setFreeloaded($freeloaded)
    {
        $this->freeloaded = $freeloaded;
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
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param Angeltypes $tid
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
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
     * @return Shifts
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param Shifts $sid
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
    }
}
