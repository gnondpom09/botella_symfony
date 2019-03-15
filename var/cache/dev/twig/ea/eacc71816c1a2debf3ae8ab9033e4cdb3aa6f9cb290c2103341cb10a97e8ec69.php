<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a1d1f09240314e91bf5a919e6d40ba4988f2881619330fecd487b2a6e6eadb20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_72a204fa303e4f04bd9c9618812f17f6a63a68b9cea7b8a85996e7f0e3c19046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a204fa303e4f04bd9c9618812f17f6a63a68b9cea7b8a85996e7f0e3c19046->enter($__internal_72a204fa303e4f04bd9c9618812f17f6a63a68b9cea7b8a85996e7f0e3c19046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_2ed61f4c883a75965c86eebfa8b8bc8f4fc92c75c0b6ef57dc0ee6b6c66cc85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed61f4c883a75965c86eebfa8b8bc8f4fc92c75c0b6ef57dc0ee6b6c66cc85f->enter($__internal_2ed61f4c883a75965c86eebfa8b8bc8f4fc92c75c0b6ef57dc0ee6b6c66cc85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a204fa303e4f04bd9c9618812f17f6a63a68b9cea7b8a85996e7f0e3c19046->leave($__internal_72a204fa303e4f04bd9c9618812f17f6a63a68b9cea7b8a85996e7f0e3c19046_prof);

        
        $__internal_2ed61f4c883a75965c86eebfa8b8bc8f4fc92c75c0b6ef57dc0ee6b6c66cc85f->leave($__internal_2ed61f4c883a75965c86eebfa8b8bc8f4fc92c75c0b6ef57dc0ee6b6c66cc85f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_813ce74982cef5801d732da8bf464c17f436915e45ff3ed19206b54953063cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813ce74982cef5801d732da8bf464c17f436915e45ff3ed19206b54953063cf0->enter($__internal_813ce74982cef5801d732da8bf464c17f436915e45ff3ed19206b54953063cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af7ca8e59908e72b394731de319052e5f804ba50a787cb17878ed1b34516400a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7ca8e59908e72b394731de319052e5f804ba50a787cb17878ed1b34516400a->enter($__internal_af7ca8e59908e72b394731de319052e5f804ba50a787cb17878ed1b34516400a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_af7ca8e59908e72b394731de319052e5f804ba50a787cb17878ed1b34516400a->leave($__internal_af7ca8e59908e72b394731de319052e5f804ba50a787cb17878ed1b34516400a_prof);

        
        $__internal_813ce74982cef5801d732da8bf464c17f436915e45ff3ed19206b54953063cf0->leave($__internal_813ce74982cef5801d732da8bf464c17f436915e45ff3ed19206b54953063cf0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
