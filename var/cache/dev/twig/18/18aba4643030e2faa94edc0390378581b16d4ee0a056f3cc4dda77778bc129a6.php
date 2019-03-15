<?php

/* BotellaBundle:blog:legal.html.twig */
class __TwigTemplate_f0238fab433926d72265322961f9394fe65767f1885ea0fd8cfc9d14b9009a90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_page.html.twig", "BotellaBundle:blog:legal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc7a374edb7ad0805809d2a4016abf63e2de3e8bfc57da59659544ec4eecd2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7a374edb7ad0805809d2a4016abf63e2de3e8bfc57da59659544ec4eecd2fa->enter($__internal_dc7a374edb7ad0805809d2a4016abf63e2de3e8bfc57da59659544ec4eecd2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:legal.html.twig"));

        $__internal_0d9499310914887601427365601d1d7d6339c46fcd4754c5ba569fad42217085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9499310914887601427365601d1d7d6339c46fcd4754c5ba569fad42217085->enter($__internal_0d9499310914887601427365601d1d7d6339c46fcd4754c5ba569fad42217085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:legal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc7a374edb7ad0805809d2a4016abf63e2de3e8bfc57da59659544ec4eecd2fa->leave($__internal_dc7a374edb7ad0805809d2a4016abf63e2de3e8bfc57da59659544ec4eecd2fa_prof);

        
        $__internal_0d9499310914887601427365601d1d7d6339c46fcd4754c5ba569fad42217085->leave($__internal_0d9499310914887601427365601d1d7d6339c46fcd4754c5ba569fad42217085_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_92f3e0ce412d092b06443abcc189e52cb0af167e25cd6496796144d3d368fc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f3e0ce412d092b06443abcc189e52cb0af167e25cd6496796144d3d368fc90->enter($__internal_92f3e0ce412d092b06443abcc189e52cb0af167e25cd6496796144d3d368fc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0daef204161364ace576b98c03cf76a0607487b91beae6355da6fd6716efc09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0daef204161364ace576b98c03cf76a0607487b91beae6355da6fd6716efc09->enter($__internal_d0daef204161364ace576b98c03cf76a0607487b91beae6355da6fd6716efc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d0daef204161364ace576b98c03cf76a0607487b91beae6355da6fd6716efc09->leave($__internal_d0daef204161364ace576b98c03cf76a0607487b91beae6355da6fd6716efc09_prof);

        
        $__internal_92f3e0ce412d092b06443abcc189e52cb0af167e25cd6496796144d3d368fc90->leave($__internal_92f3e0ce412d092b06443abcc189e52cb0af167e25cd6496796144d3d368fc90_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad5f1cf3732658a1b477100a634037bc8d19ea64122af5fc2a19e7fed32a5623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad5f1cf3732658a1b477100a634037bc8d19ea64122af5fc2a19e7fed32a5623->enter($__internal_ad5f1cf3732658a1b477100a634037bc8d19ea64122af5fc2a19e7fed32a5623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6cef004457c43e7b42b2261f97ea2ee1ce1d71901d66a35f5cf8ecbcc599c3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cef004457c43e7b42b2261f97ea2ee1ce1d71901d66a35f5cf8ecbcc599c3d6->enter($__internal_6cef004457c43e7b42b2261f97ea2ee1ce1d71901d66a35f5cf8ecbcc599c3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded page\">
    <h1>Mentions légales</h1>

</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>
";
        
        $__internal_6cef004457c43e7b42b2261f97ea2ee1ce1d71901d66a35f5cf8ecbcc599c3d6->leave($__internal_6cef004457c43e7b42b2261f97ea2ee1ce1d71901d66a35f5cf8ecbcc599c3d6_prof);

        
        $__internal_ad5f1cf3732658a1b477100a634037bc8d19ea64122af5fc2a19e7fed32a5623->leave($__internal_ad5f1cf3732658a1b477100a634037bc8d19ea64122af5fc2a19e7fed32a5623_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:legal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BotellaBundle::layout_page.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}

{% block body %}
<section class=\"cadre row expanded page\">
    <h1>Mentions légales</h1>

</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>
{% endblock %}
", "BotellaBundle:blog:legal.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/legal.html.twig");
    }
}
