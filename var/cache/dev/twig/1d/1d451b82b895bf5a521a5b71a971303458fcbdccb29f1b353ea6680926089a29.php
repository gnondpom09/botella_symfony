<?php

/* BotellaBundle:blog:gallery.html.twig */
class __TwigTemplate_424185aefdd38bde287d0dc8b1a352312507a09916fc56fed0db036d5bf1e113 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout.html.twig", "BotellaBundle:blog:gallery.html.twig", 1);
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
        $__internal_5dcc9e3bc487355d463185b00f173e83c22a3c1266e6591f3480b068dea47a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcc9e3bc487355d463185b00f173e83c22a3c1266e6591f3480b068dea47a11->enter($__internal_5dcc9e3bc487355d463185b00f173e83c22a3c1266e6591f3480b068dea47a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:gallery.html.twig"));

        $__internal_916be37579f64ca32a1d3cce27bfbc390f670990642ac1fe7134b94c78d40ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916be37579f64ca32a1d3cce27bfbc390f670990642ac1fe7134b94c78d40ba6->enter($__internal_916be37579f64ca32a1d3cce27bfbc390f670990642ac1fe7134b94c78d40ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:gallery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dcc9e3bc487355d463185b00f173e83c22a3c1266e6591f3480b068dea47a11->leave($__internal_5dcc9e3bc487355d463185b00f173e83c22a3c1266e6591f3480b068dea47a11_prof);

        
        $__internal_916be37579f64ca32a1d3cce27bfbc390f670990642ac1fe7134b94c78d40ba6->leave($__internal_916be37579f64ca32a1d3cce27bfbc390f670990642ac1fe7134b94c78d40ba6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8f490df4f482d2dd921bc57f92a7f345a3a8a9fd2d75e144b94a38569e283dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f490df4f482d2dd921bc57f92a7f345a3a8a9fd2d75e144b94a38569e283dd->enter($__internal_f8f490df4f482d2dd921bc57f92a7f345a3a8a9fd2d75e144b94a38569e283dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_279d1987d7b05402e34da2ef54f97ea242692cd92eeb5b3810008dd24df0f7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279d1987d7b05402e34da2ef54f97ea242692cd92eeb5b3810008dd24df0f7e5->enter($__internal_279d1987d7b05402e34da2ef54f97ea242692cd92eeb5b3810008dd24df0f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_279d1987d7b05402e34da2ef54f97ea242692cd92eeb5b3810008dd24df0f7e5->leave($__internal_279d1987d7b05402e34da2ef54f97ea242692cd92eeb5b3810008dd24df0f7e5_prof);

        
        $__internal_f8f490df4f482d2dd921bc57f92a7f345a3a8a9fd2d75e144b94a38569e283dd->leave($__internal_f8f490df4f482d2dd921bc57f92a7f345a3a8a9fd2d75e144b94a38569e283dd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3b154b00db697ee2174411c2f2c671abfaf1bcaec11ba3c19362cf68dd23be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b154b00db697ee2174411c2f2c671abfaf1bcaec11ba3c19362cf68dd23be9->enter($__internal_e3b154b00db697ee2174411c2f2c671abfaf1bcaec11ba3c19362cf68dd23be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15ebe12eff79b996d1c5f0381a902861e0f744061917b940eef8c2b58acc8ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ebe12eff79b996d1c5f0381a902861e0f744061917b940eef8c2b58acc8ee4->enter($__internal_15ebe12eff79b996d1c5f0381a902861e0f744061917b940eef8c2b58acc8ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<section id=\"masonry_hybrid_demo3\" class=\"cadre row expanded gallery\">
    <h1>Gallerie</h1>
    <ul class=\"simplefilter\">
        <li class=\"active\" data-filter=\"all\">All</li>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listSeries"] ?? $this->getContext($context, "listSeries")));
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
        $context['_seq'] = twig_ensure_traversable(($context["listPaintings"] ?? $this->getContext($context, "listPaintings")));
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
                    echo "        <div class=\"filtr-item col-xs-3 grid-item\" data-category=\"";
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
</div>

";
        // line 92
        $this->loadTemplate("BotellaBundle:blog:footer-gallery.html.twig", "BotellaBundle:blog:gallery.html.twig", 92)->display($context);
        
        $__internal_15ebe12eff79b996d1c5f0381a902861e0f744061917b940eef8c2b58acc8ee4->leave($__internal_15ebe12eff79b996d1c5f0381a902861e0f744061917b940eef8c2b58acc8ee4_prof);

        
        $__internal_e3b154b00db697ee2174411c2f2c671abfaf1bcaec11ba3c19362cf68dd23be9->leave($__internal_e3b154b00db697ee2174411c2f2c671abfaf1bcaec11ba3c19362cf68dd23be9_prof);

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
        return array (  207 => 92,  147 => 34,  141 => 33,  138 => 32,  131 => 30,  125 => 27,  117 => 25,  115 => 24,  110 => 23,  105 => 22,  102 => 21,  98 => 20,  94 => 18,  83 => 16,  79 => 15,  72 => 10,  63 => 9,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BotellaBundle::layout.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}


{% block body %}

<section id=\"masonry_hybrid_demo3\" class=\"cadre row expanded gallery\">
    <h1>Gallerie</h1>
    <ul class=\"simplefilter\">
        <li class=\"active\" data-filter=\"all\">All</li>
        {% for serie in listSeries %}
        <li data-filter=\"{{ serie.id }}\">{{ serie.name }}</li>
        {% endfor %}
    </ul>
    <div class=\"filtr-container gallery\">
        {% for painting in listPaintings %}
            {% if not painting.series.empty %}
                {% for serie in painting.series %}
        <div class=\"filtr-item col-xs-3 grid-item\" data-category=\"{{ serie.id }}\">
            {% if painting.image is not null %}
            <a href=\"{{ asset(painting.image.webPath) }}\" class=\"{{ serie.name }} lightbox\"
                data-rel=\"lightcase:myCollection:slideshow\">
                <img src=\"{{ asset(painting.image.webPath) }}\" alt=\"\" />
            </a>
            {% endif %}
    </div>
                {% endfor %}
            {% endif %}
        {% endfor %}
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
</div>

{% include 'BotellaBundle:blog:footer-gallery.html.twig' %}
{% endblock %}
", "BotellaBundle:blog:gallery.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/gallery.html.twig");
    }
}
