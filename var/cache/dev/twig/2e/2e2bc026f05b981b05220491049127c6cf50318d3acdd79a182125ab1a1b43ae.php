<?php

/* BotellaBundle:paintings:detail-painting.html.twig */
class __TwigTemplate_6fdf8f0be0f28ca37c54b7d6ab7461186ce63b377267701b0deaffbb3a0d9657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:paintings:detail-painting.html.twig", 1);
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
        $__internal_6ea60742d22552f75c28e687cf74c8a7d841728c63782ab58a3fffe7b2ac064d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea60742d22552f75c28e687cf74c8a7d841728c63782ab58a3fffe7b2ac064d->enter($__internal_6ea60742d22552f75c28e687cf74c8a7d841728c63782ab58a3fffe7b2ac064d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:detail-painting.html.twig"));

        $__internal_46da2d217dfd4643c07a2fc7a7807e39a4fa2ba7e874c86b6802799558163cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46da2d217dfd4643c07a2fc7a7807e39a4fa2ba7e874c86b6802799558163cee->enter($__internal_46da2d217dfd4643c07a2fc7a7807e39a4fa2ba7e874c86b6802799558163cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:detail-painting.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea60742d22552f75c28e687cf74c8a7d841728c63782ab58a3fffe7b2ac064d->leave($__internal_6ea60742d22552f75c28e687cf74c8a7d841728c63782ab58a3fffe7b2ac064d_prof);

        
        $__internal_46da2d217dfd4643c07a2fc7a7807e39a4fa2ba7e874c86b6802799558163cee->leave($__internal_46da2d217dfd4643c07a2fc7a7807e39a4fa2ba7e874c86b6802799558163cee_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bde925a4d909ac873cd061bcd1d9069be3facecb7aef3148213fa1d7f99798df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde925a4d909ac873cd061bcd1d9069be3facecb7aef3148213fa1d7f99798df->enter($__internal_bde925a4d909ac873cd061bcd1d9069be3facecb7aef3148213fa1d7f99798df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66996f9673ce62b1643117e6b9997205e58024a46f5c28b179b5a8e12deb4748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66996f9673ce62b1643117e6b9997205e58024a46f5c28b179b5a8e12deb4748->enter($__internal_66996f9673ce62b1643117e6b9997205e58024a46f5c28b179b5a8e12deb4748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_66996f9673ce62b1643117e6b9997205e58024a46f5c28b179b5a8e12deb4748->leave($__internal_66996f9673ce62b1643117e6b9997205e58024a46f5c28b179b5a8e12deb4748_prof);

        
        $__internal_bde925a4d909ac873cd061bcd1d9069be3facecb7aef3148213fa1d7f99798df->leave($__internal_bde925a4d909ac873cd061bcd1d9069be3facecb7aef3148213fa1d7f99798df_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a563502997d029a3d0a018a152309ae2cbd3a1f7b07580eae5a734055ffffb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a563502997d029a3d0a018a152309ae2cbd3a1f7b07580eae5a734055ffffb42->enter($__internal_a563502997d029a3d0a018a152309ae2cbd3a1f7b07580eae5a734055ffffb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e57020e04ae896149a9d108b9841496abe3079f9e921bfd663f670e4058c7c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57020e04ae896149a9d108b9841496abe3079f9e921bfd663f670e4058c7c35->enter($__internal_e57020e04ae896149a9d108b9841496abe3079f9e921bfd663f670e4058c7c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded\">
    <h1>Detail de l'oeuvre</h1>
    <div class=\"col-md-4\">
        ";
        // line 13
        echo "        ";
        if ( !(null === $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "image", array()))) {
            // line 14
            echo "        <img
        src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
        alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
        />
        ";
        }
        // line 19
        echo "    </div>
    <div class=\"col-md-8\">
        <h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "title", array()), "html", null, true);
        echo "</h3>
        <h4>Dimensions</h4>
        <p>Hauteur : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "height", array()), "html", null, true);
        echo " <br> Largeur : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "width", array()), "html", null, true);
        echo "</p>
        <div class=\"well\">
            <h4>Technique </h4>
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "technic", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 28
        if ( !$this->getAttribute($this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "series", array()), "empty", array())) {
            // line 29
            echo "        <p>
            Cette oeuvre est parue dans la série suivante :
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "series", array()));
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
                // line 32
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 33
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </p>
        ";
        }
        // line 36
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_list");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_edit", array("id" => $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'oeuvre
        </a>
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_delete", array("id" => $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'oeuvre
        </a>
    </div>

</section>
</div>

";
        // line 53
        $this->loadTemplate("BotellaBundle:blog:footer-page.html.twig", "BotellaBundle:paintings:detail-painting.html.twig", 53)->display($context);
        
        $__internal_e57020e04ae896149a9d108b9841496abe3079f9e921bfd663f670e4058c7c35->leave($__internal_e57020e04ae896149a9d108b9841496abe3079f9e921bfd663f670e4058c7c35_prof);

        
        $__internal_a563502997d029a3d0a018a152309ae2cbd3a1f7b07580eae5a734055ffffb42->leave($__internal_a563502997d029a3d0a018a152309ae2cbd3a1f7b07580eae5a734055ffffb42_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:paintings:detail-painting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 53,  177 => 44,  170 => 40,  162 => 36,  158 => 34,  144 => 33,  138 => 32,  121 => 31,  117 => 29,  115 => 28,  110 => 26,  102 => 23,  97 => 21,  93 => 19,  87 => 16,  83 => 15,  80 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
    <h1>Detail de l'oeuvre</h1>
    <div class=\"col-md-4\">
        {# On vérifie qu'une image soit bien associée à l'article #}
        {% if painting.image is not null %}
        <img
        src=\"{{ asset(painting.image.webPath) }}\"
        alt=\"{{ painting.image.alt }}\"
        />
        {% endif %}
    </div>
    <div class=\"col-md-8\">
        <h3>{{ painting.title }}</h3>
        <h4>Dimensions</h4>
        <p>Hauteur : {{ painting.height }} <br> Largeur : {{ painting.width }}</p>
        <div class=\"well\">
            <h4>Technique </h4>
            {{ painting.technic }}
        </div>
        {% if not painting.series.empty %}
        <p>
            Cette oeuvre est parue dans la série suivante :
            {% for serie in painting.series %}
            {{ serie.name }}{% if not loop.last %}, {% endif %}
            {% endfor %}
        </p>
        {% endif %}
        <a href=\"{{ path('painting_list')}}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('painting_edit', {'id': painting.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'oeuvre
        </a>
        <a href=\"{{ path('painting_delete', {'id': painting.id}) }}\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'oeuvre
        </a>
    </div>

</section>
</div>

{% include 'BotellaBundle:blog:footer-page.html.twig' %}
{% endblock %}
", "BotellaBundle:paintings:detail-painting.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/detail-painting.html.twig");
    }
}
