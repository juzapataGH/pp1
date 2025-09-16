<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductoRepository;
use App\Manager\ProductoManager;

class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')] 
    public function listarProductos(ProductoRepository $repository): Response
    {
        $productos = $repository->findAll();

        return $this->render('producto/lista.html.twig', [
            'productos' => $productos,
        ]);
    }

    #[Route('/productos', name: 'listar_productos_manager')] 
    public function listarProducto(ProductoManager $productoManager): Response
    {
        $productos = $productoManager->getProductos();

        return $this->render('producto/lista.html.twig', [
            'productos' => $productos,
        ]);
    }

    #[Route('/producto/{id}', name: 'detalle_producto')]
    public function detalleProducto(ProductoManager $productoManager, int $id): Response
    {
        $producto = $productoManager->getProducto($id);

        if (!$producto) {
            throw $this->createNotFoundException("El producto con ID $id no existe.");
        }

        return $this->render('producto/detalle.html.twig', [
            'producto' => $producto,
        ]);
    }
}
