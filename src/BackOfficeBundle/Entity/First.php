<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * First
 *
 * @ORM\Table(name="first")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\FirstRepository")
 */
class First
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
	 * @ORM\Column(name="title", type="string", length=255, nullable=false)
	 */
	protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="text", length=2000, nullable=false)
     */
	protected $intro;

    /**
     * @var string
     *
     * @ORM\Column(name="sub_title", type="string", length=255, nullable=false)
     */
    protected $subTitle;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="text", length=2000, nullable=false)
	 */
	protected $description;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="picture_id", referencedColumnName="id")
     * })
     */
    private $picture;

	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setTitle($title)
	{
		$this->title = $title;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function setSubTitle($subTitle)
	{
		$this->subTitle = $subTitle;
	}
	
	public function getSubTitle()
	{
		return $this->subTitle;
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function setIntro($intro)
	{
		$this->intro = $intro;
	}
	
	public function getIntro()
	{
		return $this->intro;
	}

    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function getPicture()
    {
        return $this->picture;
    }
    
	public function __toString() {
		$title= $this->title;
		if (! is_string ( $title)) {
			$title= strval ( $title);
		}
		
		return $title;
	}
}