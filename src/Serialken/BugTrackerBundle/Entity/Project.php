<?php

namespace Serialken\BugTrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Serialken\BugTrackerBundle\Repository\ProjectRepository")
 *
 * @ORM\HasLifeCycleCallbacks()
 */
class Project
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
     * @ORM\OneToOne(targetEntity="Serialken\MediaBundle\Entity\Media", cascade={"persist", "remove"})
     * @ORM\joinColumn(name="logo_id")
     */
    private $logo;
    
    /**
     * @ORM\ManyToOne(targetEntity="Serialken\BugTrackerBundle\Entity\Workflow", inversedBy="project")
     * @ORM\joinColumn(name="workflow_id")
     */
    private $workflow;
    
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Serialken\UserBundle\Entity\User", inversedBy="project")
     * @ORM\joinColumn(name="inChargeOf_id")
     */
    private $inChargeOf;
    
    /**
     * @ORM\OneToMany(targetEntity="Serialken\BugTrackerBundle\Entity\Application", mappedBy="project", cascade={"persist", "remove"})
     */
    private $bug;
    
    /**
     * @ORM\ManyToMany(targetEntity="Serialken\UserBundle\Entity\User", inversedBy="projects", cascade={"persist"})
     * @ORM\joinTable(name="user_project")
     */
    private $users;
    
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
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

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
    
    
    
    //                   Getters Setters
    
	 /**
     * @ORM\PreUpdate 
     */
    public function preUpdatedAt() 
    {
        $this->setUpdatedAt(new \Datetime());
		return $this;
    }   
	
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
     * @return Project
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
     * @return Project
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
     * @return Project
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
     * Set website
     *
     * @param string $website
     * @return Project
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Project
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
     * @return Project
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
     * @return Project
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

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
     * Set workflow
     *
     * @param \Serialken\BugTrackerBundle\Entity\Workflow $workflow
     * @return Project
     */
    public function setWorkflow(\Serialken\BugTrackerBundle\Entity\Workflow $workflow = null)
    {
        $this->workflow = $workflow;

        return $this;
    }

    /**
     * Get workflow
     *
     * @return \Serialken\BugTrackerBundle\Entity\Workflow 
     */
    public function getWorkflow()
    {
        return $this->workflow;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->updatedAt = new \DateTime();
        $this->createdAt = new \DateTime();
        $this->bug = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set logo
     *
     * @param \Serialken\MediaBundle\Entity\Media $logo
     * @return Project
     */
    public function setLogo(\Serialken\MediaBundle\Entity\Media $logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return \Serialken\MediaBundle\Entity\Media 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set inChargeOf
     *
     * @param \Serialken\UserBundle\Entity\User $inChargeOf
     * @return Project
     */
    public function setInChargeOf(\Serialken\UserBundle\Entity\User $inChargeOf = null)
    {
        $this->inChargeOf = $inChargeOf;

        return $this;
    }

    /**
     * Get inChargeOf
     *
     * @return \Serialken\UserBundle\Entity\User 
     */
    public function getInChargeOf()
    {
        return $this->inChargeOf;
    }

    /**
     * Add bug
     *
     * @param \Serialken\BugTrackerBundle\Entity\Application $bug
     * @return Project
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

    /**
     * Add users
     *
     * @param \Serialken\UserBundle\Entity\User $users
     * @return Project
     */
    public function addUser(\Serialken\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Serialken\UserBundle\Entity\User $users
     */
    public function removeUser(\Serialken\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
    
     public function __toString()
    {   
        return empty($this->name) ? get_class() : $this->name ;
    }
}
