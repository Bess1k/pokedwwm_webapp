<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UsercontrollerController extends AbstractController
{
    #[Route('/usercontroller', name: 'app_usercontroller')]
    public function index(): Response
    {
        return $this->render('usercontroller/index.html.twig', [
            'controller_name' => 'UsercontrollerController',
        ]);
    }
}
