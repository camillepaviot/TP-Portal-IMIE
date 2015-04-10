<?php
/**************************************************************************
 * LoadSchoolSubjectData.php, IMIE evaluate
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
use Imie\EvaluateBundle\Entity\SchoolSubject;

class LoadSchoolSubjectData extends AbstractFixture implements OrderedFixtureInterface
{  
    /**
     * 
     * @param ObjectManager $em
     */
    public function load(ObjectManager $em) {
        
      $school_subject_git = new SchoolSubject();
      $school_subject_git->setName('Git');
      $school_subject_git->setPromotion('L3 CDPN');
      $school_subject_git->setListTeacher('teacher1', 'teacher2');
      
      $school_subject_gestion_projet = new SchoolSubject();
      $school_subject_gestion_projet->setName('Gestion de projet');
      $school_subject_gestion_projet->setPromotion('M1 CDPN');
      $school_subject_gestion_projet->setListTeacher('teacher3');
      
      $school_subject_java = new SchoolSubject();
      $school_subject_java->setName('Java');
      $school_subject_java->setPromotion('L3 CDPN');
      $school_subject_java->setListTeacher('teacher1', 'teacher2', 'teacher4');

      $school_subject_php = new SchoolSubject();
      $school_subject_php->setName('Php');
      $school_subject_php->setPromotion('IT Start');
      $school_subject_php->setListTeacher('teacher2', 'teacher4');
      
      $em->persist($school_subject_git);
      $em->persist($school_subject_gestion_projet);
      $em->persist($school_subject_java);
      $em->persist($school_subject_php);
      
      $em->flush();
      $this->addReference('school_subject_git', $school_subject_git);
      $this->addReference('school_subject_gestion_projet-php', $school_subject_gestion_projet);
      $this->addReference('school_subject_java-tests', $school_subject_java);
      $this->addReference('school_subject_php-force', $school_subject_php);
    }

    public function getOrder() {
    }
}