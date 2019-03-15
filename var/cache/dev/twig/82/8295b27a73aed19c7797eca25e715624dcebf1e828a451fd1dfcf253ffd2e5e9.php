<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_060223d6b36ec1d4d0c2ed8e1ed8878537fc5773283bd38ed23b634d38f025af extends Twig_Template
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
        $__internal_098efeccb583648e4fefadc38c63a4e02a738002bb065cedb0ea07fac4642e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098efeccb583648e4fefadc38c63a4e02a738002bb065cedb0ea07fac4642e4a->enter($__internal_098efeccb583648e4fefadc38c63a4e02a738002bb065cedb0ea07fac4642e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3008afec25f5f46da39611107f4b652ebbabca7286f2fa72fc43c13b48c5dc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3008afec25f5f46da39611107f4b652ebbabca7286f2fa72fc43c13b48c5dc54->enter($__internal_3008afec25f5f46da39611107f4b652ebbabca7286f2fa72fc43c13b48c5dc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_098efeccb583648e4fefadc38c63a4e02a738002bb065cedb0ea07fac4642e4a->leave($__internal_098efeccb583648e4fefadc38c63a4e02a738002bb065cedb0ea07fac4642e4a_prof);

        
        $__internal_3008afec25f5f46da39611107f4b652ebbabca7286f2fa72fc43c13b48c5dc54->leave($__internal_3008afec25f5f46da39611107f4b652ebbabca7286f2fa72fc43c13b48c5dc54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
