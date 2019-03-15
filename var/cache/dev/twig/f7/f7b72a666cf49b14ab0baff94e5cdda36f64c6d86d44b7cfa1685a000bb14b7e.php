<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_81561cd895801615cefaa548cf3a21cdc1e7b993a07e69816fd119705675aa93 extends Twig_Template
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
        $__internal_89ac7b97541b3c10398cf288a935caf936d666179b9f4f21cfeabb3d03e5ab2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ac7b97541b3c10398cf288a935caf936d666179b9f4f21cfeabb3d03e5ab2e->enter($__internal_89ac7b97541b3c10398cf288a935caf936d666179b9f4f21cfeabb3d03e5ab2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_cfd7d0890cdc6a56c1bba4e250098df8660ab2742608d7c2ebfd88152eac8e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd7d0890cdc6a56c1bba4e250098df8660ab2742608d7c2ebfd88152eac8e0e->enter($__internal_cfd7d0890cdc6a56c1bba4e250098df8660ab2742608d7c2ebfd88152eac8e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_89ac7b97541b3c10398cf288a935caf936d666179b9f4f21cfeabb3d03e5ab2e->leave($__internal_89ac7b97541b3c10398cf288a935caf936d666179b9f4f21cfeabb3d03e5ab2e_prof);

        
        $__internal_cfd7d0890cdc6a56c1bba4e250098df8660ab2742608d7c2ebfd88152eac8e0e->leave($__internal_cfd7d0890cdc6a56c1bba4e250098df8660ab2742608d7c2ebfd88152eac8e0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
