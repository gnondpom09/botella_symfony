<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_72f275caede84b6c552a3eba18bf762b34306eb98f1b56394a3c648f76956f1c extends Twig_Template
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
        $__internal_9d62e531b7a987c5bd6605d602389abfec025de819f8a5ac1dfb6d62252d3e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d62e531b7a987c5bd6605d602389abfec025de819f8a5ac1dfb6d62252d3e94->enter($__internal_9d62e531b7a987c5bd6605d602389abfec025de819f8a5ac1dfb6d62252d3e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_5c0a015ff97010dc602a06e83a3b1eae9e83f97a74ba7dfb86016369fff53c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0a015ff97010dc602a06e83a3b1eae9e83f97a74ba7dfb86016369fff53c04->enter($__internal_5c0a015ff97010dc602a06e83a3b1eae9e83f97a74ba7dfb86016369fff53c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9d62e531b7a987c5bd6605d602389abfec025de819f8a5ac1dfb6d62252d3e94->leave($__internal_9d62e531b7a987c5bd6605d602389abfec025de819f8a5ac1dfb6d62252d3e94_prof);

        
        $__internal_5c0a015ff97010dc602a06e83a3b1eae9e83f97a74ba7dfb86016369fff53c04->leave($__internal_5c0a015ff97010dc602a06e83a3b1eae9e83f97a74ba7dfb86016369fff53c04_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d8ca0607ba853cc2d42cf1f0f68635f00641fdffcbbeaf87d027fd56b1150a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ca0607ba853cc2d42cf1f0f68635f00641fdffcbbeaf87d027fd56b1150a45->enter($__internal_d8ca0607ba853cc2d42cf1f0f68635f00641fdffcbbeaf87d027fd56b1150a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ae68711076c7dd8f6492e75fb01d85cff145b9ff9bbc1511ce4f18f8e1f12886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae68711076c7dd8f6492e75fb01d85cff145b9ff9bbc1511ce4f18f8e1f12886->enter($__internal_ae68711076c7dd8f6492e75fb01d85cff145b9ff9bbc1511ce4f18f8e1f12886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_ae68711076c7dd8f6492e75fb01d85cff145b9ff9bbc1511ce4f18f8e1f12886->leave($__internal_ae68711076c7dd8f6492e75fb01d85cff145b9ff9bbc1511ce4f18f8e1f12886_prof);

        
        $__internal_d8ca0607ba853cc2d42cf1f0f68635f00641fdffcbbeaf87d027fd56b1150a45->leave($__internal_d8ca0607ba853cc2d42cf1f0f68635f00641fdffcbbeaf87d027fd56b1150a45_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c1262e3e7e3dd4a884d5d936ffeb0179017b0bd536062a310b4e0922b491d626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1262e3e7e3dd4a884d5d936ffeb0179017b0bd536062a310b4e0922b491d626->enter($__internal_c1262e3e7e3dd4a884d5d936ffeb0179017b0bd536062a310b4e0922b491d626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4e0a913107bfc32eee8c38b33a727e0c6404c5e82fc611699b4e23869f8818df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0a913107bfc32eee8c38b33a727e0c6404c5e82fc611699b4e23869f8818df->enter($__internal_4e0a913107bfc32eee8c38b33a727e0c6404c5e82fc611699b4e23869f8818df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4e0a913107bfc32eee8c38b33a727e0c6404c5e82fc611699b4e23869f8818df->leave($__internal_4e0a913107bfc32eee8c38b33a727e0c6404c5e82fc611699b4e23869f8818df_prof);

        
        $__internal_c1262e3e7e3dd4a884d5d936ffeb0179017b0bd536062a310b4e0922b491d626->leave($__internal_c1262e3e7e3dd4a884d5d936ffeb0179017b0bd536062a310b4e0922b491d626_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6722aee9b5ba769dc2bdf42d7aac73cb750b20975140e607562860089910f7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6722aee9b5ba769dc2bdf42d7aac73cb750b20975140e607562860089910f7e1->enter($__internal_6722aee9b5ba769dc2bdf42d7aac73cb750b20975140e607562860089910f7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b3a645b33dbcbd3e5da972f33dadfd318b57b988ff67e05b9ecc9086b102678b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a645b33dbcbd3e5da972f33dadfd318b57b988ff67e05b9ecc9086b102678b->enter($__internal_b3a645b33dbcbd3e5da972f33dadfd318b57b988ff67e05b9ecc9086b102678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b3a645b33dbcbd3e5da972f33dadfd318b57b988ff67e05b9ecc9086b102678b->leave($__internal_b3a645b33dbcbd3e5da972f33dadfd318b57b988ff67e05b9ecc9086b102678b_prof);

        
        $__internal_6722aee9b5ba769dc2bdf42d7aac73cb750b20975140e607562860089910f7e1->leave($__internal_6722aee9b5ba769dc2bdf42d7aac73cb750b20975140e607562860089910f7e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
