<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $hashedPassword='$2y$13$x7MZWoFjwYZxf2N/cRCk3.wMw1yATd2fGlsIvOb9bP8Dih7bBAAgW';
        for($i=1;$i<=5;$i++){
        $usuario = new User();
        $usuario->setNombre('Usuario'.$i);
        $usuario->setEmail('usuario'.$i.'@gmail.com');
        $usuario->setPassword($hashedPassword);
        $manager->persist($usuario);
        }
        $manager->flush();
    }
}
