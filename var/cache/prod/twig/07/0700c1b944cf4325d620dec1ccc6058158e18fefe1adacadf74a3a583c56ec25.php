<?php

/* BotellaBundle:blog:bio.html.twig */
class __TwigTemplate_9b708c654691253dee3e4628a769c3c47e5f05603eeda582ad30424b1aae9259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_page.html.twig", "BotellaBundle:blog:bio.html.twig", 1);
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
        echo "<section class=\"cadre row expanded page\">
    <h1>Biographie</h1>
    <div class=\"portrait col-md-4\">
        <img class=\"size-medium wp-image-21 alignleft\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/portrait.jpeg"), "html", null, true);
        echo "\" alt=\"\" width=\"252\" height=\"300\" />
    </div>
    <div class=\"bio\">Né le 30 Juin 1974 à Nantes. Son apprentissage de la peinture a débuté en 1989 dans l’atelier de Maïthé Rovino à Aussonne suivi d’une année aux Beaux Arts de Toulouse. Le travail était ciblé sur la peinture à l’huile et le pastel. Le travail au fusain et au crayon a toujours été la base de son travail avant et après les cours. Inspiré par les impressionnistes et les esquisses des grands maîtres italiens, sa peinture est spontanée et structurée. Les compositions et les couleurs sont étudiés de manière à mettre en valeur le sujet. Le traitement inachevé des fonds et les effets de lumières dirigent l’œil vers les expressions, les attitudes et les émotions des personnages. Son but est de donner une impression de vie dans ses tableaux.
        <br>
        <hr>
        <br>
        <span class=\"\"><em>\"Fabulous transition from the surface of the paper that leads into the painting itself. The back-lit scene is phenomenal and accents the figure so exquisitely.\" – Informed Collector</em>
        </span>
    </div>
</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>
";
    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:bio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:blog:bio.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/bio.html.twig");
    }
}
