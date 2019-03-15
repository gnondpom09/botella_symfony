<?php

/* BotellaBundle:posts:form.html.twig */
class __TwigTemplate_f61ec58a8143fd82f6c435592ff2f2a742bd778d53c542645d818fde606c8f0e extends Twig_Template
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
        $__internal_3f743e070545d20b69a833336bf1078d0a048db63f9bbcaf374fb986c1a7f3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f743e070545d20b69a833336bf1078d0a048db63f9bbcaf374fb986c1a7f3c3->enter($__internal_3f743e070545d20b69a833336bf1078d0a048db63f9bbcaf374fb986c1a7f3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:form.html.twig"));

        $__internal_a3ca973e11cdbc27b753e84bc3c4c9d0c3faa570c018acebabfaea061fc9568a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ca973e11cdbc27b753e84bc3c4c9d0c3faa570c018acebabfaea061fc9568a->enter($__internal_a3ca973e11cdbc27b753e84bc3c4c9d0c3faa570c018acebabfaea061fc9568a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:form.html.twig"));

        // line 1
        echo "

<div class=\"\">

    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group\">

        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'article"));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">

        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'article"));
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">

        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Auteur"));
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"fom-group\">
        <div class=\"col-sm-12\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-sm-12\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row');
        echo "
        </div>
    </div>

    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

    <div class=\"display-none\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>


    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
";
        
        $__internal_3f743e070545d20b69a833336bf1078d0a048db63f9bbcaf374fb986c1a7f3c3->leave($__internal_3f743e070545d20b69a833336bf1078d0a048db63f9bbcaf374fb986c1a7f3c3_prof);

        
        $__internal_a3ca973e11cdbc27b753e84bc3c4c9d0c3faa570c018acebabfaea061fc9568a->leave($__internal_a3ca973e11cdbc27b753e84bc3c4c9d0c3faa570c018acebabfaea061fc9568a_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:posts:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 55,  119 => 51,  113 => 48,  106 => 44,  98 => 39,  89 => 33,  84 => 31,  80 => 30,  71 => 24,  66 => 22,  62 => 21,  53 => 15,  47 => 12,  43 => 11,  36 => 7,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<div class=\"\">

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    {{ form_errors(form) }}

    <div class=\"form-group\">

        {{ form_label(form.title, \"Titre de l'article\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.title) }}

        <div class=\"col-sm-10\">
            {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    <div class=\"form-group\">

        {{ form_label(form.content, \"Contenu de l'article\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.title) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    <div class=\"form-group\">

        {{ form_label(form.author, \"Auteur\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
        {{ form_errors(form.title) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    <div class=\"fom-group\">
        <div class=\"col-sm-12\">
            {{ form_row(form.image) }}
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-sm-12\">
            {{ form_row(form.categories) }}
        </div>
    </div>

    {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

    <div class=\"display-none\">
        {{ form_rest(form) }}
    </div>


    {{ form_end(form) }}

</div>
", "BotellaBundle:posts:form.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/form.html.twig");
    }
}
