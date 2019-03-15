<?php

/* BotellaBundle:paintings:list-paintings.html.twig */
class __TwigTemplate_2a82af2096136c3fc8455a542b8ee3446212714ae1c7a4d1c2f35e171357fbe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:paintings:list-paintings.html.twig", 1);
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
        $__internal_f14b61ffb583bd29a338338524bd2b41e0765848184fdcfb51fba345f9552330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14b61ffb583bd29a338338524bd2b41e0765848184fdcfb51fba345f9552330->enter($__internal_f14b61ffb583bd29a338338524bd2b41e0765848184fdcfb51fba345f9552330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:list-paintings.html.twig"));

        $__internal_1e93b47e18830cffccc18ca4c7dfc8fca41f5ecee4ed10d036f6082d4d8e090f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e93b47e18830cffccc18ca4c7dfc8fca41f5ecee4ed10d036f6082d4d8e090f->enter($__internal_1e93b47e18830cffccc18ca4c7dfc8fca41f5ecee4ed10d036f6082d4d8e090f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:list-paintings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f14b61ffb583bd29a338338524bd2b41e0765848184fdcfb51fba345f9552330->leave($__internal_f14b61ffb583bd29a338338524bd2b41e0765848184fdcfb51fba345f9552330_prof);

        
        $__internal_1e93b47e18830cffccc18ca4c7dfc8fca41f5ecee4ed10d036f6082d4d8e090f->leave($__internal_1e93b47e18830cffccc18ca4c7dfc8fca41f5ecee4ed10d036f6082d4d8e090f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f98cf5b38dac0ce5e038ae48adf54c473bd598602d109c0e812d930884149aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98cf5b38dac0ce5e038ae48adf54c473bd598602d109c0e812d930884149aaa->enter($__internal_f98cf5b38dac0ce5e038ae48adf54c473bd598602d109c0e812d930884149aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22dd153be3ea54a896e05085c2b8017f55db46b196165cbd8c3eab0849836cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dd153be3ea54a896e05085c2b8017f55db46b196165cbd8c3eab0849836cd9->enter($__internal_22dd153be3ea54a896e05085c2b8017f55db46b196165cbd8c3eab0849836cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_22dd153be3ea54a896e05085c2b8017f55db46b196165cbd8c3eab0849836cd9->leave($__internal_22dd153be3ea54a896e05085c2b8017f55db46b196165cbd8c3eab0849836cd9_prof);

        
        $__internal_f98cf5b38dac0ce5e038ae48adf54c473bd598602d109c0e812d930884149aaa->leave($__internal_f98cf5b38dac0ce5e038ae48adf54c473bd598602d109c0e812d930884149aaa_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e3d665cbaf3dc60940fe29392cb622e663d82ad75a94ddc415b7cfce3c72467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3d665cbaf3dc60940fe29392cb622e663d82ad75a94ddc415b7cfce3c72467->enter($__internal_8e3d665cbaf3dc60940fe29392cb622e663d82ad75a94ddc415b7cfce3c72467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_526ce09310ec36dc9c791c7a8898739d1f82bcd254a161c21cb38f37437a4d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526ce09310ec36dc9c791c7a8898739d1f82bcd254a161c21cb38f37437a4d77->enter($__internal_526ce09310ec36dc9c791c7a8898739d1f82bcd254a161c21cb38f37437a4d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back\">
    <h1>liste des oeuvres</h1>
    <div class=\"col-md-12\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPaintings"]) ? $context["listPaintings"] : $this->getContext($context, "listPaintings")));
        foreach ($context['_seq'] as $context["_key"] => $context["painting"]) {
            // line 14
            echo "        <div class=\"well\">
            <div class=\"col-md-6\">
                <ul class=\"infos-painting\">
                    <li>- ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["painting"], "id", array()), "html", null, true);
            echo " - Titre de l'euvre : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["painting"], "title", array()), "html", null, true);
            echo "</li>
                    <li>Hauteur : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["painting"], "height", array()), "html", null, true);
            echo "</li>
                    <li>Largeur : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["painting"], "width", array()), "html", null, true);
            echo "</li>
                    <li>Technique : ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["painting"], "technic", array()), "html", null, true);
            echo "</li>
                    ";
            // line 21
            if ( !$this->getAttribute($this->getAttribute($context["painting"], "series", array()), "empty", array())) {
                // line 22
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["painting"], "series", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
                    // line 23
                    echo "                        <li>Serie : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
                    echo "</li>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 24
                    echo "                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                    ";
            }
            // line 26
            echo "                </ul>
            </div>
            <div class=\"col-md-2\">
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_view", array("id" => $this->getAttribute($context["painting"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 30
            if ( !(null === $this->getAttribute($context["painting"], "image", array()))) {
                // line 31
                echo "                    <img
                    src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["painting"], "image", array()), "webPath", array())), "html", null, true);
                echo "\"
                    alt=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["painting"], "image", array()), "alt", array()), "html", null, true);
                echo "\"
                    />
                </a>
            </div>
            <div class=\"col-md-4\">
                <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_edit", array("id" => $this->getAttribute($context["painting"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">
                    <i class=\"glyphicon glyphicon-edit\"></i>
                    Modifier l'oeuvre
                </a>
                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_delete", array("id" => $this->getAttribute($context["painting"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">
                    <i class=\"glyphicon glyphicon-trash\"></i>
                    Supprimer l'oeuvre
                </a>
            </div>
        </div>
        ";
            }
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['painting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_add");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-plus\"></i>
            Ajouter une oeuvre
        </a>
    </div>

    <ul class=\"pagination\">
        ";
        // line 59
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 60
            echo "        <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_list", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </ul>

</article>
</section>
";
        
        $__internal_526ce09310ec36dc9c791c7a8898739d1f82bcd254a161c21cb38f37437a4d77->leave($__internal_526ce09310ec36dc9c791c7a8898739d1f82bcd254a161c21cb38f37437a4d77_prof);

        
        $__internal_8e3d665cbaf3dc60940fe29392cb622e663d82ad75a94ddc415b7cfce3c72467->leave($__internal_8e3d665cbaf3dc60940fe29392cb622e663d82ad75a94ddc415b7cfce3c72467_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:paintings:list-paintings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 64,  223 => 61,  216 => 60,  211 => 59,  201 => 51,  198 => 50,  192 => 49,  182 => 42,  175 => 38,  167 => 33,  163 => 32,  160 => 31,  158 => 30,  154 => 29,  149 => 26,  146 => 25,  132 => 24,  125 => 23,  107 => 22,  105 => 21,  101 => 20,  97 => 19,  93 => 18,  87 => 17,  82 => 14,  78 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
    <h1>liste des oeuvres</h1>
    <div class=\"col-md-12\">
        {% for painting in listPaintings %}
        <div class=\"well\">
            <div class=\"col-md-6\">
                <ul class=\"infos-painting\">
                    <li>- {{painting.id }} - Titre de l'euvre : {{ painting.title }}</li>
                    <li>Hauteur : {{ painting.height }}</li>
                    <li>Largeur : {{ painting.width }}</li>
                    <li>Technique : {{ painting.technic }}</li>
                    {% if not painting.series.empty %}
                        {% for serie in painting.series %}
                        <li>Serie : {{ serie.name }}</li>{% if not loop.last %}, {% endif %}
                        {% endfor %}
                    {% endif %}
                </ul>
            </div>
            <div class=\"col-md-2\">
                <a href=\"{{ path('painting_view', {id: painting.id}) }}\">
                    {% if painting.image is not null %}
                    <img
                    src=\"{{ asset(painting.image.webPath) }}\"
                    alt=\"{{ painting.image.alt }}\"
                    />
                </a>
            </div>
            <div class=\"col-md-4\">
                <a href=\"{{ path('painting_edit', {'id': painting.id}) }}\" class=\"btn btn-default\">
                    <i class=\"glyphicon glyphicon-edit\"></i>
                    Modifier l'oeuvre
                </a>
                <a href=\"{{ path('painting_delete', {'id': painting.id}) }}\" class=\"btn btn-danger\">
                    <i class=\"glyphicon glyphicon-trash\"></i>
                    Supprimer l'oeuvre
                </a>
            </div>
        </div>
        {% endif %}
        {% endfor %}

        <a href=\"{{ path('painting_add') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-plus\"></i>
            Ajouter une oeuvre
        </a>
    </div>

    <ul class=\"pagination\">
        {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
        {% for p in range(1, nbPages) %}
        <li{% if p == page %} class=\"active\"{% endif %}>
            <a href=\"{{ path('painting_list', {'page': p}) }}\">{{ p }}</a>
        </li>
        {% endfor %}
    </ul>

</article>
</section>
{% endblock %}
", "BotellaBundle:paintings:list-paintings.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/list-paintings.html.twig");
    }
}
