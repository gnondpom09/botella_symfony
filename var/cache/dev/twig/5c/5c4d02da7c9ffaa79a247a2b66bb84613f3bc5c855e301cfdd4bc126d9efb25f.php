<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0e410e86d2c4b230deedbc2b3a2fa2c39320c62871f3607271754f8234fa2b11 extends Twig_Template
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
        $__internal_d0e97fdd1320528cd2a576b7d2ca587cc2c5dd265b8177d2cd20660b0f6cda45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e97fdd1320528cd2a576b7d2ca587cc2c5dd265b8177d2cd20660b0f6cda45->enter($__internal_d0e97fdd1320528cd2a576b7d2ca587cc2c5dd265b8177d2cd20660b0f6cda45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6518d4b2a867bfce31f5cd7db3420f570942b5d8818d7d0140a4f8eab5378c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6518d4b2a867bfce31f5cd7db3420f570942b5d8818d7d0140a4f8eab5378c2b->enter($__internal_6518d4b2a867bfce31f5cd7db3420f570942b5d8818d7d0140a4f8eab5378c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d0e97fdd1320528cd2a576b7d2ca587cc2c5dd265b8177d2cd20660b0f6cda45->leave($__internal_d0e97fdd1320528cd2a576b7d2ca587cc2c5dd265b8177d2cd20660b0f6cda45_prof);

        
        $__internal_6518d4b2a867bfce31f5cd7db3420f570942b5d8818d7d0140a4f8eab5378c2b->leave($__internal_6518d4b2a867bfce31f5cd7db3420f570942b5d8818d7d0140a4f8eab5378c2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
