<?php

// src\Serialken\BugTrackerBundle\Controller

namespace Serialken\BugTrackerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\httpFoundation\response;
//use Sonata\AdminBundle\Controller\CRUDController as Controller;

class BugTrackerController extends Controller
{
    public function homeAction()
    {
        return $this->render('SerialkenBugTrackerBundle:BugTracker:home.html.twig');
    }
}