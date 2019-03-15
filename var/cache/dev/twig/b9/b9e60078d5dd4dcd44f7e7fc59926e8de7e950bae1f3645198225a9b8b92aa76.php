<?php

/* BotellaBundle:blog:bio.html.twig */
class __TwigTemplate_a9dca9f77304d6e54647dc19e6461bae6f0dcab66fc983e33fe7aafbd06ae613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout.html.twig", "BotellaBundle:blog:bio.html.twig", 1);
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
        $__internal_676e110ec484a1d772e90e6561dd2b0f951b7677fc9ebb158ffe3bf1b6e3e583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676e110ec484a1d772e90e6561dd2b0f951b7677fc9ebb158ffe3bf1b6e3e583->enter($__internal_676e110ec484a1d772e90e6561dd2b0f951b7677fc9ebb158ffe3bf1b6e3e583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:bio.html.twig"));

        $__internal_823e0df6dc831135f10d8a2fc54844670468d05478de68763c07bb8cec0c3dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823e0df6dc831135f10d8a2fc54844670468d05478de68763c07bb8cec0c3dae->enter($__internal_823e0df6dc831135f10d8a2fc54844670468d05478de68763c07bb8cec0c3dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:bio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_676e110ec484a1d772e90e6561dd2b0f951b7677fc9ebb158ffe3bf1b6e3e583->leave($__internal_676e110ec484a1d772e90e6561dd2b0f951b7677fc9ebb158ffe3bf1b6e3e583_prof);

        
        $__internal_823e0df6dc831135f10d8a2fc54844670468d05478de68763c07bb8cec0c3dae->leave($__internal_823e0df6dc831135f10d8a2fc54844670468d05478de68763c07bb8cec0c3dae_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c4a48fc3b071502d0d2156d9bb41e7de5301c8a6c6d773c8841d0afbb5a5390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4a48fc3b071502d0d2156d9bb41e7de5301c8a6c6d773c8841d0afbb5a5390->enter($__internal_3c4a48fc3b071502d0d2156d9bb41e7de5301c8a6c6d773c8841d0afbb5a5390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1589934e42e95f4a866262d19a1b20e7ca702397e7734c72ef15a5b79f39173e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1589934e42e95f4a866262d19a1b20e7ca702397e7734c72ef15a5b79f39173e->enter($__internal_1589934e42e95f4a866262d19a1b20e7ca702397e7734c72ef15a5b79f39173e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1589934e42e95f4a866262d19a1b20e7ca702397e7734c72ef15a5b79f39173e->leave($__internal_1589934e42e95f4a866262d19a1b20e7ca702397e7734c72ef15a5b79f39173e_prof);

        
        $__internal_3c4a48fc3b071502d0d2156d9bb41e7de5301c8a6c6d773c8841d0afbb5a5390->leave($__internal_3c4a48fc3b071502d0d2156d9bb41e7de5301c8a6c6d773c8841d0afbb5a5390_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_88c51b936c371042e39a5e07daf078a41127149fe1a14e695b7659dff8176a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c51b936c371042e39a5e07daf078a41127149fe1a14e695b7659dff8176a49->enter($__internal_88c51b936c371042e39a5e07daf078a41127149fe1a14e695b7659dff8176a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22ed72b604bd0e8ead9182dfc48007afa32a14d7a50bfabb4281c4d2ffa0033b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ed72b604bd0e8ead9182dfc48007afa32a14d7a50bfabb4281c4d2ffa0033b->enter($__internal_22ed72b604bd0e8ead9182dfc48007afa32a14d7a50bfabb4281c4d2ffa0033b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded page\">
    <h1>Biographie</h1>
    <div class=\"portrait col-xs-4\">
        <img class=\"size-medium wp-image-21 alignleft\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/portrait.jpeg"), "html", null, true);
        echo "\" alt=\"\" width=\"252\" height=\"300\" />
    </div>
    <div class=\"bio\">Né le 30 Juin 1974 à Nantes. Son apprentissage de la peinture a débuté en 1989 dans l’atelier de Maïthé Rovino à Aussonne suivi d’une année aux Beaux Arts de Toulouse. Le travail était ciblé sur la peinture à l’huile et le pastel. Le travail au fusain et au crayon a toujours été la base de son travail avant et après les cours. Inspiré par les impressionnistes et les esquisses des grands maîtres italiens, sa peinture est spontanée et structurée. Les compositions et les couleurs sont étudiés de manière à mettre en valeur le sujet. Le traitement inachevé des fonds et les effets de lumières dirigent l’œil vers les expressions, les attitudes et les émotions des personnages. Son but est de donner une impression de vie dans ses tableaux.
        <br>
        <hr>
        <br>
        <span class=\"\"><em>\"Fabulous transition from the surface of the paper that leads into the painting itself. The back-lit scene is phenomenal and accents the figure so exquisitely.\" – Informed Collector</em>
        </span>
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
        // line 32
        $this->loadTemplate("BotellaBundle:blog:footer-page.html.twig", "BotellaBundle:blog:bio.html.twig", 32)->display($context);
        
        $__internal_22ed72b604bd0e8ead9182dfc48007afa32a14d7a50bfabb4281c4d2ffa0033b->leave($__internal_22ed72b604bd0e8ead9182dfc48007afa32a14d7a50bfabb4281c4d2ffa0033b_prof);

        
        $__internal_88c51b936c371042e39a5e07daf078a41127149fe1a14e695b7659dff8176a49->leave($__internal_88c51b936c371042e39a5e07daf078a41127149fe1a14e695b7659dff8176a49_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:bio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  77 => 12,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
<section class=\"cadre row expanded page\">
    <h1>Biographie</h1>
    <div class=\"portrait col-xs-4\">
        <img class=\"size-medium wp-image-21 alignleft\" src=\"{{ asset('uploads/img/portrait.jpeg') }}\" alt=\"\" width=\"252\" height=\"300\" />
    </div>
    <div class=\"bio\">Né le 30 Juin 1974 à Nantes. Son apprentissage de la peinture a débuté en 1989 dans l’atelier de Maïthé Rovino à Aussonne suivi d’une année aux Beaux Arts de Toulouse. Le travail était ciblé sur la peinture à l’huile et le pastel. Le travail au fusain et au crayon a toujours été la base de son travail avant et après les cours. Inspiré par les impressionnistes et les esquisses des grands maîtres italiens, sa peinture est spontanée et structurée. Les compositions et les couleurs sont étudiés de manière à mettre en valeur le sujet. Le traitement inachevé des fonds et les effets de lumières dirigent l’œil vers les expressions, les attitudes et les émotions des personnages. Son but est de donner une impression de vie dans ses tableaux.
        <br>
        <hr>
        <br>
        <span class=\"\"><em>\"Fabulous transition from the surface of the paper that leads into the painting itself. The back-lit scene is phenomenal and accents the figure so exquisitely.\" – Informed Collector</em>
        </span>
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
", "BotellaBundle:blog:bio.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/bio.html.twig");
    }
}
