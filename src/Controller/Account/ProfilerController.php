<?php

namespace App\Controller\Account;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilerController extends AbstractController
{
    /**
     * @Route("/profile", name="_profiler")
     */
    public function index(): Response
    {
        return $this->render('account/profiler/index.html.twig', [
            'controller_name' => 'ProfilerController',
            'user' => $this->getUser(),
        ]);
    }
}
