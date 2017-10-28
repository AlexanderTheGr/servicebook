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
     * @Route("/servicebook/brandvin/servicepart/save/{action}")
     */
    public function servicepartsaveAction($action = false) {
        $this->repository = "ServicebookBundle:BrandServicePart";
        $dt = new \DateTime("now");
        $entity = new \ServicebookBundle\Entity\BrandServicePart;
        $this->newentity[$this->repository] = $entity;
        $this->initialazeNewEntity($entity);
        $brandServiceAction = $this->getDoctrine()
                ->getRepository("ServicebookBundle:BrandServiceAction")
                ->find($action);

        $this->newentity[$this->repository]->setField("brandServiceAction", $brandServiceAction);

        $entities = $this->save();

        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($entities[$this->repository]);

        $entity->setTs($dt);
        $entity->setModified($dt);
        $this->flushpersist($entity);

        $jsonarr = array();
        if ($entity->getId()) {
            $jsonarr["returnurl"] = "/servicebook/brandvin/serviceaction/view/" . $entity->getBrandServiceAction()->getId();
        }

        $json = json_encode($jsonarr);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

    /**
     * @Route("/servicebook/brandvin/serviceaction/save/{service}")
     */
    public function serviceactionsaveAction($service = false) {
        $this->repository = "ServicebookBundle:BrandServiceAction";
        $dt = new \DateTime("now");
        $entity = new \ServicebookBundle\Entity\BrandServiceAction;
        $this->newentity[$this->repository] = $entity;
        $this->initialazeNewEntity($entity);
        $brandService = $this->getDoctrine()
                ->getRepository("ServicebookBundle:BrandService")
                ->find($service);

        $this->newentity[$this->repository]->setField("brandService", $brandService);

        $entities = $this->save();

        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($entities[$this->repository]);

        $entity->setTs($dt);
        $entity->setModified($dt);
        $this->flushpersist($entity);

        $jsonarr = array();
        if ($entity->getId()) {
            $jsonarr["returnurl"] = "/servicebook/brandvin/service/view/" . $entity->getBrandService()->getId();
        }

        $json = json_encode($jsonarr);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

    /**
     * @Route("/servicebook/brandvin/service/save/{vin}")
     */
    public function servicesaveAction($vin = false) {
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
     * @Route("/servicebook/brandvin/save")
     */
    public function saveAction() {
        $dt = new \DateTime("now");
        $entity = new \ServicebookBundle\Entity\BrandVin;
        $this->newentity[$this->repository] = $entity;
        $this->initialazeNewEntity($entity);
        $this->newentity[$this->repository]->setField("status", 1);
        $entities = $this->save();
        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($entities[$this->repository]);
        $entity->setTs($dt);
        $entity->setModified($dt);
        $this->flushpersist($entity);

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
     * @Route("/servicebook/brandvin/view/{id}")
     */
    public function viewAction($id, $vin = false) {
        $buttons = array();
        $content = $this->gettabs($id);
        //$content = $this->getoffcanvases($id);
        $content = $this->content();
        $pagenane = "Vin";
        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $pagenane = "Vin (".$entity->getVin().")";
        }        
        return $this->render('ServicebookBundle:BrandVin:view.html.twig', array(
                    'pagename' => $pagenane,
                    'url' => '/servicebook/brandvin/save',
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }    

    /**
     * @Route("/servicebook/brandvin/service/view/{id}/{vin}")
     */
    public function serviceAction($id, $vin = false) {
        $this->repository = "ServicebookBundle:BrandService";
        $buttons = array();
        $content = $this->getservicetabs($id);
        //$content = $this->getoffcanvases($id);
        $pagenane = "Service";
        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $vin = $entity->getBrandVin()->getId();
            $pagenane = "Service (".$entity->getService().")";
        }
        $content = $this->content();
        return $this->render('ServicebookBundle:BrandVin:view.html.twig', array(
                    'pagename' => $pagenane,
                    'url' => '/servicebook/brandvin/service/save/' . $vin,
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }
    /**
     * @Route("/servicebook/brandvin/serviceaction/view/{id}/{service}")
     */
    public function serviceactionAction($id, $service = false) {
        $this->repository = "ServicebookBundle:BrandServiceAction";
        $buttons = array();
        $content = $this->getserviceactiontabs($id);
        //$content = $this->getoffcanvases($id);
        $pagename = 'Actions';
        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $service = $entity->getBrandService()->getId();
            $pagename = 'Actions ('.$entity->getAction().')';
        }
        $content = $this->content();
        return $this->render('ServicebookBundle:BrandVin:view.html.twig', array(
                    'pagename' => $pagename,
                    'url' => '/servicebook/brandvin/serviceaction/save/' . $service,
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }
    
    /**
     * @Route("/servicebook/brandvin/servicepart/view/{id}/{action}")
     */
    public function servicepartAction($id, $action = false) {
        $this->repository = "ServicebookBundle:BrandServicePart";
        $buttons = array();
        $content = $this->getserviceparttabs($id);
        //$content = $this->getoffcanvases($id);
        $pagenane = "Part";
        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $action = $entity->getBrandServiceAction()->getId();
            $pagenane = "Part (".$entity->getPart().")";
        }
        $content = $this->content();
        return $this->render('ServicebookBundle:BrandVin:view.html.twig', array(
                    'pagename' => $pagenane,
                    'url' => '/servicebook/brandvin/servicepart/save/' . $action,
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }
 
    
    public function gettabs($id) {

        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($id);

        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\BrandVin;
            $this->newentity[$this->repository] = $entity;
        }
        $dataarray[] = array("value" => "0", "name" => "Oxi");
        $dataarray[] = array("value" => "1", "name" => "Ναι");
        $fields["confirmed"] = array("label" => "Confirmed", 'type' => "select", 'dataarray' => $dataarray, "required" => false, "className" => "col-md-3 col-sm-3");

        $fields["vin"] = array("label" => "Vin", 'required' => true);
        $fields["brand"] = array("label" => "Brand", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Brand', 'name' => 'brand', 'value' => 'id'));
        $fields["user"] = array("label" => "User", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:User', 'name' => 'name', 'value' => 'id'));

        $fields["model"] = array("label" => "Model", 'required' => false);
        $fields["engine"] = array("label" => "Engine");
        $fields["displacement"] = array("label" => "Displacement");
        $fields["fuel"] = array("label" => "Fuel");
        $fields["power"] = array("label" => "Power");
        $fields["doors"] = array("label" => "Doors");
        $fields["details"] = array("label" => "Details", "type" => "textarea");

        //$fields["brandvinName"] = array("label" => "Name");

        $forms = $this->getFormLyFields($entity, $fields);
        if ($id > 0 AND count($entity) > 0) {
            $dtparams[] = array("name" => "ID", "index" => 'id', "active" => "active");
            $dtparams[] = array("name" => "Title", "index" => 'service');
            $dtparams[] = array("name" => "Title", "index" => 'km');
            //$dtparams[] = array("name" => "Price", "index" => 'storeWholeSalePrice');
            $params['dtparams'] = $dtparams;
            $params['id'] = $dtparams;
            $params['url'] = '/servicebook/brandvin/getservices/' . $id;
            $params['view'] = '/servicebook/brandvin/service/view';
            $params['viewnew'] = '/servicebook/brandvin/service/view/new/' . $id;

            $params['key'] = 'gettabs_' . $id;
            $params["ctrl"] = 'ctrlgettabs';
            $params["app"] = 'appgettabs';
            $datatables[] = $this->contentDatatable($params);
        }

        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));
        if ($id > 0 AND count($entity) > 0) {
            $tabs[] = array("title" => $this->getTranslation("Services"), "datatables" => $datatables, "form" => '', "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => false);
        }
        foreach ((array) $tabs as $tab) {
            $this->addTab($tab);
        }
        $json = $this->tabs();
        //echo json_encode($json);
        return $json;
    }
    
    public function getserviceparttabs($id) {
        $this->repository = "ServicebookBundle:BrandServicePart";
        $entity = $this->getDoctrine()
                ->getRepository("ServicebookBundle:BrandServicePart")
                ->find($id);

        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\BrandServicePart;
            $this->newentity[$this->repository] = $entity;
        }
        $dataarray[] = array("value" => "0", "name" => "Oxi");
        $dataarray[] = array("value" => "1", "name" => "Ναι");

        $fields["part"] = array("label" => "Part", 'required' => true);
        //$fields["brand"] = array("label" => "Brand", 'required' => true);
        //$fields["brand"] = array("name" => "Brand", "index" => 'brand:brand', 'type' => 'select', 'object' => 'Brand');
        $fields["code"] = array("label" => "Code", 'required' => true);
        //$fields["details"] = array("label" => "Details", "type" => "textarea");
        //$fields["brand"] = array("label" => "Brand", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Brand', 'name' => 'brand', 'value' => 'id'));
        //$fields["user"] = array("label" => "User", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:User', 'name' => 'name', 'value' => 'id'));
        //$fields["brandVin:id"] = array("label" => "Name");
        //$fields["brandVin"] = array("label" => "Brand Vin", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:BrandVin', 'name' => 'vin', 'value' => 'id'));

        $forms = $this->getFormLyFields($entity, $fields);

        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));

        $json = $this->tabs();
        //echo json_encode($json);
        return $json;
    }


    public function getserviceactiontabs($id) {
        $this->repository = "ServicebookBundle:BrandServiceAction";
        $entity = $this->getDoctrine()
                ->getRepository("ServicebookBundle:BrandServiceAction")
                ->find($id);

        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\BrandServiceAction;
            $this->newentity[$this->repository] = $entity;
        }
        $dataarray[] = array("value" => "0", "name" => "Oxi");
        $dataarray[] = array("value" => "1", "name" => "Ναι");

        $fields["action"] = array("label" => "Action", 'required' => true);
        $fields["manhour"] = array("label" => "Manhours", 'required' => true);
        $fields["details"] = array("label" => "Details", 'required' => true, "type" => "textarea");
        //$fields["details"] = array("label" => "Details", "type" => "textarea");
        //$fields["brand"] = array("label" => "Brand", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Brand', 'name' => 'brand', 'value' => 'id'));
        //$fields["user"] = array("label" => "User", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:User', 'name' => 'name', 'value' => 'id'));
        //$fields["brandVin:id"] = array("label" => "Name");
        //$fields["brandVin"] = array("label" => "Brand Vin", "disabled" => true, "className" => "col-md-6", 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:BrandVin', 'name' => 'vin', 'value' => 'id'));

        $forms = $this->getFormLyFields($entity, $fields);
        if ($id > 0 AND count($entity) > 0) {
            $dtparams[] = array("name" => "ID", "index" => 'id', "active" => "active");
            $dtparams[] = array("name" => "Title", "index" => 'part');
            $dtparams[] = array("name" => "Brand", "index" => 'brand');
            $dtparams[] = array("name" => "Code", "index" => 'code');
            //$dtparams[] = array("name" => "Price", "index" => 'storeWholeSalePrice');
            $params['dtparams'] = $dtparams;
            $params['id'] = $dtparams;
            $params['url'] = '/servicebook/brandvin/getserviceparts/' . $id;
            $params['view'] = '/servicebook/brandvin/servicepart/view';
            $params['viewnew'] = '/servicebook/brandvin/servicepart/view/new/' . $id;

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

    public function getservicetabs($id) {
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
     * @Route("/servicebook/brandvin/getserviceactions/{id}")
     */
    public function getserviceactionsAction($id) {
        $session = new Session();
        foreach ($session->get('params_gettabs_' . $id) as $param) {
            $this->addField($param);
        }
        $this->repository = 'ServicebookBundle:BrandServiceAction';
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

    /**
     * @Route("/servicebook/brandvin/getserviceparts/{id}")
     */
    public function getservicepartsAction($id) {
        $session = new Session();
        foreach ($session->get('params_gettabs_' . $id) as $param) {
            $this->addField($param);
        }
        $this->repository = 'ServicebookBundle:BrandServicePart';
        $this->q_and[] = $this->prefix . ".brandServiceAction = '" . $id . "'";
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
     * @Route("/servicebook/brandvin/getdatatable")
     */
    public function getdatatableAction(Request $request) {
        $this->repository = 'ServicebookBundle:BrandVin';

        $this->addField(array("name" => "ID", "index" => 'id', "active" => "active"))
                ->addField(array("name" => "Vin", "index" => 'vin'))
                ->addField(array("name" => "Km", "index" => 'km'))
                ->addField(array("name" => "Brand", "index" => 'brand:brand', 'type' => 'select', 'object' => 'Brand'))
                ->addField(array("name" => "User", "index" => 'user:name'))
                ->addField(array("name" => "Confirned", "index" => 'confirmed', 'method' => 'yesno'))

        ;
        $json = $this->datatable();
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

}
