<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_529cbeb72dcdf32bf312a0ea147c6e74336b68fd9e650fafae0e2d0fe72da4ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_2d2604b774a8bb33c37e28ebd5cbd01d1476cb20c9850f77cdc6de60945a9e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2604b774a8bb33c37e28ebd5cbd01d1476cb20c9850f77cdc6de60945a9e05->enter($__internal_2d2604b774a8bb33c37e28ebd5cbd01d1476cb20c9850f77cdc6de60945a9e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9a763b91a2eb2393bdae4bc8073eece9db222859e2ffbfd62a78b677fa05c9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a763b91a2eb2393bdae4bc8073eece9db222859e2ffbfd62a78b677fa05c9b0->enter($__internal_9a763b91a2eb2393bdae4bc8073eece9db222859e2ffbfd62a78b677fa05c9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d2604b774a8bb33c37e28ebd5cbd01d1476cb20c9850f77cdc6de60945a9e05->leave($__internal_2d2604b774a8bb33c37e28ebd5cbd01d1476cb20c9850f77cdc6de60945a9e05_prof);

        
        $__internal_9a763b91a2eb2393bdae4bc8073eece9db222859e2ffbfd62a78b677fa05c9b0->leave($__internal_9a763b91a2eb2393bdae4bc8073eece9db222859e2ffbfd62a78b677fa05c9b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d865dff1827b71e66823c5e78c0c9e705c45c46cdb0ed7656bfc884ce3bbf7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d865dff1827b71e66823c5e78c0c9e705c45c46cdb0ed7656bfc884ce3bbf7c->enter($__internal_2d865dff1827b71e66823c5e78c0c9e705c45c46cdb0ed7656bfc884ce3bbf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f22e8b8765a09b2c33ed3d701407a886ff18fc7a7ca435a92e2f4d2342216cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22e8b8765a09b2c33ed3d701407a886ff18fc7a7ca435a92e2f4d2342216cb5->enter($__internal_f22e8b8765a09b2c33ed3d701407a886ff18fc7a7ca435a92e2f4d2342216cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f22e8b8765a09b2c33ed3d701407a886ff18fc7a7ca435a92e2f4d2342216cb5->leave($__internal_f22e8b8765a09b2c33ed3d701407a886ff18fc7a7ca435a92e2f4d2342216cb5_prof);

        
        $__internal_2d865dff1827b71e66823c5e78c0c9e705c45c46cdb0ed7656bfc884ce3bbf7c->leave($__internal_2d865dff1827b71e66823c5e78c0c9e705c45c46cdb0ed7656bfc884ce3bbf7c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
