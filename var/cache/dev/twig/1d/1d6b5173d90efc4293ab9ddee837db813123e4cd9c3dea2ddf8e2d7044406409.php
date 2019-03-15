<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_24e56448187296e7e3554138bf0e199198f874c9fc61a67f1d3113cf3c0276c2 extends Twig_Template
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
        $__internal_49fc227944aa9738a82cb75d8855ee3537e2449ffbd7a1f84c525f95aeb46464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49fc227944aa9738a82cb75d8855ee3537e2449ffbd7a1f84c525f95aeb46464->enter($__internal_49fc227944aa9738a82cb75d8855ee3537e2449ffbd7a1f84c525f95aeb46464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_4bfbc85227d1bfa3d8653a28ccfb650b7686694db997bf47e4c531ba06bbd974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfbc85227d1bfa3d8653a28ccfb650b7686694db997bf47e4c531ba06bbd974->enter($__internal_4bfbc85227d1bfa3d8653a28ccfb650b7686694db997bf47e4c531ba06bbd974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_49fc227944aa9738a82cb75d8855ee3537e2449ffbd7a1f84c525f95aeb46464->leave($__internal_49fc227944aa9738a82cb75d8855ee3537e2449ffbd7a1f84c525f95aeb46464_prof);

        
        $__internal_4bfbc85227d1bfa3d8653a28ccfb650b7686694db997bf47e4c531ba06bbd974->leave($__internal_4bfbc85227d1bfa3d8653a28ccfb650b7686694db997bf47e4c531ba06bbd974_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
