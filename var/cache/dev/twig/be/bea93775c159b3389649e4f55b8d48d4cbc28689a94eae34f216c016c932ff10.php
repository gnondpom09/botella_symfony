<?php

/* BotellaBundle:blog:contact.html.twig */
class __TwigTemplate_857229226d74deb5fb886be76cd8269ae3c908a13f210a515631651116ea4809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BotellaBundle::layout.html.twig", "BotellaBundle:blog:contact.html.twig", 2);
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
        $__internal_e6df69991308411a1ab68bcd4ead966b7ba1e30816b68b611dbb75dea9e09ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6df69991308411a1ab68bcd4ead966b7ba1e30816b68b611dbb75dea9e09ccd->enter($__internal_e6df69991308411a1ab68bcd4ead966b7ba1e30816b68b611dbb75dea9e09ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:contact.html.twig"));

        $__internal_d82870b8a43ccbb79115e37b1ce2742d073a0227f83a060006683efda8767722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82870b8a43ccbb79115e37b1ce2742d073a0227f83a060006683efda8767722->enter($__internal_d82870b8a43ccbb79115e37b1ce2742d073a0227f83a060006683efda8767722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6df69991308411a1ab68bcd4ead966b7ba1e30816b68b611dbb75dea9e09ccd->leave($__internal_e6df69991308411a1ab68bcd4ead966b7ba1e30816b68b611dbb75dea9e09ccd_prof);

        
        $__internal_d82870b8a43ccbb79115e37b1ce2742d073a0227f83a060006683efda8767722->leave($__internal_d82870b8a43ccbb79115e37b1ce2742d073a0227f83a060006683efda8767722_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c32578f63f813859d6139c723a3f363cd2c948bdf443f0b40bbf80978b8aee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c32578f63f813859d6139c723a3f363cd2c948bdf443f0b40bbf80978b8aee6->enter($__internal_8c32578f63f813859d6139c723a3f363cd2c948bdf443f0b40bbf80978b8aee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8714a5bd6179348a5f9c094d3917466fc08268e791f0689e4a37a50e48d8a2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8714a5bd6179348a5f9c094d3917466fc08268e791f0689e4a37a50e48d8a2ac->enter($__internal_8714a5bd6179348a5f9c094d3917466fc08268e791f0689e4a37a50e48d8a2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8714a5bd6179348a5f9c094d3917466fc08268e791f0689e4a37a50e48d8a2ac->leave($__internal_8714a5bd6179348a5f9c094d3917466fc08268e791f0689e4a37a50e48d8a2ac_prof);

        
        $__internal_8c32578f63f813859d6139c723a3f363cd2c948bdf443f0b40bbf80978b8aee6->leave($__internal_8c32578f63f813859d6139c723a3f363cd2c948bdf443f0b40bbf80978b8aee6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0b80039f6aa7e923227d8f5095e90ebc2d7724b8f1166bb2674245620e2c825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b80039f6aa7e923227d8f5095e90ebc2d7724b8f1166bb2674245620e2c825->enter($__internal_f0b80039f6aa7e923227d8f5095e90ebc2d7724b8f1166bb2674245620e2c825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f5d23e4f9cb114af36c87b4ca551e0ebdde0c7a0c2af5a6e81e114c50534ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5d23e4f9cb114af36c87b4ca551e0ebdde0c7a0c2af5a6e81e114c50534ecd->enter($__internal_9f5d23e4f9cb114af36c87b4ca551e0ebdde0c7a0c2af5a6e81e114c50534ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<section class=\"cadre row expanded\">
    <h1>Contact</h1>
    <form id=\"theForm\" class=\"simform\" method=\"post\" action=\"mailto:laurent.botella@vivaldi.net\" autocomplete=\"off\">
    \t\t\t\t\t<div class=\"simform-inner\">
    \t\t\t\t\t\t<ol class=\"questions\">
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q1\">What's your favorite movie?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q1\" name=\"q1\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q2\">Where do you live?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q2\" name=\"q2\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q3\">What time do you got to work?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q3\" name=\"q3\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q4\">How do you like your veggies?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q4\" name=\"q4\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q5\">What book inspires you?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q5\" name=\"q5\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q6\">What's your profession?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q6\" name=\"q6\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t</ol><!-- /questions -->
    \t\t\t\t\t\t<button class=\"submit\" type=\"submit\">Send answers</button>

    \t\t\t\t\t\t<div class=\"controls\">
    \t\t\t\t\t\t\t<button class=\"next\"></button>
    \t\t\t\t\t\t\t<div class=\"progress\"></div>
    \t\t\t\t\t\t\t<span class=\"number\">
    \t\t\t\t\t\t\t\t<span class=\"number-current\"></span>
    \t\t\t\t\t\t\t\t<span class=\"number-total\"></span>
    \t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t<span class=\"error-message\"></span>
    \t\t\t\t\t\t</div><!-- / controls -->
    \t\t\t\t\t</div><!-- /simform-inner -->
    \t\t\t\t\t<span class=\"final-message\"></span>
    \t\t\t\t</form><!-- /simform -->\t

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

";
        // line 66
        $this->loadTemplate("BotellaBundle:blog:footer-page.html.twig", "BotellaBundle:blog:contact.html.twig", 66)->display($context);
        
        $__internal_9f5d23e4f9cb114af36c87b4ca551e0ebdde0c7a0c2af5a6e81e114c50534ecd->leave($__internal_9f5d23e4f9cb114af36c87b4ca551e0ebdde0c7a0c2af5a6e81e114c50534ecd_prof);

        
        $__internal_f0b80039f6aa7e923227d8f5095e90ebc2d7724b8f1166bb2674245620e2c825->leave($__internal_f0b80039f6aa7e923227d8f5095e90ebc2d7724b8f1166bb2674245620e2c825_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 66,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"BotellaBundle::layout.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}

{% block body %}
<section class=\"cadre row expanded\">
    <h1>Contact</h1>
    <form id=\"theForm\" class=\"simform\" method=\"post\" action=\"mailto:laurent.botella@vivaldi.net\" autocomplete=\"off\">
    \t\t\t\t\t<div class=\"simform-inner\">
    \t\t\t\t\t\t<ol class=\"questions\">
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q1\">What's your favorite movie?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q1\" name=\"q1\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q2\">Where do you live?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q2\" name=\"q2\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q3\">What time do you got to work?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q3\" name=\"q3\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q4\">How do you like your veggies?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q4\" name=\"q4\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q5\">What book inspires you?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q5\" name=\"q5\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t\t<li>
    \t\t\t\t\t\t\t\t<span><label for=\"q6\">What's your profession?</label></span>
    \t\t\t\t\t\t\t\t<input id=\"q6\" name=\"q6\" type=\"text\"/>
    \t\t\t\t\t\t\t</li>
    \t\t\t\t\t\t</ol><!-- /questions -->
    \t\t\t\t\t\t<button class=\"submit\" type=\"submit\">Send answers</button>

    \t\t\t\t\t\t<div class=\"controls\">
    \t\t\t\t\t\t\t<button class=\"next\"></button>
    \t\t\t\t\t\t\t<div class=\"progress\"></div>
    \t\t\t\t\t\t\t<span class=\"number\">
    \t\t\t\t\t\t\t\t<span class=\"number-current\"></span>
    \t\t\t\t\t\t\t\t<span class=\"number-total\"></span>
    \t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t<span class=\"error-message\"></span>
    \t\t\t\t\t\t</div><!-- / controls -->
    \t\t\t\t\t</div><!-- /simform-inner -->
    \t\t\t\t\t<span class=\"final-message\"></span>
    \t\t\t\t</form><!-- /simform -->\t

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

{% include 'BotellaBundle:blog:footer-page.html.twig' %}
{% endblock %}
", "BotellaBundle:blog:contact.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/contact.html.twig");
    }
}
