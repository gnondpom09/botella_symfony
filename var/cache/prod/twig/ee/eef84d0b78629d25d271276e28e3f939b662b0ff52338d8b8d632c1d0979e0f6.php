<?php

/* BotellaBundle:paintings:list-series.html.twig */
class __TwigTemplate_59b61ecba1cd94afe677e0fd780c199f75b4974079a5b351b616fce8eedff009 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"content-back\">
    <h1>Liste des serie</h1>
    <ul>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSeries"]) ? $context["listSeries"] : null));
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
        return array (  86 => 32,  82 => 30,  69 => 23,  62 => 19,  56 => 16,  52 => 14,  48 => 13,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:paintings:list-series.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/list-series.html.twig");
    }
}
