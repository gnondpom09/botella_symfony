<?php

/* BotellaBundle:blog:contest.html.twig */
class __TwigTemplate_f599fef7cd815d09a6adbe2d3c37cca025627ced537acd5c2704d7a0e529d6e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout-page.html.twig", "BotellaBundle:blog:contest.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout-page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19c941bcd25873ee444f9304fef37481e59a0b29801b8daa8f7400a8d28ce546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c941bcd25873ee444f9304fef37481e59a0b29801b8daa8f7400a8d28ce546->enter($__internal_19c941bcd25873ee444f9304fef37481e59a0b29801b8daa8f7400a8d28ce546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:contest.html.twig"));

        $__internal_28ca04d9dc68e6c7bc357940beb7668edad5d771cc46cb6ea9348bbc8771f384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ca04d9dc68e6c7bc357940beb7668edad5d771cc46cb6ea9348bbc8771f384->enter($__internal_28ca04d9dc68e6c7bc357940beb7668edad5d771cc46cb6ea9348bbc8771f384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:contest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19c941bcd25873ee444f9304fef37481e59a0b29801b8daa8f7400a8d28ce546->leave($__internal_19c941bcd25873ee444f9304fef37481e59a0b29801b8daa8f7400a8d28ce546_prof);

        
        $__internal_28ca04d9dc68e6c7bc357940beb7668edad5d771cc46cb6ea9348bbc8771f384->leave($__internal_28ca04d9dc68e6c7bc357940beb7668edad5d771cc46cb6ea9348bbc8771f384_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_da998b27ad6e485d0d4cbd80c5771fc3aa16aeb7b14d502541e90c18e163b3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da998b27ad6e485d0d4cbd80c5771fc3aa16aeb7b14d502541e90c18e163b3a5->enter($__internal_da998b27ad6e485d0d4cbd80c5771fc3aa16aeb7b14d502541e90c18e163b3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7f0f6b22f9168b2c710a40ab45e7d440dcb45e5af2e48d73d88838718a605df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f0f6b22f9168b2c710a40ab45e7d440dcb45e5af2e48d73d88838718a605df->enter($__internal_a7f0f6b22f9168b2c710a40ab45e7d440dcb45e5af2e48d73d88838718a605df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a7f0f6b22f9168b2c710a40ab45e7d440dcb45e5af2e48d73d88838718a605df->leave($__internal_a7f0f6b22f9168b2c710a40ab45e7d440dcb45e5af2e48d73d88838718a605df_prof);

        
        $__internal_da998b27ad6e485d0d4cbd80c5771fc3aa16aeb7b14d502541e90c18e163b3a5->leave($__internal_da998b27ad6e485d0d4cbd80c5771fc3aa16aeb7b14d502541e90c18e163b3a5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd8b400ce510f468fd1a4d53b381c53f2c4051d36b9975ff2e9aea36b85baf11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8b400ce510f468fd1a4d53b381c53f2c4051d36b9975ff2e9aea36b85baf11->enter($__internal_dd8b400ce510f468fd1a4d53b381c53f2c4051d36b9975ff2e9aea36b85baf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e07a9b416b697b20f9baf1e020f4f3cd30e431786080fed3591a2f011dc9d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e07a9b416b697b20f9baf1e020f4f3cd30e431786080fed3591a2f011dc9d04->enter($__internal_1e07a9b416b697b20f9baf1e020f4f3cd30e431786080fed3591a2f011dc9d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded expo\">
    <h1>Contests</h1>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listArticles"] ?? $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "        ";
            if ( !$this->getAttribute($this->getAttribute($context["article"], "categories", array()), "empty", array())) {
                // line 13
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 14
                    echo "                ";
                    if (($this->getAttribute($context["category"], "name", array()) == "Stages")) {
                        // line 15
                        echo "                <div class=\"well\" style=\"overflow: hidden;\">
                    <div class=\"col-md-12\">
                        <div class=\"col-md-3\">
                            ";
                        // line 18
                        if ( !(null === $this->getAttribute($context["article"], "image", array()))) {
                            // line 19
                            echo "                                <img
                                src=\"";
                            // line 20
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["article"], "image", array()), "webPath", array())), "html", null, true);
                            echo "\"
                                alt=\"";
                            // line 21
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "image", array()), "alt", array()), "html", null, true);
                            echo "\"
                                />
                            ";
                        }
                        // line 24
                        echo "                        </div>
                        <div class=\"col-md-9\">
                            <h3>";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                        echo "</h3>
                            <a href=\"";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
                        echo "\" target=\"new\" style=\"display: block; padding: 2%; background: #313030; color: #fff;\">
                                ";
                        // line 28
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
                        echo "
                            </a>
                        </div>
                    </div>
                </div>
                ";
                    }
                    // line 34
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "        ";
            }
            // line 36
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    <ul class=\"pagination\">
        ";
        // line 40
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "        <li";
            if (($context["p"] == ($context["page"] ?? $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_contest", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </ul>

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
        // line 58
        $this->loadTemplate("BotellaBundle:blog:footer-page.html.twig", "BotellaBundle:blog:contest.html.twig", 58)->display($context);
        
        $__internal_1e07a9b416b697b20f9baf1e020f4f3cd30e431786080fed3591a2f011dc9d04->leave($__internal_1e07a9b416b697b20f9baf1e020f4f3cd30e431786080fed3591a2f011dc9d04_prof);

        
        $__internal_dd8b400ce510f468fd1a4d53b381c53f2c4051d36b9975ff2e9aea36b85baf11->leave($__internal_dd8b400ce510f468fd1a4d53b381c53f2c4051d36b9975ff2e9aea36b85baf11_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:contest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 58,  174 => 45,  163 => 42,  156 => 41,  151 => 40,  147 => 37,  141 => 36,  138 => 35,  132 => 34,  123 => 28,  119 => 27,  115 => 26,  111 => 24,  105 => 21,  101 => 20,  98 => 19,  96 => 18,  91 => 15,  88 => 14,  83 => 13,  80 => 12,  76 => 11,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BotellaBundle::layout-page.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}

{% block body %}
<section class=\"cadre row expanded expo\">
    <h1>Contests</h1>
    {% for article in listArticles %}
        {% if not article.categories.empty %}
            {% for category in article.categories %}
                {% if category.name == \"Stages\" %}
                <div class=\"well\" style=\"overflow: hidden;\">
                    <div class=\"col-md-12\">
                        <div class=\"col-md-3\">
                            {% if article.image is not null %}
                                <img
                                src=\"{{ asset(article.image.webPath) }}\"
                                alt=\"{{ article.image.alt }}\"
                                />
                            {% endif %}
                        </div>
                        <div class=\"col-md-9\">
                            <h3>{{ article.title }}</h3>
                            <a href=\"{{ article.author }}\" target=\"new\" style=\"display: block; padding: 2%; background: #313030; color: #fff;\">
                                {{ article.content }}
                            </a>
                        </div>
                    </div>
                </div>
                {% endif %}
            {% endfor %}
        {% endif %}
    {% endfor %}

    <ul class=\"pagination\">
        {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
        {% for p in range(1, nbPages) %}
        <li{% if p == page %} class=\"active\"{% endif %}>
            <a href=\"{{ path('botella_contest', {'page': p}) }}\">{{ p }}</a>
        </li>
        {% endfor %}
    </ul>

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
", "BotellaBundle:blog:contest.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/contest.html.twig");
    }
}
