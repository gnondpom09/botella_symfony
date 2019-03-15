<?php

namespace BotellaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Table(name="lb_comment")
* @ORM\Entity(repositoryClass="BotellaBundle\Entity\CommentRepository")
* @ORM\HasLifecycleCallbacks()
*/
class Comment
{
    /**
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
    * @ORM\Column(name="author", type="string", length=255)
    */
    private $author;

    /**
    * @ORM\Column(name="content", type="text")
    */
    private $content;

    /**
    * @ORM\Column(name="date", type="datetime")
    */
    private $date;

    /**
    * @ORM\ManyToOne(targetEntity="BotellaBundle\Entity\Article")
    * @ORM\JoinColumn(nullable=false)
    */
    private $article;

    /************** CONSTRUCT ***************/
    public function __construct()
    {
        $this->date = new \Datetime();
    }

    /*************** Getters setters **********/
    public function getId()
    {
        return $this->id;
    }

    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setDate(\Datetime $date)
    {
        $this->date = $date;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set article
     *
     * @param \BotellaBundle\Entity\Article $article
     *
     * @return Comment
     */
    public function setArticle(\BotellaBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \BotellaBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
    * @ORM\PrePersist
    */
    public function increase()
    {
        $this->getArticle()->increaseComment();
    }
    /**
    * @ORM\PreRemove
    */
    public function decrease()
    {
        $this->getArticle()->decreaseComment();
    }

}
