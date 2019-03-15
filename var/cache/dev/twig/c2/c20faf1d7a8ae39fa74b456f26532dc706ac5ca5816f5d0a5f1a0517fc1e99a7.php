<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a7f5e08d53e4c3b3ec0bebae927dcb6eef934298b1a5c18c9caeb518c38b62d9 extends Twig_Template
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
        $__internal_66167fbbf94d013ddd92f6294dd8a6f35cb7f63a67e190b4905ff0fc32bff200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66167fbbf94d013ddd92f6294dd8a6f35cb7f63a67e190b4905ff0fc32bff200->enter($__internal_66167fbbf94d013ddd92f6294dd8a6f35cb7f63a67e190b4905ff0fc32bff200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_00fdbb5146a6c50cef0c8f2b93abf38c58e8fc6384da6c6c7c2d0511c2660919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fdbb5146a6c50cef0c8f2b93abf38c58e8fc6384da6c6c7c2d0511c2660919->enter($__internal_00fdbb5146a6c50cef0c8f2b93abf38c58e8fc6384da6c6c7c2d0511c2660919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_66167fbbf94d013ddd92f6294dd8a6f35cb7f63a67e190b4905ff0fc32bff200->leave($__internal_66167fbbf94d013ddd92f6294dd8a6f35cb7f63a67e190b4905ff0fc32bff200_prof);

        
        $__internal_00fdbb5146a6c50cef0c8f2b93abf38c58e8fc6384da6c6c7c2d0511c2660919->leave($__internal_00fdbb5146a6c50cef0c8f2b93abf38c58e8fc6384da6c6c7c2d0511c2660919_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
