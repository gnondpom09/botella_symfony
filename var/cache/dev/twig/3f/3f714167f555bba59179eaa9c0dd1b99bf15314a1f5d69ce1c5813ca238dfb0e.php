<?php

/* BotellaBundle:posts:view.html.twig */
class __TwigTemplate_e9f0813865bc2a5a4a9486baf7d15de6cf3df48bf6bf5c09208e6a55b25a6eea extends Twig_Template
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
        $__internal_f368da54baec4b025b9bde435e4b3d03db1f69192f93f41e3b70192bac8e8b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f368da54baec4b025b9bde435e4b3d03db1f69192f93f41e3b70192bac8e8b81->enter($__internal_f368da54baec4b025b9bde435e4b3d03db1f69192f93f41e3b70192bac8e8b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:view.html.twig"));

        $__internal_5601f213d4a7323b6d9c885caf62ca33adc24bfba80835b8749ce4d8057ab05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5601f213d4a7323b6d9c885caf62ca33adc24bfba80835b8749ce4d8057ab05b->enter($__internal_5601f213d4a7323b6d9c885caf62ca33adc24bfba80835b8749ce4d8057ab05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f368da54baec4b025b9bde435e4b3d03db1f69192f93f41e3b70192bac8e8b81->leave($__internal_f368da54baec4b025b9bde435e4b3d03db1f69192f93f41e3b70192bac8e8b81_prof);

        
        $__internal_5601f213d4a7323b6d9c885caf62ca33adc24bfba80835b8749ce4d8057ab05b->leave($__internal_5601f213d4a7323b6d9c885caf62ca33adc24bfba80835b8749ce4d8057ab05b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a4f30e5594c96dfde01a61ff23f7bb2bcee83fe24f3b4438943d1b90c6d049c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4f30e5594c96dfde01a61ff23f7bb2bcee83fe24f3b4438943d1b90c6d049c->enter($__internal_2a4f30e5594c96dfde01a61ff23f7bb2bcee83fe24f3b4438943d1b90c6d049c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4fcdbd1ec6e862f43f5f4f8b52672ed99ff4258c7da9355d15b8b926229f414f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcdbd1ec6e862f43f5f4f8b52672ed99ff4258c7da9355d15b8b926229f414f->enter($__internal_4fcdbd1ec6e862f43f5f4f8b52672ed99ff4258c7da9355d15b8b926229f414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4fcdbd1ec6e862f43f5f4f8b52672ed99ff4258c7da9355d15b8b926229f414f->leave($__internal_4fcdbd1ec6e862f43f5f4f8b52672ed99ff4258c7da9355d15b8b926229f414f_prof);

        
        $__internal_2a4f30e5594c96dfde01a61ff23f7bb2bcee83fe24f3b4438943d1b90c6d049c->leave($__internal_2a4f30e5594c96dfde01a61ff23f7bb2bcee83fe24f3b4438943d1b90c6d049c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd5138b9f01c295dc7a9088fb3bf2de725a12008eb8db21ceb5cd3ee54c258be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5138b9f01c295dc7a9088fb3bf2de725a12008eb8db21ceb5cd3ee54c258be->enter($__internal_bd5138b9f01c295dc7a9088fb3bf2de725a12008eb8db21ceb5cd3ee54c258be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99e35217b2c3fcfe720d7e77eec4e5e3a16b234383db1d305a5d721c92c9036c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e35217b2c3fcfe720d7e77eec4e5e3a16b234383db1d305a5d721c92c9036c->enter($__internal_99e35217b2c3fcfe720d7e77eec4e5e3a16b234383db1d305a5d721c92c9036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded\">
    <h1>Detail article</h1>
    <div class=\"col-md-4\">
        ";
        // line 13
        echo "        ";
        if ( !(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()))) {
            // line 14
            echo "        <img
        src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
        alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
        />
        ";
        }
        // line 19
        echo "    </div>
    <div class=\"col-md-8\">
        <h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h3>
        <div class=\"content-post\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 25
        if ( !$this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories", array()), "empty", array())) {
            // line 26
            echo "        <p>
            Cette annonce est parue dans les catégories suivantes :
            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 30
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </p>
        ";
        }
        // line 33
        echo "        <a href=\"";
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
        // line 50
        $this->loadTemplate("BotellaBundle:blog:footer-page.html.twig", "BotellaBundle:posts:view.html.twig", 50)->display($context);
        
        $__internal_99e35217b2c3fcfe720d7e77eec4e5e3a16b234383db1d305a5d721c92c9036c->leave($__internal_99e35217b2c3fcfe720d7e77eec4e5e3a16b234383db1d305a5d721c92c9036c_prof);

        
        $__internal_bd5138b9f01c295dc7a9088fb3bf2de725a12008eb8db21ceb5cd3ee54c258be->leave($__internal_bd5138b9f01c295dc7a9088fb3bf2de725a12008eb8db21ceb5cd3ee54c258be_prof);

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
        return array (  175 => 50,  154 => 33,  150 => 31,  136 => 30,  130 => 29,  113 => 28,  109 => 26,  107 => 25,  102 => 23,  97 => 21,  93 => 19,  87 => 16,  83 => 15,  80 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
        {% if not article.categories.empty %}
        <p>
            Cette annonce est parue dans les catégories suivantes :
            {% for category in article.categories %}
            {{ category.name }}{% if not loop.last %}, {% endif %}
            {% endfor %}
        </p>
        {% endif %}
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
