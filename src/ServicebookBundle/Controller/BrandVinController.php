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
     * @Route("/servicebook/brandvin/km/save/{vin}")
     */
    public function kmsaveAction($vin = false) {
        $this->repository = "ServicebookBundle:BrandVinKm";
        $dt = new \DateTime("now");
        $entity = new \ServicebookBundle\Entity\BrandVinKm;
        $this->newentity[$this->repository] = $entity;
        $this->initialazeNewEntity($entity);
        //$this->newentity[$this->repository]->setField("status", 1);
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
        $pagename = "Vin";
        $breadcrumb = array();
        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $pagename = "Vin: (" . $entity->getVin() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/view/' . $id . '">' . $pagename . '</a>';
        }

        return $this->render('ServicebookBundle:BrandVin:view.html.twig', array(
                    'pagename' => $pagename,
                    'breadcrumb' => implode(" / ", $breadcrumb),
                    'url' => '/servicebook/brandvin/save',
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
            $dtparams[] = array("name" => "KM", "index" => 'km');
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

            $dtparams2 = array();
            $dtparams2[] = array("name" => "ID", "index" => 'id', "active" => "active");
            $dtparams2[] = array("name" => "Date", 'datetime' => 'Y-m-d', "index" => 'ts');
            $dtparams2[] = array("name" => "KM", "index" => 'km');
            //$dtparams[] = array("name" => "Price", "index" => 'storeWholeSalePrice');
            $params2['dtparams'] = $dtparams2;
            $params2['id'] = $dtparams2;
            $params2['url'] = '/servicebook/brandvin/getkm/' . $id;
            $params2['view'] = '/servicebook/brandvin/km/view';
            $params2['viewnew'] = '/servicebook/brandvin/km/view/new/' . $id;

            $params2['key'] = 'gettabs2_' . $id;
            $params2["ctrl"] = 'ctrlgettabs2';
            $params2["app"] = 'appgettabs2';
            $datatables2[] = $this->contentDatatable($params2);
        }

        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));
        if ($id > 0 AND count($entity) > 0) {
            $tabs[] = array("title" => $this->getTranslation("ΚΜ"), "datatables" => $datatables2, "form" => '', "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => false);
            $tabs[] = array("title" => $this->getTranslation("Services"), "datatables" => $datatables, "form" => '', "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => false);
        }
        foreach ((array) $tabs as $tab) {
            $this->addTab($tab);
        }
        $json = $this->tabs();
        //echo json_encode($json);
        return $json;
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
