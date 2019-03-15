<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bd1fc7b3fabd538759b30c9d2c371a08aab40d4c2b76808f84b16773da70163b extends Twig_Template
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
        $__internal_e646ca2cd7feb0093971d8cf142ca5cf329c0c654801e8a621f711d89b708296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e646ca2cd7feb0093971d8cf142ca5cf329c0c654801e8a621f711d89b708296->enter($__internal_e646ca2cd7feb0093971d8cf142ca5cf329c0c654801e8a621f711d89b708296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4b0a93e4f0f8b7b11fce044c9b2510be66e0419a7aa3e8f60c8791d30abeaaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0a93e4f0f8b7b11fce044c9b2510be66e0419a7aa3e8f60c8791d30abeaaad->enter($__internal_4b0a93e4f0f8b7b11fce044c9b2510be66e0419a7aa3e8f60c8791d30abeaaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e646ca2cd7feb0093971d8cf142ca5cf329c0c654801e8a621f711d89b708296->leave($__internal_e646ca2cd7feb0093971d8cf142ca5cf329c0c654801e8a621f711d89b708296_prof);

        
        $__internal_4b0a93e4f0f8b7b11fce044c9b2510be66e0419a7aa3e8f60c8791d30abeaaad->leave($__internal_4b0a93e4f0f8b7b11fce044c9b2510be66e0419a7aa3e8f60c8791d30abeaaad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
