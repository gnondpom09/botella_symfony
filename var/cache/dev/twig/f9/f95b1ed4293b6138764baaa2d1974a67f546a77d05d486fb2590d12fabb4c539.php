<?php

/* BotellaBundle:posts:edit.html.twig */
class __TwigTemplate_c5bfa330bbfa9f907a6ea46732c8e0ec753a34916518dd03112e79f7ab29ee85 extends Twig_Template
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
        $__internal_1e03cbde5858e281f3bef6e1f657bb18329535b4765e488f0c007385af2a2875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e03cbde5858e281f3bef6e1f657bb18329535b4765e488f0c007385af2a2875->enter($__internal_1e03cbde5858e281f3bef6e1f657bb18329535b4765e488f0c007385af2a2875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:edit.html.twig"));

        $__internal_70d840a69a8e2388fe8787a3f6f4365e74ee90d72bb9bbd344a1a9babade9f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d840a69a8e2388fe8787a3f6f4365e74ee90d72bb9bbd344a1a9babade9f03->enter($__internal_70d840a69a8e2388fe8787a3f6f4365e74ee90d72bb9bbd344a1a9babade9f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e03cbde5858e281f3bef6e1f657bb18329535b4765e488f0c007385af2a2875->leave($__internal_1e03cbde5858e281f3bef6e1f657bb18329535b4765e488f0c007385af2a2875_prof);

        
        $__internal_70d840a69a8e2388fe8787a3f6f4365e74ee90d72bb9bbd344a1a9babade9f03->leave($__internal_70d840a69a8e2388fe8787a3f6f4365e74ee90d72bb9bbd344a1a9babade9f03_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a7d79ba57235a10b36137e23627380bce349958ca6261b8555e8c2c1b214c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7d79ba57235a10b36137e23627380bce349958ca6261b8555e8c2c1b214c8d->enter($__internal_2a7d79ba57235a10b36137e23627380bce349958ca6261b8555e8c2c1b214c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_488832a0ada212696aefcf8c8a745b56ef0f76c9d23d311c139db48e88e57503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488832a0ada212696aefcf8c8a745b56ef0f76c9d23d311c139db48e88e57503->enter($__internal_488832a0ada212696aefcf8c8a745b56ef0f76c9d23d311c139db48e88e57503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_488832a0ada212696aefcf8c8a745b56ef0f76c9d23d311c139db48e88e57503->leave($__internal_488832a0ada212696aefcf8c8a745b56ef0f76c9d23d311c139db48e88e57503_prof);

        
        $__internal_2a7d79ba57235a10b36137e23627380bce349958ca6261b8555e8c2c1b214c8d->leave($__internal_2a7d79ba57235a10b36137e23627380bce349958ca6261b8555e8c2c1b214c8d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a448fd74e0ad08986295d889464f1cdbfedc404ba0c4bbe68abd81f1e238b504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a448fd74e0ad08986295d889464f1cdbfedc404ba0c4bbe68abd81f1e238b504->enter($__internal_a448fd74e0ad08986295d889464f1cdbfedc404ba0c4bbe68abd81f1e238b504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0a12c41b3bae30f8a030ce8c8ad3fc8cdcb198b2c754aaf49b5bdb4a15b7326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a12c41b3bae30f8a030ce8c8ad3fc8cdcb198b2c754aaf49b5bdb4a15b7326->enter($__internal_c0a12c41b3bae30f8a030ce8c8ad3fc8cdcb198b2c754aaf49b5bdb4a15b7326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'article
        </a>
    </p>

</section>

";
        
        $__internal_c0a12c41b3bae30f8a030ce8c8ad3fc8cdcb198b2c754aaf49b5bdb4a15b7326->leave($__internal_c0a12c41b3bae30f8a030ce8c8ad3fc8cdcb198b2c754aaf49b5bdb4a15b7326_prof);

        
        $__internal_a448fd74e0ad08986295d889464f1cdbfedc404ba0c4bbe68abd81f1e238b504->leave($__internal_a448fd74e0ad08986295d889464f1cdbfedc404ba0c4bbe68abd81f1e238b504_prof);

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
