<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_be6f5450bdf227f78846ae92299417baac69ae4615caa5d19477ba97dd5d00f0 extends Twig_Template
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
        $__internal_ff3de3949328efaa4b3fad6b881094817956f107d1746c2e74a769cddeccf333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3de3949328efaa4b3fad6b881094817956f107d1746c2e74a769cddeccf333->enter($__internal_ff3de3949328efaa4b3fad6b881094817956f107d1746c2e74a769cddeccf333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_564eda8922fdddec8e661e676f7a374934a4d426de70b8cd3d45be67df6789d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564eda8922fdddec8e661e676f7a374934a4d426de70b8cd3d45be67df6789d0->enter($__internal_564eda8922fdddec8e661e676f7a374934a4d426de70b8cd3d45be67df6789d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ff3de3949328efaa4b3fad6b881094817956f107d1746c2e74a769cddeccf333->leave($__internal_ff3de3949328efaa4b3fad6b881094817956f107d1746c2e74a769cddeccf333_prof);

        
        $__internal_564eda8922fdddec8e661e676f7a374934a4d426de70b8cd3d45be67df6789d0->leave($__internal_564eda8922fdddec8e661e676f7a374934a4d426de70b8cd3d45be67df6789d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
