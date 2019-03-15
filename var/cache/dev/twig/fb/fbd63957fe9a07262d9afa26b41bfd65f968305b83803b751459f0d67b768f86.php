<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6802be08a67c1b9381498d15cbf8ae28ab9b07a813e21c8892bfeb8be0c07296 extends Twig_Template
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
        $__internal_83ec88abee078775c3d0ba9f9afdf6e644ea0b40c21741702563c31c95d33deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ec88abee078775c3d0ba9f9afdf6e644ea0b40c21741702563c31c95d33deb->enter($__internal_83ec88abee078775c3d0ba9f9afdf6e644ea0b40c21741702563c31c95d33deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9d6d1df72ebcea82d067d760ae1022a576250a2504cc608a804ace73d8b30cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6d1df72ebcea82d067d760ae1022a576250a2504cc608a804ace73d8b30cfa->enter($__internal_9d6d1df72ebcea82d067d760ae1022a576250a2504cc608a804ace73d8b30cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_83ec88abee078775c3d0ba9f9afdf6e644ea0b40c21741702563c31c95d33deb->leave($__internal_83ec88abee078775c3d0ba9f9afdf6e644ea0b40c21741702563c31c95d33deb_prof);

        
        $__internal_9d6d1df72ebcea82d067d760ae1022a576250a2504cc608a804ace73d8b30cfa->leave($__internal_9d6d1df72ebcea82d067d760ae1022a576250a2504cc608a804ace73d8b30cfa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
