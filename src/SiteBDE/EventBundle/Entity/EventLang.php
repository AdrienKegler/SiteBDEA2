<?php

namespace SiteBDE\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventLang
 *
 * @ORM\Table(name="event_lang")
 * @ORM\Entity(repositoryClass="SiteBDE\EventBundle\Repository\EventLangRepository")
 */
class EventLang
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
     * @var int
     *
     * @ORM\Column(name="LangID", type="integer")
     */
    private $langID;

    /**
     * @var int
     *
     * @ORM\Column(name="EventID", type="integer")
     */
    private $eventID;

    /**
     * @var string
     *
     * @ORM\Column(name="EventName", type="string", length=255)
     */
    private $eventName;

    /**
     * @var string
     *
     * @ORM\Column(name="EventTextBody", type="text", nullable=true)
     */
    private $eventTextBody;


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
     * Set langID
     *
     * @param integer $langID
     *
     * @return EventLang
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
     * Set eventID
     *
     * @param integer $eventID
     *
     * @return EventLang
     */
    public function setEventID($eventID)
    {
        $this->eventID = $eventID;

        return $this;
    }

    /**
     * Get eventID
     *
     * @return int
     */
    public function getEventID()
    {
        return $this->eventID;
    }

    /**
     * Set eventName
     *
     * @param string $eventName
     *
     * @return EventLang
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventTextBody
     *
     * @param string $eventTextBody
     *
     * @return EventLang
     */
    public function setEventTextBody($eventTextBody)
    {
        $this->eventTextBody = $eventTextBody;

        return $this;
    }

    /**
     * Get eventTextBody
     *
     * @return string
     */
    public function getEventTextBody()
    {
        return $this->eventTextBody;
    }
}

