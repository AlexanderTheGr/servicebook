<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\BrandVin as BrandVin;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class BrandVinServiceController extends Main {

    var $repository = "ServicebookBundle:BrandService";
    /**
     * @Route("/servicebook/brandvin/service/save/{vin}")
     */
    public function saveAction($vin = false) {
        $this->repository = "ServicebookBundle:BrandService";
        $dt = new \DateTime("now");
        $entity = new \ServicebookBundle\Entity\BrandService;
        $this->newentity[$this->repository] = $entity;
        $this->initialazeNewEntity($entity);
        $this->newentity[$this->repository]->setField("status", 1);
        $brandVin = $this->getDoctrine()
                ->getRepository("ServicebookBundle:BrandVin")
                ->find($vin);
        $this->newentity[$this->repository]->setField("brandVin", $brandVin);

        $entities = $this->save();

        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($entities[$this->repository]);

        $entity->setTs($dt);
        $entity->setModified($dt);
        $this->flushpersist($entity);

        $jsonarr = array();
        if ($entity->getId()) {
            $jsonarr["returnurl"] = "/servicebook/brandvin/view/" . $entity->getBrandVin()->getId();
        }

        $json = json_encode($jsonarr);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

    /**
     * @Route("/servicebook/brandvin/service/view/{id}/{vin}")
     */
    public function viewAction($id, $vin = false) {
        $this->repository = "ServicebookBundle:BrandService";
        $buttons = array();
        $content = $this->gettabs($id);
        //$content = $this->getoffcanvases($id);
        $pagename = "Service";
        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $vin = $entity->getBrandVin()->getId();

            $pagename = "Service: (" . $entity->getService() . ")";
            $vinpagenane = "Vin: (" . $entity->getBrandVin()->getVin() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/view/' . $vin . '">' . $vinpagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/service/view/' . $id . '/' . $vin . '">' . $pagename . '</a>';
        } else {

            $entity = $this->getDoctrine()
                    ->getRepository('ServicebookBundle:BrandVin')
                    ->find($vin);
            $vinpagenane = "Vin: (" . $entity->getVin() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/view/' . $vin . '">' . $vinpagenane . '</a>';
            $breadcrumb[] = 'New Service';
            $pagename = 'New Service';
        }
        $content = $this->content();
        return $this->render('ServicebookBundle:BrandVin:view.html.twig', array(
                    'pagename' => $pagename,
                    'breadcrumb' => implode(" / ", $breadcrumb),
                    'url' => '/servicebook/brandvin/service/save/' . $vin,
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/brandvin/getservices/{id}")
     */
    public function getservicesAction($id) {
        $session = new Session();
        foreach ($session->get('params_gettabs_' . $id) as $param) {
            $this->addField($param);
        }
        $this->repository = 'ServicebookBundle:BrandService';
        $this->q_and[] = $this->prefix . ".brandVin = '" . $id . "'";
        $json = $this->datatable();

        $datatable = json_decode($json);
        $datatable->data = (array) $datatable->data;
        foreach ($datatable->data as $key => $table) {
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
    /**
     * @Route("/servicebook/brandvin/getservicesforworkshop/{id}")
     */
    public function getservicesforworkshop($id) {
        $session = new Session();
        foreach ($session->get('params_gettabs_' . $id) as $param) {
            $this->addField($param);
        }
        $this->repository = 'ServicebookBundle:BrandService';
        //$this->q_and[] = $this->prefix . ".brandVin = '" . $id . "'";
        $json = $this->datatable();

        $datatable = json_decode($json);
        $datatable->data = (array) $datatable->data;
        foreach ($datatable->data as $key => $table) {
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

    public function gettabs($id) {
        $this->repository = "ServicebookBundle:BrandService";
        $entity = $this->getDoctrine()
                ->getRepository("ServicebookBundle:BrandService")
                ->find($id);

        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\BrandService;
            $this->newentity[$this->repository] = $entity;
        }
        $dataarray[] = array("value" => "0", "name" => "Oxi");
        $dataarray[] = array("value" => "1", "name" => "Ναι");
        $fields["confirmed"] = array("label" => "Confirmed", 'type' => "select", 'dataarray' => $dataarray, "required" => false, "className" => "col-md-3 col-sm-3");

        $fields["service"] = array("label" => "Service", 'required' => true);
        $fields["km"] = array("label" => "Km", 'required' => true);
        $fields["details"] = array("label" => "Details", "type" => "textarea");
        //$fields["brand"] = array("label" => "Brand", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Brand', 'name' => 'brand', 'value' => 'id'));
        //$fields["user"] = array("label" => "User", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:User', 'name' => 'name', 'value' => 'id'));
        //$fields["brandVin:id"] = array("label" => "Name");
        //$fields["brandVin"] = array("label" => "Brand Vin", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:BrandVin', 'name' => 'vin', 'value' => 'id'));

        $forms = $this->getFormLyFields($entity, $fields);

        if ($id > 0 AND count($entity) > 0) {
            
            
            $dtparams[] = array("name" => "ID", "index" => 'id', "active" => "active");
            $dtparams[] = array("name" => "Title", "index" => 'action');
            $dtparams[] = array("name" => "Manhour", "index" => 'manhour');
            //$dtparams[] = array("name" => "Code", "index" => 'code');
            //$dtparams[] = array("name" => "Price", "index" => 'storeWholeSalePrice');
            $params['dtparams'] = $dtparams;
            $params['id'] = $dtparams;
            $params['url'] = '/servicebook/brandvin/getserviceactions/' . $id;
            $params['view'] = '/servicebook/brandvin/serviceaction/view';
            $params['viewnew'] = '/servicebook/brandvin/serviceaction/view/new/' . $id;
           
            $params['key'] = 'gettabs_' . $id;
            $params["ctrl"] = 'ctrlgettabs';
            $params["app"] = 'appgettabs';
            $datatables[] = $this->contentDatatable($params);
   
            
            $dtparams2[] = array("name" => "ID", "index" => 'id', "active" => "active");
            $dtparams2[] = array("name" => "Workshop", "index" => 'workshop:name');
            $dtparams2[] = array("name" => "Price", 'function' => 'calculateTotalPrice');
            //$dtparams2[] = array("name" => "Manhour", "index" => 'manhour');
            //$dtparams[] = array("name" => "Code", "index" => 'code');
            //$dtparams[] = array("name" => "Price", "index" => 'storeWholeSalePrice');
            $params2['dtparams'] = $dtparams2;
            $params2['id'] = $dtparams2;
            $params2['url'] = '/servicebook/brandvin/getserviceworkshops/' . $id;
            //$params['view'] = '/servicebook/brandvin/serviceaction/view';
            //$params['viewnew'] = '/servicebook/brandvin/serviceaction/view/new/' . $id;
           
            $params2['key'] = 'gettabs2_' . $id;
            $params2["ctrl"] = 'ctrlgettabs2';
            $params2["app"] = 'appgettabs2';
            $datatables2[] = $this->contentDatatable($params2);      
            
            
            
        }
        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));

        if ($id > 0 AND count($entity) > 0) {
            $tabs[] = array("title" => $this->getTranslation("Actions"), "datatables" => $datatables, "form" => '', "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => false);
            $tabs[] = array("title" => $this->getTranslation("Workshop"), "datatables" => $datatables2, "form" => '', "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => false);
        
            
        }
        foreach ((array) $tabs as $tab) {
            $this->addTab($tab);
        }

        $json = $this->tabs();
        //echo json_encode($json);
        return $json;
    }
    /**
     * @Route("/servicebook/brandvin/getserviceworkshops/{id}")
     */
    public function getserviceworkshops($id) {
        $session = new Session();
        foreach ($session->get('params_gettabs2_' . $id) as $param) {
            $this->addField($param);
        }
        $this->repository = 'ServicebookBundle:WorkshopService';
        $this->q_and[] = $this->prefix . ".brandService = '" . $id . "'";
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

?>
