<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_bd911bbadb5f67c77533d53eb502e8de4133c86e8aa1fed134858c91aaa3f6e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_431c80fb4ff8652194d1776ba0f508d89a69659a59d7450c69117a19b3c72d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431c80fb4ff8652194d1776ba0f508d89a69659a59d7450c69117a19b3c72d95->enter($__internal_431c80fb4ff8652194d1776ba0f508d89a69659a59d7450c69117a19b3c72d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_a51a933859c4c4b1435486a3cf78b69bdd5d8a8fe67f25825dcbc4ee762c7883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51a933859c4c4b1435486a3cf78b69bdd5d8a8fe67f25825dcbc4ee762c7883->enter($__internal_a51a933859c4c4b1435486a3cf78b69bdd5d8a8fe67f25825dcbc4ee762c7883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_431c80fb4ff8652194d1776ba0f508d89a69659a59d7450c69117a19b3c72d95->leave($__internal_431c80fb4ff8652194d1776ba0f508d89a69659a59d7450c69117a19b3c72d95_prof);

        
        $__internal_a51a933859c4c4b1435486a3cf78b69bdd5d8a8fe67f25825dcbc4ee762c7883->leave($__internal_a51a933859c4c4b1435486a3cf78b69bdd5d8a8fe67f25825dcbc4ee762c7883_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
