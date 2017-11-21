<?php

namespace ServicebookBundle\Entity;

use AppBundle\Entity\Entity;
/**
 * WorkshopServicePart
 */
class WorkshopServicePart extends Entity {

    private $repository = 'ServicebookBundle:BrandServicePart';
    private $types = array();
    var $repositories = array();
    var $uniques = array();

    public function __construct() {
        $dt = new \DateTime("now");
        $this->ts = $dt;
        $this->modified = $dt;
        $this->created = $dt;
        $this->repositories['workshopServiceAction'] = 'ServicebookBundle:WorkshopServiceAction';
        $this->repositories['brandServicePart'] = 'ServicebookBundle:BrandServicePart';
        $this->repositories['brand'] = 'ServicebookBundle:Brand';
        $this->brandServicePart = new \ServicebookBundle\Entity\BrandServicePart;
        $this->workshopServiceAction = \ServicebookBundle\Entity\WorkshopServiceAction;
        $this->brand = new \ServicebookBundle\Entity\Brand;
        //$this->items = new \Doctrine\Common\Collections\ArrayCollection();
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
        $this->repositories['workshopServiceAction'] = 'ServicebookBundle:WorkshopServiceAction';
        $this->repositories['brandServicePart'] = 'ServicebookBundle:BrandServicePart';
        $this->repositories['brand'] = 'ServicebookBundle:Brand';
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
    private $part;

    /**
     * @var string
     */
    private $code = '';

    /**
     * @var string
     */
    private $details = '';

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
     * @var \ServicebookBundle\Entity\WorkshopServiceAction
     */
    private $workshopServiceAction;

    /**
     * @var \ServicebookBundle\Entity\BrandServicePart
     */
    private $brandServicePart;

    /**
     * @var \ServicebookBundle\Entity\WorkshopServicePart
     */
    private $workshopServicePart;

    /**
     * @var \ServicebookBundle\Entity\Brand
     */
    private $brand;

    /**
     * Set part
     *
     * @param string $part
     *
     * @return WorkshopServicePart
     */
    public function setPart($part) {
        $this->part = $part;

        return $this;
    }

    /**
     * Get part
     *
     * @return string
     */
    public function getPart() {
        return $this->part;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return WorkshopServicePart
     */
    public function setCode($code) {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return WorkshopServicePart
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
     * Set ts
     *
     * @param \DateTime $ts
     *
     * @return WorkshopServicePart
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
     * @return WorkshopServicePart
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
     * @return WorkshopServicePart
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
     * Set workshopServiceAction
     *
     * @param \ServicebookBundle\Entity\WorkshopServiceAction $workshopServiceAction
     *
     * @return WorkshopServicePart
     */
    public function setWorkshopServiceAction(\ServicebookBundle\Entity\WorkshopServiceAction $workshopServiceAction = null) {
        $this->workshopServiceAction = $workshopServiceAction;

        return $this;
    }

    /**
     * Get workshopServiceAction
     *
     * @return \ServicebookBundle\Entity\WorkshopServiceAction
     */
    public function getWorkshopServiceAction() {
        return $this->workshopServiceAction;
    }

    /**
     * Set brandServicePart
     *
     * @param \ServicebookBundle\Entity\BrandServicePart $brandServicePart
     *
     * @return WorkshopServicePart
     */
    public function setBrandServicePart(\ServicebookBundle\Entity\BrandServicePart $brandServicePart = null) {
        $this->brandServicePart = $brandServicePart;

        return $this;
    }

    /**
     * Get brandServicePart
     *
     * @return \ServicebookBundle\Entity\BrandServicePart
     */
    public function getBrandServicePart() {
        return $this->brandServicePart;
    }

    /**
     * Set workshopServicePart
     *
     * @param \ServicebookBundle\Entity\WorkshopServicePart $workshopServicePart
     *
     * @return WorkshopServicePart
     */
    public function setWorkshopServicePart(\ServicebookBundle\Entity\WorkshopServicePart $workshopServicePart = null) {
        $this->workshopServicePart = $workshopServicePart;

        return $this;
    }

    /**
     * Get workshopServicePart
     *
     * @return \ServicebookBundle\Entity\WorkshopServicePart
     */
    public function getWorkshopServicePart() {
        return $this->workshopServicePart;
    }

    /**
     * Set brand
     *
     * @param \ServicebookBundle\Entity\Brand $brand
     *
     * @return WorkshopServicePart
     */
    public function setBrand(\ServicebookBundle\Entity\Brand $brand = null) {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \ServicebookBundle\Entity\Brand
     */
    public function getBrand() {
        return $this->brand;
    }

}
