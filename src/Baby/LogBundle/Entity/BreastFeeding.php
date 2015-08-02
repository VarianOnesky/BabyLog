<?php

namespace Baby\LogBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="log.breast_feeding")
 */
class BreastFeeding
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime", options={"comment":"time of record creation"})
     */
    protected $created_time;

    /**
     * @ORM\Column(type="datetime", options={"comment":"last update time"})
     */
    protected $updated_time;

    /**
     * @ORM\Column(type="integer", options={"comment":"feeding duration (in minute)"}))
     */
    protected $duration;

    public function __construct()
    {
        $this->created_time = new \DateTime();
        $this->updated_time = new \DateTime();
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
     * Set created_time
     *
     * @param \DateTime $createdTime
     * @return BreastFeeding
     */
    public function setCreatedTime($createdTime)
    {
        $this->created_time = $createdTime;

        return $this;
    }

    /**
     * Get created_time
     *
     * @return \DateTime 
     */
    public function getCreatedTime()
    {
        return $this->created_time;
    }

    /**
     * Set updated_time
     *
     * @param \DateTime $updatedTime
     * @return BreastFeeding
     */
    public function setUpdatedTime($updatedTime)
    {
        $this->updated_time = $updatedTime;

        return $this;
    }

    /**
     * Get updated_time
     *
     * @return \DateTime 
     */
    public function getUpdatedTime()
    {
        return $this->updated_time;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return BreastFeeding
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }
}
