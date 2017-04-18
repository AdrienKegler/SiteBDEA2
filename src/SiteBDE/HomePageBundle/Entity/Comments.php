<?php

namespace SiteBDE\HomePageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="SiteBDE\HomePageBundle\Repository\CommentsRepository")
 */
class Comments
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
     * @ORM\Column(name="CommentText", type="text")
     */
    private $commentText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CommentDate", type="datetime")
     */
    private $commentDate;

    /**
     * @var int
     *
     * @ORM\Column(name="CommentNbLike", type="integer")
     */
    private $commentNbLike;

    /**
     * @var int
     *
     * @ORM\Column(name="PageTypeID", type="integer")
     */
    private $pageTypeID;

    /**
     * @var int
     *
     * @ORM\Column(name="PageID", type="integer")
     */
    private $pageID;


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
     * Set commentText
     *
     * @param string $commentText
     *
     * @return Comments
     */
    public function setCommentText($commentText)
    {
        $this->commentText = $commentText;

        return $this;
    }

    /**
     * Get commentText
     *
     * @return string
     */
    public function getCommentText()
    {
        return $this->commentText;
    }

    /**
     * Set commentDate
     *
     * @param \DateTime $commentDate
     *
     * @return Comments
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    /**
     * Get commentDate
     *
     * @return \DateTime
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * Set commentNbLike
     *
     * @param integer $commentNbLike
     *
     * @return Comments
     */
    public function setCommentNbLike($commentNbLike)
    {
        $this->commentNbLike = $commentNbLike;

        return $this;
    }

    /**
     * Get commentNbLike
     *
     * @return int
     */
    public function getCommentNbLike()
    {
        return $this->commentNbLike;
    }

    /**
     * Set pageTypeID
     *
     * @param integer $pageTypeID
     *
     * @return Comments
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

    /**
     * Set pageID
     *
     * @param integer $pageID
     *
     * @return Comments
     */
    public function setPageID($pageID)
    {
        $this->pageID = $pageID;

        return $this;
    }

    /**
     * Get pageID
     *
     * @return int
     */
    public function getPageID()
    {
        return $this->pageID;
    }
}

