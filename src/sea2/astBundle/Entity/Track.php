<?php

namespace sea2\astBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Track
 * @package sea2\astBundle\Entity
 * @ORM\Entity(repositoryClass="sea2\astBundle\Entity\Repository\TrackRepository")
 * @ORM\Table(name="track")
 */
class Track
{
    /**
     * @var string
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var datetime
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @var datetime
     * @ORM\Column(type="datetime")
     */
    private $starttime;

    /**
     * @var datetime
     * @ORM\Column(type="datetime")
     */
    private $endtime;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $length;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $comment;

    /**
     * @var string
     * @ORM\Column(type="string", length=1048576)
     */
    private $trackXML;

    /**
     * @var sea2\astBundle\Entity\User
     * @ORM\ManyToOne(targetEntity="sea2\astBundle\Entity\User", inversedBy="tracks")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Set starttime
     *
     * @param \DateTime $starttime
     * @return Track
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param \DateTime $endtime
     * @return Track
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return \DateTime 
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Track
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

    /**
     * Set length
     *
     * @param integer $length
     * @return Track
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Track
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
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
     * Set trackXML
     *
     * @param string $trackXML
     * @return Track
     */
    public function setTrackXML($trackXML)
    {
        $this->trackXML = $trackXML;

        return $this;
    }

    /**
     * Get trackXML
     *
     * @return string 
     */
    public function getTrackXML()
    {
        return $this->trackXML;
    }

    /**
     * Set user
     *
     * @param \sea2\astBundle\Entity\User $user
     * @return Track
     */
    public function setUser(\sea2\astBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \sea2\astBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Track
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
