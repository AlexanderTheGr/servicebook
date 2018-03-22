<?php

namespace ServicebookBundle\Entity;

use AppBundle\Entity\Entity;

/**
 * BrandService
 */
class BrandService extends Entity {

    private $repository = 'ServicebookBundle:BrandService';
    private $types = array();
    var $repositories = array();
    var $uniques = array();

    public function __construct() {
        $dt = new \DateTime("now");
        $this->ts = $dt;
        $this->modified = $dt;
        $this->created = $dt;
        $this->repositories['brandVin'] = 'ServicebookBundle:BrandVin';
        $this->brandVin = new \ServicebookBundle\Entity\BrandVin;
        //$this->items = new \Doctrine\Common\Collections\ArrayCollection();
        $this->actions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getField($field) {
        if ($this->gettype($field) == 'boolean') {
            return (int) $this->$field;
        }
        return $this->$field;
    }

    public function setField($field, $val) {
        $this->$field = $val;
        return $val;
    }

    public function getRepository() {
        return $this->repository;
    }

    public function getRepositories($repo) {
        $this->repositories['brandVin'] = 'ServicebookBundle:BrandVin';
        return $this->repositories[$repo];
    }

    public function gettype($field) {
        $this->types['confirmed'] = 'boolean';
        if (@$this->types[$field] != '') {
            return @$this->types[$field];
        }
        if (gettype($field) != NULL) {
            return gettype($this->$field);
        }
        return 'string';
    }

    private $service;

    /**
     * @var string
     */
    private $model = '';

    /**
     * @var integer
     */
    private $km = '0';

    /**
     * @var string
     */
    private $details = '';

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var \DateTime
     */
    private $ts;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $modified;

    /**
     * @var integer
     */
    private $id;

    /**
     * Set service
     *
     * @param string $service
     *
     * @return BrandService
     */
    public function setService($service) {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return BrandService
     */
    public function setModel($model) {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * Set km
     *
     * @param integer $km
     *
     * @return BrandService
     */
    public function setKm($km) {
        $this->km = $km;

        return $this;
    }

    /**
     * Get km
     *
     * @return integer
     */
    public function getKm() {
        return $this->km;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return BrandService
     */
    public function setDetails($details) {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return BrandService
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     *
     * @return BrandService
     */
    public function setTs($ts) {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime
     */
    public function getTs() {
        return $this->ts;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return BrandService
     */
    public function setCreated($created) {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return BrandService
     */
    public function setModified($modified) {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified() {
        return $this->modified;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    private $brandVin;

    /**
     * Set brandVin
     *
     * @param \ServicebookBundle\Entity\BrandVin $brandVin
     *
     * @return BrandService
     */
    public function setBrandVin(\ServicebookBundle\Entity\BrandVin $brandVin = null) {
        $this->brandVin = $brandVin;

        return $this;
    }

    /**
     * Get brandVin
     *
     * @return \ServicebookBundle\Entity\BrandVin
     */
    public function getBrandVin() {
        return $this->brandVin;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $actions;

    /**
     * Add action
     *
     * @param \ServicebookBundle\Entity\BrandServiceAction $action
     *
     * @return BrandService
     */
    public function addAction(\ServicebookBundle\Entity\BrandServiceAction $action) {
        $this->actions[] = $action;

        return $this;
    }

    /**
     * Remove action
     *
     * @param \ServicebookBundle\Entity\BrandServiceAction $action
     */
    public function removeAction(\ServicebookBundle\Entity\BrandServiceAction $action) {
        $this->actions->removeElement($action);
    }

    /**
     * Get actions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActions() {
        return $this->actions;
    }

    public function calculateTotalPrice($workshop) {
        global $kernel;
        if ('AppCache' == get_class($kernel)) {
            $kernel = $kernel->getKernel();
        }
        $em = $kernel->getContainer()->get('doctrine.orm.entity_manager');

        $workshopService = $em->getRepository("ServicebookBundle:WorkshopService")->findOneBy(array('workshop' => $workshop, 'brandService' => $this));
        if ($workshopService) 
        return $workshopService->calculateTotalPrice();
        /*
        $price = 0;
        foreach ($workshopService->getActions() as $action) {
            $price += $action->getPrice();
            foreach ($action->getParts() as $part) {
                $price += $part->getPrice();
            }
        }
        return $price;
         * 
         */
    }

}
