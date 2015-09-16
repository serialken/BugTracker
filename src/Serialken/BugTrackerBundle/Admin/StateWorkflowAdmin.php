<?php
// src/Serialken/BugTrackerBundle/Admin

namespace Serialken\BugTrackerBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class StateWorkflowAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                //->add('workflow', 'sonata_type_model_list', array(), array('admin_code' => 'sonata.admin.workflow'))
                ->add('state', 'sonata_type_model_list', array(), array('admin_code' => 'sonata.admin.state'))
                ->add('canTurnAround', 'checkbox', array('required' => false, 'label' => 'Can Turn Around'))
                //->add('beforeName','text', array('label' => 'Before Name'))
                //->add('afterName','text', array('label' => 'After Name'))
                ->add('level')
          
            
            //->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
             //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
//            ->add('name')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
//            ->addIdentifier('name')
//            ->add('website')
//            ->add('description')
        ;
    }
}