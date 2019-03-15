<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_8f48836c284a4c6eee3bcdb602dc9ea8855e32e0222e62069ba235b86a2d5755 extends Twig_Template
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
        $__internal_1617fd5f734b368775f1041b89c240dd8cdc44b6351ee7426bb99135110d91c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1617fd5f734b368775f1041b89c240dd8cdc44b6351ee7426bb99135110d91c1->enter($__internal_1617fd5f734b368775f1041b89c240dd8cdc44b6351ee7426bb99135110d91c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_ec320a2832c4605277932ac87f7458a79d6fa416d40d0b5583d72da3431b07d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec320a2832c4605277932ac87f7458a79d6fa416d40d0b5583d72da3431b07d6->enter($__internal_ec320a2832c4605277932ac87f7458a79d6fa416d40d0b5583d72da3431b07d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1617fd5f734b368775f1041b89c240dd8cdc44b6351ee7426bb99135110d91c1->leave($__internal_1617fd5f734b368775f1041b89c240dd8cdc44b6351ee7426bb99135110d91c1_prof);

        
        $__internal_ec320a2832c4605277932ac87f7458a79d6fa416d40d0b5583d72da3431b07d6->leave($__internal_ec320a2832c4605277932ac87f7458a79d6fa416d40d0b5583d72da3431b07d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
