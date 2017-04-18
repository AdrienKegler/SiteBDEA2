<?php

namespace SiteBDE\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="SiteBDE\EventBundle\Repository\EventRepository")
 */
class Event
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
     * @var \DateTime
     *
     * @ORM\Column(name="CreationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="PeriodicEvent", type="boolean")
     */
    private $periodicEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="EventPeriodicityUnit", type="string", length=20, nullable=true)
     */
    private $eventPeriodicityUnit;

    /**
     * @var int
     *
     * @ORM\Column(name="EventPeriodicityQty", type="integer", nullable=true)
     */
    private $eventPeriodicityQty;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FirstEventEdition", type="datetime", nullable=true)
     */
    private $firstEventEdition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="NextEventEdition", type="datetime", nullable=true)
     */
    private $nextEventEdition;

    /**
     * @var int
     *
     * @ORM\Column(name="NbEventEdition", type="integer", nullable=true)
     */
    private $nbEventEdition;

    /**
     * @var int
     *
     * @ORM\Column(name="EventNbLike", type="integer")
     */
    private $eventNbLike;

    /**
     * @var int
     *
     * @ORM\Column(name="AuthorID", type="integer")
     */
    private $authorID;

    /**
     * @var int
     *
     * @ORM\Column(name="CategoryID", type="integer")
     */
    private $categoryID;


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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Event
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set periodicEvent
     *
     * @param boolean $periodicEvent
     *
     * @return Event
     */
    public function setPeriodicEvent($periodicEvent)
    {
        $this->periodicEvent = $periodicEvent;

        return $this;
    }

    /**
     * Get periodicEvent
     *
     * @return bool
     */
    public function getPeriodicEvent()
    {
        return $this->periodicEvent;
    }

    /**
     * Set eventPeriodicityUnit
     *
     * @param string $eventPeriodicityUnit
     *
     * @return Event
     */
    public function setEventPeriodicityUnit($eventPeriodicityUnit)
    {
        $this->eventPeriodicityUnit = $eventPeriodicityUnit;

        return $this;
    }

    /**
     * Get eventPeriodicityUnit
     *
     * @return string
     */
    public function getEventPeriodicityUnit()
    {
        return $this->eventPeriodicityUnit;
    }

    /**
     * Set eventPeriodicityQty
     *
     * @param integer $eventPeriodicityQty
     *
     * @return Event
     */
    public function setEventPeriodicityQty($eventPeriodicityQty)
    {
        $this->eventPeriodicityQty = $eventPeriodicityQty;

        return $this;
    }

    /**
     * Get eventPeriodicityQty
     *
     * @return int
     */
    public function getEventPeriodicityQty()
    {
        return $this->eventPeriodicityQty;
    }

    /**
     * Set firstEventEdition
     *
     * @param \DateTime $firstEventEdition
     *
     * @return Event
     */
    public function setFirstEventEdition($firstEventEdition)
    {
        $this->firstEventEdition = $firstEventEdition;

        return $this;
    }

    /**
     * Get firstEventEdition
     *
     * @return \DateTime
     */
    public function getFirstEventEdition()
    {
        return $this->firstEventEdition;
    }

    /**
     * Set nextEventEdition
     *
     * @param \DateTime $nextEventEdition
     *
     * @return Event
     */
    public function setNextEventEdition($nextEventEdition)
    {
        $this->nextEventEdition = $nextEventEdition;

        return $this;
    }

    /**
     * Get nextEventEdition
     *
     * @return \DateTime
     */
    public function getNextEventEdition()
    {
        return $this->nextEventEdition;
    }

    /**
     * Set nbEventEdition
     *
     * @param integer $nbEventEdition
     *
     * @return Event
     */
    public function setNbEventEdition($nbEventEdition)
    {
        $this->nbEventEdition = $nbEventEdition;

        return $this;
    }

    /**
     * Get nbEventEdition
     *
     * @return int
     */
    public function getNbEventEdition()
    {
        return $this->nbEventEdition;
    }

    /**
     * Set eventNbLike
     *
     * @param integer $eventNbLike
     *
     * @return Event
     */
    public function setEventNbLike($eventNbLike)
    {
        $this->eventNbLike = $eventNbLike;

        return $this;
    }

    /**
     * Get eventNbLike
     *
     * @return int
     */
    public function getEventNbLike()
    {
        return $this->eventNbLike;
    }

    /**
     * Set authorID
     *
     * @param integer $authorID
     *
     * @return Event
     */
    public function setAuthorID($authorID)
    {
        $this->authorID = $authorID;

        return $this;
    }

    /**
     * Get authorID
     *
     * @return int
     */
    public function getAuthorID()
    {
        return $this->authorID;
    }

    /**
     * Set categoryID
     *
     * @param integer $categoryID
     *
     * @return Event
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;

        return $this;
    }

    /**
     * Get categoryID
     *
     * @return int
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }
}

