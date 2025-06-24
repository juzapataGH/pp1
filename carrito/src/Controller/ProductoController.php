<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')] // http://localhost/pp1/carrito/public
    public function listarProductos(): Response
    {
    return $this->render('producto/lista.html.twig');
    }
    }
    ?>