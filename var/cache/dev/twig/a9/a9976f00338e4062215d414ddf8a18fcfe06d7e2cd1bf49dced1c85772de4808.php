<?php

/* BotellaBundle:posts:delete.html.twig */
class __TwigTemplate_9a4217c0dfc7c06a1996e841f6391b700c34a146009558b35e303b6a1603d8c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:posts:delete.html.twig", 1);
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
        $__internal_0a39caf810a5e8ccd3652a744c3702a412c8ba4815d98aeb7cff1263f5a4800c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a39caf810a5e8ccd3652a744c3702a412c8ba4815d98aeb7cff1263f5a4800c->enter($__internal_0a39caf810a5e8ccd3652a744c3702a412c8ba4815d98aeb7cff1263f5a4800c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:delete.html.twig"));

        $__internal_55741879a829a53ae29b0393eec4f5b14d22b69f71e5b223058ad989e51f09d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55741879a829a53ae29b0393eec4f5b14d22b69f71e5b223058ad989e51f09d1->enter($__internal_55741879a829a53ae29b0393eec4f5b14d22b69f71e5b223058ad989e51f09d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a39caf810a5e8ccd3652a744c3702a412c8ba4815d98aeb7cff1263f5a4800c->leave($__internal_0a39caf810a5e8ccd3652a744c3702a412c8ba4815d98aeb7cff1263f5a4800c_prof);

        
        $__internal_55741879a829a53ae29b0393eec4f5b14d22b69f71e5b223058ad989e51f09d1->leave($__internal_55741879a829a53ae29b0393eec4f5b14d22b69f71e5b223058ad989e51f09d1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3de6fe417e85b50643a4283f3dd215c8b6204014729dc2605e13a32274ed5f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de6fe417e85b50643a4283f3dd215c8b6204014729dc2605e13a32274ed5f10->enter($__internal_3de6fe417e85b50643a4283f3dd215c8b6204014729dc2605e13a32274ed5f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e18ed2fcc1a84ca8e3821b72e893ca5235b313bd66f3a60e08208870a52cbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e18ed2fcc1a84ca8e3821b72e893ca5235b313bd66f3a60e08208870a52cbed->enter($__internal_3e18ed2fcc1a84ca8e3821b72e893ca5235b313bd66f3a60e08208870a52cbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3e18ed2fcc1a84ca8e3821b72e893ca5235b313bd66f3a60e08208870a52cbed->leave($__internal_3e18ed2fcc1a84ca8e3821b72e893ca5235b313bd66f3a60e08208870a52cbed_prof);

        
        $__internal_3de6fe417e85b50643a4283f3dd215c8b6204014729dc2605e13a32274ed5f10->leave($__internal_3de6fe417e85b50643a4283f3dd215c8b6204014729dc2605e13a32274ed5f10_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_52064fe34bbd03645161cee00de7373af611e95cbaa65328ccc8578e0fb242af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52064fe34bbd03645161cee00de7373af611e95cbaa65328ccc8578e0fb242af->enter($__internal_52064fe34bbd03645161cee00de7373af611e95cbaa65328ccc8578e0fb242af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1629195a124931fceeaf37204622b3e57cb9d4b633efaca25e1410e72c518c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1629195a124931fceeaf37204622b3e57cb9d4b633efaca25e1410e72c518c2->enter($__internal_a1629195a124931fceeaf37204622b3e57cb9d4b633efaca25e1410e72c518c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded\">
    <h3>suppression article</h3>
    <p>Etes vous certain de vouloir supprimer l'annonce ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</p>

    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'article
        </a>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_list");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>

        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
</section>

";
        
        $__internal_a1629195a124931fceeaf37204622b3e57cb9d4b633efaca25e1410e72c518c2->leave($__internal_a1629195a124931fceeaf37204622b3e57cb9d4b633efaca25e1410e72c518c2_prof);

        
        $__internal_52064fe34bbd03645161cee00de7373af611e95cbaa65328ccc8578e0fb242af->leave($__internal_52064fe34bbd03645161cee00de7373af611e95cbaa65328ccc8578e0fb242af_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:posts:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  92 => 18,  85 => 14,  81 => 13,  76 => 11,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
    <h3>suppression article</h3>
    <p>Etes vous certain de vouloir supprimer l'annonce {{ article.title }}</p>

    <form action=\"{{ path('blog_delete', {'id': article.id}) }}\" method=\"post\">
        <a href=\"{{ path('article_view', {'id': article.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'article
        </a>
        <a href=\"{{ path('article_list') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>

        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />

        {{ form_rest(form) }}
    </form>
</section>

{% endblock %}
", "BotellaBundle:posts:delete.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/delete.html.twig");
    }
}
