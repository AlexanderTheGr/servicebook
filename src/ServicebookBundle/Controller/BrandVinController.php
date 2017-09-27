<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\BrandVin as BrandVin;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class BrandVinController extends Main {

    var $repository = 'ServicebookBundle:BrandVin';
    var $newentity = '';

    /**
     * @Route("/servicebook/brandvin/brandvin")
     */
    public function indexAction() {
        return $this->render('ServicebookBundle:BrandVin:index.html.twig', array(
                    'pagename' => 'BrandVins',
                    'url' => '/servicebook/brandvin/getdatatable',
                    'view' => '/servicebook/brandvin/view',
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/brandvin/view/{id}")
     */
    public function viewAction($id) {
        $buttons = array();
        $content = $this->gettabs($id);
        //$content = $this->getoffcanvases($id);
        $content = $this->content();
        return $this->render('ServicebookBundle:BrandVin:view.html.twig', array(
                    'pagename' => 's',
                    'url' => '/servicebook/brandvin/save',
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/brandvin/save")
     */
    public function saveAction() {
        $entity = new \ServicebookBundle\Entity\BrandVin;
        $this->newentity[$this->repository] = $entity;
        $this->initialazeNewEntity($entity);
        $this->newentity[$this->repository]->setField("status", 1);
        $out = $this->save();
        $jsonarr = array();
        if ($this->newentity[$this->repository]->getId()) {
            $jsonarr["returnurl"] = "/servicebook/brandvin/view/" . $this->newentity[$this->repository]->getId();
        }
        $json = json_encode($jsonarr);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

    /**
     * @Route("/brandvin/gettab")
     */
    public function gettabs($id) {


        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($id);

        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\BrandVin;
            $this->newentity[$this->repository] = $entity;
        }

        $fields["brandvinname"] = array("label" => "BrandVin", 'required' => true);
        $fields["password"] = array("label" => "Password", 'required' => false);
        $fields["firstname"] = array("label" => "First Name");
        $fields["lastname"] = array("label" => "Last Name");
        //$fields["brandvinName"] = array("label" => "Name");

        $forms = $this->getFormLyFields($entity, $fields);

        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));
        $json = $this->tabs();
        return $json;
    }

    /**
     * @Route("/servicebook/brandvin/getdatatable")
     */
    public function getdatatableAction(Request $request) {
        $this->repository = 'ServicebookBundle:BrandVin';

        $this->addField(array("name" => "ID", "index" => 'id', "active" => "active"))
                ->addField(array("name" => "Vin", "index" => 'km'))
                ->addField(array("name" => "Brand", "index" => 'Brand:brand'))
                ->addField(array("name" => "User", "index" => 'User:name'))
              
        ;
        $json = $this->datatable();
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

}
