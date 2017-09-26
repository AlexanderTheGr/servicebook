<?php

namespace ServicebookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Entity;

/**
 * BrandVin
 */
class BrandVin extends Entity {

    private $repository = 'ServicebookBundle:BrandVin';
    private $types = array();
    var $repositories = array();
    var $uniques = array();

    public function __construct() {
        $this->repositories['brand'] = 'ServicebookBundle:Brand';
        $this->repositories['user'] = 'ServicebookBundle:User';
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
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
        $this->repositories['brand'] = 'ServicebookBundle:Brand';
        $this->repositories['user'] = 'ServicebookBundle:User';
        return $this->repositories[$repo];
    }

    public function gettype($field) {
        $this->types['route'] = 'object';
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
    private $vin;

    /**
     * @var string
     */
    private $model = '';

    /**
     * @var string
     */
    private $engine = '';

    /**
     * @var integer
     */
    private $displacement = '0';

    /**
     * @var string
     */
    private $fuel = '';

    /**
     * @var integer
     */
    private $power = '0';

    /**
     * @var integer
     */
    private $km = '0';

    /**
     * @var integer
     */
    private $doors = '0';

    /**
     * @var string
     */
    private $details = '';

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ServicebookBundle\Entity\User
     */
    private $user;

    /**
     * @var \ServicebookBundle\Entity\Brand
     */
    private $brand;

    /**
     * Set vin
     *
     * @param string $vin
     *
     * @return BrandVin
     */
    public function setVin($vin) {
        $this->vin = $vin;

        return $this;
    }

    /**
     * Get vin
     *
     * @return string
     */
    public function getVin() {
        return $this->vin;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return BrandVin
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
     * Set engine
     *
     * @param string $engine
     *
     * @return BrandVin
     */
    public function setEngine($engine) {
        $this->engine = $engine;

        return $this;
    }

    /**
     * Get engine
     *
     * @return string
     */
    public function getEngine() {
        return $this->engine;
    }

    /**
     * Set displacement
     *
     * @param integer $displacement
     *
     * @return BrandVin
     */
    public function setDisplacement($displacement) {
        $this->displacement = $displacement;

        return $this;
    }

    /**
     * Get displacement
     *
     * @return integer
     */
    public function getDisplacement() {
        return $this->displacement;
    }

    /**
     * Set fuel
     *
     * @param string $fuel
     *
     * @return BrandVin
     */
    public function setFuel($fuel) {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get fuel
     *
     * @return string
     */
    public function getFuel() {
        return $this->fuel;
    }

    /**
     * Set power
     *
     * @param integer $power
     *
     * @return BrandVin
     */
    public function setPower($power) {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return integer
     */
    public function getPower() {
        return $this->power;
    }

    /**
     * Set km
     *
     * @param integer $km
     *
     * @return BrandVin
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
     * Set doors
     *
     * @param integer $doors
     *
     * @return BrandVin
     */
    public function setDoors($doors) {
        $this->doors = $doors;

        return $this;
    }

    /**
     * Get doors
     *
     * @return integer
     */
    public function getDoors() {
        return $this->doors;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return BrandVin
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
     * @return BrandVin
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
     * Set user
     *
     * @param \ServicebookBundle\Entity\User $user
     *
     * @return BrandVin
     */
    public function setUser(\ServicebookBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ServicebookBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set brand
     *
     * @param \ServicebookBundle\Entity\Brand $brand
     *
     * @return BrandVin
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

    /**
     * @var string
     */
    private $year = '';

    /**
     * Set year
     *
     * @param string $year
     *
     * @return BrandVin
     */
    public function setYear($year) {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear() {
        return $this->year;
    }

    /**
     * @var boolean
     */
    private $confirmed = '';

    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     *
     * @return BrandVin
     */
    public function setConfirmed($confirmed) {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return boolean
     */
    public function getConfirmed() {
        return $this->confirmed;
    }

}
