<?php

namespace Serialken\BugTrackerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StateWorkflow
 *
 * @ORM\Table(name="state_workflow")
 * @ORM\Entity(repositoryClass="Serialken\BugTrackerBundle\Repository\StateWorkflowRepository")
 *
 * @ORM\HasLifeCycleCallbacks()
 */
class StateWorkflow
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
     * @ORM\ManyToOne(targetEntity="Serialken\BugTrackerBundle\Entity\Workflow", inversedBy="stateWorkflow", cascade={"persist"})
     * @ORM\joincolumn(name="workflow_id")
     */
    private $workflow;
    
    /**
     * @ORM\ManyToOne(targetEntity="Serialken\BugTrackerBundle\Entity\State", inversedBy="stateWorkflow", cascade={"persist"})
     * @ORM\joincolumn(name="state_id")
     */
    private $state;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="can_turn_around", type="boolean")
     */
    private $canTurnAround;

    /**
     * @var string
     *
     * @ORM\Column(name="before_name", type="string", length=255, nullable=true)
     */
    private $beforeName;

    /**
     * @var string
     *
     * @ORM\Column(name="after_name", type="string", length=255, nullable=true)
     */
    private $afterName;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

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

    //              Getters Setters
    
    public function __construct()
    {
        $this->updatedAt = new \DateTime();
        $this->createdAt = new \DateTime();
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
     * Set canTurnAround
     *
     * @param boolean $canTurnAround
     * @return StateWorkflow
     */
    public function setCanTurnAround($canTurnAround)
    {
        $this->canTurnAround = $canTurnAround;

        return $this;
    }

    /**
     * Get canTurnAround
     *
     * @return boolean 
     */
    public function getCanTurnAround()
    {
        return $this->canTurnAround;
    }

    /**
     * Set beforeName
     *
     * @param string $beforeName
     * @return StateWorkflow
     */
    public function setBeforeName($beforeName)
    {
        $this->beforeName = $beforeName;

        return $this;
    }

    /**
     * Get beforeName
     *
     * @return string 
     */
    public function getBeforeName()
    {
        return $this->beforeName;
    }

    /**
     * Set afterName
     *
     * @param string $afterName
     * @return StateWorkflow
     */
    public function setAfterName($afterName)
    {
        $this->afterName = $afterName;

        return $this;
    }

    /**
     * Get afterName
     *
     * @return string 
     */
    public function getAfterName()
    {
        return $this->afterName;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return StateWorkflow
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }
    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return StateWorkflow
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
     * @return StateWorkflow
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
     * Set workflow
     *
     * @param \Serialken\BugTrackerBundle\Entity\Workflow $workflow
     * @return StateWorkflow
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
     * Set state
     *
     * @param \Serialken\BugTrackerBundle\Entity\State $state
     * @return StateWorkflow
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
}
