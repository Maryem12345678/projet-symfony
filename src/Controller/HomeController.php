<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route ('/home', name: 'app_home')]
    public function index(): Response
    {
       return new Response(content: "Hello World !");
    }
    #[Route ('/about', name: 'app_about')]
    public function about(): Response
    {
      return new Response(content:"Hello Word !");
    }
    #[Route ('/home/contact', name: 'app_home_contact')]
    public function contact(): Response
    {
      return new Response(content:"Hello Word !");
    }

}
