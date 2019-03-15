<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_63428fe07a8535457f5c4ddbe78dfedc888ec2aed5629724fdaa1567a4a8fe7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52e2c5c04ec03e2817519ae388c85a86c4a86be1f5922e5aa33ed7646997c082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e2c5c04ec03e2817519ae388c85a86c4a86be1f5922e5aa33ed7646997c082->enter($__internal_52e2c5c04ec03e2817519ae388c85a86c4a86be1f5922e5aa33ed7646997c082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_10615c8e1d248e0af498fb590547b92e5e4932d9d8b72055ef64a73169c88603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10615c8e1d248e0af498fb590547b92e5e4932d9d8b72055ef64a73169c88603->enter($__internal_10615c8e1d248e0af498fb590547b92e5e4932d9d8b72055ef64a73169c88603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_52e2c5c04ec03e2817519ae388c85a86c4a86be1f5922e5aa33ed7646997c082->leave($__internal_52e2c5c04ec03e2817519ae388c85a86c4a86be1f5922e5aa33ed7646997c082_prof);

        
        $__internal_10615c8e1d248e0af498fb590547b92e5e4932d9d8b72055ef64a73169c88603->leave($__internal_10615c8e1d248e0af498fb590547b92e5e4932d9d8b72055ef64a73169c88603_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
