<?php

namespace App\AgnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgnAssignments
 *
 * @ORM\Table(name="AGN_ASSIGNMENTS")
 * @ORM\Entity(repositoryClass="App\AgnBundle\Entity\AgnAssignmentRepo")
 */
class AgnAssignments
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ACTIVE_DATE", type="datetime", nullable=true)
     */
    private $activeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSIGN_DESCRIPTION", type="string", length=200, nullable=true)
     */
    private $assignDescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="ASSIGN_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="AGN_ASSIGNMENTS_S", allocationSize=1, initialValue=1)
     */
    private $assignId;

    /**
     * @var string
     *
     * @ORM\Column(name="ASSIGN_SHORT_NAME", type="string", length=20, nullable=true)
     */
    private $assignShortName;

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
     * @var integer
     *
     * @ORM\Column(name="MENUSET_ID", type="integer", nullable=true)
     */
    private $menusetId;



    /**
     * Set activeDate
     *
     * @param \DateTime $activeDate
     * @return AgnAssignments
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
     * Set assignDescription
     *
     * @param string $assignDescription
     * @return AgnAssignments
     */
    public function setAssignDescription($assignDescription)
    {
        $this->assignDescription = $assignDescription;

        return $this;
    }

    /**
     * Get assignDescription
     *
     * @return string 
     */
    public function getAssignDescription()
    {
        return $this->assignDescription;
    }

    /**
     * Get assignId
     *
     * @return integer 
     */
    public function getAssignId()
    {
        return $this->assignId;
    }

    /**
     * Set assignShortName
     *
     * @param string $assignShortName
     * @return AgnAssignments
     */
    public function setAssignShortName($assignShortName)
    {
        $this->assignShortName = $assignShortName;

        return $this;
    }

    /**
     * Get assignShortName
     *
     * @return string 
     */
    public function getAssignShortName()
    {
        return $this->assignShortName;
    }

    /**
     * Set crBy
     *
     * @param integer $crBy
     * @return AgnAssignments
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
     * @return AgnAssignments
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
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return AgnAssignments
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
     * @return AgnAssignments
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
     * @return AgnAssignments
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
     * Set menusetId
     *
     * @param integer $menusetId
     * @return AgnAssignments
     */
    public function setMenusetId($menusetId)
    {
        $this->menusetId = $menusetId;

        return $this;
    }

    /**
     * Get menusetId
     *
     * @return integer 
     */
    public function getMenusetId()
    {
        return $this->menusetId;
    }
}
