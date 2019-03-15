<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_79889f502230514a80af45a8baf509962953ed37256f44dd468c051751e6a737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1124e01669d674ab9dafd98609bebab2f57af34372a43bafac1c24fcbbe6facc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1124e01669d674ab9dafd98609bebab2f57af34372a43bafac1c24fcbbe6facc->enter($__internal_1124e01669d674ab9dafd98609bebab2f57af34372a43bafac1c24fcbbe6facc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_0b9d2f2bef475be39deb70212e3c5f9a02f1ff60c3b12ed8a5fac584383bd195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9d2f2bef475be39deb70212e3c5f9a02f1ff60c3b12ed8a5fac584383bd195->enter($__internal_0b9d2f2bef475be39deb70212e3c5f9a02f1ff60c3b12ed8a5fac584383bd195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1124e01669d674ab9dafd98609bebab2f57af34372a43bafac1c24fcbbe6facc->leave($__internal_1124e01669d674ab9dafd98609bebab2f57af34372a43bafac1c24fcbbe6facc_prof);

        
        $__internal_0b9d2f2bef475be39deb70212e3c5f9a02f1ff60c3b12ed8a5fac584383bd195->leave($__internal_0b9d2f2bef475be39deb70212e3c5f9a02f1ff60c3b12ed8a5fac584383bd195_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a96d7f5c63af15d513fa6968481d67d0f4bc930c83af5d4ee1ba074e89b6ba70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96d7f5c63af15d513fa6968481d67d0f4bc930c83af5d4ee1ba074e89b6ba70->enter($__internal_a96d7f5c63af15d513fa6968481d67d0f4bc930c83af5d4ee1ba074e89b6ba70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_835bccc21081b9a40cf453cfb45dc12a8f57723085202f6b61a980402f10679f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835bccc21081b9a40cf453cfb45dc12a8f57723085202f6b61a980402f10679f->enter($__internal_835bccc21081b9a40cf453cfb45dc12a8f57723085202f6b61a980402f10679f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_835bccc21081b9a40cf453cfb45dc12a8f57723085202f6b61a980402f10679f->leave($__internal_835bccc21081b9a40cf453cfb45dc12a8f57723085202f6b61a980402f10679f_prof);

        
        $__internal_a96d7f5c63af15d513fa6968481d67d0f4bc930c83af5d4ee1ba074e89b6ba70->leave($__internal_a96d7f5c63af15d513fa6968481d67d0f4bc930c83af5d4ee1ba074e89b6ba70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
