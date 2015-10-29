<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupprivileges
 *
 * @ORM\Table(name="GroupPrivileges", indexes={@ORM\Index(name="group_id", columns={"group_id", "privilege_id"}), @ORM\Index(name="privilege_id", columns={"privilege_id"}), @ORM\Index(name="IDX_22E239A0FE54D947", columns={"group_id"})})
 * @ORM\Entity
 */
class Groupprivileges
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
     * @var \Engel\Bundle\AppBundle\Entity\Privileges
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\Privileges")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="privilege_id", referencedColumnName="id")
     * })
     */
    private $privilege;

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
     * @return Privileges
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }

    /**
     * @param Privileges $privilege
     */
    public function setPrivilege($privilege)
    {
        $this->privilege = $privilege;
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
