<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_767332b5e7448cae52fbf524b00644782ea553fd7cbdd506ed3700eb7fe2ce9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767332b5e7448cae52fbf524b00644782ea553fd7cbdd506ed3700eb7fe2ce9b->enter($__internal_767332b5e7448cae52fbf524b00644782ea553fd7cbdd506ed3700eb7fe2ce9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e943a4b24b19f88a28530a8a02488d384fa1bf360f4c72ad39eae0a63757d88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e943a4b24b19f88a28530a8a02488d384fa1bf360f4c72ad39eae0a63757d88a->enter($__internal_e943a4b24b19f88a28530a8a02488d384fa1bf360f4c72ad39eae0a63757d88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767332b5e7448cae52fbf524b00644782ea553fd7cbdd506ed3700eb7fe2ce9b->leave($__internal_767332b5e7448cae52fbf524b00644782ea553fd7cbdd506ed3700eb7fe2ce9b_prof);

        
        $__internal_e943a4b24b19f88a28530a8a02488d384fa1bf360f4c72ad39eae0a63757d88a->leave($__internal_e943a4b24b19f88a28530a8a02488d384fa1bf360f4c72ad39eae0a63757d88a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c12979c969e306018c1c79f16e074f6b3b66e86428d9b47208a90c5b878f79f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12979c969e306018c1c79f16e074f6b3b66e86428d9b47208a90c5b878f79f3->enter($__internal_c12979c969e306018c1c79f16e074f6b3b66e86428d9b47208a90c5b878f79f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0995d13607126aeb02071bb87b585d2a6aa9c8cc31a20afab95ec2c015f27ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0995d13607126aeb02071bb87b585d2a6aa9c8cc31a20afab95ec2c015f27ce7->enter($__internal_0995d13607126aeb02071bb87b585d2a6aa9c8cc31a20afab95ec2c015f27ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0995d13607126aeb02071bb87b585d2a6aa9c8cc31a20afab95ec2c015f27ce7->leave($__internal_0995d13607126aeb02071bb87b585d2a6aa9c8cc31a20afab95ec2c015f27ce7_prof);

        
        $__internal_c12979c969e306018c1c79f16e074f6b3b66e86428d9b47208a90c5b878f79f3->leave($__internal_c12979c969e306018c1c79f16e074f6b3b66e86428d9b47208a90c5b878f79f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9ccdb08a61a7003b6a429a04cab578566b069ac62b980b3284029e914b8be9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ccdb08a61a7003b6a429a04cab578566b069ac62b980b3284029e914b8be9b->enter($__internal_a9ccdb08a61a7003b6a429a04cab578566b069ac62b980b3284029e914b8be9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9141e190d1420332bf0cfd2c9acdd7915d08e9c2305ddfaf0ed631970deec058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9141e190d1420332bf0cfd2c9acdd7915d08e9c2305ddfaf0ed631970deec058->enter($__internal_9141e190d1420332bf0cfd2c9acdd7915d08e9c2305ddfaf0ed631970deec058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9141e190d1420332bf0cfd2c9acdd7915d08e9c2305ddfaf0ed631970deec058->leave($__internal_9141e190d1420332bf0cfd2c9acdd7915d08e9c2305ddfaf0ed631970deec058_prof);

        
        $__internal_a9ccdb08a61a7003b6a429a04cab578566b069ac62b980b3284029e914b8be9b->leave($__internal_a9ccdb08a61a7003b6a429a04cab578566b069ac62b980b3284029e914b8be9b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c8db81780e7c41a8cdb2437ff6295393519156af00d86d1dca98906f4847e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8db81780e7c41a8cdb2437ff6295393519156af00d86d1dca98906f4847e4b->enter($__internal_6c8db81780e7c41a8cdb2437ff6295393519156af00d86d1dca98906f4847e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d93297e4fe6e910fc6aed3d3b39b19b091240539c24b643d50486b85977b80b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93297e4fe6e910fc6aed3d3b39b19b091240539c24b643d50486b85977b80b0->enter($__internal_d93297e4fe6e910fc6aed3d3b39b19b091240539c24b643d50486b85977b80b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d93297e4fe6e910fc6aed3d3b39b19b091240539c24b643d50486b85977b80b0->leave($__internal_d93297e4fe6e910fc6aed3d3b39b19b091240539c24b643d50486b85977b80b0_prof);

        
        $__internal_6c8db81780e7c41a8cdb2437ff6295393519156af00d86d1dca98906f4847e4b->leave($__internal_6c8db81780e7c41a8cdb2437ff6295393519156af00d86d1dca98906f4847e4b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
