<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0d3b9fee3d87f37dae62cfa7d7d184cefa079d37d0aedd4a8f5c45c5e67c3019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8d62940ac31cebb8dcc62984407eb4f6f4edc1e34c15dbf2880364e2a76919c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d62940ac31cebb8dcc62984407eb4f6f4edc1e34c15dbf2880364e2a76919c->enter($__internal_d8d62940ac31cebb8dcc62984407eb4f6f4edc1e34c15dbf2880364e2a76919c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_f53fae51ec751887ab32be5b21f23cb1468a2981c38cc2f8e7286755b38d3861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53fae51ec751887ab32be5b21f23cb1468a2981c38cc2f8e7286755b38d3861->enter($__internal_f53fae51ec751887ab32be5b21f23cb1468a2981c38cc2f8e7286755b38d3861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d8d62940ac31cebb8dcc62984407eb4f6f4edc1e34c15dbf2880364e2a76919c->leave($__internal_d8d62940ac31cebb8dcc62984407eb4f6f4edc1e34c15dbf2880364e2a76919c_prof);

        
        $__internal_f53fae51ec751887ab32be5b21f23cb1468a2981c38cc2f8e7286755b38d3861->leave($__internal_f53fae51ec751887ab32be5b21f23cb1468a2981c38cc2f8e7286755b38d3861_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dc43f80334f1f0bec43d0b95da0a4412e9f1b9bd3f7d5d50c538ff9016df0c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc43f80334f1f0bec43d0b95da0a4412e9f1b9bd3f7d5d50c538ff9016df0c36->enter($__internal_dc43f80334f1f0bec43d0b95da0a4412e9f1b9bd3f7d5d50c538ff9016df0c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d60feeeba91383404099d05b6e3578c5938f382cb79c474f7c5ea56f7039d58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60feeeba91383404099d05b6e3578c5938f382cb79c474f7c5ea56f7039d58a->enter($__internal_d60feeeba91383404099d05b6e3578c5938f382cb79c474f7c5ea56f7039d58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d60feeeba91383404099d05b6e3578c5938f382cb79c474f7c5ea56f7039d58a->leave($__internal_d60feeeba91383404099d05b6e3578c5938f382cb79c474f7c5ea56f7039d58a_prof);

        
        $__internal_dc43f80334f1f0bec43d0b95da0a4412e9f1b9bd3f7d5d50c538ff9016df0c36->leave($__internal_dc43f80334f1f0bec43d0b95da0a4412e9f1b9bd3f7d5d50c538ff9016df0c36_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_11d690159af9e2c1a18f95caf861d8ffe8f74c368d41b0317187bd5d3b276bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d690159af9e2c1a18f95caf861d8ffe8f74c368d41b0317187bd5d3b276bb2->enter($__internal_11d690159af9e2c1a18f95caf861d8ffe8f74c368d41b0317187bd5d3b276bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5adef41ebfa1a52611a00642b8a3a04686426d07c05d484445e9a8d60c93f7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adef41ebfa1a52611a00642b8a3a04686426d07c05d484445e9a8d60c93f7ee->enter($__internal_5adef41ebfa1a52611a00642b8a3a04686426d07c05d484445e9a8d60c93f7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5adef41ebfa1a52611a00642b8a3a04686426d07c05d484445e9a8d60c93f7ee->leave($__internal_5adef41ebfa1a52611a00642b8a3a04686426d07c05d484445e9a8d60c93f7ee_prof);

        
        $__internal_11d690159af9e2c1a18f95caf861d8ffe8f74c368d41b0317187bd5d3b276bb2->leave($__internal_11d690159af9e2c1a18f95caf861d8ffe8f74c368d41b0317187bd5d3b276bb2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5410180bc498a621acb392bdb4c3c86a5c15e1618b857f03a15377c8aee70c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5410180bc498a621acb392bdb4c3c86a5c15e1618b857f03a15377c8aee70c5e->enter($__internal_5410180bc498a621acb392bdb4c3c86a5c15e1618b857f03a15377c8aee70c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_352e003309b47d597e9841a5ffb11ccba0c8c24797a733ed55af7a94621f5af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352e003309b47d597e9841a5ffb11ccba0c8c24797a733ed55af7a94621f5af4->enter($__internal_352e003309b47d597e9841a5ffb11ccba0c8c24797a733ed55af7a94621f5af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_352e003309b47d597e9841a5ffb11ccba0c8c24797a733ed55af7a94621f5af4->leave($__internal_352e003309b47d597e9841a5ffb11ccba0c8c24797a733ed55af7a94621f5af4_prof);

        
        $__internal_5410180bc498a621acb392bdb4c3c86a5c15e1618b857f03a15377c8aee70c5e->leave($__internal_5410180bc498a621acb392bdb4c3c86a5c15e1618b857f03a15377c8aee70c5e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
