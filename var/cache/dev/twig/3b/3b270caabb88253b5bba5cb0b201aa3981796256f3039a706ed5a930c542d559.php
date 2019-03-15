<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_95f8f5ac2d04cd417af6e2914a72c13928c9e187b24cd511842739c08a2f5c77 extends Twig_Template
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
        $__internal_b33a771a98388a0bd8d32bbacbd00db05b8f65469e148090929988c5c4996f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33a771a98388a0bd8d32bbacbd00db05b8f65469e148090929988c5c4996f45->enter($__internal_b33a771a98388a0bd8d32bbacbd00db05b8f65469e148090929988c5c4996f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5d50ca653a3437367cf911485bd7baa7d064f4beb0c574b083d03a4b13e37db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d50ca653a3437367cf911485bd7baa7d064f4beb0c574b083d03a4b13e37db9->enter($__internal_5d50ca653a3437367cf911485bd7baa7d064f4beb0c574b083d03a4b13e37db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b33a771a98388a0bd8d32bbacbd00db05b8f65469e148090929988c5c4996f45->leave($__internal_b33a771a98388a0bd8d32bbacbd00db05b8f65469e148090929988c5c4996f45_prof);

        
        $__internal_5d50ca653a3437367cf911485bd7baa7d064f4beb0c574b083d03a4b13e37db9->leave($__internal_5d50ca653a3437367cf911485bd7baa7d064f4beb0c574b083d03a4b13e37db9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
