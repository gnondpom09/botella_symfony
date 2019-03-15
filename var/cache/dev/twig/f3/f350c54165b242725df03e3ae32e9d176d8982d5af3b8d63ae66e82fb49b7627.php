<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6345b9a229c59d32a6438fb9b06336ec4df8ce4b96e430931cffc1106f2e4e97 extends Twig_Template
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
        $__internal_85d5518511675f0a1f5c58f3060117dfdec0142e19ff40cb62b4ca3dbd538000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d5518511675f0a1f5c58f3060117dfdec0142e19ff40cb62b4ca3dbd538000->enter($__internal_85d5518511675f0a1f5c58f3060117dfdec0142e19ff40cb62b4ca3dbd538000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2a4e50d1d3dacbfd0d365a350c9e24cdda7d2c8ea84066f3e46175cbb9ddca15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4e50d1d3dacbfd0d365a350c9e24cdda7d2c8ea84066f3e46175cbb9ddca15->enter($__internal_2a4e50d1d3dacbfd0d365a350c9e24cdda7d2c8ea84066f3e46175cbb9ddca15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_85d5518511675f0a1f5c58f3060117dfdec0142e19ff40cb62b4ca3dbd538000->leave($__internal_85d5518511675f0a1f5c58f3060117dfdec0142e19ff40cb62b4ca3dbd538000_prof);

        
        $__internal_2a4e50d1d3dacbfd0d365a350c9e24cdda7d2c8ea84066f3e46175cbb9ddca15->leave($__internal_2a4e50d1d3dacbfd0d365a350c9e24cdda7d2c8ea84066f3e46175cbb9ddca15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
