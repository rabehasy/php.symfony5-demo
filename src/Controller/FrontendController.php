<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="frontend_default")
     */
    public function index(): Response
    {
        return $this->render('frontend/index.html.twig', [
            'name' => 'Nahary',
        ]);
    }

    /**
     * @Route("/contact.html", name="frontend_contact")
     */
    public function contact(): Response
    {
        return $this->render('frontend/contact.html.twig', [
            'name' => 'Nahary',
        ]);
    }
}

