<?php
// src/Serialken/BugTrackerBundle/Admin

namespace Serialken\BugTrackerBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class StateAdmin extends Admin
{
    protected $datagridValues = array(
                                    '_sort_order' => 'ASC',
                                    '_sort_by' => 'name'
                                    );
    
     // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('name','text', array('label' => 'Name'))
                ->add('isEnable', 'checkbox', array('required' => false, 'label' => 'Enabled'))
                //->add('workflow', 'sonata_type_model_list', array(), array('admin_code' => 'sonata.admin.workflow'))
        ;
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
            ->add('isEnable')
        ;
    }
    
    
}