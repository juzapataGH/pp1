<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class OrdenController extends AbstractController{
    #[Route('/orden/agregar', name: 'agregar_producto', methods:['POST'])] 
    public function agregarProductos(Request $request): Response
    {

        $idProducto = $request->request->get('idProducto');
        $cantidad= $request->request->get('cantidad');
        $this->addFlash(
            'notice',
            "Se ingresó a la orden {$cantidad} unidades del producto {$idProducto}");
           
        return $this->redirectToRoute('listar_productos');

        //return new Response ("Se ingresó a la orden {$cantidad} unidades del producto {$idProducto}");
    }

}
