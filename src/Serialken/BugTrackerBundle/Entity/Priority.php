<?php

namespace Serialken\BugTrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Priority
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Serialken\BugTrackerBundle\Repository\PriorityRepository")
 *
 * @ORM\HasLifeCycleCallbacks()
 */
class Priority
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Serialken\BugTrackerBundle\Entity\Application", mappedBy="priority", cascade={"persist"})
     */
    private $bug;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_enable", type="boolean")
     */
    private $isEnable;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    //               Getters Setters
    
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
     * Set name
     *
     * @param string $name
     * @return Priority
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Priority
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

    /**
     * Set isEnable
     *
     * @param boolean $isEnable
     * @return Priority
     */
    public function setIsEnable($isEnable)
    {
        $this->isEnable = $isEnable;

        return $this;
    }

    /**
     * Get isEnable
     *
     * @return boolean 
     */
    public function getIsEnable()
    {
        return $this->isEnable;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Priority
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Priority
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Priority
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

	/**
     * @ORM\PreUpdate 
     */
    public function preUpdatedAt() 
    {
        $this->setUpdatedAt(new \Datetime());
		return $this;
    }   
	
    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->updatedAt = new \DateTime();
        $this->createdAt = new \DateTime();
        $this->bug = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bug
     *
     * @param \Serialken\BugTrackerBundle\Entity\Application $bug
     * @return Priority
     */
    public function addBug(\Serialken\BugTrackerBundle\Entity\Application $bug)
    {
        $this->bug[] = $bug;

        return $this;
    }

    /**
     * Remove bug
     *
     * @param \Serialken\BugTrackerBundle\Entity\Application $bug
     */
    public function removeBug(\Serialken\BugTrackerBundle\Entity\Application $bug)
    {
        $this->bug->removeElement($bug);
    }

    /**
     * Get bug
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBug()
    {
        return $this->bug;
    }
    
     public function __toString()
    {   
        return empty($this->name)? get_class() : $this->name ;
    }
}
