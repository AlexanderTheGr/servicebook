<?php

namespace ServicebookBundle\Entity;
use AppBundle\Entity\Entity;
/**
 * Workshop
 */
class Workshop extends Entity {

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
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $afm;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $district;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $phone01;

    /**
     * @var string
     */
    private $phone02;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $webpage;

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
     * Set code
     *
     * @param string $code
     *
     * @return Workshop
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
     * Set name
     *
     * @param string $name
     *
     * @return Workshop
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
     * Set afm
     *
     * @param string $afm
     *
     * @return Workshop
     */
    public function setAfm($afm) {
        $this->afm = $afm;

        return $this;
    }

    /**
     * Get afm
     *
     * @return string
     */
    public function getAfm() {
        return $this->afm;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Workshop
     */
    public function setAddress($address) {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Set district
     *
     * @param string $district
     *
     * @return Workshop
     */
    public function setDistrict($district) {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string
     */
    public function getDistrict() {
        return $this->district;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return Workshop
     */
    public function setZip($zip) {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip() {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Workshop
     */
    public function setCity($city) {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * Set phone01
     *
     * @param string $phone01
     *
     * @return Workshop
     */
    public function setPhone01($phone01) {
        $this->phone01 = $phone01;

        return $this;
    }

    /**
     * Get phone01
     *
     * @return string
     */
    public function getPhone01() {
        return $this->phone01;
    }

    /**
     * Set phone02
     *
     * @param string $phone02
     *
     * @return Workshop
     */
    public function setPhone02($phone02) {
        $this->phone02 = $phone02;

        return $this;
    }

    /**
     * Get phone02
     *
     * @return string
     */
    public function getPhone02() {
        return $this->phone02;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Workshop
     */
    public function setFax($fax) {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * Set webpage
     *
     * @param string $webpage
     *
     * @return Workshop
     */
    public function setWebpage($webpage) {
        $this->webpage = $webpage;

        return $this;
    }

    /**
     * Get webpage
     *
     * @return string
     */
    public function getWebpage() {
        return $this->webpage;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     *
     * @return Workshop
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
     * @return Workshop
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
     * @return Workshop
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

