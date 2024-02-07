<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestPageController extends AbstractController
{
    #[Route('/', name: 'app_test_page')]
    public function index(): Response
    {
        return $this->render('test_page/index.html.twig', [
            'controller_name' => 'TestPageController',
        ]);
    }
}
