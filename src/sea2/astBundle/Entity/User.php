<?php

namespace sea2\astBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection,
    Doctrine\Common\Collections\ArrayCollection;

/**
 * Class User
 * @package sea2\astBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="sea2\astBundle\Entity\Track", mappedBy="user")
     */
    private $tracks;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="sea2\astBundle\Entity\Notification", mappedBy="user")
     */
    private $notifications;

    /**
     * Constructor
     */
    public function __construct() {
        $this->tracks = new ArrayCollection();
        $this->notifications = new ArrayCollection();
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
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
     * Add tracks
     *
     * @param \sea2\astBundle\Entity\Track $tracks
     * @return User
     */
    public function addTrack(\sea2\astBundle\Entity\Track $tracks)
    {
        $this->tracks[] = $tracks;

        return $this;
    }

    /**
     * Remove tracks
     *
     * @param \sea2\astBundle\Entity\Track $tracks
     */
    public function removeTrack(\sea2\astBundle\Entity\Track $tracks)
    {
        $this->tracks->removeElement($tracks);
    }

    /**
     * Get tracks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * Add notifications
     *
     * @param \sea2\astBundle\Entity\Notification $notifications
     * @return User
     */
    public function addNotification(\sea2\astBundle\Entity\Notification $notifications)
    {
        $this->notifications[] = $notifications;

        return $this;
    }

    /**
     * Remove notifications
     *
     * @param \sea2\astBundle\Entity\Notification $notifications
     */
    public function removeNotification(\sea2\astBundle\Entity\Notification $notifications)
    {
        $this->notifications->removeElement($notifications);
    }

    /**
     * Get notifications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotifications()
    {
        return $this->notifications;
    }
}
