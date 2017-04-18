<?php

namespace SiteBDE\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleLang
 *
 * @ORM\Table(name="article_lang")
 * @ORM\Entity(repositoryClass="SiteBDE\NewsBundle\Repository\ArticleLangRepository")
 */
class ArticleLang
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
     * @ORM\Column(name="ArticleID", type="integer")
     */
    private $articleID;

    /**
     * @var int
     *
     * @ORM\Column(name="LangID", type="integer")
     */
    private $langID;

    /**
     * @var string
     *
     * @ORM\Column(name="ArticleTitle", type="string", length=255)
     */
    private $articleTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="ArticleTextBody", type="text")
     */
    private $articleTextBody;

    /**
     * @var string
     *
     * @ORM\Column(name="ArticleName", type="text")
     */
    private $articleName;


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
     * Set articleID
     *
     * @param integer $articleID
     *
     * @return ArticleLang
     */
    public function setArticleID($articleID)
    {
        $this->articleID = $articleID;

        return $this;
    }

    /**
     * Get articleID
     *
     * @return int
     */
    public function getArticleID()
    {
        return $this->articleID;
    }

    /**
     * Set langID
     *
     * @param integer $langID
     *
     * @return ArticleLang
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
     * Set articleTitle
     *
     * @param string $articleTitle
     *
     * @return ArticleLang
     */
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = $articleTitle;

        return $this;
    }

    /**
     * Get articleTitle
     *
     * @return string
     */
    public function getArticleTitle()
    {
        return $this->articleTitle;
    }

    /**
     * Set articleTextBody
     *
     * @param string $articleTextBody
     *
     * @return ArticleLang
     */
    public function setArticleTextBody($articleTextBody)
    {
        $this->articleTextBody = $articleTextBody;

        return $this;
    }

    /**
     * Get articleTextBody
     *
     * @return string
     */
    public function getArticleTextBody()
    {
        return $this->articleTextBody;
    }

    /**
     * Set articleName
     *
     * @param string $articleName
     *
     * @return ArticleLang
     */
    public function setArticleName($articleName)
    {
        $this->articleName = $articleName;

        return $this;
    }

    /**
     * Get articleName
     *
     * @return string
     */
    public function getArticleName()
    {
        return $this->articleName;
    }
}

