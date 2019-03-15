<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_793fcd2aed26a2b746548aa73c8cc7942f31c45e17af99a41450763a65fbf2ba extends Twig_Template
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
        $__internal_ce49850edb77a9cf8454b3cac20f2ea1887aa4ed08658a831c0c6d5657b2c826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce49850edb77a9cf8454b3cac20f2ea1887aa4ed08658a831c0c6d5657b2c826->enter($__internal_ce49850edb77a9cf8454b3cac20f2ea1887aa4ed08658a831c0c6d5657b2c826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ab2583825345a1b869bd7ade34d69410c2a0b763385e174a42ffd86643b385da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2583825345a1b869bd7ade34d69410c2a0b763385e174a42ffd86643b385da->enter($__internal_ab2583825345a1b869bd7ade34d69410c2a0b763385e174a42ffd86643b385da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ce49850edb77a9cf8454b3cac20f2ea1887aa4ed08658a831c0c6d5657b2c826->leave($__internal_ce49850edb77a9cf8454b3cac20f2ea1887aa4ed08658a831c0c6d5657b2c826_prof);

        
        $__internal_ab2583825345a1b869bd7ade34d69410c2a0b763385e174a42ffd86643b385da->leave($__internal_ab2583825345a1b869bd7ade34d69410c2a0b763385e174a42ffd86643b385da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
