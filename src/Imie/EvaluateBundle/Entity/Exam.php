<?php
/**************************************************************************
 * Exam.php, IMIE evaluate
 *
 * Description :
 * Author(s) : Camille Paviot
 * Licence : All right reserved.
 * Last update : 10/04/2015
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
     * @var string
     */
    protected $name;
    
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
    
    /**
     * Set name
     * 
     * @param type $name
     * @return \Imie\EvaluateBundle\Entity\Exam
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
     * Add scores
     *
     * @param \Imie\EvaluateBundle\Entity\Score $score
     * @return Exam
     */
    public function addScore(\Imie\EvaluateBundle\Entity\Score $score)
    {
        $this->score[] = $score;

        return $this;
    }
    /**
     * Remove scores
     *
     * @param \Imie\EvaluateBundle\Entity\Score $score
     */
    public function removeScore(\Imie\EvaluateBundle\Entity\Score $score)
    {
        $this->score->removeElement($score);
    }
}
