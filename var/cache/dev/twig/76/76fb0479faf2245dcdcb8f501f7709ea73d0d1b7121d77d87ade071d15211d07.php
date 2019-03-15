<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_540208acb6eb8e68f2ef3e007d7996a1eb047223c9fe99bdc16804a2f1c9db94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_ed26a007e49fdd6ddb3c422ddb1576323dbea1ed30342db9ab525bfe6230a429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed26a007e49fdd6ddb3c422ddb1576323dbea1ed30342db9ab525bfe6230a429->enter($__internal_ed26a007e49fdd6ddb3c422ddb1576323dbea1ed30342db9ab525bfe6230a429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_27c95b4c3d3a69c5be4a90499fc573ec445e33ac42588ed0e19cec7fc19d429b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c95b4c3d3a69c5be4a90499fc573ec445e33ac42588ed0e19cec7fc19d429b->enter($__internal_27c95b4c3d3a69c5be4a90499fc573ec445e33ac42588ed0e19cec7fc19d429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed26a007e49fdd6ddb3c422ddb1576323dbea1ed30342db9ab525bfe6230a429->leave($__internal_ed26a007e49fdd6ddb3c422ddb1576323dbea1ed30342db9ab525bfe6230a429_prof);

        
        $__internal_27c95b4c3d3a69c5be4a90499fc573ec445e33ac42588ed0e19cec7fc19d429b->leave($__internal_27c95b4c3d3a69c5be4a90499fc573ec445e33ac42588ed0e19cec7fc19d429b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efc2d288ec920ed493393a827adf93f56ae59d22926cfbd29fa10059b9d5b7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc2d288ec920ed493393a827adf93f56ae59d22926cfbd29fa10059b9d5b7f2->enter($__internal_efc2d288ec920ed493393a827adf93f56ae59d22926cfbd29fa10059b9d5b7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_efd8646c795098bfcab306443baa388cb87d64c05732f926a7c20360ae4aa2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd8646c795098bfcab306443baa388cb87d64c05732f926a7c20360ae4aa2b2->enter($__internal_efd8646c795098bfcab306443baa388cb87d64c05732f926a7c20360ae4aa2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_efd8646c795098bfcab306443baa388cb87d64c05732f926a7c20360ae4aa2b2->leave($__internal_efd8646c795098bfcab306443baa388cb87d64c05732f926a7c20360ae4aa2b2_prof);

        
        $__internal_efc2d288ec920ed493393a827adf93f56ae59d22926cfbd29fa10059b9d5b7f2->leave($__internal_efc2d288ec920ed493393a827adf93f56ae59d22926cfbd29fa10059b9d5b7f2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c5d58f3ed6c63a1cd85241c898f4987f4525ef112d407ca4364786a455682e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5d58f3ed6c63a1cd85241c898f4987f4525ef112d407ca4364786a455682e4->enter($__internal_3c5d58f3ed6c63a1cd85241c898f4987f4525ef112d407ca4364786a455682e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21969db7d4229b735fe28fa476bf73d1ab94fe708cedad32b75a0551b2ab4a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21969db7d4229b735fe28fa476bf73d1ab94fe708cedad32b75a0551b2ab4a9b->enter($__internal_21969db7d4229b735fe28fa476bf73d1ab94fe708cedad32b75a0551b2ab4a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_21969db7d4229b735fe28fa476bf73d1ab94fe708cedad32b75a0551b2ab4a9b->leave($__internal_21969db7d4229b735fe28fa476bf73d1ab94fe708cedad32b75a0551b2ab4a9b_prof);

        
        $__internal_3c5d58f3ed6c63a1cd85241c898f4987f4525ef112d407ca4364786a455682e4->leave($__internal_3c5d58f3ed6c63a1cd85241c898f4987f4525ef112d407ca4364786a455682e4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_43cd783ac3412baf86e6bd8b3c07e98136a3a39a42733cb295bd86654d0702bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cd783ac3412baf86e6bd8b3c07e98136a3a39a42733cb295bd86654d0702bc->enter($__internal_43cd783ac3412baf86e6bd8b3c07e98136a3a39a42733cb295bd86654d0702bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5c9d957a1f30e4cee4c4aa969d8216d3be1ec3c1d910cf6c259553467496234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c9d957a1f30e4cee4c4aa969d8216d3be1ec3c1d910cf6c259553467496234->enter($__internal_c5c9d957a1f30e4cee4c4aa969d8216d3be1ec3c1d910cf6c259553467496234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c5c9d957a1f30e4cee4c4aa969d8216d3be1ec3c1d910cf6c259553467496234->leave($__internal_c5c9d957a1f30e4cee4c4aa969d8216d3be1ec3c1d910cf6c259553467496234_prof);

        
        $__internal_43cd783ac3412baf86e6bd8b3c07e98136a3a39a42733cb295bd86654d0702bc->leave($__internal_43cd783ac3412baf86e6bd8b3c07e98136a3a39a42733cb295bd86654d0702bc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
