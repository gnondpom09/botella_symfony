<?php

namespace BotellaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use BotellaBundle\Entity\Article;
use BotellaBundle\Form\ArticleType;
use BotellaBundle\Form\ArticleEditType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ArticleController extends Controller
{
    // Index articles - page expositions : article avec pagination
    public function menuAction($page)
    {
        // Pages
        if ($page < 1) {
            throw $this->createNotFoundException("La page " . $page . " n'existe pas");
        }

        $nbPerPage = 1;

        $listArticles = $this->getDoctrine()
        ->getManager()
        ->getRepository('BotellaBundle:Article')
        ->getArticles($page, $nbPerPage);

        $nbPages = ceil(count($listArticles) / $nbPerPage);

        if ($page > $nbPages) {
            throw new NotFoundHttpException("La page " . $page . " n'existe pas");
        }

        // Display page expositions
        return $this->render('BotellaBundle:blog:expositions.html.twig', array(
            'listArticles' => $listArticles,
            'nbPages'      => $nbPages,
            'page'         => $page
        ));
    }
    // Detail article front
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        // Pour récupérer une seule annonce, on utilise la méthode find($id)
        $article = $em->getRepository('BotellaBundle:Article')->find($id);

        // ou null si l'id $id n'existe pas, d'où ce if :
        if (null === $article) {
            throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
        }

        return $this->render('BotellaBundle:posts:view.html.twig', array(
            'article' => $article,
        ));
    }
    // Detail article back
    public function detailPostAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        // Pour récupérer une seule annonce, on utilise la méthode find($id)
        $article = $em->getRepository('BotellaBundle:Article')->find($id);

        // ou null si l'id $id n'existe pas, d'où ce if :
        if (null === $article) {
            throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
        }

        return $this->render('BotellaBundle:posts:detail-article-back.html.twig', array(
            'article' => $article,
        ));
    }
    public function addAction(Request $request)
    {
        $article = new Article();
        $form    = $this->get('form.factory')->create(ArticleType::class, $article);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Article bien enregistrée.');

            return $this->redirectToRoute('blog_view', array(
                'id' => $article->getId()
            ));
        }

        return $this->render('BotellaBundle:posts:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('BotellaBundle:Article')->find($id);

        if (null === $article) {
            throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
        }

        $form = $this->get('form.factory')->create(ArticleEditType::class, $article);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            // Inutile de persister ici, Doctrine connait déjà notre annonce
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Article bien modifiée.');
            return $this->redirectToRoute('blog_view', array('id' => $article->getId()));
        }
        return $this->render('BotellaBundle:posts:edit.html.twig', array(
            'article' => $article,
            'form'   => $form->createView(),
        ));
    }
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('BotellaBundle:Article')->find($id);

        if (null === $article) {
            throw new NotFoundHttpException("L'article d'id " . $id . " n'existe pas.");
        }

        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($article);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

            return $this->redirectToRoute('botella_homepage');
        }

        return $this->render('BotellaBundle:posts:delete.html.twig', array(
            'article' => $article,
            'form'   => $form->createView(),
        ));
    }
    // Articles Homepage
    public function listAction($limit)
    {
        $em = $this->getDoctrine()
        ->getManager();

        $listArticles = $em->getRepository('BotellaBundle:Article')->findBy(
            array(),
            array('date' => 'desc'),
            $limit, //$limit, // A fixer à 3 pour la pour la page d accueil
            0 // a partir du premier
        );
        if ($limit == 1) {
            return $this->render('BotellaBundle:posts:single-post.html.twig', array(
                'listArticles' => $listArticles
            ));
        }
        else {
            return $this->render('BotellaBundle:Posts:list-posts.html.twig', array(
                'listArticles' => $listArticles
            ));
        }
    }
    // Index contest
    public function contestAction($page)
    {
        // Pages
        if ($page < 1) {
            throw $this->createNotFoundException("La page " . $page . " n'existe pas");
        }

        $nbPerPage = 10;

        $listArticles = $this->getDoctrine()
        ->getManager()
        ->getRepository('BotellaBundle:Article')
        ->getArticles($page, $nbPerPage);

        $nbPages = ceil(count($listArticles) / $nbPerPage);

        if ($page > $nbPages) {
            throw new NotFoundHttpException("La page " . $page . " n'existe pas");
        }

        // Display page expositions
        return $this->render('BotellaBundle:blog:contest.html.twig', array(
            'listArticles' => $listArticles,
            'nbPages'      => $nbPages,
            'page'         => $page
        ));
    }
    // List of articles in the backoffice
    public function listPostsAction($page)
    {
        // Pages
        if ($page < 1) {
            throw $this->createNotFoundException("La page " . $page . " n'existe pas");
        }

        $nbPerPage = 10;

        $listArticles = $this->getDoctrine()
        ->getManager()
        ->getRepository('BotellaBundle:Article')
        ->getArticles($page, $nbPerPage);

        $nbPages = ceil(count($listArticles) / $nbPerPage);

        if ($page > $nbPages) {
            throw new NotFoundHttpException("La page " . $page . " n'existe pas");
        }

        // Display articles in back office
        return $this->render('BotellaBundle:posts:list-post-back.html.twig', array(
            'listArticles' => $listArticles,
            'nbPages'      => $nbPages,
            'page'         => $page
        ));
    }
}
