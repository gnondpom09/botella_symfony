<?php

/* BotellaBundle::layout_gallery.html.twig */
class __TwigTemplate_6b7b5c1f735efac0f2a29bad2ca7b76d5ec067a7fc62be035da1164ac7d2dade extends Twig_Template
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
        $__internal_d44aab2add1e3b944b2b6fbf52768423ff37d4d0d4546d8175e8f7836b157046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44aab2add1e3b944b2b6fbf52768423ff37d4d0d4546d8175e8f7836b157046->enter($__internal_d44aab2add1e3b944b2b6fbf52768423ff37d4d0d4546d8175e8f7836b157046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout_gallery.html.twig"));

        $__internal_c50ab3331a16be54f91f76b6ca06c2159c0d660f3644689c0e58e67a3fc67000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50ab3331a16be54f91f76b6ca06c2159c0d660f3644689c0e58e67a3fc67000->enter($__internal_c50ab3331a16be54f91f76b6ca06c2159c0d660f3644689c0e58e67a3fc67000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout_gallery.html.twig"));

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

    <footer id=\"section5-gallery\" class=\"under enhance\">
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

    <!-- Lightbox -->
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.events.touch.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/simplelightBox.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('a[data-rel^=lightcase]').lightcase({
                // options
                transition: 'scrollHorizontal',
                showSequenceInfo: false,
                showTitle: false,
                swipe: true // modifier la vitesse
            });
        });
    </script>


</body>
</html>
";
        
        $__internal_d44aab2add1e3b944b2b6fbf52768423ff37d4d0d4546d8175e8f7836b157046->leave($__internal_d44aab2add1e3b944b2b6fbf52768423ff37d4d0d4546d8175e8f7836b157046_prof);

        
        $__internal_c50ab3331a16be54f91f76b6ca06c2159c0d660f3644689c0e58e67a3fc67000->leave($__internal_c50ab3331a16be54f91f76b6ca06c2159c0d660f3644689c0e58e67a3fc67000_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbdd10a2a66a3504d6701943c4069e31c3bcea4052c66602b7bbdafd8a8b8d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdd10a2a66a3504d6701943c4069e31c3bcea4052c66602b7bbdafd8a8b8d8f->enter($__internal_dbdd10a2a66a3504d6701943c4069e31c3bcea4052c66602b7bbdafd8a8b8d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70e5a60c33b36b9c279bbc9ace888d75e519f94834a122461e85444e7bba259e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e5a60c33b36b9c279bbc9ace888d75e519f94834a122461e85444e7bba259e->enter($__internal_70e5a60c33b36b9c279bbc9ace888d75e519f94834a122461e85444e7bba259e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Laurent Botella";
        
        $__internal_70e5a60c33b36b9c279bbc9ace888d75e519f94834a122461e85444e7bba259e->leave($__internal_70e5a60c33b36b9c279bbc9ace888d75e519f94834a122461e85444e7bba259e_prof);

        
        $__internal_dbdd10a2a66a3504d6701943c4069e31c3bcea4052c66602b7bbdafd8a8b8d8f->leave($__internal_dbdd10a2a66a3504d6701943c4069e31c3bcea4052c66602b7bbdafd8a8b8d8f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3235bde8a8c2761af4c0f6598a2bb43652b4ed65689ecb855feb85a6352c475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3235bde8a8c2761af4c0f6598a2bb43652b4ed65689ecb855feb85a6352c475->enter($__internal_a3235bde8a8c2761af4c0f6598a2bb43652b4ed65689ecb855feb85a6352c475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8ab7f494ed087d11f40a3ae04c7241012719c12f0721460f8492e62da1e7b7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab7f494ed087d11f40a3ae04c7241012719c12f0721460f8492e62da1e7b7da->enter($__internal_8ab7f494ed087d11f40a3ae04c7241012719c12f0721460f8492e62da1e7b7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <!-- style application -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        
        $__internal_8ab7f494ed087d11f40a3ae04c7241012719c12f0721460f8492e62da1e7b7da->leave($__internal_8ab7f494ed087d11f40a3ae04c7241012719c12f0721460f8492e62da1e7b7da_prof);

        
        $__internal_a3235bde8a8c2761af4c0f6598a2bb43652b4ed65689ecb855feb85a6352c475->leave($__internal_a3235bde8a8c2761af4c0f6598a2bb43652b4ed65689ecb855feb85a6352c475_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0f7e58dd9a5e902b859b5e463f653a8e72a8ded33b3c6582d9c66d9d1a44f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f7e58dd9a5e902b859b5e463f653a8e72a8ded33b3c6582d9c66d9d1a44f87->enter($__internal_b0f7e58dd9a5e902b859b5e463f653a8e72a8ded33b3c6582d9c66d9d1a44f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e9ba32f2f66d656578f001a868d8fb975e82d0f7ea5f5b228835adc21bad505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9ba32f2f66d656578f001a868d8fb975e82d0f7ea5f5b228835adc21bad505->enter($__internal_6e9ba32f2f66d656578f001a868d8fb975e82d0f7ea5f5b228835adc21bad505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "    <!--contenu principal-->
    ";
        
        $__internal_6e9ba32f2f66d656578f001a868d8fb975e82d0f7ea5f5b228835adc21bad505->leave($__internal_6e9ba32f2f66d656578f001a868d8fb975e82d0f7ea5f5b228835adc21bad505_prof);

        
        $__internal_b0f7e58dd9a5e902b859b5e463f653a8e72a8ded33b3c6582d9c66d9d1a44f87->leave($__internal_b0f7e58dd9a5e902b859b5e463f653a8e72a8ded33b3c6582d9c66d9d1a44f87_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecab4fb857a091c006e0fb2b934af3313d48ac7260de8aaf10a1a80e202f48e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecab4fb857a091c006e0fb2b934af3313d48ac7260de8aaf10a1a80e202f48e0->enter($__internal_ecab4fb857a091c006e0fb2b934af3313d48ac7260de8aaf10a1a80e202f48e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_12b9c41d84a028eacba07e53e608af64ce9e5cc67e72cfb21da7b3e8ed5e0daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b9c41d84a028eacba07e53e608af64ce9e5cc67e72cfb21da7b3e8ed5e0daa->enter($__internal_12b9c41d84a028eacba07e53e608af64ce9e5cc67e72cfb21da7b3e8ed5e0daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_12b9c41d84a028eacba07e53e608af64ce9e5cc67e72cfb21da7b3e8ed5e0daa->leave($__internal_12b9c41d84a028eacba07e53e608af64ce9e5cc67e72cfb21da7b3e8ed5e0daa_prof);

        
        $__internal_ecab4fb857a091c006e0fb2b934af3313d48ac7260de8aaf10a1a80e202f48e0->leave($__internal_ecab4fb857a091c006e0fb2b934af3313d48ac7260de8aaf10a1a80e202f48e0_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle::layout_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 139,  393 => 137,  389 => 136,  385 => 135,  381 => 134,  377 => 133,  372 => 132,  363 => 131,  352 => 83,  343 => 82,  331 => 11,  326 => 8,  317 => 7,  299 => 5,  272 => 161,  268 => 160,  255 => 150,  248 => 146,  244 => 145,  238 => 141,  236 => 131,  225 => 123,  217 => 118,  211 => 115,  205 => 112,  199 => 109,  193 => 106,  184 => 100,  178 => 97,  172 => 94,  166 => 91,  158 => 85,  156 => 82,  144 => 73,  136 => 68,  128 => 63,  120 => 58,  112 => 53,  105 => 48,  99 => 46,  97 => 45,  91 => 42,  87 => 41,  77 => 34,  71 => 31,  67 => 30,  63 => 29,  57 => 26,  42 => 13,  40 => 7,  35 => 5,  29 => 1,);
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

    <footer id=\"section5-gallery\" class=\"under enhance\">
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
                swipe: true // modifier la vitesse
            });
        });
    </script>


</body>
</html>
", "BotellaBundle::layout_gallery.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/layout_gallery.html.twig");
    }
}
