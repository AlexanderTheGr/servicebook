<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\BrandVin as BrandVin;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class BrandVinServiceActionPartController extends Main {

    var $repository = 'ServicebookBundle:BrandServicePart';
    /**
     * @Route("/servicebook/brandvin/servicepart/save/{action}")
     */
    public function saveAction($action = false) {
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
     * @Route("/servicebook/brandvin/servicepart/view/{id}/{action}")
     */
    public function viewAction($id, $action = false) {
        $this->repository = "ServicebookBundle:BrandServicePart";
        $buttons = array();
        $content = $this->gettabs($id);
        //$content = $this->getoffcanvases($id);
        $pagename = "Part";
        $breadcrumb = array();

        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $action = $entity->getBrandServiceAction()->getId();
            $pagename = "Part (" . $entity->getBrand()->getBrand() . "  " . $entity->getPart() . " " . $entity->getCode() . ")";

            //$pagename = 'Action: (' . $entity->getAction() . ')';
            $vinpagenane = "Vin (" . $entity->getBrandServiceAction()->getBrandService()->getBrandVin()->getVin() . ")";
            $servicepagenane = "Service: (" . $entity->getBrandServiceAction()->getBrandService()->getService() . ")";
            $serviceactionpagename = 'Action: (' . $entity->getBrandServiceAction()->getAction() . ')';
            $breadcrumb = array();
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/view/' . $entity->getBrandServiceAction()->getBrandService()->getBrandVin()->getId() . '">' . $vinpagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/service/view/' . $entity->getBrandServiceAction()->getBrandService()->getId() . '/' . $entity->getBrandServiceAction()->getBrandService()->getBrandVin()->getId() . '">' . $servicepagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/serviceaction/view/' . $entity->getBrandServiceAction()->getId() . '/' . $entity->getBrandServiceAction()->getBrandService()->getId() . '">' . $serviceactionpagename . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/servicepart/view/' . $id . '/' . $action . '">' . $pagename . '</a>';
        } else {
            $entity = $this->getDoctrine()
                    ->getRepository("ServicebookBundle:BrandServiceAction")
                    ->find($action);
            $service = $entity->getBrandService()->getId();

            $serviceactionpagename = 'Action: (' . $entity->getAction() . ')';
            $vinpagenane = "Vin (" . $entity->getBrandService()->getBrandVin()->getVin() . ")";
            $servicepagenane = "Service: (" . $entity->getBrandService()->getService() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/view/' . $entity->getBrandService()->getBrandVin()->getId() . '">' . $vinpagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/service/view/' . $entity->getBrandService()->getId() . '/' . $entity->getBrandService()->getBrandVin()->getId() . '">' . $servicepagenane . '</a>';
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/brandvin/serviceaction/view/' . $action . '/' . $service . '">' . $serviceactionpagename . '</a>';
            $breadcrumb[] = "New Part";
            $pagename = 'New Part';
        }
        $content = $this->content();
        return $this->render('ServicebookBundle:BrandVin:view.html.twig', array(
                    'pagename' => $pagename,
                    'breadcrumb' => implode(" / ", $breadcrumb),
                    'url' => '/servicebook/brandvin/servicepart/save/' . $action,
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    public function gettabs($id) {
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
        $fields["brand"] = array("label" => "Brand", "disabled" => false, 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Brand', 'name' => 'brand', 'value' => 'id'));

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

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
