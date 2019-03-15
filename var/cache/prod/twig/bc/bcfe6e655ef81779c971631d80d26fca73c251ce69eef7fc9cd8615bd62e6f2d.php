<?php

/* BotellaBundle:blog:videos.html.twig */
class __TwigTemplate_8e808b929527511cee1dfc451dd67c0d39a38dd5546c6f0efac8a30f8a2776aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_page.html.twig", "BotellaBundle:blog:videos.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<section id=\"masonry_hybrid_demo3\" class=\"cadre row expanded gallery\">
    <h1>Vidéos</h1>
    <div class=\"filtr-container gallery\">
        <ul>
            <li class=\"movie\">
                <video controls width=\"100%\" class=\"col-md-4\">
                    <source src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/movies/demo_converted.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
                </video>
                <div class=\"col-md-8\">
                    <h3>Stéphanie</h3>
                    <h4>Demonstration portrait à l'huile</h4>
                    <p>Peinture alla prima en une heure.</p>
                </div>
            </li>
        </ul>
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
        return "BotellaBundle:blog:videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:blog:videos.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/videos.html.twig");
    }
}
