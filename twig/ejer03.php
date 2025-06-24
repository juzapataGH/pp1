<?php
    require_once ('./vendor/autoload.php');
    $loader = new \Twig\Loader\FilesystemLoader('.\templates');
    $twig = new \Twig\Environment($loader);
    $pais = [
        "espana" =>
        [
        "nombre" => "España",
        "lengua" => "Castellano",
        "moneda" => "Euro"
        ],
        "usa" =>
        [
        "nombre" => "USA",
        "lengua" => "Inglés",
        "moneda" => "Dolar"
        ],
        "argentina" =>
        [
            "nombre" => "Argentina",
            "lengua" => "Español",
            "moneda" => "peso"
        ],
        "peru" =>
        [
            "nombre" => "Peru",
            "lengua" => "Español",
            "moneda" => "Soles"
        ],
        "china" =>
        [
            "nombre" => "China",
            "lengua" => "Chino",
            "moneda" => "Yuan"
        ]
        ];
        
            echo $twig->render('eje03.html.twig', ['paises' => $pais]);

        ?>
