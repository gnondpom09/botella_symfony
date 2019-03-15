<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0b5028468c8a0d6af9dda5933a77cc6d1ad0f7dc7efaeb98c86fab467014b9d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_747fd0c5377b2047c54c987837ee2da8f0a45e1dcff71b4beb792f192d4e3eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747fd0c5377b2047c54c987837ee2da8f0a45e1dcff71b4beb792f192d4e3eaf->enter($__internal_747fd0c5377b2047c54c987837ee2da8f0a45e1dcff71b4beb792f192d4e3eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_6d9569248e4273b284c7b764bb83bdf73863aebd290163bf3dc6a527a28e560f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9569248e4273b284c7b764bb83bdf73863aebd290163bf3dc6a527a28e560f->enter($__internal_6d9569248e4273b284c7b764bb83bdf73863aebd290163bf3dc6a527a28e560f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747fd0c5377b2047c54c987837ee2da8f0a45e1dcff71b4beb792f192d4e3eaf->leave($__internal_747fd0c5377b2047c54c987837ee2da8f0a45e1dcff71b4beb792f192d4e3eaf_prof);

        
        $__internal_6d9569248e4273b284c7b764bb83bdf73863aebd290163bf3dc6a527a28e560f->leave($__internal_6d9569248e4273b284c7b764bb83bdf73863aebd290163bf3dc6a527a28e560f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d1ae0cbb19efa0b0b604078d132360861458e94132585693d0153b14fb6e9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1ae0cbb19efa0b0b604078d132360861458e94132585693d0153b14fb6e9eb->enter($__internal_0d1ae0cbb19efa0b0b604078d132360861458e94132585693d0153b14fb6e9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c32fc2968dd92b7de3e13e4882d0b874cf9273c60e1f54ed4042c3ed32dc2a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32fc2968dd92b7de3e13e4882d0b874cf9273c60e1f54ed4042c3ed32dc2a6d->enter($__internal_c32fc2968dd92b7de3e13e4882d0b874cf9273c60e1f54ed4042c3ed32dc2a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c32fc2968dd92b7de3e13e4882d0b874cf9273c60e1f54ed4042c3ed32dc2a6d->leave($__internal_c32fc2968dd92b7de3e13e4882d0b874cf9273c60e1f54ed4042c3ed32dc2a6d_prof);

        
        $__internal_0d1ae0cbb19efa0b0b604078d132360861458e94132585693d0153b14fb6e9eb->leave($__internal_0d1ae0cbb19efa0b0b604078d132360861458e94132585693d0153b14fb6e9eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
