<?php
/**************************************************************************
 * LoadExamData.php, IMIE evaluate
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
use Imie\EvaluateBundle\Entity\Exam;

class LoadExamData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * 
     * @param ObjectManager $em
     */
    public function load(ObjectManager $em) {

	$exam_java1 = new Exam();
	$exam_java1->setName("QCM Java");
	$exam_java1->setCoefficient(1);
	$exam_java1->setscoreMax(10);
        $exam_java1->setSchoolSubject($em->merge($this->getReference('cours-java')));
	$exam_java1->setTeacher($em->merge($this->getReference('teacher1')));
		
	$exam_java2 = new Exam();
	$exam_java2->setName("TP Calculatrice");
	$exam_java2->setCoefficient(2);
	$exam_java2->setscoreMax(20);
        $exam_java2->setSchoolSubject($em->merge($this->getReference('cours-java')));
	$exam_java2->setTeacher($em->merge($this->getReference('teacher2')));
		
	$exam_php1 = new Exam();
	$exam_php1->setName("TP Jobeet");
	$exam_php1->setCoefficient(4);
	$exam_php1->setscoreMax(20);
        $exam_php1->setSchoolSubject($em->merge($this->getReference('cours-php')));
	$exam_php1->setTeacher($em->merge($this->getReference('teacher2')));

	$em->persist($exam_java1);
	$em->persist($exam_java2);
	$em->persist($exam_php1);

	$em->flush();
	$this->addReference("exam-java1", $exam_java1);
	$this->addReference("exam-java2", $exam_java2);
	$this->addReference("exam-php1", $exam_php1);
    }
    
    public function getOrder() {
    }
}