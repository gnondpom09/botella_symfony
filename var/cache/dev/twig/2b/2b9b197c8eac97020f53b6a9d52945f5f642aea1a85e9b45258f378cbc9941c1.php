<?php

/* BotellaBundle:movies:list-movies.html.twig */
class __TwigTemplate_66fdd064479b05842105212fee2ebaa1719a4f354b87457d11233cd5738ab243 extends Twig_Template
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
        $__internal_e25006fcf335f2c84787312fe235e67eb479d3322f369f2f9095cc2316b532e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25006fcf335f2c84787312fe235e67eb479d3322f369f2f9095cc2316b532e7->enter($__internal_e25006fcf335f2c84787312fe235e67eb479d3322f369f2f9095cc2316b532e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:movies:list-movies.html.twig"));

        $__internal_192063894e87f703a1349d06ffe65b967ce2607c5dab021ad34d282e702edc4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192063894e87f703a1349d06ffe65b967ce2607c5dab021ad34d282e702edc4b->enter($__internal_192063894e87f703a1349d06ffe65b967ce2607c5dab021ad34d282e702edc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:movies:list-movies.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e25006fcf335f2c84787312fe235e67eb479d3322f369f2f9095cc2316b532e7->leave($__internal_e25006fcf335f2c84787312fe235e67eb479d3322f369f2f9095cc2316b532e7_prof);

        
        $__internal_192063894e87f703a1349d06ffe65b967ce2607c5dab021ad34d282e702edc4b->leave($__internal_192063894e87f703a1349d06ffe65b967ce2607c5dab021ad34d282e702edc4b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6dd208e78ff04cbffe8b8fd20c98b2cda9de8414f0ccb7808df148b530f5e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6dd208e78ff04cbffe8b8fd20c98b2cda9de8414f0ccb7808df148b530f5e9a->enter($__internal_e6dd208e78ff04cbffe8b8fd20c98b2cda9de8414f0ccb7808df148b530f5e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3898dbff3cc5a19e02cc49f8820f6e297d4154f1c4a43bd2cd69db6a52d2676d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3898dbff3cc5a19e02cc49f8820f6e297d4154f1c4a43bd2cd69db6a52d2676d->enter($__internal_3898dbff3cc5a19e02cc49f8820f6e297d4154f1c4a43bd2cd69db6a52d2676d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3898dbff3cc5a19e02cc49f8820f6e297d4154f1c4a43bd2cd69db6a52d2676d->leave($__internal_3898dbff3cc5a19e02cc49f8820f6e297d4154f1c4a43bd2cd69db6a52d2676d_prof);

        
        $__internal_e6dd208e78ff04cbffe8b8fd20c98b2cda9de8414f0ccb7808df148b530f5e9a->leave($__internal_e6dd208e78ff04cbffe8b8fd20c98b2cda9de8414f0ccb7808df148b530f5e9a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_aedf83e0919185291092379d79b9d628bdfa3546a12cd66b8428a4c0ded326c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aedf83e0919185291092379d79b9d628bdfa3546a12cd66b8428a4c0ded326c3->enter($__internal_aedf83e0919185291092379d79b9d628bdfa3546a12cd66b8428a4c0ded326c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88459940667e516060e1341c85f38cdd464805791961d12ad608a2d2e60df73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88459940667e516060e1341c85f38cdd464805791961d12ad608a2d2e60df73a->enter($__internal_88459940667e516060e1341c85f38cdd464805791961d12ad608a2d2e60df73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back\">
    <h1>liste des vidéos</h1>
    <div class=\"col-md-12\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMovies"]) ? $context["listMovies"] : $this->getContext($context, "listMovies")));
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
        
        $__internal_88459940667e516060e1341c85f38cdd464805791961d12ad608a2d2e60df73a->leave($__internal_88459940667e516060e1341c85f38cdd464805791961d12ad608a2d2e60df73a_prof);

        
        $__internal_aedf83e0919185291092379d79b9d628bdfa3546a12cd66b8428a4c0ded326c3->leave($__internal_aedf83e0919185291092379d79b9d628bdfa3546a12cd66b8428a4c0ded326c3_prof);

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
        return array (  125 => 35,  112 => 28,  105 => 24,  97 => 19,  93 => 18,  87 => 17,  82 => 14,  78 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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

<article class=\"content-back\">
    <h1>liste des vidéos</h1>
    <div class=\"col-md-12\">
        {% for movie in listMovies %}
            <div class=\"well\">
                <div class=\"col-md-8\">
                    <ul class=\"infos-painting\">
                        <li>- {{movie.id }} - Titre de la vidéo : {{ movie.title }}</li>
                        <li>Légende : {{ movie.legend }}</li>
                        <li>url : {{ movie.url }}</li>

                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <a href=\"{{ path('movie_edit', {'id': movie.id}) }}\" class=\"btn btn-default\">
                        <i class=\"glyphicon glyphicon-edit\"></i>
                        Modifier la vidéo
                    </a>
                    <a href=\"{{ path('movie_delete', {'id': movie.id}) }}\" class=\"btn btn-danger\">
                        <i class=\"glyphicon glyphicon-trash\"></i>
                        Supprimer la vidéo
                    </a>
                </div>
            </div>
        {% endfor %}
        <a href=\"{{ path('movie_add') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-plus\"></i>
            Ajouter une vidéo
        </a>
    </div>
</article>
</section>
{% endblock %}
", "BotellaBundle:movies:list-movies.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/movies/list-movies.html.twig");
    }
}
