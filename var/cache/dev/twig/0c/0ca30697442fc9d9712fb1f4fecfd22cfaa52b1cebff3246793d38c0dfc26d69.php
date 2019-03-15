<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1f5dfc6c29e4a91284415f9864f199561d50dba9fb54c166beede1ccf0fa358d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_fbb71cd2de814cb26ae08227c4d80571ae41cb8432a65eed1c77f8a9788cad6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb71cd2de814cb26ae08227c4d80571ae41cb8432a65eed1c77f8a9788cad6b->enter($__internal_fbb71cd2de814cb26ae08227c4d80571ae41cb8432a65eed1c77f8a9788cad6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_e3c3e51d901e9f101eb77ab6ed3bfab091a6836bb4521c8043f659d75464af44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c3e51d901e9f101eb77ab6ed3bfab091a6836bb4521c8043f659d75464af44->enter($__internal_e3c3e51d901e9f101eb77ab6ed3bfab091a6836bb4521c8043f659d75464af44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbb71cd2de814cb26ae08227c4d80571ae41cb8432a65eed1c77f8a9788cad6b->leave($__internal_fbb71cd2de814cb26ae08227c4d80571ae41cb8432a65eed1c77f8a9788cad6b_prof);

        
        $__internal_e3c3e51d901e9f101eb77ab6ed3bfab091a6836bb4521c8043f659d75464af44->leave($__internal_e3c3e51d901e9f101eb77ab6ed3bfab091a6836bb4521c8043f659d75464af44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f4dcb0d85c2648018be2d0e5606c6f73343b528d68f6885d99a5c041f795019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4dcb0d85c2648018be2d0e5606c6f73343b528d68f6885d99a5c041f795019->enter($__internal_6f4dcb0d85c2648018be2d0e5606c6f73343b528d68f6885d99a5c041f795019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5500ee1618f9a5591de6ced8112a85f2f2ce6bee5fcca9bb70263af952a1792a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5500ee1618f9a5591de6ced8112a85f2f2ce6bee5fcca9bb70263af952a1792a->enter($__internal_5500ee1618f9a5591de6ced8112a85f2f2ce6bee5fcca9bb70263af952a1792a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5500ee1618f9a5591de6ced8112a85f2f2ce6bee5fcca9bb70263af952a1792a->leave($__internal_5500ee1618f9a5591de6ced8112a85f2f2ce6bee5fcca9bb70263af952a1792a_prof);

        
        $__internal_6f4dcb0d85c2648018be2d0e5606c6f73343b528d68f6885d99a5c041f795019->leave($__internal_6f4dcb0d85c2648018be2d0e5606c6f73343b528d68f6885d99a5c041f795019_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
