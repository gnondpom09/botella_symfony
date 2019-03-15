<?php

/* BotellaBundle:blog:home.html.twig */
class __TwigTemplate_d93c06096bd971bfffa8be0b1e5551ecda3c27f1575179851eea38bc1932a82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BotellaBundle::layout.html.twig", "BotellaBundle:blog:home.html.twig", 3);
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
        $__internal_9263a55b712923dfa8bf0f42cd63ded8aed4c76eac7abdaf77144800388308aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9263a55b712923dfa8bf0f42cd63ded8aed4c76eac7abdaf77144800388308aa->enter($__internal_9263a55b712923dfa8bf0f42cd63ded8aed4c76eac7abdaf77144800388308aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:home.html.twig"));

        $__internal_d97cf99b7dd1054f2d260b3d41eb4c411fbe4215a5e42fe1408325215922b79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97cf99b7dd1054f2d260b3d41eb4c411fbe4215a5e42fe1408325215922b79c->enter($__internal_d97cf99b7dd1054f2d260b3d41eb4c411fbe4215a5e42fe1408325215922b79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9263a55b712923dfa8bf0f42cd63ded8aed4c76eac7abdaf77144800388308aa->leave($__internal_9263a55b712923dfa8bf0f42cd63ded8aed4c76eac7abdaf77144800388308aa_prof);

        
        $__internal_d97cf99b7dd1054f2d260b3d41eb4c411fbe4215a5e42fe1408325215922b79c->leave($__internal_d97cf99b7dd1054f2d260b3d41eb4c411fbe4215a5e42fe1408325215922b79c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ee6c484bbe53998e30d74b843b9c6644baff28fb1219a6ad76d11314e03f5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee6c484bbe53998e30d74b843b9c6644baff28fb1219a6ad76d11314e03f5e4->enter($__internal_2ee6c484bbe53998e30d74b843b9c6644baff28fb1219a6ad76d11314e03f5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d835eb3e894bc8e0b4f5ca837547b08fd935449707918258ccf94325c73ce16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d835eb3e894bc8e0b4f5ca837547b08fd935449707918258ccf94325c73ce16f->enter($__internal_d835eb3e894bc8e0b4f5ca837547b08fd935449707918258ccf94325c73ce16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d835eb3e894bc8e0b4f5ca837547b08fd935449707918258ccf94325c73ce16f->leave($__internal_d835eb3e894bc8e0b4f5ca837547b08fd935449707918258ccf94325c73ce16f_prof);

        
        $__internal_2ee6c484bbe53998e30d74b843b9c6644baff28fb1219a6ad76d11314e03f5e4->leave($__internal_2ee6c484bbe53998e30d74b843b9c6644baff28fb1219a6ad76d11314e03f5e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44d291a7d65f9785ed0fee7f873810c44c556f301f7e9fa6fe0c27d16a819e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d291a7d65f9785ed0fee7f873810c44c556f301f7e9fa6fe0c27d16a819e03->enter($__internal_44d291a7d65f9785ed0fee7f873810c44c556f301f7e9fa6fe0c27d16a819e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa57d28bc2f10f222254ad51bdd6bc0dc67ebcfa91088c423dfb432a6ed49a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa57d28bc2f10f222254ad51bdd6bc0dc67ebcfa91088c423dfb432a6ed49a4a->enter($__internal_fa57d28bc2f10f222254ad51bdd6bc0dc67ebcfa91088c423dfb432a6ed49a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
<section class=\"cadre row expanded\">
    <div id=\"home\" class=\"col-xs-8\">
        <h1>Laurent <span>Botella</span></h1>
        <h2>Artiste Peintre</h2>
        <div class=\"pastelliste\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/pastelliste.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </div>
    <div class=\"col-xs-4\" class=\"diaporama\">
        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/22.jpeg"), "html", null, true);
        echo "\" alt=\"painting\">
    </div>
</section>
<a href=\"#section3\" class=\"top\">
    <button type=\"button\" name=\"top\">
        <div class=\"content-button\">
            <p>Scroll</p><i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
        </div>
    </button>
</a>
</div>
</div>
<div id=\"section2\" class=\"under\">
    <section class=\"row align-strech expanded\">
        <h2>Actualités</h2>

        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("BotellaBundle:Article:list", array("limit" => 3)));
        echo "

    </section>
</div>
<div id=\"section3\" class=\"video\">
    <video autoplay loop style=\"margin: auto;\">
        <source src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/movies/demo_tour.MOV"), "html", null, true);
        echo "\" type=\"video/mp4\">
    </video>
    <div class=\"video-titre\">
        <h2>Decouvrez l'atelier</h2>
        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_videos");
        echo "\">
            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/play.png"), "html", null, true);
        echo "\" alt=\"\">
        </a>
    </div>
</div>
<div id=\"section4\" class=\"container\">
    <section  id=\"advert\"class=\"cadre row expanded\">
        <div class=\"col-xs-4 advert\">
            <h3>Painting</h3><span>News</span>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_gallery");
        echo "\">Galerie</a>
        </div>
        <div class=\"col-xs-8\">
            <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/23.jpeg"), "html", null, true);
        echo "\" alt=\"painting\">
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
</div>

";
        // line 74
        $this->loadTemplate("BotellaBundle:blog:footer.html.twig", "BotellaBundle:blog:home.html.twig", 74)->display($context);
        
        $__internal_fa57d28bc2f10f222254ad51bdd6bc0dc67ebcfa91088c423dfb432a6ed49a4a->leave($__internal_fa57d28bc2f10f222254ad51bdd6bc0dc67ebcfa91088c423dfb432a6ed49a4a_prof);

        
        $__internal_44d291a7d65f9785ed0fee7f873810c44c556f301f7e9fa6fe0c27d16a819e03->leave($__internal_44d291a7d65f9785ed0fee7f873810c44c556f301f7e9fa6fe0c27d16a819e03_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 74,  143 => 60,  137 => 57,  126 => 49,  122 => 48,  115 => 44,  106 => 38,  87 => 22,  80 => 18,  72 => 12,  63 => 11,  50 => 7,  41 => 6,  11 => 3,);
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

{% extends \"BotellaBundle::layout.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}


{% block body %}

<section class=\"cadre row expanded\">
    <div id=\"home\" class=\"col-xs-8\">
        <h1>Laurent <span>Botella</span></h1>
        <h2>Artiste Peintre</h2>
        <div class=\"pastelliste\">
            <img src=\"{{ asset('uploads/img/pastelliste.png') }}\" alt=\"\">
        </div>
    </div>
    <div class=\"col-xs-4\" class=\"diaporama\">
        <img src=\"{{ asset('uploads/img/22.jpeg') }}\" alt=\"painting\">
    </div>
</section>
<a href=\"#section3\" class=\"top\">
    <button type=\"button\" name=\"top\">
        <div class=\"content-button\">
            <p>Scroll</p><i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
        </div>
    </button>
</a>
</div>
</div>
<div id=\"section2\" class=\"under\">
    <section class=\"row align-strech expanded\">
        <h2>Actualités</h2>

        {{ render(controller('BotellaBundle:Article:list', {'limit': 3})) }}

    </section>
</div>
<div id=\"section3\" class=\"video\">
    <video autoplay loop style=\"margin: auto;\">
        <source src=\"{{ asset('uploads/movies/demo_tour.MOV') }}\" type=\"video/mp4\">
    </video>
    <div class=\"video-titre\">
        <h2>Decouvrez l'atelier</h2>
        <a href=\"{{ path('botella_videos') }}\">
            <img src=\"{{asset('uploads/img/play.png')}}\" alt=\"\">
        </a>
    </div>
</div>
<div id=\"section4\" class=\"container\">
    <section  id=\"advert\"class=\"cadre row expanded\">
        <div class=\"col-xs-4 advert\">
            <h3>Painting</h3><span>News</span>
            <a href=\"{{ path('botella_gallery') }}\">Galerie</a>
        </div>
        <div class=\"col-xs-8\">
            <img src=\"{{asset('uploads/img/23.jpeg') }}\" alt=\"painting\">
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
</div>

{% include 'BotellaBundle:blog:footer.html.twig' %}
{% endblock %}
", "BotellaBundle:blog:home.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/home.html.twig");
    }
}
