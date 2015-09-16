<?php
// src/Serialken/BugTrackerBundle/Admin

namespace Serialken\BugTrackerBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class WorkflowAdmin extends Admin
{
    protected $datagridValues = array(
                                    '_sort_order' => 'ASC',
                                    '_sort_by' => 'name'
                                    );
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('name','text', array('label' => 'Workflow Title'))
                ->add('description','sizannia_editor_type', array('label' => 'Workflow description'))
                ->add('isEnable', 'checkbox', array('required' => false, 'label' => 'Enable'))
                ->add('stateWorkflow', 'sonata_type_collection',array('cascade_validation' => true,),
                                                        array(
                    'sortable'          => 'level',
                    'edit'              => 'inline',
                    'inline'            => 'table',
                    'admin_code'        => 'sonata.admin.stateworkflow',
                    
                    
                ));
        //->add('_action', 'actions', array('actions' => array('show' => array(),'edit' => array(),)))
               
                //->add('project')
        //, array('btn_list' => true, 'btn_delete' => false)
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('name')
                
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('state')
            ->add('isEnable')
        ;
    }
}