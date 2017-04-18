<?php

namespace SiteBDE\UserSystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Authorisations
 *
 * @ORM\Table(name="authorisations")
 * @ORM\Entity(repositoryClass="SiteBDE\UserSystemBundle\Repository\AuthorisationsRepository")
 */
class Authorisations
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
     * @ORM\Column(name="CategoryID", type="integer")
     */
    private $categoryID;

    /**
     * @var int
     *
     * @ORM\Column(name="PageTypeID", type="integer")
     */
    private $pageTypeID;


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
     * Set categoryID
     *
     * @param integer $categoryID
     *
     * @return Authorisations
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

    /**
     * Set pageTypeID
     *
     * @param integer $pageTypeID
     *
     * @return Authorisations
     */
    public function setPageTypeID($pageTypeID)
    {
        $this->pageTypeID = $pageTypeID;

        return $this;
    }

    /**
     * Get pageTypeID
     *
     * @return int
     */
    public function getPageTypeID()
    {
        return $this->pageTypeID;
    }
}

