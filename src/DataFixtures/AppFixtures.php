<?php

namespace App\DataFixtures;

use App\Entity\Jeu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $product = new Jeu();
        $product 
            ->setNom('UNDO : LA FIÈVRE DU TRÉSOR')
            ->setPhoto('https://www.espritjeu.com/upload/image/undo---la-fievre-du-tresor-p-image-70683-grande.jpg')
            ->setNombreJoueurs(6)
            ->setDuree(60)
            ->setPrix(11.9)
            ->setPresentation('Yucatan, février 1952... Undo : La Fièvre du Trésor est un jeu coopératif et très immersif qui permet à ses joueurs d’influencer le passé pour changer l’avenir.');
        $manager->persist($product);
        
        $manager->flush();
    }
}
