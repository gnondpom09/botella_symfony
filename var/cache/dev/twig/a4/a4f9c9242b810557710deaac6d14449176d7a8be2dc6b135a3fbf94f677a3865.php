<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_81ca8da0b53382229a39f12946346680d45b6377caa3c668c79ea341cee26330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_b2eaba248b5188739ccaa51363e777444ba53a85c5c32e78c40b9deb374ce70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2eaba248b5188739ccaa51363e777444ba53a85c5c32e78c40b9deb374ce70b->enter($__internal_b2eaba248b5188739ccaa51363e777444ba53a85c5c32e78c40b9deb374ce70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_46a492f3c766d444bd288afac58facf218db10293a9294a59bf32acfb6f382ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a492f3c766d444bd288afac58facf218db10293a9294a59bf32acfb6f382ad->enter($__internal_46a492f3c766d444bd288afac58facf218db10293a9294a59bf32acfb6f382ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2eaba248b5188739ccaa51363e777444ba53a85c5c32e78c40b9deb374ce70b->leave($__internal_b2eaba248b5188739ccaa51363e777444ba53a85c5c32e78c40b9deb374ce70b_prof);

        
        $__internal_46a492f3c766d444bd288afac58facf218db10293a9294a59bf32acfb6f382ad->leave($__internal_46a492f3c766d444bd288afac58facf218db10293a9294a59bf32acfb6f382ad_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5fbb09e807171406fa3ea4ac0de989ebb1aee727e6dd55fdf2a432e4ae663b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbb09e807171406fa3ea4ac0de989ebb1aee727e6dd55fdf2a432e4ae663b80->enter($__internal_5fbb09e807171406fa3ea4ac0de989ebb1aee727e6dd55fdf2a432e4ae663b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e62653217d6ccd078ac7d1cc0ec4f8eef047bb3d2daca4026ab158fe87e6841e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62653217d6ccd078ac7d1cc0ec4f8eef047bb3d2daca4026ab158fe87e6841e->enter($__internal_e62653217d6ccd078ac7d1cc0ec4f8eef047bb3d2daca4026ab158fe87e6841e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e62653217d6ccd078ac7d1cc0ec4f8eef047bb3d2daca4026ab158fe87e6841e->leave($__internal_e62653217d6ccd078ac7d1cc0ec4f8eef047bb3d2daca4026ab158fe87e6841e_prof);

        
        $__internal_5fbb09e807171406fa3ea4ac0de989ebb1aee727e6dd55fdf2a432e4ae663b80->leave($__internal_5fbb09e807171406fa3ea4ac0de989ebb1aee727e6dd55fdf2a432e4ae663b80_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
