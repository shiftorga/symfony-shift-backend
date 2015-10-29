<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="Questions", indexes={@ORM\Index(name="UID", columns={"UID"}), @ORM\Index(name="AID", columns={"AID"})})
 * @ORM\Entity
 */
class Questions
{
    /**
     * @var string
     *
     * @ORM\Column(name="Question", type="text", length=65535, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="Answer", type="text", length=65535, nullable=true)
     */
    private $answer;

    /**
     * @var integer
     *
     * @ORM\Column(name="QID", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $qid;

    /**
     * @var \Engel\Bundle\AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Engel\Bundle\AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AID", referencedColumnName="UID")
     * })
     */
    private $aid;

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
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param string $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param string $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    /**
     * @return int
     */
    public function getQid()
    {
        return $this->qid;
    }

    /**
     * @param int $qid
     */
    public function setQid($qid)
    {
        $this->qid = $qid;
    }

    /**
     * @return User
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param User $aid
     */
    public function setAid($aid)
    {
        $this->aid = $aid;
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
