<?php

/* BotellaBundle:blog:videos.html.twig */
class __TwigTemplate_08c7c7de922777b9f89ef0638b99f1f004ddb74949e6f81071ce5542404c4e33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout.html.twig", "BotellaBundle:blog:videos.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_111ec57321300d0bd5037c331f1f6b1b6968b5f1ef91404220db8ea7a60b1a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111ec57321300d0bd5037c331f1f6b1b6968b5f1ef91404220db8ea7a60b1a6c->enter($__internal_111ec57321300d0bd5037c331f1f6b1b6968b5f1ef91404220db8ea7a60b1a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:videos.html.twig"));

        $__internal_1876c40b69878a0273b08e2c9902f60c7c764b29671136967a7305d8b1980954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1876c40b69878a0273b08e2c9902f60c7c764b29671136967a7305d8b1980954->enter($__internal_1876c40b69878a0273b08e2c9902f60c7c764b29671136967a7305d8b1980954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:videos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_111ec57321300d0bd5037c331f1f6b1b6968b5f1ef91404220db8ea7a60b1a6c->leave($__internal_111ec57321300d0bd5037c331f1f6b1b6968b5f1ef91404220db8ea7a60b1a6c_prof);

        
        $__internal_1876c40b69878a0273b08e2c9902f60c7c764b29671136967a7305d8b1980954->leave($__internal_1876c40b69878a0273b08e2c9902f60c7c764b29671136967a7305d8b1980954_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb75569093b8d9810c19112d3350b0e7198ad6b74a1749ad2a6f2049595f8d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb75569093b8d9810c19112d3350b0e7198ad6b74a1749ad2a6f2049595f8d6b->enter($__internal_bb75569093b8d9810c19112d3350b0e7198ad6b74a1749ad2a6f2049595f8d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e646dd7c1c4999653e70564c52895041fe5dd0d0b16213c2b58a6fb473191d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e646dd7c1c4999653e70564c52895041fe5dd0d0b16213c2b58a6fb473191d7->enter($__internal_1e646dd7c1c4999653e70564c52895041fe5dd0d0b16213c2b58a6fb473191d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1e646dd7c1c4999653e70564c52895041fe5dd0d0b16213c2b58a6fb473191d7->leave($__internal_1e646dd7c1c4999653e70564c52895041fe5dd0d0b16213c2b58a6fb473191d7_prof);

        
        $__internal_bb75569093b8d9810c19112d3350b0e7198ad6b74a1749ad2a6f2049595f8d6b->leave($__internal_bb75569093b8d9810c19112d3350b0e7198ad6b74a1749ad2a6f2049595f8d6b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d114c9f5e2e42bd6f5fcc72bb822d8f5039ddde17ccfbdb3df676c8165d562e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d114c9f5e2e42bd6f5fcc72bb822d8f5039ddde17ccfbdb3df676c8165d562e3->enter($__internal_d114c9f5e2e42bd6f5fcc72bb822d8f5039ddde17ccfbdb3df676c8165d562e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb3209727363daebcc455c061842158114568ab30f7c233362aafc133dacdf20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3209727363daebcc455c061842158114568ab30f7c233362aafc133dacdf20->enter($__internal_fb3209727363daebcc455c061842158114568ab30f7c233362aafc133dacdf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section id=\"masonry_hybrid_demo3\" class=\"cadre row expanded gallery\">
    <h1>Vidéos</h1>
    <div class=\"filtr-container gallery\">
        <ul>
            <li class=\"movie\">
                <video controls width=\"100%\" class=\"col-xs-4\">
                    <source src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/movies/demo_converted.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
                </video>
                <div class=\"col-xs-8\">
                    <h3>Stéphanie</h3>
                    <h4>Demonstration portrait à l'huile</h4>
                    <p>Peinture alla prima en une heure.</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>
</div>

";
        // line 35
        $this->loadTemplate("BotellaBundle:blog:footer-page.html.twig", "BotellaBundle:blog:videos.html.twig", 35)->display($context);
        
        $__internal_fb3209727363daebcc455c061842158114568ab30f7c233362aafc133dacdf20->leave($__internal_fb3209727363daebcc455c061842158114568ab30f7c233362aafc133dacdf20_prof);

        
        $__internal_d114c9f5e2e42bd6f5fcc72bb822d8f5039ddde17ccfbdb3df676c8165d562e3->leave($__internal_d114c9f5e2e42bd6f5fcc72bb822d8f5039ddde17ccfbdb3df676c8165d562e3_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  80 => 14,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BotellaBundle::layout.html.twig\" %}

{% block title %}
Galerie - {{ parent() }}
{% endblock %}

{% block body %}
<section id=\"masonry_hybrid_demo3\" class=\"cadre row expanded gallery\">
    <h1>Vidéos</h1>
    <div class=\"filtr-container gallery\">
        <ul>
            <li class=\"movie\">
                <video controls width=\"100%\" class=\"col-xs-4\">
                    <source src=\"{{ asset('uploads/movies/demo_converted.mp4') }}\" type=\"video/mp4\">
                </video>
                <div class=\"col-xs-8\">
                    <h3>Stéphanie</h3>
                    <h4>Demonstration portrait à l'huile</h4>
                    <p>Peinture alla prima en une heure.</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>
</div>

{% include 'BotellaBundle:blog:footer-page.html.twig' %}
{% endblock %}
", "BotellaBundle:blog:videos.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/videos.html.twig");
    }
}
