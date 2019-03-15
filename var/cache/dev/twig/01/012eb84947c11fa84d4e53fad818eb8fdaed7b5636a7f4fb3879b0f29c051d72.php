<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_67dda2b1c162a705a804ec45c402ffb909e483521afac7edbd49b000af24a272 extends Twig_Template
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
        $__internal_b255d2efa84ff8670c3a8fa1488c800d5f7d4446cee78f492aa97a1a07b3d3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b255d2efa84ff8670c3a8fa1488c800d5f7d4446cee78f492aa97a1a07b3d3ae->enter($__internal_b255d2efa84ff8670c3a8fa1488c800d5f7d4446cee78f492aa97a1a07b3d3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a264f87233c26eac57d5fc9310334f529c593e8dc76148a577f59887a33adf61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a264f87233c26eac57d5fc9310334f529c593e8dc76148a577f59887a33adf61->enter($__internal_a264f87233c26eac57d5fc9310334f529c593e8dc76148a577f59887a33adf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b255d2efa84ff8670c3a8fa1488c800d5f7d4446cee78f492aa97a1a07b3d3ae->leave($__internal_b255d2efa84ff8670c3a8fa1488c800d5f7d4446cee78f492aa97a1a07b3d3ae_prof);

        
        $__internal_a264f87233c26eac57d5fc9310334f529c593e8dc76148a577f59887a33adf61->leave($__internal_a264f87233c26eac57d5fc9310334f529c593e8dc76148a577f59887a33adf61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
