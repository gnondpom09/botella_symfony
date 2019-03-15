<?php

/* ::base.html.twig */
class __TwigTemplate_022e5fbe7553c6a016dcf07c24e69cb5d15b6be45fa6378c7d9809f11e8f699d extends Twig_Template
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
        $__internal_ed260456d3ad3b491527ef1fa9febad74b4db3755f8e164ad6565d8e5c4acecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed260456d3ad3b491527ef1fa9febad74b4db3755f8e164ad6565d8e5c4acecf->enter($__internal_ed260456d3ad3b491527ef1fa9febad74b4db3755f8e164ad6565d8e5c4acecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fa27572489638231be0fc2cf5cd5171cdcf1d2de31c1d3fd1a47773787391bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa27572489638231be0fc2cf5cd5171cdcf1d2de31c1d3fd1a47773787391bda->enter($__internal_fa27572489638231be0fc2cf5cd5171cdcf1d2de31c1d3fd1a47773787391bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ed260456d3ad3b491527ef1fa9febad74b4db3755f8e164ad6565d8e5c4acecf->leave($__internal_ed260456d3ad3b491527ef1fa9febad74b4db3755f8e164ad6565d8e5c4acecf_prof);

        
        $__internal_fa27572489638231be0fc2cf5cd5171cdcf1d2de31c1d3fd1a47773787391bda->leave($__internal_fa27572489638231be0fc2cf5cd5171cdcf1d2de31c1d3fd1a47773787391bda_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b646c631de7bd75fdbe867dc5f36642b87e62cb47e2ef257e903b73d5a894cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b646c631de7bd75fdbe867dc5f36642b87e62cb47e2ef257e903b73d5a894cc->enter($__internal_2b646c631de7bd75fdbe867dc5f36642b87e62cb47e2ef257e903b73d5a894cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cebec10867a8f611bde7bd8e44c75516f7927dff907b9ee918a295d1a7aba1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebec10867a8f611bde7bd8e44c75516f7927dff907b9ee918a295d1a7aba1fb->enter($__internal_cebec10867a8f611bde7bd8e44c75516f7927dff907b9ee918a295d1a7aba1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cebec10867a8f611bde7bd8e44c75516f7927dff907b9ee918a295d1a7aba1fb->leave($__internal_cebec10867a8f611bde7bd8e44c75516f7927dff907b9ee918a295d1a7aba1fb_prof);

        
        $__internal_2b646c631de7bd75fdbe867dc5f36642b87e62cb47e2ef257e903b73d5a894cc->leave($__internal_2b646c631de7bd75fdbe867dc5f36642b87e62cb47e2ef257e903b73d5a894cc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6998facbc797cff9e088efdb96c76d9ffde6d2d92ffcaea2221f6a2181fb0636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6998facbc797cff9e088efdb96c76d9ffde6d2d92ffcaea2221f6a2181fb0636->enter($__internal_6998facbc797cff9e088efdb96c76d9ffde6d2d92ffcaea2221f6a2181fb0636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f962594f25244abe110adb2f48d8f0b6b26d3aa1c0ed12d684ef701eb9760a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f962594f25244abe110adb2f48d8f0b6b26d3aa1c0ed12d684ef701eb9760a0f->enter($__internal_f962594f25244abe110adb2f48d8f0b6b26d3aa1c0ed12d684ef701eb9760a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f962594f25244abe110adb2f48d8f0b6b26d3aa1c0ed12d684ef701eb9760a0f->leave($__internal_f962594f25244abe110adb2f48d8f0b6b26d3aa1c0ed12d684ef701eb9760a0f_prof);

        
        $__internal_6998facbc797cff9e088efdb96c76d9ffde6d2d92ffcaea2221f6a2181fb0636->leave($__internal_6998facbc797cff9e088efdb96c76d9ffde6d2d92ffcaea2221f6a2181fb0636_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_00815e53879b655211072b9396e2a0d42d78c4c4449918303928d4263b1a9c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00815e53879b655211072b9396e2a0d42d78c4c4449918303928d4263b1a9c3c->enter($__internal_00815e53879b655211072b9396e2a0d42d78c4c4449918303928d4263b1a9c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdc3ea2a91cb7a85c17fc40dbf82107435e6602e122c4b21ed378f50ff802a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc3ea2a91cb7a85c17fc40dbf82107435e6602e122c4b21ed378f50ff802a7a->enter($__internal_fdc3ea2a91cb7a85c17fc40dbf82107435e6602e122c4b21ed378f50ff802a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fdc3ea2a91cb7a85c17fc40dbf82107435e6602e122c4b21ed378f50ff802a7a->leave($__internal_fdc3ea2a91cb7a85c17fc40dbf82107435e6602e122c4b21ed378f50ff802a7a_prof);

        
        $__internal_00815e53879b655211072b9396e2a0d42d78c4c4449918303928d4263b1a9c3c->leave($__internal_00815e53879b655211072b9396e2a0d42d78c4c4449918303928d4263b1a9c3c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39577080a12f0f80fca3fbe23d898b8a4df53367da9133e63cf411d352db34cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39577080a12f0f80fca3fbe23d898b8a4df53367da9133e63cf411d352db34cd->enter($__internal_39577080a12f0f80fca3fbe23d898b8a4df53367da9133e63cf411d352db34cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dc8adaf0fb86c54bdc36226f4ebece12a57cea920b6333eeaefaf223e6f54d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8adaf0fb86c54bdc36226f4ebece12a57cea920b6333eeaefaf223e6f54d6c->enter($__internal_dc8adaf0fb86c54bdc36226f4ebece12a57cea920b6333eeaefaf223e6f54d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dc8adaf0fb86c54bdc36226f4ebece12a57cea920b6333eeaefaf223e6f54d6c->leave($__internal_dc8adaf0fb86c54bdc36226f4ebece12a57cea920b6333eeaefaf223e6f54d6c_prof);

        
        $__internal_39577080a12f0f80fca3fbe23d898b8a4df53367da9133e63cf411d352db34cd->leave($__internal_39577080a12f0f80fca3fbe23d898b8a4df53367da9133e63cf411d352db34cd_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/app_botella/app/Resources/views/base.html.twig");
    }
}
