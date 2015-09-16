<?php
// src/Serialken/BugTrackerBundle/Admin

namespace Serialken\BugTrackerBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Sonata\AdminBundle\Form\EventListener;

class ProjectAdmin extends Admin
{
    protected $datagridValues = array(
                                    '_sort_order' => 'ASC',
                                    '_sort_by' => 'name'
                                    );
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->with('General')
                    ->add('workflow', 'sonata_type_model_list', array(), array('multiple' => false))
                    ->add('inChargeOf', 'sonata_type_model_list', array('label' => 'Person in charge'), array('multiple' => 'false'))
                    ->add('name', 'text', array('label' => 'Project Title'))
                    ->add('isEnable', 'checkbox', array('required' => false, 'label' => 'Enable'))
                    ->add('website', 'text', array('label' => 'Website'))
                    ->add('description', 'sizannia_editor_type', array('label' => 'Project description'))
                    ->add('logo', 'sonata_type_model_list', array(), array('admin_code' => 'sonata.media.admin.media'))
                ->end()
                ->with('Applications')
                    ->add('bug', 'sonata_type_collection', array('required' => 'false'), array('admin_code' => 'sonata.admin.application'))
                ->end()
            
            ;
//         $formMapper->getFormBuilder()->addEventListener(
//                                FormEvents::PRE_SET_DATA, function(FormEvent $event) {
//                                                                    $project = $event->getdata();
//                                                                    if($project['id'] === null){
//                                                                        die(var_dump($project));
//                                                                        }
//                                                            }
//                                        );
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('workflow')
            ->add('inChargeOf')
            ->add('name')    
            ->add('website')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('website')
            ->add('inChargeOf')
            ->add('workflow')
            ->add('isEnable')
        ;
    }
}