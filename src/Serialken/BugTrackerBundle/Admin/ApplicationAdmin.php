<?php
// src/Serialken/BugTrackerBundle/Admin

namespace Serialken\BugTrackerBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
//use Doctrine\Common\Util\ClassUtils;
use Serialken\BugTrackerBundle\Entity\Application;
use Symfony\Component\Security\Core\SecurityContext;



class ApplicationAdmin extends Admin
{
    private $securityContext;
    protected $datagridValues = array(
                                    '_sort_order' => 'DESC',
                                    '_sort_by' => 'date'
                                    );
    //protected $parentAssociationMapping = 'Project';
    //public static $em = null;
     // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {  
        //self::$em = $em;
        //$test = self::$em->getClassMetadata(get_called_class())->name;
        //$test = get_called_class();
        //die(var_dump($test));
        
//        if(!$this->isChild())
//        {
//            die(var_dump('toto est la'));
//        }
        
        $formMapper
                ->with('General')
                    ->add('date', 'datetime', array('label' => 'Dated bug', 'data' => new \DateTime('now')))
                    ->add('name','text', array('label' => 'Bug Name'))
                    ->add('description','sizannia_editor_type', array('label' => 'Bug Description'))
                    ->add('isEnable', 'checkbox', array('required' => false, 'label' => 'Enable'))
                    ->add('comments', 'sonata_type_collection', array('required' => false), array('edit'=> 'inline', 'inline'=> 'table', 'admin_code' => 'sonata.admin.comments'))
                ->end()
                ->with('Dependency')
                    //->add('project', 'sonata_type_model_list',array('by_reference' => false, 'data' => ''),array('admin_code' => 'sonata.admin.project'))
                    ->add('project', 'sonata_type_model_list',array('btn_add' => false, 'btn_delete' => false),array('admin_code' => 'sonata.admin.project'))
                    ->add('state', 'sonata_type_model_list', array('btn_add' => false, 'btn_delete' => false), array('admin_code' => 'sonata.admin.state'))
                    ->add('priority', 'sonata_type_model_list', array('btn_add' => false, 'btn_delete' => false),array('admin_code' => 'sonata.admin.priority'))
                    //->add('author', 'sonata_type_model_list', array(), array('admin_code' => 'sonata.admin.user'))
                    ->add('inChargeOf', 'sonata_type_model_list', array(), array('admin_code' => 'sonata.admin.user'))
                    ->add('attachment', 'sonata_type_model_list', array('required' => false), array('admin_code' => 'sonata.media.admin.gallery'))
                ->end()
        ;
        
//       $formMapper->getFormBuilder()->addEventListener(
//                                FormEvents::PRE_SUBMIT, function(FormEvent $event) {
//                                                                   if ($this->securityContext->isGranted('ROLE_ADMIN'))
//                                                                   {
//                                                                      
//                                                                       $comment = $event->getdata();
//                                                                      $formMapper->create($comment, null, array())
//                                                                            //->add('application', 'sonata_type_model')
//                                                                            ->add('description','sizannia_editor_type', array('label' => 'Comments'))
//                                                                            ->add('isEnable', 'checkbox', array('required' => false, 'label' => 'Enable'));  
//                                                                   }
//                                                                  
//                                            }
//                                                                       
//                                                            
//                                       );
//        
        
        
        
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('name')
                ->add('author')
                ->add('inChargeOf')
                //->add('date')
                ->add('priority')
                ->add('project')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('date')
            ->add('isEnable', 'checkbox', array('label' => 'Enabled'))
            ->add('author')
            ->add('inChargeOf')
            ->add('project')
            ->add('priority')
            ->add('state')
        ;
    }
    
    public function getSecurityContext()
    {
        return $this->securityContext;
    }
    
     public function setSecurityContext(SecurityContext $securityContext)
    {
        $this->securityContext = $securityContext;
        return $this;
    }
}