<?php

namespace Serialken\BugTrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * State
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Serialken\BugTrackerBundle\Repository\StateRepository")
 *
 * @ORM\HasLifeCycleCallbacks()
 */
class State
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
     * @ORM\OneToMany(targetEntity="Serialken\BugTrackerBundle\Entity\Application", mappedBy="state")
     */
    private $bug;
    
    /**
     * @ORM\OneToMany(targetEntity="Serialken\BugTrackerBundle\Entity\StateWorkflow", mappedBy="state", cascade={"persist"})
     */
    private $stateWorkflow;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_enable", type="boolean")
     */
    private $isEnable;

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
     * @return State
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
     * Set isEnable
     *
     * @param boolean $isEnable
     * @return State
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return State
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
     * @return State
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
        $this->bug = new \Doctrine\Common\Collections\ArrayCollection();
        $this->stateWorkflow = new \Doctrine\Common\Collections\ArrayCollection();
    }

    

    /**
     * Add bug
     *
     * @param \Serialken\BugTrackerBundle\Entity\Application $bug
     * @return State
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
     * Add stateWorkflow
     *
     * @param \Serialken\BugTrackerBundle\Entity\StateWorkflow $stateWorkflow
     * @return State
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
    public function removeStateWorkflow(\Serialken\BugTrackerBundle\Entity\StateWorkflow $stateWorkflow)
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
        return $this->stateWorkflow;
    }
    
     public function __toString()
    {   
        return empty($this->name)? get_class() : $this->name ;
    }
}
