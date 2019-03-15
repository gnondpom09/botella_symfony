<?php

/* BotellaBundle:posts:detail-article-back.html.twig */
class __TwigTemplate_4dbeb71ae5bbe9d3a26a8f6f9ca6cdd5020b7b103d8ececff885b63bd923537c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:posts:detail-article-back.html.twig", 1);
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
        $__internal_dabc4ae032c40650a5b7ca0bc29c088659eb96ca15994b30025f869369c16972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabc4ae032c40650a5b7ca0bc29c088659eb96ca15994b30025f869369c16972->enter($__internal_dabc4ae032c40650a5b7ca0bc29c088659eb96ca15994b30025f869369c16972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:detail-article-back.html.twig"));

        $__internal_e25563ff9c78c8934304dda048f0169de530043feca661561b70303637c9722d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25563ff9c78c8934304dda048f0169de530043feca661561b70303637c9722d->enter($__internal_e25563ff9c78c8934304dda048f0169de530043feca661561b70303637c9722d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:detail-article-back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dabc4ae032c40650a5b7ca0bc29c088659eb96ca15994b30025f869369c16972->leave($__internal_dabc4ae032c40650a5b7ca0bc29c088659eb96ca15994b30025f869369c16972_prof);

        
        $__internal_e25563ff9c78c8934304dda048f0169de530043feca661561b70303637c9722d->leave($__internal_e25563ff9c78c8934304dda048f0169de530043feca661561b70303637c9722d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b21884847bc6416ae8cd1749a4dfafb1062a16e5c75f72abbeea593c79233fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21884847bc6416ae8cd1749a4dfafb1062a16e5c75f72abbeea593c79233fd5->enter($__internal_b21884847bc6416ae8cd1749a4dfafb1062a16e5c75f72abbeea593c79233fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_347b875b23dc10f256820189db08cfdac9188f3a97f13f45f8c52002c466ae78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347b875b23dc10f256820189db08cfdac9188f3a97f13f45f8c52002c466ae78->enter($__internal_347b875b23dc10f256820189db08cfdac9188f3a97f13f45f8c52002c466ae78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_347b875b23dc10f256820189db08cfdac9188f3a97f13f45f8c52002c466ae78->leave($__internal_347b875b23dc10f256820189db08cfdac9188f3a97f13f45f8c52002c466ae78_prof);

        
        $__internal_b21884847bc6416ae8cd1749a4dfafb1062a16e5c75f72abbeea593c79233fd5->leave($__internal_b21884847bc6416ae8cd1749a4dfafb1062a16e5c75f72abbeea593c79233fd5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b67abad297855f27b91261e7e9fc570688991ed6cc46ff79d380961055b5f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b67abad297855f27b91261e7e9fc570688991ed6cc46ff79d380961055b5f9d->enter($__internal_3b67abad297855f27b91261e7e9fc570688991ed6cc46ff79d380961055b5f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69a34ac0a11dd8b2b3716e496eccc635e690787a9797da69bb39f60211278938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a34ac0a11dd8b2b3716e496eccc635e690787a9797da69bb39f60211278938->enter($__internal_69a34ac0a11dd8b2b3716e496eccc635e690787a9797da69bb39f60211278938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded\">
    <h1>Detail article</h1>
    <div class=\"medium-4 columns\">
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
    <div class=\"medium-8 columns\">
        <h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h3>
        <i>Par ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
        <div class=\"well\">
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 26
        if ( !$this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories", array()), "empty", array())) {
            // line 27
            echo "        <p>
            Cette annonce est parue dans les catégories suivantes :
            ";
            // line 29
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
                // line 30
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 31
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
            // line 32
            echo "        </p>
        ";
        }
        // line 34
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_list");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'article
        </a>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'article
        </a>
    </div>

</section>

";
        
        $__internal_69a34ac0a11dd8b2b3716e496eccc635e690787a9797da69bb39f60211278938->leave($__internal_69a34ac0a11dd8b2b3716e496eccc635e690787a9797da69bb39f60211278938_prof);

        
        $__internal_3b67abad297855f27b91261e7e9fc570688991ed6cc46ff79d380961055b5f9d->leave($__internal_3b67abad297855f27b91261e7e9fc570688991ed6cc46ff79d380961055b5f9d_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:posts:detail-article-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 42,  168 => 38,  160 => 34,  156 => 32,  142 => 31,  136 => 30,  119 => 29,  115 => 27,  113 => 26,  108 => 24,  101 => 22,  97 => 21,  93 => 19,  87 => 16,  83 => 15,  80 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
    <h1>Detail article</h1>
    <div class=\"medium-4 columns\">
        {# On vérifie qu'une image soit bien associée à l'article #}
        {% if article.image is not null %}
        <img
        src=\"{{ asset(article.image.webPath) }}\"
        alt=\"{{ article.image.alt }}\"
        />
        {% endif %}
    </div>
    <div class=\"medium-8 columns\">
        <h3>{{ article.title }}</h3>
        <i>Par {{ article.author }}, le {{ article.date|date('d/m/Y') }}</i>
        <div class=\"well\">
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
        <a href=\"{{ path('article_list') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('blog_edit', {'id': article.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'article
        </a>
        <a href=\"{{ path('blog_delete', {'id': article.id}) }}\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'article
        </a>
    </div>

</section>

{% endblock %}
", "BotellaBundle:posts:detail-article-back.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/detail-article-back.html.twig");
    }
}
