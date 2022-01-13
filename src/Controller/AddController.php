<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function index(): Response
    {

        

        $_POST = json_decode(file_get_contents("php://input"),true);
        
        return $this->render('add/index.html.twig', [
            'controller_name' => 'AddController',
        ]);
    }
}
