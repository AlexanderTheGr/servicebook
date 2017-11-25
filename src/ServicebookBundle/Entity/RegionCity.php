<?php

namespace ServicebookBundle\Entity;

use AppBundle\Entity\Entity;

/**
 * RegionCity
 */
class RegionCity extends Entity {

    private $repository = 'ServicebookBundle:RegionCity';
    private $types = array();
    var $repositories = array();
    var $uniques = array();

    public function __construct() {
        $dt = new \DateTime("now");
        $this->ts = $dt;
        $this->modified = $dt;
        $this->created = $dt;
        $this->repositories['region'] = 'ServicebookBundle:Region';
        $this->region = new \ServicebookBundle\Entity\Region;
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
        $this->repositories['region'] = 'ServicebookBundle:Region';
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
    private $city;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ServicebookBundle\Entity\Region
     */
    private $region;

    /**
     * Set city
     *
     * @param string $city
     *
     * @return RegionCity
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
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set region
     *
     * @param \ServicebookBundle\Entity\Region $region
     *
     * @return RegionCity
     */
    public function setRegion(\ServicebookBundle\Entity\Region $region = null) {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \ServicebookBundle\Entity\Region
     */
    public function getRegion() {
        return $this->region;
    }

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
     * Set ts
     *
     * @param \DateTime $ts
     *
     * @return RegionCity
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * Get ts
     *
     * @return \DateTime
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return RegionCity
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return RegionCity
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }
}
