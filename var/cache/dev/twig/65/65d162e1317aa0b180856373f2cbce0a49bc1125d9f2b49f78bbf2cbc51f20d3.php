<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f3dbc4680563fc20d0f56968621e8515a0943d71d71139c8564e120522b6f795 extends Twig_Template
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
        $__internal_7d8ab3708e79f29e20ca163569c8c5bce57784066b2d4fcfd67cb3c3152f6bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8ab3708e79f29e20ca163569c8c5bce57784066b2d4fcfd67cb3c3152f6bb8->enter($__internal_7d8ab3708e79f29e20ca163569c8c5bce57784066b2d4fcfd67cb3c3152f6bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3501306519358a803f576f3175f5a3eedbc65def65e6d70b3c318be4e835e7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3501306519358a803f576f3175f5a3eedbc65def65e6d70b3c318be4e835e7ef->enter($__internal_3501306519358a803f576f3175f5a3eedbc65def65e6d70b3c318be4e835e7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7d8ab3708e79f29e20ca163569c8c5bce57784066b2d4fcfd67cb3c3152f6bb8->leave($__internal_7d8ab3708e79f29e20ca163569c8c5bce57784066b2d4fcfd67cb3c3152f6bb8_prof);

        
        $__internal_3501306519358a803f576f3175f5a3eedbc65def65e6d70b3c318be4e835e7ef->leave($__internal_3501306519358a803f576f3175f5a3eedbc65def65e6d70b3c318be4e835e7ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
