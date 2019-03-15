<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_943a4328cdd144004632f2c9e4935dfa903361c2014566a699f381fc36887d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d4ff02501f47329ac519a6254abd6e5f0cbab321fc20508abf5ff3ccfb74e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4ff02501f47329ac519a6254abd6e5f0cbab321fc20508abf5ff3ccfb74e00->enter($__internal_6d4ff02501f47329ac519a6254abd6e5f0cbab321fc20508abf5ff3ccfb74e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_fb55e60749b909915b6a174b8977ef18b27aa25e914992dc9738c3ee7852db64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb55e60749b909915b6a174b8977ef18b27aa25e914992dc9738c3ee7852db64->enter($__internal_fb55e60749b909915b6a174b8977ef18b27aa25e914992dc9738c3ee7852db64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6d4ff02501f47329ac519a6254abd6e5f0cbab321fc20508abf5ff3ccfb74e00->leave($__internal_6d4ff02501f47329ac519a6254abd6e5f0cbab321fc20508abf5ff3ccfb74e00_prof);

        
        $__internal_fb55e60749b909915b6a174b8977ef18b27aa25e914992dc9738c3ee7852db64->leave($__internal_fb55e60749b909915b6a174b8977ef18b27aa25e914992dc9738c3ee7852db64_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_92ea236d6399e43f9123b73ac702a080c2b1899fb3cb45fa42c5f1299ff51068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ea236d6399e43f9123b73ac702a080c2b1899fb3cb45fa42c5f1299ff51068->enter($__internal_92ea236d6399e43f9123b73ac702a080c2b1899fb3cb45fa42c5f1299ff51068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55475792f10be5519b50c5a02749aa98c42bf21ab8b557c1490447da89c6c5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55475792f10be5519b50c5a02749aa98c42bf21ab8b557c1490447da89c6c5bf->enter($__internal_55475792f10be5519b50c5a02749aa98c42bf21ab8b557c1490447da89c6c5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_55475792f10be5519b50c5a02749aa98c42bf21ab8b557c1490447da89c6c5bf->leave($__internal_55475792f10be5519b50c5a02749aa98c42bf21ab8b557c1490447da89c6c5bf_prof);

        
        $__internal_92ea236d6399e43f9123b73ac702a080c2b1899fb3cb45fa42c5f1299ff51068->leave($__internal_92ea236d6399e43f9123b73ac702a080c2b1899fb3cb45fa42c5f1299ff51068_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
