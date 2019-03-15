<?php

namespace BotellaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use BotellaBundle\Entity\Painting;
use BotellaBundle\Entity\Serie;
use BotellaBundle\Form\SerieType;
use BotellaBundle\Form\PaintingType;
use BotellaBundle\Form\PaintingEditType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 *
 */
class PaintingController extends Controller
{
    // list all paintings
    public function galleryAction()
    {
        $em = $this->getDoctrine()
        ->getManager();

        $listPaintings = $em->getRepository('BotellaBundle:Painting')
        ->myFindAll();
        $listSeries = $em->getRepository('BotellaBundle:Serie')
        ->findAll();

        return $this->render('BotellaBundle:blog:gallery.html.twig', array(
            'listPaintings' => $listPaintings,
            'listSeries'    => $listSeries
        ));
    }
    // list all paintings in backoffice
    public function listPaintingsAction($page)
    {
        // Pages
        if ($page < 1) {
            throw $this->createNotFoundException("La page " . $page . " n'existe pas");
        }
        $nbPerPage = 5;

        $em = $this->getDoctrine()
        ->getManager();

        $listPaintings = $em->getRepository('BotellaBundle:Painting')
        ->getPaintings($page, $nbPerPage);

        $nbPages = ceil(count($listPaintings) / $nbPerPage);
        if ($page > $nbPages) {
            throw new NotFoundHttpException("La page " . $page . " n'existe pas");
        }


        return $this->render('BotellaBundle:paintings:list-paintings.html.twig', array(
            'listPaintings' => $listPaintings,
            'nbPages' => $nbPages,
            'page'    => $page
        ));
    }
    // Insert a painting in the gallery
    public function addAction(Request $request)
    {
        $painting = new Painting();
        $form     = $this->get('form.factory')->create(PaintingType::class, $painting);
        $form->handleRequest($request);

        if ($request->isMethod('POST') ) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($painting);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Ouvre ajoutée à la galerie');

            return $this->redirectToRoute('painting_view', array(
                'id' => $painting->getId()
            ));
        }
        return $this->render('BotellaBundle:paintings:add-painting.html.twig', array(
            'form' => $form->createView()
        ));
    }
    // Detail Painting in backoffice
    public function viewAction($id)
    {
        $em = $this->getDoctrine()
        ->getManager();
        $painting = $em->getRepository('BotellaBundle:Painting')
        ->find($id);

        if (null === $painting) {
            throw new NotFoundHttpException("L'oeuvre " . $id . " n'existe pas");
        }
        else {
            return $this->render('BotellaBundle:paintings:detail-painting.html.twig', array(
                'painting' => $painting
            ));
        }
    }
    // Modify Painting
    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()
        ->getManager();
        $painting = $em->getRepository('BotellaBundle:Painting')
        ->find($id);

        if (null === $painting) {
            throw new NotFoundHttpException("L'oeuvre " . $id . " n'existe pas");
        }

        $form = $this->get('form.factory')->create(PaintingEditType::class, $painting);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $em->flush();

            // Message
            $request->getSession()->getFlashBag()->add('notice', 'Oeuvre modifiée');

            return $this->redirectToRoute('painting_view', array(
                'id' => $painting->getId()
            ));
        }
        // Display form modify painting
        return $this->render('BotellaBundle:paintings:edit-painting.html.twig', array(
            'painting' => $painting,
            'form' => $form->createView()
        ));
    }
    // Delete Painting
    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $painting = $em->getRepository('BotellaBundle:Painting')->find($id);

        if (null === $painting) {
            throw new NotFoundHttpException("L'ouvre " . $id . " n'existe pqs");
        }

        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($painting);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Oeuvre supprimée');

            return $this->redirectToRoute('blog_backoffice');
        }
        return $this->render('BotellaBundle:paintings:delete-painting.html.twig', array(
            'painting' => $painting,
            'form' => $form->createView()
        ));
    }

    /////////////////////////////////////////////////////////////////////////
    ////////////////////////// SERIES ///////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////

    // liste des series
    public function listSeriesAction()
    {
        $em = $this->getDoctrine()
        ->getManager();

        $listSeries = $em->getRepository('BotellaBundle:Serie')
        ->findAll();

        return $this->render('BotellaBundle:paintings:list-series.html.twig', array(
            'listSeries' => $listSeries
        ));
    }
    // Ajouter une Serie
    public function addSerieAction(Request $request)
    {
        $serie = new Serie();
        $form  = $this->get('form.factory')->create(SerieType::class, $serie);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Série ajoutée');

            return $this->redirectToRoute('serie_list');
        }
        return $this->render('BotellaBundle:paintings:add-serie.html.twig', array(
            'form' => $form->createView()
        ));
    }
    // Modify serie title
    public function editSerieAction($id, Request $request)
    {
        $em = $this->getDoctrine()
        ->getManager();
        $serie = $em->getRepository('BotellaBundle:Serie')
        ->find($id);

        if (null === $serie) {
            throw new NotFoundHttpException("La série " . $id . " n'existe pas");
        }

        $form = $this->get('form.factory')->create(SerieType::class, $serie);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $em->flush();

            // Message
            $request->getSession()->getFlashBag()->add('notice', 'Titre modifiée');

            return $this->redirectToRoute('serie_list');
        }
        // Display form modify painting
        return $this->render('BotellaBundle:paintings:add-serie.html.twig', array(
            'serie' => $serie,
            'form' => $form->createView()
        ));
    }
    // Supprimer une Serie
    public function deleteSerieAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $serie = $em->getRepository('BotellaBundle:Serie')->find($id);

        if (null === $serie) {
            throw new NotFoundHttpException("La serie " . $id . " n'existe pqs");
        }

        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($serie);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Serie supprimée');

            return $this->redirectToRoute('serie_list');
        }
        return $this->render('BotellaBundle:paintings:delete-serie.html.twig', array(
            'serie' => $serie,
            'form' => $form->createView()
        ));
    }
}
