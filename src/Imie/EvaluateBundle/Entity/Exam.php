<?php
/**************************************************************************
 * Exam.php, IMIE evaluate
 *
 * Description :
 * Author(s) : Camille Paviot
 * Licence : All right reserved.
 * Last update : 01/04/2015
 *
 **************************************************************************/
namespace Imie\EvaluateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Exam
{
    /**
     * @var integer
     */
    protected $coefficient;
    
    /**
     * @var decimal
     */
    protected $scoreMax;
    
    /**
     * Set coefficient
     * 
     * @param type $coefficient
     * @return \Imie\EvaluateBundle\Entity\Exam
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }
    /**
     * Get coefficient
     *
     * @return integer
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }
    
    /**
     * Set scoreMax
     * 
     * @param type $scoreMax
     * @return \Imie\EvaluateBundle\Entity\Exam
     */
    public function setScoreMax($scoreMax)
    {
        $this->scoreMax = $scoreMax;

        return $this;
    }
    /**
     * Get scoreMax
     *
     * @return decimal
     */
    public function getScoreMax()
    {
        return $this->scoreMax;
    }
    
}
