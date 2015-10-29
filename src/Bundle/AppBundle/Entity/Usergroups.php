<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usergroups
 *
 * @ORM\Table(name="UserGroups", indexes={@ORM\Index(name="uid", columns={"uid", "group_id"}), @ORM\Index(name="group_id", columns={"group_id"}), @ORM\Index(name="IDX_D0662852539B0606", columns={"uid"})})
 * @ORM\Entity
 */
class Usergroups
{
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
     *   @ORM\JoinColumn(name="uid", referencedColumnName="UID")
     * })
     */
    private $uid;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\Groups
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\Groups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="UID")
     * })
     */
    private $group;

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
     * @return Groups
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param Groups $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }
}
