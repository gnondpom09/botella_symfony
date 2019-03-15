<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8bd0757cf4afe44e6e46239db1cedc365d0f275bd26d0ce2abe03d08077f1d2b extends Twig_Template
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
        $__internal_0871005310e08d7fa5cee83126fc2c056588497471d9660be30bd50fe1c613ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0871005310e08d7fa5cee83126fc2c056588497471d9660be30bd50fe1c613ce->enter($__internal_0871005310e08d7fa5cee83126fc2c056588497471d9660be30bd50fe1c613ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_7b3da54d88044dcc1821ed64ebb6fb2d1c1ee7b4a15c87faac3f418e03768cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3da54d88044dcc1821ed64ebb6fb2d1c1ee7b4a15c87faac3f418e03768cb7->enter($__internal_7b3da54d88044dcc1821ed64ebb6fb2d1c1ee7b4a15c87faac3f418e03768cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0871005310e08d7fa5cee83126fc2c056588497471d9660be30bd50fe1c613ce->leave($__internal_0871005310e08d7fa5cee83126fc2c056588497471d9660be30bd50fe1c613ce_prof);

        
        $__internal_7b3da54d88044dcc1821ed64ebb6fb2d1c1ee7b4a15c87faac3f418e03768cb7->leave($__internal_7b3da54d88044dcc1821ed64ebb6fb2d1c1ee7b4a15c87faac3f418e03768cb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
