<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_767552aac3883dcf4295cd4219a1d517f5f0e78308e7e1b6366649ee287a35ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_2baa5bae6d92e36678a6d0a74ce9db9dec966cbdda22fd7a25ac39875ab18e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baa5bae6d92e36678a6d0a74ce9db9dec966cbdda22fd7a25ac39875ab18e74->enter($__internal_2baa5bae6d92e36678a6d0a74ce9db9dec966cbdda22fd7a25ac39875ab18e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_926381e0902c1e4f372736334b60408bcb585f3b1473d4915ab284592950512b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926381e0902c1e4f372736334b60408bcb585f3b1473d4915ab284592950512b->enter($__internal_926381e0902c1e4f372736334b60408bcb585f3b1473d4915ab284592950512b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2baa5bae6d92e36678a6d0a74ce9db9dec966cbdda22fd7a25ac39875ab18e74->leave($__internal_2baa5bae6d92e36678a6d0a74ce9db9dec966cbdda22fd7a25ac39875ab18e74_prof);

        
        $__internal_926381e0902c1e4f372736334b60408bcb585f3b1473d4915ab284592950512b->leave($__internal_926381e0902c1e4f372736334b60408bcb585f3b1473d4915ab284592950512b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae1f9ea4deb6406b1a48e63f6de7a0cef0d9f34944d7b9f03bab383cf2611a8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1f9ea4deb6406b1a48e63f6de7a0cef0d9f34944d7b9f03bab383cf2611a8e->enter($__internal_ae1f9ea4deb6406b1a48e63f6de7a0cef0d9f34944d7b9f03bab383cf2611a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_34b668c077c7b529596f150b301984483ed3e80605e547240662807e61278d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b668c077c7b529596f150b301984483ed3e80605e547240662807e61278d85->enter($__internal_34b668c077c7b529596f150b301984483ed3e80605e547240662807e61278d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_34b668c077c7b529596f150b301984483ed3e80605e547240662807e61278d85->leave($__internal_34b668c077c7b529596f150b301984483ed3e80605e547240662807e61278d85_prof);

        
        $__internal_ae1f9ea4deb6406b1a48e63f6de7a0cef0d9f34944d7b9f03bab383cf2611a8e->leave($__internal_ae1f9ea4deb6406b1a48e63f6de7a0cef0d9f34944d7b9f03bab383cf2611a8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
