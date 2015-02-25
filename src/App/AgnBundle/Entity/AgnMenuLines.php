<?php

namespace App\AgnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgnMenuLines
 *
 * @ORM\Table(name="AGN_MENU_LINES")
 * @ORM\Entity
 */
class AgnMenuLines
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CHILD_MENU_ID", type="integer", nullable=true)
     */
    private $childMenuId;

    /**
     * @var string
     *
     * @ORM\Column(name="EXEC_DELETE", type="string", length=3, nullable=true)
     */
    private $execDelete;

    /**
     * @var string
     *
     * @ORM\Column(name="EXEC_INSERT", type="string", length=3, nullable=true)
     */
    private $execInsert;

    /**
     * @var string
     *
     * @ORM\Column(name="EXEC_PARAMETER", type="string", length=200, nullable=true)
     */
    private $execParameter;

    /**
     * @var string
     *
     * @ORM\Column(name="EXEC_READ", type="string", length=3, nullable=true)
     */
    private $execRead;

    /**
     * @var string
     *
     * @ORM\Column(name="EXEC_UPDATE", type="string", length=3, nullable=true)
     */
    private $execUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="LINE_NUM", type="integer", nullable=false)
     */
    private $lineNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="MENUSET_ID", type="integer", nullable=true)
     */
    private $menusetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="MENU_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="AGN_MENU_LINES_S", allocationSize=1, initialValue=1)
     */
    private $menuId;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROGRAM_ID", type="integer", nullable=true)
     */
    private $programId;

    /**
     * @var string
     *
     * @ORM\Column(name="PROMPT", type="string", length=100, nullable=true)
     */
    private $prompt;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="ROUTE_NAME", type="string", length=50, nullable=true)
     */
    private $routeName;



    /**
     * Set childMenuId
     *
     * @param integer $childMenuId
     * @return AgnMenuLines
     */
    public function setChildMenuId($childMenuId)
    {
        $this->childMenuId = $childMenuId;

        return $this;
    }

    /**
     * Get childMenuId
     *
     * @return integer 
     */
    public function getChildMenuId()
    {
        return $this->childMenuId;
    }

    /**
     * Set execDelete
     *
     * @param string $execDelete
     * @return AgnMenuLines
     */
    public function setExecDelete($execDelete)
    {
        $this->execDelete = $execDelete;

        return $this;
    }

    /**
     * Get execDelete
     *
     * @return string 
     */
    public function getExecDelete()
    {
        return $this->execDelete;
    }

    /**
     * Set execInsert
     *
     * @param string $execInsert
     * @return AgnMenuLines
     */
    public function setExecInsert($execInsert)
    {
        $this->execInsert = $execInsert;

        return $this;
    }

    /**
     * Get execInsert
     *
     * @return string 
     */
    public function getExecInsert()
    {
        return $this->execInsert;
    }

    /**
     * Set execParameter
     *
     * @param string $execParameter
     * @return AgnMenuLines
     */
    public function setExecParameter($execParameter)
    {
        $this->execParameter = $execParameter;

        return $this;
    }

    /**
     * Get execParameter
     *
     * @return string 
     */
    public function getExecParameter()
    {
        return $this->execParameter;
    }

    /**
     * Set execRead
     *
     * @param string $execRead
     * @return AgnMenuLines
     */
    public function setExecRead($execRead)
    {
        $this->execRead = $execRead;

        return $this;
    }

    /**
     * Get execRead
     *
     * @return string 
     */
    public function getExecRead()
    {
        return $this->execRead;
    }

    /**
     * Set execUpdate
     *
     * @param string $execUpdate
     * @return AgnMenuLines
     */
    public function setExecUpdate($execUpdate)
    {
        $this->execUpdate = $execUpdate;

        return $this;
    }

    /**
     * Get execUpdate
     *
     * @return string 
     */
    public function getExecUpdate()
    {
        return $this->execUpdate;
    }

    /**
     * Set lineNum
     *
     * @param integer $lineNum
     * @return AgnMenuLines
     */
    public function setLineNum($lineNum)
    {
        $this->lineNum = $lineNum;

        return $this;
    }

    /**
     * Get lineNum
     *
     * @return integer 
     */
    public function getLineNum()
    {
        return $this->lineNum;
    }

    /**
     * Set menusetId
     *
     * @param integer $menusetId
     * @return AgnMenuLines
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

    /**
     * Get menuId
     *
     * @return integer 
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set programId
     *
     * @param integer $programId
     * @return AgnMenuLines
     */
    public function setProgramId($programId)
    {
        $this->programId = $programId;

        return $this;
    }

    /**
     * Get programId
     *
     * @return integer 
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Set prompt
     *
     * @param string $prompt
     * @return AgnMenuLines
     */
    public function setPrompt($prompt)
    {
        $this->prompt = $prompt;

        return $this;
    }

    /**
     * Get prompt
     *
     * @return string 
     */
    public function getPrompt()
    {
        return $this->prompt;
    }
    
    /**
     * Set routeName
     * 
     * @param string $routeName
     * @return AgnMenuLines
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
        
        return $this;
    }
    
    /**
     * Get routeName
     * 
     * @return string
     */
    public function getRouteName()
    {
        return $this->routeName;
    }
}
