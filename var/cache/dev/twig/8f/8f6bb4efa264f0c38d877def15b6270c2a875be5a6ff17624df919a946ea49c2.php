<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_92f342d2a1f100edb0d7c9bdf99d52b1167416a2f2d35449db45f24f35cdc14e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8291c5fc8f06777c603d038868a2daf0b114023b007d6e14e9999851cc4dfee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8291c5fc8f06777c603d038868a2daf0b114023b007d6e14e9999851cc4dfee3->enter($__internal_8291c5fc8f06777c603d038868a2daf0b114023b007d6e14e9999851cc4dfee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ef6a43e31497ceae7059915949c7ffbef6c0be6bb1eba93ca1b9d8650e9c129c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6a43e31497ceae7059915949c7ffbef6c0be6bb1eba93ca1b9d8650e9c129c->enter($__internal_ef6a43e31497ceae7059915949c7ffbef6c0be6bb1eba93ca1b9d8650e9c129c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8291c5fc8f06777c603d038868a2daf0b114023b007d6e14e9999851cc4dfee3->leave($__internal_8291c5fc8f06777c603d038868a2daf0b114023b007d6e14e9999851cc4dfee3_prof);

        
        $__internal_ef6a43e31497ceae7059915949c7ffbef6c0be6bb1eba93ca1b9d8650e9c129c->leave($__internal_ef6a43e31497ceae7059915949c7ffbef6c0be6bb1eba93ca1b9d8650e9c129c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9f0319134cbe53dac862adb434d55c16b39e33388f8129b01d0c867039430a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0319134cbe53dac862adb434d55c16b39e33388f8129b01d0c867039430a1c->enter($__internal_9f0319134cbe53dac862adb434d55c16b39e33388f8129b01d0c867039430a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_58ea2c915e4089d4eb9d8299ec0a114be2cdd8171315c0d6b2d70547cd66acd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ea2c915e4089d4eb9d8299ec0a114be2cdd8171315c0d6b2d70547cd66acd9->enter($__internal_58ea2c915e4089d4eb9d8299ec0a114be2cdd8171315c0d6b2d70547cd66acd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_58ea2c915e4089d4eb9d8299ec0a114be2cdd8171315c0d6b2d70547cd66acd9->leave($__internal_58ea2c915e4089d4eb9d8299ec0a114be2cdd8171315c0d6b2d70547cd66acd9_prof);

        
        $__internal_9f0319134cbe53dac862adb434d55c16b39e33388f8129b01d0c867039430a1c->leave($__internal_9f0319134cbe53dac862adb434d55c16b39e33388f8129b01d0c867039430a1c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_adfee9209163b7349adba826162ea864e273f3aa386d75017fe93419174f92bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfee9209163b7349adba826162ea864e273f3aa386d75017fe93419174f92bd->enter($__internal_adfee9209163b7349adba826162ea864e273f3aa386d75017fe93419174f92bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b3aaabe1a872f84c884d8a13423f7091fb1b1d8d967bbeaa3dcecd20d7e2612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3aaabe1a872f84c884d8a13423f7091fb1b1d8d967bbeaa3dcecd20d7e2612->enter($__internal_6b3aaabe1a872f84c884d8a13423f7091fb1b1d8d967bbeaa3dcecd20d7e2612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6b3aaabe1a872f84c884d8a13423f7091fb1b1d8d967bbeaa3dcecd20d7e2612->leave($__internal_6b3aaabe1a872f84c884d8a13423f7091fb1b1d8d967bbeaa3dcecd20d7e2612_prof);

        
        $__internal_adfee9209163b7349adba826162ea864e273f3aa386d75017fe93419174f92bd->leave($__internal_adfee9209163b7349adba826162ea864e273f3aa386d75017fe93419174f92bd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
