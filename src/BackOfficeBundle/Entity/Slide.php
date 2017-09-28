<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Slide
 *
 * @ORM\Table(name="slide")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\SlideRepository")
 */
class Slide
{

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=255, nullable=false)
	 */
	protected $name;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="picture_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $picture;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="movieWebm_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $movieWebm;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="movieMpfour_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $movieMpfour;
    
    /**
     * @var int
     *
	 * @ORM\ManyToMany(targetEntity="Slider", mappedBy="slides")
     */
    protected $sliders;
    
    /**
     * @var string
     *
     * @ORM\Column(name="text_one", type="string", length=255, nullable=true)
     */
    protected $textOne;
    
    /**
     * @var string
     *
     * @ORM\Column(name="text_two", type="string", length=255, nullable=true)
     */
    protected $textTwo;
    
     /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", columnDefinition="enum('image', 'video')")
     */
    protected $type;
    
	/**
	 * @var string
	 *
	 * @ORM\Column(name="caption", type="string", length=255, nullable=true)
	 */
	protected $caption;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="credit", type="string", length=255, nullable=true)
	 */
	protected $credit;
	
	public function __construct() {
		//$this->travels = new ArrayCollection ();
	}
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setPicture($picture)
	{
		$this->picture = $picture;
	}
	
	public function getPicture()
	{
		return $this->picture;
	}
	
	public function setMovieWebm($movieWebm)
	{
		$this->movieWebm = $movieWebm;
	}
	
	public function getMovieWebm()
	{
		return $this->movieWebm;
	}
	
	public function setMovieMpfour($movieMpfour)
	{
		$this->movieMpfour = $movieMpfour;
	}
	
	public function getMovieMpfour()
	{
		return $this->movieMpfour;
	}

    public function setSliders($sliders)
    {
    	$this->sliders = $sliders;
    }
    
    public function getSliders()
    {
    	return $this->sliders;
    }

    public function setTextOne($textOne)
    {
    	$this->textOne = $textOne;
    }
    
    public function getTextOne()
    {
    	return $this->textOne;
    }

    public function setTextTwo($textTwo)
    {
        $this->textTwo = $textTwo;
    }

    public function getTextTwo()
    {
        return $this->textTwo;
    }
    
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
    
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    public function getCaption()
    {
        return $this->caption;
    }
    
    public function setCredit($credit)
    {
        $this->credit = $credit;
    }

    public function getCredit()
    {
        return $this->credit;
    }
    
    public function __toString() {
    	$name= $this->name;
    	if (! is_string ( $name)) {
    		$name= strval ( $name);
    	}
    
    	return $name;
    }

}