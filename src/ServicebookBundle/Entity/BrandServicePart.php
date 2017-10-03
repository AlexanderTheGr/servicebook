<?php

namespace ServicebookBundle\Entity;

use AppBundle\Entity\Entity;

/**
 * BrandServicePart
 */
class BrandServicePart extends Entity {

    private $repository = 'ServicebookBundle:BrandService';
    private $types = array();
    var $repositories = array();
    var $uniques = array();

    public function __construct() {
        $dt = new \DateTime("now");
        $this->ts = $dt;
        $this->modified = $dt;
        $this->created = $dt;
        $this->repositories['brandService'] = 'ServicebookBundle:BrandService';
        $this->brandService = new \ServicebookBundle\Entity\BrandService;
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
    private $part;

    /**
     * @var string
     */
    private $brand = '';

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
     * @var \ServicebookBundle\Entity\BrandService
     */
    private $brandService;

    /**
     * Set part
     *
     * @param string $part
     *
     * @return BrandServicePart
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
     * Set brand
     *
     * @param string $brand
     *
     * @return BrandServicePart
     */
    public function setBrand($brand) {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand() {
        return $this->brand;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return BrandServicePart
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
     * @return BrandServicePart
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
     * @return BrandServicePart
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
     * @return BrandServicePart
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
     * @return BrandServicePart
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
     * @return BrandServicePart
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

}

