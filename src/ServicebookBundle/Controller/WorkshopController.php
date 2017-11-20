<?php

namespace ServicebookBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Main as Main;

class WorkshopController extends Main {

    var $repository = 'ServicebookBundle:Workshop';

    /**
     * @Route("/servicebook/workshop/servicebook/workshop")
     */
    public function indexAction() {

        return $this->render('ServicebookBundle:Workshop:index.html.twig', array(
                    'pagename' => $this->getTranslation('Workshop'),
                    'url' => '/servicebook/workshop/getdatatable',
                    'view' => '/servicebook/workshop/view',
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/workshop/view/{id}")
     */
    public function viewAction($id) {
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
            $pagename = "Workshop: (" . $entity->getName() . ")";
            $breadcrumb[] = '<a class="breadcrumb" href="/servicebook/workshop/view/' . $id . '">' . $pagename . '</a>';
        }
        //$content = $this->gettabs($id);
        //$content = $this->content();
        return $this->render('ServicebookBundle:Workshop:view.html.twig', array(
                    'pagename' => $this->getTranslation('Workshop'),
                    'url' => '/servicebook/workshop/save',
                    'supplierid' => $id,
                    'content' => $content,
                    'ctrl' => $this->generateRandomString(),
                    'app' => $this->generateRandomString(),
                    'tabs' => $this->gettabs($id),
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Route("/servicebook/workshop/save")
     */
    public function savection() {
        $this->save();
        $json = json_encode(array("ok"));
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

    /**
     * @Route("/servicebook/workshop/gettab")
     */
    public function gettabs($id) {


        $entity = $this->getDoctrine()
                ->getRepository($this->repository)
                ->find($id);
        if ($id == 0 AND @ $entity->id == 0) {
            $entity = new \ServicebookBundle\Entity\Workshop;
            $this->newentity[$this->repository] = $entity;
        }
        $fields["code"] = array("label" => $this->getTranslation("Code"));
        $fields["name"] = array("label" => $this->getTranslation("Workshop Name"));

        $forms = $this->getFormLyFields($entity, $fields);

        $this->addTab(array("title" => "General", "form" => $forms, "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => true));
        
        if ($id > 0 AND count($entity) > 0) {
            $dtparams[] = array("name" => "ID", "index" => 'id', "active" => "active");
            $dtparams[] = array("name" => "Title", "index" => 'part');
            $dtparams[] = $fields["brand"] = array("name" => "Brand", "index" => 'brand:brand', 'type' => 'select', 'object' => 'Brand');
            ;
            $dtparams[] = array("name" => "Code", "index" => 'code');
            //$dtparams[] = array("name" => "Price", "index" => 'storeWholeSalePrice');
            $params['dtparams'] = $dtparams;
            $params['id'] = $dtparams;
            $params['url'] = '/servicebook/workshopPart/getserviceparts/' . $id;
            $params['view'] = '/servicebook/workshopPart/view';
            $params['viewnew'] = '/servicebook/workshopPart/servicepart/view/new/' . $id;

            $params['key'] = 'gettabs_' . $id;
            $params["ctrl"] = 'ctrlgettabs';
            $params["app"] = 'appgettabs';
            $datatables[] = $this->contentDatatable($params);
        }
        if ($id > 0 AND count($entity) > 0) {
            $tabs[] = array("title" => $this->getTranslation("Parts"), "datatables" => $datatables, "form" => '', "content" => '', "index" => $this->generateRandomString(), 'search' => 'text', "active" => false);
        }
        foreach ((array) $tabs as $tab) {
            $this->addTab($tab);
        }        
        $json = $this->tabs();
        return $json;
    }

    /**
     * @Route("/servicebook/workshop/getdatatable")
     */
    public function getdatatableAction(Request $request) {
        $this->repository = 'ServicebookBundle:Workshop';

        $this->addField(array("name" => "ID", "index" => 'id', "active" => "active"))
                ->addField(array("name" => $this->getTranslation("Code"), "index" => 'code'))
                ->addField(array("name" => $this->getTranslation("Name"), "index" => 'name'));
        $json = $this->datatable();
        return new Response(
                $json, 200, array('Content-Type' => 'application/json')
        );
    }

}
