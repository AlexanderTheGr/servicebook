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
     * @Route("/servicebook/brandvin/service/view/{id}/{vin}")
     */
    public function serviceAction($id, $vin = false) {
        $this->repository = "ServicebookBundle:BrandService";
        $buttons = array();
        $content = $this->getservicetabs($id);
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

}

?>
