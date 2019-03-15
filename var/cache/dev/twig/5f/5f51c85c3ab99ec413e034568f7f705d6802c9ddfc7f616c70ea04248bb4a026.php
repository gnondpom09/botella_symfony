<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_b0cd0f7b2b7e05d1d71da0366149b163412f6fac0b9339fccd3fd1c0566533cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_3bec54c48d23a75848ade6d3f0c41f5f04be4d7a5035a09fdbe56f179c1a1772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bec54c48d23a75848ade6d3f0c41f5f04be4d7a5035a09fdbe56f179c1a1772->enter($__internal_3bec54c48d23a75848ade6d3f0c41f5f04be4d7a5035a09fdbe56f179c1a1772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_2208fc70ff72deb96fbe933c2b6e5e038def173b6802f3bc65b969f6cd965674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2208fc70ff72deb96fbe933c2b6e5e038def173b6802f3bc65b969f6cd965674->enter($__internal_2208fc70ff72deb96fbe933c2b6e5e038def173b6802f3bc65b969f6cd965674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bec54c48d23a75848ade6d3f0c41f5f04be4d7a5035a09fdbe56f179c1a1772->leave($__internal_3bec54c48d23a75848ade6d3f0c41f5f04be4d7a5035a09fdbe56f179c1a1772_prof);

        
        $__internal_2208fc70ff72deb96fbe933c2b6e5e038def173b6802f3bc65b969f6cd965674->leave($__internal_2208fc70ff72deb96fbe933c2b6e5e038def173b6802f3bc65b969f6cd965674_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f9df927bd4adbc858d79c6c546b1f28454c39e3c08a3a246c4952f821565a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9df927bd4adbc858d79c6c546b1f28454c39e3c08a3a246c4952f821565a05->enter($__internal_1f9df927bd4adbc858d79c6c546b1f28454c39e3c08a3a246c4952f821565a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_beb5e3e2aac280f60ecd7fe95dac2aa14bd6ed9b3f3743b5982efb8a8ab4e260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb5e3e2aac280f60ecd7fe95dac2aa14bd6ed9b3f3743b5982efb8a8ab4e260->enter($__internal_beb5e3e2aac280f60ecd7fe95dac2aa14bd6ed9b3f3743b5982efb8a8ab4e260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_beb5e3e2aac280f60ecd7fe95dac2aa14bd6ed9b3f3743b5982efb8a8ab4e260->leave($__internal_beb5e3e2aac280f60ecd7fe95dac2aa14bd6ed9b3f3743b5982efb8a8ab4e260_prof);

        
        $__internal_1f9df927bd4adbc858d79c6c546b1f28454c39e3c08a3a246c4952f821565a05->leave($__internal_1f9df927bd4adbc858d79c6c546b1f28454c39e3c08a3a246c4952f821565a05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
