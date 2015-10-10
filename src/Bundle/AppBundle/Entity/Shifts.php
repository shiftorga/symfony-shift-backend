<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shifts
 *
 * @ORM\Table(name="Shifts", uniqueConstraints={@ORM\UniqueConstraint(name="PSID", columns={"PSID"})}, indexes={@ORM\Index(name="RID", columns={"RID"}), @ORM\Index(name="shifttype_id", columns={"shifttype_id"}), @ORM\Index(name="created_by_user_id", columns={"created_by_user_id"}), @ORM\Index(name="edited_by_user_id", columns={"edited_by_user_id"})})
 * @ORM\Entity
 */
class Shifts
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="start", type="integer", nullable=false)
     */
    private $start;

    /**
     * @var integer
     *
     * @ORM\Column(name="end", type="integer", nullable=false)
     */
    private $end;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="text", length=65535, nullable=true)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="PSID", type="integer", nullable=true)
     */
    private $psid;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_at_timestamp", type="integer", nullable=false)
     */
    private $createdAtTimestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="edited_at_timestamp", type="integer", nullable=false)
     */
    private $editedAtTimestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="SID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sid;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edited_by_user_id", referencedColumnName="UID")
     * })
     */
    private $editedByUser;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by_user_id", referencedColumnName="UID")
     * })
     */
    private $createdByUser;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\Shifttypes
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\Shifttypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shifttype_id", referencedColumnName="id")
     * })
     */
    private $shifttype;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\Room
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RID", referencedColumnName="RID")
     * })
     */
    private $rid;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param int $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param int $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getPsid()
    {
        return $this->psid;
    }

    /**
     * @param int $psid
     */
    public function setPsid($psid)
    {
        $this->psid = $psid;
    }

    /**
     * @return int
     */
    public function getCreatedAtTimestamp()
    {
        return $this->createdAtTimestamp;
    }

    /**
     * @param int $createdAtTimestamp
     */
    public function setCreatedAtTimestamp($createdAtTimestamp)
    {
        $this->createdAtTimestamp = $createdAtTimestamp;
    }

    /**
     * @return int
     */
    public function getEditedAtTimestamp()
    {
        return $this->editedAtTimestamp;
    }

    /**
     * @param int $editedAtTimestamp
     */
    public function setEditedAtTimestamp($editedAtTimestamp)
    {
        $this->editedAtTimestamp = $editedAtTimestamp;
    }

    /**
     * @return int
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param int $sid
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
    }

    /**
     * @return User
     */
    public function getEditedByUser()
    {
        return $this->editedByUser;
    }

    /**
     * @param User $editedByUser
     */
    public function setEditedByUser($editedByUser)
    {
        $this->editedByUser = $editedByUser;
    }

    /**
     * @return User
     */
    public function getCreatedByUser()
    {
        return $this->createdByUser;
    }

    /**
     * @param User $createdByUser
     */
    public function setCreatedByUser($createdByUser)
    {
        $this->createdByUser = $createdByUser;
    }

    /**
     * @return Shifttypes
     */
    public function getShifttype()
    {
        return $this->shifttype;
    }

    /**
     * @param Shifttypes $shifttype
     */
    public function setShifttype($shifttype)
    {
        $this->shifttype = $shifttype;
    }

    /**
     * @return Room
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * @param Room $rid
     */
    public function setRid($rid)
    {
        $this->rid = $rid;
    }
}
