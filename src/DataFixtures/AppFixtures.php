<?php

namespace App\DataFixtures;

use App\Entity\CardTemplate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();


        for ($compteur = 0; $compteur < 100; $compteur++) {
            $cardTemplate = new cardTemplate();
            $cardTemplate->setName($faker->sentence($nbWords = 3, $variableNbWords = true))
            ->setDescription($faker->paragraph($nbSentences = 3, $variableNbSentences = true))
            ->setPreview($faker->sentence($nbWords = 3, $variableNbWords = true))
            ->setActive($faker->boolean(95))
            ->setPremium($faker->boolean(20));
            $manager->persist($cardTemplate);
        }

        $manager->flush();
    }
}
