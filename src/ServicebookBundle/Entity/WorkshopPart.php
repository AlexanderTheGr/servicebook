<?php

namespace ServicebookBundle\Entity;

/**
 * WorkshopPart
 */
class WorkshopPart extends Entity {

    private $repository = 'ServicebookBundle:BrandServicePart';
    private $types = array();
    var $repositories = array();
    var $uniques = array();

    public function __construct() {
        $dt = new \DateTime("now");
        $this->ts = $dt;
        $this->modified = $dt;
        $this->created = $dt;
        $this->repositories['workshop'] = 'ServicebookBundle:Workshop';
        $this->repositories['brand'] = 'ServicebookBundle:Brand';
        $this->workshop = new \ServicebookBundle\Entity\Workshop;
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
        $this->repositories['workshop'] = 'ServicebookBundle:Workshop';
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
     * @var \ServicebookBundle\Entity\Workshop
     */
    private $workshop;

    /**
     * @var \ServicebookBundle\Entity\Brand
     */
    private $brand;

    /**
     * Set part
     *
     * @param string $part
     *
     * @return WorkshopPart
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
     * @return WorkshopPart
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
     * @return WorkshopPart
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
     * @return WorkshopPart
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
     * @return WorkshopPart
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
     * @return WorkshopPart
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
     * Set workshop
     *
     * @param \ServicebookBundle\Entity\Workshop $workshop
     *
     * @return WorkshopPart
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
     * Set brand
     *
     * @param \ServicebookBundle\Entity\Brand $brand
     *
     * @return WorkshopPart
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

