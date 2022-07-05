<?php

namespace App\Marketplace\User\Application\http\Controller;

use App\Marketplace\User\Application\http\Services\Security\AppAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     * @param  AuthenticationUtils  $authenticationUtils
     * @param  AppAuthenticator  $authApp
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils, AppAuthenticator $authApp): Response
    {
         if ($this->getUser()) {
             return $this->redirectToRoute('_profiler');
         }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('user/security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
