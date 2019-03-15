<?php

/* BotellaBundle:paintings:edit-painting.html.twig */
class __TwigTemplate_7cdbc334debf9377a83c6ae8541abd7cd466ba2fea63ede03fcc6565a7cc46d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:paintings:edit-painting.html.twig", 1);
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
        $__internal_ed5223a1bc98aee230af5d4f8668a6e7c9c73a762ce8d7f3dca728b25d0f83ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5223a1bc98aee230af5d4f8668a6e7c9c73a762ce8d7f3dca728b25d0f83ef->enter($__internal_ed5223a1bc98aee230af5d4f8668a6e7c9c73a762ce8d7f3dca728b25d0f83ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:edit-painting.html.twig"));

        $__internal_cfe55f6ed4b846bfff902efe7c12191a5091a59b807ee7df67b4556a2850f18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe55f6ed4b846bfff902efe7c12191a5091a59b807ee7df67b4556a2850f18c->enter($__internal_cfe55f6ed4b846bfff902efe7c12191a5091a59b807ee7df67b4556a2850f18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:edit-painting.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed5223a1bc98aee230af5d4f8668a6e7c9c73a762ce8d7f3dca728b25d0f83ef->leave($__internal_ed5223a1bc98aee230af5d4f8668a6e7c9c73a762ce8d7f3dca728b25d0f83ef_prof);

        
        $__internal_cfe55f6ed4b846bfff902efe7c12191a5091a59b807ee7df67b4556a2850f18c->leave($__internal_cfe55f6ed4b846bfff902efe7c12191a5091a59b807ee7df67b4556a2850f18c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfd946d8fcca6d719005087881faa328aa08c89e95c36102c43215b2f56dc5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd946d8fcca6d719005087881faa328aa08c89e95c36102c43215b2f56dc5e8->enter($__internal_cfd946d8fcca6d719005087881faa328aa08c89e95c36102c43215b2f56dc5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbde2b1773b461d98b2815b5f218065ef063a318d75dc2cce0ae96478d59a3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbde2b1773b461d98b2815b5f218065ef063a318d75dc2cce0ae96478d59a3a8->enter($__internal_cbde2b1773b461d98b2815b5f218065ef063a318d75dc2cce0ae96478d59a3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cbde2b1773b461d98b2815b5f218065ef063a318d75dc2cce0ae96478d59a3a8->leave($__internal_cbde2b1773b461d98b2815b5f218065ef063a318d75dc2cce0ae96478d59a3a8_prof);

        
        $__internal_cfd946d8fcca6d719005087881faa328aa08c89e95c36102c43215b2f56dc5e8->leave($__internal_cfd946d8fcca6d719005087881faa328aa08c89e95c36102c43215b2f56dc5e8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c321cd534b5625c26f99f9c8b45c5a99b6510c40b493c01ccf5d3975206cc97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c321cd534b5625c26f99f9c8b45c5a99b6510c40b493c01ccf5d3975206cc97f->enter($__internal_c321cd534b5625c26f99f9c8b45c5a99b6510c40b493c01ccf5d3975206cc97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b835339018f592601411d77b7cac440a2990df25c9d92478c61f451fa4bf09fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b835339018f592601411d77b7cac440a2990df25c9d92478c61f451fa4bf09fb->enter($__internal_b835339018f592601411d77b7cac440a2990df25c9d92478c61f451fa4bf09fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back cadre\">
    <h1>Modifier une oeuvre</h1>

    ";
        // line 13
        echo twig_include($this->env, $context, "BotellaBundle:paintings:form-painting.html.twig");
        echo "

    <p>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_list");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_view", array("id" => $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'oeuvre
        </a>
    </p>
</article>
</section>
";
        
        $__internal_b835339018f592601411d77b7cac440a2990df25c9d92478c61f451fa4bf09fb->leave($__internal_b835339018f592601411d77b7cac440a2990df25c9d92478c61f451fa4bf09fb_prof);

        
        $__internal_c321cd534b5625c26f99f9c8b45c5a99b6510c40b493c01ccf5d3975206cc97f->leave($__internal_c321cd534b5625c26f99f9c8b45c5a99b6510c40b493c01ccf5d3975206cc97f_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:paintings:edit-painting.html.twig";
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

<article class=\"content-back cadre\">
    <h1>Modifier une oeuvre</h1>

    {{ include(\"BotellaBundle:paintings:form-painting.html.twig\") }}

    <p>
        <a href=\"{{ path('painting_list')}}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('painting_view', {'id': painting.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'oeuvre
        </a>
    </p>
</article>
</section>
{% endblock %}
", "BotellaBundle:paintings:edit-painting.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/edit-painting.html.twig");
    }
}
