<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\WorkshopService as WorkshopService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use ServicebookBundle\Entity\WorkshopServicePart as WorkshopServicePart;

class WorkshopServiceController extends Main {

    var $repository = 'ServicebookBundle:WorkshopService';

    /**
     * @Route("/servicebook/workshopservice/servicebook/workshopservice")
     */
    public function indexAction() {

        return $this->render('ServicebookBundle:Workshop:index.html.twig', array(
                    'pagename' => $this->getTranslation('WorkshopService'),
                    'url' => '/servicebook/workshopservice/getdatatable',
                    'view' => '/servicebook/workshopservice/view',
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/workshop/service/view/{id}/{workshop}")
     */
    public function viewAction($id, $workshop = false) {
        $buttons = array();
        $content = $this->gettabs($id, $workshop);
        //$content = $this->getoffcanvases($id);
        //$content = $this->content();
        $pagename = "Vin";
        $breadcrumb = array();

        if ($id > 0) {
            /*
              $entity = $this->getDoctrine()
              ->getRepository($this->repository)
              ->find($id);
              $pagename = "Worshop: (" . $entity->getName() . ")";
              $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshopservice/view/' . $id . '">' . $pagename . '</a>';
             * 
             */
        }
        //$content = $this->gettabs($id);
        //$content = $this->content();
        return $this->render('ServicebookBundle:Workshop:view.html.twig', array(
                    'pagename' => $this->getTranslation('WorkshopService'),
                    'url' => '/servicebook/workshopservice/save',
                    'supplierid' => $id,
                    'content' => $content,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'tabs' => $this->gettabs($id, $workshop),
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/workshopservice/save")
     */
    public function savection() {
        $this->save();
        $json = json_encode(array("ok"));
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

    /**
     * @Route("/servicebook/workshopservice/gettab")
     */
    public function gettabs($workshop, $service) {
        $service = $this->getDoctrine()
                        ->getRepository('ServicebookBundle:BrandService')->find($service);
        $workshop = $this->getDoctrine()
                        ->getRepository('ServicebookBundle:Workshop')->find($workshop);

        /*
          echo count($service->getActions()) . ",";
          foreach ($service->getActions() as $action) {
          echo "[".count($action->getParts())."]";
          foreach ($action->getParts() as $brandServicePart) {
          echo "{[".$brandServicePart->getId()."]}";
          }
          }
         */
        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->findOneBy(array('workshop' => $workshop, 'brandService' => $service));
        //exit;
        if (!$entity) {
            $dt = new \DateTime("now");
            $entity = new \ServicebookBundle\Entity\WorkshopService;
            $entity->setBrandService($service);
            $entity->setWorkshop($workshop);
            $entity->setService($service->getService());
            $entity->setModel($service->getModel());
            $entity->setKm($service->getKm());
            $entity->setDetails($service->getDetails());
            $entity->setTs($dt);
            $entity->setModified($dt);
            $entity->setCreated($dt);
            $this->flushpersist($entity);
            foreach ($service->getActions() as $action) {
                $workshopServiceAction = new \ServicebookBundle\Entity\WorkshopServiceAction;
                $workshopServiceAction->setBrandServiceAction($action);
                $workshopServiceAction->setWorkshopService($entity);
                $workshopServiceAction->setAction($action->getAction());
                $workshopServiceAction->setDetails($action->getDetails());
                $workshopServiceAction->setManhour($action->getManhour());
                $workshopServiceAction->setTs($dt);
                $workshopServiceAction->setModified($dt);
                $workshopServiceAction->setCreated($dt);
                $this->flushpersist($workshopServiceAction);
                foreach ($action->getParts() as $brandServicePart) {
                    $workshopPart = $this->getDoctrine()
                            ->getRepository('ServicebookBundle:WorkshopPart')
                            ->findOneBy(array('workshop' => $workshop, 'brand' => $brandServicePart->getBrand(), 'code' => $brandServicePart->getCode()));
                    if (!$workshopPart) {
                        $workshopPart = new \ServicebookBundle\Entity\WorkshopPart;
                        $workshopPart->setBrand($brandServicePart->getBrand());
                        $workshopPart->setCode($brandServicePart->getCode());
                        $workshopPart->setPart($brandServicePart->getPart());
                        $workshopPart->setWorkshop($workshop);
                        $workshopPart->setTs($dt);
                        $workshopPart->setModified($dt);
                        $workshopPart->setCreated($dt);
                        $this->flushpersist($workshopPart);
                    }
                    $workshopServicePart = new WorkshopServicePart;
                    $workshopServicePart->setBrandServicePart($brandServicePart);
                    $workshopServicePart->setWorkshopServiceAction($workshopServiceAction);
                    $workshopServicePart->setBrand($brandServicePart->getBrand());
                    $workshopServicePart->setCode($brandServicePart->getCode());
                    $workshopServicePart->setPart($brandServicePart->getPart());
                    $workshopServicePart->setWorkshopPart($workshopPart);
                    $workshopServicePart->setTs($dt);
                    $workshopServicePart->setModified($dt);
                    $workshopServicePart->setCreated($dt);
                    $this->flushpersist($workshopServicePart);
                }
            }
            $this->newentity[$this->repository] = $entity;
        }

        $dataarray[] = array("value" => "0", "name" => "Oxi");
        $dataarray[] = array("value" => "1", "name" => "Ναι");

        $fields["service"] = array("label" => "Service", "disabled" => true, 'required' => true);
        $fields["km"] = array("label" => "Km", "disabled" => true, 'required' => true);
        $fields["details"] = array("label" => "Details", "disabled" => true, "type" => "textarea");


        $forms = $this->getFormLyFields($entity, $fields);

        if ($entity) {
            $dtparams[] = array("name" => "ID", "index" => 'id', "active" => "active");
            $dtparams[] = array("name" => "Title", "index" => 'action');
            $dtparams[] = array("name" => "Manhour", "index" => 'manhour');
            //$dtparams[] = array("name" => "Code", "index" => 'code');
            //$dtparams[] = array("name" => "Price", "index" => 'storeWholeSalePrice');
            $params['dtparams'] = $dtparams;
            $params['id'] = $dtparams;
            $params['url'] = '/servicebook/workshop/getserviceactions/' . $id;
            $params['view'] = '/servicebook/workshop/serviceaction/view';
            $params['viewnew'] = '/servicebook/workshop/serviceaction/view/new/' . $id;

            $params['key'] = 'gettabs_' . $id;
            $params["ctrl"] = 'ctrlgettabs';
            $params["app"] = 'appgettabs';
            $datatables[] = $this->contentDatatable($params);
        }

        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));

        if ($id > 0 AND count($entity) > 0) {
            $tabs[] = array("title" => $this->getTranslation("Actions"), "datatables" => $datatables, "form" => '', "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => false);
        }
        foreach ((array) $tabs as $tab) {
            $this->addTab($tab);
        }





        $json = $this->tabs();
        //echo json_encode($json);
        return $json;
    }

    /**
     * @Route("/servicebook/workshopservice/getparts/{id}")
     */
    public function getservicepartsAction($id) {
        $session = new Session();
        foreach ($session->get('params_gettabs_' . $id) as $param) {
            $this->addField($param);
        }
        $this->repository = 'ServicebookBundle:WorkshopService';
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
