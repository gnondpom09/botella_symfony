<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ca62ae5cdd8524b829712eadb070aa18b9fafcdf862dd67531b303926c0e3aca extends Twig_Template
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
        $__internal_7b4265189bb858d63f5f9a208f1890e97f0cd6ed617faea7ee5eb54cec355043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4265189bb858d63f5f9a208f1890e97f0cd6ed617faea7ee5eb54cec355043->enter($__internal_7b4265189bb858d63f5f9a208f1890e97f0cd6ed617faea7ee5eb54cec355043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4056878d1b640f9c83c7074e180f30c92b84edfa2ad4d1bb7701053b4f57fd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4056878d1b640f9c83c7074e180f30c92b84edfa2ad4d1bb7701053b4f57fd84->enter($__internal_4056878d1b640f9c83c7074e180f30c92b84edfa2ad4d1bb7701053b4f57fd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7b4265189bb858d63f5f9a208f1890e97f0cd6ed617faea7ee5eb54cec355043->leave($__internal_7b4265189bb858d63f5f9a208f1890e97f0cd6ed617faea7ee5eb54cec355043_prof);

        
        $__internal_4056878d1b640f9c83c7074e180f30c92b84edfa2ad4d1bb7701053b4f57fd84->leave($__internal_4056878d1b640f9c83c7074e180f30c92b84edfa2ad4d1bb7701053b4f57fd84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
