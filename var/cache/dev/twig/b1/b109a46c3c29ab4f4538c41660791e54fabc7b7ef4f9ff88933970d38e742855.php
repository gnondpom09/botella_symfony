<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_2e7ab44003dc861383d91a70360ccfb22efe7a6bd675f57a1efb26ca2f962562 extends Twig_Template
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
        $__internal_7e9ad9f070001b03ed7ccadbc8a8051ee47353a31e09874600a967e2574d03fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9ad9f070001b03ed7ccadbc8a8051ee47353a31e09874600a967e2574d03fd->enter($__internal_7e9ad9f070001b03ed7ccadbc8a8051ee47353a31e09874600a967e2574d03fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_83cdf9ca2da18029d7855a1cace64177153f502958ce071480bb3f3b7b7b2c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cdf9ca2da18029d7855a1cace64177153f502958ce071480bb3f3b7b7b2c0b->enter($__internal_83cdf9ca2da18029d7855a1cace64177153f502958ce071480bb3f3b7b7b2c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7e9ad9f070001b03ed7ccadbc8a8051ee47353a31e09874600a967e2574d03fd->leave($__internal_7e9ad9f070001b03ed7ccadbc8a8051ee47353a31e09874600a967e2574d03fd_prof);

        
        $__internal_83cdf9ca2da18029d7855a1cace64177153f502958ce071480bb3f3b7b7b2c0b->leave($__internal_83cdf9ca2da18029d7855a1cace64177153f502958ce071480bb3f3b7b7b2c0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
