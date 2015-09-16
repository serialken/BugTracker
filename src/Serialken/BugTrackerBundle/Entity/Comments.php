<?php

namespace Serialken\BugTrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Serialken\BugTrackerBundle\Repository\CommentsRepository")
 *
 * @ORM\HasLifeCycleCallbacks()
 */
class Comments
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
     * @ORM\ManyToOne(targetEntity="Serialken\BugTrackerBundle\Entity\Application", inversedBy="comments")
     * @ORM\joinColumn(name="application_id")
     */
    private $application;
    
    /**
     * @ORM\ManyToOne(targetEntity="Serialken\UserBundle\Entity\User", inversedBy="commentsAuthor")
     * @ORM\joinColumn(name="user_id")
     */
    private $author;
    
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

    //             Getters Setters
    
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
     * Set isEnable
     *
     * @param boolean $isEnable
     * @return Comments
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
     * @return Comments
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
     * @return Comments
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
     * @return Comments
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
     * Set application
     *
     * @param \Serialken\BugTrackerBundle\Entity\Application $application
     * @return Comments
     */
    public function setApplication(\Serialken\BugTrackerBundle\Entity\Application $application = null)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return \Serialken\BugTrackerBundle\Entity\Application 
     */
    public function getApplication()
    {
        return $this->application;
    }
 
    /**
     * Set author
     *
     * @param \Serialken\UserBundle\Entity\User $author
     * @return Comments
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

     public function __construct() 
    {
        $this->updatedAt = new \DateTime();
        $this->createdAt = new \DateTime();
    }
}
