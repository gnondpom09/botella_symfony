<?php

/* BotellaBundle:paintings:list-series.html.twig */
class __TwigTemplate_1834741b4463c5be6c5faa2b6b5de9cb71f70f7112d9118f18887994ec2501d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:paintings:list-series.html.twig", 1);
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
        $__internal_9a5d22390f3593f56387dff4b2d477ee522f2e6a635c1e825ec1212ad7e0f442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5d22390f3593f56387dff4b2d477ee522f2e6a635c1e825ec1212ad7e0f442->enter($__internal_9a5d22390f3593f56387dff4b2d477ee522f2e6a635c1e825ec1212ad7e0f442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:list-series.html.twig"));

        $__internal_cb71a469dca63839a47e984d1dc368940ea995673fa6bfbfe81a2dd4b010e66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb71a469dca63839a47e984d1dc368940ea995673fa6bfbfe81a2dd4b010e66d->enter($__internal_cb71a469dca63839a47e984d1dc368940ea995673fa6bfbfe81a2dd4b010e66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:list-series.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a5d22390f3593f56387dff4b2d477ee522f2e6a635c1e825ec1212ad7e0f442->leave($__internal_9a5d22390f3593f56387dff4b2d477ee522f2e6a635c1e825ec1212ad7e0f442_prof);

        
        $__internal_cb71a469dca63839a47e984d1dc368940ea995673fa6bfbfe81a2dd4b010e66d->leave($__internal_cb71a469dca63839a47e984d1dc368940ea995673fa6bfbfe81a2dd4b010e66d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_44c035c47a8ed4a376d44236548530c24885e914c52baa028cc744a90d0e9cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c035c47a8ed4a376d44236548530c24885e914c52baa028cc744a90d0e9cc7->enter($__internal_44c035c47a8ed4a376d44236548530c24885e914c52baa028cc744a90d0e9cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8859d5a89240ccb30696f26ea1aa90ded2d2736812a3194969cda9d2104760a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8859d5a89240ccb30696f26ea1aa90ded2d2736812a3194969cda9d2104760a->enter($__internal_e8859d5a89240ccb30696f26ea1aa90ded2d2736812a3194969cda9d2104760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e8859d5a89240ccb30696f26ea1aa90ded2d2736812a3194969cda9d2104760a->leave($__internal_e8859d5a89240ccb30696f26ea1aa90ded2d2736812a3194969cda9d2104760a_prof);

        
        $__internal_44c035c47a8ed4a376d44236548530c24885e914c52baa028cc744a90d0e9cc7->leave($__internal_44c035c47a8ed4a376d44236548530c24885e914c52baa028cc744a90d0e9cc7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed44c3fe42edb0cd7b74a07c45ab5707743ac72f7ed4a532f3cca8f6e9ea6a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed44c3fe42edb0cd7b74a07c45ab5707743ac72f7ed4a532f3cca8f6e9ea6a65->enter($__internal_ed44c3fe42edb0cd7b74a07c45ab5707743ac72f7ed4a532f3cca8f6e9ea6a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91b9fdc472d4c6fdeecf698bbcb0736aee11a0248c2c338174ee2648be9ebdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b9fdc472d4c6fdeecf698bbcb0736aee11a0248c2c338174ee2648be9ebdfb->enter($__internal_91b9fdc472d4c6fdeecf698bbcb0736aee11a0248c2c338174ee2648be9ebdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back\">
    <h1>Liste des serie</h1>
    <ul>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSeries"]) ? $context["listSeries"] : $this->getContext($context, "listSeries")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 14
            echo "        <div class=\"well\">
            <div class=\"col-md-6\">
                <li>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
            echo "</li>
            </div>
            <div class=\"col-md-6\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_edit", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
                    <i class=\"glyphicon glyphicon-edit\"></i>
                    Modifier le titre de la série
                </a>
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_delete", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                    <i class=\"glyphicon glyphicon-trash\"></i>
                    Supprimer la série
                </a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
    <div class=\"well\">
        <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_add");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-plus\"></i>
            Ajouter une série
        </a>

    </div>

</article>
</section>
";
        
        $__internal_91b9fdc472d4c6fdeecf698bbcb0736aee11a0248c2c338174ee2648be9ebdfb->leave($__internal_91b9fdc472d4c6fdeecf698bbcb0736aee11a0248c2c338174ee2648be9ebdfb_prof);

        
        $__internal_ed44c3fe42edb0cd7b74a07c45ab5707743ac72f7ed4a532f3cca8f6e9ea6a65->leave($__internal_ed44c3fe42edb0cd7b74a07c45ab5707743ac72f7ed4a532f3cca8f6e9ea6a65_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:paintings:list-series.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  112 => 30,  99 => 23,  92 => 19,  86 => 16,  82 => 14,  78 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
    <h1>Liste des serie</h1>
    <ul>
        {% for serie in listSeries %}
        <div class=\"well\">
            <div class=\"col-md-6\">
                <li>{{ serie.name }}</li>
            </div>
            <div class=\"col-md-6\">
                <a href=\"{{ path('serie_edit', {'id': serie.id}) }}\" class=\"btn btn-default\">
                    <i class=\"glyphicon glyphicon-edit\"></i>
                    Modifier le titre de la série
                </a>
                <a href=\"{{ path('serie_delete', {'id': serie.id}) }}\" class=\"btn btn-danger\">
                    <i class=\"glyphicon glyphicon-trash\"></i>
                    Supprimer la série
                </a>
            </div>
        </div>
        {% endfor %}
    </ul>
    <div class=\"well\">
        <a href=\"{{ path('serie_add') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-plus\"></i>
            Ajouter une série
        </a>

    </div>

</article>
</section>
{% endblock %}
", "BotellaBundle:paintings:list-series.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/list-series.html.twig");
    }
}
