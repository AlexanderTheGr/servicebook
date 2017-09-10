<?php

namespace ServicebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ServicebookBundle:Default:index.html.twig', array('name' => $name));
    }
}
