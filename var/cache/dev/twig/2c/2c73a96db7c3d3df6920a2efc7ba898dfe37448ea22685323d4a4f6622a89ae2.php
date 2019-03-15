<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_9686a4200268e8228f08a645977c6ab94f42aa617b6e80356a4d3defaa116264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9541d47b690e170a634642ddc92a10576f38d36022ce4bba27e319e0d6bad644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9541d47b690e170a634642ddc92a10576f38d36022ce4bba27e319e0d6bad644->enter($__internal_9541d47b690e170a634642ddc92a10576f38d36022ce4bba27e319e0d6bad644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_578e5e4d1e400582685d2e5bcf70cc0d00652132025784384030d8a8024ad9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578e5e4d1e400582685d2e5bcf70cc0d00652132025784384030d8a8024ad9b2->enter($__internal_578e5e4d1e400582685d2e5bcf70cc0d00652132025784384030d8a8024ad9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9541d47b690e170a634642ddc92a10576f38d36022ce4bba27e319e0d6bad644->leave($__internal_9541d47b690e170a634642ddc92a10576f38d36022ce4bba27e319e0d6bad644_prof);

        
        $__internal_578e5e4d1e400582685d2e5bcf70cc0d00652132025784384030d8a8024ad9b2->leave($__internal_578e5e4d1e400582685d2e5bcf70cc0d00652132025784384030d8a8024ad9b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c076011e8b600df87a54f459b2302abeb93bd637d47df694fac21177691ef5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c076011e8b600df87a54f459b2302abeb93bd637d47df694fac21177691ef5ee->enter($__internal_c076011e8b600df87a54f459b2302abeb93bd637d47df694fac21177691ef5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1857e2fe9c560dea95494893bf907f5efc5953fc8cbf3769da5a43a063f4cd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1857e2fe9c560dea95494893bf907f5efc5953fc8cbf3769da5a43a063f4cd7d->enter($__internal_1857e2fe9c560dea95494893bf907f5efc5953fc8cbf3769da5a43a063f4cd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1857e2fe9c560dea95494893bf907f5efc5953fc8cbf3769da5a43a063f4cd7d->leave($__internal_1857e2fe9c560dea95494893bf907f5efc5953fc8cbf3769da5a43a063f4cd7d_prof);

        
        $__internal_c076011e8b600df87a54f459b2302abeb93bd637d47df694fac21177691ef5ee->leave($__internal_c076011e8b600df87a54f459b2302abeb93bd637d47df694fac21177691ef5ee_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51addb1bf65eb0b4e0678103bd83e1be0fcfccfdac2ca3b78909da316e1407ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51addb1bf65eb0b4e0678103bd83e1be0fcfccfdac2ca3b78909da316e1407ad->enter($__internal_51addb1bf65eb0b4e0678103bd83e1be0fcfccfdac2ca3b78909da316e1407ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e61890c3e90534c44ad9a0c469137adf7390649ce88310ffa477183615adb9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61890c3e90534c44ad9a0c469137adf7390649ce88310ffa477183615adb9ed->enter($__internal_e61890c3e90534c44ad9a0c469137adf7390649ce88310ffa477183615adb9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e61890c3e90534c44ad9a0c469137adf7390649ce88310ffa477183615adb9ed->leave($__internal_e61890c3e90534c44ad9a0c469137adf7390649ce88310ffa477183615adb9ed_prof);

        
        $__internal_51addb1bf65eb0b4e0678103bd83e1be0fcfccfdac2ca3b78909da316e1407ad->leave($__internal_51addb1bf65eb0b4e0678103bd83e1be0fcfccfdac2ca3b78909da316e1407ad_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7edd0c49d9e4338f22d2961a66ec4cb2454292e2ad0506ab8e1d07adfb14a0d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edd0c49d9e4338f22d2961a66ec4cb2454292e2ad0506ab8e1d07adfb14a0d5->enter($__internal_7edd0c49d9e4338f22d2961a66ec4cb2454292e2ad0506ab8e1d07adfb14a0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0b1b4f74b4447a65c13579a530caa026fc7fcb646634ec2c6746471deaded15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b1b4f74b4447a65c13579a530caa026fc7fcb646634ec2c6746471deaded15->enter($__internal_b0b1b4f74b4447a65c13579a530caa026fc7fcb646634ec2c6746471deaded15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b0b1b4f74b4447a65c13579a530caa026fc7fcb646634ec2c6746471deaded15->leave($__internal_b0b1b4f74b4447a65c13579a530caa026fc7fcb646634ec2c6746471deaded15_prof);

        
        $__internal_7edd0c49d9e4338f22d2961a66ec4cb2454292e2ad0506ab8e1d07adfb14a0d5->leave($__internal_7edd0c49d9e4338f22d2961a66ec4cb2454292e2ad0506ab8e1d07adfb14a0d5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
