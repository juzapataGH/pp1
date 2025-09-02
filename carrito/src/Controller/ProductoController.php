<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Manager\ProductoManager;
class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')] // http://localhost/pp1/carrito/public
    public function listarProductos(ProductoManager $productoManager): Response
    {
        $productos = $productoManager->getProductos();

    return $this->render('producto/lista.html.twig', [
    'productos'=> $productos, ]);
    }
    }
    ?>