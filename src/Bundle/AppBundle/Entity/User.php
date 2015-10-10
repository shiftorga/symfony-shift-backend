<?php

namespace Engel\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="User", uniqueConstraints={@ORM\UniqueConstraint(name="Nick", columns={"Nick"})}, indexes={@ORM\Index(name="api_key", columns={"api_key"}), @ORM\Index(name="password_recovery_token", columns={"password_recovery_token"}), @ORM\Index(name="force_active", columns={"force_active"}), @ORM\Index(name="arrival_date", columns={"arrival_date", "planned_arrival_date"}), @ORM\Index(name="planned_departure_date", columns={"planned_departure_date"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nick", type="string", length=23, nullable=false)
     */
    private $nick = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=23, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Vorname", type="string", length=23, nullable=true)
     */
    private $vorname;

    /**
     * @var integer
     *
     * @ORM\Column(name="Alter", type="integer", nullable=true)
     */
    private $alter;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefon", type="string", length=40, nullable=true)
     */
    private $telefon;

    /**
     * @var string
     *
     * @ORM\Column(name="DECT", type="string", length=5, nullable=true)
     */
    private $dect;

    /**
     * @var string
     *
     * @ORM\Column(name="Handy", type="string", length=40, nullable=true)
     */
    private $handy;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=123, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="email_shiftinfo", type="boolean", nullable=false)
     */
    private $emailShiftinfo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="jabber", type="string", length=200, nullable=true)
     */
    private $jabber;

    /**
     * @var string
     *
     * @ORM\Column(name="Size", type="string", length=4, nullable=true)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="Passwort", type="string", length=128, nullable=true)
     */
    private $passwort;

    /**
     * @var string
     *
     * @ORM\Column(name="password_recovery_token", type="string", length=32, nullable=true)
     */
    private $passwordRecoveryToken;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Gekommen", type="boolean", nullable=false)
     */
    private $gekommen = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="Aktiv", type="boolean", nullable=false)
     */
    private $aktiv = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="force_active", type="boolean", nullable=false)
     */
    private $forceActive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tshirt", type="boolean", nullable=true)
     */
    private $tshirt = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="color", type="boolean", nullable=true)
     */
    private $color = '10';

    /**
     * @var string
     *
     * @ORM\Column(name="Sprache", type="string", length=64, nullable=false)
     */
    private $sprache;

    /**
     * @var string
     *
     * @ORM\Column(name="Menu", type="string", length=1, nullable=false)
     */
    private $menu = 'L';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastLogIn", type="integer", nullable=false)
     */
    private $lastlogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CreateDate", type="datetime", nullable=false)
     */
    private $createdate = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="Art", type="string", length=30, nullable=true)
     */
    private $art;

    /**
     * @var string
     *
     * @ORM\Column(name="kommentar", type="text", length=65535, nullable=true)
     */
    private $kommentar;

    /**
     * @var string
     *
     * @ORM\Column(name="Hometown", type="string", length=255, nullable=false)
     */
    private $hometown = '';

    /**
     * @var string
     *
     * @ORM\Column(name="api_key", type="string", length=32, nullable=false)
     */
    private $apiKey;

    /**
     * @var integer
     *
     * @ORM\Column(name="got_voucher", type="integer", nullable=false)
     */
    private $gotVoucher;

    /**
     * @var integer
     *
     * @ORM\Column(name="arrival_date", type="integer", nullable=true)
     */
    private $arrivalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="planned_arrival_date", type="integer", nullable=false)
     */
    private $plannedArrivalDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="planned_departure_date", type="integer", nullable=true)
     */
    private $plannedDepartureDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="UID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * @param string $nick
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
    }

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
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param string $vorname
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    /**
     * @return int
     */
    public function getAlter()
    {
        return $this->alter;
    }

    /**
     * @param int $alter
     */
    public function setAlter($alter)
    {
        $this->alter = $alter;
    }

    /**
     * @return string
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param string $telefon
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
    }

    /**
     * @return string
     */
    public function getDect()
    {
        return $this->dect;
    }

    /**
     * @param string $dect
     */
    public function setDect($dect)
    {
        $this->dect = $dect;
    }

    /**
     * @return string
     */
    public function getHandy()
    {
        return $this->handy;
    }

    /**
     * @param string $handy
     */
    public function setHandy($handy)
    {
        $this->handy = $handy;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return boolean
     */
    public function isEmailShiftinfo()
    {
        return $this->emailShiftinfo;
    }

    /**
     * @param boolean $emailShiftinfo
     */
    public function setEmailShiftinfo($emailShiftinfo)
    {
        $this->emailShiftinfo = $emailShiftinfo;
    }

    /**
     * @return string
     */
    public function getJabber()
    {
        return $this->jabber;
    }

    /**
     * @param string $jabber
     */
    public function setJabber($jabber)
    {
        $this->jabber = $jabber;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getPasswort()
    {
        return $this->passwort;
    }

    /**
     * @param string $passwort
     */
    public function setPasswort($passwort)
    {
        $this->passwort = $passwort;
    }

    /**
     * @return string
     */
    public function getPasswordRecoveryToken()
    {
        return $this->passwordRecoveryToken;
    }

    /**
     * @param string $passwordRecoveryToken
     */
    public function setPasswordRecoveryToken($passwordRecoveryToken)
    {
        $this->passwordRecoveryToken = $passwordRecoveryToken;
    }

    /**
     * @return boolean
     */
    public function isGekommen()
    {
        return $this->gekommen;
    }

    /**
     * @param boolean $gekommen
     */
    public function setGekommen($gekommen)
    {
        $this->gekommen = $gekommen;
    }

    /**
     * @return boolean
     */
    public function isAktiv()
    {
        return $this->aktiv;
    }

    /**
     * @param boolean $aktiv
     */
    public function setAktiv($aktiv)
    {
        $this->aktiv = $aktiv;
    }

    /**
     * @return boolean
     */
    public function isForceActive()
    {
        return $this->forceActive;
    }

    /**
     * @param boolean $forceActive
     */
    public function setForceActive($forceActive)
    {
        $this->forceActive = $forceActive;
    }

    /**
     * @return boolean
     */
    public function isTshirt()
    {
        return $this->tshirt;
    }

    /**
     * @param boolean $tshirt
     */
    public function setTshirt($tshirt)
    {
        $this->tshirt = $tshirt;
    }

    /**
     * @return boolean
     */
    public function isColor()
    {
        return $this->color;
    }

    /**
     * @param boolean $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getSprache()
    {
        return $this->sprache;
    }

    /**
     * @param string $sprache
     */
    public function setSprache($sprache)
    {
        $this->sprache = $sprache;
    }

    /**
     * @return string
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param string $menu
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
    }

    /**
     * @return int
     */
    public function getLastlogin()
    {
        return $this->lastlogin;
    }

    /**
     * @param int $lastlogin
     */
    public function setLastlogin($lastlogin)
    {
        $this->lastlogin = $lastlogin;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * @param \DateTime $createdate
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;
    }

    /**
     * @return string
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * @param string $art
     */
    public function setArt($art)
    {
        $this->art = $art;
    }

    /**
     * @return string
     */
    public function getKommentar()
    {
        return $this->kommentar;
    }

    /**
     * @param string $kommentar
     */
    public function setKommentar($kommentar)
    {
        $this->kommentar = $kommentar;
    }

    /**
     * @return string
     */
    public function getHometown()
    {
        return $this->hometown;
    }

    /**
     * @param string $hometown
     */
    public function setHometown($hometown)
    {
        $this->hometown = $hometown;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return int
     */
    public function getGotVoucher()
    {
        return $this->gotVoucher;
    }

    /**
     * @param int $gotVoucher
     */
    public function setGotVoucher($gotVoucher)
    {
        $this->gotVoucher = $gotVoucher;
    }

    /**
     * @return int
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @param int $arrivalDate
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     * @return int
     */
    public function getPlannedArrivalDate()
    {
        return $this->plannedArrivalDate;
    }

    /**
     * @param int $plannedArrivalDate
     */
    public function setPlannedArrivalDate($plannedArrivalDate)
    {
        $this->plannedArrivalDate = $plannedArrivalDate;
    }

    /**
     * @return int
     */
    public function getPlannedDepartureDate()
    {
        return $this->plannedDepartureDate;
    }

    /**
     * @param int $plannedDepartureDate
     */
    public function setPlannedDepartureDate($plannedDepartureDate)
    {
        $this->plannedDepartureDate = $plannedDepartureDate;
    }

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }
}
