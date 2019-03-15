<?php

/* BotellaBundle::layout.html.twig */
class __TwigTemplate_5de9e4dbe40d334a59cc6035327ef7386d129df2ea9ce54c7f759ebc6cdb044f extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/fav.jpg"), "html", null, true);
        echo "\">

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <!-- fonts -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Cinzel|Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,600,600i,700,800\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/Brownhill-Script"), "html", null, true);
        echo "\">
    <!-- lightbox -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simpleLightBox.css"), "html", null, true);
        echo "\">
    <!-- Animation gallery  category -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/gallery.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!-- StepForm -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" type=\"text/css\">


    <!--JQuery-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\" charset=\"utf-8\"></script>

    <!-- Loader -->
    <script>jQuery(window).load(function(){ jQuery(\".loader\").fadeOut(\"200\"); });</script>

</head>
<body id=\"homepage\">

    <div class=\"loader progress\">
        <div class=\"indeterminate\" style=\"width: 50%;\"></div>
    </div>

    <div id=\"section1\" class=\"\">
        <header>
            <div id=\"logo\" class=\"col-xs-3\">
                <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_homepage");
        echo "\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/signature.png"), "html", null, true);
        echo "\" alt=\"logo\">
                </a>
            </div>
            ";
        // line 47
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 48
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_backoffice");
            echo "\">Backend</a>
            ";
        }
        // line 50
        echo "            <nav class=\"menu-opener\">
                <div class=\"menu-opener-inner\"></div>
            </nav>
            <nav class=\"menu\">
                <ul class=\"menu-inner\">
                    <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_bio");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_gallery");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_videos");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_expositions");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_contest");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 80
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
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" charset=\"utf-8\"></script>

    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
    <!-- Portfolio -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.filterizr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gallery.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <!-- Stepform -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 102
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
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.events.touch.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 113
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

    ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "

    <script src=\"http://code.jquery.com/jquery-1.11.3.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simplewizard.js"), "html", null, true);
        echo "\"></script>



</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Laurent Botella";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <!-- style application -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        // line 90
        echo "        <!--contenu principal-->
        ";
    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        // line 127
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stepform.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "BotellaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 130,  275 => 129,  271 => 128,  266 => 127,  263 => 126,  258 => 90,  255 => 89,  249 => 11,  244 => 8,  241 => 7,  235 => 4,  224 => 136,  218 => 132,  216 => 126,  200 => 113,  196 => 112,  183 => 102,  177 => 99,  173 => 98,  165 => 92,  163 => 89,  151 => 80,  143 => 75,  135 => 70,  127 => 65,  119 => 60,  111 => 55,  104 => 50,  98 => 48,  96 => 47,  90 => 44,  86 => 43,  63 => 23,  59 => 22,  54 => 20,  49 => 18,  44 => 16,  39 => 13,  37 => 7,  32 => 5,  28 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle::layout.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/layout.html.twig");
    }
}
