<?php

namespace SiteBDE\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Photos
 *
 * @ORM\Table(name="photos")
 * @ORM\Entity(repositoryClass="SiteBDE\EventBundle\Repository\PhotosRepository")
 */
class Photos
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
     * @ORM\Column(name="Photo", type="string", length=255)
     */

      private $url;

  /**
   * @ORM\Column(name="alt", type="string", length=255)
   */
  

    private $photo;

    /**
     * @var int
     *
     * @ORM\Column(name="EventID", type="integer")
     */
    private $eventID;
    

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile(UploadedFile $file = null)
  {
    $this->file = $file;
  }
    
    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Photos
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set eventID
     *
     * @param integer $eventID
     *
     * @return Photos
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

   
}

