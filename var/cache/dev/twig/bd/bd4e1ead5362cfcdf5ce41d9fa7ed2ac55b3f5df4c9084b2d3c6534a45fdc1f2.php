<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_187aa2b4c8e3becf82f43d4af1b5dba22cdfa7469d4486c1208bf810ea936ba4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_593fb571f3095abea501bd1e8ed494ec9d6d8e4e3fe1d4c40b3bda7c48d7f6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593fb571f3095abea501bd1e8ed494ec9d6d8e4e3fe1d4c40b3bda7c48d7f6f5->enter($__internal_593fb571f3095abea501bd1e8ed494ec9d6d8e4e3fe1d4c40b3bda7c48d7f6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_e4235522cd2a35a39b0aa8d243d83a6717411a22e3736dc5928168a6c25ca3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4235522cd2a35a39b0aa8d243d83a6717411a22e3736dc5928168a6c25ca3c1->enter($__internal_e4235522cd2a35a39b0aa8d243d83a6717411a22e3736dc5928168a6c25ca3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_593fb571f3095abea501bd1e8ed494ec9d6d8e4e3fe1d4c40b3bda7c48d7f6f5->leave($__internal_593fb571f3095abea501bd1e8ed494ec9d6d8e4e3fe1d4c40b3bda7c48d7f6f5_prof);

        
        $__internal_e4235522cd2a35a39b0aa8d243d83a6717411a22e3736dc5928168a6c25ca3c1->leave($__internal_e4235522cd2a35a39b0aa8d243d83a6717411a22e3736dc5928168a6c25ca3c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9fa3f4381e044bb1ecbf673262f25ac0f9dc7acc01a8330fb6ecb664e0c0b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fa3f4381e044bb1ecbf673262f25ac0f9dc7acc01a8330fb6ecb664e0c0b73->enter($__internal_b9fa3f4381e044bb1ecbf673262f25ac0f9dc7acc01a8330fb6ecb664e0c0b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af4f4a59098a38107c8636f642fe4925550bf8c23724ff2850e2027ad10c77d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4f4a59098a38107c8636f642fe4925550bf8c23724ff2850e2027ad10c77d9->enter($__internal_af4f4a59098a38107c8636f642fe4925550bf8c23724ff2850e2027ad10c77d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_af4f4a59098a38107c8636f642fe4925550bf8c23724ff2850e2027ad10c77d9->leave($__internal_af4f4a59098a38107c8636f642fe4925550bf8c23724ff2850e2027ad10c77d9_prof);

        
        $__internal_b9fa3f4381e044bb1ecbf673262f25ac0f9dc7acc01a8330fb6ecb664e0c0b73->leave($__internal_b9fa3f4381e044bb1ecbf673262f25ac0f9dc7acc01a8330fb6ecb664e0c0b73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
