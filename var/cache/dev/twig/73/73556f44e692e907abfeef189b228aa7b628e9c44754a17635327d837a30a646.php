<?php

/* CoreSphereConsoleBundle:Console:console.html.twig */
class __TwigTemplate_8b4b29a623016bbe8216d34885f975804292125053eb9263204ef22de7cc5e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreSphereConsoleBundle::base.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8a882831b112d2b3142bfca59253c8b3a913641ed3478804bfa0f8163cba653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a882831b112d2b3142bfca59253c8b3a913641ed3478804bfa0f8163cba653->enter($__internal_f8a882831b112d2b3142bfca59253c8b3a913641ed3478804bfa0f8163cba653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $__internal_8062a563673f670f0d373303025d1f38335e0274142c4d8d02334e1a0c62cd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8062a563673f670f0d373303025d1f38335e0274142c4d8d02334e1a0c62cd74->enter($__internal_8062a563673f670f0d373303025d1f38335e0274142c4d8d02334e1a0c62cd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:console.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a882831b112d2b3142bfca59253c8b3a913641ed3478804bfa0f8163cba653->leave($__internal_f8a882831b112d2b3142bfca59253c8b3a913641ed3478804bfa0f8163cba653_prof);

        
        $__internal_8062a563673f670f0d373303025d1f38335e0274142c4d8d02334e1a0c62cd74->leave($__internal_8062a563673f670f0d373303025d1f38335e0274142c4d8d02334e1a0c62cd74_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_513f48a24559701ac02923ee141a7775f6e6006e01d1e686f0190e8ee8c52822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_513f48a24559701ac02923ee141a7775f6e6006e01d1e686f0190e8ee8c52822->enter($__internal_513f48a24559701ac02923ee141a7775f6e6006e01d1e686f0190e8ee8c52822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a39e5f39fd2f6511a969e08b523ebf4fa5c8b209d58b61cd61f9b1cfc6ff47c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39e5f39fd2f6511a969e08b523ebf4fa5c8b209d58b61cd61f9b1cfc6ff47c1->enter($__internal_a39e5f39fd2f6511a969e08b523ebf4fa5c8b209d58b61cd61f9b1cfc6ff47c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.headline.index"), "html", null, true);
        
        $__internal_a39e5f39fd2f6511a969e08b523ebf4fa5c8b209d58b61cd61f9b1cfc6ff47c1->leave($__internal_a39e5f39fd2f6511a969e08b523ebf4fa5c8b209d58b61cd61f9b1cfc6ff47c1_prof);

        
        $__internal_513f48a24559701ac02923ee141a7775f6e6006e01d1e686f0190e8ee8c52822->leave($__internal_513f48a24559701ac02923ee141a7775f6e6006e01d1e686f0190e8ee8c52822_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319698a108f3ec940dbebbda59654b4cbdd081c2bad9519a92bd2154e8d00b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319698a108f3ec940dbebbda59654b4cbdd081c2bad9519a92bd2154e8d00b79->enter($__internal_319698a108f3ec940dbebbda59654b4cbdd081c2bad9519a92bd2154e8d00b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1dc20bab1a5112089974134a430103414e8c73858119833ca7582d2dc75fba58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc20bab1a5112089974134a430103414e8c73858119833ca7582d2dc75fba58->enter($__internal_1dc20bab1a5112089974134a430103414e8c73858119833ca7582d2dc75fba58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_1dc20bab1a5112089974134a430103414e8c73858119833ca7582d2dc75fba58->leave($__internal_1dc20bab1a5112089974134a430103414e8c73858119833ca7582d2dc75fba58_prof);

        
        $__internal_319698a108f3ec940dbebbda59654b4cbdd081c2bad9519a92bd2154e8d00b79->leave($__internal_319698a108f3ec940dbebbda59654b4cbdd081c2bad9519a92bd2154e8d00b79_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f7f4c1d41991887d0a3565337c3b386a7f0030d13f3c88febe5ddcb62cce5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7f4c1d41991887d0a3565337c3b386a7f0030d13f3c88febe5ddcb62cce5c6->enter($__internal_9f7f4c1d41991887d0a3565337c3b386a7f0030d13f3c88febe5ddcb62cce5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_755bbfd17506f160a7986eab485d77df5dc63f5b6a5e3eb9afe2efebea1bc99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755bbfd17506f160a7986eab485d77df5dc63f5b6a5e3eb9afe2efebea1bc99d->enter($__internal_755bbfd17506f160a7986eab485d77df5dc63f5b6a5e3eb9afe2efebea1bc99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:terminal.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->loadTemplate("CoreSphereConsoleBundle:Console:htmlTemplates.html.twig", "CoreSphereConsoleBundle:Console:console.html.twig", 12)->display($context);
        
        $__internal_755bbfd17506f160a7986eab485d77df5dc63f5b6a5e3eb9afe2efebea1bc99d->leave($__internal_755bbfd17506f160a7986eab485d77df5dc63f5b6a5e3eb9afe2efebea1bc99d_prof);

        
        $__internal_9f7f4c1d41991887d0a3565337c3b386a7f0030d13f3c88febe5ddcb62cce5c6->leave($__internal_9f7f4c1d41991887d0a3565337c3b386a7f0030d13f3c88febe5ddcb62cce5c6_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_944b9add22fd3168e8bca1244a5b310b15836bc0312c5e500492312f766f3cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944b9add22fd3168e8bca1244a5b310b15836bc0312c5e500492312f766f3cc7->enter($__internal_944b9add22fd3168e8bca1244a5b310b15836bc0312c5e500492312f766f3cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4bb64bb9f2e800855758b9d3978ad3ed6c6a9312c6aec7a625ab2461b03cca0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb64bb9f2e800855758b9d3978ad3ed6c6a9312c6aec7a625ab2461b03cca0b->enter($__internal_4bb64bb9f2e800855758b9d3978ad3ed6c6a9312c6aec7a625ab2461b03cca0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(function () {
            ";
        // line 21
        echo "            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : ";
        // line 23
        echo twig_jsonencode_filter(twig_get_array_keys_filter((isset($context["commands"]) ? $context["commands"] : $this->getContext($context, "commands"))));
        echo ".sort(),
                \"post_path\" : \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console_exec"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["environment"]) ? $context["environment"] : $this->getContext($context, "environment")), "js", null, true);
        echo "\",
                \"lang\" : {
                    \"loading\" : \"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                    \"suggestion_head\" : \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                    \"environment\" : \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                    \"empty_response\" : \"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                    \"welcome_message\" : \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            ";
        // line 45
        echo "        });
    </script>
";
        
        $__internal_4bb64bb9f2e800855758b9d3978ad3ed6c6a9312c6aec7a625ab2461b03cca0b->leave($__internal_4bb64bb9f2e800855758b9d3978ad3ed6c6a9312c6aec7a625ab2461b03cca0b_prof);

        
        $__internal_944b9add22fd3168e8bca1244a5b310b15836bc0312c5e500492312f766f3cc7->leave($__internal_944b9add22fd3168e8bca1244a5b310b15836bc0312c5e500492312f766f3cc7_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:console.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 45,  163 => 31,  159 => 30,  155 => 29,  151 => 28,  147 => 27,  142 => 25,  138 => 24,  134 => 23,  130 => 21,  124 => 17,  119 => 16,  110 => 15,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreSphereConsoleBundle::base.html.twig'  %}

{% block title %}{{ 'coresphere_console.headline.index'|trans }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/console.css') }}\" type=\"text/css\" />
{% endblock %}

{% block body %}
    {%  include 'CoreSphereConsoleBundle:Console:terminal.html.twig' %}
    {%  include 'CoreSphereConsoleBundle:Console:htmlTemplates.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/coresphereconsole/js/console.js') }}\"></script>
    <script>
        jQuery(function () {
            {% autoescape 'js' %}
            var coresphere_console = new CoreSphereConsole(
                jQuery(\"#coresphere_consolebundle_console\"), {
                \"commands\" : {{ commands|keys|json_encode|raw }}.sort(),
                \"post_path\" : \"{{ path('console_exec') }}\",
                \"environment\" : \"{{ environment }}\",
                \"lang\" : {
                    \"loading\" : \"{{ 'coresphere_console.loading'|trans }}\",
                    \"suggestion_head\" : \"{{ 'coresphere_console.suggestion_head'|trans }}\",
                    \"environment\" : \"{{ 'coresphere_console.environment'|trans }}\",
                    \"empty_response\" : \"{{ 'coresphere_console.empty_response'|trans }}\",
                    \"welcome_message\" : \"{{ 'coresphere_console.welcome_message'|trans({'%command%': '<code class=\\\"console_command\\\">list</code>'}) }}\"
                },
                \"templates\" : {
                    \"error\" : \$(\"#template_console_error\").text(),
                    \"command\" : \$(\"#template_console_command\").text(),
                    \"environment\" : \$(\"#template_console_environment\").text(),
                    \"suggestion_list\" : \$('#template_suggestion_list').text(),
                    \"loading\" : \$('#template_console_loading').text(),
                    \"suggestion_item_active\" : \$('#suggestion_item_active').text(),
                    \"suggestion_item\" : \$('#suggestion_item').text(),
                    \"highlight\" : \$('#template_console_highlight').text().trim()
                }
            });
            {% endautoescape %}
        });
    </script>
{% endblock %}
", "CoreSphereConsoleBundle:Console:console.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/coresphere/console-bundle/Resources/views/Console/console.html.twig");
    }
}
