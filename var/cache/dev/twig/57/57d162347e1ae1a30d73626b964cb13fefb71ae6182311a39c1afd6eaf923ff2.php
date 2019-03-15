<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1babac52968fb43dd8594519c98a8759092d1726d1bc32e920a1cd63a34dcea8 extends Twig_Template
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
        $__internal_735bd17ab1af40af665ea2c1d49281f32b50d4eee3bc6270e8ebde1dde703bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735bd17ab1af40af665ea2c1d49281f32b50d4eee3bc6270e8ebde1dde703bfa->enter($__internal_735bd17ab1af40af665ea2c1d49281f32b50d4eee3bc6270e8ebde1dde703bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e6435bc709c3756834a6171befd6e5f4fd5c4a9aaa350ef3a2e4652f06d8ca29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6435bc709c3756834a6171befd6e5f4fd5c4a9aaa350ef3a2e4652f06d8ca29->enter($__internal_e6435bc709c3756834a6171befd6e5f4fd5c4a9aaa350ef3a2e4652f06d8ca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_735bd17ab1af40af665ea2c1d49281f32b50d4eee3bc6270e8ebde1dde703bfa->leave($__internal_735bd17ab1af40af665ea2c1d49281f32b50d4eee3bc6270e8ebde1dde703bfa_prof);

        
        $__internal_e6435bc709c3756834a6171befd6e5f4fd5c4a9aaa350ef3a2e4652f06d8ca29->leave($__internal_e6435bc709c3756834a6171befd6e5f4fd5c4a9aaa350ef3a2e4652f06d8ca29_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
