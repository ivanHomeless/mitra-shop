<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index(): Response
    {
        $conn = $this->getDoctrine()->getConnection();

        $sql = '
            SELECT * FROM user';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // возвращает массив массивов (т.e. сырой набор данных)


        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
