<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use faker;
use src\Entity\Article;
use src\Entity\Color;
use src\Entity\Price;
use src\Entity\Reference;
use src\Entity\Size;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $colors =['black', 'white','yellow' , 'red'];
        $dataColors = [];
        for($i = 0; $i < count($colors); $i++){
            $colors = new Color();
            $color -> setName($colors[$i]);
            $dataColors[] = $color;
            $manager->persist($size);

        }
         

        $manager->flush();
    }
}
