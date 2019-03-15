<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_82c7993965fde99ecf69c8097676a5e48ec12b53dae12640ab117480774d056c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5b60205f928680402c39909fbf74af2a4b4c2f0bce385771380d658c803793e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b60205f928680402c39909fbf74af2a4b4c2f0bce385771380d658c803793e5->enter($__internal_5b60205f928680402c39909fbf74af2a4b4c2f0bce385771380d658c803793e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_1344dc3749a2ffb80f013940d43a2866d09dfc3a036198a3bfbbee82dfaeedcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1344dc3749a2ffb80f013940d43a2866d09dfc3a036198a3bfbbee82dfaeedcc->enter($__internal_1344dc3749a2ffb80f013940d43a2866d09dfc3a036198a3bfbbee82dfaeedcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b60205f928680402c39909fbf74af2a4b4c2f0bce385771380d658c803793e5->leave($__internal_5b60205f928680402c39909fbf74af2a4b4c2f0bce385771380d658c803793e5_prof);

        
        $__internal_1344dc3749a2ffb80f013940d43a2866d09dfc3a036198a3bfbbee82dfaeedcc->leave($__internal_1344dc3749a2ffb80f013940d43a2866d09dfc3a036198a3bfbbee82dfaeedcc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94168f7d44c626a55f7272be8afad572614d7207cc32f25997430e4c25dc4965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94168f7d44c626a55f7272be8afad572614d7207cc32f25997430e4c25dc4965->enter($__internal_94168f7d44c626a55f7272be8afad572614d7207cc32f25997430e4c25dc4965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_971d9679f4b17940ac08d17ceee2d055e18ddeb08fa1c49526dec66a358bb917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971d9679f4b17940ac08d17ceee2d055e18ddeb08fa1c49526dec66a358bb917->enter($__internal_971d9679f4b17940ac08d17ceee2d055e18ddeb08fa1c49526dec66a358bb917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_971d9679f4b17940ac08d17ceee2d055e18ddeb08fa1c49526dec66a358bb917->leave($__internal_971d9679f4b17940ac08d17ceee2d055e18ddeb08fa1c49526dec66a358bb917_prof);

        
        $__internal_94168f7d44c626a55f7272be8afad572614d7207cc32f25997430e4c25dc4965->leave($__internal_94168f7d44c626a55f7272be8afad572614d7207cc32f25997430e4c25dc4965_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
