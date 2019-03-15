<?php

/* BotellaBundle::layout.html.twig */
class __TwigTemplate_1bbe048542606a75f2450ab2849430abf996eb8dfdb4cfff44c8692bb6eaafb3 extends Twig_Template
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
        echo "

    <!-- fonts -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Cinzel|Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,600,600i,700,800\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/Brownhill-Script"), "html", null, true);
        echo "\">

    <!--JQuery-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <!-- Loader -->
\t<script>jQuery(window).load(function(){ jQuery(\".loader\").fadeOut(\"200\"); });</script>

</head>
<body id=\"homepage\">
    <div class=\"loader\" style=\"background-image:url( ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/ajax-loader.png"), "html", null, true);
        echo "\" )\"></div>
    <div id=\"section1\" class=\"\">
        <header>
            <div id=\"logo\" class=\"col-md-3\">
                <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_homepage");
        echo "\">
                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/signature.png"), "html", null, true);
        echo "\" alt=\"logo\">
                </a>
            </div>
            ";
        // line 36
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_backoffice");
            echo "\">Backend</a>
            ";
        }
        // line 39
        echo "            <nav class=\"menu-opener\">
                <div class=\"menu-opener-inner\"></div>
            </nav>
            <nav class=\"menu\">
                <ul class=\"menu-inner\">
                    <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_bio");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_gallery");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_videos");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_expositions");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 64
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
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "    </div>


    <footer id=\"section5\" class=\"under container\">
        <div class=\"wrapper-footer\">
            <div class=\" col-md-12 social\">
                <a href=\"https://www.facebook.com/laurentbotellaartist/\">
                    <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/facebook.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
                <a href=\"https://instagram.com/laurentbotella/\">
                    <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/instagram.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
                <a href=\"https://twitter.com/laurentbotella\">
                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/twiter.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
                <a href=\"https://www.youtube.com/channel/UCPhwMWvem3Ef9wXD2MX54Nw\" class=\"social icon youtube\">
                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/youtube.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-12\">
                <ul class=\"sub-menu\">
                    <li>
                        <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_bio");
        echo "\">Biographie</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_gallery");
        echo "\">Galerie</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_videos");
        echo "\">Vidéos</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_expositions");
        echo "\">Expositions</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_contact");
        echo "\">Contact</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-12 credit\">
                <p>Crédit : <a href=\"https://www.linkedin.com/in/laurent-botella-9ba310125/\" target=\"new\">Laurent Botella</a> | Copyright © 2017 | <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_legal");
        echo "\">Mentions légales</a></p>
                <span>
                    <p>Ressources : <a href=\"http://PixelBuddha.net\" target=\"new\">PixelBuddha.net</a></p>
                </span>
            </div>
        </div>
    </footer>

    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" charset=\"utf-8\"></script>

    ";
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "

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

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "    <!--contenu principal-->
    ";
    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        // line 126
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
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
        return array (  259 => 126,  256 => 125,  251 => 74,  248 => 73,  242 => 11,  237 => 8,  234 => 7,  228 => 4,  220 => 128,  218 => 125,  205 => 115,  197 => 110,  191 => 107,  185 => 104,  179 => 101,  173 => 98,  164 => 92,  158 => 89,  152 => 86,  146 => 83,  137 => 76,  135 => 73,  123 => 64,  115 => 59,  107 => 54,  99 => 49,  91 => 44,  84 => 39,  78 => 37,  76 => 36,  70 => 33,  66 => 32,  59 => 28,  46 => 18,  39 => 13,  37 => 7,  32 => 5,  28 => 4,  23 => 1,);
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
