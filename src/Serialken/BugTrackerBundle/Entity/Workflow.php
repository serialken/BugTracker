<?php

namespace Serialken\BugTrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Workflow
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Serialken\BugTrackerBundle\Repository\WorkflowRepository")
 *
 * @ORM\HasLifeCycleCallbacks()
 */
class Workflow
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
     *@ORM\OneToMany(targetEntity="Serialken\BugTrackerBundle\Entity\Project", mappedBy="workflow", cascade={"persist", "remove"}) 
     */
    private $project;
       
    /**
     * @ORM\OneToMany(targetEntity="Serialken\BugTrackerBundle\Entity\StateWorkflow", mappedBy="workflow", cascade={"persist"})
     */
    private $stateWorkflow;
    
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

    
    
    // Getters Setters
    
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
     * @return Workflow
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
     * @return Workflow
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
     * @return Workflow
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
     * @return Workflow
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
     * @return Workflow
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
     * @return Workflow
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
     * @ORM\PreUpdate 
     */
    public function preUpdatedAt() 
    {
        $this->setUpdatedAt(new \Datetime());
		return $this;
    }   
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->updatedAt = new \DateTime();
        $this->createdAt = new \DateTime();
        $this->project = new ArrayCollection();
        $this->stateWorkflow = new ArrayCollection();
    }

    /**
     * Add project
     *
     * @param \Serialken\BugTrackerBundle\Entity\Project $project
     * @return Workflow
     */
    public function addProject(\Serialken\BugTrackerBundle\Entity\Project $project)
    {
        $this->project[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \Serialken\BugTrackerBundle\Entity\Project $project
     */
    public function removeProject(\Serialken\BugTrackerBundle\Entity\Project $project)
    {
        $this->project->removeElement($project);
    }

    /**
     * Get project
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Add stateWorkflow
     *
     * @param \Serialken\BugTrackerBundle\Entity\StateWorkflow $stateWorkflow
     * @return Workflow
     */
    public function addStateWorkflow(\Serialken\BugTrackerBundle\Entity\StateWorkflow $stateWorkflow)
    {
        $this->stateWorkflow[] = $stateWorkflow;

        return $this;
    }

    /**
     * Remove stateWorkflow
     *
     * @param \Serialken\BugTrackerBundle\Entity\StateWorkflow $stateWorkflow
     */
    public function removeState(\Serialken\BugTrackerBundle\Entity\StateWorkflow $stateWorkflow)
    {
        $this->stateWorkflow->removeElement($stateWorkflow);
    }

    /**
     * Get stateWorkflow
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStateWorkflow()
    {
        return $this->stateWorkflow ;
    }
    
     public function __toString()
    {   
        return empty($this->name)? get_class() : $this->name ;
    }
}
