<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;
use ServicebookBundle\Entity\User as User;
use ServicebookBundle\Entity\Brand as Brand;
use ServicebookBundle\Entity\BrandVin as BrandVin;

class ApiController extends Main {

    public function indexAction($name) {
        return $this->render('ServicebookBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * 
     * 
     * @Route("/api/getBrands")
     */
    public function getBrands(Request $request) {
        //$allowedips = $this->getSetting("ServicebookBundle:Api:Allowedips");
        // $allowedipsArr = explode(",", $allowedips);
        //if (in_array($_SERVER["REMOTE_ADDR"], $allowedipsArr)) {

        $headers = $request->headers->all();
        $content = $request->getContent();
        $token = str_replace("Bearer ", "", $headers["authorization"][0]);
        $out["headers"] = $headers;
        file_put_contents("logs/getBrands.log", print_r($out, true));

        $user = $this->getDoctrine()
                ->getRepository("ServicebookBundle:User")
                ->findOneBy(array("token" => md5($token)));
        if ($user) {
            $data["status"] = "ok";
        } else {
            $data["status"] = "notok";
            $data["message"] = 'authorization failed';
            $json = json_encode($data);
            return new Response(
                    $json, 403, array('Content-Type' => 'application/json', 'token' => $token)
            );
        }







        $sql = "SELECT reference, brand_str FROM  `servicebook_brand` where enable = 1 and reference > 0";
        $connection = $this->getDoctrine()->getConnection();
        $statement = $connection->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();
        $arr = array();
        foreach ($results as $data) {
            //$arr[] = $data;
            $file = str_replace(" ", "-", strtolower($data["brand_str"]));
            $img = "assets/img/" . $file . ".png";
            if (file_exists($img)) {
                $data["img"] = "http://servicebook.hebs.gr/" . $img;
            }
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
     * @Route("/api/islogin")
     */
    public function isloginAction(Request $request) {
        $headers = $request->headers->all();
        $token = str_replace("Bearer ", "", $headers["authorization"][0]);
        $out["headers"] = $headers;
        file_put_contents("logs/islogin.log", print_r($out, true));

        $user = $this->getDoctrine()
                ->getRepository("ServicebookBundle:User")
                ->findOneBy(array("token" => md5($token)));
        if ($user) {
            $data["status"] = "ok";
            return new Response(
                    $json, 200, array('Content-Type' => 'application/json')
            );
        } else {
            $data["status"] = "notok";
            $data["message"] = 'authorization failed';
            $json = json_encode($data);
            return new Response(
                    $json, 403, array('Content-Type' => 'application/json', 'token' => $token)
            );
        }
    }

    /**
     * 
     * 
     * @Route("/api/logout")
     */
    public function logout(Request $request) {
        $headers = $request->headers->all();
        $token = str_replace("Bearer ", "", $headers["authorization"][0]);
        $out["headers"] = $headers;
        file_put_contents("logs/logout.log", print_r($out, true));

        $user = $this->getDoctrine()
                ->getRepository("ServicebookBundle:User")
                ->findOneBy(array("token" => md5($token)));
        if ($user) {
            $user->setToken("");
            $token = $user->getToken();
            $this->flushpersist($user);
            $data["status"] = "ok";
            $json = json_encode($data);
            return new Response(
                    $json, 200, array('Content-Type' => 'application/json')
            );
        } else {
            $data["status"] = "notok";
            $data["message"] = 'authorization failed';
            $json = json_encode($data);
            return new Response(
                    $json, 403, array('Content-Type' => 'application/json', 'token' => $token)
            );
        }
    }

    /**
     * 
     * 
     * @Route("/api/fblogin")
     */
    public function fblogin(Request $request) {


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
        file_put_contents("logs/fblogin.log", print_r($out, true));


        if (count($params) < 3 OR $params["id"] == '' OR $params["email"] == '' OR $params["name"] == '') {
            $data["status"] = "notok";
            $data["message"] = 'no valid params';
            $json = json_encode($data);
            return new Response(
                    $json, 403, array('Content-Type' => 'application/json', 'token' => $token)
            );
        }

        // $params[name] = "Paris Giannoukos";
        //$params[email] = "p.giannoukos@gmail.com";
        //$params[id] = "10155421885890266";

        $user = $this->getDoctrine()
                ->getRepository("ServicebookBundle:User")
                ->findOneBy(array("key" => $params["id"]));
        $token = "autoeinaienatoken"; //$this->generateRandomString(20);

        if (!$user) {
            $user = new User;
            $token = $this->generateRandomString(20);
            $user->setEmail($params["email"]);
            $user->setKey($params["id"]);
            $user->setName($params["name"]);
            $user->setUsername($params["name"]);
            $user->setPassword(md5($token));
            $user->setToken($token);
            @$this->flushpersist($user);
        } else {
            $token = $this->generateRandomString(20);
            $user->setName($params["name"]);
            $user->setEmail($params["email"]);
            $user->setToken(md5($token));
            //$token = $user->getToken();
            $this->flushpersist($user);
        }
        $data["status"] = "ok";
        $json = json_encode($data);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json', 'token' => $token)
        );
    }

    /**
     * 
     * 
     * @Route("/api/getvins")
     */
    public function getvins(Request $request) {
        
        
        $headers = $request->headers->all();
        $content = $request->getContent();
        $token = str_replace("Bearer ", "", $headers["authorization"][0]);
        $out["headers"] = $headers;
        file_put_contents("logs/setvin.log", print_r($out, true));

        //$token = "RFu0SQxidTYgmY9yJni8";

        $user = $this->getDoctrine()
                ->getRepository("ServicebookBundle:User")
                ->findOneBy(array("token" => md5($token)));
        
        $user = $this->getDoctrine()
                ->getRepository("ServicebookBundle:User")
                ->find(8);


        if ($user) {
            $data["status"] = "ok";
        } else {
            $data["status"] = "notok";
            //$data["token"] = md5($token);
            $data["message"] = 'authorization failed';
            $json = json_encode($data);
            return new Response(
                    $json, 403, array('Content-Type' => 'application/json', 'token' => $token)
            );
        }        
                
        $sql = "SELECT a.*, b.brand_str, b.reference FROM  `servicebook_brand_vin` a,`servicebook_brand` b  where b.id = a.brand AND user = '".$user->getId()."' order by a.id desc";
        echo $sql;
        $vins = $this->executeSql($sql);
        $arr = array();
        foreach ($vins as $vin) {
            $file = str_replace(" ", "-", strtolower($data["brand_str"]));
            $img = "assets/img/" . $file . ".png";
            if (file_exists($img)) {
                $vin["img"] = "http://servicebook.hebs.gr/" . $img;
            }
            $vin["services"] = array();            
            $sql = "select * from servicebook_brand_service where brand_vin = '".$vin["id"]."'";
            $services = $this->executeSql($sql);            
            foreach ($services as $service) {
                $service["actions"] = array();
                $sql = "select * from servicebook_brand_action where brand_service = '".$service["id"]."'";
                $actions = $this->executeSql($sql);
                foreach ($actions as $action) {
                    $sql = "select * from servicebook_brand_part where brand_service_action = '".$action["id"]."'";
                    $parts = $this->executeSql($sql);
                    $action["parts"] = $parts;
                    $service["actions"][] = $action;
                }          
                $vin["services"][] = $service;
            }
            $arr[] = $vin;            
        }
        $data = array();
        $data["status"] = "ok";
        $data["data"] = $arr;
        $json = json_encode($data);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }
    
    function executeSql($sql) {
        $connection = $this->getDoctrine()->getConnection();
        $statement = $connection->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();
        
    }

    /**
     * 
     * 
     * @Route("/api/setvin")
     */
    public function setvin(Request $request) {

        $headers = $request->headers->all();
        $content = $request->getContent();
        $token = str_replace("Bearer ", "", $headers["authorization"][0]);
        $out["headers"] = $headers;
        file_put_contents("logs/setvin.log", print_r($out, true));

        //$token = "RFu0SQxidTYgmY9yJni8";

        $user = $this->getDoctrine()
                ->getRepository("ServicebookBundle:User")
                ->findOneBy(array("token" => md5($token)));

        if ($user) {
            $data["status"] = "ok";
        } else {
            $data["status"] = "notok";
            //$data["token"] = md5($token);
            $data["message"] = 'authorization failed';
            $json = json_encode($data);
            return new Response(
                    $json, 403, array('Content-Type' => 'application/json', 'token' => $token)
            );
        }

        if (!empty($content)) {
            $params = json_decode($content, true); // 2nd param to get as array
        }

        $data["status"] = "ok";
        //$data["data"] = $arr;
        $out["data"] = $data;
        $out["params"] = $params;
        $out["content"] = $content;
        $out["headers"] = $headers;
        file_put_contents("logs/setvin.log", print_r($out, true));

        if (count($params) < 2 OR $params["vin"] == '' OR $params["brand"] == '') {
            $data["status"] = "notok";
            $data["message"] = 'no valid params';
            $json = json_encode($data);
            return new Response(
                    $json, 403, array('Content-Type' => 'application/json', 'token' => $token)
            );
        }

        $BrandVin = $this->getDoctrine()
                ->getRepository("ServicebookBundle:BrandVin")
                ->findOneBy(array("vin" => $params["vin"], "user" => $user));

        if (!$BrandVin) {
            $BrandVin = $this->getDoctrine()
                    ->getRepository("ServicebookBundle:BrandVin")
                    ->findOneBy(array("vin" => $params["vin"]));
            if ($BrandVin) {
                $data["status"] = "notok";
                $data["message"] = 'vin exists from another user';
                $json = json_encode($data);
                return new Response(
                        $json, 403, array('Content-Type' => 'application/json', 'token' => $token)
                );
            } else {
                $brand = $this->getDoctrine()
                        ->getRepository("ServicebookBundle:Brand")
                        ->findOneBy(array("reference" => $params["brand"]));
                $BrandVin = new BrandVin;
                $BrandVin->setUser($user);
                $BrandVin->setVin($params["vin"]);
                $BrandVin->setKm($params["km"]);
                $BrandVin->setBrand($brand);
                $this->flushpersist($BrandVin);
            }
        } else {
            $BrandVin->setKm($params["km"]);
            $this->flushpersist($BrandVin);
        }

        $data["status"] = "ok";
        $json = json_encode($data);
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

}
