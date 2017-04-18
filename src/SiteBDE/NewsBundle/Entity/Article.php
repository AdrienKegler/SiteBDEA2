<?php

namespace SiteBDE\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="SiteBDE\NewsBundle\Repository\ArticleRepository")
 */
class Article
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
     * @var int
     *
     * @ORM\Column(name="ArticleNbLike", type="integer", nullable=true)
     */
    private $articleNbLike;

    /**
     * @var int
     *
     * @ORM\Column(name="AuthorID", type="integer")
     */
    private $authorID;

    /**
     * @var int
     *
     * @ORM\Column(name="CategoryID", type="integer", nullable=true)
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
     * @return Article
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
     * Set articleNbLike
     *
     * @param integer $articleNbLike
     *
     * @return Article
     */
    public function setArticleNbLike($articleNbLike)
    {
        $this->articleNbLike = $articleNbLike;

        return $this;
    }

    /**
     * Get articleNbLike
     *
     * @return int
     */
    public function getArticleNbLike()
    {
        return $this->articleNbLike;
    }

    /**
     * Set authorID
     *
     * @param integer $authorID
     *
     * @return Article
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
     * @return Article
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

