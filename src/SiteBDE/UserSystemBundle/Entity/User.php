<?php

namespace SiteBDE\UserSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="SiteBDE\UserSystemBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="FirstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="Sex", type="string", length=1)
     */
    private $sex;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BirthDate", type="date")
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="MailAddress", type="string", length=255)
     */
    private $mailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="PassWord", type="string", length=255)
     */
    private $passWord;

    /**
     * @var string
     *
     * @ORM\Column(name="Avatar", type="blob")
     */
    private $avatar;

    /**
     * @var int
     *
     * @ORM\Column(name="StatusID", type="integer")
     */
    private $statusID;

    /**
     * @var int
     *
     * @ORM\Column(name="SchoolID", type="integer")
     */
    private $schoolID;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set mailAddress
     *
     * @param string $mailAddress
     *
     * @return User
     */
    public function setMailAddress($mailAddress)
    {
        $this->mailAddress = $mailAddress;

        return $this;
    }

    /**
     * Get mailAddress
     *
     * @return string
     */
    public function getMailAddress()
    {
        return $this->mailAddress;
    }

    /**
     * Set passWord
     *
     * @param string $passWord
     *
     * @return User
     */
    public function setPassWord($passWord)
    {
        $this->passWord = $passWord;

        return $this;
    }

    /**
     * Get passWord
     *
     * @return string
     */
    public function getPassWord()
    {
        return $this->passWord;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set statusID
     *
     * @param integer $statusID
     *
     * @return User
     */
    public function setStatusID($statusID)
    {
        $this->statusID = $statusID;

        return $this;
    }

    /**
     * Get statusID
     *
     * @return int
     */
    public function getStatusID()
    {
        return $this->statusID;
    }

    /**
     * Set schoolID
     *
     * @param integer $schoolID
     *
     * @return User
     */
    public function setSchoolID($schoolID)
    {
        $this->schoolID = $schoolID;

        return $this;
    }

    /**
     * Get schoolID
     *
     * @return int
     */
    public function getSchoolID()
    {
        return $this->schoolID;
    }
}

