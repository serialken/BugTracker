<?php

namespace Serialken\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use FOS\UserBundle\Entity\User as BaseUser;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 * 
 * @ORM\Table(name="fos_user")
 * @ORM\Entity()
 */
class User extends BaseUser
{
    /**
     * @var integer
     * 
     * @ORM\column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Serialken\MediaBundle\Entity\Media", cascade={"persist", "remove"})
     * @ORM\joinColumn(name="avatar_id")
     */
    private $avatar;
    
    /**
     * @ORM\OneToMany(targetEntity="Serialken\BugTrackerBundle\Entity\Project", mappedBy="inChargeOf")
     */
    private $project;
    
    /**
     * @ORM\OneToMany(targetEntity="Serialken\BugTrackerBundle\Entity\Application", mappedBy="author", cascade={"remove"})
     */
    private $bugAuthor;
    
    /**
     * @ORM\OneToMany(targetEntity="Serialken\BugTrackerBundle\Entity\Application", mappedBy="inChargeOf", cascade={"remove"})
     */
    private $bugInChargeOf;
    
    /**
     * @ORM\OneTomany(targetEntity="Serialken\BugTrackerBundle\Entity\Comments", mappedBy="Author")
     */
    private $commentsAuthor;

    /**
     * @ORM\ManyToMany(targetEntity="Serialken\BugTrackerBundle\Entity\Project", mappedBy="users")
     * 
     */
    private $projects;
    
    /**
     * @var string
     * 
     * @ORM\column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @var string
     * 
     * @ORM\column(type="string", length=255)
     */
    private $lastName;
    
    /**
     * @var srting
     * 
     * @ORM\column(name="lang", type="string", length=15)
     */
    private $lang;
    
    /**
     * @var string
     * 
     * @ORM\column(name="timezone", type="string", length=255)
     */
    private $timezone;
    
    
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
     * @return User
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
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return User
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     * @return User
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set avatar
     *
     * @param \Serialken\MediaBundle\Entity\Media $avatar
     * @return User
     */
    public function setAvatar(\Serialken\MediaBundle\Entity\Media $avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \Serialken\MediaBundle\Entity\Media 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Add project
     *
     * @param \Serialken\BugTrackerBundle\Entity\Project $project
     * @return User
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
     * Add bugAuthor
     *
     * @param \Serialken\BugTrackerBundle\Entity\Application $bugAuthor
     * @return User
     */
    public function addBugAuthor(\Serialken\BugTrackerBundle\Entity\Application $bugAuthor)
    {
        $this->bugAuthor[] = $bugAuthor;

        return $this;
    }

    /**
     * Remove bugAuthor
     *
     * @param \Serialken\BugTrackerBundle\Entity\Application $bugAuthor
     */
    public function removeBugAuthor(\Serialken\BugTrackerBundle\Entity\Application $bugAuthor)
    {
        $this->bugAuthor->removeElement($bugAuthor);
    }

    /**
     * Get bugAuthor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBugAuthor()
    {
        return $this->bugAuthor;
    }
    
    /**
     * Add bugInChargeOf
     *
     * @param \Serialken\BugTrackerBundle\Entity\Application $bugInChargeOf
     * @return User
     */
    public function addBugInChargeOf(\Serialken\BugTrackerBundle\Entity\Application $bugInChargeOf)
    {
        $this->bugInChargeOf[] = $bugInChargeOf;

        return $this;
    }

    /**
     * Remove bugInChargeOf
     *
     * @param \Serialken\BugTrackerBundle\Entity\Application $bugInChargeOf
     */
    public function removeBugInChargeOf(\Serialken\BugTrackerBundle\Entity\Application $bugInChargeOf)
    {
        $this->bugInChargeOf->removeElement($bugInChargeOf);
    }

    /**
     * Get bugInChargeOf
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBugInChargeOf()
    {
        return $this->bugInChargeOf;
    }

    /**
     * Add commentsAuthor
     *
     * @param \Serialken\BugTrackerBundle\Entity\Comments $commentsAuthor
     * @return User
     */
    public function addCommentsAuthor(\Serialken\BugTrackerBundle\Entity\Comments $commentsAuthor)
    {
        $this->commentsAuthor[] = $commentsAuthor;

        return $this;
    }

    /**
     * Remove commentsAuthor
     *
     * @param \Serialken\BugTrackerBundle\Entity\Comments $commentsAuthor
     */
    public function removeCommentsAuthor(\Serialken\BugTrackerBundle\Entity\Comments $commentsAuthor)
    {
        $this->commentsAuthor->removeElement($commentsAuthor);
    }

    /**
     * Get commentsAuthor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentsAuthor()
    {
        return $this->commentsAuthor;
    }
 
    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->project = new ArrayCollection();
        $this->bugAuthor = new ArrayCollection();
        $this->bugInChargeOf = new ArrayCollection();
        $this->commentsAuthor = new ArrayCollection();
        $this->projects = new ArrayCollection();
    }
}
