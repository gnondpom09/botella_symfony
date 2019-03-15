<?php

/* BotellaBundle::layout_back.html.twig */
class __TwigTemplate_5b82360dde60ae7b675d73e5c19284ba2436779cf541cd75534741b9103f6e05 extends Twig_Template
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
    <!-- fonts -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Cinzel|Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,600,600i,700,800\" rel=\"stylesheet\">

    <!--JQuery-->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <!-- Compressed JavaScript -->
    <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script  src=\"https://code.jquery.com/jquery-3.2.1.js\"></script>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

    <!-- Style backend -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/backend.css"), "html", null, true);
        echo "\">

</head>
<body class=\"back-end\">
    <div class=\"back-wrapper\">
        <nav class=\"back-nav col-md-3\">
            <ul class=\"c-menu__items\">
                <li class=\"c-menu__item\">
                    <h3 class=\"title\">Articles</h3>
                    <ul class=\"c-menu_items\">
                        <li class=\"c-menu_item\"><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_list");
        echo "\" class=\"subitem\">Liste des articles</a></li>
                        <li class=\"c-menu_item\"><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_add");
        echo "\" class=\"subitem\">Ajouter un article</a></li>
                    </ul>
                </li>
                <li class=\"c-menu_item\">
                    <h3 class=\"title\">Oeuvres</h3>
                    <ul class=\"c-menu_items\">
                        <li class=\"c-menu_item\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_list");
        echo "\" class=\"subitem\">Liste des oeuvres</a></li>
                        <li class=\"c-menu_item\"><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_add");
        echo "\" class=\"subitem\">Ajouter une oeuvre</a></li>
                        <li class=\"c-menu_item\"><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_list");
        echo "\" class=\"subitem\">Liste des series</a></li>
                        <li class=\"c-menu_item\"><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_add");
        echo "\" class=\"subitem\">Ajouter une serie</a></li>
                    </ul>
                </li>
                <li class=\"c-menu_item\">
                    <h3 class=\"title\">Vidéos</h3>
                    <ul class=\"c-menu_items\">
                        <li class=\"c-menu_item\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_movies");
        echo "\" class=\"subitem\">Liste des vidéos</a></li>
                        <li class=\"c-menu_item\"><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movie_add");
        echo "\" class=\"subitem\">Ajouter une vidéo</a></li>                    </ul>
                </li>
                <li class=\"c-menu_item\">
                    <h3 class=\"title\">Administration</h3>
                    <ul class=\"c-menu_items\">
                        <li class=\"c-menu_item\"><a href=\"\" class=\"subitem\">Voir mon profil</a></li>
                        <li class=\"c-menu_item\"><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"subitem\">Modifier mon mot de passe</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <section id=\"\" class=\"back-content col-md-9\">
            <header class=\"header-back\">
                <div id=\"logo\" class=\"col-md-4\">
                    <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_homepage");
        echo "\">
                        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/signature.png"), "html", null, true);
        echo "\" alt=\"logo\">
                    </a>
                </div>
                <div class=\"col-md-8\">
                    ";
        // line 76
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 77
            echo "                        Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " <br>
                        <a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">Déconnexion</a>
                    ";
        } else {
            // line 80
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-primary\">Connexion</a>
                    ";
        }
        // line 82
        echo "                </div>
            </header>
            <div class=\"o-content container\">
                <article class=\"\">
                    ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "                </article>
            </div>
        </section>

    </div>


    ";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "

</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Laurent Botella";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    <!-- Bootstrap -->

    <!-- style application -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "                        <!--contenu principal-->
                    ";
    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        // line 97
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/vendor/motion-ui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/app.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "BotellaBundle::layout_back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 104,  234 => 102,  230 => 101,  226 => 100,  222 => 99,  218 => 98,  213 => 97,  210 => 96,  205 => 87,  202 => 86,  196 => 11,  191 => 8,  188 => 7,  182 => 5,  174 => 106,  172 => 96,  163 => 89,  161 => 86,  155 => 82,  149 => 80,  144 => 78,  139 => 77,  137 => 76,  130 => 72,  126 => 71,  114 => 62,  105 => 56,  101 => 55,  92 => 49,  88 => 48,  84 => 47,  80 => 46,  71 => 40,  67 => 39,  54 => 29,  36 => 13,  34 => 7,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle::layout_back.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/layout_back.html.twig");
    }
}
