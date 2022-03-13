<?php

namespace App\DataFixtures;

use App\Entity\Storyboard;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StoryboardFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $story1 = new Storyboard();
        $story1->setTitre('Titre: ')
                ->setImage('.jpg')
                ->setDescription('ceci est une description')
                ->setPage('1')
        ;
        $manager->persist($story1);
        $manager->flush();
    }
}
