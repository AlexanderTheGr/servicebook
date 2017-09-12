<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\User as User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class UserController extends Main {

    var $repository = 'ServicebookBundle:User';
    var $newentity = '';

    /**
     * @Route("/servicebook/user/user")
     */
    public function indexAction() {
        return $this->render('ServicebookBundle:User:index.html.twig', array(
                    'pagename' => 'Users',
                    'url' => '/servicebook/user/getdatatable',
                    'view' => '/servicebook/user/view',
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }
    /**
     * @Route("/servicebook/user/view/{id}")
     */
    public function viewAction($id) {
        $buttons = array();
        $content = $this->gettabs($id);
        //$content = $this->getoffcanvases($id);
        $content = $this->content();
        return $this->render('ServicebookBundle:User:view.html.twig', array(
                    'pagename' => 's',
                    'url' => '/servicebook/user/save',
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/user/save")
     */
    public function saveAction() {
        $entity = new \ServicebookBundle\Entity\User;
        $this->newentity[$this->repository] = $entity;
        $this->initialazeNewEntity($entity);
        $this->newentity[$this->repository]->setField("status", 1);
        $out = $this->save();
        $jsonarr = array();
        if ($this->newentity[$this->repository]->getId()) {
            $jsonarr["returnurl"] = "/servicebook/user/view/" . $this->newentity[$this->repository]->getId();
        }
        $json = json_encode($jsonarr);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

    /**
     * @Route("/user/gettab")
     */
    public function gettabs($id) {


        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($id);

        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\User;
            $this->newentity[$this->repository] = $entity;
        }

        $fields["user"] = array("label" => "User");
        //$fields["userName"] = array("label" => "Name");

        $forms = $this->getFormLyFields($entity, $fields);

        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));
        $json = $this->tabs();
        return $json;
    }

    /**
     * @Route("/servicebook/user/getdatatable")
     */
    public function getdatatableAction(Request $request) {
        $this->repository = 'ServicebookBundle:User';

        $this->addField(array("name" => "ID", "index" => 'id', "active" => "active"))
                ->addField(array("name" => "User", "index" => 'user'));
        $json = $this->datatable();
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

}
