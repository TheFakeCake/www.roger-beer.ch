<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function contact(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // TODO Send email

            $this->addFlash('contactSuccess', 'Votre message est envoyé. Vous serez contacté très prochainement.');

            return $this->redirectToRoute('contact');
        }

        return $this->render('app/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
