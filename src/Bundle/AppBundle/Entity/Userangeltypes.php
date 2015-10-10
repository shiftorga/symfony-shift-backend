<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userangeltypes
 *
 * @ORM\Table(name="UserAngelTypes", indexes={@ORM\Index(name="user_id", columns={"user_id", "angeltype_id", "confirm_user_id"}), @ORM\Index(name="angeltype_id", columns={"angeltype_id"}), @ORM\Index(name="confirm_user_id", columns={"confirm_user_id"}), @ORM\Index(name="coordinator", columns={"coordinator"}), @ORM\Index(name="IDX_A40E5E17A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Userangeltypes
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="coordinator", type="boolean", nullable=false)
     */
    private $coordinator;

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
     *   @ORM\JoinColumn(name="confirm_user_id", referencedColumnName="UID")
     * })
     */
    private $confirmUser;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\Angeltypes
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\Angeltypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="angeltype_id", referencedColumnName="id")
     * })
     */
    private $angeltype;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="UID")
     * })
     */
    private $user;
}
