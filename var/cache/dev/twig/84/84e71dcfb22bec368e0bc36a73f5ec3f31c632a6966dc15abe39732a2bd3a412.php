<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fd7f4d71f8ac3e4401fa9822dc17d36493a2828d39e6ba9af33aee32f6bd53c8 extends Twig_Template
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
        $__internal_5abe9a2c33d763ebbf625fed16cda9cfdfe398d4ac8adea40857f9508c30184c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abe9a2c33d763ebbf625fed16cda9cfdfe398d4ac8adea40857f9508c30184c->enter($__internal_5abe9a2c33d763ebbf625fed16cda9cfdfe398d4ac8adea40857f9508c30184c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c62c4678ba1ec8fc16b30713c4889de04f544fa34b58fe8a5669aec7c93b1a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62c4678ba1ec8fc16b30713c4889de04f544fa34b58fe8a5669aec7c93b1a5e->enter($__internal_c62c4678ba1ec8fc16b30713c4889de04f544fa34b58fe8a5669aec7c93b1a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5abe9a2c33d763ebbf625fed16cda9cfdfe398d4ac8adea40857f9508c30184c->leave($__internal_5abe9a2c33d763ebbf625fed16cda9cfdfe398d4ac8adea40857f9508c30184c_prof);

        
        $__internal_c62c4678ba1ec8fc16b30713c4889de04f544fa34b58fe8a5669aec7c93b1a5e->leave($__internal_c62c4678ba1ec8fc16b30713c4889de04f544fa34b58fe8a5669aec7c93b1a5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
