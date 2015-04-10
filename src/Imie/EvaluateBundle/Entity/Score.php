<?php
/**************************************************************************
 * Score.php, IMIE evaluate
 *
 * Description :
 * Author(s) : Camille Paviot
 * Licence : All right reserved.
 * Last update : 10/04/2015
 *
 **************************************************************************/
namespace Imie\EvaluateBundle\Entity;
namespace Imie\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Score
{
    /**
     * @var decimal
     */
    protected $score;
    
    /**
     * Set score
     * 
     * @param type $score
     * @return \Imie\EvaluateBundle\Entity\Score
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return decimal
     */
    public function getScore()
    {
        return $this->score;
    }

}
