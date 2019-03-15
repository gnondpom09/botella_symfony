<?php

/* BotellaBundle:blog:home.html.twig */
class __TwigTemplate_862a579564cc9b32181d3f6f018130af1d96a2dd339551ab262713de71d7e2e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BotellaBundle::layout.html.twig", "BotellaBundle:blog:home.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<section class=\"cadre row expanded\">
    <div id=\"home\" class=\"col-xs-8\">
        <h1>Laurent <span>Botella</span></h1>
        <h2>Artiste Peintre</h2>
        <div class=\"pastelliste\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/pastelliste.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    </div>
    <div class=\"col-xs-4\" class=\"diaporama\">
        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/22.jpeg"), "html", null, true);
        echo "\" alt=\"painting\">
    </div>
</section>
<a href=\"#section3\" class=\"top\">
    <button type=\"button\" name=\"top\">
        <div class=\"content-button\">
            <p>Scroll</p><i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>
        </div>
    </button>
</a>
</div>
</div>
<div id=\"section2\" class=\"under\">
    <section class=\"row align-strech expanded\">
        <h2>Actualités</h2>

        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("BotellaBundle:Article:list", array("limit" => 3)));
        echo "

    </section>
</div>
<div id=\"section3\" class=\"video\">
    <video autoplay loop style=\"margin: auto;\">
        <source src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/movies/demo_tour.MOV"), "html", null, true);
        echo "\" type=\"video/mp4\">
    </video>
    <div class=\"video-titre\">
        <h2>Decouvrez l'atelier</h2>
        <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_videos");
        echo "\">
            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/play.png"), "html", null, true);
        echo "\" alt=\"\">
        </a>
    </div>
</div>
<div id=\"section4\" class=\"container\">
    <section  id=\"advert\"class=\"cadre row expanded\">
        <div class=\"col-xs-4 advert\">
            <h3>Painting</h3><span>News</span>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_gallery");
        echo "\">Galerie</a>
        </div>
        <div class=\"col-xs-8\">
            <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/23.jpeg"), "html", null, true);
        echo "\" alt=\"painting\">
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
</div>
</div>

";
        // line 74
        $this->loadTemplate("BotellaBundle:blog:footer.html.twig", "BotellaBundle:blog:home.html.twig", 74)->display($context);
    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 74,  113 => 60,  107 => 57,  96 => 49,  92 => 48,  85 => 44,  76 => 38,  57 => 22,  50 => 18,  42 => 12,  39 => 11,  32 => 7,  29 => 6,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:blog:home.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/home.html.twig");
    }
}
