<?php
/**************************************************************************
 * SchoolSubject.php, IMIE evaluate
 *
 * Description :
 * Author(s) : Camille Paviot
 * Licence : All right reserved.
 * Last update : 01/04/2015
 *
 **************************************************************************/
namespace Imie\EvaluateBundle\Entity;
namespace Imie\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class SchoolSubject
{
    /**
     * @var string
     */
    protected $name;
    
    /**
     * @var array
     */
    protected $listTeacher;
    
    /**
     * @var string
     */
    protected $promotion;
    
    
    /**
     * Set name
     * 
     * @param type $name
     * @return \Imie\CoreBundle\Entity\SchoolSubject
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set listTeacher
     * 
     * @param type $listTeacher
     * @return \Imie\CoreBundle\Entity\SchoolSubject
     */
    public function setListTeacher($listTeacher)
    {
        $this->listTeacher = $listTeacher;

        return $this;
    }
    /**
     * Get listTeacher
     *
     * @return array
     */
    public function getListTeacher()
    {
        return $this->listTeacher;
    }
    
    /**
     * Set promotion
     * 
     * @param type $promotion
     * @return \Imie\CoreBundle\Entity\SchoolSubject
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }
    /**
     * Get promotion
     *
     * @return array
     */
    public function getPromotion()
    {
        return $this->promotion;
    }
}
