<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9f1f4ecf93569d56084c2103d2b77c4378151c4cf8b4fd72359a0e0ebefeafe6 extends Twig_Template
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
        $__internal_9c08f46424d2af861f4003669d19e93b175f1793f9f0aa5a0816a1cebd27d8d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c08f46424d2af861f4003669d19e93b175f1793f9f0aa5a0816a1cebd27d8d4->enter($__internal_9c08f46424d2af861f4003669d19e93b175f1793f9f0aa5a0816a1cebd27d8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_194083c59af06e11e12b841f67a042719557236d0ee5ef058b6954882542d27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194083c59af06e11e12b841f67a042719557236d0ee5ef058b6954882542d27e->enter($__internal_194083c59af06e11e12b841f67a042719557236d0ee5ef058b6954882542d27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_9c08f46424d2af861f4003669d19e93b175f1793f9f0aa5a0816a1cebd27d8d4->leave($__internal_9c08f46424d2af861f4003669d19e93b175f1793f9f0aa5a0816a1cebd27d8d4_prof);

        
        $__internal_194083c59af06e11e12b841f67a042719557236d0ee5ef058b6954882542d27e->leave($__internal_194083c59af06e11e12b841f67a042719557236d0ee5ef058b6954882542d27e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
