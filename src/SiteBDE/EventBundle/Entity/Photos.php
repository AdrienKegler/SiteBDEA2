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

    private $file;

    private $tempFilename;

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
    private $alt;

    private $file;

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

    public function setFile(UploadedFile $file)
    {
        $this->file = $file;
        if (null !== $this->url)
        {
            $this->tempFilename = $this->url;

            $this->url = null;
            $this->alt = null;
        }
    }
    /**
   * @ORM\PrePersist()
   * @ORM\PreUpdate()
   */
    public function preUpload()
    {
        if (null === $this->file)
        {
            return;
        }

        $this->url = $this->file->guessExtension();
        $this->alt = $this->file->getClientOriginalName();
    }
    /**
   * @ORM\PostPersist()
   * @ORM\PostUpdate()
   */
    public function upload()
  {
    // Si jamais il n'y a pas de fichier (champ facultatif)
    if (null === $this->file) {
      return;
    }

    // Si on avait un ancien fichier, on le supprime
    if (null !== $this->tempFilename) {
      $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
      if (file_exists($oldFile)) {
        unlink($oldFile);
      }
    }

    // On déplace le fichier envoyé dans le répertoire de notre choix
    $this->file->move(
      $this->getUploadRootDir(), // Le répertoire de destination
      $this->id.'.'.$this->url   // Le nom du fichier à créer, ici « id.extension »
    );
  }

  /**
   * @ORM\PreRemove()
   */
  public function preRemoveUpload()
  {
    // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
    $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
  }
}

