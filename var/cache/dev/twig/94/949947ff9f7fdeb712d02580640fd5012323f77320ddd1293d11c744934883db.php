<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_d6a3721273b2d42a440b5508af7896cb36cefd04b8ab2ea8c4cd960032fe198c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1be02deb9c6a915e493c3f7b207d4248c9a37f11d246a78bd4a0e6f7baf1bc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be02deb9c6a915e493c3f7b207d4248c9a37f11d246a78bd4a0e6f7baf1bc06->enter($__internal_1be02deb9c6a915e493c3f7b207d4248c9a37f11d246a78bd4a0e6f7baf1bc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_1cbd0de1987e92b370fc017b9e6a6f0922956d37efe0349480167c67d47d7bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbd0de1987e92b370fc017b9e6a6f0922956d37efe0349480167c67d47d7bff->enter($__internal_1cbd0de1987e92b370fc017b9e6a6f0922956d37efe0349480167c67d47d7bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_1be02deb9c6a915e493c3f7b207d4248c9a37f11d246a78bd4a0e6f7baf1bc06->leave($__internal_1be02deb9c6a915e493c3f7b207d4248c9a37f11d246a78bd4a0e6f7baf1bc06_prof);

        
        $__internal_1cbd0de1987e92b370fc017b9e6a6f0922956d37efe0349480167c67d47d7bff->leave($__internal_1cbd0de1987e92b370fc017b9e6a6f0922956d37efe0349480167c67d47d7bff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_70d739091195d698b4d257b619499bb726dd868293482d85c297de39ef3549a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d739091195d698b4d257b619499bb726dd868293482d85c297de39ef3549a2->enter($__internal_70d739091195d698b4d257b619499bb726dd868293482d85c297de39ef3549a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f166f6763fa2f85948d3cc1e411cad19762b15aa664891580599fe968be01bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f166f6763fa2f85948d3cc1e411cad19762b15aa664891580599fe968be01bf->enter($__internal_3f166f6763fa2f85948d3cc1e411cad19762b15aa664891580599fe968be01bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_3f166f6763fa2f85948d3cc1e411cad19762b15aa664891580599fe968be01bf->leave($__internal_3f166f6763fa2f85948d3cc1e411cad19762b15aa664891580599fe968be01bf_prof);

        
        $__internal_70d739091195d698b4d257b619499bb726dd868293482d85c297de39ef3549a2->leave($__internal_70d739091195d698b4d257b619499bb726dd868293482d85c297de39ef3549a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71221f72997d1d52211411057371cded7d32d30af3d7bd4320a79dc7439d7881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71221f72997d1d52211411057371cded7d32d30af3d7bd4320a79dc7439d7881->enter($__internal_71221f72997d1d52211411057371cded7d32d30af3d7bd4320a79dc7439d7881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bc9f77dbaaf942a328153eb933bdb25dd39686e6959a71d05d2539166ff30bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9f77dbaaf942a328153eb933bdb25dd39686e6959a71d05d2539166ff30bd8->enter($__internal_bc9f77dbaaf942a328153eb933bdb25dd39686e6959a71d05d2539166ff30bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_bc9f77dbaaf942a328153eb933bdb25dd39686e6959a71d05d2539166ff30bd8->leave($__internal_bc9f77dbaaf942a328153eb933bdb25dd39686e6959a71d05d2539166ff30bd8_prof);

        
        $__internal_71221f72997d1d52211411057371cded7d32d30af3d7bd4320a79dc7439d7881->leave($__internal_71221f72997d1d52211411057371cded7d32d30af3d7bd4320a79dc7439d7881_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2194db4379c2d9a9bcc3d53c25a6b24185dfc804ddd6cb3733d41de9ec8c148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2194db4379c2d9a9bcc3d53c25a6b24185dfc804ddd6cb3733d41de9ec8c148->enter($__internal_a2194db4379c2d9a9bcc3d53c25a6b24185dfc804ddd6cb3733d41de9ec8c148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b4a6cdd2b1743202d7d86c761bd1e73aaccf5c681366afd7a0dc3d7509218b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4a6cdd2b1743202d7d86c761bd1e73aaccf5c681366afd7a0dc3d7509218b4->enter($__internal_5b4a6cdd2b1743202d7d86c761bd1e73aaccf5c681366afd7a0dc3d7509218b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_5b4a6cdd2b1743202d7d86c761bd1e73aaccf5c681366afd7a0dc3d7509218b4->leave($__internal_5b4a6cdd2b1743202d7d86c761bd1e73aaccf5c681366afd7a0dc3d7509218b4_prof);

        
        $__internal_a2194db4379c2d9a9bcc3d53c25a6b24185dfc804ddd6cb3733d41de9ec8c148->leave($__internal_a2194db4379c2d9a9bcc3d53c25a6b24185dfc804ddd6cb3733d41de9ec8c148_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2755b04f1335a76cc8b2b2482a6a7bc3cdf561541f8ea548463454a5de6cf28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2755b04f1335a76cc8b2b2482a6a7bc3cdf561541f8ea548463454a5de6cf28c->enter($__internal_2755b04f1335a76cc8b2b2482a6a7bc3cdf561541f8ea548463454a5de6cf28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_938349c0fe84b48b8b4326d17417ba3a6e2af8ae152049e827fbc6de6c511546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938349c0fe84b48b8b4326d17417ba3a6e2af8ae152049e827fbc6de6c511546->enter($__internal_938349c0fe84b48b8b4326d17417ba3a6e2af8ae152049e827fbc6de6c511546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_938349c0fe84b48b8b4326d17417ba3a6e2af8ae152049e827fbc6de6c511546->leave($__internal_938349c0fe84b48b8b4326d17417ba3a6e2af8ae152049e827fbc6de6c511546_prof);

        
        $__internal_2755b04f1335a76cc8b2b2482a6a7bc3cdf561541f8ea548463454a5de6cf28c->leave($__internal_2755b04f1335a76cc8b2b2482a6a7bc3cdf561541f8ea548463454a5de6cf28c_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
