<?php

namespace Proxies\__CG__\Serialken\BugTrackerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class State extends \Serialken\BugTrackerBundle\Entity\State implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'id', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'bug', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'stateWorkflow', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'name', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'isEnable', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'createdAt', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'updatedAt');
        }

        return array('__isInitialized__', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'id', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'bug', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'stateWorkflow', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'name', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'isEnable', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'createdAt', '' . "\0" . 'Serialken\\BugTrackerBundle\\Entity\\State' . "\0" . 'updatedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (State $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsEnable($isEnable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsEnable', array($isEnable));

        return parent::setIsEnable($isEnable);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsEnable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsEnable', array());

        return parent::getIsEnable();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdatedAt', array());

        return parent::preUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function addBug(\Serialken\BugTrackerBundle\Entity\Application $bug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBug', array($bug));

        return parent::addBug($bug);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBug(\Serialken\BugTrackerBundle\Entity\Application $bug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBug', array($bug));

        return parent::removeBug($bug);
    }

    /**
     * {@inheritDoc}
     */
    public function getBug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBug', array());

        return parent::getBug();
    }

    /**
     * {@inheritDoc}
     */
    public function addStateWorkflow(\Serialken\BugTrackerBundle\Entity\StateWorkflow $stateWorkflow)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addStateWorkflow', array($stateWorkflow));

        return parent::addStateWorkflow($stateWorkflow);
    }

    /**
     * {@inheritDoc}
     */
    public function removeStateWorkflow(\Serialken\BugTrackerBundle\Entity\StateWorkflow $stateWorkflow)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeStateWorkflow', array($stateWorkflow));

        return parent::removeStateWorkflow($stateWorkflow);
    }

    /**
     * {@inheritDoc}
     */
    public function getStateWorkflow()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStateWorkflow', array());

        return parent::getStateWorkflow();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}