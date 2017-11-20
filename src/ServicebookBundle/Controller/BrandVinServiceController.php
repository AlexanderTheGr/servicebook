<?php

namespace ServicebookBundle\Entity;

use AppBundle\Entity\Entity;

/**
 * WorkshopServiceAction
 */
class BrandVinServiceController extends Entity {
    
    
    
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
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
