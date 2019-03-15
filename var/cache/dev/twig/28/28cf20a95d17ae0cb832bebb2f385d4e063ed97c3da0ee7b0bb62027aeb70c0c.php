<?php

/* BotellaBundle::layout_back.html.twig */
class __TwigTemplate_b506a95e8d892bfe6d28ea900c685eacd8d2ca4081f47c152cbaa7756e0b00d2 extends Twig_Template
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
        $__internal_a3642183bcbf2532a383ea293b5e05e0170603005e991d02aa43d905d0a48f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3642183bcbf2532a383ea293b5e05e0170603005e991d02aa43d905d0a48f5d->enter($__internal_a3642183bcbf2532a383ea293b5e05e0170603005e991d02aa43d905d0a48f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout_back.html.twig"));

        $__internal_0812cc62bcbfc129aaa655f8d463e31139afecdcad69cc0f69c529ffe5c44105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0812cc62bcbfc129aaa655f8d463e31139afecdcad69cc0f69c529ffe5c44105->enter($__internal_0812cc62bcbfc129aaa655f8d463e31139afecdcad69cc0f69c529ffe5c44105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout_back.html.twig"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        
        $__internal_a3642183bcbf2532a383ea293b5e05e0170603005e991d02aa43d905d0a48f5d->leave($__internal_a3642183bcbf2532a383ea293b5e05e0170603005e991d02aa43d905d0a48f5d_prof);

        
        $__internal_0812cc62bcbfc129aaa655f8d463e31139afecdcad69cc0f69c529ffe5c44105->leave($__internal_0812cc62bcbfc129aaa655f8d463e31139afecdcad69cc0f69c529ffe5c44105_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6869660b7dbefc9e48ea5114790946c5519605106b6906dfe13cf3188680f8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6869660b7dbefc9e48ea5114790946c5519605106b6906dfe13cf3188680f8fe->enter($__internal_6869660b7dbefc9e48ea5114790946c5519605106b6906dfe13cf3188680f8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_013f01eb0bb94a67bf085bb7593d994635bfcf637bf14eb7b90427d11b6e79d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013f01eb0bb94a67bf085bb7593d994635bfcf637bf14eb7b90427d11b6e79d9->enter($__internal_013f01eb0bb94a67bf085bb7593d994635bfcf637bf14eb7b90427d11b6e79d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Laurent Botella";
        
        $__internal_013f01eb0bb94a67bf085bb7593d994635bfcf637bf14eb7b90427d11b6e79d9->leave($__internal_013f01eb0bb94a67bf085bb7593d994635bfcf637bf14eb7b90427d11b6e79d9_prof);

        
        $__internal_6869660b7dbefc9e48ea5114790946c5519605106b6906dfe13cf3188680f8fe->leave($__internal_6869660b7dbefc9e48ea5114790946c5519605106b6906dfe13cf3188680f8fe_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_564b958d29f538a3c821ace026cdff10d1a1646b083a12ae03358086e8f91d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564b958d29f538a3c821ace026cdff10d1a1646b083a12ae03358086e8f91d37->enter($__internal_564b958d29f538a3c821ace026cdff10d1a1646b083a12ae03358086e8f91d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_974fe99d6777691a67ec0378cce6aba257f247b7b74f4fdb6c6fc21835a7f1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974fe99d6777691a67ec0378cce6aba257f247b7b74f4fdb6c6fc21835a7f1f2->enter($__internal_974fe99d6777691a67ec0378cce6aba257f247b7b74f4fdb6c6fc21835a7f1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <!-- Bootstrap -->

    <!-- style application -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        
        $__internal_974fe99d6777691a67ec0378cce6aba257f247b7b74f4fdb6c6fc21835a7f1f2->leave($__internal_974fe99d6777691a67ec0378cce6aba257f247b7b74f4fdb6c6fc21835a7f1f2_prof);

        
        $__internal_564b958d29f538a3c821ace026cdff10d1a1646b083a12ae03358086e8f91d37->leave($__internal_564b958d29f538a3c821ace026cdff10d1a1646b083a12ae03358086e8f91d37_prof);

    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        $__internal_193efa0e46de0b12a3950abf69b8d2e52d76b85855d9cccda83584fba3e088e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193efa0e46de0b12a3950abf69b8d2e52d76b85855d9cccda83584fba3e088e6->enter($__internal_193efa0e46de0b12a3950abf69b8d2e52d76b85855d9cccda83584fba3e088e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5161fbb44d148c6d180b64c13165b439060256193fd1b46d711535bfc1146aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5161fbb44d148c6d180b64c13165b439060256193fd1b46d711535bfc1146aee->enter($__internal_5161fbb44d148c6d180b64c13165b439060256193fd1b46d711535bfc1146aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 87
        echo "                        <!--contenu principal-->
                    ";
        
        $__internal_5161fbb44d148c6d180b64c13165b439060256193fd1b46d711535bfc1146aee->leave($__internal_5161fbb44d148c6d180b64c13165b439060256193fd1b46d711535bfc1146aee_prof);

        
        $__internal_193efa0e46de0b12a3950abf69b8d2e52d76b85855d9cccda83584fba3e088e6->leave($__internal_193efa0e46de0b12a3950abf69b8d2e52d76b85855d9cccda83584fba3e088e6_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90db83663304e0514e44df6b4b4bd3eee55820420fb89a3588441cc46834353b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90db83663304e0514e44df6b4b4bd3eee55820420fb89a3588441cc46834353b->enter($__internal_90db83663304e0514e44df6b4b4bd3eee55820420fb89a3588441cc46834353b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_91e23890226d0d9e23067dc05dcb3b47526cb09de9edde985bf8df80828021d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e23890226d0d9e23067dc05dcb3b47526cb09de9edde985bf8df80828021d4->enter($__internal_91e23890226d0d9e23067dc05dcb3b47526cb09de9edde985bf8df80828021d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_91e23890226d0d9e23067dc05dcb3b47526cb09de9edde985bf8df80828021d4->leave($__internal_91e23890226d0d9e23067dc05dcb3b47526cb09de9edde985bf8df80828021d4_prof);

        
        $__internal_90db83663304e0514e44df6b4b4bd3eee55820420fb89a3588441cc46834353b->leave($__internal_90db83663304e0514e44df6b4b4bd3eee55820420fb89a3588441cc46834353b_prof);

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
        return array (  293 => 104,  288 => 102,  284 => 101,  280 => 100,  276 => 99,  272 => 98,  267 => 97,  258 => 96,  247 => 87,  238 => 86,  226 => 11,  221 => 8,  212 => 7,  194 => 5,  180 => 106,  178 => 96,  169 => 89,  167 => 86,  161 => 82,  155 => 80,  150 => 78,  145 => 77,  143 => 76,  136 => 72,  132 => 71,  120 => 62,  111 => 56,  107 => 55,  98 => 49,  94 => 48,  90 => 47,  86 => 46,  77 => 40,  73 => 39,  60 => 29,  42 => 13,  40 => 7,  35 => 5,  29 => 1,);
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

    <!-- style application -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" type=\"text/css\" />
    {% endblock %}

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
    <link rel=\"stylesheet\" href=\"{{ asset('css/backend.css') }}\">

</head>
<body class=\"back-end\">
    <div class=\"back-wrapper\">
        <nav class=\"back-nav col-md-3\">
            <ul class=\"c-menu__items\">
                <li class=\"c-menu__item\">
                    <h3 class=\"title\">Articles</h3>
                    <ul class=\"c-menu_items\">
                        <li class=\"c-menu_item\"><a href=\"{{ path('article_list')}}\" class=\"subitem\">Liste des articles</a></li>
                        <li class=\"c-menu_item\"><a href=\"{{ path('blog_add') }}\" class=\"subitem\">Ajouter un article</a></li>
                    </ul>
                </li>
                <li class=\"c-menu_item\">
                    <h3 class=\"title\">Oeuvres</h3>
                    <ul class=\"c-menu_items\">
                        <li class=\"c-menu_item\"><a href=\"{{ path('painting_list') }}\" class=\"subitem\">Liste des oeuvres</a></li>
                        <li class=\"c-menu_item\"><a href=\"{{ path('painting_add') }}\" class=\"subitem\">Ajouter une oeuvre</a></li>
                        <li class=\"c-menu_item\"><a href=\"{{ path('serie_list') }}\" class=\"subitem\">Liste des series</a></li>
                        <li class=\"c-menu_item\"><a href=\"{{ path('serie_add') }}\" class=\"subitem\">Ajouter une serie</a></li>
                    </ul>
                </li>
                <li class=\"c-menu_item\">
                    <h3 class=\"title\">Vidéos</h3>
                    <ul class=\"c-menu_items\">
                        <li class=\"c-menu_item\"><a href=\"{{ path('list_movies') }}\" class=\"subitem\">Liste des vidéos</a></li>
                        <li class=\"c-menu_item\"><a href=\"{{ path('movie_add') }}\" class=\"subitem\">Ajouter une vidéo</a></li>                    </ul>
                </li>
                <li class=\"c-menu_item\">
                    <h3 class=\"title\">Administration</h3>
                    <ul class=\"c-menu_items\">
                        <li class=\"c-menu_item\"><a href=\"\" class=\"subitem\">Voir mon profil</a></li>
                        <li class=\"c-menu_item\"><a href=\"{{ path('fos_user_change_password') }}\" class=\"subitem\">Modifier mon mot de passe</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <section id=\"\" class=\"back-content col-md-9\">
            <header class=\"header-back\">
                <div id=\"logo\" class=\"col-md-4\">
                    <a href=\"{{ path('botella_homepage') }}\">
                        <img src=\"{{asset('uploads/img/signature.png')}}\" alt=\"logo\">
                    </a>
                </div>
                <div class=\"col-md-8\">
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        Connecté en tant que {{ app.user.username }} <br>
                        <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-primary\">Déconnexion</a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-primary\">Connexion</a>
                    {% endif %}
                </div>
            </header>
            <div class=\"o-content container\">
                <article class=\"\">
                    {% block body %}
                        <!--contenu principal-->
                    {% endblock %}
                </article>
            </div>
        </section>

    </div>


    {% block javascripts %}
        <script src=\"{{ asset('bundles/js/jquery.js')}}\"></script>
        <script src=\"{{ asset('bundles/js/foundation.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/js/vendor/motion-ui.js') }}\"></script>
        <script src=\"{{ asset('bundles/js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('bundles/js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('bundles/js/app.js') }}\"></script>

        <script src=\"{{ asset('js/script.js') }}\"></script>
    {% endblock %}


</body>
</html>
", "BotellaBundle::layout_back.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/layout_back.html.twig");
    }
}
