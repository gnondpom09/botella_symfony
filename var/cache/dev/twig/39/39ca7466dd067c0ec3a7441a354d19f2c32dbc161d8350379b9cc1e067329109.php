<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3849f3f434d274058228eabe55ac89fa0c2c41cdcf3d5141d105e80d61ae1d9f extends Twig_Template
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
        $__internal_f71e7fcc10a4437a08adde097fa45caf1d7302a8f089e9439d52fd6183218ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71e7fcc10a4437a08adde097fa45caf1d7302a8f089e9439d52fd6183218ab0->enter($__internal_f71e7fcc10a4437a08adde097fa45caf1d7302a8f089e9439d52fd6183218ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fd62e3f4dcf2c5ca39de1f0aed08e93f516a26adcb818f42939200e340bd3339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd62e3f4dcf2c5ca39de1f0aed08e93f516a26adcb818f42939200e340bd3339->enter($__internal_fd62e3f4dcf2c5ca39de1f0aed08e93f516a26adcb818f42939200e340bd3339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f71e7fcc10a4437a08adde097fa45caf1d7302a8f089e9439d52fd6183218ab0->leave($__internal_f71e7fcc10a4437a08adde097fa45caf1d7302a8f089e9439d52fd6183218ab0_prof);

        
        $__internal_fd62e3f4dcf2c5ca39de1f0aed08e93f516a26adcb818f42939200e340bd3339->leave($__internal_fd62e3f4dcf2c5ca39de1f0aed08e93f516a26adcb818f42939200e340bd3339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
