<?php

/* BotellaBundle:paintings:add-painting.html.twig */
class __TwigTemplate_a2a7e6f6f377a30ddb03f42d7b73b7e46e1f2fa2142d295c3bb68406e544a398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:paintings:add-painting.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ed7b5b74d5250f60400208640d86650a0bc1c84f645c0e0fb4c348dd7c98e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed7b5b74d5250f60400208640d86650a0bc1c84f645c0e0fb4c348dd7c98e30->enter($__internal_8ed7b5b74d5250f60400208640d86650a0bc1c84f645c0e0fb4c348dd7c98e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:add-painting.html.twig"));

        $__internal_243f0807de555008cb34a18a8c9b25e144956ac995b8fef66370eab806b52c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243f0807de555008cb34a18a8c9b25e144956ac995b8fef66370eab806b52c44->enter($__internal_243f0807de555008cb34a18a8c9b25e144956ac995b8fef66370eab806b52c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:add-painting.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ed7b5b74d5250f60400208640d86650a0bc1c84f645c0e0fb4c348dd7c98e30->leave($__internal_8ed7b5b74d5250f60400208640d86650a0bc1c84f645c0e0fb4c348dd7c98e30_prof);

        
        $__internal_243f0807de555008cb34a18a8c9b25e144956ac995b8fef66370eab806b52c44->leave($__internal_243f0807de555008cb34a18a8c9b25e144956ac995b8fef66370eab806b52c44_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f7207a79ea3c37b9194a777d8500533d8e38f689792ebd909411c3ebbb92433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7207a79ea3c37b9194a777d8500533d8e38f689792ebd909411c3ebbb92433->enter($__internal_3f7207a79ea3c37b9194a777d8500533d8e38f689792ebd909411c3ebbb92433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e712ecdaebf450b07de9969e9578d6134bec5925de3b3c8058f7eab922910194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e712ecdaebf450b07de9969e9578d6134bec5925de3b3c8058f7eab922910194->enter($__internal_e712ecdaebf450b07de9969e9578d6134bec5925de3b3c8058f7eab922910194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e712ecdaebf450b07de9969e9578d6134bec5925de3b3c8058f7eab922910194->leave($__internal_e712ecdaebf450b07de9969e9578d6134bec5925de3b3c8058f7eab922910194_prof);

        
        $__internal_3f7207a79ea3c37b9194a777d8500533d8e38f689792ebd909411c3ebbb92433->leave($__internal_3f7207a79ea3c37b9194a777d8500533d8e38f689792ebd909411c3ebbb92433_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfc8378cafbc1ae776cc579de219efc87c7c7f7e9c8aa9680ad16e943123c15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc8378cafbc1ae776cc579de219efc87c7c7f7e9c8aa9680ad16e943123c15c->enter($__internal_dfc8378cafbc1ae776cc579de219efc87c7c7f7e9c8aa9680ad16e943123c15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e77341c387f5e5cd541de733e8e2740c290404d1ce5b1ed205e9c8ed6d1a6445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77341c387f5e5cd541de733e8e2740c290404d1ce5b1ed205e9c8ed6d1a6445->enter($__internal_e77341c387f5e5cd541de733e8e2740c290404d1ce5b1ed205e9c8ed6d1a6445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back cadre\">
    <h1>Ajouter une oeuvre</h1>


    ";
        // line 14
        echo twig_include($this->env, $context, "BotellaBundle:paintings:form-painting.html.twig");
        echo "


    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_list");
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la liste
    </a>
</article>
</section>
";
        
        $__internal_e77341c387f5e5cd541de733e8e2740c290404d1ce5b1ed205e9c8ed6d1a6445->leave($__internal_e77341c387f5e5cd541de733e8e2740c290404d1ce5b1ed205e9c8ed6d1a6445_prof);

        
        $__internal_dfc8378cafbc1ae776cc579de219efc87c7c7f7e9c8aa9680ad16e943123c15c->leave($__internal_dfc8378cafbc1ae776cc579de219efc87c7c7f7e9c8aa9680ad16e943123c15c_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:paintings:add-painting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  79 => 14,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BotellaBundle::layout_back.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}

{% block body %}

<article class=\"content-back cadre\">
    <h1>Ajouter une oeuvre</h1>


    {{ include(\"BotellaBundle:paintings:form-painting.html.twig\") }}


    <a href=\"{{ path('painting_list')}}\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la liste
    </a>
</article>
</section>
{% endblock %}
", "BotellaBundle:paintings:add-painting.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/add-painting.html.twig");
    }
}
