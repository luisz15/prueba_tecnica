<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;

class Desafio1Controller extends AbstractController
{
    #[Route('/desafio1/fizz/buzz', name: 'app_desafio1')]
    public function index(Request $request): Response
    {
        $form = $this -> createFormBuilder()
            -> add('initNumber', NumberType::class, [
                'constraints' => new Assert\Positive()
            ])
            -> add('Ejecutar', SubmitType::class)
            -> getForm();
        $form -> handleRequest($request);
        if ($form -> isSubmitted() && $form -> isValid()) {
            $data = $form -> getData();
        }
        return $this->render('desafio1/index.html.twig', [
            'controller_name' => 'Desafio1Controller'
            , 'inputForm' => $form -> createView()
            , 'initNumber' => @$data['initNumber']
        ]);
    }
}
