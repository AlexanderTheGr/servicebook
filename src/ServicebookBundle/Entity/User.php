<?php

namespace ServicebookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Entity;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User extends Entity {

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
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $firstname = '';

    /**
     * @var string
     */
    private $lastname = '';

    /**
     * @var string
     */
    private $key = '';

    /**
     * @var string
     */
    private $role = '';

    /**
     * @var string
     */
    private $appkey = '';

    /**
     * @var string
     */
    private $token = '';

    /**
     * @var \DateTime
     */
    private $ts;

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return User
     */
    public function setKey($key) {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey() {
        return $this->key;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role) {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Set appkey
     *
     * @param string $appkey
     *
     * @return User
     */
    public function setAppkey($appkey) {
        $this->appkey = $appkey;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken() {
        return $this->token;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return User
     */
    public function setToken($token) {
        $this->token = $token;

        return $this;
    }

    /**
     * Get appkey
     *
     * @return string
     */
    public function getAppkey() {
        return $this->appkey;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     *
     * @return User
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

}
