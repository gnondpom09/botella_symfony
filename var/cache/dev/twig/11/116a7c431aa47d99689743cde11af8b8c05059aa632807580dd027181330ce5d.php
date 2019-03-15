<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ec060f0c4a7de30cd6d80af9ff400491d9bc25f588142eaa55885b230cdf325b extends Twig_Template
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
        $__internal_f4b4ffa2e145179aad35a42b54cf8a02990a8442a8aeacb5f08b4ee9303019f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b4ffa2e145179aad35a42b54cf8a02990a8442a8aeacb5f08b4ee9303019f2->enter($__internal_f4b4ffa2e145179aad35a42b54cf8a02990a8442a8aeacb5f08b4ee9303019f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_81afdf8f4d5b8e85a645c284fcf7d74a78d8b1fa4b4c94f7a1858d1474ed2be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81afdf8f4d5b8e85a645c284fcf7d74a78d8b1fa4b4c94f7a1858d1474ed2be4->enter($__internal_81afdf8f4d5b8e85a645c284fcf7d74a78d8b1fa4b4c94f7a1858d1474ed2be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f4b4ffa2e145179aad35a42b54cf8a02990a8442a8aeacb5f08b4ee9303019f2->leave($__internal_f4b4ffa2e145179aad35a42b54cf8a02990a8442a8aeacb5f08b4ee9303019f2_prof);

        
        $__internal_81afdf8f4d5b8e85a645c284fcf7d74a78d8b1fa4b4c94f7a1858d1474ed2be4->leave($__internal_81afdf8f4d5b8e85a645c284fcf7d74a78d8b1fa4b4c94f7a1858d1474ed2be4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
