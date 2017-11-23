<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\Workshop as Workshop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class WorkshopServiceActionPartController extends Main {

    var $repository = 'ServicebookBundle:WorkshopServicePart';

    /**
     * @Route("/servicebook/workshop/servicepart/save/{action}")
     */
    public function saveAction($action = false) {
        $this->repository = "ServicebookBundle:WorkshopServicePart";
        $dt = new \DateTime("now");
        $entity = new \ServicebookBundle\Entity\WorkshopServicePart;
        $this->newentity[$this->repository] = $entity;
        $this->initialazeNewEntity($entity);
        $workshopServiceAction = $this->getDoctrine()
                ->getRepository("ServicebookBundle:WorkshopServiceAction")
                ->find($action);

        $this->newentity[$this->repository]->setField("workshopServiceAction", $workshopServiceAction);

        $entities = $this->save();

        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($entities[$this->repository]);

        $entity->setTs($dt);
        $entity->setModified($dt);
        $this->flushpersist($entity);

        $workshopPart = $entity->getWorkshopPart();
        $workshopPart->setPrice($entity->getPrice());
        $this->flushpersist($workshopPart);

        $jsonarr = array();
        if ($entity->getId()) {
            $jsonarr["returnurl"] = "/servicebook/workshop/serviceaction/view/" . $entity->getWorkshopServiceAction()->getId();
        }

        $json = json_encode($jsonarr);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

    /**
     * @Route("/servicebook/workshop/servicepart/view/{id}/{action}")
     */
    public function viewAction($id, $action = false) {
        $this->repository = "ServicebookBundle:WorkshopServicePart";
        $buttons = array();
        $content = $this->gettabs($id);
        //$content = $this->getoffcanvases($id);
        $pagename = "Part";
        $breadcrumb = array();

        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $action = $entity->getWorkshopServiceAction()->getId();
            $pagename = "Part (" . $entity->getBrand()->getBrand() . "  " . $entity->getPart() . " " . $entity->getCode() . ")";

            //$pagename = 'Action: (' . $entity->getAction() . ')';
            $workshoppagenane = "Workshop (" . $entity->getWorkshopServiceAction()->getWorkshopService()->getWorkshop()->getName() . ")";
            $servicepagenane = "Service: (" . $entity->getWorkshopServiceAction()->getWorkshopService()->getService() . ")";
            $serviceactionpagename = 'Action: (' . $entity->getWorkshopServiceAction()->getAction() . ')';
            $breadcrumb = array();
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/view/' . $entity->getWorkshopServiceAction()->getWorkshopService()->getWorkshop()->getId() . '">' . $workshoppagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/service/view/' . $entity->getWorkshopServiceAction()->getWorkshopService()->getWorkshop()->getId() . '/' . $entity->getWorkshopServiceAction()->getWorkshopService()->getBrandService()->getId() . '">' . $servicepagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/serviceaction/view/' . $entity->getWorkshopServiceAction()->getId() . '/' . $entity->getWorkshopServiceAction()->getWorkshopService()->getId() . '">' . $serviceactionpagename . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/servicepart/view/' . $id . '/' . $action . '">' . $pagename . '</a>';
        } else {
            $entity = $this->getDoctrine()
                    ->getRepository("ServicebookBundle:WorkshopServiceAction")
                    ->find($action);
            $service = $entity->getWorkshopService()->getId();

            $serviceactionpagename = 'Action: (' . $entity->getAction() . ')';
            $workshoppagenane = "Workshop (" . $entity->getWorkshopService()->getWorkshop()->getName() . ")";
            $servicepagenane = "Service: (" . $entity->getWorkshopService()->getService() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/view/' . $entity->getWorkshopService()->getWorkshop()->getId() . '">' . $workshoppagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/service/view/' . $entity->getWorkshopService()->getId() . '/' . $entity->getWorkshopService()->getWorkshop()->getId() . '">' . $servicepagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/serviceaction/view/' . $action . '/' . $service . '">' . $serviceactionpagename . '</a>';
            $breadcrumb[] = "New Part";
            $pagename = 'New Part';
        }
        $content = $this->content();
        return $this->render('ServicebookBundle:Workshop:view.html.twig', array(
                    'pagename' => $pagename,
                    'breadcrumb' => implode(" / ", $breadcrumb),
                    'url' => '/servicebook/workshop/servicepart/save/' . $action,
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    public function gettabs($id) {
        $this->repository = "ServicebookBundle:WorkshopServicePart";
        $entity = $this->getDoctrine()
                ->getRepository("ServicebookBundle:WorkshopServicePart")
                ->find($id);

        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\WorkshopServicePart;
            $this->newentity[$this->repository] = $entity;
        }
        $dataarray[] = array("value" => "0", "name" => "Oxi");
        $dataarray[] = array("value" => "1", "name" => "Ναι");

        $fields["part"] = array("label" => "Part", "disabled" => true, 'required' => true);
        //$fields["brand"] = array("label" => "Brand", 'required' => true);
        $fields["brand"] = array("label" => "Brand", "disabled" => true, 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Brand', 'name' => 'brand', 'value' => 'id'));

        $fields["code"] = array("label" => "Code", "disabled" => true, 'required' => true);
        //$fields["details"] = array("label" => "Details", "type" => "textarea");
        //$fields["brand"] = array("label" => "Brand", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Brand', 'name' => 'brand', 'value' => 'id'));
        //$fields["user"] = array("label" => "User", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:User', 'name' => 'name', 'value' => 'id'));
        //$fields["brandWorkshop:id"] = array("label" => "Name");
        //$fields["brandWorkshop"] = array("label" => "Brand Workshop", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Workshop', 'name' => 'workshop', 'value' => 'id'));
        $fields["price"] = array("label" => "Price", 'required' => true);
        $fields["comments"] = array("label" => "Comments", "type" => "textarea");

        $forms = $this->getFormLyFields($entity, $fields);

        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));

        $json = $this->tabs();
        //echo json_encode($json);
        return $json;
    }

    /**
     * @Route("/servicebook/workshop/getserviceparts/{id}/{service}")
     */
    public function getservicepartsAction($id, $service = false) {
        $session = new Session();

        if ($id > 0) {
            foreach ($session->get('params_gettabs_' . $id) as $param) {
                $this->addField($param);
            }
        } else {
            foreach ($session->get('params_gettabs2_' . $service) as $param) {
                $this->addField($param);
            }            
        }

        $this->repository = 'ServicebookBundle:WorkshopServicePart';
        $this->q_and[] = $this->prefix . ".workshopServiceAction = '" . $id . "'";
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

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
