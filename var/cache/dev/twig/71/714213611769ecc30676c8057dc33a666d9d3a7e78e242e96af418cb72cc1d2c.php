<?php

/* BotellaBundle:blog:videos.html.twig */
class __TwigTemplate_f367cd3dcef57fa908f9b0e6d034d95376cbcdef86e9f2c269a52482d22d950c extends Twig_Template
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
        $__internal_6bf6c6040f8b5f3c149f761cd500b05ca3494f0dc59aefd1fa4014b44b3fd450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf6c6040f8b5f3c149f761cd500b05ca3494f0dc59aefd1fa4014b44b3fd450->enter($__internal_6bf6c6040f8b5f3c149f761cd500b05ca3494f0dc59aefd1fa4014b44b3fd450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:videos.html.twig"));

        $__internal_c8161d10e5f770d74cff5db7ef854aaae8821e3a5a05d1463e75d2cdde4983c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8161d10e5f770d74cff5db7ef854aaae8821e3a5a05d1463e75d2cdde4983c6->enter($__internal_c8161d10e5f770d74cff5db7ef854aaae8821e3a5a05d1463e75d2cdde4983c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:videos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bf6c6040f8b5f3c149f761cd500b05ca3494f0dc59aefd1fa4014b44b3fd450->leave($__internal_6bf6c6040f8b5f3c149f761cd500b05ca3494f0dc59aefd1fa4014b44b3fd450_prof);

        
        $__internal_c8161d10e5f770d74cff5db7ef854aaae8821e3a5a05d1463e75d2cdde4983c6->leave($__internal_c8161d10e5f770d74cff5db7ef854aaae8821e3a5a05d1463e75d2cdde4983c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b757822d15b43824c0b5a0ae6f8cc2f5509dc8ca1551d1689b00480b4bbbf7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b757822d15b43824c0b5a0ae6f8cc2f5509dc8ca1551d1689b00480b4bbbf7b4->enter($__internal_b757822d15b43824c0b5a0ae6f8cc2f5509dc8ca1551d1689b00480b4bbbf7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba4df7293fe0a4b7150110e5380f320163798bd57a90e5e3e9dd46720f19f952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4df7293fe0a4b7150110e5380f320163798bd57a90e5e3e9dd46720f19f952->enter($__internal_ba4df7293fe0a4b7150110e5380f320163798bd57a90e5e3e9dd46720f19f952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ba4df7293fe0a4b7150110e5380f320163798bd57a90e5e3e9dd46720f19f952->leave($__internal_ba4df7293fe0a4b7150110e5380f320163798bd57a90e5e3e9dd46720f19f952_prof);

        
        $__internal_b757822d15b43824c0b5a0ae6f8cc2f5509dc8ca1551d1689b00480b4bbbf7b4->leave($__internal_b757822d15b43824c0b5a0ae6f8cc2f5509dc8ca1551d1689b00480b4bbbf7b4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7511690443838f2881ebf7896cb0f34ea3016748d476fd2cf679d6e9c0d7be0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7511690443838f2881ebf7896cb0f34ea3016748d476fd2cf679d6e9c0d7be0a->enter($__internal_7511690443838f2881ebf7896cb0f34ea3016748d476fd2cf679d6e9c0d7be0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06aa0437cb1a1086015a3f57323826d797d2d1c181a0e5bf8c940a31f0b7d18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06aa0437cb1a1086015a3f57323826d797d2d1c181a0e5bf8c940a31f0b7d18e->enter($__internal_06aa0437cb1a1086015a3f57323826d797d2d1c181a0e5bf8c940a31f0b7d18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_06aa0437cb1a1086015a3f57323826d797d2d1c181a0e5bf8c940a31f0b7d18e->leave($__internal_06aa0437cb1a1086015a3f57323826d797d2d1c181a0e5bf8c940a31f0b7d18e_prof);

        
        $__internal_7511690443838f2881ebf7896cb0f34ea3016748d476fd2cf679d6e9c0d7be0a->leave($__internal_7511690443838f2881ebf7896cb0f34ea3016748d476fd2cf679d6e9c0d7be0a_prof);

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
