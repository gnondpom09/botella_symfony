<?php

namespace BotellaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use BotellaBundle\Entity\Movie;
use BotellaBundle\Form\MovieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 *
 */
class MovieController extends Controller
{
    // list all movies
    public function galleryAction()
    {
        $em = $this->getDoctrine()
        ->getManager();

        $listMovies = $em->getRepository('BotellaBundle:Movie')
        ->myFindAll();

        return $this->render('BotellaBundle:blog:videos.html.twig', array(
            'listMovies' => $listMovies
        ));
    }
    // list all movies in backoffice
    public function listMoviesAction($page)
    {
        // Pages
        if ($page < 1) {
            throw $this->createNotFoundException("La page " . $page . " n'existe pas");
        }
        $nbPerPage = 5;

        $em = $this->getDoctrine()
        ->getManager();

        $listMovies = $em->getRepository('BotellaBundle:Movie')
        ->getMovies($page, $nbPerPage);

        $nbPages = ceil(count($listMovies) / $nbPerPage);
        if ($page > $nbPages) {
            throw new NotFoundHttpException("La page " . $page . " n'existe pas");
        }


        return $this->render('BotellaBundle:movies:list-movies.html.twig', array(
            'listMovies' => $listMovies,
            'nbPages' => $nbPages,
            'page'    => $page
        ));
    }
    // Insert a movie in the gallery
    public function addAction(Request $request)
    {
        $movie = new Movie();
        $form     = $this->get('form.factory')->create(MovieType::class, $movie);
        $form->handleRequest($request);

        if ($request->isMethod('POST') ) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movie);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'vidéo ajoutée à la galerie');

            return $this->redirectToRoute('list_movies');
        }
        return $this->render('BotellaBundle:movies:add-movie.html.twig', array(
            'form' => $form->createView()
        ));
    }

    // Modify movie
    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()
        ->getManager();
        $painting = $em->getRepository('BotellaBundle:Movie')
        ->find($id);

        if (null === $movie) {
            throw new NotFoundHttpException("La vidéo " . $id . " n'existe pas");
        }

        $form = $this->get('form.factory')->create(MovieType::class, $movie);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $em->flush();

            // Message
            $request->getSession()->getFlashBag()->add('notice', 'vidéo modifiée');

            return $this->redirectToRoute('list_movies');
        }
        // Display form modify movies
        return $this->render('BotellaBundle:movies:add-movie.html.twig', array(
            'movie' => $movie,
            'form' => $form->createView()
        ));
    }
    // Delete movie
    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $movie = $em->getRepository('BotellaBundle:Movie')->find($id);

        if (null === $movie) {
            throw new NotFoundHttpException("La video " . $id . " n'existe pqs");
        }

        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($movie);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'vidéo supprimée');

            return $this->redirectToRoute('list_movies');
        }
        return $this->render('BotellaBundle:movies:delete-movie.html.twig', array(
            'movie' => $movie,
            'form' => $form->createView()
        ));
    }
}
