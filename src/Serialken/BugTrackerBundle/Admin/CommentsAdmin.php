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
//use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
//use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
//use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use Symfony\Component\Security\Core\SecurityContext;



class CommentsAdmin extends Admin
{
  /**
   * @var SecurityContext
   */
    private $securityContext;
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
            //$user = $this->securityContext->getToken()->getUser()->getUsername();
             //$user = $this->securityContext->getToken()->getUser();
             //die(var_dump($user));
//         die(var_dump('toto est la'));

            $author = $this->securityContext->getToken()->getUser();
            if ($this->isGranted('CREATE'))
            {
             $formMapper
                          //->add('application', 'sonata_type_model')
                          ->add('author', 'sonata_type_model_hidden', array())
                           ->add('description','sizannia_editor_type', array('label' => 'Comments'))
                           ->add('isEnable', 'checkbox', array('required' => false, 'label' => 'Enable'))
                    ;    
            }
            
                          $formMapper->getFormBuilder()->addEventListener(
                                FormEvents::PRE_SUBMIT, function(FormEvent $event) use ($author, $formMapper){
                                                                 
                                                                       $event->setData($author);
                                                                       $comment = $event->getdata();
                                                                       //$form = $event->getForm();
                                                                       //$comment->setAuthor($author);
                                                                       //die(var_dump($comment));
                                                                   $formMapper->create($comment, null, array());
//                                                                            ->add('author', 'sonata_type_model_list')
//                                                                            ->add('description','sizannia_editor_type', array('label' => 'Comments'))
//                                                                            ->add('isEnable', 'checkbox', array('required' => false, 'label' => 'Enable'));  
                                                                   
                                                                  
                                            }
                                                                       
                                                            
                                       );
            
            
            
            
            
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('application')
//            ->add('name')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('description')
            ->add('isEnable', 'checkbox', array('label' => 'Enabled'))
            ->add('application')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
    
   
    
    public function setSecurityContext(SecurityContext $securityContext)
    {
        $this->securityContext = $securityContext;
        return $this;
    }
}