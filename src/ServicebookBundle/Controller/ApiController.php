<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;

class ApiController extends Main {

    public function indexAction($name) {
        return $this->render('ServicebookBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * 
     * 
     * @Route("/api/getBrands")
     */
    public function getProducts(Request $request) {
        //$allowedips = $this->getSetting("ServicebookBundle:Api:Allowedips");
        // $allowedipsArr = explode(",", $allowedips);
        //if (in_array($_SERVER["REMOTE_ADDR"], $allowedipsArr)) {
        $sql = "SELECT reference, brand_str FROM  `servicebook_brand` where enable = 1 and reference > 0";
        $connection = $this->getDoctrine()->getConnection();
        $statement = $connection->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();
        $arr = array();
        foreach ($results as $data) {
            $arr[] = $data;
        }
        $data = array();
        $data["status"] = "ok";
        $data["data"] = $arr;
        $json = json_encode($data);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
        //} else {
        //    exit;
        //}
    }

}
