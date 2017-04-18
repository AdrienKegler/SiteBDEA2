<?php

namespace SiteBDE\UserSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusLang
 *
 * @ORM\Table(name="status_lang")
 * @ORM\Entity(repositoryClass="SiteBDE\UserSystemBundle\Repository\StatusLangRepository")
 */
class StatusLang
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
     * @ORM\Column(name="StatusName", type="string", length=255)
     */
    private $statusName;

    /**
     * @var int
     *
     * @ORM\Column(name="LangID", type="integer")
     */
    private $langID;

    /**
     * @var int
     *
     * @ORM\Column(name="StatusID", type="integer")
     */
    private $statusID;


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
     * Set statusName
     *
     * @param string $statusName
     *
     * @return StatusLang
     */
    public function setStatusName($statusName)
    {
        $this->statusName = $statusName;

        return $this;
    }

    /**
     * Get statusName
     *
     * @return string
     */
    public function getStatusName()
    {
        return $this->statusName;
    }

    /**
     * Set langID
     *
     * @param integer $langID
     *
     * @return StatusLang
     */
    public function setLangID($langID)
    {
        $this->langID = $langID;

        return $this;
    }

    /**
     * Get langID
     *
     * @return int
     */
    public function getLangID()
    {
        return $this->langID;
    }

    /**
     * Set statusID
     *
     * @param integer $statusID
     *
     * @return StatusLang
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
}

