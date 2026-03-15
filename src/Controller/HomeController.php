<?php

namespace App\Controller;

use App\Repository\EventRepository; //Importer le repository 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EventRepository $eventRepository): Response
    {
        $events = $eventRepository->findAll();

        return $this->render('home/index.html.twig', [
            // C'est ici qu'on fait le lien entre PHP et Twig :
            'events' => $events, 
        ]);
    }
}
