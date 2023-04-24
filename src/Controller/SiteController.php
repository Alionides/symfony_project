<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    #[Route('/', name: 'app_site')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/SiteController.php',
        ]);
    }

    #[Route('/ali/{name}', name: 'aliska', defaults: ['name'=>null], methods:['GET', 'HEAD'])]
    public function ali($name): JsonResponse
    {
        return $this->json([
            'message' => $name,
            'path' => 'src/Controller/SiteController.php',
        ]);
    }

    #[Route('/test', name: 'test')]
    public function test(): Response
    {
        $movies = ["Avengers","Deadpool","BacktoFuture","X-MEN"];
        return $this->render('index.html.twig',array('movies'=>$movies));
    }
}
