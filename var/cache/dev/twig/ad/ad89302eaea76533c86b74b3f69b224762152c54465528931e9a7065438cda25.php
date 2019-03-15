<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_d4d9d1eef24a848df855e5f1c6b2a3ef01de372ba0ef8426289ddedbeab38f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BotellaBundle::layout_page.html.twig", "UserBundle::layout.html.twig", 3);
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
        $__internal_210755e134335c47798a776605416dc1dfacf6f48d8cc3c4f403b1d447ce8016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210755e134335c47798a776605416dc1dfacf6f48d8cc3c4f403b1d447ce8016->enter($__internal_210755e134335c47798a776605416dc1dfacf6f48d8cc3c4f403b1d447ce8016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_906d455dd496cb2aa9586372a4c80427096cbd9c453095cf73e5170b0d14bccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906d455dd496cb2aa9586372a4c80427096cbd9c453095cf73e5170b0d14bccc->enter($__internal_906d455dd496cb2aa9586372a4c80427096cbd9c453095cf73e5170b0d14bccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_210755e134335c47798a776605416dc1dfacf6f48d8cc3c4f403b1d447ce8016->leave($__internal_210755e134335c47798a776605416dc1dfacf6f48d8cc3c4f403b1d447ce8016_prof);

        
        $__internal_906d455dd496cb2aa9586372a4c80427096cbd9c453095cf73e5170b0d14bccc->leave($__internal_906d455dd496cb2aa9586372a4c80427096cbd9c453095cf73e5170b0d14bccc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_394fb36caa0e9c453c10db68c709b1904d97ef582657cc073ffd920e9a225012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394fb36caa0e9c453c10db68c709b1904d97ef582657cc073ffd920e9a225012->enter($__internal_394fb36caa0e9c453c10db68c709b1904d97ef582657cc073ffd920e9a225012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e88cd045e90ea5d856b2b21deaabaf3d12dff631feae405351cf23814eb71e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e88cd045e90ea5d856b2b21deaabaf3d12dff631feae405351cf23814eb71e1->enter($__internal_4e88cd045e90ea5d856b2b21deaabaf3d12dff631feae405351cf23814eb71e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<div class=\"cadre row expanded\">
    ";
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_4e88cd045e90ea5d856b2b21deaabaf3d12dff631feae405351cf23814eb71e1->leave($__internal_4e88cd045e90ea5d856b2b21deaabaf3d12dff631feae405351cf23814eb71e1_prof);

        
        $__internal_394fb36caa0e9c453c10db68c709b1904d97ef582657cc073ffd920e9a225012->leave($__internal_394fb36caa0e9c453c10db68c709b1904d97ef582657cc073ffd920e9a225012_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7d8b0c37066cb2da689b3f9c1e9f2549af9bff6dd89e6e995f7e29dbb779d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d8b0c37066cb2da689b3f9c1e9f2549af9bff6dd89e6e995f7e29dbb779d6a->enter($__internal_c7d8b0c37066cb2da689b3f9c1e9f2549af9bff6dd89e6e995f7e29dbb779d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe12fb7e27a777973547776818eb51a36945503ae15064102d9bd5d1d8b54113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe12fb7e27a777973547776818eb51a36945503ae15064102d9bd5d1d8b54113->enter($__internal_fe12fb7e27a777973547776818eb51a36945503ae15064102d9bd5d1d8b54113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 20
        echo "    ";
        
        $__internal_fe12fb7e27a777973547776818eb51a36945503ae15064102d9bd5d1d8b54113->leave($__internal_fe12fb7e27a777973547776818eb51a36945503ae15064102d9bd5d1d8b54113_prof);

        
        $__internal_c7d8b0c37066cb2da689b3f9c1e9f2549af9bff6dd89e6e995f7e29dbb779d6a->leave($__internal_c7d8b0c37066cb2da689b3f9c1e9f2549af9bff6dd89e6e995f7e29dbb779d6a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
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
", "UserBundle::layout.html.twig", "/Applications/MAMP/htdocs/app_botella/src/UserBundle/Resources/views/layout.html.twig");
    }
}
