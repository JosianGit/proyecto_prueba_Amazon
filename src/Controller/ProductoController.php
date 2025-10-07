<?php
// src/Controller/ProductoController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\KernelInterface;

class ProductoController extends AbstractController
{
    #[Route('/productos', name: 'productos')]
    public function index(SessionInterface $session, KernelInterface $kernel): Response
    {
        // Verifica si el usuario está logueado
        if (!$session->get('logged_in')) {
            return $this->redirectToRoute('login');
        }

        // Obtiene el nombre del usuario desde la sesion
        $username = $session->get('username');

        // Carga los datos del archivo JSON
        $path = $kernel->getProjectDir() . '/data/productos.json';
        $json = file_get_contents($path);
        $data = json_decode($json, true);
        $items = $data['SearchResult']['Items'];

        // Renderiza la vista con los productos y el nombre del usuario
        return $this->render('desplegable.html.twig', [
        'productos' => $items,
        'username' => $username,
        'total' => count($items)
        ]);

        
    }
}
