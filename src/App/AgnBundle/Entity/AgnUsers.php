<?php

namespace App\AgnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * AgnUsers
 *
 * @ORM\Table(name="AGN_USERS")
 * @ORM\Entity(repositoryClass="App\AgnBundle\Entity\AgnUserRepository")
 */
class AgnUsers implements AdvancedUserInterface, \Serializable
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ACTIVE_DATE", type="datetime", nullable=true)
     */
    private $activeDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="CR_BY", type="integer", nullable=true)
     */
    private $crBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CR_DATE", type="datetime", nullable=true)
     */
    private $crDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="EMP_ID", type="integer", nullable=true)
     */
    private $empId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="END_DATE", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="LAD_BY", type="integer", nullable=true)
     */
    private $ladBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LAD_DATE", type="datetime", nullable=true)
     */
    private $ladDate;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_CODE", type="string", length=30, nullable=true)
     */
    private $userCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="USER_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="AGN_USERS_S", allocationSize=1, initialValue=1)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="USER_NAME", type="string", length=200, nullable=true)
     */
    private $userName;



    /**
     * Set activeDate
     *
     * @param \DateTime $activeDate
     * @return AgnUsers
     */
    public function setActiveDate($activeDate)
    {
        $this->activeDate = $activeDate;

        return $this;
    }

    /**
     * Get activeDate
     *
     * @return \DateTime 
     */
    public function getActiveDate()
    {
        return $this->activeDate;
    }

    /**
     * Set crBy
     *
     * @param integer $crBy
     * @return AgnUsers
     */
    public function setCrBy($crBy)
    {
        $this->crBy = $crBy;

        return $this;
    }

    /**
     * Get crBy
     *
     * @return integer 
     */
    public function getCrBy()
    {
        return $this->crBy;
    }

    /**
     * Set crDate
     *
     * @param \DateTime $crDate
     * @return AgnUsers
     */
    public function setCrDate($crDate)
    {
        $this->crDate = $crDate;

        return $this;
    }

    /**
     * Get crDate
     *
     * @return \DateTime 
     */
    public function getCrDate()
    {
        return $this->crDate;
    }

    /**
     * Set empId
     *
     * @param integer $empId
     * @return AgnUsers
     */
    public function setEmpId($empId)
    {
        $this->empId = $empId;

        return $this;
    }

    /**
     * Get empId
     *
     * @return integer 
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return AgnUsers
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set ladBy
     *
     * @param integer $ladBy
     * @return AgnUsers
     */
    public function setLadBy($ladBy)
    {
        $this->ladBy = $ladBy;

        return $this;
    }

    /**
     * Get ladBy
     *
     * @return integer 
     */
    public function getLadBy()
    {
        return $this->ladBy;
    }

    /**
     * Set ladDate
     *
     * @param \DateTime $ladDate
     * @return AgnUsers
     */
    public function setLadDate($ladDate)
    {
        $this->ladDate = $ladDate;

        return $this;
    }

    /**
     * Get ladDate
     *
     * @return \DateTime 
     */
    public function getLadDate()
    {
        return $this->ladDate;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return AgnUsers
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
     * Set userCode
     *
     * @param string $userCode
     * @return AgnUsers
     */
    public function setUserCode($userCode)
    {
        $this->userCode = $userCode;

        return $this;
    }

    /**
     * Get userCode
     *
     * @return string 
     */
    public function getUserCode()
    {
        return $this->userCode;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return AgnUsers
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }
    
    public function getRoles() {
        return array('ROLE_ADMIN');
    }
    
    public function getSalt() {
        return 's3cr3t54Lt';
    }
    
    public function eraseCredentials() {
        
    }
    
    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->userId,
            $this->empId,
            $this->userName,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->userId,
            $this->empId,
            $this->userName,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    
    public function isAccountNonExpired() {
        $start = $this->activeDate;
        $start = $start instanceof \DateTime ? date_format($start, 'Ymd') : 0;
        
        $end = !$this->endDate ? \DateTime::createFromFormat('Y-m-d','9999-12-31') : $this->endDate ;
        $end = $end instanceof \DateTime ? date_format($end, 'Ymd') : 0;
        
        $now = date('Ymd',time());
        
        //echo $start.'--'.$end.'--'.$now;
        
        return $now >= $start && $now <= $end ? true : false ;
    }
    
    public function isAccountNonLocked() {
        return true;
    }
    
    public function isCredentialsNonExpired() {
        return TRUE;
    }
    
    public function isEnabled() {
        return true;
    }
}
