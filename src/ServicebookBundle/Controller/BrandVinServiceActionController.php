<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\BrandVin as BrandVin;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class BrandVinServiceActionController extends Main {
    
    var $repository = "ServicebookBundle:BrandServiceAction";

    /**
     * @Route("/servicebook/brandvin/serviceaction/save/{service}")
     */
    public function saveAction($service = false) {
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
     * @Route("/servicebook/brandvin/serviceaction/view/{id}/{service}")
     */
    public function viewAction($id, $service = false) {
        $this->repository = "ServicebookBundle:BrandServiceAction";
        $buttons = array();
        $content = $this->gettabs($id);
        //$content = $this->getoffcanvases($id);
        $pagename = 'Actions';
        $breadcrumb = array();
        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $service = $entity->getBrandService()->getId();

            $pagename = 'Action: (' . $entity->getAction() . ')';
            $vinpagenane = "Vin (" . $entity->getBrandService()->getBrandVin()->getVin() . ")";
            $servicepagenane = "Service: (" . $entity->getBrandService()->getService() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/view/' . $entity->getBrandService()->getBrandVin()->getId() . '">' . $vinpagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/service/view/' . $entity->getBrandService()->getId() . '/' . $entity->getBrandService()->getBrandVin()->getId() . '">' . $servicepagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/serviceaction/view/' . $id . '/' . $service . '">' . $pagename . '</a>';
        } else {
            $entity = $this->getDoctrine()
                    ->getRepository("ServicebookBundle:BrandService")
                    ->find($service);
            $vin = $entity->getBrandVin()->getId();

            $servicepagenane = "Service: (" . $entity->getService() . ")";
            $vinpagenane = "Vin: (" . $entity->getBrandVin()->getVin() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/view/' . $vin . '">' . $vinpagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/service/view/' . $service . '/' . $vin . '">' . $servicepagenane . '</a>';
            $breadcrumb[] = 'New Action';
            $pagename = 'New Action';
        }
        $content = $this->content();
        return $this->render('ServicebookBundle:BrandVin:view.html.twig', array(
                    'pagename' => $pagename,
                    'breadcrumb' => implode(" / ", $breadcrumb),
                    'url' => '/servicebook/brandvin/serviceaction/save/' . $service,
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    public function gettabs($id) {
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
            $dtparams[] = array("name" => "Brand", "index" => 'brand:brand', 'type' => 'select', 'object' => 'Brand');
            ;
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

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
