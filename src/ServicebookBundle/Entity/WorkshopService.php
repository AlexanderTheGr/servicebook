<?php

namespace ServicebookBundle\Entity;

use AppBundle\Entity\Entity;

/**
 * WorkshopService
 */
class WorkshopService extends Entity {

    private $repository = 'ServicebookBundle:WorkshopService';
    private $types = array();
    var $repositories = array();
    var $uniques = array();

    public function __construct() {
        $dt = new \DateTime("now");
        $this->ts = $dt;
        $this->modified = $dt;
        $this->created = $dt;
        $this->repositories['workshop'] = 'ServicebookBundle:Workshop';
        $this->repositories['brandService'] = 'ServicebookBundle:BrandService';
        $this->workshop = new \ServicebookBundle\Entity\Workshop;
        $this->brandService = new \ServicebookBundle\Entity\BrandService;
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
        $this->repositories['workshop'] = 'ServicebookBundle:Workshop';
        $this->repositories['brandService'] = 'ServicebookBundle:BrandService';
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

    /**
     * @var string
     */
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
     * @var \ServicebookBundle\Entity\BrandService
     */
    private $brandService;

    /**
     * @var \ServicebookBundle\Entity\Workshop
     */
    private $workshop;

    /**
     * Set service
     *
     * @param string $service
     *
     * @return WorkshopService
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
     * @return WorkshopService
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
     * @return WorkshopService
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
     * @return WorkshopService
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
     * @return WorkshopService
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
     * @return WorkshopService
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
     * @return WorkshopService
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
     * @return WorkshopService
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

    /**
     * Set brandService
     *
     * @param \ServicebookBundle\Entity\BrandService $brandService
     *
     * @return WorkshopService
     */
    public function setBrandService(\ServicebookBundle\Entity\BrandService $brandService = null) {
        $this->brandService = $brandService;

        return $this;
    }

    /**
     * Get brandService
     *
     * @return \ServicebookBundle\Entity\BrandService
     */
    public function getBrandService() {
        return $this->brandService;
    }

    /**
     * Set workshop
     *
     * @param \ServicebookBundle\Entity\Workshop $workshop
     *
     * @return WorkshopService
     */
    public function setWorkshop(\ServicebookBundle\Entity\Workshop $workshop = null) {
        $this->workshop = $workshop;

        return $this;
    }

    /**
     * Get workshop
     *
     * @return \ServicebookBundle\Entity\Workshop
     */
    public function getWorkshop() {
        return $this->workshop;
    }

    /**
     * @var string
     */
    private $comments = '';

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return WorkshopService
     */
    public function setComments($comments) {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments() {
        return $this->comments;
    }

    /**
     * @var string
     */
    private $price;

    /**
     * Set price
     *
     * @param string $price
     *
     * @return WorkshopService
     */
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice() {
        return $this->price;
    }

    public function calculateTotalPrice() {
        $price = 0;
        foreach($this->getActions() as $action) {
            $price += $action->getPrice();
            foreach($action->getParts() as $part) {
                $price += $part->getPrice();
            }
        }
        return $price;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $actions;

    /**
     * Add action
     *
     * @param \ServicebookBundle\Entity\WorkshopServiceAction $action
     *
     * @return WorkshopService
     */
    public function addAction(\ServicebookBundle\Entity\WorkshopServiceAction $action) {
        $this->actions[] = $action;

        return $this;
    }

    /**
     * Remove action
     *
     * @param \ServicebookBundle\Entity\WorkshopServiceAction $action
     */
    public function removeAction(\ServicebookBundle\Entity\WorkshopServiceAction $action) {
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
    
    

}
