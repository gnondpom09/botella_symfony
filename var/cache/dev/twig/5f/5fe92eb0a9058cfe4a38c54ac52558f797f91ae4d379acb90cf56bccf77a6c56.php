<?php

/* BotellaBundle:movies:delete-movie.html.twig */
class __TwigTemplate_e7a43a58e74ef9e8568f82440ce2469a2ba0b0c6f6875ffcb03ce73ff1b05409 extends Twig_Template
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
        $__internal_8292c3c65990874068a45726acc7a70c9ff1ae792dfc4f77eddcf88ff5283583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8292c3c65990874068a45726acc7a70c9ff1ae792dfc4f77eddcf88ff5283583->enter($__internal_8292c3c65990874068a45726acc7a70c9ff1ae792dfc4f77eddcf88ff5283583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:movies:delete-movie.html.twig"));

        $__internal_bacb430b3b27aac1b429fd564acf7c67f57724be37820ae1408eaf300a29e49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacb430b3b27aac1b429fd564acf7c67f57724be37820ae1408eaf300a29e49a->enter($__internal_bacb430b3b27aac1b429fd564acf7c67f57724be37820ae1408eaf300a29e49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:movies:delete-movie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8292c3c65990874068a45726acc7a70c9ff1ae792dfc4f77eddcf88ff5283583->leave($__internal_8292c3c65990874068a45726acc7a70c9ff1ae792dfc4f77eddcf88ff5283583_prof);

        
        $__internal_bacb430b3b27aac1b429fd564acf7c67f57724be37820ae1408eaf300a29e49a->leave($__internal_bacb430b3b27aac1b429fd564acf7c67f57724be37820ae1408eaf300a29e49a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1617a8797221a7e4028f089718d2d97cfb0160775b5fd41d5c91ffae0499ec21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1617a8797221a7e4028f089718d2d97cfb0160775b5fd41d5c91ffae0499ec21->enter($__internal_1617a8797221a7e4028f089718d2d97cfb0160775b5fd41d5c91ffae0499ec21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c0495ded941197686a4b78a544444976d0847ff557031555a422a37657fb560f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0495ded941197686a4b78a544444976d0847ff557031555a422a37657fb560f->enter($__internal_c0495ded941197686a4b78a544444976d0847ff557031555a422a37657fb560f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c0495ded941197686a4b78a544444976d0847ff557031555a422a37657fb560f->leave($__internal_c0495ded941197686a4b78a544444976d0847ff557031555a422a37657fb560f_prof);

        
        $__internal_1617a8797221a7e4028f089718d2d97cfb0160775b5fd41d5c91ffae0499ec21->leave($__internal_1617a8797221a7e4028f089718d2d97cfb0160775b5fd41d5c91ffae0499ec21_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5a880befe41c9562adfca1118ce87420486b34dbc56ac2692b0641be4f12c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a880befe41c9562adfca1118ce87420486b34dbc56ac2692b0641be4f12c22->enter($__internal_a5a880befe41c9562adfca1118ce87420486b34dbc56ac2692b0641be4f12c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_510e835929fec8efc7d1ed6f3e5b9e1232d10c8cc9de6da13a10eef531b1a37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510e835929fec8efc7d1ed6f3e5b9e1232d10c8cc9de6da13a10eef531b1a37b->enter($__internal_510e835929fec8efc7d1ed6f3e5b9e1232d10c8cc9de6da13a10eef531b1a37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded\">
    <h3>suppression de vidéo</h3>
    <p>Etes vous certain de vouloir supprimer la vidéo ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "title", array()), "html", null, true);
        echo "</p>
    <div class=\"col-md-12\">
        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("movie_delete", array("id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "id", array()))), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </div>
</section>

";
        
        $__internal_510e835929fec8efc7d1ed6f3e5b9e1232d10c8cc9de6da13a10eef531b1a37b->leave($__internal_510e835929fec8efc7d1ed6f3e5b9e1232d10c8cc9de6da13a10eef531b1a37b_prof);

        
        $__internal_a5a880befe41c9562adfca1118ce87420486b34dbc56ac2692b0641be4f12c22->leave($__internal_a5a880befe41c9562adfca1118ce87420486b34dbc56ac2692b0641be4f12c22_prof);

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
        return array (  95 => 21,  85 => 14,  81 => 13,  76 => 11,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BotellaBundle::layout_back.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}

{% block body %}
<section class=\"cadre row expanded\">
    <h3>suppression de vidéo</h3>
    <p>Etes vous certain de vouloir supprimer la vidéo {{ movie.title }}</p>
    <div class=\"col-md-12\">
        <form action=\"{{ path('movie_delete', {'id': movie.id}) }}\" method=\"post\">
            <a href=\"{{ path('list_movies')}}\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>

            <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

            {{ form_rest(form) }}
        </form>
    </div>
</section>

{% endblock %}
", "BotellaBundle:movies:delete-movie.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/movies/delete-movie.html.twig");
    }
}
