<?php

/* BotellaBundle:movies:list-movies.html.twig */
class __TwigTemplate_606919f12c25fe1c71060b12b1e8400d1456030cf2f0d1978d1e7c73a876bd20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:movies:list-movies.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"content-back\">
    <h1>liste des vidéos</h1>
    <div class=\"col-md-12\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMovies"]) ? $context["listMovies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 14
            echo "            <div class=\"well\">
                <div class=\"col-md-8\">
                    <ul class=\"infos-painting\">
                        <li>- ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "id", array()), "html", null, true);
            echo " - Titre de la vidéo : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", array()), "html", null, true);
            echo "</li>
                        <li>Légende : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "legend", array()), "html", null, true);
            echo "</li>
                        <li>url : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "url", array()), "html", null, true);
            echo "</li>

                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movie_edit", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
                        <i class=\"glyphicon glyphicon-edit\"></i>
                        Modifier la vidéo
                    </a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movie_delete", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                        <i class=\"glyphicon glyphicon-trash\"></i>
                        Supprimer la vidéo
                    </a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movie_add");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-plus\"></i>
            Ajouter une vidéo
        </a>
    </div>
</article>
</section>
";
    }

    public function getTemplateName()
    {
        return "BotellaBundle:movies:list-movies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  82 => 28,  75 => 24,  67 => 19,  63 => 18,  57 => 17,  52 => 14,  48 => 13,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:movies:list-movies.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/movies/list-movies.html.twig");
    }
}
