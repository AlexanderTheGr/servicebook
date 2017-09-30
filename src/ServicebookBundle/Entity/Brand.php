<?php

namespace ServicebookBundle\Entity;
use AppBundle\Entity\Entity;

// php app/console doctrine:generate:entities ServicebookBundle

/**
 * Brand
 */ 
class Brand extends Entity {

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
     * @var string
     */
    private $brand;

    /**
     * @var boolean
     */
    private $enable = '0';

    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var integer
     */
    private $id;

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Brand
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
     * Set enable
     *
     * @param boolean $enable
     *
     * @return Brand
     */
    public function setEnable($enable) {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get enable
     *
     * @return boolean
     */
    public function getEnable() {
        return $this->enable;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Brand
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
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @var integer
     */
    private $reference = '0';

    /**
     * @var string
     */
    private $brandStr;

    /**
     * Set reference
     *
     * @param integer $reference
     *
     * @return Brand
     */
    public function setReference($reference) {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return integer
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * Set brandStr
     *
     * @param string $brandStr
     *
     * @return Brand
     */
    public function setBrandStr($brandStr) {
        $this->brandStr = $brandStr;

        return $this;
    }

    /**
     * Get brandStr
     *
     * @return string
     */
    public function getBrandStr() {
        return $this->brandStr;
    }

}
