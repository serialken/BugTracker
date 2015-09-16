<?php

namespace Serialken\BugTrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Serialken\BugTrackerBundle\Admin\ApplicationAdmin;


/**
 * Application
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Serialken\BugTrackerBundle\Repository\ApplicationRepository")
 *
 * @ORM\HasLifeCycleCallbacks()
 */
class Application 
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
     * @ORM\ManyToOne(targetEntity="Serialken\BugTrackerBundle\Entity\Project", inversedBy="bug", cascade={"persist"})
     * @ORM\joinColumn(name="project_id")
     */
    private $project;
    
    /**
     * @ORM\ManyToOne(targetEntity="Serialken\BugTrackerBundle\Entity\Priority", inversedBy="bug", cascade={"persist"})
     * @ORM\joinColumn(name="priority_id")
     */
    private $priority;
    
    /**
     * @ORM\OneToOne(targetEntity="Serialken\MediaBundle\Entity\Gallery", cascade={"persist", "remove"})
     * @ORM\joinColumn(name="attachment_id")
     */
    private $attachment;
    
    /**
     * @ORM\ManyToOne(targetEntity="Serialken\BugTrackerBundle\Entity\State", inversedBy="bug", cascade={"persist"})
     * @ORM\joinColumn(name="state_id")
     */
    private $state;
    
    /**
     * @ORM\ManyToOne(targetEntity="Serialken\UserBundle\Entity\User", inversedBy="bugAuthor", cascade={"persist"})
     * @ORM\joinColumn(name="author")
     */
    private $author;
    
     /**
     * @ORM\ManyToOne(targetEntity="Serialken\UserBundle\Entity\User", inversedBy="bugInChargeOf", cascade={"persist"})
     * @ORM\joinColumn(name="inChargeOf_id")
     */
    private $inChargeOf;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Serialken\BugTrackerBundle\Entity\Comments", mappedBy="application", cascade={"persist", "remove"})
     */
    private $comments;
    
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

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
     * @return Application
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
     * @return Application
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
     * @return Application
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
     * Set date
     *
     * @param \DateTime $date
     * @return Application
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Application
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
     * @return Application
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
     * Set project
     *
     * @param \Serialken\BugTrackerBundle\Entity\Project $project
     * @return Application
     */
    public function setProject(\Serialken\BugTrackerBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \Serialken\BugTrackerBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set priority
     *
     * @param \Serialken\BugTrackerBundle\Entity\Priority $priority
     * @return Application
     */
    public function setPriority(\Serialken\BugTrackerBundle\Entity\Priority $priority = null)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return \Serialken\BugTrackerBundle\Entity\Priority 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set attachment
     *
     * @param \Serialken\MediaBundle\Entity\Gallery $attachment
     * @return Application
     */
    public function setAttachment(\Serialken\MediaBundle\Entity\Gallery $attachment = null)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return \Serialken\MediaBundle\Entity\Gallery 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set state
     *
     * @param \Serialken\BugTrackerBundle\Entity\State $state
     * @return Application
     */
    public function setState(\Serialken\BugTrackerBundle\Entity\State $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return \Serialken\BugTrackerBundle\Entity\State 
     */
    public function getState()
    {
        return $this->state;
    }
    
    /**
     * Set author
     *
     * @param \Serialken\UserBundle\Entity\User $author
     * @return Application
     */
    public function setAuthor(\Serialken\UserBundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \Serialken\UserBundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    
    /**
     * Set inChargeOf
     *
     * @param \Serialken\UserBundle\Entity\User $inChargeOf
     * @return Application
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
     * Add comments
     *
     * @param \Serialken\BugTrackerBundle\Entity\Comments $comments
     * @return Application
     */
    public function addComment(\Serialken\BugTrackerBundle\Entity\Comments $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Serialken\BugTrackerBundle\Entity\Comments $comments
     */
    public function removeComment(\Serialken\BugTrackerBundle\Entity\Comments $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->updatedAt = new \DateTime();
        $this->createdAt = new \DateTime();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString()
    {   
        return empty($this->name)? get_class() : $this->name ;
    }
    
   
}
