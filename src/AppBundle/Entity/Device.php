<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Device
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Device
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;
    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="deviceToken", type="string", length=255)
     */
    private $deviceToken;
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Device
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Device
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set deviceToken
     *
     * @param string $deviceToken
     *
     * @return Device
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;
        return $this;
    }
    /**
     * Get deviceToken
     *
     * @return string
     */
    public function getDeviceToken()
    {
        return $this->deviceToken;
    }
    /**
     * Set email
     *
     * @param string $email
     *
     * @return Device
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
