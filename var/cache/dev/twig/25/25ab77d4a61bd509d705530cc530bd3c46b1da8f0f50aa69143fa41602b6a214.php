<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9f20f48ce4eda8961016c33b85820ee58d4bd9bb0356b8dd3acc20dfc746431b extends Twig_Template
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
        $__internal_e152c8a0c6a70bfa5d072da5db8f61c040ed222d51a15df3e9f6fb051eeb1857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e152c8a0c6a70bfa5d072da5db8f61c040ed222d51a15df3e9f6fb051eeb1857->enter($__internal_e152c8a0c6a70bfa5d072da5db8f61c040ed222d51a15df3e9f6fb051eeb1857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2082d565a9ef9777d8620a16547368dff4b31a0ca091fd3b1c1d847d85c34d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2082d565a9ef9777d8620a16547368dff4b31a0ca091fd3b1c1d847d85c34d30->enter($__internal_2082d565a9ef9777d8620a16547368dff4b31a0ca091fd3b1c1d847d85c34d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e152c8a0c6a70bfa5d072da5db8f61c040ed222d51a15df3e9f6fb051eeb1857->leave($__internal_e152c8a0c6a70bfa5d072da5db8f61c040ed222d51a15df3e9f6fb051eeb1857_prof);

        
        $__internal_2082d565a9ef9777d8620a16547368dff4b31a0ca091fd3b1c1d847d85c34d30->leave($__internal_2082d565a9ef9777d8620a16547368dff4b31a0ca091fd3b1c1d847d85c34d30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
