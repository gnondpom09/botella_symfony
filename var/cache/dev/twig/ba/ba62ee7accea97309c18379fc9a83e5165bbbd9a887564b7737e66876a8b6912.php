<?php

/* BotellaBundle:blog:backoffice.html.twig */
class __TwigTemplate_9bfd36f19c9f8523c29041f2abf1bbb9de22d08c5fd31a4f635baaedab71d75b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:blog:backoffice.html.twig", 1);
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
        $__internal_dda47087e9e4f8422af098ed9046575504cc65228c0ec4d46ae1c7cfaeeecc2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda47087e9e4f8422af098ed9046575504cc65228c0ec4d46ae1c7cfaeeecc2b->enter($__internal_dda47087e9e4f8422af098ed9046575504cc65228c0ec4d46ae1c7cfaeeecc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:backoffice.html.twig"));

        $__internal_8536fa52abc3490cef9d0d003e0f6db0dbd5eafaafbd000c74e0dc84249e55ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8536fa52abc3490cef9d0d003e0f6db0dbd5eafaafbd000c74e0dc84249e55ea->enter($__internal_8536fa52abc3490cef9d0d003e0f6db0dbd5eafaafbd000c74e0dc84249e55ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:backoffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda47087e9e4f8422af098ed9046575504cc65228c0ec4d46ae1c7cfaeeecc2b->leave($__internal_dda47087e9e4f8422af098ed9046575504cc65228c0ec4d46ae1c7cfaeeecc2b_prof);

        
        $__internal_8536fa52abc3490cef9d0d003e0f6db0dbd5eafaafbd000c74e0dc84249e55ea->leave($__internal_8536fa52abc3490cef9d0d003e0f6db0dbd5eafaafbd000c74e0dc84249e55ea_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca147741bef71f670c203bc4011e9d7672650145a63267ba0183c88e3ec5a9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca147741bef71f670c203bc4011e9d7672650145a63267ba0183c88e3ec5a9df->enter($__internal_ca147741bef71f670c203bc4011e9d7672650145a63267ba0183c88e3ec5a9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0d26afed90b7a5036aef8fb781cf56cac003fea46b76e035ab938c014f98fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d26afed90b7a5036aef8fb781cf56cac003fea46b76e035ab938c014f98fd2->enter($__internal_f0d26afed90b7a5036aef8fb781cf56cac003fea46b76e035ab938c014f98fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f0d26afed90b7a5036aef8fb781cf56cac003fea46b76e035ab938c014f98fd2->leave($__internal_f0d26afed90b7a5036aef8fb781cf56cac003fea46b76e035ab938c014f98fd2_prof);

        
        $__internal_ca147741bef71f670c203bc4011e9d7672650145a63267ba0183c88e3ec5a9df->leave($__internal_ca147741bef71f670c203bc4011e9d7672650145a63267ba0183c88e3ec5a9df_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5205a948d9ce25c16d8bf54cfde6fbdb0e964692643ea88cdf2d637f62c5e048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5205a948d9ce25c16d8bf54cfde6fbdb0e964692643ea88cdf2d637f62c5e048->enter($__internal_5205a948d9ce25c16d8bf54cfde6fbdb0e964692643ea88cdf2d637f62c5e048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81dfd85236898937e53b7173709a806e524429915404638b11fb2e18a8f0d3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81dfd85236898937e53b7173709a806e524429915404638b11fb2e18a8f0d3cc->enter($__internal_81dfd85236898937e53b7173709a806e524429915404638b11fb2e18a8f0d3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back\">
    <h3>Accueil Backoffice</h3>


</article>
</section>
";
        
        $__internal_81dfd85236898937e53b7173709a806e524429915404638b11fb2e18a8f0d3cc->leave($__internal_81dfd85236898937e53b7173709a806e524429915404638b11fb2e18a8f0d3cc_prof);

        
        $__internal_5205a948d9ce25c16d8bf54cfde6fbdb0e964692643ea88cdf2d637f62c5e048->leave($__internal_5205a948d9ce25c16d8bf54cfde6fbdb0e964692643ea88cdf2d637f62c5e048_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:backoffice.html.twig";
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
        return new Twig_Source("{% extends \"BotellaBundle::layout_back.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}

{% block body %}

<article class=\"content-back\">
    <h3>Accueil Backoffice</h3>


</article>
</section>
{% endblock %}
", "BotellaBundle:blog:backoffice.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/backoffice.html.twig");
    }
}
