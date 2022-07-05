<?php

namespace App\Marketplace\Shop\Application\http\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="_profile")
     */
    public function index(): Response
    {
        return $this->render('user/profile/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
}
