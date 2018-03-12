<?php
// src/Ens/JobeetBundle/DataFixtures/ORM/LoadCategoryData.php
namespace Ens\JobeetBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Ens\JobeetBundle\Entity\Category;
 
class LoadCategoryData extends Fixture
{
  public function load(ObjectManager $em)
  {
    $design = new Category();
    $design->setName('Design');
    
 
    $programming = new Category();
    $programming->setName('Programming');
 
    $manager = new Category();
    $manager->setName('Manager');
 
    $administrator = new Category();
    $administrator->setName('Administrator');
 
    $em->persist($design);
    $em->persist($programming);
    $em->persist($manager);
    $em->persist($administrator);
 
    $em->flush();
 
    $this->addReference('category-design', $design);
    $this->addReference('category-programming', $programming);
    $this->addReference('category-manager', $manager);
    $this->addReference('category-administrator', $administrator);
  }
 
  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}