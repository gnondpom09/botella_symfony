<?php

/* BotellaBundle:blog:contact.html.twig */
class __TwigTemplate_9d5bda4e3131e87cf81ae41053e393e6e3ed8286c209c526c9b2e7ba6283d0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BotellaBundle::layout_page.html.twig", "BotellaBundle:blog:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_489d35eb9a668cef11a5f9f9b85f415fbc035fe1e0af3f738797144ae5fbf6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489d35eb9a668cef11a5f9f9b85f415fbc035fe1e0af3f738797144ae5fbf6af->enter($__internal_489d35eb9a668cef11a5f9f9b85f415fbc035fe1e0af3f738797144ae5fbf6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:contact.html.twig"));

        $__internal_4e23000387df38ea25c110f0700a096dce3f9c748bf163048c74c9ec973e1630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e23000387df38ea25c110f0700a096dce3f9c748bf163048c74c9ec973e1630->enter($__internal_4e23000387df38ea25c110f0700a096dce3f9c748bf163048c74c9ec973e1630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489d35eb9a668cef11a5f9f9b85f415fbc035fe1e0af3f738797144ae5fbf6af->leave($__internal_489d35eb9a668cef11a5f9f9b85f415fbc035fe1e0af3f738797144ae5fbf6af_prof);

        
        $__internal_4e23000387df38ea25c110f0700a096dce3f9c748bf163048c74c9ec973e1630->leave($__internal_4e23000387df38ea25c110f0700a096dce3f9c748bf163048c74c9ec973e1630_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1720158cb1be425c52ecd4ff49aa43810e0cf0ececb0d60366888c3d12ff30ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1720158cb1be425c52ecd4ff49aa43810e0cf0ececb0d60366888c3d12ff30ec->enter($__internal_1720158cb1be425c52ecd4ff49aa43810e0cf0ececb0d60366888c3d12ff30ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e722ae0eaece3bcf6385e183294bae78562d767b2772042cb6f5c6a931758c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e722ae0eaece3bcf6385e183294bae78562d767b2772042cb6f5c6a931758c1->enter($__internal_7e722ae0eaece3bcf6385e183294bae78562d767b2772042cb6f5c6a931758c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7e722ae0eaece3bcf6385e183294bae78562d767b2772042cb6f5c6a931758c1->leave($__internal_7e722ae0eaece3bcf6385e183294bae78562d767b2772042cb6f5c6a931758c1_prof);

        
        $__internal_1720158cb1be425c52ecd4ff49aa43810e0cf0ececb0d60366888c3d12ff30ec->leave($__internal_1720158cb1be425c52ecd4ff49aa43810e0cf0ececb0d60366888c3d12ff30ec_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b6caf227e8fad62f0c62422a4ba444d7281802235b5c0eefe65bc3e03d80cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6caf227e8fad62f0c62422a4ba444d7281802235b5c0eefe65bc3e03d80cde->enter($__internal_1b6caf227e8fad62f0c62422a4ba444d7281802235b5c0eefe65bc3e03d80cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cab2e6c59bb69b68643feffd0727fdcec9eefe6b55bddaa8ed125c1230dfe8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab2e6c59bb69b68643feffd0727fdcec9eefe6b55bddaa8ed125c1230dfe8c0->enter($__internal_cab2e6c59bb69b68643feffd0727fdcec9eefe6b55bddaa8ed125c1230dfe8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<section class=\"cadre row expanded\">
    <style media=\"screen\">
        form {
            width: 50%;
            margin: auto;
            margin-bottom: 20px;
        }
        #contact_save {
            margin-top: 20px;
            width: 100%;
        }
        textarea.form-control {
            height: 50px;
            line-height: 40px;

        }
    </style>
    <h1>Contact</h1>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "input__field input__field--yoko")));
        echo "
        <label class=\"input__label input__label--yoko\" for=\"input-16\">
            <span class=\"input__label-content input__label-content--yoko\">Nom</span>
        </label>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "input__field input__field--yoko")));
        echo "
        <label class=\"input__label input__label--yoko\" for=\"input-16\">
            <span class=\"input__label-content input__label-content--yoko\">Prénom</span>
        </label>
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "input__field input__field--yoko")));
        echo "
        <label class=\"input__label input__label--yoko\" for=\"input-16\">
            <span class=\"input__label-content input__label-content--yoko\">Email</span>
        </label>
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", array()), 'widget', array("attr" => array("class" => "input__field input__field--yoko")));
        echo "
        <label class=\"input__label input__label--yoko\" for=\"input-16\">
            <span class=\"input__label-content input__label-content--yoko\">Sujet</span>
        </label>
        <div class=\"message\" style=\"\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'widget', array("attr" => array("class" => "input__field input__field--yoko")));
        echo "
            <label class=\"input__label input__label--yoko\" for=\"input-16\">
                <span class=\"input__label-content input__label-content--yoko\">Message</span>
            </label>
        </div>


        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("label" => "Envoyer"));
        echo "
    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <form class=\"\" action=\"traitment.php\" method=\"post\">

    </form>

</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>
</div>

";
        
        $__internal_cab2e6c59bb69b68643feffd0727fdcec9eefe6b55bddaa8ed125c1230dfe8c0->leave($__internal_cab2e6c59bb69b68643feffd0727fdcec9eefe6b55bddaa8ed125c1230dfe8c0_prof);

        
        $__internal_1b6caf227e8fad62f0c62422a4ba444d7281802235b5c0eefe65bc3e03d80cde->leave($__internal_1b6caf227e8fad62f0c62422a4ba444d7281802235b5c0eefe65bc3e03d80cde_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 56,  140 => 55,  130 => 48,  122 => 43,  115 => 39,  108 => 35,  101 => 31,  96 => 29,  92 => 28,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 2,);
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
{% extends \"BotellaBundle::layout_page.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}

{% block body %}
<section class=\"cadre row expanded\">
    <style media=\"screen\">
        form {
            width: 50%;
            margin: auto;
            margin-bottom: 20px;
        }
        #contact_save {
            margin-top: 20px;
            width: 100%;
        }
        textarea.form-control {
            height: 50px;
            line-height: 40px;

        }
    </style>
    <h1>Contact</h1>
    {{ form_start(form) }}
        {{ form_errors(form) }}

        {{ form_widget(form.lastname, { 'attr': {'class': 'input__field input__field--yoko'} }) }}
        <label class=\"input__label input__label--yoko\" for=\"input-16\">
            <span class=\"input__label-content input__label-content--yoko\">Nom</span>
        </label>
        {{ form_widget(form.firstname, { 'attr': {'class': 'input__field input__field--yoko'} }) }}
        <label class=\"input__label input__label--yoko\" for=\"input-16\">
            <span class=\"input__label-content input__label-content--yoko\">Prénom</span>
        </label>
        {{ form_widget(form.email, { 'attr': {'class': 'input__field input__field--yoko'} }) }}
        <label class=\"input__label input__label--yoko\" for=\"input-16\">
            <span class=\"input__label-content input__label-content--yoko\">Email</span>
        </label>
        {{ form_widget(form.subject, { 'attr': {'class': 'input__field input__field--yoko'} }) }}
        <label class=\"input__label input__label--yoko\" for=\"input-16\">
            <span class=\"input__label-content input__label-content--yoko\">Sujet</span>
        </label>
        <div class=\"message\" style=\"\">
            {{ form_widget(form.message, { 'attr': {'class': 'input__field input__field--yoko'} }) }}
            <label class=\"input__label input__label--yoko\" for=\"input-16\">
                <span class=\"input__label-content input__label-content--yoko\">Message</span>
            </label>
        </div>


        {{ form_row(form.save, { 'label': 'Envoyer' }) }}
    {{ form_end(form) }}

    <form class=\"\" action=\"traitment.php\" method=\"post\">

    </form>

</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>
</div>

{% endblock %}
", "BotellaBundle:blog:contact.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/contact.html.twig");
    }
}
