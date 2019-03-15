<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eb28aa22dd221e7ed5ae630ec1536d5bfc2f2d24fcecb21b5eb1b9da430709be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c20af12e1ed80b5d6b49eee941e7aabddfd588c531ffe02bdf56b805918ad9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c20af12e1ed80b5d6b49eee941e7aabddfd588c531ffe02bdf56b805918ad9a->enter($__internal_7c20af12e1ed80b5d6b49eee941e7aabddfd588c531ffe02bdf56b805918ad9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_05833b34912219f9b1580d5e8f3c0a9885e6f2c93a50599050aad90d9b264641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05833b34912219f9b1580d5e8f3c0a9885e6f2c93a50599050aad90d9b264641->enter($__internal_05833b34912219f9b1580d5e8f3c0a9885e6f2c93a50599050aad90d9b264641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7c20af12e1ed80b5d6b49eee941e7aabddfd588c531ffe02bdf56b805918ad9a->leave($__internal_7c20af12e1ed80b5d6b49eee941e7aabddfd588c531ffe02bdf56b805918ad9a_prof);

        
        $__internal_05833b34912219f9b1580d5e8f3c0a9885e6f2c93a50599050aad90d9b264641->leave($__internal_05833b34912219f9b1580d5e8f3c0a9885e6f2c93a50599050aad90d9b264641_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
