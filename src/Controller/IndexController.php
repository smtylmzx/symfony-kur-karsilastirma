<?php

namespace App\Controller;

use App\Entity\EnuygunKurlar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function index()
    {

        $doviz = $this->getDoctrine()->getRepository(EnuygunKurlar::class)->find(1);

        return $this->render("index/index.html.twig", [
            'result' => $doviz
        ]);
    }
}