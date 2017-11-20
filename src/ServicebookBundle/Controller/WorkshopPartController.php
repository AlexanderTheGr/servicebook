<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;

class WorkshopPartController extends Main {

    var $repository = 'ServicebookBundle:WorkshopPart';

    /**
     * @Route("/servicebook/workshopPart/servicebook/workshopPart")
     */
    public function indexAction() {

        return $this->render('ServicebookBundle:WorkshopPart:index.html.twig', array(
                    'pagename' => $this->getTranslation('WorkshopPart'),
                    'url' => '/servicebook/workshopPart/getdatatable',
                    'view' => '/servicebook/workshopPart/view',
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/workshopPart/view/{id}")
     */
    public function viewAction($id) {
        $buttons = array();
        $content = $this->gettabs($id);
        //$content = $this->getoffcanvases($id);
        $content = $this->content();
        $pagename = "Vin";
        $breadcrumb = array();
        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $pagename = "Worshop: (" . $entity->getName() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshopPart/view/' . $id . '">' . $pagename . '</a>';
        }
        //$content = $this->gettabs($id);
        //$content = $this->content();
        return $this->render('ServicebookBundle:WorkshopPart:view.html.twig', array(
                    'pagename' => $this->getTranslation('WorkshopPart'),
                    'url' => '/servicebook/workshopPart/save',
                    'supplierid' => $id,
                    'content' => $content,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'tabs' => $this->gettabs($id),
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/workshopPart/save")
     */
    public function savection() {
        $this->save();
        $json = json_encode(array("ok"));
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

    /**
     * @Route("/servicebook/workshopPart/gettab")
     */
    public function gettabs($id) {


        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($id);
        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\WorkshopPart;
            $this->newentity[$this->repository] = $entity;
        }
        $fields["code"] = array("label" => $this->getTranslation("Code"));
        $fields["name"] = array("label" => $this->getTranslation("WorkshopPart Name"));

        $forms = $this->getFormLyFields($entity, $fields);

        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));
        
        $json = $this->tabs();
        return $json;
    }

    /**
     * @Route("/servicebook/workshopPart/getdatatable")
     */
    public function getdatatableAction(Request $request) {
        $this->repository = 'ServicebookBundle:WorkshopPart';

        $this->addField(array("name" => "ID", "index" => 'id', "active" => "active"))
                ->addField(array("name" => $this->getTranslation("Code"), "index" => 'code'))
                ->addField(array("name" => $this->getTranslation("Name"), "index" => 'name'));
        $json = $this->datatable();
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

}
