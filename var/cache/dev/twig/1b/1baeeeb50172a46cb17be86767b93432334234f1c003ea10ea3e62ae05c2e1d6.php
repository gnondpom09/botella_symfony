<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_5866c30bc1b3059cec63bd146cb18dab71ea4b764239e4c1668ef511d8d88cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bde478b632eb523245f1834d6b03b0989836c0d6820eabb198449d3403c37b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde478b632eb523245f1834d6b03b0989836c0d6820eabb198449d3403c37b06->enter($__internal_bde478b632eb523245f1834d6b03b0989836c0d6820eabb198449d3403c37b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_6cb2073685e5ca3b1fa9342ed24d5f28bc91e94ed909fd851fbfcc5a6a5f19d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb2073685e5ca3b1fa9342ed24d5f28bc91e94ed909fd851fbfcc5a6a5f19d6->enter($__internal_6cb2073685e5ca3b1fa9342ed24d5f28bc91e94ed909fd851fbfcc5a6a5f19d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bde478b632eb523245f1834d6b03b0989836c0d6820eabb198449d3403c37b06->leave($__internal_bde478b632eb523245f1834d6b03b0989836c0d6820eabb198449d3403c37b06_prof);

        
        $__internal_6cb2073685e5ca3b1fa9342ed24d5f28bc91e94ed909fd851fbfcc5a6a5f19d6->leave($__internal_6cb2073685e5ca3b1fa9342ed24d5f28bc91e94ed909fd851fbfcc5a6a5f19d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd93f2b262fb5d912458df5356005cc463744f0ae5c8e6d51ce71ecf5e96a678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd93f2b262fb5d912458df5356005cc463744f0ae5c8e6d51ce71ecf5e96a678->enter($__internal_bd93f2b262fb5d912458df5356005cc463744f0ae5c8e6d51ce71ecf5e96a678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15a784cc580e9fcdae9c539dfddf47795a4fc3ad9c5bc952e53bc42c11ccc5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a784cc580e9fcdae9c539dfddf47795a4fc3ad9c5bc952e53bc42c11ccc5c4->enter($__internal_15a784cc580e9fcdae9c539dfddf47795a4fc3ad9c5bc952e53bc42c11ccc5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_15a784cc580e9fcdae9c539dfddf47795a4fc3ad9c5bc952e53bc42c11ccc5c4->leave($__internal_15a784cc580e9fcdae9c539dfddf47795a4fc3ad9c5bc952e53bc42c11ccc5c4_prof);

        
        $__internal_bd93f2b262fb5d912458df5356005cc463744f0ae5c8e6d51ce71ecf5e96a678->leave($__internal_bd93f2b262fb5d912458df5356005cc463744f0ae5c8e6d51ce71ecf5e96a678_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_54ccfef274a0e61f77666e54be69b34983a81f17085236fed4297740a451d3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ccfef274a0e61f77666e54be69b34983a81f17085236fed4297740a451d3c3->enter($__internal_54ccfef274a0e61f77666e54be69b34983a81f17085236fed4297740a451d3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1149f1685ac905bb7b3c8562fc0bcb8c31eb376fbbbb7c5d4eacacca967508a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1149f1685ac905bb7b3c8562fc0bcb8c31eb376fbbbb7c5d4eacacca967508a1->enter($__internal_1149f1685ac905bb7b3c8562fc0bcb8c31eb376fbbbb7c5d4eacacca967508a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1149f1685ac905bb7b3c8562fc0bcb8c31eb376fbbbb7c5d4eacacca967508a1->leave($__internal_1149f1685ac905bb7b3c8562fc0bcb8c31eb376fbbbb7c5d4eacacca967508a1_prof);

        
        $__internal_54ccfef274a0e61f77666e54be69b34983a81f17085236fed4297740a451d3c3->leave($__internal_54ccfef274a0e61f77666e54be69b34983a81f17085236fed4297740a451d3c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
