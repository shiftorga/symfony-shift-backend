<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="News", indexes={@ORM\Index(name="UID", columns={"UID"})})
 * @ORM\Entity
 */
class News
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
     * @ORM\Column(name="Betreff", type="string", length=150, nullable=false)
     */
    private $betreff = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Treffen", type="boolean", nullable=false)
     */
    private $treffen = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
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
    public function getBetreff()
    {
        return $this->betreff;
    }

    /**
     * @param string $betreff
     */
    public function setBetreff($betreff)
    {
        $this->betreff = $betreff;
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
     * @return boolean
     */
    public function isTreffen()
    {
        return $this->treffen;
    }

    /**
     * @param boolean $treffen
     */
    public function setTreffen($treffen)
    {
        $this->treffen = $treffen;
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
}
