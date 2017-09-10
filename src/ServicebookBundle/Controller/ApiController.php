<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;

class ApiController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ServicebookBundle:Default:index.html.twig', array('name' => $name));
    }
}
