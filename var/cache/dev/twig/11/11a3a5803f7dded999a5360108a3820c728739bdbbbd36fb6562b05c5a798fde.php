<?php

/* BotellaBundle:paintings:delete-painting.html.twig */
class __TwigTemplate_bf4ba1dffa1eae10f92f33d91da527c879720ddae6a39f7704e8303e6985717f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:paintings:delete-painting.html.twig", 1);
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
        $__internal_116e037a2c64fd0967639577382449a1f56be1a2c4d25bfaba93901fda67583d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116e037a2c64fd0967639577382449a1f56be1a2c4d25bfaba93901fda67583d->enter($__internal_116e037a2c64fd0967639577382449a1f56be1a2c4d25bfaba93901fda67583d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:delete-painting.html.twig"));

        $__internal_046613eb034f346e262e06a223df9dab123ca3d6ae1d0a93e0dec6490e4b4df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046613eb034f346e262e06a223df9dab123ca3d6ae1d0a93e0dec6490e4b4df5->enter($__internal_046613eb034f346e262e06a223df9dab123ca3d6ae1d0a93e0dec6490e4b4df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:delete-painting.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_116e037a2c64fd0967639577382449a1f56be1a2c4d25bfaba93901fda67583d->leave($__internal_116e037a2c64fd0967639577382449a1f56be1a2c4d25bfaba93901fda67583d_prof);

        
        $__internal_046613eb034f346e262e06a223df9dab123ca3d6ae1d0a93e0dec6490e4b4df5->leave($__internal_046613eb034f346e262e06a223df9dab123ca3d6ae1d0a93e0dec6490e4b4df5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_38e3f365ca17361d72cb227701af3d2767008aac31682579eeb14c0282d11efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e3f365ca17361d72cb227701af3d2767008aac31682579eeb14c0282d11efa->enter($__internal_38e3f365ca17361d72cb227701af3d2767008aac31682579eeb14c0282d11efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a3d3f703b4447be81ceb47be8ea2446d23e98cc404b34bbe8034b46c60a3452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3d3f703b4447be81ceb47be8ea2446d23e98cc404b34bbe8034b46c60a3452->enter($__internal_4a3d3f703b4447be81ceb47be8ea2446d23e98cc404b34bbe8034b46c60a3452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4a3d3f703b4447be81ceb47be8ea2446d23e98cc404b34bbe8034b46c60a3452->leave($__internal_4a3d3f703b4447be81ceb47be8ea2446d23e98cc404b34bbe8034b46c60a3452_prof);

        
        $__internal_38e3f365ca17361d72cb227701af3d2767008aac31682579eeb14c0282d11efa->leave($__internal_38e3f365ca17361d72cb227701af3d2767008aac31682579eeb14c0282d11efa_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9526500ea0b4368addd38130e941f8f93f0f0591f2b4ee0c986e0c726a328a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9526500ea0b4368addd38130e941f8f93f0f0591f2b4ee0c986e0c726a328a57->enter($__internal_9526500ea0b4368addd38130e941f8f93f0f0591f2b4ee0c986e0c726a328a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8d5a85fccd0619cac91f833d3971fb23d4b9dccfb384ab5a27430c2e60572e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d5a85fccd0619cac91f833d3971fb23d4b9dccfb384ab5a27430c2e60572e3->enter($__internal_b8d5a85fccd0619cac91f833d3971fb23d4b9dccfb384ab5a27430c2e60572e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded\">
    <h3>suppression oeuvre</h3>
    <p>Etes vous certain de vouloir supprimer l'oeuvre ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "title", array()), "html", null, true);
        echo "</p>
    <div class=\"col-md-2\">
        ";
        // line 13
        if ( !(null === $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "image", array()))) {
            // line 14
            echo "        <img
        src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
        alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
        />
        ";
        }
        // line 19
        echo "    </div>
    <div class=\"col-md-10\">
        <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_delete", array("id" => $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_list");
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>
            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_view", array("id" => $this->getAttribute((isset($context["painting"]) ? $context["painting"] : $this->getContext($context, "painting")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour au détail de l'oeuvre
            </a>
            ";
        // line 31
        echo "            <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
            ";
        // line 33
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </div>
</section>

";
        
        $__internal_b8d5a85fccd0619cac91f833d3971fb23d4b9dccfb384ab5a27430c2e60572e3->leave($__internal_b8d5a85fccd0619cac91f833d3971fb23d4b9dccfb384ab5a27430c2e60572e3_prof);

        
        $__internal_9526500ea0b4368addd38130e941f8f93f0f0591f2b4ee0c986e0c726a328a57->leave($__internal_9526500ea0b4368addd38130e941f8f93f0f0591f2b4ee0c986e0c726a328a57_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:paintings:delete-painting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  118 => 31,  111 => 26,  104 => 22,  100 => 21,  96 => 19,  90 => 16,  86 => 15,  83 => 14,  81 => 13,  76 => 11,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
<section class=\"cadre row expanded\">
    <h3>suppression oeuvre</h3>
    <p>Etes vous certain de vouloir supprimer l'oeuvre {{ painting.title }}</p>
    <div class=\"col-md-2\">
        {% if painting.image is not null %}
        <img
        src=\"{{ asset(painting.image.webPath) }}\"
        alt=\"{{ painting.image.alt }}\"
        />
        {% endif %}
    </div>
    <div class=\"col-md-10\">
        <form action=\"{{ path('painting_delete', {'id': painting.id}) }}\" method=\"post\">
            <a href=\"{{ path('painting_list')}}\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste
            </a>
            <a href=\"{{ path('painting_view', {'id': painting.id}) }}\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour au détail de l'oeuvre
            </a>
            {# Ici j'ai écrit le bouton de soumission à la main #}
            <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
            {# Ceci va générer le champ CSRF #}
            {{ form_rest(form) }}
        </form>
    </div>
</section>

{% endblock %}
", "BotellaBundle:paintings:delete-painting.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/delete-painting.html.twig");
    }
}
