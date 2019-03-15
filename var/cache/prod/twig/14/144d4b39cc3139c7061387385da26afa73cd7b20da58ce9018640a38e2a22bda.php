<?php

/* BotellaBundle:blog:gallery.html.twig */
class __TwigTemplate_73aa05f4e59aeaf2b990961d7b71f77bd954165806b1fdb46dd0dd9fb23910ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_gallery.html.twig", "BotellaBundle:blog:gallery.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout_gallery.html.twig";
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

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
<section id=\"masonry_hybrid_demo3\" class=\"cadre row expanded gallery\">
    <h1>Gallerie</h1>
    <ul class=\"simplefilter\">
        <li class=\"active\" data-filter=\"all\">All</li>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSeries"]) ? $context["listSeries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 16
            echo "        <li data-filter=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
    <div class=\"filtr-container gallery\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPaintings"]) ? $context["listPaintings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["painting"]) {
            // line 21
            echo "            ";
            if ( !$this->getAttribute($this->getAttribute($context["painting"], "series", array()), "empty", array())) {
                // line 22
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["painting"], "series", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
                    // line 23
                    echo "        <div class=\"filtr-item col-md-3 grid-item\" data-category=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
                    echo "\">
            ";
                    // line 24
                    if ( !(null === $this->getAttribute($context["painting"], "image", array()))) {
                        // line 25
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["painting"], "image", array()), "webPath", array())), "html", null, true);
                        echo "\" class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
                        echo " lightbox\"
                data-rel=\"lightcase:myCollection:slideshow\">
                <img src=\"";
                        // line 27
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["painting"], "image", array()), "webPath", array())), "html", null, true);
                        echo "\" alt=\"\" />
            </a>
            ";
                    }
                    // line 30
                    echo "    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            ";
            }
            // line 33
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['painting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>
<div id=\"gallery\" class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"pswp__bg\"></div>

    <div class=\"pswp__scroll-wrap\">

        <div class=\"pswp__container\">
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
            <div class=\"pswp__item\"></div>
        </div>

        <div class=\"pswp__ui pswp__ui--hidden\">

            <div class=\"pswp__top-bar\">

                <div class=\"pswp__counter\"></div>

                <button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button>

                <button class=\"pswp__button pswp__button--share\" title=\"Share\"></button>

                <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button>

                <button class=\"pswp__button pswp__button--zoom\" title=\"Zoom in/out\"></button>

                <div class=\"pswp__preloader\">
                    <div class=\"pswp__preloader__icn\">
                        <div class=\"pswp__preloader__cut\">
                            <div class=\"pswp__preloader__donut\"></div>
                        </div>
                    </div>
                </div>
            </div>


            <button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button>
            <button class=\"pswp__button pswp__button--arrow--right\" title=\"Next (arrow right)\"></button>
            <div class=\"pswp__caption\">
                <div class=\"pswp__caption__center\">
                </div>
            </div>
        </div>

    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  111 => 33,  108 => 32,  101 => 30,  95 => 27,  87 => 25,  85 => 24,  80 => 23,  75 => 22,  72 => 21,  68 => 20,  64 => 18,  53 => 16,  49 => 15,  42 => 10,  39 => 9,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:blog:gallery.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/gallery.html.twig");
    }
}
