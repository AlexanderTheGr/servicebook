<?php

namespace ServicebookBundle\Entity;

use AppBundle\Entity\Entity;

/**
 * AftermarketBrand
 */
class AftermarketBrand extends Entity {

    public function __construct() {
        //$this->repositories['tecdocSupplierId'] = 'SoftoneBundle:SoftoneSupplier';
        //$this->types['tecdocSupplierId'] = 'object';
        //$this->tecdocSupplierId = new \SoftoneBundle\Entity\SoftoneSupplier;
    }

    public function getField($field) {
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
        //$this->repositories['tecdocSupplierId'] = 'SoftoneBundle:SoftoneSupplier';
        return $this->repositories[$repo];
    }

    public function gettype($field) {
        //$this->types['tecdocSupplierId'] = 'object';
        if (@$this->types[$field] != '') {
            return @$this->types[$field];
        }
        if (gettype($field) != NULL) {
            return gettype($this->$field);
        }
        return 'string';
    }

    /**
     * @var integer
     */
    private $tid = '0';

    /**
     * @var string
     */
    private $name;

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
     * Set tid
     *
     * @param integer $tid
     *
     * @return AftermarketBrand
     */
    public function setTid($tid) {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid() {
        return $this->tid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return AftermarketBrand
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     *
     * @return AftermarketBrand
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
     * @return AftermarketBrand
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
     * @return AftermarketBrand
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

}

