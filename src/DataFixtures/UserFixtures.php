<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Form\InscriptionType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $manager->flush();
    }
}
