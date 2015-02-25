<?php

namespace App\AgnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgnMenusets
 *
 * @ORM\Table(name="AGN_MENUSETS")
 * @ORM\Entity
 */
class AgnMenusets
{
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
     * @ORM\Column(name="LAD_BY", type="integer", nullable=true)
     */
    private $ladBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LAD_DATE", type="datetime", nullable=false)
     */
    private $ladDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="MENUSET_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="AGN_MENUSETS_MENUSET_ID_seq", allocationSize=1, initialValue=1)
     */
    private $menusetId;

    /**
     * @var string
     *
     * @ORM\Column(name="MENUSET_NAME", type="string", length=200, nullable=true)
     */
    private $menusetName;

    /**
     * @var string
     *
     * @ORM\Column(name="MENU_TYPE_CODE", type="string", length=20, nullable=true)
     */
    private $menuTypeCode;



    /**
     * Set crBy
     *
     * @param integer $crBy
     * @return AgnMenusets
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
     * @return AgnMenusets
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
     * Set ladBy
     *
     * @param integer $ladBy
     * @return AgnMenusets
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
     * @return AgnMenusets
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
     * Get menusetId
     *
     * @return integer 
     */
    public function getMenusetId()
    {
        return $this->menusetId;
    }

    /**
     * Set menusetName
     *
     * @param string $menusetName
     * @return AgnMenusets
     */
    public function setMenusetName($menusetName)
    {
        $this->menusetName = $menusetName;

        return $this;
    }

    /**
     * Get menusetName
     *
     * @return string 
     */
    public function getMenusetName()
    {
        return $this->menusetName;
    }

    /**
     * Set menuTypeCode
     *
     * @param string $menuTypeCode
     * @return AgnMenusets
     */
    public function setMenuTypeCode($menuTypeCode)
    {
        $this->menuTypeCode = $menuTypeCode;

        return $this;
    }

    /**
     * Get menuTypeCode
     *
     * @return string 
     */
    public function getMenuTypeCode()
    {
        return $this->menuTypeCode;
    }
}
