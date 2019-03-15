<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f7a994cb7ae0ac904ffa045d23c30d3c82602fd72d94f480348f5e5fc3e32883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5335363b81ee2e9868f266f7699e7e95dcad6cf1aff8d9778083aed4a3da82b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5335363b81ee2e9868f266f7699e7e95dcad6cf1aff8d9778083aed4a3da82b3->enter($__internal_5335363b81ee2e9868f266f7699e7e95dcad6cf1aff8d9778083aed4a3da82b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_19c85030736e6d772662f5aaf851d55dcba19bd1df17a462bc21894b38df6ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c85030736e6d772662f5aaf851d55dcba19bd1df17a462bc21894b38df6ef2->enter($__internal_19c85030736e6d772662f5aaf851d55dcba19bd1df17a462bc21894b38df6ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5335363b81ee2e9868f266f7699e7e95dcad6cf1aff8d9778083aed4a3da82b3->leave($__internal_5335363b81ee2e9868f266f7699e7e95dcad6cf1aff8d9778083aed4a3da82b3_prof);

        
        $__internal_19c85030736e6d772662f5aaf851d55dcba19bd1df17a462bc21894b38df6ef2->leave($__internal_19c85030736e6d772662f5aaf851d55dcba19bd1df17a462bc21894b38df6ef2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_234c103d38c354bd9f7a9117aa5f6ede40baf1bff0e63946b6ffc4bd44951aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234c103d38c354bd9f7a9117aa5f6ede40baf1bff0e63946b6ffc4bd44951aec->enter($__internal_234c103d38c354bd9f7a9117aa5f6ede40baf1bff0e63946b6ffc4bd44951aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_980c301d5c20057f3e2fe361414a379449c86f4520e4c52d7b93374046468868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980c301d5c20057f3e2fe361414a379449c86f4520e4c52d7b93374046468868->enter($__internal_980c301d5c20057f3e2fe361414a379449c86f4520e4c52d7b93374046468868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_980c301d5c20057f3e2fe361414a379449c86f4520e4c52d7b93374046468868->leave($__internal_980c301d5c20057f3e2fe361414a379449c86f4520e4c52d7b93374046468868_prof);

        
        $__internal_234c103d38c354bd9f7a9117aa5f6ede40baf1bff0e63946b6ffc4bd44951aec->leave($__internal_234c103d38c354bd9f7a9117aa5f6ede40baf1bff0e63946b6ffc4bd44951aec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
