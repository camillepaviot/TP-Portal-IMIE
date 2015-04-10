<?php
/**************************************************************************
 * LoadScoreData.php, IMIE evaluate
 *
 * Description :
 * Author(s) : Camille Paviot
 * Licence : All right reserved.
 * Last update : 10/04/2015
 *
 **************************************************************************/
namespace Imie\EvaluateBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Imie\EvaluateBundle\Entity\Score;

class LoadScoreData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * 
     * @param ObjectManager $em
     */
    public function load(ObjectManager $em) {

      $score1 = new Score();
      $score1->setScore(14);
      $score1->setExam($em->merge($this->getReference('exam-java1')));
      $score1->setStudent($em->merge($this->getReference('student1')));

      $score2 = new Score();
      $score2->setScore(8);
      $score2->setExam($em->merge($this->getReference('exam-java1')));
      $score2->setStudent($em->merge($this->getReference('student2')));

      $score3 = new Score();
      $score3->setScore(20); //note prémonitoire pour ce TP ...
      $score3->setExam($em->merge($this->getReference('exam-java1')));
      $score3->setStudent($em->merge($this->getReference('student3')));

      $score4 = new Score();
      $score4->setScore(18);
      $score4->setExam($em->merge($this->getReference('exam-java1')));
      $score4->setStudent($em->merge($this->getReference('student4')));

      $score5 = new Score();
      $score5->setScore(12);
      $score5->setExam($em->merge($this->getReference('exam-php1')));
      $score5->setStudent($em->merge($this->getReference('student1')));

      $score6 = new Score();
      $score6->setScore(15);
      $score6->setExam($em->merge($this->getReference('exam-php1')));
      $score6->setStudent($em->merge($this->getReference('student2')));

      $score7 = new Score();
      $score7->setScore(16);
      $score7->setExam($em->merge($this->getReference('exam-php1')));
      $score7->setStudent($em->merge($this->getReference('student3')));

      $score8 = new Score();
      $score8->setScore(0);
      $score8->setExam($em->merge($this->getReference('exam-php1')));
      $score8->setStudent($em->merge($this->getReference('student4')));


      $em->persist($score1);
      $em->persist($score2);
      $em->persist($score3);
      $em->persist($score4);
      $em->persist($score5);
      $em->persist($score6);
      $em->persist($score7);
      $em->persist($score8);

      $em->flush();
    }

    public function getOrder() {
    }
}