<?php

/* BotellaBundle::layout_page.html.twig */
class __TwigTemplate_3f5d79e550dcf2daec7b3c520697bd712252a86e0398b7133eb0525164e7bccc extends Twig_Template
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
        $__internal_bb971f234d4e7751002db4f06c3897ad4c53ab1d54d90f4ecf78f0bcafd37fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb971f234d4e7751002db4f06c3897ad4c53ab1d54d90f4ecf78f0bcafd37fd3->enter($__internal_bb971f234d4e7751002db4f06c3897ad4c53ab1d54d90f4ecf78f0bcafd37fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout_page.html.twig"));

        $__internal_59cd7945f86ef433970b801b92c6aa076769971b8434acfc26d59cbd617e3b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cd7945f86ef433970b801b92c6aa076769971b8434acfc26d59cbd617e3b4f->enter($__internal_59cd7945f86ef433970b801b92c6aa076769971b8434acfc26d59cbd617e3b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout_page.html.twig"));

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
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 150
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
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.events.touch.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 179
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
        
        $__internal_bb971f234d4e7751002db4f06c3897ad4c53ab1d54d90f4ecf78f0bcafd37fd3->leave($__internal_bb971f234d4e7751002db4f06c3897ad4c53ab1d54d90f4ecf78f0bcafd37fd3_prof);

        
        $__internal_59cd7945f86ef433970b801b92c6aa076769971b8434acfc26d59cbd617e3b4f->leave($__internal_59cd7945f86ef433970b801b92c6aa076769971b8434acfc26d59cbd617e3b4f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a8891caa96703b6d95cfdadad4214b4d5569380b3d265744b5f887b76b9cddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8891caa96703b6d95cfdadad4214b4d5569380b3d265744b5f887b76b9cddd->enter($__internal_5a8891caa96703b6d95cfdadad4214b4d5569380b3d265744b5f887b76b9cddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0869368f1e01d0192a9cbb8e91f644a6cdaf85dd04362b0d0152ff48ee1bf412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0869368f1e01d0192a9cbb8e91f644a6cdaf85dd04362b0d0152ff48ee1bf412->enter($__internal_0869368f1e01d0192a9cbb8e91f644a6cdaf85dd04362b0d0152ff48ee1bf412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Laurent Botella";
        
        $__internal_0869368f1e01d0192a9cbb8e91f644a6cdaf85dd04362b0d0152ff48ee1bf412->leave($__internal_0869368f1e01d0192a9cbb8e91f644a6cdaf85dd04362b0d0152ff48ee1bf412_prof);

        
        $__internal_5a8891caa96703b6d95cfdadad4214b4d5569380b3d265744b5f887b76b9cddd->leave($__internal_5a8891caa96703b6d95cfdadad4214b4d5569380b3d265744b5f887b76b9cddd_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca6259554b1c657ea21a09a7dea989350f2c83a15811a979f6a416c6fef1944d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6259554b1c657ea21a09a7dea989350f2c83a15811a979f6a416c6fef1944d->enter($__internal_ca6259554b1c657ea21a09a7dea989350f2c83a15811a979f6a416c6fef1944d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_02cfcba2a9d695bd4ec37c5094f29ea15c8f5ce14aa1a43cdcd8bc5239a0cedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cfcba2a9d695bd4ec37c5094f29ea15c8f5ce14aa1a43cdcd8bc5239a0cedc->enter($__internal_02cfcba2a9d695bd4ec37c5094f29ea15c8f5ce14aa1a43cdcd8bc5239a0cedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <!-- style application -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        
        $__internal_02cfcba2a9d695bd4ec37c5094f29ea15c8f5ce14aa1a43cdcd8bc5239a0cedc->leave($__internal_02cfcba2a9d695bd4ec37c5094f29ea15c8f5ce14aa1a43cdcd8bc5239a0cedc_prof);

        
        $__internal_ca6259554b1c657ea21a09a7dea989350f2c83a15811a979f6a416c6fef1944d->leave($__internal_ca6259554b1c657ea21a09a7dea989350f2c83a15811a979f6a416c6fef1944d_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9e3d10d002d431a8a409e3a655e3667e02f97d2ca549e9278bba74628283f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e3d10d002d431a8a409e3a655e3667e02f97d2ca549e9278bba74628283f13->enter($__internal_d9e3d10d002d431a8a409e3a655e3667e02f97d2ca549e9278bba74628283f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_750188d2ffc0efdc5a1a31577329e380d6af199b2659610105c7f216a44caa84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750188d2ffc0efdc5a1a31577329e380d6af199b2659610105c7f216a44caa84->enter($__internal_750188d2ffc0efdc5a1a31577329e380d6af199b2659610105c7f216a44caa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "    <!--contenu principal-->
    ";
        
        $__internal_750188d2ffc0efdc5a1a31577329e380d6af199b2659610105c7f216a44caa84->leave($__internal_750188d2ffc0efdc5a1a31577329e380d6af199b2659610105c7f216a44caa84_prof);

        
        $__internal_d9e3d10d002d431a8a409e3a655e3667e02f97d2ca549e9278bba74628283f13->leave($__internal_d9e3d10d002d431a8a409e3a655e3667e02f97d2ca549e9278bba74628283f13_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fe8ee8cbe0b36ece1f720a0b5a3aae14c5976de8703d7b4296e16cdb0b57ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe8ee8cbe0b36ece1f720a0b5a3aae14c5976de8703d7b4296e16cdb0b57ce2->enter($__internal_3fe8ee8cbe0b36ece1f720a0b5a3aae14c5976de8703d7b4296e16cdb0b57ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ace240878b9ba48bbccd1b0295eccd0a4ab3d731575085b9cb7c777e9b9a4767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace240878b9ba48bbccd1b0295eccd0a4ab3d731575085b9cb7c777e9b9a4767->enter($__internal_ace240878b9ba48bbccd1b0295eccd0a4ab3d731575085b9cb7c777e9b9a4767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ace240878b9ba48bbccd1b0295eccd0a4ab3d731575085b9cb7c777e9b9a4767->leave($__internal_ace240878b9ba48bbccd1b0295eccd0a4ab3d731575085b9cb7c777e9b9a4767_prof);

        
        $__internal_3fe8ee8cbe0b36ece1f720a0b5a3aae14c5976de8703d7b4296e16cdb0b57ce2->leave($__internal_3fe8ee8cbe0b36ece1f720a0b5a3aae14c5976de8703d7b4296e16cdb0b57ce2_prof);

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
        return array (  418 => 139,  413 => 137,  409 => 136,  405 => 135,  401 => 134,  397 => 133,  392 => 132,  383 => 131,  372 => 83,  363 => 82,  351 => 11,  346 => 8,  337 => 7,  319 => 5,  290 => 179,  286 => 178,  255 => 150,  248 => 146,  244 => 145,  238 => 141,  236 => 131,  225 => 123,  217 => 118,  211 => 115,  205 => 112,  199 => 109,  193 => 106,  184 => 100,  178 => 97,  172 => 94,  166 => 91,  158 => 85,  156 => 82,  144 => 73,  136 => 68,  128 => 63,  120 => 58,  112 => 53,  105 => 48,  99 => 46,  97 => 45,  91 => 42,  87 => 41,  77 => 34,  71 => 31,  67 => 30,  63 => 29,  57 => 26,  42 => 13,  40 => 7,  35 => 5,  29 => 1,);
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
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js\" charset=\"utf-8\"></script>
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
