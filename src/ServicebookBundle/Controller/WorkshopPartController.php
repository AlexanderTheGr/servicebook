<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\WorkshopPart as WorkshopPart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class WorkshopPartController extends Main {

    var $repository = 'ServicebookBundle:WorkshopPart';

    /**
     * @Route("/servicebook/workshopPart/servicebook/workshopPart")
     */
    public function indexAction() {

        return $this->render('ServicebookBundle:Workshop:index.html.twig', array(
                    'pagename' => $this->getTranslation('WorkshopPart'),
                    'url' => '/servicebook/workshopPart/getdatatable',
                    'view' => '/servicebook/workshopPart/view',
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/workshopPart/view/{id}/{workshop}")
     */
    public function viewAction($id, $workshop = false) {
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
            //$pagename = "Worshop: (" . $entity->getWorkshop()->getName() . ")";
            $pagename = "Part (" . $entity->getBrand()->getBrand() . "  " . $entity->getPart() . " " . $entity->getCode() . ")";
            $workshop = $entity->getWorkshop()->getId();
            $workshoppagenane = "Workshop: (" . $entity->getWorkshop()->getName() . ")";

            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/view/' . $workshop . '">' . $workshoppagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshopPart/view/' . $id . '">' . $pagename . '</a>';
            //$breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/service/view/' . $workshop . '/' . $service . '">' . $pagename . '</a>';            
        } else {
            $entity = $this->getDoctrine()
                    ->getRepository('ServicebookBundle:Workshop')
                    ->find($workshop);

            $workshoppagenane = "Workshop: (" . $entity->getName() . ")";
            //$workshop = $workshop->getId();
            $breadcrumb[] = 'New Part';
            $pagename = 'New Part';
        }
        //$content = $this->gettabs($id);
        //$content = $this->content();
        return $this->render('ServicebookBundle:Workshop:view.html.twig', array(
                    'pagename' => $pagename,
                    'breadcrumb' => implode(" / ", $breadcrumb),
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

        $dataarray[] = array("value" => "0", "name" => "Oxi");
        $dataarray[] = array("value" => "1", "name" => "Ναι");

        $fields["part"] = array("label" => "Part", 'required' => true);
        //$fields["brand"] = array("label" => "Brand", 'required' => true);
        $fields["brand"] = array("label" => "Brand", "disabled" => false, 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Brand', 'name' => 'brand', 'value' => 'id'));

        $fields["code"] = array("label" => "Code", 'required' => true);

        $fields["price"] = array("label" => "Price", 'required' => true);
        $fields["comments"] = array("label" => "Comments", "type" => "textarea");

        $forms = $this->getFormLyFields($entity, $fields);

        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));

        $json = $this->tabs();
        //echo json_encode($json);
        return $json;
    }

    /**
     * @Route("/servicebook/workshopPart/getparts/{id}")
     */
    public function getservicepartsAction($id) {
        $session = new Session();
        foreach ($session->get('params_gettabs2_' . $id) as $param) {
            $this->addField($param);
        }
        $this->repository = 'ServicebookBundle:WorkshopPart';
        $this->q_and[] = $this->prefix . ".workshop = '" . $id . "'";
        $json = $this->datatable();

        $datatable = json_decode($json);
        $datatable->data = (array) $datatable->data;
        foreach ((array) $datatable->data as $key => $table) {
            $table = (array) $table;
            $table1 = array();
            foreach ($table as $f => $val) {
                $table1[$f] = $val;
            }
            $datatable->data[$key] = $table1;
        }
        $json = json_encode($datatable);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

}
