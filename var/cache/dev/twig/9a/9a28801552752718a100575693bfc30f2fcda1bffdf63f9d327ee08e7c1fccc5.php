<?php

/* BotellaBundle::layout_page.html.twig */
class __TwigTemplate_e25b16f4203d76655dbfae0ae8d8707cdd80f30149ec7d5921a52f5bca027389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c631a4966b84290d8b44e88e9d4b1e71c565155a66b8a8bcaef25328c81ff052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c631a4966b84290d8b44e88e9d4b1e71c565155a66b8a8bcaef25328c81ff052->enter($__internal_c631a4966b84290d8b44e88e9d4b1e71c565155a66b8a8bcaef25328c81ff052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout_page.html.twig"));

        $__internal_8467a33842a80ff3b99cae7735524a70f166694ddc99297048043e1c94cba9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8467a33842a80ff3b99cae7735524a70f166694ddc99297048043e1c94cba9c2->enter($__internal_8467a33842a80ff3b99cae7735524a70f166694ddc99297048043e1c94cba9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout_page.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
    <!-- Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- fonts -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Cinzel|Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,600,600i,700,800\" rel=\"stylesheet\">

    <!--JQuery-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\" charset=\"utf-8\"></script>

    <!-- Animation gallery  category -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/gallery.css"), "html", null, true);
        echo "\" type=\"text/css\">

    <!-- StepForm -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/Component.css"), "html", null, true);
        echo "\" type=\"text/css\">

    <!-- lightbox -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simpleLightBox.css"), "html", null, true);
        echo "\">

</head>
<body>
    <div id=\"section1\" class=\"section-page\">
        <header>
            <div id=\"logo\" class=\"col-xs-3\">
                <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_homepage");
        echo "\">
                    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/signature.png"), "html", null, true);
        echo "\" alt=\"logo\">
                </a>
            </div>
            ";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_backoffice");
            echo "\">Backend</a>
            ";
        }
        // line 48
        echo "            <nav class=\"menu-opener\">
                <div class=\"menu-opener-inner\"></div>
            </nav>
            <nav class=\"menu\">
                <ul class=\"menu-inner\">
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_bio");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_gallery");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_videos");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_expositions");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_contact");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                </ul>
            </nav>
        </header>

    ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "    </div>

    <footer id=\"section5-bis\" class=\"under enhance\">
        <div class=\"wrapper-footer\">
            <div class=\" col-xs-12 social\">
                <a href=\"https://www.facebook.com/laurentbotellaartist/\">
                    <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/facebook.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
                <a href=\"https://instagram.com/laurentbotella/\">
                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/instagram.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
                <a href=\"https://twitter.com/laurentbotella\">
                    <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/twiter.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
                <a href=\"https://www.youtube.com/channel/UCPhwMWvem3Ef9wXD2MX54Nw\" class=\"social icon youtube\">
                    <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/youtube.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
            </div>
            <div class=\"col-xs-12\">
                <ul class=\"sub-menu\">
                    <li>
                        <a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_bio");
        echo "\">Biographie</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_gallery");
        echo "\">Galerie</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_videos");
        echo "\">Vidéos</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_expositions");
        echo "\">Expositions</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_contact");
        echo "\">Contact</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-xs-12 credit\">
                <p>Crédit : <a href=\"https://www.linkedin.com/in/laurent-botella-9ba310125/\" target=\"new\">Laurent Botella</a> | Copyright © 2017 | <a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_legal");
        echo "\">Mentions légales</a></p>
                <span>
                    <p>Ressources : <a href=\"http://PixelBuddha.net\" target=\"new\">PixelBuddha.net</a></p>
                </span>
            </div>
        </div>
    </footer>

    ";
        // line 131
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    <!-- Portfolio -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.filterizr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gallery.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>

    <!-- Stepform -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stepform.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>

    <script type=\"text/javascript\">
    \$(function() {
        //Initialize filterizr with default options
        \$('.filtr-container').filterizr();
    });
    </script>
    <script>
    var theForm = document.getElementById( 'theForm' );

    new stepsForm( theForm, {
        onSubmit : function( form ) {
            // hide form
            classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

            /*
            form.submit()
            */

            //var messageEl = theForm.querySelector( '.final-message' );
            //messageEl.innerHTML = 'Merci pour votre message.';
            //classie.addClass( messageEl, 'show' );
        }
    } );
    </script>

    <!-- Lightbox -->
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.events.touch.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/simplelightBox.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('a[data-rel^=lightcase]').lightcase({
                // options
                transition: 'scrollHorizontal',
                showSequenceInfo: false,
                showTitle: false,
                speedIn: 120,
                speedOut:120,
                swipe: true // modifier la vitesse
            });
        });
    </script>


</body>
</html>
";
        
        $__internal_c631a4966b84290d8b44e88e9d4b1e71c565155a66b8a8bcaef25328c81ff052->leave($__internal_c631a4966b84290d8b44e88e9d4b1e71c565155a66b8a8bcaef25328c81ff052_prof);

        
        $__internal_8467a33842a80ff3b99cae7735524a70f166694ddc99297048043e1c94cba9c2->leave($__internal_8467a33842a80ff3b99cae7735524a70f166694ddc99297048043e1c94cba9c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c831aa761141e8995b888ffac79000ea6a9f19fbf430e4e43bb17b51e5e2e7d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c831aa761141e8995b888ffac79000ea6a9f19fbf430e4e43bb17b51e5e2e7d4->enter($__internal_c831aa761141e8995b888ffac79000ea6a9f19fbf430e4e43bb17b51e5e2e7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4d3602eabd3709f1c74a693560496f95d75de243a05d55b2c29bad8db9e6a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d3602eabd3709f1c74a693560496f95d75de243a05d55b2c29bad8db9e6a2d->enter($__internal_c4d3602eabd3709f1c74a693560496f95d75de243a05d55b2c29bad8db9e6a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Laurent Botella";
        
        $__internal_c4d3602eabd3709f1c74a693560496f95d75de243a05d55b2c29bad8db9e6a2d->leave($__internal_c4d3602eabd3709f1c74a693560496f95d75de243a05d55b2c29bad8db9e6a2d_prof);

        
        $__internal_c831aa761141e8995b888ffac79000ea6a9f19fbf430e4e43bb17b51e5e2e7d4->leave($__internal_c831aa761141e8995b888ffac79000ea6a9f19fbf430e4e43bb17b51e5e2e7d4_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f04eac5c106f04dcf0a4c1952e77a4765db55af898f9f1861871d2db02f459f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04eac5c106f04dcf0a4c1952e77a4765db55af898f9f1861871d2db02f459f4->enter($__internal_f04eac5c106f04dcf0a4c1952e77a4765db55af898f9f1861871d2db02f459f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7515750dfc5230659bd43eb285afc0b19d1857c6c0797caca06ec290901fae35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7515750dfc5230659bd43eb285afc0b19d1857c6c0797caca06ec290901fae35->enter($__internal_7515750dfc5230659bd43eb285afc0b19d1857c6c0797caca06ec290901fae35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <!-- style application -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        
        $__internal_7515750dfc5230659bd43eb285afc0b19d1857c6c0797caca06ec290901fae35->leave($__internal_7515750dfc5230659bd43eb285afc0b19d1857c6c0797caca06ec290901fae35_prof);

        
        $__internal_f04eac5c106f04dcf0a4c1952e77a4765db55af898f9f1861871d2db02f459f4->leave($__internal_f04eac5c106f04dcf0a4c1952e77a4765db55af898f9f1861871d2db02f459f4_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee8ea828f4e9f20635c9938d7cef2b5b3ea460bcdf8e7d1b16ce854ba95561ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8ea828f4e9f20635c9938d7cef2b5b3ea460bcdf8e7d1b16ce854ba95561ed->enter($__internal_ee8ea828f4e9f20635c9938d7cef2b5b3ea460bcdf8e7d1b16ce854ba95561ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e067c229c4277351321657142e3b2032db2afbf6fa8ffe9b187e559c4023007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e067c229c4277351321657142e3b2032db2afbf6fa8ffe9b187e559c4023007->enter($__internal_9e067c229c4277351321657142e3b2032db2afbf6fa8ffe9b187e559c4023007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "    <!--contenu principal-->
    ";
        
        $__internal_9e067c229c4277351321657142e3b2032db2afbf6fa8ffe9b187e559c4023007->leave($__internal_9e067c229c4277351321657142e3b2032db2afbf6fa8ffe9b187e559c4023007_prof);

        
        $__internal_ee8ea828f4e9f20635c9938d7cef2b5b3ea460bcdf8e7d1b16ce854ba95561ed->leave($__internal_ee8ea828f4e9f20635c9938d7cef2b5b3ea460bcdf8e7d1b16ce854ba95561ed_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_371a0774f840fc95dafe3353a8fc2b3d374090959e0f4489a4ef9c94064d0bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371a0774f840fc95dafe3353a8fc2b3d374090959e0f4489a4ef9c94064d0bd5->enter($__internal_371a0774f840fc95dafe3353a8fc2b3d374090959e0f4489a4ef9c94064d0bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f9b7385214bd4fc14ed7caacb42ed12a93ae8a53039237a5e7142bdd514cd01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b7385214bd4fc14ed7caacb42ed12a93ae8a53039237a5e7142bdd514cd01f->enter($__internal_f9b7385214bd4fc14ed7caacb42ed12a93ae8a53039237a5e7142bdd514cd01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/vendor/motion-ui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/app.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_f9b7385214bd4fc14ed7caacb42ed12a93ae8a53039237a5e7142bdd514cd01f->leave($__internal_f9b7385214bd4fc14ed7caacb42ed12a93ae8a53039237a5e7142bdd514cd01f_prof);

        
        $__internal_371a0774f840fc95dafe3353a8fc2b3d374090959e0f4489a4ef9c94064d0bd5->leave($__internal_371a0774f840fc95dafe3353a8fc2b3d374090959e0f4489a4ef9c94064d0bd5_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle::layout_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 139,  420 => 137,  416 => 136,  412 => 135,  408 => 134,  404 => 133,  399 => 132,  390 => 131,  379 => 83,  370 => 82,  358 => 11,  353 => 8,  344 => 7,  326 => 5,  297 => 180,  293 => 179,  262 => 151,  258 => 150,  254 => 149,  248 => 146,  244 => 145,  238 => 141,  236 => 131,  225 => 123,  217 => 118,  211 => 115,  205 => 112,  199 => 109,  193 => 106,  184 => 100,  178 => 97,  172 => 94,  166 => 91,  158 => 85,  156 => 82,  144 => 73,  136 => 68,  128 => 63,  120 => 58,  112 => 53,  105 => 48,  99 => 46,  97 => 45,  91 => 42,  87 => 41,  77 => 34,  71 => 31,  67 => 30,  63 => 29,  57 => 26,  42 => 13,  40 => 7,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
<head>
    <title>{% block title %}Laurent Botella{% endblock %}</title>

    {% block stylesheets %}
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <!-- style application -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" type=\"text/css\" />
    {% endblock %}

    <!-- Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- fonts -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Cinzel|Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,600,600i,700,800\" rel=\"stylesheet\">

    <!--JQuery-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\" charset=\"utf-8\"></script>

    <!-- Animation gallery  category -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/gallery.css') }}\" type=\"text/css\">

    <!-- StepForm -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/normalize.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/demo.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/Component.css') }}\" type=\"text/css\">

    <!-- lightbox -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/simpleLightBox.css') }}\">

</head>
<body>
    <div id=\"section1\" class=\"section-page\">
        <header>
            <div id=\"logo\" class=\"col-xs-3\">
                <a href=\"{{ path('botella_homepage') }}\">
                    <img src=\"{{asset('uploads/img/signature.png')}}\" alt=\"logo\">
                </a>
            </div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            <a href=\"{{ path('blog_backoffice') }}\">Backend</a>
            {% endif %}
            <nav class=\"menu-opener\">
                <div class=\"menu-opener-inner\"></div>
            </nav>
            <nav class=\"menu\">
                <ul class=\"menu-inner\">
                    <a href=\"{{ path('botella_bio') }}\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"{{ path('botella_gallery') }}\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"{{ path('botella_videos') }}\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"{{ path('botella_expositions') }}\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"{{ path('botella_contact') }}\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                </ul>
            </nav>
        </header>

    {% block body %}
    <!--contenu principal-->
    {% endblock %}
    </div>

    <footer id=\"section5-bis\" class=\"under enhance\">
        <div class=\"wrapper-footer\">
            <div class=\" col-xs-12 social\">
                <a href=\"https://www.facebook.com/laurentbotellaartist/\">
                    <img src=\"{{ asset('uploads/img/facebook.jpg') }}\" alt=\"\">
                </a>
                <a href=\"https://instagram.com/laurentbotella/\">
                    <img src=\"{{ asset('uploads/img/instagram.jpg') }}\" alt=\"\">
                </a>
                <a href=\"https://twitter.com/laurentbotella\">
                    <img src=\"{{ asset('uploads/img/twiter.jpg') }}\" alt=\"\">
                </a>
                <a href=\"https://www.youtube.com/channel/UCPhwMWvem3Ef9wXD2MX54Nw\" class=\"social icon youtube\">
                    <img src=\"{{ asset('uploads/img/youtube.jpg') }}\" alt=\"\">
                </a>
            </div>
            <div class=\"col-xs-12\">
                <ul class=\"sub-menu\">
                    <li>
                        <a href=\"{{ path('botella_bio') }}\">Biographie</a>
                    </li>
                    <li>
                        <a href=\"{{ path('botella_gallery') }}\">Galerie</a>
                    </li>
                    <li>
                        <a href=\"{{ path('botella_videos') }}\">Vidéos</a>
                    </li>
                    <li>
                        <a href=\"{{ path('botella_expositions') }}\">Expositions</a>
                    </li>
                    <li>
                        <a href=\"{{ path('botella_contact') }}\">Contact</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-xs-12 credit\">
                <p>Crédit : <a href=\"https://www.linkedin.com/in/laurent-botella-9ba310125/\" target=\"new\">Laurent Botella</a> | Copyright © 2017 | <a href=\"{{ path('botella_legal') }}\">Mentions légales</a></p>
                <span>
                    <p>Ressources : <a href=\"http://PixelBuddha.net\" target=\"new\">PixelBuddha.net</a></p>
                </span>
            </div>
        </div>
    </footer>

    {% block javascripts %}
        <script src=\"{{ asset('bundles/js/jquery.js')}}\"></script>
        <script src=\"{{ asset('bundles/js/foundation.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/js/vendor/motion-ui.js') }}\"></script>
        <script src=\"{{ asset('bundles/js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('bundles/js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('bundles/js/app.js') }}\"></script>

        <script src=\"{{ asset('js/script.js') }}\"></script>
    {% endblock %}

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    <!-- Portfolio -->
    <script src=\"{{ asset('js/jquery.filterizr.min.js') }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"{{ asset('js/gallery.js') }}\" type=\"text/javascript\" charset=\"utf-8\"></script>

    <!-- Stepform -->
    <script src=\"{{ asset('js/modernizr.custom.js') }}\"></script>
    <script src=\"{{ asset('js/classie.js') }}\"></script>
    <script src=\"{{ asset('js/stepform.js') }}\" charset=\"utf-8\"></script>

    <script type=\"text/javascript\">
    \$(function() {
        //Initialize filterizr with default options
        \$('.filtr-container').filterizr();
    });
    </script>
    <script>
    var theForm = document.getElementById( 'theForm' );

    new stepsForm( theForm, {
        onSubmit : function( form ) {
            // hide form
            classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

            /*
            form.submit()
            */

            //var messageEl = theForm.querySelector( '.final-message' );
            //messageEl.innerHTML = 'Merci pour votre message.';
            //classie.addClass( messageEl, 'show' );
        }
    } );
    </script>

    <!-- Lightbox -->
    <script src=\"{{ asset('js/jquery.events.touch.js') }}\" charset=\"utf-8\"></script>
    <script src=\"{{ asset('js/simplelightBox.js') }}\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('a[data-rel^=lightcase]').lightcase({
                // options
                transition: 'scrollHorizontal',
                showSequenceInfo: false,
                showTitle: false,
                speedIn: 120,
                speedOut:120,
                swipe: true // modifier la vitesse
            });
        });
    </script>


</body>
</html>
", "BotellaBundle::layout_page.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/layout_page.html.twig");
    }
}
