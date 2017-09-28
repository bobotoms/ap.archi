<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Slider
 *
 * @ORM\Table(name="slider")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\SliderRepository")
 */
class Slider
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
     * @var int
     *
	 * @ORM\ManyToMany(targetEntity="Slide", inversedBy="sliders")
     */
	protected $slides;

	
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

	public function setSlides($slides)
	{
		$this->slides = $slides;
	}
	
	public function getSlides()
	{
		return $this->slides;
	}
	
    public function __toString() {
    	$name= $this->name;
    	if (! is_string ( $name)) {
    		$name= strval ( $name);
    	}
    
    	return $name;
    }

}