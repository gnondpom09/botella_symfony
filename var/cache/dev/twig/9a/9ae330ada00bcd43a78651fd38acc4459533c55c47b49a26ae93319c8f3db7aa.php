<?php

/* BotellaBundle:posts:view.html.twig */
class __TwigTemplate_c4b39e5d27e400b87454236b7fb478639d2b1573a031dafe602e1b3d2506167c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout.html.twig", "BotellaBundle:posts:view.html.twig", 1);
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
        $__internal_ebd111a861e6063c485f0a223cea7583437baef4602cac5ceb12b4d6dcb6bc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd111a861e6063c485f0a223cea7583437baef4602cac5ceb12b4d6dcb6bc9c->enter($__internal_ebd111a861e6063c485f0a223cea7583437baef4602cac5ceb12b4d6dcb6bc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:view.html.twig"));

        $__internal_7a6f905f3a12059d59ad651f216b1d3d2dd5981cfd3a171c7e7bf8d3c211d11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6f905f3a12059d59ad651f216b1d3d2dd5981cfd3a171c7e7bf8d3c211d11c->enter($__internal_7a6f905f3a12059d59ad651f216b1d3d2dd5981cfd3a171c7e7bf8d3c211d11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd111a861e6063c485f0a223cea7583437baef4602cac5ceb12b4d6dcb6bc9c->leave($__internal_ebd111a861e6063c485f0a223cea7583437baef4602cac5ceb12b4d6dcb6bc9c_prof);

        
        $__internal_7a6f905f3a12059d59ad651f216b1d3d2dd5981cfd3a171c7e7bf8d3c211d11c->leave($__internal_7a6f905f3a12059d59ad651f216b1d3d2dd5981cfd3a171c7e7bf8d3c211d11c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2162346a9f2154e52a307162a5fa00d7ef51a3cef2c4fd4536f802ea543ff14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2162346a9f2154e52a307162a5fa00d7ef51a3cef2c4fd4536f802ea543ff14->enter($__internal_a2162346a9f2154e52a307162a5fa00d7ef51a3cef2c4fd4536f802ea543ff14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_756df6ee195679c02c97ac166cfd5da2bbb5ea4818baace7d52009dca0b738a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756df6ee195679c02c97ac166cfd5da2bbb5ea4818baace7d52009dca0b738a3->enter($__internal_756df6ee195679c02c97ac166cfd5da2bbb5ea4818baace7d52009dca0b738a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_756df6ee195679c02c97ac166cfd5da2bbb5ea4818baace7d52009dca0b738a3->leave($__internal_756df6ee195679c02c97ac166cfd5da2bbb5ea4818baace7d52009dca0b738a3_prof);

        
        $__internal_a2162346a9f2154e52a307162a5fa00d7ef51a3cef2c4fd4536f802ea543ff14->leave($__internal_a2162346a9f2154e52a307162a5fa00d7ef51a3cef2c4fd4536f802ea543ff14_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b8f6d649ead7c3242f942311921f3ec990260907cabd516a03fdf36acb45963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8f6d649ead7c3242f942311921f3ec990260907cabd516a03fdf36acb45963->enter($__internal_4b8f6d649ead7c3242f942311921f3ec990260907cabd516a03fdf36acb45963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90c8d5609f379c3abc6ee1a0cbf17108fae512432f3019a3afcbb633c056e3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c8d5609f379c3abc6ee1a0cbf17108fae512432f3019a3afcbb633c056e3ca->enter($__internal_90c8d5609f379c3abc6ee1a0cbf17108fae512432f3019a3afcbb633c056e3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded\">
    <h1>Detail article</h1>
    <div class=\"col-md-4\">
        ";
        // line 13
        echo "        ";
        if ( !(null === $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()))) {
            // line 14
            echo "        <img
        src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
        alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
        />
        ";
        }
        // line 19
        echo "    </div>
    <div class=\"col-md-8\">
        <h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h3>
        <div class=\"content-post\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
        </div>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_expositions");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
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
        // line 42
        $this->loadTemplate("BotellaBundle:blog:footer-page.html.twig", "BotellaBundle:posts:view.html.twig", 42)->display($context);
        
        $__internal_90c8d5609f379c3abc6ee1a0cbf17108fae512432f3019a3afcbb633c056e3ca->leave($__internal_90c8d5609f379c3abc6ee1a0cbf17108fae512432f3019a3afcbb633c056e3ca_prof);

        
        $__internal_4b8f6d649ead7c3242f942311921f3ec990260907cabd516a03fdf36acb45963->leave($__internal_4b8f6d649ead7c3242f942311921f3ec990260907cabd516a03fdf36acb45963_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:posts:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  107 => 25,  102 => 23,  97 => 21,  93 => 19,  87 => 16,  83 => 15,  80 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
<section class=\"cadre row expanded\">
    <h1>Detail article</h1>
    <div class=\"col-md-4\">
        {# On vérifie qu'une image soit bien associée à l'article #}
        {% if article.image is not null %}
        <img
        src=\"{{ asset(article.image.webPath) }}\"
        alt=\"{{ article.image.alt }}\"
        />
        {% endif %}
    </div>
    <div class=\"col-md-8\">
        <h3>{{ article.title }}</h3>
        <div class=\"content-post\">
            {{ article.content }}
        </div>
        <a href=\"{{ path('botella_expositions') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
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
", "BotellaBundle:posts:view.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/view.html.twig");
    }
}
