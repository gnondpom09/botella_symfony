<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3433c28c6cac637fd71963105578c31278264eef042c20e758b6a9de83b5a312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5cfb902b08bce20dfdfcc3532c5af32a4cf083b371040e187b68dcc7cd78fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cfb902b08bce20dfdfcc3532c5af32a4cf083b371040e187b68dcc7cd78fec->enter($__internal_a5cfb902b08bce20dfdfcc3532c5af32a4cf083b371040e187b68dcc7cd78fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_8bfce294b9980aa3d35905927cafbedf11527650c4b2e495dd6fc6cae0278e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfce294b9980aa3d35905927cafbedf11527650c4b2e495dd6fc6cae0278e99->enter($__internal_8bfce294b9980aa3d35905927cafbedf11527650c4b2e495dd6fc6cae0278e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5cfb902b08bce20dfdfcc3532c5af32a4cf083b371040e187b68dcc7cd78fec->leave($__internal_a5cfb902b08bce20dfdfcc3532c5af32a4cf083b371040e187b68dcc7cd78fec_prof);

        
        $__internal_8bfce294b9980aa3d35905927cafbedf11527650c4b2e495dd6fc6cae0278e99->leave($__internal_8bfce294b9980aa3d35905927cafbedf11527650c4b2e495dd6fc6cae0278e99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb16e42aa6975fbe3bebd438cb4cfbd045368bf8445cd71d306bcff74d48ee3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb16e42aa6975fbe3bebd438cb4cfbd045368bf8445cd71d306bcff74d48ee3f->enter($__internal_bb16e42aa6975fbe3bebd438cb4cfbd045368bf8445cd71d306bcff74d48ee3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ee9d7679539e4435a768d9763d20b451fa2b697da43e014a3c66d49300860483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9d7679539e4435a768d9763d20b451fa2b697da43e014a3c66d49300860483->enter($__internal_ee9d7679539e4435a768d9763d20b451fa2b697da43e014a3c66d49300860483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ee9d7679539e4435a768d9763d20b451fa2b697da43e014a3c66d49300860483->leave($__internal_ee9d7679539e4435a768d9763d20b451fa2b697da43e014a3c66d49300860483_prof);

        
        $__internal_bb16e42aa6975fbe3bebd438cb4cfbd045368bf8445cd71d306bcff74d48ee3f->leave($__internal_bb16e42aa6975fbe3bebd438cb4cfbd045368bf8445cd71d306bcff74d48ee3f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
