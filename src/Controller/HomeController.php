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
    #[Route ('/about/{entier}', name: 'app_about',requirements: ['entier' => '\d+'])]
    public function about(string $entier= "1" ): Response
    {
      return new Response(content:"Hello".$entier);
    }
    #[Route ('/home/contact', name: 'app_home_contact')]
    public function contact(): Response
    {
      return new Response(content:"Hello Word !");
    }
    #[Route ('/dummy', name: 'app_dummy')]
    public function dummy(): Response
    {
      $text ="hello this is home !";
      $tabyear =[2020,2021,2022,2023];
      return $this->render(view:'/dummy.html.twig',parameters:[
        "Text"=>$text,
        "years"=>$tabyear
    
      ]);
     
    }
  #[Route ('/add-book', name: "app_book_add")]
  public function addBook():Respose
  {
    $book = new Book();

    $bookForm = $this->createForm(type: BookType ::class, data: $book);
   
    return $this->render(view:'dummy/book.html.twig',parameters: [
      "bookForm" => $bookForm
  ]);
 }
}
 

