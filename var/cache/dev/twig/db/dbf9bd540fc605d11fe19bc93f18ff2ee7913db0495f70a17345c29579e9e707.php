<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_75ad1b9de0138ae115edfb36e3cbfaf7c35d7b692ac8761ef682558cb9f71af6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_e3d86f4ac8b57fecb52be6fe2a6d1e4fc993d75f8a43c0a5f04e93cc1042bf60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d86f4ac8b57fecb52be6fe2a6d1e4fc993d75f8a43c0a5f04e93cc1042bf60->enter($__internal_e3d86f4ac8b57fecb52be6fe2a6d1e4fc993d75f8a43c0a5f04e93cc1042bf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_9581fea9090d23588f234245b9e1793619c8c6dcf70291028e945459977f7e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9581fea9090d23588f234245b9e1793619c8c6dcf70291028e945459977f7e31->enter($__internal_9581fea9090d23588f234245b9e1793619c8c6dcf70291028e945459977f7e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d86f4ac8b57fecb52be6fe2a6d1e4fc993d75f8a43c0a5f04e93cc1042bf60->leave($__internal_e3d86f4ac8b57fecb52be6fe2a6d1e4fc993d75f8a43c0a5f04e93cc1042bf60_prof);

        
        $__internal_9581fea9090d23588f234245b9e1793619c8c6dcf70291028e945459977f7e31->leave($__internal_9581fea9090d23588f234245b9e1793619c8c6dcf70291028e945459977f7e31_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_740d989840f031373474538295b0e76577a90811914b0de486ccf9a657159ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740d989840f031373474538295b0e76577a90811914b0de486ccf9a657159ed3->enter($__internal_740d989840f031373474538295b0e76577a90811914b0de486ccf9a657159ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_45f79e6c2b5b9c8e8b124a7c8047c9ab4184c60b080a974bc53970fafff4abb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f79e6c2b5b9c8e8b124a7c8047c9ab4184c60b080a974bc53970fafff4abb7->enter($__internal_45f79e6c2b5b9c8e8b124a7c8047c9ab4184c60b080a974bc53970fafff4abb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_45f79e6c2b5b9c8e8b124a7c8047c9ab4184c60b080a974bc53970fafff4abb7->leave($__internal_45f79e6c2b5b9c8e8b124a7c8047c9ab4184c60b080a974bc53970fafff4abb7_prof);

        
        $__internal_740d989840f031373474538295b0e76577a90811914b0de486ccf9a657159ed3->leave($__internal_740d989840f031373474538295b0e76577a90811914b0de486ccf9a657159ed3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
