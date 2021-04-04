<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('app/accueil.html.twig');
    }

    /**
     * @Route("/prestations", name="prestations")
     */
    public function prestations(): Response
    {
        return $this->render('app/prestations.html.twig');
    }

    /**
     * @Route("/qui-suis-je", name="biographie")
     */
    public function biographie(): Response
    {
        return $this->render('app/biographie.html.twig');
    }

    /**
     * @Route("/publications", name="publications")
     */
    public function publications(): Response
    {
        return $this->render('app/publications.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('app/contact.html.twig');
    }
}
