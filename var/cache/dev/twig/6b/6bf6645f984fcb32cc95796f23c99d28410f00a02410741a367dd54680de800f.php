<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0daaa3d5cfd073d06a3840dd526eb53dc2929fac357308915d14d50f05ae0819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36a0809ab24db0853f4e8ed7aaef593145e75430ce5564849c60e8da3d85ee6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a0809ab24db0853f4e8ed7aaef593145e75430ce5564849c60e8da3d85ee6b->enter($__internal_36a0809ab24db0853f4e8ed7aaef593145e75430ce5564849c60e8da3d85ee6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3270d484a9e5a9034f4988b1049e8504bc019cb4e08026f925719415bfdb6a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3270d484a9e5a9034f4988b1049e8504bc019cb4e08026f925719415bfdb6a57->enter($__internal_3270d484a9e5a9034f4988b1049e8504bc019cb4e08026f925719415bfdb6a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36a0809ab24db0853f4e8ed7aaef593145e75430ce5564849c60e8da3d85ee6b->leave($__internal_36a0809ab24db0853f4e8ed7aaef593145e75430ce5564849c60e8da3d85ee6b_prof);

        
        $__internal_3270d484a9e5a9034f4988b1049e8504bc019cb4e08026f925719415bfdb6a57->leave($__internal_3270d484a9e5a9034f4988b1049e8504bc019cb4e08026f925719415bfdb6a57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ccb462e28547fc84b4fa07337034b2a99f1c594ff616352962faeee1dfa38ebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb462e28547fc84b4fa07337034b2a99f1c594ff616352962faeee1dfa38ebb->enter($__internal_ccb462e28547fc84b4fa07337034b2a99f1c594ff616352962faeee1dfa38ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1e15a8932e0555ddb6ad65ba3999f229c27a4c745bd694a402330c175533d74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e15a8932e0555ddb6ad65ba3999f229c27a4c745bd694a402330c175533d74d->enter($__internal_1e15a8932e0555ddb6ad65ba3999f229c27a4c745bd694a402330c175533d74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1e15a8932e0555ddb6ad65ba3999f229c27a4c745bd694a402330c175533d74d->leave($__internal_1e15a8932e0555ddb6ad65ba3999f229c27a4c745bd694a402330c175533d74d_prof);

        
        $__internal_ccb462e28547fc84b4fa07337034b2a99f1c594ff616352962faeee1dfa38ebb->leave($__internal_ccb462e28547fc84b4fa07337034b2a99f1c594ff616352962faeee1dfa38ebb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eaf1c8c77c925f0a9ff25bc5fb5fde5ad114d8af3fb7ba80030145f176dd69b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf1c8c77c925f0a9ff25bc5fb5fde5ad114d8af3fb7ba80030145f176dd69b9->enter($__internal_eaf1c8c77c925f0a9ff25bc5fb5fde5ad114d8af3fb7ba80030145f176dd69b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c1d1ec701747049eb1ef1a00beb2103b06af50c797c4979018fc4b2bbbb29c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d1ec701747049eb1ef1a00beb2103b06af50c797c4979018fc4b2bbbb29c06->enter($__internal_c1d1ec701747049eb1ef1a00beb2103b06af50c797c4979018fc4b2bbbb29c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c1d1ec701747049eb1ef1a00beb2103b06af50c797c4979018fc4b2bbbb29c06->leave($__internal_c1d1ec701747049eb1ef1a00beb2103b06af50c797c4979018fc4b2bbbb29c06_prof);

        
        $__internal_eaf1c8c77c925f0a9ff25bc5fb5fde5ad114d8af3fb7ba80030145f176dd69b9->leave($__internal_eaf1c8c77c925f0a9ff25bc5fb5fde5ad114d8af3fb7ba80030145f176dd69b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24dd771c26156b4e7039aa2b954b9c7a8bffd23736f1a4ebcba1504f90a56308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24dd771c26156b4e7039aa2b954b9c7a8bffd23736f1a4ebcba1504f90a56308->enter($__internal_24dd771c26156b4e7039aa2b954b9c7a8bffd23736f1a4ebcba1504f90a56308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d758e2b7f3e8bf974c0ced80dc5abc5820dae36431465334d1c6ee61b9ac6c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d758e2b7f3e8bf974c0ced80dc5abc5820dae36431465334d1c6ee61b9ac6c9a->enter($__internal_d758e2b7f3e8bf974c0ced80dc5abc5820dae36431465334d1c6ee61b9ac6c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d758e2b7f3e8bf974c0ced80dc5abc5820dae36431465334d1c6ee61b9ac6c9a->leave($__internal_d758e2b7f3e8bf974c0ced80dc5abc5820dae36431465334d1c6ee61b9ac6c9a_prof);

        
        $__internal_24dd771c26156b4e7039aa2b954b9c7a8bffd23736f1a4ebcba1504f90a56308->leave($__internal_24dd771c26156b4e7039aa2b954b9c7a8bffd23736f1a4ebcba1504f90a56308_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
