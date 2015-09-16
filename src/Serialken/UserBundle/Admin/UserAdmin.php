<?php
// src\Serialken\UserBundle\Admin

namespace Serialken\UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin
{
    protected $datagridValues = array(
                                    '_sort_order' => 'ASC',
                                    '_sort_by' => 'username'
                                    );
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                
                ->with('Profile')
                    ->add('username','text', array('label' => 'Login'))
                    //->add('plainPassword','text', array('label' => 'Password'))
                    ->add('plainPassword','repeated', array('type' => 'password', 'first_options' => array('label' => 'Password'),'second_options' => array('label' => 'Confirm Password') ))
                    ->add('email','text', array('label' => 'Email'))
                    ->add('avatar', 'sonata_type_model_list', array('label'=> 'Avatar'), array('admin_code' => 'sonata.media.admin.media') )
                    ->add('enabled', 'checkbox')
                ->end()
                ->with('General')
                    ->add('name','text', array('label' => 'First name'))
                    ->add('lastName','text', array('label' => 'Last name'))
                    ->add('lang','language', array('label' => 'Language'))
                    ->add('timezone','timezone', array('label' => 'Timezone'))
                ->end()
                //->add('roles','sizannia_editor_type', array('label' => 'Rights'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('name')
            ->add('lastName')
            ->add('email')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('name')
            ->add('lastName')
            ->add('email')
            ->add('lang', 'language', array('label' => 'Language'))
            ->add('timezone')
            ->add('enabled')
            //->add('locked', 'checkbox')
            
        ;
    }
}