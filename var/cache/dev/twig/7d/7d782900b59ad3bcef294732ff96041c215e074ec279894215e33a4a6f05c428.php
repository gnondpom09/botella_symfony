<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_66e7e75ec9c0010641dbe585aeeac70571ef1f0833e1a7882f58c23aa7e6cdbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd92ce46bc1ab97cb42e75458e708c570cd00ece1d3d8dfe1b5e451aeb014e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd92ce46bc1ab97cb42e75458e708c570cd00ece1d3d8dfe1b5e451aeb014e90->enter($__internal_bd92ce46bc1ab97cb42e75458e708c570cd00ece1d3d8dfe1b5e451aeb014e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_be76578d8b2672e94cf39057362f5d830119031a3e3fa1c8f18051c6c70c29fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be76578d8b2672e94cf39057362f5d830119031a3e3fa1c8f18051c6c70c29fe->enter($__internal_be76578d8b2672e94cf39057362f5d830119031a3e3fa1c8f18051c6c70c29fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_bd92ce46bc1ab97cb42e75458e708c570cd00ece1d3d8dfe1b5e451aeb014e90->leave($__internal_bd92ce46bc1ab97cb42e75458e708c570cd00ece1d3d8dfe1b5e451aeb014e90_prof);

        
        $__internal_be76578d8b2672e94cf39057362f5d830119031a3e3fa1c8f18051c6c70c29fe->leave($__internal_be76578d8b2672e94cf39057362f5d830119031a3e3fa1c8f18051c6c70c29fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8559855bd142085c59d90b1a3236aebd945414eedfecdf23db9429dd35b2f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8559855bd142085c59d90b1a3236aebd945414eedfecdf23db9429dd35b2f73->enter($__internal_f8559855bd142085c59d90b1a3236aebd945414eedfecdf23db9429dd35b2f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe0e4e23377b210aeb7703c5825b416eda4f1427d1007810bcad12bdb5e7a6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0e4e23377b210aeb7703c5825b416eda4f1427d1007810bcad12bdb5e7a6d8->enter($__internal_fe0e4e23377b210aeb7703c5825b416eda4f1427d1007810bcad12bdb5e7a6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fe0e4e23377b210aeb7703c5825b416eda4f1427d1007810bcad12bdb5e7a6d8->leave($__internal_fe0e4e23377b210aeb7703c5825b416eda4f1427d1007810bcad12bdb5e7a6d8_prof);

        
        $__internal_f8559855bd142085c59d90b1a3236aebd945414eedfecdf23db9429dd35b2f73->leave($__internal_f8559855bd142085c59d90b1a3236aebd945414eedfecdf23db9429dd35b2f73_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ec41d8c4aa0836d02ab2037f2660aa3650127829e9cdd8ea4317f8c564b7262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec41d8c4aa0836d02ab2037f2660aa3650127829e9cdd8ea4317f8c564b7262->enter($__internal_3ec41d8c4aa0836d02ab2037f2660aa3650127829e9cdd8ea4317f8c564b7262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5d9e74c99fd1a787da263e1c84880f82107af366b3818c2e7c8b65723544fb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9e74c99fd1a787da263e1c84880f82107af366b3818c2e7c8b65723544fb3a->enter($__internal_5d9e74c99fd1a787da263e1c84880f82107af366b3818c2e7c8b65723544fb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5d9e74c99fd1a787da263e1c84880f82107af366b3818c2e7c8b65723544fb3a->leave($__internal_5d9e74c99fd1a787da263e1c84880f82107af366b3818c2e7c8b65723544fb3a_prof);

        
        $__internal_3ec41d8c4aa0836d02ab2037f2660aa3650127829e9cdd8ea4317f8c564b7262->leave($__internal_3ec41d8c4aa0836d02ab2037f2660aa3650127829e9cdd8ea4317f8c564b7262_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7971c7a28d25fcf1699cf3ea8a4e5794c5080a115437aac76e4c65d249b2b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7971c7a28d25fcf1699cf3ea8a4e5794c5080a115437aac76e4c65d249b2b16->enter($__internal_b7971c7a28d25fcf1699cf3ea8a4e5794c5080a115437aac76e4c65d249b2b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd2c08da54358097f630633bedebb14554b00646bde2b39cf224472dc4ec0aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2c08da54358097f630633bedebb14554b00646bde2b39cf224472dc4ec0aca->enter($__internal_bd2c08da54358097f630633bedebb14554b00646bde2b39cf224472dc4ec0aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd2c08da54358097f630633bedebb14554b00646bde2b39cf224472dc4ec0aca->leave($__internal_bd2c08da54358097f630633bedebb14554b00646bde2b39cf224472dc4ec0aca_prof);

        
        $__internal_b7971c7a28d25fcf1699cf3ea8a4e5794c5080a115437aac76e4c65d249b2b16->leave($__internal_b7971c7a28d25fcf1699cf3ea8a4e5794c5080a115437aac76e4c65d249b2b16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
