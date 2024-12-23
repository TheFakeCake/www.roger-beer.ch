<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Services\PublicationsService;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="accueil", options={"sitemap" = true})
     */
    public function accueil(): Response
    {
        return $this->render('app/accueil.html.twig');
    }

    /**
     * @Route("/prestations", name="prestations", options={"sitemap" = true})
     */
    public function prestations(): Response
    {
        return $this->render('app/prestations.html.twig');
    }

    /**
     * @Route("/qui-suis-je", name="biographie", options={"sitemap" = true})
     */
    public function biographie(): Response
    {
        return $this->render('app/biographie.html.twig');
    }

    /**
     * @Route("/autres-activites", name="activites", options={"sitemap" = true})
     */
    public function activites(): Response
    {
        return $this->render('app/activites.html.twig');
    }

    /**
     * @Route("/publications", name="publications", options={"sitemap" = true})
     */
    public function publications(PublicationsService $publicationsService): Response
    {
        return $this->render('app/publications.html.twig', [
            'publications_in_categories' => $publicationsService->getPublicationsInCategories(),
        ]);
    }

    /**
     * @Route("/contact", name="contact", options={"sitemap" = true})
     */
    public function contact(LoggerInterface $logger, MailerInterface $mailerService, Request $request): Response
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // If honeypot is filled, return success without sending the email
            if (null !== $form->get('email_address')->getData()) {
                $logger->warning('Contact form submitted with filled honeypot');

                return $this->contactSuccess();
            }
            /** @var Contact */
            $contact = $form->getData();

            $mail = (new TemplatedEmail())
                ->from(new Address('webmaster@roger-beer.ch', 'www.roger-beer.ch'))
                ->to(new Address('roger.beer@bluewin.ch', 'Roger Beer'))
                ->subject("Nouveau message de la part de {$contact->getFullName()}")
                ->htmlTemplate('emails/contact.html.twig')
                ->textTemplate('emails/contact.txt.twig')
                ->context(['contact' => $contact])
            ;

            // If the mail is dispatched with success, redirect to Contact page
            // showing success flash message
            try {
                $mailerService->send($mail);

                return $this->contactSuccess();
            }
            // Else an error is shown
            catch (TransportExceptionInterface $e) {
                $form->addError(new FormError('Un problème est survenu lors de l\'envoi du message. Si le problème persiste, merci de me contacter directement par e-mail ou téléphone.'));
            }
        }

        return $this->render('app/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function contactSuccess(): Response
    {
        $this->addFlash('contactSuccess', 'Votre message est envoyé. Vous serez contacté très prochainement.');

        return $this->redirectToRoute('contact');
    }
}
