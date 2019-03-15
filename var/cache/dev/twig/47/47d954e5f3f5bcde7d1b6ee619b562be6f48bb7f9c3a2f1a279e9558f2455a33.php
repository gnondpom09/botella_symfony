<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_438936b01a3dc4bb975b0e86fdb8f22f3b23a37a8db7710af2615a98eb2a76e5 extends Twig_Template
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
        $__internal_236be01777912ba106841c089811074fdb0457fb9b70ffddbb10d385a06ec201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236be01777912ba106841c089811074fdb0457fb9b70ffddbb10d385a06ec201->enter($__internal_236be01777912ba106841c089811074fdb0457fb9b70ffddbb10d385a06ec201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9bd5eb32ed393758c66117fc547db612dc3c2f85009d67f58cfad9226f1cfe4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd5eb32ed393758c66117fc547db612dc3c2f85009d67f58cfad9226f1cfe4b->enter($__internal_9bd5eb32ed393758c66117fc547db612dc3c2f85009d67f58cfad9226f1cfe4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_236be01777912ba106841c089811074fdb0457fb9b70ffddbb10d385a06ec201->leave($__internal_236be01777912ba106841c089811074fdb0457fb9b70ffddbb10d385a06ec201_prof);

        
        $__internal_9bd5eb32ed393758c66117fc547db612dc3c2f85009d67f58cfad9226f1cfe4b->leave($__internal_9bd5eb32ed393758c66117fc547db612dc3c2f85009d67f58cfad9226f1cfe4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
