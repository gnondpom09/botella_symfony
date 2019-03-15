<?php

/* BotellaBundle:movies:delete-movie.html.twig */
class __TwigTemplate_506d94b866933a8735c7a09d3e4e5ae535cd9b506e819bdf9caeda6b6b42d39e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:movies:delete-movie.html.twig", 1);
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
        echo "<section class=\"cadre row expanded\">
    <h3>suppression de vidéo</h3>
    <p>Etes vous certain de vouloir supprimer la vidéo ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : null), "title", array()), "html", null, true);
        echo "</p>
    <div class=\"col-md-12\">
        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movie_delete", array("id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_movies");
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>

            <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </form>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "BotellaBundle:movies:delete-movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  55 => 14,  51 => 13,  46 => 11,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:movies:delete-movie.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/movies/delete-movie.html.twig");
    }
}
