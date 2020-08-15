<?php

namespace App\Controller;

use App\Entity\ProviderExchange;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="compare_homepage")
     * @return Response
     */
    public function index(): Response
    {
//        $cacheProduct = $this->get('app.cache.products')->getItem('test');
//        if (!$cacheProduct->isHit()) {
//            $cacheProduct->set('test', 'naber');
//            $this->get('app.cache.products')->save($cacheProduct);
//        } else {
//            $product = $cacheProduct->get();
//        }

        $results = $this->getDoctrine()->getRepository(ProviderExchange::class)->findAll();

        return $this->render("index/index.html.twig", [
            'results' => $results
        ]);
    }
}
