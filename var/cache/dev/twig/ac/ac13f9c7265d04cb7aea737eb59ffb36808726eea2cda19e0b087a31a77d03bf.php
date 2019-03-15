<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c45155bffefaff4b20ff3c9c25b3627f03c117920dbf03c3d68b640ea907c15b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BotellaBundle::layout_page.html.twig", "@FOSUser/layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_894681ad45879c2275d28a12f18c28f6747a218d45e030ef0e8908031c9d5428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894681ad45879c2275d28a12f18c28f6747a218d45e030ef0e8908031c9d5428->enter($__internal_894681ad45879c2275d28a12f18c28f6747a218d45e030ef0e8908031c9d5428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_440ca6db52986875112edbd717aa88e07413ebe69e76b2baafa65c8438317b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440ca6db52986875112edbd717aa88e07413ebe69e76b2baafa65c8438317b54->enter($__internal_440ca6db52986875112edbd717aa88e07413ebe69e76b2baafa65c8438317b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_894681ad45879c2275d28a12f18c28f6747a218d45e030ef0e8908031c9d5428->leave($__internal_894681ad45879c2275d28a12f18c28f6747a218d45e030ef0e8908031c9d5428_prof);

        
        $__internal_440ca6db52986875112edbd717aa88e07413ebe69e76b2baafa65c8438317b54->leave($__internal_440ca6db52986875112edbd717aa88e07413ebe69e76b2baafa65c8438317b54_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_281911fdc1f6a58e80d2796da152bdda0d49b04267329adf0f6da0cfb7bd5987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281911fdc1f6a58e80d2796da152bdda0d49b04267329adf0f6da0cfb7bd5987->enter($__internal_281911fdc1f6a58e80d2796da152bdda0d49b04267329adf0f6da0cfb7bd5987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa8262ef210ddb138ca9b7b4f3f1c7dade09ebaf3ae1606f8a61fb0969ac42f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8262ef210ddb138ca9b7b4f3f1c7dade09ebaf3ae1606f8a61fb0969ac42f6->enter($__internal_aa8262ef210ddb138ca9b7b4f3f1c7dade09ebaf3ae1606f8a61fb0969ac42f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<div class=\"cadre row expanded\">
    ";
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 11
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
          ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    ";
        // line 19
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "</div>

";
        
        $__internal_aa8262ef210ddb138ca9b7b4f3f1c7dade09ebaf3ae1606f8a61fb0969ac42f6->leave($__internal_aa8262ef210ddb138ca9b7b4f3f1c7dade09ebaf3ae1606f8a61fb0969ac42f6_prof);

        
        $__internal_281911fdc1f6a58e80d2796da152bdda0d49b04267329adf0f6da0cfb7bd5987->leave($__internal_281911fdc1f6a58e80d2796da152bdda0d49b04267329adf0f6da0cfb7bd5987_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1efb0a233f2ffc99935b9867647f27ef89cf828aeee8611019c926d7d5480737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efb0a233f2ffc99935b9867647f27ef89cf828aeee8611019c926d7d5480737->enter($__internal_1efb0a233f2ffc99935b9867647f27ef89cf828aeee8611019c926d7d5480737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_830aa720d4acb40122349960bf41c5a97de824cbc6daf0aa24d048973c1d0da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830aa720d4acb40122349960bf41c5a97de824cbc6daf0aa24d048973c1d0da5->enter($__internal_830aa720d4acb40122349960bf41c5a97de824cbc6daf0aa24d048973c1d0da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "    ";
        
        $__internal_830aa720d4acb40122349960bf41c5a97de824cbc6daf0aa24d048973c1d0da5->leave($__internal_830aa720d4acb40122349960bf41c5a97de824cbc6daf0aa24d048973c1d0da5_prof);

        
        $__internal_1efb0a233f2ffc99935b9867647f27ef89cf828aeee8611019c926d7d5480737->leave($__internal_1efb0a233f2ffc99935b9867647f27ef89cf828aeee8611019c926d7d5480737_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 20,  102 => 19,  90 => 21,  87 => 19,  84 => 17,  78 => 16,  69 => 13,  64 => 12,  59 => 11,  54 => 10,  50 => 7,  41 => 6,  11 => 3,);
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

{% extends \"BotellaBundle::layout_page.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

<div class=\"cadre row expanded\">
    {# On affiche les messages flash que définissent les contrôleurs du bundle #}
    {% for key, messages in app.session.flashbag.all() %}
      {% for message in messages %}
        <div class=\"alert alert-{{ key }}\">
          {{ message|trans({}, 'FOSUserBundle') }}
        </div>
      {% endfor %}
    {% endfor %}

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>

{% endblock %}
", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/app_botella/src/UserBundle/Resources/views/layout.html.twig");
    }
}
