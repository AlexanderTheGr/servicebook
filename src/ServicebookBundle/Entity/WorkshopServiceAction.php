<?php

namespace ServicebookBundle\Entity;

/**
 * WorkshopServiceAction
 */
class WorkshopServiceAction
{
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
     * @var \ServicebookBundle\Entity\WorkshopService
     */
    private $workshopService;

    /**
     * @var \ServicebookBundle\Entity\BrandServiceAction
     */
    private $brandServiceAction;


    /**
     * Set action
     *
     * @param string $action
     *
     * @return WorkshopServiceAction
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set manhour
     *
     * @param integer $manhour
     *
     * @return WorkshopServiceAction
     */
    public function setManhour($manhour)
    {
        $this->manhour = $manhour;

        return $this;
    }

    /**
     * Get manhour
     *
     * @return integer
     */
    public function getManhour()
    {
        return $this->manhour;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return WorkshopServiceAction
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set ts
     *
     * @param \DateTime $ts
     *
     * @return WorkshopServiceAction
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
     * @return WorkshopServiceAction
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
     * @return WorkshopServiceAction
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

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set workshopService
     *
     * @param \ServicebookBundle\Entity\WorkshopService $workshopService
     *
     * @return WorkshopServiceAction
     */
    public function setWorkshopService(\ServicebookBundle\Entity\WorkshopService $workshopService = null)
    {
        $this->workshopService = $workshopService;

        return $this;
    }

    /**
     * Get workshopService
     *
     * @return \ServicebookBundle\Entity\WorkshopService
     */
    public function getWorkshopService()
    {
        return $this->workshopService;
    }

    /**
     * Set brandServiceAction
     *
     * @param \ServicebookBundle\Entity\BrandServiceAction $brandServiceAction
     *
     * @return WorkshopServiceAction
     */
    public function setBrandServiceAction(\ServicebookBundle\Entity\BrandServiceAction $brandServiceAction = null)
    {
        $this->brandServiceAction = $brandServiceAction;

        return $this;
    }

    /**
     * Get brandServiceAction
     *
     * @return \ServicebookBundle\Entity\BrandServiceAction
     */
    public function getBrandServiceAction()
    {
        return $this->brandServiceAction;
    }
}

