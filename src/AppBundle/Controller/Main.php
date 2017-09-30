<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Console\Application as Application;
use Symfony\Component\Console\Input\ArrayInput as ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput as BufferedOutput;
use AppBundle\Entity\Setting as Setting;
use AppBundle\Entity\Translation as Translation;

class Main extends Controller {

    var $fields = array();
    var $tabs = array();
    var $repository;
    var $prefix = 'p';
    var $q_or = array();
    var $q_and = array();
    var $where;
    var $select;
    var $orderBy;
    var $rmd;

    function __construct() {
        
    }

    public function content() {
        $data["tabs"] = $this->tabs;
        @$data["offcanvases"] = $this->offcanvases;
        return $data;
    }

    public function tabs() {
        $data["tabs"] = $this->tabs;
        return $data;
    }

    public function offcanvases() {
        $data["offcanvases"] = $this->offcanvases;
        return $data;
    }

    public function collection($repository) {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
                'SELECT  ' . $this->select . '
                                FROM ' . $repository . ' ' . $this->prefix . '
                                ' . $this->where
        );
        //exit;
        return $query->getResult();
    }

    public function datatable($funct = false) {
        ini_set("memory_limit", "1256M");
        $request = Request::createFromGlobals();


        $recordsTotal = 0;
        $recordsFiltered = 0;
        //$this->q_or = array();
        //$this->q_and = array();

        $s = array();
        if ($request->request->get("length")) {
            $em = $this->getDoctrine()->getManager();

            $doctrineConfig = $em->getConfiguration();
            $doctrineConfig->addCustomStringFunction('FIELD', 'DoctrineExtensions\Query\Mysql\Field');

            $dt_order = $request->request->get("order");
            $dt_search = $request->request->get("search");
            $dt_columns = $request->request->get("columns");
            $recordsTotal = $em->getRepository($this->repository)->recordsTotal();
            $fields = array();
            foreach ($this->fields as $index => $field) {
                if (@$field["index"]) {
                    $fields[] = $field["index"];
                    $field_relation = explode(":", $field["index"]);
                    if (count($field_relation) == 1) {
                        if ($this->clearstring($dt_search["value"]) != "") {
                            $this->q_or[] = $this->prefix . "." . $field["index"] . " LIKE '%" . $this->clearstring($dt_search["value"]) . "%'";
                        }
                        if (@$field["method"] == 'yesno') {
                            if (@$this->clearstring($dt_columns[$index]["search"]["value"]) == "0") {
                                $this->q_and[] = "(" . $this->prefix . "." . $this->fields[$index]["index"] . " = 0 OR " . $this->prefix . "." . $this->fields[$index]["index"] . " IS NULL)";
                            }
                            if (@$this->clearstring($dt_columns[$index]["search"]["value"]) == "1") {
                                $this->q_and[] = $this->prefix . "." . $this->fields[$index]["index"] . " > '0'";
                            }
                        } else {
                            if (@$this->clearstring($dt_columns[$index]["search"]["value"]) != "") {
                                $this->q_and[] = $this->prefix . "." . $this->fields[$index]["index"] . " LIKE '%" . $this->clearstring($dt_columns[$index]["search"]["value"]) . "%'";
                            }
                        }
                        $s[] = $this->prefix . "." . $field_relation[0];
                    } else {



                        if ($dt_search["value"] === true) {
                            if ($this->clearstring($dt_search["value"]) != "") {
                                $this->q_or[] = $this->prefix . "." . $field_relation[0] . " = '" . $this->clearstring($dt_search["value"]) . "'";
                            }
                        }
                        if (@$this->clearstring($dt_columns[$index]["search"]["value"]) != "") {
                            $field_relation = explode(":", $this->fields[$index]["index"]);
                            $this->q_and[] = $this->prefix . "." . $field_relation[0] . " = '" . $this->clearstring($dt_columns[$index]["search"]["value"]) . "'";
                            //$s[] = $this->prefix . "." . $field_relation[0];  
                        }
                    }
                }
            }

            $this->createWhere();
            $this->createOrderBy($fields, $dt_order);
            $this->createSelect($s);
            $select = count($s) > 0 ? implode(",", $s) : $this->prefix . ".*";

            $recordsFiltered = $em->getRepository($this->repository)->recordsFiltered($this->where);



            $query = $em->createQuery(
                            'SELECT  ' . $this->select . '
                                FROM ' . $this->repository . ' ' . $this->prefix . '
                                ' . $this->where . '
                                ORDER BY ' . $this->orderBy
                    )
                    ->setMaxResults($request->request->get("length"))
                    ->setFirstResult($request->request->get("start"));
            $results = $query->getResult();

            //echo count($results);
        }
        $data["fields"] = $this->fields;
        $jsonarr = array();
        $r = explode(":", $this->repository);

        foreach (@(array) $results as $result) {
            $json = array();
            //$obj = $em->getRepository($this->repository)->find($result["id"]);
            foreach ($data["fields"] as $field) {
                if (@$field["index"]) {
                    $field_relation = explode(":", $field["index"]);
                    //if (@$field["method"]) {
                    //$entity->getField($field)->format('Y-m-d');
                    if (count($field_relation) > 1) {
                        $obj = $em->getRepository($this->repository)->find($result["id"]);
                        foreach ($field_relation as $relation) {
                            if ($obj)
                                $obj = $obj->getField($relation);
                        }
                        $val = $obj;
                    } else {
                        $val = $result[$field["index"]];
                    }
                    if (@$field["method"]) {
                        $method = $field["method"] . "Method";
                        $json[] = $this->$method($val);
                    } elseif (@$field["datetime"]) {
                        $val = $val->format($field["datetime"]);
                        $json[] = $val;
                    } else {
                        if (@$field["input"]) {
                            $json[] = "<input id='" . str_replace(":", "", $this->repository) . ucfirst($field["index"]) . "_" . $result["id"] . "' data-id='" . $result["id"] . "' class='" . str_replace(":", "", $this->repository) . ucfirst($field["index"]) . " " . $field["class"] . "' type='" . $field["input"] . "' value='" . $val . "'>";
                        } else {
                            $json[] = $val;
                        }
                    }
                } elseif (@$field["function"]) {
                    $obj = $em->getRepository($this->repository)->find($result["id"]);
                    $func = $field["function"];
                    //$obj = $em->getRepository($this->repository)->find($result["id"]);
                    $val = $obj->$func(count($results));
                    if (@$field["input"]) {
                        @$json[] = "<input id='" . str_replace(":", "", $this->repository) . ucfirst($field["index"]) . "_" . $result["id"] . "' data-id='" . $result["id"] . "' class='" . str_replace(":", "", $this->repository) . ucfirst($field["index"]) . " " . $field["class"] . "' type='" . $field["input"] . "' value='" . $val . "'>";
                    } else {
                        $json[] = $val;
                    }
                }
            }
            $json["DT_RowClass"] = "dt_row_" . strtolower($r[1]);
            $json["DT_RowId"] = 'dt_id_' . strtolower($r[1]) . '_' . $result["id"];
            $jsonarr[] = $json;
        }
        if ($funct) {
            $jsonarrnoref = array();
            if (count($jsonarr)) {
                $jsonarr = $this->$funct($jsonarr);
                $jsonarr = array_merge($jsonarr, $jsonarrnoref);
            }
        }


        $data["data"] = $jsonarr;
        $data["recordsTotal"] = $recordsTotal;
        $data["recordsFiltered"] = $recordsFiltered;
        return json_encode($data);
    }

    function yesnoMethod($value) {
        return $value > 0 ? "YES" : "NO";
    }

    function clearstring2($string) {
        return addslashes(str_replace(array("'"), "", trim($string)));
    }

    function clearstring($search) {
        $search = str_replace(" ", "", trim($search));
        $search = str_replace(".", "", $search);
        $search = str_replace("-", "", $search);
        $search = str_replace("/", "", $search);
        $search = str_replace("*", "", $search);
        $search = strtoupper($search);
        return $search;
    }

    function createSelect($s = array()) {
        foreach ($s as $v => $f) {
            //$s[$v] = "IDENTITY(".$f.")";
        }
        $this->select = count($s) > 0 ? implode(",", $s) : $this->prefix . ".*";
    }

    function createWhere() {
        $this->where = count($this->q_or) > 0 ? " WHERE (" . implode(" OR ", $this->q_or) . ")" : " WHERE " . $this->prefix . ".id > 0";
        $this->where = count($this->q_and) > 0 ? $this->where . " AND (" . implode(" AND ", $this->q_and) . ")" : $this->where;
        return $this->where;
    }

    function createOrderBy($fields, $dt_order) {
        $bundle = explode(":", $this->repository);
        $field_order = explode(":", $fields[$dt_order[0]["column"]]);
        if (count($field_order) > 1) {
            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
                    'SELECT  ' . $this->prefix . '.id
                                FROM ' . $bundle[0] . ':' . $field_order[0] . ' ' . $this->prefix . '
                                ORDER BY ' . $this->prefix . '.' . $field_order[1]
            );
            $results = $query->getResult();
            foreach ($results as $res) {
                $d[] = $res["id"];
            }
            if ($d) {
                $fei = implode(",", $d);
            }
            $this->orderBy = "FIELD(" . $this->prefix . "." . $field_order[0] . "," . $fei . ")" . " " . $dt_order[0]["dir"] . ' '; //$this->prefix . '.' . $field_order[0] . ' ' . $dt_order[0]["dir"] . ' ';
        } elseif ($field_order[0]) {
            $this->orderBy = $this->prefix . '.' . $field_order[0] . ' ' . $dt_order[0]["dir"] . ' ';
        } else {
            $this->orderBy = $this->prefix . '.id desc';
        }
        return $this->orderBy;
    }

    function addField($field = array()) {
        $field["name"] = $this->getTranslation($field["name"]);
        $bundle = explode(":", $this->repository);
        if (@$field["type"] == "select" AND 1 == 2) {
            $field["content"] = '<input class="style-primary-bright form-control search_init" type="radio" />';
        } elseif (@$field["index"]) {
            $field_order = explode(":", $field["index"]);
            if (@$field["method"] == "yesno") {
                $field["content"] = '<select class="style-primary-bright form-control search_init">';
                $field["content"] .= '<option value="">'.$this->getTranslation("All").'</option>';

                $field["content"] .= '<option value="0">'.$this->getTranslation("No").'</option>';
                $field["content"] .= '<option value="1">'.$this->getTranslation("Yes").'</option>';

                $field["content"] .= '</select>';
            } elseif (count($field_order) > 1 AND @ $field["type"] == "select") {
                $em = $this->getDoctrine()->getManager();
                $object = @ $field["object"] ? $field["object"] : ucfirst($field_order[0]);
                $query = $em->createQuery(
                        'SELECT  ' . $this->prefix . '.id, ' . $this->prefix . '.' . $field_order[1] . '
                                FROM ' . $bundle[0] . ':' . $object . ' ' . $this->prefix . '
                                ORDER BY ' . $this->prefix . '.' . $field_order[1]
                );
                $results = $query->getResult();
                $field["content"] = '<select class="style-primary-bright form-control search_init">';
                $field["content"] .= '<option value="">'.$this->getTranslation("Select").'</option>';
                foreach ($results as $result) {
                    $field["content"] .= '<option value="' . $result["id"] . '">' . $result[$field_order[1]] . '</option>';
                }
                $field["content"] .= '</select>';
            } else {
                $field["content"] = '<input class="style-primary-bright form-control search_init" type="text" />';
            }
        }

        $this->fields[] = $field;
        //print_r($this->fields);
        //echo "<BR>";
        return $this;
    }

    function addTab($tab = array()) {
        $this->tabs[] = $tab;
        return $this;
    }

    function addOffCanvas($offcanvas = array()) {
        $this->offcanvases[] = $offcanvas;
        return $this;
    }

    function contentDatatable($params) {
        $session = new Session();
        $session->set('params_' . $params['key'], $params['dtparams']);
        foreach ($params['dtparams'] as $param) {
            $fields[] = array('content' => $param["name"], 'input' => @$param["input"]);
        }
        $datatable = array(
            'url' => $params['url'], // '/order/getitems/' . $id,
            'fields' => $fields,
            'drawCallback' => @$params["drawCallback"],
            'view' => @$params["view"],
            'ctrl' => @$params["ctrl"] ? $params["ctrl"] : $this->generateRandomString(),
            'app' => @$params["app"] ? $params["app"] : $this->generateRandomString());
        return $datatable;
    }

    function generateRandomString($length = 15) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function datatableAction($ctrl = "", $app = "", $url = "") {
        if ($ctrl != 'none')
            return $this->render('elements/datatable.twig', array(
                        'url' => $url,
                        'ctrl' => $ctrl,
                        'app' => $app,
                        'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
            ));
        return new Response();
    }

    public function tabAction($ctrl, $app, $url, $action) {
        return $this->form($ctrl, $app, $url, $action);
    }

    public function tabsAction($ctrl, $app, $url, $tabs) {
        $tabs = (array) json_decode($tabs);
        return $this->render('elements/tabs.twig', array(
                    'pagename' => '',
                    'url' => $url,
                    'ctrl' => $ctrl,
                    'app' => $app,
                    'tabs' => $tabs,
                    'type' => '',
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    public function contentjsonAction($ctrl, $app, $url, $content) {
        return $this->render('elements/contentjson.twig', array(
                    'pagename' => '',
                    'url' => $url,
                    'ctrl' => $ctrl,
                    'app' => $app,
                    'content' => $content,
                    'type' => '',
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    public function contentAction($ctrl, $app, $url, $content) {


        return $this->render('elements/content.twig', array(
                    'pagename' => '',
                    'url' => $url,
                    'ctrl' => $ctrl,
                    'app' => $app,
                    'content' => $content,
                    'type' => '',
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    public function offCanvasAction($ctrl, $app, $url, $offcanvases) {
        $tabs = (array) json_decode($offcanvases);
        return $this->render('elements/offcanvas.twig', array(
                    'pagename' => '',
                    'url' => $url,
                    'ctrl' => $ctrl,
                    'app' => $app,
                    'offcanvases' => $offcanvases,
                    'type' => '',
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    function formLybase64() {
        $json = json_encode(array("ok"));
        $content = $this->get("request")->getContent();
        $data = json_decode($content);
        $post = array();
        foreach ($data->data as $key64 => $val64) {
            $post[base64_decode($key64)] = base64_decode($val64);
        }
        return $post;
    }

    function save() {

        $data = $this->formLybase64();
        $dt = new \DateTime("now");
        $entities = array();
        foreach ($data as $key => $val) {
            //echo $key."\n";
            $df = explode(":", $key);
            if (!@$entities[$df[0] . ":" . $df[1]]) {
                $entities[$df[0] . ":" . $df[1]] = $this->getDoctrine()
                        ->getRepository($df[0] . ":" . $df[1])
                        ->find($df[3]);
                //echo $df[0] . ":" . $df[1]." ".$df[3]."\n";
            }
            if ((int) $df[3] == 0) {
                $entities[$df[0] . ":" . $df[1]] = $this->newentity[$df[0] . ":" . $df[1]];
            }

            $type = $entities[$df[0] . ":" . $df[1]]->gettype($df[2]);
            if ($type == 'object') {
                $obj = $entities[$df[0] . ":" . $df[1]]->getField($df[2]);
                $repository = $entities[$df[0] . ":" . $df[1]]->getRepositories($df[2]);

                $entity = $this->getDoctrine()
                        ->getRepository($repository)
                        ->find($val);

                $entities[$df[0] . ":" . $df[1]]->setField($df[2], $entity);
            } elseif ($type == 'datetime') {
                $val = new \DateTime($val);
                $entities[$df[0] . ":" . $df[1]]->setField($df[2], $val);
            } else {
                if ($df[2] != 'reference') {
                    $entities[$df[0] . ":" . $df[1]]->setField($df[2], $val);
                }
            }
        }
        foreach ($entities as $key => $entity) {
            // echo "(".$entity->reference.")";
            //$entity->setModified($dt);
            $entity = $this->flushpersist($entity);
            $out[$key] = $entity->getId();
            $this->newentity[$key] = $entity;
        }
        return $out;
    }

    function initialazeNewEntity($entity) {
        if (@$this->newentity[$this->repository]) {
            $dt = new \DateTime("now");
            $this->newentity[$this->repository] = $entity;
            //$this->newentity[$this->repository]->setTs($dt);
            //$this->newentity[$this->repository]->setCreated($dt);
            //$this->newentity[$this->repository]->setModified($dt);
        }
    }

    function flushpersist($entity) {

        $em = $this->getDoctrine()->getManager();
        //$this->error[$this->repository] = array();
        $asd = $entity;
        foreach ((array) $entity->uniques as $attr) {
            $ent = $this->getDoctrine()
                    ->getRepository($this->repository)
                    ->findOneBy(array($attr => $entity->getField($attr)));
            if (count($ent)) {
                $this->error[$this->repository][] = $this->repository . ":" . $attr . ":" . @$asd->id;
                $entity = $ent;
            }
        }
        if (!count($this->error[$this->repository])) {
            $em->persist($entity);
            $em->flush();
        }

        return $entity;
    }

    function flushremove($entity) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($entity);
        $em->flush();
    }

    function getDFormFields($entity, $fields, $id = '') {

        $forms["type"] = 'div';
        foreach ($fields as $field => $options) {
            $formsint = array();
            $formsint["type"] = 'div';
            $formsint["class"] = 'form-group';
            @$options["type"] = $options["type"] ? $options["type"] : "input";
            if (@$options["className"] == "") {
                $options["className"] = 'col-md-12';
            }
            if ($options["type"] == 'datetime') {
                
            }

            if ($options["type"] == 'select') {
                @$options["required"] = $options["required"] ? $options["required"] : true;

                if ($options["datasource"]) {
                    $datasource = $options["datasource"];
                    $results = $em->getRepository($datasource["repository"])->findAll();
                    $seloptions = array();
                    foreach (@(array) $results as $data) {
                        $suffix = $datasource['suffix'] ? " (" . $data->getField($datasource['suffix']) . ")" : "";
                        $seloptions[] = array("name" => $data->getField($datasource['name']) . $suffix, "value" => $data->getField($datasource['value']));
                    }
                }
                if ($options["dataarray"]) {
                    $seloptions = array();
                    foreach (@(array) $options["dataarray"] as $data) {
                        $seloptions[] = array("name" => $data ["name"] . " (" . $data ["value"] . ")", "value" => $data ["value"]);
                    }
                }
                //$forms["html"][] = array("id" => $this->repository, "id" => $this->repository . ":" . $field . ":" . $entity->getId());
                //$forms["html"][] = array("key" => $field, "id" => $this->repository . ":" . $field . ":" . $entity->getId(), 'defaultValue' => $entity->getField($field)->getId(), "type" => "select", "templateOptions" => array("type" => '', 'options' => $seloptions, 'defaultOptions' => array("value" => $entity->getField($field)->getId()), "label" => $options["label"], "required" => $options["required"]));
            } elseif ($options["type"] == 'datetime') {
                //$val = new \DateTime($val);
                //$entities[$df[0] . ":" . $df[1]]->setField($df[2], $val);
                $defaultValue = $entity->getId() > 0 ? $entity->getField($field)->format('Y-m-d') : '';
                @$forms["fields"][] = array("key" => $field, "className" => (string) $options["className"], "id" => $this->repository . ":" . $field . ":" . $entity->getId(), "defaultValue" => $defaultValue, "type" => "input", "templateOptions" => array("type" => '', 'class' => '', "label" => $this->getTranslation($options["label"]), "required" => $options["required"]));
            } else {
                $formsint["html"][] = array('class' => 'form-control', "value" => $entity->getField($field), "caption" => $this->getTranslation($options["label"]), "name" => $this->repository . ":" . $field, "id" => $this->repository . ":" . $field . ":" . $entity->getId(), 'type' => 'text');

                //@$options["required"] = $options["required"] ? $options["required"] : true;
                //$forms["html"][] = array("key" => $field, "id" => $this->repository . ":" . $field . ":" . $entity->getId(), "defaultValue" => $entity->getField($field), "type" => "input", "templateOptions" => array("type" => '', "label" => $options["label"], "required" => $options["required"]));
            }
            $forms["html"][] = $formsint;
        }

        return $forms;
    }

    function getTranslation($path) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Translation');
        $translation = $repository->findOneBy(
                array('path' => $path)
        );
        if (!$translation) {
            $dt = new \DateTime("now");
            $translation = new translation;
            $translation->setTs($dt);
            $translation->setCreated($dt);
            $translation->setModified($dt);
            $translation->setPath($path);
            $this->flushpersist($translation);
        }
        return $translation->getValue() ? $translation->getValue() : $path;
    }

    function getFormLyFields($entity, $fields, $id = '') {

        $forms["model"] = array();
        $forms["id"] = $id;
        $em = $this->getDoctrine()->getManager();
        foreach ($fields as $field => $options) {

            @$options["type"] = $options["type"] ? $options["type"] : "input";
            //$options["required"] = 0;

            if (@$options["className"] == "") {
                $options["className"] = 'col-md-12';
            }
            if (@$options["required"] == "") {
                $options["required"] = false;
            }
            if ($options["type"] == 'select') {
                //@$options["required"] = $options["required"] ? $options["required"] : true;
                if ($options["datasource"]) {
                    $datasource = $options["datasource"];
                    $results = $em->getRepository($datasource["repository"])->findAll();
                    $seloptions = array();

                    foreach (@(array) $results as $data) {
                        $suffix = $datasource['suffix'] ? " (" . $data->getField($datasource['suffix']) . ")" : "";
                        $seloptions[] = array("name" => $data->getField($datasource['name']) . $suffix, "value" => $data->getField($datasource['value']));
                    }
                    $defaultValue = $entity->getField($field) ? $entity->getField($field)->getId() : NULL;
                }
                if ($options["dataarray"]) {
                    $seloptions = array();
                    foreach (@(array) $options["dataarray"] as $data) {
                        $seloptions[] = array("name" => $data ["name"] . " (" . $data ["value"] . ")", "value" => $data ["value"]);
                    }
                    //echo $field."-->(".$entity->getField($field).")";
                    $defaultValue = $entity->getField($field) != '' OR $entity->getField($field) == 0 ? (string) $entity->getField($field) : NULL;
                    //$defaultValue = (string) $entity->getField($field); 
                    //$defaultValue = "0";
                }
                /*
                  if (@$options["required"] == '') {
                  $options["required"] = 1;
                  } else {
                  $options["required"] = 0;
                  }
                 * 
                 */
                @$forms["fields"][] = array("key" => $field, "className" => (string) $options["className"], "id" => $this->repository . ":" . $field . ":" . $entity->getId(), 'defaultValue' => $defaultValue, "type" => "select", "templateOptions" => array("type" => '', 'options' => $seloptions, 'defaultOptions' => array("value" => $defaultValue), "label" => $this->getTranslation($options["label"]), "required" => $options["required"]));
            } elseif ($options["type"] == 'datetime') {
                //$val = new \DateTime($val);
                //$entities[$df[0] . ":" . $df[1]]->setField($df[2], $val);
                $defaultValue = $entity->getId() > 0 ? $entity->getField($field)->format('Y-m-d') : '';
                @$forms["fields"][] = array("key" => $field, "className" => (string) $options["className"], "id" => $this->repository . ":" . $field . ":" . $entity->getId(), "defaultValue" => $defaultValue, "type" => "input", "templateOptions" => array("type" => '', 'class' => '', "label" => $this->getTranslation($options["label"]), "required" => $options["required"]));
            } else {

                //echo "A".@$options["required"]."<BR>";
                /*
                  if (@$options["required"] == '') {
                  $options["required"] = 1;
                  } else {
                  $options["required"] = 0;
                  }
                 * 
                 */
                //@$options["required"] = $options["required"] != '' ? $options["required"] > 0 ? true : false : true;
                //echo @$options["required"]." ".$options["className"]."<BR>";

                @$forms["fields"][] = array("key" => $field, "className" => (string) $options["className"], "id" => $this->repository . ":" . $field . ":" . $entity->getId(), "defaultValue" => $entity->getField($field), "type" => $options["type"], "templateOptions" => array("type" => '', 'class' => '', "label" => $this->getTranslation($options["label"]), "required" => $options["required"]));
            }
        }
        return $forms;
    }

    public function install() {
        // replace this example code with whatever you need
        set_time_limit(100000);
        //ini_set('memory_limit', '128M');


        $kernel = $this->get('kernel');
        $application = new Application($kernel);
        $application->setAutoExit(false);

        //$options = array('command' => 'doctrine:schema:update', "--force" => true);
        $input = new ArrayInput(array(
            'command' => 'doctrine:schema:update',
            "--force" => true
        ));

        // You can use NullOutput() if you don't need the output
        $output = new BufferedOutput();
        $application->run($input, $output);

        $input = new ArrayInput(array(
            'command' => 'app/console assetic:dump',
            "--watch" => true
        ));
        $application->run($input, $output);

        // return the output, don't use if you used NullOutput()
        $content = $output->fetch();

        return new Response($content);

        return $this->render('default/index.html.twig', array(
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    function getSetting($path) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Setting');
        $setting = $repository->findOneBy(
                array('path' => $path)
        );
        if (!$setting) {
            $dt = new \DateTime("now");
            $setting = new Setting;
            $setting->setTs($dt);
            $setting->setCreated($dt);
            $setting->setModified($dt);
            $setting->setPath($path);
            $this->flushpersist($setting);
        }
        return $setting->getValue();
    }

    function setSetting($path, $value) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Setting');
        $setting = $repository->findOneBy(
                array('path' => $path)
        );
        if (!$setting) {
            $dt = new \DateTime("now");
            $setting = new Setting;
            $setting->setTs($dt);
            $setting->setCreated($dt);
            $setting->setModified($dt);
            $setting->setPath($path);
            $this->flushpersist($setting);
        }
        $setting->setValue($value);
        $this->flushpersist($setting);
        return $setting->getValue();
    }

    public function articleAttributes($article_id, $car_id = 0) {
        $url = "http://service5.fastwebltd.com/";
        $fields = array(
            'action' => 'articleAttributes',
            'tecdoc_article_id' => $article_id,
            'linkingTargetId' => $car_id
        );

        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);

        return $data;
    }

    public function getArticlesSearch($search) {
        $url = "http://service5.fastwebltd.com/";
        $fields = array(
            'action' => 'getSearch',
            'search' => $search
        );

        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);

        return $data;
    }

    public function efarmoges($article_id) {
        $url = "http://service5.fastwebltd.com/";
        $fields = array(
            'action' => 'efarmoges',
            'tecdoc_article_id' => $article_id
        );

        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
        return $data;
    }

    public function originals($article_id) {
        $url = "http://service5.fastwebltd.com/";
        $fields = array(
            'action' => 'originals',
            'tecdoc_article_id' => $article_id
        );

        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);

        return $data;
    }

    function convertImageToJpg($image, $docfile) {
        try {
            if (file_exists($image)) {
                $image = new \Imagick($image);
                $canvas = new \Imagick();
                $canvas->newImage($image->getImageWidth(), $image->getImageHeight(), new \ImagickPixel("white"));
                $canvas->setImageFormat("jpeg");
                $canvas->compositeImage($image, \imagick::COMPOSITE_OVER, 0, 0);
                $canvas->writeImage($docfile);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
