<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_d8de0f99e344099204aff626deb5cbc0b82f7106ce08a3ffc6e5461e5316ca23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba738458d3c1a17d188d7ea1e9706b84a792ebbd1e158c887408ce04962b61e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba738458d3c1a17d188d7ea1e9706b84a792ebbd1e158c887408ce04962b61e6->enter($__internal_ba738458d3c1a17d188d7ea1e9706b84a792ebbd1e158c887408ce04962b61e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ea3d34dcbc4951b0fb90b9768a6f727bbdea270c6b088f2cbf8b459037dfbacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3d34dcbc4951b0fb90b9768a6f727bbdea270c6b088f2cbf8b459037dfbacb->enter($__internal_ea3d34dcbc4951b0fb90b9768a6f727bbdea270c6b088f2cbf8b459037dfbacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba738458d3c1a17d188d7ea1e9706b84a792ebbd1e158c887408ce04962b61e6->leave($__internal_ba738458d3c1a17d188d7ea1e9706b84a792ebbd1e158c887408ce04962b61e6_prof);

        
        $__internal_ea3d34dcbc4951b0fb90b9768a6f727bbdea270c6b088f2cbf8b459037dfbacb->leave($__internal_ea3d34dcbc4951b0fb90b9768a6f727bbdea270c6b088f2cbf8b459037dfbacb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93b0900e608ffbec3d828ad1386e824cfac930b79e4aa5bba9d612a6c5b01b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b0900e608ffbec3d828ad1386e824cfac930b79e4aa5bba9d612a6c5b01b90->enter($__internal_93b0900e608ffbec3d828ad1386e824cfac930b79e4aa5bba9d612a6c5b01b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d7021fa29a7f85f736f6e452285676cef13b8513291e717ccb46ec10ccdfcd87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7021fa29a7f85f736f6e452285676cef13b8513291e717ccb46ec10ccdfcd87->enter($__internal_d7021fa29a7f85f736f6e452285676cef13b8513291e717ccb46ec10ccdfcd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d7021fa29a7f85f736f6e452285676cef13b8513291e717ccb46ec10ccdfcd87->leave($__internal_d7021fa29a7f85f736f6e452285676cef13b8513291e717ccb46ec10ccdfcd87_prof);

        
        $__internal_93b0900e608ffbec3d828ad1386e824cfac930b79e4aa5bba9d612a6c5b01b90->leave($__internal_93b0900e608ffbec3d828ad1386e824cfac930b79e4aa5bba9d612a6c5b01b90_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
