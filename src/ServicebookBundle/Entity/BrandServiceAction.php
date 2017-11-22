<?php

namespace ServicebookBundle\Entity;

use AppBundle\Entity\Entity;

/**
 * BrandServiceAction
 */
class BrandServiceAction extends Entity {

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
        //$this->serviceparts = new \Doctrine\Common\Collections\ArrayCollection();
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
    private $action;

    /**
     * @var integer
     */
    private $manhour = '0';

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
     * Set action
     *
     * @param string $action
     *
     * @return BrandServiceAction
     */
    public function setAction($action) {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction() {
        return $this->action;
    }

    /**

      /**
     * Set manhour
     *
     * @param integer $manhour
     *
     * @return BrandServiceAction
     */
    public function setManhour($manhour) {
        $this->manhour = $manhour;

        return $this;
    }

    /**
     * Get manhour
     *
     * @return integer
     */
    public function getManhour() {
        return $this->manhour;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return BrandServiceAction
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
     * @return BrandServiceAction
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
     * @return BrandServiceAction
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
     * @return BrandServiceAction
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
     * @return BrandServiceAction
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $serviceparts;

    /**
     * Add servicepart
     *
     * @param \ServicebookBundle\Entity\BrandServicePart $servicepart
     *
     * @return BrandServiceAction
     */
    public function addServicepart(\ServicebookBundle\Entity\BrandServicePart $servicepart) {
        $this->serviceparts[] = $servicepart;

        return $this;
    }

    /**
     * Remove servicepart
     *
     * @param \ServicebookBundle\Entity\BrandServicePart $servicepart
     */
    public function removeServicepart(\ServicebookBundle\Entity\BrandServicePart $servicepart) {
        $this->serviceparts->removeElement($servicepart);
    }

    /**
     * Get serviceparts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServiceparts() {
        return $this->serviceparts;
    }

}
