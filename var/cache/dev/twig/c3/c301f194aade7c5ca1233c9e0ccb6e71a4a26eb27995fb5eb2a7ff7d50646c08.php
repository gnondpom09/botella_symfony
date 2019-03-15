<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7a378f78f6449f746ae3003d6a64220becc764bc9467e5e3c09d4ec68db9cc74 extends Twig_Template
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
        $__internal_c93bdc1b6fd4258b47cdc51890bc300082c395566e32d638dfa9e4235afb0cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93bdc1b6fd4258b47cdc51890bc300082c395566e32d638dfa9e4235afb0cd0->enter($__internal_c93bdc1b6fd4258b47cdc51890bc300082c395566e32d638dfa9e4235afb0cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_a4b4d061e583ef2bcc060dc254970737cdbebcde7ce8ce50e24c26cd5bc24a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b4d061e583ef2bcc060dc254970737cdbebcde7ce8ce50e24c26cd5bc24a19->enter($__internal_a4b4d061e583ef2bcc060dc254970737cdbebcde7ce8ce50e24c26cd5bc24a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c93bdc1b6fd4258b47cdc51890bc300082c395566e32d638dfa9e4235afb0cd0->leave($__internal_c93bdc1b6fd4258b47cdc51890bc300082c395566e32d638dfa9e4235afb0cd0_prof);

        
        $__internal_a4b4d061e583ef2bcc060dc254970737cdbebcde7ce8ce50e24c26cd5bc24a19->leave($__internal_a4b4d061e583ef2bcc060dc254970737cdbebcde7ce8ce50e24c26cd5bc24a19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
