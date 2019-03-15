<?php

/* BotellaBundle:posts:edit.html.twig */
class __TwigTemplate_b92c3a82e5a588ad3c278c35823bfcdc7298c1c6c456bf5eccb3d1eabb61c16b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:posts:edit.html.twig", 1);
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
        $__internal_e20de09a366709e09cb8d51208ded763c4a504fdd8fb74a8670717c5cdf6eb26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20de09a366709e09cb8d51208ded763c4a504fdd8fb74a8670717c5cdf6eb26->enter($__internal_e20de09a366709e09cb8d51208ded763c4a504fdd8fb74a8670717c5cdf6eb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:edit.html.twig"));

        $__internal_36eab15e8107e931a196c3befc7eda230b3a4cd8a60f9b9f7d87370dd7c83304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36eab15e8107e931a196c3befc7eda230b3a4cd8a60f9b9f7d87370dd7c83304->enter($__internal_36eab15e8107e931a196c3befc7eda230b3a4cd8a60f9b9f7d87370dd7c83304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e20de09a366709e09cb8d51208ded763c4a504fdd8fb74a8670717c5cdf6eb26->leave($__internal_e20de09a366709e09cb8d51208ded763c4a504fdd8fb74a8670717c5cdf6eb26_prof);

        
        $__internal_36eab15e8107e931a196c3befc7eda230b3a4cd8a60f9b9f7d87370dd7c83304->leave($__internal_36eab15e8107e931a196c3befc7eda230b3a4cd8a60f9b9f7d87370dd7c83304_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b85f48ee0695f8a7b03e31d3971e74df50f51d6976b7065e1e06194263893738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85f48ee0695f8a7b03e31d3971e74df50f51d6976b7065e1e06194263893738->enter($__internal_b85f48ee0695f8a7b03e31d3971e74df50f51d6976b7065e1e06194263893738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_857645a0ef9693405e5e7d1aff745aa6f613d3aa7ab087d290103b17cb1338a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857645a0ef9693405e5e7d1aff745aa6f613d3aa7ab087d290103b17cb1338a1->enter($__internal_857645a0ef9693405e5e7d1aff745aa6f613d3aa7ab087d290103b17cb1338a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_857645a0ef9693405e5e7d1aff745aa6f613d3aa7ab087d290103b17cb1338a1->leave($__internal_857645a0ef9693405e5e7d1aff745aa6f613d3aa7ab087d290103b17cb1338a1_prof);

        
        $__internal_b85f48ee0695f8a7b03e31d3971e74df50f51d6976b7065e1e06194263893738->leave($__internal_b85f48ee0695f8a7b03e31d3971e74df50f51d6976b7065e1e06194263893738_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8d36d2eb3a239cda780ec40a7adc4194160ba6952d645ef4f623f10dc4c1155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d36d2eb3a239cda780ec40a7adc4194160ba6952d645ef4f623f10dc4c1155->enter($__internal_b8d36d2eb3a239cda780ec40a7adc4194160ba6952d645ef4f623f10dc4c1155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b844cc78385c95e77280e93fd425ff3f69a0a7c282061265eada5030dfcd3e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b844cc78385c95e77280e93fd425ff3f69a0a7c282061265eada5030dfcd3e58->enter($__internal_b844cc78385c95e77280e93fd425ff3f69a0a7c282061265eada5030dfcd3e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded\">

    <h3>Modifier un article</h3>

    ";
        // line 13
        echo twig_include($this->env, $context, "BotellaBundle:posts:form.html.twig");
        echo "

    <p>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_list");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'article
        </a>
    </p>

</section>

";
        
        $__internal_b844cc78385c95e77280e93fd425ff3f69a0a7c282061265eada5030dfcd3e58->leave($__internal_b844cc78385c95e77280e93fd425ff3f69a0a7c282061265eada5030dfcd3e58_prof);

        
        $__internal_b8d36d2eb3a239cda780ec40a7adc4194160ba6952d645ef4f623f10dc4c1155->leave($__internal_b8d36d2eb3a239cda780ec40a7adc4194160ba6952d645ef4f623f10dc4c1155_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:posts:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  84 => 16,  78 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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

    <h3>Modifier un article</h3>

    {{ include(\"BotellaBundle:posts:form.html.twig\") }}

    <p>
        <a href=\"{{ path('article_list') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('article_view', {'id': article.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'article
        </a>
    </p>

</section>

{% endblock %}
", "BotellaBundle:posts:edit.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/edit.html.twig");
    }
}
