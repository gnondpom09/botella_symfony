<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7187ccd281e8405b85f09d5c0a9a0a3265871d1aafc5e29cff1d3b33787607f6 extends Twig_Template
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
        $__internal_0fbf6b7503b10a058b946fa5507c180e7b887f1d05525dff26e66b6420a13ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fbf6b7503b10a058b946fa5507c180e7b887f1d05525dff26e66b6420a13ee4->enter($__internal_0fbf6b7503b10a058b946fa5507c180e7b887f1d05525dff26e66b6420a13ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_cb1f7fcc5d1b1d4faa77c26351fbb1508e6b07e2dce852c3833bb12f86c7cb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1f7fcc5d1b1d4faa77c26351fbb1508e6b07e2dce852c3833bb12f86c7cb92->enter($__internal_cb1f7fcc5d1b1d4faa77c26351fbb1508e6b07e2dce852c3833bb12f86c7cb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0fbf6b7503b10a058b946fa5507c180e7b887f1d05525dff26e66b6420a13ee4->leave($__internal_0fbf6b7503b10a058b946fa5507c180e7b887f1d05525dff26e66b6420a13ee4_prof);

        
        $__internal_cb1f7fcc5d1b1d4faa77c26351fbb1508e6b07e2dce852c3833bb12f86c7cb92->leave($__internal_cb1f7fcc5d1b1d4faa77c26351fbb1508e6b07e2dce852c3833bb12f86c7cb92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
