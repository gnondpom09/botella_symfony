<?php

/* BotellaBundle:paintings:delete-serie.html.twig */
class __TwigTemplate_3a76e3034396986a22f50be3fc7237dc6fc279c26e720fc375526b14a7cdf1c7 extends Twig_Template
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
        echo "<section class=\"cadre row expanded\">
    <h3>suppression serie</h3>

    <div class=\"col-md-12\">
        <p>Etes vous certain de vouloir supprimer la serie ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "name", array()), "html", null, true);
        echo "</p>
        <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_delete", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_list", array("id" => $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "id", array()))), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </form>
    </div>
</section>

";
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
        return array (  66 => 22,  63 => 20,  56 => 15,  52 => 14,  48 => 13,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:paintings:delete-serie.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/delete-serie.html.twig");
    }
}
