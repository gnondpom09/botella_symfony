<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d38be9daee816618b8662238779cbab805f2e030bf53495e9f39d8b25285740f extends Twig_Template
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
        $__internal_b80d322ec5e927028f03c8a4ee78dc41694df3d6c319be6c962d6d13d061680b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80d322ec5e927028f03c8a4ee78dc41694df3d6c319be6c962d6d13d061680b->enter($__internal_b80d322ec5e927028f03c8a4ee78dc41694df3d6c319be6c962d6d13d061680b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_87295a914367dfd38cd4cf3291a701b9b23ba552a591f67e06e75715167fbf31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87295a914367dfd38cd4cf3291a701b9b23ba552a591f67e06e75715167fbf31->enter($__internal_87295a914367dfd38cd4cf3291a701b9b23ba552a591f67e06e75715167fbf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b80d322ec5e927028f03c8a4ee78dc41694df3d6c319be6c962d6d13d061680b->leave($__internal_b80d322ec5e927028f03c8a4ee78dc41694df3d6c319be6c962d6d13d061680b_prof);

        
        $__internal_87295a914367dfd38cd4cf3291a701b9b23ba552a591f67e06e75715167fbf31->leave($__internal_87295a914367dfd38cd4cf3291a701b9b23ba552a591f67e06e75715167fbf31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
