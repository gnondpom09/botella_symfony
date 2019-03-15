<?php

/* BotellaBundle:blog:backoffice.html.twig */
class __TwigTemplate_28410d24716b7efbef6e86233e831d73a5e0992e11f853e1dfdf07790a197d63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:blog:backoffice.html.twig", 1);
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
        $__internal_a05a026e46536a8adbee36d487c8e6a579e98465fa34221b3886ae066e83257c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05a026e46536a8adbee36d487c8e6a579e98465fa34221b3886ae066e83257c->enter($__internal_a05a026e46536a8adbee36d487c8e6a579e98465fa34221b3886ae066e83257c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:backoffice.html.twig"));

        $__internal_9adc223137920f37bd4e38d0537ae6ab32305137cc8d5bad782754a3e39a4b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9adc223137920f37bd4e38d0537ae6ab32305137cc8d5bad782754a3e39a4b59->enter($__internal_9adc223137920f37bd4e38d0537ae6ab32305137cc8d5bad782754a3e39a4b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:backoffice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a05a026e46536a8adbee36d487c8e6a579e98465fa34221b3886ae066e83257c->leave($__internal_a05a026e46536a8adbee36d487c8e6a579e98465fa34221b3886ae066e83257c_prof);

        
        $__internal_9adc223137920f37bd4e38d0537ae6ab32305137cc8d5bad782754a3e39a4b59->leave($__internal_9adc223137920f37bd4e38d0537ae6ab32305137cc8d5bad782754a3e39a4b59_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4887a9908fb6c683d8df23ed76c0601228833a52bdaefcea2082141eb139252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4887a9908fb6c683d8df23ed76c0601228833a52bdaefcea2082141eb139252->enter($__internal_f4887a9908fb6c683d8df23ed76c0601228833a52bdaefcea2082141eb139252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28257bef4787a11e143f3c4ef3aeb554c6c918e188d6358cbb39678e27bddf2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28257bef4787a11e143f3c4ef3aeb554c6c918e188d6358cbb39678e27bddf2d->enter($__internal_28257bef4787a11e143f3c4ef3aeb554c6c918e188d6358cbb39678e27bddf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_28257bef4787a11e143f3c4ef3aeb554c6c918e188d6358cbb39678e27bddf2d->leave($__internal_28257bef4787a11e143f3c4ef3aeb554c6c918e188d6358cbb39678e27bddf2d_prof);

        
        $__internal_f4887a9908fb6c683d8df23ed76c0601228833a52bdaefcea2082141eb139252->leave($__internal_f4887a9908fb6c683d8df23ed76c0601228833a52bdaefcea2082141eb139252_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_aacd09955d84a8b8bd16bef8ec83c089bb3f1f05c831b1ccd116a82a2e99bb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacd09955d84a8b8bd16bef8ec83c089bb3f1f05c831b1ccd116a82a2e99bb00->enter($__internal_aacd09955d84a8b8bd16bef8ec83c089bb3f1f05c831b1ccd116a82a2e99bb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffbd2be455e6ca3ad5af2ce081e9d951c006f5e927e1bf34a1bd3cb5c496d408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbd2be455e6ca3ad5af2ce081e9d951c006f5e927e1bf34a1bd3cb5c496d408->enter($__internal_ffbd2be455e6ca3ad5af2ce081e9d951c006f5e927e1bf34a1bd3cb5c496d408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back\">
    <h3>Accueil Backoffice</h3>


</article>
</section>
";
        
        $__internal_ffbd2be455e6ca3ad5af2ce081e9d951c006f5e927e1bf34a1bd3cb5c496d408->leave($__internal_ffbd2be455e6ca3ad5af2ce081e9d951c006f5e927e1bf34a1bd3cb5c496d408_prof);

        
        $__internal_aacd09955d84a8b8bd16bef8ec83c089bb3f1f05c831b1ccd116a82a2e99bb00->leave($__internal_aacd09955d84a8b8bd16bef8ec83c089bb3f1f05c831b1ccd116a82a2e99bb00_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
    <h3>Accueil Backoffice</h3>


</article>
</section>
{% endblock %}
", "BotellaBundle:blog:backoffice.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/backoffice.html.twig");
    }
}
