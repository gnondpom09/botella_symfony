<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_5cba3f0edfb11a0c124c74a8900e841ba7e3355eb090fced5ed656ca13692c7c extends Twig_Template
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
        $__internal_46dbcfe72e9c8a1e4ea2eec67526bf8f9f630c082cbb084b1268a69853e349cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dbcfe72e9c8a1e4ea2eec67526bf8f9f630c082cbb084b1268a69853e349cf->enter($__internal_46dbcfe72e9c8a1e4ea2eec67526bf8f9f630c082cbb084b1268a69853e349cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_97f8df0526512f34a3575e4eedc414903abed42eff7ef2c2daf1b92f005b2cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f8df0526512f34a3575e4eedc414903abed42eff7ef2c2daf1b92f005b2cbe->enter($__internal_97f8df0526512f34a3575e4eedc414903abed42eff7ef2c2daf1b92f005b2cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_46dbcfe72e9c8a1e4ea2eec67526bf8f9f630c082cbb084b1268a69853e349cf->leave($__internal_46dbcfe72e9c8a1e4ea2eec67526bf8f9f630c082cbb084b1268a69853e349cf_prof);

        
        $__internal_97f8df0526512f34a3575e4eedc414903abed42eff7ef2c2daf1b92f005b2cbe->leave($__internal_97f8df0526512f34a3575e4eedc414903abed42eff7ef2c2daf1b92f005b2cbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
