<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_4521c73a9b73a08386631c4fc7c738c44c37cdce8552ee94b00425d731e62055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_8012e425923455f68c24d449922e3db3179cd0b045fb2dbbcd0482b922ccdf41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8012e425923455f68c24d449922e3db3179cd0b045fb2dbbcd0482b922ccdf41->enter($__internal_8012e425923455f68c24d449922e3db3179cd0b045fb2dbbcd0482b922ccdf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_30654927786361380727ff35bba8706abb36bcee4f762a13e88e390930bcec60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30654927786361380727ff35bba8706abb36bcee4f762a13e88e390930bcec60->enter($__internal_30654927786361380727ff35bba8706abb36bcee4f762a13e88e390930bcec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8012e425923455f68c24d449922e3db3179cd0b045fb2dbbcd0482b922ccdf41->leave($__internal_8012e425923455f68c24d449922e3db3179cd0b045fb2dbbcd0482b922ccdf41_prof);

        
        $__internal_30654927786361380727ff35bba8706abb36bcee4f762a13e88e390930bcec60->leave($__internal_30654927786361380727ff35bba8706abb36bcee4f762a13e88e390930bcec60_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94417bf69b1d224f3b28cab5ea2e6e3070350a343a9120a64e47ac850aee7621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94417bf69b1d224f3b28cab5ea2e6e3070350a343a9120a64e47ac850aee7621->enter($__internal_94417bf69b1d224f3b28cab5ea2e6e3070350a343a9120a64e47ac850aee7621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dc802a7b3f0ce59c96cfb01b7889001889362be54b856df2bc4f4ecfc51f7c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc802a7b3f0ce59c96cfb01b7889001889362be54b856df2bc4f4ecfc51f7c40->enter($__internal_dc802a7b3f0ce59c96cfb01b7889001889362be54b856df2bc4f4ecfc51f7c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dc802a7b3f0ce59c96cfb01b7889001889362be54b856df2bc4f4ecfc51f7c40->leave($__internal_dc802a7b3f0ce59c96cfb01b7889001889362be54b856df2bc4f4ecfc51f7c40_prof);

        
        $__internal_94417bf69b1d224f3b28cab5ea2e6e3070350a343a9120a64e47ac850aee7621->leave($__internal_94417bf69b1d224f3b28cab5ea2e6e3070350a343a9120a64e47ac850aee7621_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
