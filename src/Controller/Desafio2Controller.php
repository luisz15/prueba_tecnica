<?php

namespace App\Controller;

use App\Entity\FIZZBUZZ;
use App\Form\FizzBuzzType;
use App\Service\FizzBuzzGenerator;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Desafio2Controller extends AbstractController
{
    #[Route('/desafio2/fizz/buzz', name: 'app_desafio2')]
    public function index(Request $request, ManagerRegistry $doctrine, FizzBuzzGenerator $fizzBuzzGenerator): Response
    {
        $FizzBuzzEntity = new FIZZBUZZ();
        $form = $this -> createForm(FizzBuzzType::class, $FizzBuzzEntity);
        $form -> handleRequest($request);
        if ($form -> isSubmitted() && $form -> isValid()) {
            
            $FizzBuzzEntity = $form -> getData();

            $fizzBuzz = $fizzBuzzGenerator -> getFizzBuzz($FizzBuzzEntity -> getSTARTINGNUMBER(), $FizzBuzzEntity -> getENDINGNUMBER());
            $FizzBuzzEntity -> setFIZZBUZZ($fizzBuzz);

            $em = $doctrine -> getManager();
            $em -> persist($FizzBuzzEntity);
            $em -> flush();

        }
        return $this->render('desafio2/index.html.twig', [
            'controller_name' => 'Desafio2Controller'
            , 'formFizzBuzz' => $form -> createView()
            , 'fizzBuzz' => @$fizzBuzz
        ]);
    }
}
