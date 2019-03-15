<?php

/* BotellaBundle:movies:add-movie.html.twig */
class __TwigTemplate_cc6fc2d797e75b8d1a22b69843ee4f71b94030669dab87fe59bcb44c8dbe62fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:movies:add-movie.html.twig", 1);
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
        $__internal_f4e7de84092c6987d4ec31cdc99cba58c330c8cc3674cffa90492da537620511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e7de84092c6987d4ec31cdc99cba58c330c8cc3674cffa90492da537620511->enter($__internal_f4e7de84092c6987d4ec31cdc99cba58c330c8cc3674cffa90492da537620511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:movies:add-movie.html.twig"));

        $__internal_1d8697f3f5bc68f58c94bbc0a70fe381807e0e5bc64065a57bbad33545c36a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8697f3f5bc68f58c94bbc0a70fe381807e0e5bc64065a57bbad33545c36a6c->enter($__internal_1d8697f3f5bc68f58c94bbc0a70fe381807e0e5bc64065a57bbad33545c36a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:movies:add-movie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4e7de84092c6987d4ec31cdc99cba58c330c8cc3674cffa90492da537620511->leave($__internal_f4e7de84092c6987d4ec31cdc99cba58c330c8cc3674cffa90492da537620511_prof);

        
        $__internal_1d8697f3f5bc68f58c94bbc0a70fe381807e0e5bc64065a57bbad33545c36a6c->leave($__internal_1d8697f3f5bc68f58c94bbc0a70fe381807e0e5bc64065a57bbad33545c36a6c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7597e620a6b5ada2ea4989eed4efb5fc65a52665e7242ae910041c95d4fac722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7597e620a6b5ada2ea4989eed4efb5fc65a52665e7242ae910041c95d4fac722->enter($__internal_7597e620a6b5ada2ea4989eed4efb5fc65a52665e7242ae910041c95d4fac722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_454922009b60069b6642233d5a2d73b87ff8d65520b1498818a1993e02a98d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454922009b60069b6642233d5a2d73b87ff8d65520b1498818a1993e02a98d11->enter($__internal_454922009b60069b6642233d5a2d73b87ff8d65520b1498818a1993e02a98d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_454922009b60069b6642233d5a2d73b87ff8d65520b1498818a1993e02a98d11->leave($__internal_454922009b60069b6642233d5a2d73b87ff8d65520b1498818a1993e02a98d11_prof);

        
        $__internal_7597e620a6b5ada2ea4989eed4efb5fc65a52665e7242ae910041c95d4fac722->leave($__internal_7597e620a6b5ada2ea4989eed4efb5fc65a52665e7242ae910041c95d4fac722_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f72d55cc59359408fb818d4f61ec2c43b78a02c7cf888eacab59215e41b8ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f72d55cc59359408fb818d4f61ec2c43b78a02c7cf888eacab59215e41b8ea7->enter($__internal_6f72d55cc59359408fb818d4f61ec2c43b78a02c7cf888eacab59215e41b8ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4fdf86eeb31c45d16645dd0518070483e88646e8688f5697366958f11226f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fdf86eeb31c45d16645dd0518070483e88646e8688f5697366958f11226f8c->enter($__internal_e4fdf86eeb31c45d16645dd0518070483e88646e8688f5697366958f11226f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back cadre\">
    <h1>Ajouter une video</h1>


    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de la video"));
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "legend", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Légende"));
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "legend", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu"));
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Url"));
        echo "
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    </div>


    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



    <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_movies");
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la liste
    </a>
</article>
</section>
";
        
        $__internal_e4fdf86eeb31c45d16645dd0518070483e88646e8688f5697366958f11226f8c->leave($__internal_e4fdf86eeb31c45d16645dd0518070483e88646e8688f5697366958f11226f8c_prof);

        
        $__internal_6f72d55cc59359408fb818d4f61ec2c43b78a02c7cf888eacab59215e41b8ea7->leave($__internal_6f72d55cc59359408fb818d4f61ec2c43b78a02c7cf888eacab59215e41b8ea7_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:movies:add-movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 60,  169 => 56,  165 => 55,  158 => 51,  150 => 46,  145 => 44,  141 => 43,  133 => 38,  128 => 36,  124 => 35,  116 => 30,  111 => 28,  107 => 27,  99 => 22,  94 => 20,  90 => 19,  84 => 16,  79 => 14,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
    <h1>Ajouter une video</h1>


    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    {{ form_errors(form) }}

    <div class=\"form-group\">
        {{ form_label(form.title, \"Titre de la video\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.title) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.legend, \"Légende\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.title) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.legend, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.content, \"Contenu\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.title) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.url, \"Url\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.title) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.url, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
    </div>


    {{ form_rest(form) }}
    {{ form_end(form) }}



    <a href=\"{{ path('list_movies')}}\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la liste
    </a>
</article>
</section>
{% endblock %}
", "BotellaBundle:movies:add-movie.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/movies/add-movie.html.twig");
    }
}
