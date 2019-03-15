<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a9d39dd2e4992fe9825fd11c3a6b42aa3e3342977b90acc6d483f30dfbfae0f3 extends Twig_Template
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
        $__internal_a910707f7ca761f7ce437330190b5dd4743cef6c3fff51266d06f5852c645483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a910707f7ca761f7ce437330190b5dd4743cef6c3fff51266d06f5852c645483->enter($__internal_a910707f7ca761f7ce437330190b5dd4743cef6c3fff51266d06f5852c645483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_aa516326150bceaa7571201d82269d298f7c281765ade02847eb5d64f8540116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa516326150bceaa7571201d82269d298f7c281765ade02847eb5d64f8540116->enter($__internal_aa516326150bceaa7571201d82269d298f7c281765ade02847eb5d64f8540116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a910707f7ca761f7ce437330190b5dd4743cef6c3fff51266d06f5852c645483->leave($__internal_a910707f7ca761f7ce437330190b5dd4743cef6c3fff51266d06f5852c645483_prof);

        
        $__internal_aa516326150bceaa7571201d82269d298f7c281765ade02847eb5d64f8540116->leave($__internal_aa516326150bceaa7571201d82269d298f7c281765ade02847eb5d64f8540116_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
