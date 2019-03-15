<?php

namespace BotellaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use BotellaBundle\Entity\Contact;
use BotellaBundle\Form\ContactType;
use BotellaBundle\Form\NewsletterType;
use BotellaBundle\Email\ContactMailer;

class DefaultController extends Controller
{
    // HomePage
    public function indexAction()
    {
        // Display HomePage
        return $this->render('BotellaBundle:blog:home.html.twig');
    }
    // Page biography
    Public function biographyAction()
    {
        return $this->render('BotellaBundle:blog:bio.html.twig');
    }
    // Page gallery
    public function galleryAction()
    {
        return $this->render('BotellaBundle:blog:gallery.html.twig');
    }
    // Page videos
    public function videosAction()
    {
        return $this->render('BotellaBundle:blog:videos.html.twig');
    }
    // Page expositions
    public function expositionsAction()
    {
        return $this->render('BotellaBundle:blog:expositions.html.twig');
    }
    // Page contact
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form    = $this->get('form.factory')->create(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted()) //Replace isSubmitted() by isXmlHttpRequest
        {
            // Get data of the form
            $firstname = $form['firstname']->getData('firstname');
            $name = $form['lastname']->getData('lastname');
            $email = $form['email']->getData('email');
            $subject = $form['subject']->getData('subject');
            $body = $form['message']->getData('message');

            $message = \Swift_Message::newInstance()
              ->setFrom($email)
              ->setSubject($subject)
              ->setTo('laurent.botella@vivaldi.net')
              ->setBody($body);

            if ($form->isValid()) {
                // Send email
                $this->get('mailer')->send($message);
                $this->get('session')->getFlashBag()->add('info', 'demande de contact envoyé.');

            }
            else {
                throw new NotFoundHttpException("Erreur lors de l'envoie du message.");
                // Request ajax errors

            }
            return $this->redirectToRoute('botella_homepage');

        }

        return $this->render('BotellaBundle:blog:contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    public function legalAction()
    {
        return $this->render('BotellaBundle:blog:legal.html.twig');
    }
    // Page backoffice
    public function menubackAction()
    {
        return $this->render('BotellaBundle:blog:backoffice.html.twig');
    }
}
