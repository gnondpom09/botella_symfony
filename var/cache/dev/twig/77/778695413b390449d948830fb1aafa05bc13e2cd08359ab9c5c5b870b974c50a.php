<?php

/* BotellaBundle:paintings:delete-serie.html.twig */
class __TwigTemplate_1c0a4a459cdbd188e80fc94aeab2c6b03eb6f1c2a3ceffb90edf9f5bdfe1b82e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:paintings:delete-serie.html.twig", 1);
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
        $__internal_e75640eed234f3baa69fdf05127ceddb25db6891d4701ab60bd1b695b30a5da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75640eed234f3baa69fdf05127ceddb25db6891d4701ab60bd1b695b30a5da3->enter($__internal_e75640eed234f3baa69fdf05127ceddb25db6891d4701ab60bd1b695b30a5da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:delete-serie.html.twig"));

        $__internal_bd6cce671dec432655f7727581240f247c9e52393fa99a72a2e5a3d38bc3c165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6cce671dec432655f7727581240f247c9e52393fa99a72a2e5a3d38bc3c165->enter($__internal_bd6cce671dec432655f7727581240f247c9e52393fa99a72a2e5a3d38bc3c165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:paintings:delete-serie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e75640eed234f3baa69fdf05127ceddb25db6891d4701ab60bd1b695b30a5da3->leave($__internal_e75640eed234f3baa69fdf05127ceddb25db6891d4701ab60bd1b695b30a5da3_prof);

        
        $__internal_bd6cce671dec432655f7727581240f247c9e52393fa99a72a2e5a3d38bc3c165->leave($__internal_bd6cce671dec432655f7727581240f247c9e52393fa99a72a2e5a3d38bc3c165_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2de0dacebefc73bb278843a72ddcedd7046235daa6b8577738038e1d62bfcdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de0dacebefc73bb278843a72ddcedd7046235daa6b8577738038e1d62bfcdf0->enter($__internal_2de0dacebefc73bb278843a72ddcedd7046235daa6b8577738038e1d62bfcdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8cbc7742cd0e8dddd05c06960a4b42befc68f298c0b0c57dca01bc3d27c4ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8cbc7742cd0e8dddd05c06960a4b42befc68f298c0b0c57dca01bc3d27c4ba1->enter($__internal_e8cbc7742cd0e8dddd05c06960a4b42befc68f298c0b0c57dca01bc3d27c4ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e8cbc7742cd0e8dddd05c06960a4b42befc68f298c0b0c57dca01bc3d27c4ba1->leave($__internal_e8cbc7742cd0e8dddd05c06960a4b42befc68f298c0b0c57dca01bc3d27c4ba1_prof);

        
        $__internal_2de0dacebefc73bb278843a72ddcedd7046235daa6b8577738038e1d62bfcdf0->leave($__internal_2de0dacebefc73bb278843a72ddcedd7046235daa6b8577738038e1d62bfcdf0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c12557101e0c3e2a0a93257ec2ef650b46ffaf2975d502a6ad3b1bd860c19e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12557101e0c3e2a0a93257ec2ef650b46ffaf2975d502a6ad3b1bd860c19e24->enter($__internal_c12557101e0c3e2a0a93257ec2ef650b46ffaf2975d502a6ad3b1bd860c19e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37e61e2555cae6df181c54d73f7b40e8ee1f4cf9306446b0847a384b45696bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e61e2555cae6df181c54d73f7b40e8ee1f4cf9306446b0847a384b45696bd5->enter($__internal_37e61e2555cae6df181c54d73f7b40e8ee1f4cf9306446b0847a384b45696bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded\">
    <h3>suppression serie</h3>

    <div class=\"col-md-12\">
        <p>Etes vous certain de vouloir supprimer la serie ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "name", array()), "html", null, true);
        echo "</p>
        <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_delete", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_list", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : $this->getContext($context, "serie")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste des séries
            </a>
            ";
        // line 20
        echo "            <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
            ";
        // line 22
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </form>
    </div>
</section>

";
        
        $__internal_37e61e2555cae6df181c54d73f7b40e8ee1f4cf9306446b0847a384b45696bd5->leave($__internal_37e61e2555cae6df181c54d73f7b40e8ee1f4cf9306446b0847a384b45696bd5_prof);

        
        $__internal_c12557101e0c3e2a0a93257ec2ef650b46ffaf2975d502a6ad3b1bd860c19e24->leave($__internal_c12557101e0c3e2a0a93257ec2ef650b46ffaf2975d502a6ad3b1bd860c19e24_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:paintings:delete-serie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  93 => 20,  86 => 15,  82 => 14,  78 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
    <h3>suppression serie</h3>

    <div class=\"col-md-12\">
        <p>Etes vous certain de vouloir supprimer la serie {{ serie.name }}</p>
        <form action=\"{{ path('serie_delete', {'id': serie.id}) }}\" method=\"post\">
            <a href=\"{{ path('serie_list', {'id': serie.id}) }}\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-chevron-left\"></i>
                Retour à la liste des séries
            </a>
            {# Ici j'ai écrit le bouton de soumission à la main #}
            <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
            {# Ceci va générer le champ CSRF #}
            {{ form_rest(form) }}
        </form>
    </div>
</section>

{% endblock %}
", "BotellaBundle:paintings:delete-serie.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/delete-serie.html.twig");
    }
}
