<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b9298d63de88e61c4095f5a3476826fbc0e871a5cf9001afcbe5304d12bff0ae extends Twig_Template
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
        $__internal_acb9b9a3d520b51e67d8bc34ac6d6e63e5f8df4544b4392363b209b2c560de94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb9b9a3d520b51e67d8bc34ac6d6e63e5f8df4544b4392363b209b2c560de94->enter($__internal_acb9b9a3d520b51e67d8bc34ac6d6e63e5f8df4544b4392363b209b2c560de94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ef7339ee20938e82030521a21867f5f2eaac60f0ec253713ea8d7b5b332ced34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7339ee20938e82030521a21867f5f2eaac60f0ec253713ea8d7b5b332ced34->enter($__internal_ef7339ee20938e82030521a21867f5f2eaac60f0ec253713ea8d7b5b332ced34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_acb9b9a3d520b51e67d8bc34ac6d6e63e5f8df4544b4392363b209b2c560de94->leave($__internal_acb9b9a3d520b51e67d8bc34ac6d6e63e5f8df4544b4392363b209b2c560de94_prof);

        
        $__internal_ef7339ee20938e82030521a21867f5f2eaac60f0ec253713ea8d7b5b332ced34->leave($__internal_ef7339ee20938e82030521a21867f5f2eaac60f0ec253713ea8d7b5b332ced34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
