<?php
/**
 * Created by PhpStorm.
 * User: alan
 * Date: 05/05/15
 * Time: 23:50
 */

namespace sea2\astBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Notification
 * @package sea2\astBundle\Entity
 * @ORM\Entity(repositoryClass="sea2\astBundle\Entity\Repository\NotificationRepository")
 * @ORM\Table(name="Notification")
 */
class Notification
{
    /**
     * @var string
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @var datetime
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @var string
     * @ORM\Column(type="string", length=1048576)
     */
    private $content;

    /**
     * @var sea2\astBundle\Entity\User
     * @ORM\ManyToOne(targetEntity="sea2\astBundle\Entity\User", inversedBy="notifications")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

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
     * Set title
     *
     * @param string $title
     * @return Notification
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Notification
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Notification
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set user
     *
     * @param \sea2\astBundle\Entity\User $user
     * @return Notification
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
     * @return Notification
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
