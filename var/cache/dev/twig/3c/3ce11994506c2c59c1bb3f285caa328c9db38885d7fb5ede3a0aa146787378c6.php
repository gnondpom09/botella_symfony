<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d55969e6d0bb87342fcf80815e243d99d37bd5f1a2552cfbeee955bb82ad3dc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16fe835d95c42e12a5eb38d846f40d98c9c71ed14a790fe61eef64cf52cc8408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16fe835d95c42e12a5eb38d846f40d98c9c71ed14a790fe61eef64cf52cc8408->enter($__internal_16fe835d95c42e12a5eb38d846f40d98c9c71ed14a790fe61eef64cf52cc8408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3696e06d66be8df3ad5bc62a4f36fbfe981e02a5f3b1c82e6e5b1c68d1706517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3696e06d66be8df3ad5bc62a4f36fbfe981e02a5f3b1c82e6e5b1c68d1706517->enter($__internal_3696e06d66be8df3ad5bc62a4f36fbfe981e02a5f3b1c82e6e5b1c68d1706517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16fe835d95c42e12a5eb38d846f40d98c9c71ed14a790fe61eef64cf52cc8408->leave($__internal_16fe835d95c42e12a5eb38d846f40d98c9c71ed14a790fe61eef64cf52cc8408_prof);

        
        $__internal_3696e06d66be8df3ad5bc62a4f36fbfe981e02a5f3b1c82e6e5b1c68d1706517->leave($__internal_3696e06d66be8df3ad5bc62a4f36fbfe981e02a5f3b1c82e6e5b1c68d1706517_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10545a92603ecf0bad7cc0d4b2d34a75865ea5302f2a3de4937539253ce37270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10545a92603ecf0bad7cc0d4b2d34a75865ea5302f2a3de4937539253ce37270->enter($__internal_10545a92603ecf0bad7cc0d4b2d34a75865ea5302f2a3de4937539253ce37270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19edaf310fd25021b0ed6a4c26a9c09c3ac7d5e9d77c88f84c1da9e6ca6e9b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19edaf310fd25021b0ed6a4c26a9c09c3ac7d5e9d77c88f84c1da9e6ca6e9b17->enter($__internal_19edaf310fd25021b0ed6a4c26a9c09c3ac7d5e9d77c88f84c1da9e6ca6e9b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_19edaf310fd25021b0ed6a4c26a9c09c3ac7d5e9d77c88f84c1da9e6ca6e9b17->leave($__internal_19edaf310fd25021b0ed6a4c26a9c09c3ac7d5e9d77c88f84c1da9e6ca6e9b17_prof);

        
        $__internal_10545a92603ecf0bad7cc0d4b2d34a75865ea5302f2a3de4937539253ce37270->leave($__internal_10545a92603ecf0bad7cc0d4b2d34a75865ea5302f2a3de4937539253ce37270_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_af36efe4676c83b2473ab4730560c24e48fa1bd81ce9e9e97265eef674549c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af36efe4676c83b2473ab4730560c24e48fa1bd81ce9e9e97265eef674549c21->enter($__internal_af36efe4676c83b2473ab4730560c24e48fa1bd81ce9e9e97265eef674549c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c492e982c46f2101c2440cac09063a69ac7fa5bbe2d60cd16b80a15e8c2d06cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c492e982c46f2101c2440cac09063a69ac7fa5bbe2d60cd16b80a15e8c2d06cd->enter($__internal_c492e982c46f2101c2440cac09063a69ac7fa5bbe2d60cd16b80a15e8c2d06cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c492e982c46f2101c2440cac09063a69ac7fa5bbe2d60cd16b80a15e8c2d06cd->leave($__internal_c492e982c46f2101c2440cac09063a69ac7fa5bbe2d60cd16b80a15e8c2d06cd_prof);

        
        $__internal_af36efe4676c83b2473ab4730560c24e48fa1bd81ce9e9e97265eef674549c21->leave($__internal_af36efe4676c83b2473ab4730560c24e48fa1bd81ce9e9e97265eef674549c21_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
