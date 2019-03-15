<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cacd88d75aa8f2866e50f243fd0448cccd9463c062721afa1d3d63ba63ebb602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacd88d75aa8f2866e50f243fd0448cccd9463c062721afa1d3d63ba63ebb602->enter($__internal_cacd88d75aa8f2866e50f243fd0448cccd9463c062721afa1d3d63ba63ebb602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a103f3c835d146349b60ae7273847543b8d8a74c94718a5bc9668e146262d7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a103f3c835d146349b60ae7273847543b8d8a74c94718a5bc9668e146262d7fc->enter($__internal_a103f3c835d146349b60ae7273847543b8d8a74c94718a5bc9668e146262d7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cacd88d75aa8f2866e50f243fd0448cccd9463c062721afa1d3d63ba63ebb602->leave($__internal_cacd88d75aa8f2866e50f243fd0448cccd9463c062721afa1d3d63ba63ebb602_prof);

        
        $__internal_a103f3c835d146349b60ae7273847543b8d8a74c94718a5bc9668e146262d7fc->leave($__internal_a103f3c835d146349b60ae7273847543b8d8a74c94718a5bc9668e146262d7fc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e11ad9960ce404e86a4b1ba6036a8cdc196efaf4c63ffba0fe6269801036eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e11ad9960ce404e86a4b1ba6036a8cdc196efaf4c63ffba0fe6269801036eb0->enter($__internal_3e11ad9960ce404e86a4b1ba6036a8cdc196efaf4c63ffba0fe6269801036eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8237705734da9b0bf4d2ee1a301b7d56ccf8cd6f6144a964d9db576b03aa0c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8237705734da9b0bf4d2ee1a301b7d56ccf8cd6f6144a964d9db576b03aa0c12->enter($__internal_8237705734da9b0bf4d2ee1a301b7d56ccf8cd6f6144a964d9db576b03aa0c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8237705734da9b0bf4d2ee1a301b7d56ccf8cd6f6144a964d9db576b03aa0c12->leave($__internal_8237705734da9b0bf4d2ee1a301b7d56ccf8cd6f6144a964d9db576b03aa0c12_prof);

        
        $__internal_3e11ad9960ce404e86a4b1ba6036a8cdc196efaf4c63ffba0fe6269801036eb0->leave($__internal_3e11ad9960ce404e86a4b1ba6036a8cdc196efaf4c63ffba0fe6269801036eb0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_28e82b93d9a5fb2f40106db6cb52d92897a0b5048b5d83d67191f123040188be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e82b93d9a5fb2f40106db6cb52d92897a0b5048b5d83d67191f123040188be->enter($__internal_28e82b93d9a5fb2f40106db6cb52d92897a0b5048b5d83d67191f123040188be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19be59f6931dd7ddf32430f17047c06677258d3d60d719af59ace210fb3b396c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19be59f6931dd7ddf32430f17047c06677258d3d60d719af59ace210fb3b396c->enter($__internal_19be59f6931dd7ddf32430f17047c06677258d3d60d719af59ace210fb3b396c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_19be59f6931dd7ddf32430f17047c06677258d3d60d719af59ace210fb3b396c->leave($__internal_19be59f6931dd7ddf32430f17047c06677258d3d60d719af59ace210fb3b396c_prof);

        
        $__internal_28e82b93d9a5fb2f40106db6cb52d92897a0b5048b5d83d67191f123040188be->leave($__internal_28e82b93d9a5fb2f40106db6cb52d92897a0b5048b5d83d67191f123040188be_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_dda88e2ddd31c8f53d4cbcf8481793592a399d97d6956980ba304c96a7fd3562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda88e2ddd31c8f53d4cbcf8481793592a399d97d6956980ba304c96a7fd3562->enter($__internal_dda88e2ddd31c8f53d4cbcf8481793592a399d97d6956980ba304c96a7fd3562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc57649e60161768e4b9aa1179c070e6c8dfb68d9980e9958e67a02f5010b38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc57649e60161768e4b9aa1179c070e6c8dfb68d9980e9958e67a02f5010b38d->enter($__internal_bc57649e60161768e4b9aa1179c070e6c8dfb68d9980e9958e67a02f5010b38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bc57649e60161768e4b9aa1179c070e6c8dfb68d9980e9958e67a02f5010b38d->leave($__internal_bc57649e60161768e4b9aa1179c070e6c8dfb68d9980e9958e67a02f5010b38d_prof);

        
        $__internal_dda88e2ddd31c8f53d4cbcf8481793592a399d97d6956980ba304c96a7fd3562->leave($__internal_dda88e2ddd31c8f53d4cbcf8481793592a399d97d6956980ba304c96a7fd3562_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
