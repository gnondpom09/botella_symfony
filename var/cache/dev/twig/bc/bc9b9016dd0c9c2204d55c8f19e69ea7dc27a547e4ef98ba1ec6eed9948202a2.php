<?php

/* BotellaBundle:posts:add.html.twig */
class __TwigTemplate_38894e8507a5b8c25a6d75ef7577157b33e707ef00dca942d1203385d87cb7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:posts:add.html.twig", 1);
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
        $__internal_8e1662a25693265050bc16595920bbdb3688de088d0454a3ccb122cabafe35c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1662a25693265050bc16595920bbdb3688de088d0454a3ccb122cabafe35c1->enter($__internal_8e1662a25693265050bc16595920bbdb3688de088d0454a3ccb122cabafe35c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:add.html.twig"));

        $__internal_8ff6b898ab6263c8054e8b647383a6e9a8de8c52fb652cd29b7a158ce334e92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff6b898ab6263c8054e8b647383a6e9a8de8c52fb652cd29b7a158ce334e92e->enter($__internal_8ff6b898ab6263c8054e8b647383a6e9a8de8c52fb652cd29b7a158ce334e92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e1662a25693265050bc16595920bbdb3688de088d0454a3ccb122cabafe35c1->leave($__internal_8e1662a25693265050bc16595920bbdb3688de088d0454a3ccb122cabafe35c1_prof);

        
        $__internal_8ff6b898ab6263c8054e8b647383a6e9a8de8c52fb652cd29b7a158ce334e92e->leave($__internal_8ff6b898ab6263c8054e8b647383a6e9a8de8c52fb652cd29b7a158ce334e92e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e77abb99f1af10cf9d2a9d15f1641c1874dae801336344f72298d680c2996362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77abb99f1af10cf9d2a9d15f1641c1874dae801336344f72298d680c2996362->enter($__internal_e77abb99f1af10cf9d2a9d15f1641c1874dae801336344f72298d680c2996362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aabb5ce74e8ecd866e7e1eabf83de4de767983b7d89b816cfda6d64713d922ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabb5ce74e8ecd866e7e1eabf83de4de767983b7d89b816cfda6d64713d922ab->enter($__internal_aabb5ce74e8ecd866e7e1eabf83de4de767983b7d89b816cfda6d64713d922ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aabb5ce74e8ecd866e7e1eabf83de4de767983b7d89b816cfda6d64713d922ab->leave($__internal_aabb5ce74e8ecd866e7e1eabf83de4de767983b7d89b816cfda6d64713d922ab_prof);

        
        $__internal_e77abb99f1af10cf9d2a9d15f1641c1874dae801336344f72298d680c2996362->leave($__internal_e77abb99f1af10cf9d2a9d15f1641c1874dae801336344f72298d680c2996362_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e63badc076cb7e6e29d339aef54ca535594160c380287722ea59a8c10e630fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63badc076cb7e6e29d339aef54ca535594160c380287722ea59a8c10e630fb9->enter($__internal_e63badc076cb7e6e29d339aef54ca535594160c380287722ea59a8c10e630fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8323ea50a53de1040b44910f5014049a0f816947542235b7bbf6698b4bf2c841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8323ea50a53de1040b44910f5014049a0f816947542235b7bbf6698b4bf2c841->enter($__internal_8323ea50a53de1040b44910f5014049a0f816947542235b7bbf6698b4bf2c841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <article class=\"content-back cadre\">
        <h1>Ajout article</h1>
        ";
        // line 12
        echo twig_include($this->env, $context, "BotellaBundle:posts:form.html.twig");
        echo "
        <p>Attention cet article sera ajouté directement sur la page d accueil apres validation du formulaire.</p>
    </article>
</section>
";
        
        $__internal_8323ea50a53de1040b44910f5014049a0f816947542235b7bbf6698b4bf2c841->leave($__internal_8323ea50a53de1040b44910f5014049a0f816947542235b7bbf6698b4bf2c841_prof);

        
        $__internal_e63badc076cb7e6e29d339aef54ca535594160c380287722ea59a8c10e630fb9->leave($__internal_e63badc076cb7e6e29d339aef54ca535594160c380287722ea59a8c10e630fb9_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:posts:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
        <h1>Ajout article</h1>
        {{ include('BotellaBundle:posts:form.html.twig') }}
        <p>Attention cet article sera ajouté directement sur la page d accueil apres validation du formulaire.</p>
    </article>
</section>
{% endblock %}
", "BotellaBundle:posts:add.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/add.html.twig");
    }
}
