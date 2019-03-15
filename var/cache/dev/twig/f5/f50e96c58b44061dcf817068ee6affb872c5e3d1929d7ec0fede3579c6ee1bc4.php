<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7c0eb4a933adb72ad8c55e92047cc9a227a3d982099fb8a08783c3f19e14eba6 extends Twig_Template
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
        $__internal_3a4e307970f2a0d96b47223833ff4db73c0d0a26173ff7d625cd1cf7873c4e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4e307970f2a0d96b47223833ff4db73c0d0a26173ff7d625cd1cf7873c4e38->enter($__internal_3a4e307970f2a0d96b47223833ff4db73c0d0a26173ff7d625cd1cf7873c4e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_6818570fb7f96ab7bdad86449a0278bed67ab712d67aba36a1203c8cdb0424ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6818570fb7f96ab7bdad86449a0278bed67ab712d67aba36a1203c8cdb0424ea->enter($__internal_6818570fb7f96ab7bdad86449a0278bed67ab712d67aba36a1203c8cdb0424ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3a4e307970f2a0d96b47223833ff4db73c0d0a26173ff7d625cd1cf7873c4e38->leave($__internal_3a4e307970f2a0d96b47223833ff4db73c0d0a26173ff7d625cd1cf7873c4e38_prof);

        
        $__internal_6818570fb7f96ab7bdad86449a0278bed67ab712d67aba36a1203c8cdb0424ea->leave($__internal_6818570fb7f96ab7bdad86449a0278bed67ab712d67aba36a1203c8cdb0424ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
