<?php

/* BotellaBundle:paintings:add-serie.html.twig */
class __TwigTemplate_cb5440c6b8f59f64067f1ad7bfa9d23af87494c620f47e7dd588168fa74dc11c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:paintings:add-serie.html.twig", 1);
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
        $__internal_057c1a1aa0cbd59e7ca91d7410d2d59c38056a61bdadf6786617d16d3f87a693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057c1a1aa0cbd59e7ca91d7410d2d59c38056a61bdadf6786617d16d3f87a693->enter($__internal_057c1a1aa0cbd59e7ca91d7410d2d59c38056a61bdadf6786617d16d3f87a693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:add-serie.html.twig"));

        $__internal_7cb1367279a453230195f1eee6f4600dcf50edfddd6ac3c7538054c36657182b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb1367279a453230195f1eee6f4600dcf50edfddd6ac3c7538054c36657182b->enter($__internal_7cb1367279a453230195f1eee6f4600dcf50edfddd6ac3c7538054c36657182b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:add-serie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057c1a1aa0cbd59e7ca91d7410d2d59c38056a61bdadf6786617d16d3f87a693->leave($__internal_057c1a1aa0cbd59e7ca91d7410d2d59c38056a61bdadf6786617d16d3f87a693_prof);

        
        $__internal_7cb1367279a453230195f1eee6f4600dcf50edfddd6ac3c7538054c36657182b->leave($__internal_7cb1367279a453230195f1eee6f4600dcf50edfddd6ac3c7538054c36657182b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9e1badf3760885a38ba9ab2c823767ede657fe310b4d17136ce90a2d5bb1afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e1badf3760885a38ba9ab2c823767ede657fe310b4d17136ce90a2d5bb1afd->enter($__internal_d9e1badf3760885a38ba9ab2c823767ede657fe310b4d17136ce90a2d5bb1afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa0a62a450adbb8b081ff5869ce3f5ac3de9e6c34463422600d37e699814ce2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0a62a450adbb8b081ff5869ce3f5ac3de9e6c34463422600d37e699814ce2a->enter($__internal_aa0a62a450adbb8b081ff5869ce3f5ac3de9e6c34463422600d37e699814ce2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aa0a62a450adbb8b081ff5869ce3f5ac3de9e6c34463422600d37e699814ce2a->leave($__internal_aa0a62a450adbb8b081ff5869ce3f5ac3de9e6c34463422600d37e699814ce2a_prof);

        
        $__internal_d9e1badf3760885a38ba9ab2c823767ede657fe310b4d17136ce90a2d5bb1afd->leave($__internal_d9e1badf3760885a38ba9ab2c823767ede657fe310b4d17136ce90a2d5bb1afd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab5de458cbf63285ae5f402dc3f61e8c675a4a209dd1ac0f65f323c1e48fb4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab5de458cbf63285ae5f402dc3f61e8c675a4a209dd1ac0f65f323c1e48fb4d2->enter($__internal_ab5de458cbf63285ae5f402dc3f61e8c675a4a209dd1ac0f65f323c1e48fb4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49cb1e093bff24cab1ebcd5685e2c28590d89ceba95cc14c901fe100f7921541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cb1e093bff24cab1ebcd5685e2c28590d89ceba95cc14c901fe100f7921541->enter($__internal_49cb1e093bff24cab1ebcd5685e2c28590d89ceba95cc14c901fe100f7921541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back\">
    <h1>Ajouter une serie</h1>
    <div class=\"well\">

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
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de la serie"));
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "

            <div class=\"col-sm-10\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>


        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "


        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>

    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_list");
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la liste
    </a>

</article>
</section>
";
        
        $__internal_49cb1e093bff24cab1ebcd5685e2c28590d89ceba95cc14c901fe100f7921541->leave($__internal_49cb1e093bff24cab1ebcd5685e2c28590d89ceba95cc14c901fe100f7921541_prof);

        
        $__internal_ab5de458cbf63285ae5f402dc3f61e8c675a4a209dd1ac0f65f323c1e48fb4d2->leave($__internal_ab5de458cbf63285ae5f402dc3f61e8c675a4a209dd1ac0f65f323c1e48fb4d2_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:paintings:add-serie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  119 => 33,  115 => 32,  109 => 29,  101 => 24,  95 => 21,  91 => 20,  84 => 16,  79 => 14,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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

<article class=\"content-back\">
    <h1>Ajouter une serie</h1>
    <div class=\"well\">

        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

        {{ form_errors(form) }}


        <div class=\"form-group\">
            {{ form_label(form.name, \"Titre de la serie\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.name) }}

            <div class=\"col-sm-10\">
                {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>


        {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}


        {{ form_rest(form) }}
        {{ form_end(form) }}

    </div>

    <a href=\"{{ path('serie_list')}}\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à la liste
    </a>

</article>
</section>
{% endblock %}
", "BotellaBundle:paintings:add-serie.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/add-serie.html.twig");
    }
}
