<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // botella_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'botella_homepage');
            }

            return array (  '_controller' => 'BotellaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'botella_homepage',);
        }

        // botella_bio
        if ('/biography' === $pathinfo) {
            return array (  '_controller' => 'BotellaBundle\\Controller\\DefaultController::biographyAction',  '_route' => 'botella_bio',);
        }

        if (0 === strpos($pathinfo, '/back')) {
            // blog_backoffice
            if ('/back' === $pathinfo) {
                return array (  '_controller' => 'BotellaBundle\\Controller\\DefaultController::menubackAction',  '_route' => 'blog_backoffice',);
            }

            // blog_add
            if ('/back/add' === $pathinfo) {
                return array (  '_controller' => 'BotellaBundle\\Controller\\ArticleController::addAction',  '_route' => 'blog_add',);
            }

            // article_view
            if (0 === strpos($pathinfo, '/back/article') && preg_match('#^/back/article/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_view')), array (  '_controller' => 'BotellaBundle\\Controller\\ArticleController::detailPostAction',));
            }

            // blog_edit
            if (0 === strpos($pathinfo, '/back/edit') && preg_match('#^/back/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_edit')), array (  '_controller' => 'BotellaBundle\\Controller\\ArticleController::editAction',));
            }

            // blog_delete
            if (0 === strpos($pathinfo, '/back/delete') && preg_match('#^/back/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_delete')), array (  '_controller' => 'BotellaBundle\\Controller\\ArticleController::deleteAction',));
            }

            // article_list
            if (0 === strpos($pathinfo, '/back/list_articles') && preg_match('#^/back/list_articles(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_list')), array (  '_controller' => 'BotellaBundle\\Controller\\ArticleController::listPostsAction',  'page' => 1,  'requirements' =>   array (    'page' => '\\d*',  ),));
            }

            // painting_list
            if (0 === strpos($pathinfo, '/back/list_paintings') && preg_match('#^/back/list_paintings(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'painting_list')), array (  '_controller' => 'BotellaBundle\\Controller\\PaintingController::listPaintingsAction',  'page' => 1,  'requirements' =>   array (    'page' => '\\d*',  ),));
            }

            // painting_view
            if (preg_match('#^/back/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'painting_view')), array (  '_controller' => 'BotellaBundle\\Controller\\PaintingController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/back/add_')) {
                // painting_add
                if ('/back/add_painting' === $pathinfo) {
                    return array (  '_controller' => 'BotellaBundle\\Controller\\PaintingController::addAction',  '_route' => 'painting_add',);
                }

                // serie_add
                if ('/back/add_serie' === $pathinfo) {
                    return array (  '_controller' => 'BotellaBundle\\Controller\\PaintingController::addSerieAction',  '_route' => 'serie_add',);
                }

                // movie_add
                if ('/back/add_movie' === $pathinfo) {
                    return array (  '_controller' => 'BotellaBundle\\Controller\\MovieController::addAction',  '_route' => 'movie_add',);
                }

            }

            elseif (0 === strpos($pathinfo, '/back/edit_')) {
                // painting_edit
                if (0 === strpos($pathinfo, '/back/edit_painting') && preg_match('#^/back/edit_painting/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'painting_edit')), array (  '_controller' => 'BotellaBundle\\Controller\\PaintingController::editAction',));
                }

                // serie_edit
                if (0 === strpos($pathinfo, '/back/edit_serie') && preg_match('#^/back/edit_serie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'serie_edit')), array (  '_controller' => 'BotellaBundle\\Controller\\PaintingController::editSerieAction',));
                }

                // movie_edit
                if (0 === strpos($pathinfo, '/back/edit_movie') && preg_match('#^/back/edit_movie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'movie_edit')), array (  '_controller' => 'BotellaBundle\\Controller\\MovieController::editMovieAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/back/delete_')) {
                // painting_delete
                if (0 === strpos($pathinfo, '/back/delete_painting') && preg_match('#^/back/delete_painting/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'painting_delete')), array (  '_controller' => 'BotellaBundle\\Controller\\PaintingController::deleteAction',));
                }

                // serie_delete
                if (0 === strpos($pathinfo, '/back/delete_serie') && preg_match('#^/back/delete_serie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'serie_delete')), array (  '_controller' => 'BotellaBundle\\Controller\\PaintingController::deleteSerieAction',));
                }

                // movie_delete
                if (0 === strpos($pathinfo, '/back/delete_movie') && preg_match('#^/back/delete_movie/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'movie_delete')), array (  '_controller' => 'BotellaBundle\\Controller\\MovieController::deleteAction',));
                }

            }

            // serie_list
            if ('/back/series' === $pathinfo) {
                return array (  '_controller' => 'BotellaBundle\\Controller\\PaintingController::listSeriesAction',  '_route' => 'serie_list',);
            }

            // list_movies
            if ('/back/movies' === $pathinfo) {
                return array (  '_controller' => 'BotellaBundle\\Controller\\MovieController::listMoviesAction',  'page' => 1,  'requirements' => '\\d*',  '_route' => 'list_movies',);
            }

            if (0 === strpos($pathinfo, '/back/profile')) {
                // fos_user_profile_show
                if ('/back/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/back/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

            }

            elseif (0 === strpos($pathinfo, '/back/resetting')) {
                // fos_user_resetting_request
                if ('/back/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/back/resetting/reset') && preg_match('#^/back/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/back/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/back/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

            // fos_user_change_password
            if ('/back/change_password/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        // botella_gallery
        if ('/gallery' === $pathinfo) {
            return array (  '_controller' => 'BotellaBundle\\Controller\\PaintingController::galleryAction',  '_route' => 'botella_gallery',);
        }

        // botella_videos
        if ('/videos' === $pathinfo) {
            return array (  '_controller' => 'BotellaBundle\\Controller\\MovieController::galleryAction',  '_route' => 'botella_videos',);
        }

        // botella_expositions
        if (0 === strpos($pathinfo, '/expositions') && preg_match('#^/expositions(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'botella_expositions')), array (  '_controller' => 'BotellaBundle\\Controller\\ArticleController::menuAction',  'page' => 1,  'requirements' =>   array (    'page' => '\\d*',  ),));
        }

        // botella_contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'BotellaBundle\\Controller\\DefaultController::contactAction',  '_route' => 'botella_contact',);
        }

        // blog_view
        if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_view')), array (  '_controller' => 'BotellaBundle\\Controller\\ArticleController::viewAction',));
        }

        // botella_legal
        if ('/mentions_legales' === $pathinfo) {
            return array (  '_controller' => 'BotellaBundle\\Controller\\DefaultController::legalAction',  '_route' => 'botella_legal',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
