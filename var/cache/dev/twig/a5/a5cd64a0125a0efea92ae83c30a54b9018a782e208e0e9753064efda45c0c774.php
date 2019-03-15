<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_923e12f13ddb2b4b9ab038d5945350dd0c48a12610aa6a9b95956e3a6613ee90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4efa02aeb23f70bc0c482240d742c09ef3553b9d6d386ad36239bfd4309c4c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efa02aeb23f70bc0c482240d742c09ef3553b9d6d386ad36239bfd4309c4c13->enter($__internal_4efa02aeb23f70bc0c482240d742c09ef3553b9d6d386ad36239bfd4309c4c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_0d96c1bf374d3ae46a2fd7a88bfd967df4bab15199c4cbe8812f3298cda14d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d96c1bf374d3ae46a2fd7a88bfd967df4bab15199c4cbe8812f3298cda14d9a->enter($__internal_0d96c1bf374d3ae46a2fd7a88bfd967df4bab15199c4cbe8812f3298cda14d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4efa02aeb23f70bc0c482240d742c09ef3553b9d6d386ad36239bfd4309c4c13->leave($__internal_4efa02aeb23f70bc0c482240d742c09ef3553b9d6d386ad36239bfd4309c4c13_prof);

        
        $__internal_0d96c1bf374d3ae46a2fd7a88bfd967df4bab15199c4cbe8812f3298cda14d9a->leave($__internal_0d96c1bf374d3ae46a2fd7a88bfd967df4bab15199c4cbe8812f3298cda14d9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c02b5f88ac3f7b7454ba89480ced93ecb7ce0ee298749885ece213521bc967f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c02b5f88ac3f7b7454ba89480ced93ecb7ce0ee298749885ece213521bc967f->enter($__internal_6c02b5f88ac3f7b7454ba89480ced93ecb7ce0ee298749885ece213521bc967f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_274f5898addfc654f3ef7d91c7757fdcdd9d2389211cc34fd8af75a80f78ba31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274f5898addfc654f3ef7d91c7757fdcdd9d2389211cc34fd8af75a80f78ba31->enter($__internal_274f5898addfc654f3ef7d91c7757fdcdd9d2389211cc34fd8af75a80f78ba31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_274f5898addfc654f3ef7d91c7757fdcdd9d2389211cc34fd8af75a80f78ba31->leave($__internal_274f5898addfc654f3ef7d91c7757fdcdd9d2389211cc34fd8af75a80f78ba31_prof);

        
        $__internal_6c02b5f88ac3f7b7454ba89480ced93ecb7ce0ee298749885ece213521bc967f->leave($__internal_6c02b5f88ac3f7b7454ba89480ced93ecb7ce0ee298749885ece213521bc967f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
