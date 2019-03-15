<?php

namespace BotellaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity(repositoryClass="BotellaBundle\Repository\PaintingRepository")
* @ORM\HasLifecycleCallbacks()
*/
class Painting
{
    /**
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
    * @ORM\Column(name="date", type="date")
    */
    protected $date;

    /**
    * @ORM\Column(name="title", type="string")
    */
    protected $title;

    /**
    * @ORM\Column(name="height", type="integer")
    */
    protected $height;

    /**
    * @ORM\Column(name="width", type="integer")
    */
    protected $width;

    /**
    * @ORM\Column(name="technic", type="string")
    */
    protected $technic;

    /**
    * @ORM\ManyToMany(targetEntity="BotellaBundle\Entity\Serie", cascade={"persist"})
    * @ORM\JoinTable(name="lb_painting_serie")
    */
    private $series;


    /**
    * @ORM\OneToOne(targetEntity="BotellaBundle\Entity\Image", cascade={"persist", "remove"})
    * @Assert\Valid()
    */
    private $image;

    /******** Construct *************/

    function __construct()
    {
        $this->date = new \Datetime();
        $this->series = new ArrayCollection();
    }

    /******* Getter setters *********/

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
     * @return Painting
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
     * Set height
     *
     * @param string $height
     *
     * @return Painting
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set width
     *
     * @param string $width
     *
     * @return Painting
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set technic
     *
     * @param string $technic
     *
     * @return Painting
     */
    public function setTechnic($technic)
    {
        $this->technic = $technic;

        return $this;
    }

    /**
     * Get technic
     *
     * @return string
     */
    public function getTechnic()
    {
        return $this->technic;
    }

    /**
     * Add series
     *
     * @param \BotellaBundle\Entity\Serie $series
     *
     * @return Painting
     */
    public function addSeries(\BotellaBundle\Entity\Serie $series)
    {
        $this->series[] = $series;

        return $this;
    }

    /**
     * Remove series
     *
     * @param \BotellaBundle\Entity\Serie $series
     */
    public function removeSeries(\BotellaBundle\Entity\Serie $series)
    {
        $this->series->removeElement($series);
    }

    /**
     * Get series
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Set image
     *
     * @param \BotellaBundle\Entity\Image $image
     *
     * @return Painting
     */
    public function setImage(\BotellaBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
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

}
