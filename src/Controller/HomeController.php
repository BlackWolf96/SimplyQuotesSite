<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Quotes;
use App\Repository\QuotesRepository;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
    /**
     * @Route("/home/add");
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
    */
    public function getData(Request $request,ManagerRegistry $doctrine){
        if($request->getMethod() == 'POST'){
            $json = $request->getContent();

            $decode = json_decode($json, true);
            
            $autor = $decode['autor'];
            $tresc = $decode['tresc'];
            $data = $decode['date'];
            $link = $decode['link'];
            $entityManager = $doctrine->getManager();
            $quote = new Quotes;
            $quote->setAutor($autor);
            $quote->setTresc($tresc);
            $quote->setData(new \DateTime($data));
            $quote->setKlip($link);
            $entityManager->persist($quote);
            $entityManager->flush();
    
            return $this->json('Dodano');
        }

    }
}
