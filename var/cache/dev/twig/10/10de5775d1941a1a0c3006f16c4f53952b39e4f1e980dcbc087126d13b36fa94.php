<?php

/* BotellaBundle:posts:detail-article-back.html.twig */
class __TwigTemplate_8015467602350fbc7f53543cf0da8032609b2733717657cf47b4a413c0e41145 extends Twig_Template
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
        $__internal_26d6922b2db2a8fbfd42efd79e0533e5c07e60df8dc85af8b1318534d042df04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d6922b2db2a8fbfd42efd79e0533e5c07e60df8dc85af8b1318534d042df04->enter($__internal_26d6922b2db2a8fbfd42efd79e0533e5c07e60df8dc85af8b1318534d042df04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:detail-article-back.html.twig"));

        $__internal_40c43407e8a17c23168a362d2246937573e070385864d181b482a2d21e5e938a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c43407e8a17c23168a362d2246937573e070385864d181b482a2d21e5e938a->enter($__internal_40c43407e8a17c23168a362d2246937573e070385864d181b482a2d21e5e938a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:detail-article-back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d6922b2db2a8fbfd42efd79e0533e5c07e60df8dc85af8b1318534d042df04->leave($__internal_26d6922b2db2a8fbfd42efd79e0533e5c07e60df8dc85af8b1318534d042df04_prof);

        
        $__internal_40c43407e8a17c23168a362d2246937573e070385864d181b482a2d21e5e938a->leave($__internal_40c43407e8a17c23168a362d2246937573e070385864d181b482a2d21e5e938a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_27c6f12faeeafd5c0cbfec807787c78ad50623bd9a84f1c51079e6cd73fd91d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c6f12faeeafd5c0cbfec807787c78ad50623bd9a84f1c51079e6cd73fd91d0->enter($__internal_27c6f12faeeafd5c0cbfec807787c78ad50623bd9a84f1c51079e6cd73fd91d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f53d247dbdb9289967ca7eba233aa35a5c0a16394604c20bdd9633c6491fb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f53d247dbdb9289967ca7eba233aa35a5c0a16394604c20bdd9633c6491fb99->enter($__internal_0f53d247dbdb9289967ca7eba233aa35a5c0a16394604c20bdd9633c6491fb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0f53d247dbdb9289967ca7eba233aa35a5c0a16394604c20bdd9633c6491fb99->leave($__internal_0f53d247dbdb9289967ca7eba233aa35a5c0a16394604c20bdd9633c6491fb99_prof);

        
        $__internal_27c6f12faeeafd5c0cbfec807787c78ad50623bd9a84f1c51079e6cd73fd91d0->leave($__internal_27c6f12faeeafd5c0cbfec807787c78ad50623bd9a84f1c51079e6cd73fd91d0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7941dae7b924d3ba051adeff5a2b687c6fcbf3fbd917cf8e825c493bbc7259e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7941dae7b924d3ba051adeff5a2b687c6fcbf3fbd917cf8e825c493bbc7259e8->enter($__internal_7941dae7b924d3ba051adeff5a2b687c6fcbf3fbd917cf8e825c493bbc7259e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f257dce1057ce51ea713c1316263175c4c5aec37a9c48c7b2cac650c642d0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f257dce1057ce51ea713c1316263175c4c5aec37a9c48c7b2cac650c642d0de->enter($__internal_7f257dce1057ce51ea713c1316263175c4c5aec37a9c48c7b2cac650c642d0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded\">
    <h1>Detail article</h1>
    <div class=\"medium-4 columns\">
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
    <div class=\"medium-8 columns\">
        <h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h3>
        <i>Par ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
        <div class=\"well\">
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 26
        if ( !$this->getAttribute($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "categories", array()), "empty", array())) {
            // line 27
            echo "        <p>
            Cette annonce est parue dans les catégories suivantes :
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "categories", array()));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_edit", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'article
        </a>
        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'article
        </a>
    </div>

</section>

";
        
        $__internal_7f257dce1057ce51ea713c1316263175c4c5aec37a9c48c7b2cac650c642d0de->leave($__internal_7f257dce1057ce51ea713c1316263175c4c5aec37a9c48c7b2cac650c642d0de_prof);

        
        $__internal_7941dae7b924d3ba051adeff5a2b687c6fcbf3fbd917cf8e825c493bbc7259e8->leave($__internal_7941dae7b924d3ba051adeff5a2b687c6fcbf3fbd917cf8e825c493bbc7259e8_prof);

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
