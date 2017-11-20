<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\BrandVin as BrandVin;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class BrandVinKmController extends Main {

    var $repository = "ServicebookBundle:BrandVinKm";

    /**
     * @Route("/servicebook/brandvin/km/save/{vin}")
     */
    public function saveAction($vin = false) {
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
     * @Route("/servicebook/brandvin/km/view/{id}/{vin}")
     */
    public function viewAction($id, $vin = false) {
        $this->repository = "ServicebookBundle:BrandVinKm";
        $buttons = array();
        $content = $this->getkmtabs($id);
        //$content = $this->getoffcanvases($id);
        $pagename = "KM";
        if ($id > 0) {
            $entity = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->find($id);
            $vin = $entity->getBrandVin()->getId();

            $pagename = "KM: (" . $entity->getService() . ")";
        }
        $content = $this->content();
        return $this->render('ServicebookBundle:BrandVin:view.html.twig', array(
                    'pagename' => $pagename,
                    'url' => '/servicebook/brandvin/km/save/' . $vin,
                    'buttons' => $buttons,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'content' => $content,
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    public function getkmtabs($id) {
        $this->repository = "ServicebookBundle:BrandVinKm";
        $entity = $this->getDoctrine()
                ->getRepository("ServicebookBundle:BrandVinKm")
                ->find($id);

        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\BrandServicePart;
            $this->newentity[$this->repository] = $entity;
        }
        $dataarray[] = array("value" => "0", "name" => "Oxi");
        $dataarray[] = array("value" => "1", "name" => "Ναι");

        $fields["km"] = array("label" => "Km", 'required' => true);
        //$fields["brand"] = array("label" => "Brand", 'required' => true);
        //$fields["km"] = array("label" => "Brand", "disabled" => false, 'type' => "select", "required" => true, 'datasource' => array('repository' => 'ServicebookBundle:Brand', 'name' => 'brand', 'value' => 'id'));
        //$fields["code"] = array("label" => "Code", 'required' => true);
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
     * @Route("/servicebook/brandvin/getkm/{id}")
     */
    public function getkmAction($id) {
        $session = new Session();
        foreach ($session->get('params_gettabs2_' . $id) as $param) {
            $this->addField($param);
        }
        $this->repository = 'ServicebookBundle:BrandVinKm';
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

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
