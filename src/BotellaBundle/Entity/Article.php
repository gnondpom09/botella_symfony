<?php

namespace BotellaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
* @ORM\Entity(repositoryClass="BotellaBundle\Repository\ArticleRepository")
* @ORM\HasLifecycleCallbacks()
* @UniqueEntity(fields="title", message="un article existe déjà avec ce titre")
*/
class Article
{
    /**
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
    * @ORM\Column(name="date", type="date")
    * @Assert\DateTime()
    */
    protected $date;

    /**
    * @ORM\Column(name="title", type="string", length=255, unique=true)
    * @Assert\Length(min=5, minMessage="Le titre doit faire au moins {{ linit }} caracteres")
    */
    protected $title;

    /**
    * @ORM\Column(name="author", type="string", length=255)
    * @Assert\Length(min=2, minMessage="Le nom doit faire au moins {{ limit }} caracteres")
    */
    protected $author;

    /**
    * @ORM\Column(name="content", type="text")
    * @Assert\NotBlank()
    */
    protected $content;

    /**
    * @ORM\Column(name="published", type="boolean")
    */
    private $published = true;

    /**
     * @ORM\OneToOne(targetEntity="BotellaBundle\Entity\Image", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $image;

    /**
    * @ORM\ManyToMany(targetEntity="BotellaBundle\Entity\Category", cascade={"persist"})
    * @ORM\JoinTable(name="lb_article_category")
    */
    private $categories;

    /**
    * @Gedmo\Slug(fields={"title"})
    * @ORM\Column(name="slug", type="string", length=255, unique=true)
    */
    private $slug;

    /**
    * @ORM\Column(name="nb_comments", type="integer")
    */
    private $nbComments = 0;

    //////////////////////////////////////////////
    ////////////////// CONCTRUCT /////////////////
    //////////////////////////////////////////////
    public function __construct()
    {
        $this->date = new \Datetime();
        $this->comments = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    //////////////////////////////////////////////
    ////////// Les getters et setters ////////////
    //////////////////////////////////////////////
    /**
    * Get id
    *
    * @return integer
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Set date
    *
    * @param \DateTime $date
    *
    * @return Article
    */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
    * Get date
    *
    * @return \DateTime
    */
    public function getDate()
    {
        return $this->date;
    }

    /**
    * Set title
    *
    * @param string $title
    *
    * @return Article
    */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
    * Get title
    *
    * @return string
    */
    public function getTitle()
    {
        return $this->title;
    }

    /**
    * Set author
    *
    * @param string $author
    *
    * @return Article
    */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
    * Get author
    *
    * @return string
    */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
    * Set content
    *
    * @param string $content
    *
    * @return Article
    */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
    * Get content
    *
    * @return string
    */
    public function getContent()
    {
        return $this->content;
    }

    /**
    * Set published
    *
    * @param string $content
    *
    * @return Article
    */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
    * Get published
    *
    * @return string
    */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set image
     *
     * @param \BotellaBundle\Entity\Image $image
     *
     * @return Article
     */
    public function setImage(Image $image = null)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return \BotellaBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add category
     *
     * @param \BotellaBundle\Entity\Category $category
     *
     * @return Article
     */
    public function addCategory(\BotellaBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \BotellaBundle\Entity\Category $category
     */
    public function removeCategory(\BotellaBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /************* methodes ****************/

    public function increaseComment()
    {
        $this->nbComments++;
    }
    public function decreaseComment()
    {
        $this->nbComments--;
    }
}
