<?php
       require_once './vendor/autoload.php';
       $loader= new \Twig\Loader\FilesystemLoader('.\templates');
        $twig= new \Twig\Environment($loader);
    $paises=[
        "España"=>
        [
            "nombre"=>"España",
            "lengua"=>"Castellano",
            "moneda"=>"Euro",
        ],
        "USA"=>
        [
            "nombre"=>"Estados Unidos",
            "lengua"=>"Ingles",
            "moneda"=>"Dolar",
        ],
        "Argentina"=>
        [
            "nombre"=>"Argentina",
            "lengua"=>"Castellano",
            "moneda"=>"Peso",
        ],
        "chile"=>
        [
            "nombre"=>"Chile",
            "lengua"=>"Castellano",
            "moneda"=>"Peso chileno",
        ],"brasil"=>
        [
            "nombre"=>"Brasil",
            "lengua"=>"Portugues",
            "moneda"=>"Real",
        ]
        ];
     echo $twig->render('.\eje3.html.twig', ['paises'=>$paises]);
?>