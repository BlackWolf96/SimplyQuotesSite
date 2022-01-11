<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Quotes;
use App\Repository\QuotesRepository;

use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/home/json");
     */
    public function getdatajson(){
        $response = $this->getDoctrine()->getRepository(Quotes::class);
        $data = $response->findAll();

        $toArray = array();

        foreach( $data as $item){
            $toArray[] = array(
                'autor' => $item->getAutor(),
                'tresc' => $item->getTresc(),
                'added' => $item->getData(),
                'link' => $item->getKlip()
            );
        }

        return new JsonResponse($toArray); 
    }
}
