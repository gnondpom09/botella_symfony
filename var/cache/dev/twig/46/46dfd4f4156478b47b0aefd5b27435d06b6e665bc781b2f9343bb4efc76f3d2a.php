<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
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
        $__internal_6c3cf7e14173a3086e6f4f5d7ea7ef4d2b91b3106a1e984867b62a2392062e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3cf7e14173a3086e6f4f5d7ea7ef4d2b91b3106a1e984867b62a2392062e48->enter($__internal_6c3cf7e14173a3086e6f4f5d7ea7ef4d2b91b3106a1e984867b62a2392062e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5972e322917ea47b27ff8165799b3fca44cdf3842d93b8484f83f278cd0dc44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5972e322917ea47b27ff8165799b3fca44cdf3842d93b8484f83f278cd0dc44b->enter($__internal_5972e322917ea47b27ff8165799b3fca44cdf3842d93b8484f83f278cd0dc44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6c3cf7e14173a3086e6f4f5d7ea7ef4d2b91b3106a1e984867b62a2392062e48->leave($__internal_6c3cf7e14173a3086e6f4f5d7ea7ef4d2b91b3106a1e984867b62a2392062e48_prof);

        
        $__internal_5972e322917ea47b27ff8165799b3fca44cdf3842d93b8484f83f278cd0dc44b->leave($__internal_5972e322917ea47b27ff8165799b3fca44cdf3842d93b8484f83f278cd0dc44b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f18a50c9931b0b36d284652bd3e2b68555d1ad43e1b9fc9a5dee3f4ced722a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f18a50c9931b0b36d284652bd3e2b68555d1ad43e1b9fc9a5dee3f4ced722a9->enter($__internal_3f18a50c9931b0b36d284652bd3e2b68555d1ad43e1b9fc9a5dee3f4ced722a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb4cd2defbc115d7b179b7143e8a251928ef4ee5e15173f1df83e52b7205094b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4cd2defbc115d7b179b7143e8a251928ef4ee5e15173f1df83e52b7205094b->enter($__internal_eb4cd2defbc115d7b179b7143e8a251928ef4ee5e15173f1df83e52b7205094b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_eb4cd2defbc115d7b179b7143e8a251928ef4ee5e15173f1df83e52b7205094b->leave($__internal_eb4cd2defbc115d7b179b7143e8a251928ef4ee5e15173f1df83e52b7205094b_prof);

        
        $__internal_3f18a50c9931b0b36d284652bd3e2b68555d1ad43e1b9fc9a5dee3f4ced722a9->leave($__internal_3f18a50c9931b0b36d284652bd3e2b68555d1ad43e1b9fc9a5dee3f4ced722a9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_64736b644acb753545a6f49a1d9b32fd9042245724ab132d2584056412305ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64736b644acb753545a6f49a1d9b32fd9042245724ab132d2584056412305ff3->enter($__internal_64736b644acb753545a6f49a1d9b32fd9042245724ab132d2584056412305ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b5e36abc4bbe6b18134e14899e08a8c1b3b47c92383c529fed537c4e9e37a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5e36abc4bbe6b18134e14899e08a8c1b3b47c92383c529fed537c4e9e37a52->enter($__internal_9b5e36abc4bbe6b18134e14899e08a8c1b3b47c92383c529fed537c4e9e37a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9b5e36abc4bbe6b18134e14899e08a8c1b3b47c92383c529fed537c4e9e37a52->leave($__internal_9b5e36abc4bbe6b18134e14899e08a8c1b3b47c92383c529fed537c4e9e37a52_prof);

        
        $__internal_64736b644acb753545a6f49a1d9b32fd9042245724ab132d2584056412305ff3->leave($__internal_64736b644acb753545a6f49a1d9b32fd9042245724ab132d2584056412305ff3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e08cf0eba6143b88b3d905e1bb742e44de3ab2598c5216b643f1d57e76f98996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08cf0eba6143b88b3d905e1bb742e44de3ab2598c5216b643f1d57e76f98996->enter($__internal_e08cf0eba6143b88b3d905e1bb742e44de3ab2598c5216b643f1d57e76f98996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1f730002cf9b7956268af7a7377a8e497bc056b6ab69b019a046105f65d8b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f730002cf9b7956268af7a7377a8e497bc056b6ab69b019a046105f65d8b6f->enter($__internal_b1f730002cf9b7956268af7a7377a8e497bc056b6ab69b019a046105f65d8b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1f730002cf9b7956268af7a7377a8e497bc056b6ab69b019a046105f65d8b6f->leave($__internal_b1f730002cf9b7956268af7a7377a8e497bc056b6ab69b019a046105f65d8b6f_prof);

        
        $__internal_e08cf0eba6143b88b3d905e1bb742e44de3ab2598c5216b643f1d57e76f98996->leave($__internal_e08cf0eba6143b88b3d905e1bb742e44de3ab2598c5216b643f1d57e76f98996_prof);

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
