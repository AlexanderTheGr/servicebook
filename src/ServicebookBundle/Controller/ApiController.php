<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\User as User;

class ApiController extends Main {

    public function indexAction($name) {
        return $this->render('ServicebookBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * 
     * 
     * @Route("/api/brands")
     */
    public function getBrands(Request $request) {
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

    /**
     * 
     * 
     * @Route("/api/fblogin")
     */
    public function fblogin(Request $request) {
        
        $params = array();
        $content = $request->getContent();
        $headers = $request->headers->all();
        if (!empty($content)) {
            $params = json_decode($content, true); // 2nd param to get as array
        }
        $data["status"] = "ok";
        //$data["data"] = $arr;
        $out["data"] = $data;
        $out["params"] = $params;
        $out["content"] = $content;
        $out["headers"] = $headers;
        file_put_contents("logs/fblogin.log", print_r($out,true));
        $json = json_encode($data);
        
        $user = $this->getDoctrine()
                ->getRepository("ServicebookBundle:User")
                ->findOneBy(array("key" => $params["id"]));
        $token = "autoeinaienatoken";//$this->generateRandomString(20);
        if(!$user) {   
            $user = new User;
            $user->setEmail($params["email"]);
            $user->setName($params["name"]);
        } else {
            $this->generateRandomString(20);
            $user->setToken($token);
            $this->flushpersist($category);
        }
        return new Response(
                $json, 200, array('Content-Type' => 'application/json','token'=>$token)
        );        
    }

}
