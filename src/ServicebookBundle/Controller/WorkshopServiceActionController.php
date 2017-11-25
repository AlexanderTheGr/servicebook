<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\Workshop as Workshop;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class WorkshopServiceActionController extends Main {
    
    var $repository = "ServicebookBundle:WorkshopServiceAction";

    /**
     * @Route("/servicebook/workshop/serviceaction/save/{service}")
     */
    public function saveAction($service = false) {
        $this->repository = "ServicebookBundle:WorkshopServiceAction";
        $dt = new \DateTime("now");
        $entity = new \ServicebookBundle\Entity\WorkshopServiceAction;
        $this->newentity[$this->repository] = $entity;
        $this->initialazeNewEntity($entity);
        $workshopService = $this->getDoctrine()
                ->getRepository("ServicebookBundle:WorkshopService")
                ->find($service);

        $this->newentity[$this->repository]->setField("workshopService", $workshopService);

        $entities = $this->save();

        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($entities[$this->repository]);

        $entity->setTs($dt);
        $entity->setModified($dt);
        $this->flushpersist($entity);

        $jsonarr = array();
        if ($entity->getId()) {
            $jsonarr["returnurl"] = "/servicebook/workshop/service/view/" . $entity->getWorkshopService()->getId();
        }

        $json = json_encode($jsonarr);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

    /**
     * @Route("/servicebook/workshop/serviceaction/view/{id}/{service}")
     */
    public function viewAction($id, $service = false) {
        $this->repository = "ServicebookBundle:WorkshopServiceAction";
        $buttons = array();
        $content = $this->gettabs($id);
        //$content = $this->getoffcanvases($id);
        $pagename = 'Actions';
        $breadcrumb = array();
        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $service = $entity->getWorkshopService()->getId();

            $pagename = 'Action: (' . $entity->getAction() . ')';
            $workshoppagenane = "Workshop (" . $entity->getWorkshopService()->getWorkshop()->getName() . ")";
            $servicepagenane = "Service: (" . $entity->getWorkshopService()->getService() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/view/' . $entity->getWorkshopService()->getWorkshop()->getId() . '">' . $workshoppagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/service/view/' . $entity->getWorkshopService()->getWorkshop()->getId() . '/' . $entity->getWorkshopService()->getBrandService()->getId() . '">' . $servicepagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/serviceaction/view/' . $id . '/' . $service . '">' . $pagename . '</a>';
        } else {
            $entity = $this->getDoctrine()
                    ->getRepository("ServicebookBundle:WorkshopService")
                    ->find($service);
            $workshop = $entity->getWorkshop()->getId();

            $servicepagenane = "Service: (" . $entity->getService() . ")";
            $workshoppagenane = "Workshop: (" . $entity->getWorkshop()->getName() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/view/' . $workshop . '">' . $workshoppagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/service/view/' . $service . '/' . $workshop . '">' . $servicepagenane . '</a>';
            $breadcrumb[] = 'New Action';
            $pagename = 'New Action';
        }
        $content = $this->content();
        return $this->render('ServicebookBundle:Workshop:view.html.twig', array(
                    'pagename' => $pagename,
                    'breadcrumb' => implode(" / ", $breadcrumb),
                    'url' => '/servicebook/workshop/serviceaction/save/' . $service,
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    public function gettabs($id) {
        $this->repository = "ServicebookBundle:WorkshopServiceAction";
        $entity = $this->getDoctrine()
                ->getRepository("ServicebookBundle:WorkshopServiceAction")
                ->find($id);

        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\WorkshopServiceAction;
            $this->newentity[$this->repository] = $entity;
        }
        $dataarray[] = array("value" => "0", "name" => "Oxi");
        $dataarray[] = array("value" => "1", "name" => "Ναι");

        $fields["action"] = array("label" => "Action", "disabled" => true,'required' => true);
        $fields["manhour"] = array("label" => "Manhours","disabled" => true, 'required' => true);
        $fields["details"] = array("label" => "Details", "disabled" => true, 'required' => true, "type" => "textarea");
        $fields["comments"] = array("label" => "Comments",  "type" => "textarea");
        //$fields["details"] = array("label" => "Details", "type" => "textarea");
        //$fields["brand"] = array("label" => "Brand", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Brand', 'name' => 'brand', 'value' => 'id'));
        //$fields["user"] = array("label" => "User", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:User', 'name' => 'name', 'value' => 'id'));
        //$fields["brandWorkshop:id"] = array("label" => "Name");
        //$fields["brandWorkshop"] = array("label" => "Brand Workshop", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Workshop', 'name' => 'workshop', 'value' => 'id'));

        $forms = $this->getFormLyFields($entity, $fields);
        if ($id > 0 AND count($entity) > 0) {
            $dtparams[] = array("name" => "ID", "index" => 'id', "active" => "active");
            $dtparams[] = array("name" => "Title", "index" => 'part');
            $dtparams[] = array("name" => "Brand", "index" => 'brand:brand', 'type' => 'select', 'object' => 'Brand');         
            $dtparams[] = array("name" => "Code", "index" => 'code');
            
            $dtparams[] = array("name" => "Aftermarket Brand", "index" => 'aftermarketBrand:name'); 
            
            $dtparams[] = array("name" => "Aftermarket Code", "index" => 'aftermarketCode');
            
            $dtparams[] = array("name" => "Price", "index" => 'price');
            //$dtparams[] = array("name" => "Price", "index" => 'storeWholeSalePrice');
            $params['dtparams'] = $dtparams;
            $params['id'] = $dtparams;
            $params['url'] = '/servicebook/workshop/getserviceparts/' . $id;
            $params['view'] = '/servicebook/workshop/servicepart/view';
            $params['viewnew'] = '/servicebook/workshop/servicepart/view/new/' . $id;

            $params['key'] = 'gettabs_' . $id;
            $params["ctrl"] = 'ctrlgettabs';
            $params["app"] = 'appgettabs';
            $datatables[] = $this->contentDatatable($params);
        }
        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));

        if ($id > 0 AND count($entity) > 0) {
            $tabs[] = array("title" => $this->getTranslation("Parts"), "datatables" => $datatables, "form" => '', "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => false);
        }
        foreach ((array) $tabs as $tab) {
            $this->addTab($tab);
        }
        $json = $this->tabs();
        //echo json_encode($json);
        return $json;
    }

    /**
     * @Route("/servicebook/workshop/getserviceactions/{id}")
     */
    public function getserviceactionsAction($id) {
        $session = new Session();
        foreach ($session->get('params_gettabs_' . $id) as $param) {
            $this->addField($param);
        }
        $this->repository = 'ServicebookBundle:WorkshopServiceAction';
        $this->q_and[] = $this->prefix . ".workshopService = '" . $id . "'";
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
