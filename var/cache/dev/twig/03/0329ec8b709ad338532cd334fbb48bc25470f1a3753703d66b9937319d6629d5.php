<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7323d476f9469c5128a7316d645120c09567e66e251c63abb52239e168880530 extends Twig_Template
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
        $__internal_920018dad64ffc9ff3e96ecc05e4997fcc0f5d6787d20192ac0e4e919bf0f4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920018dad64ffc9ff3e96ecc05e4997fcc0f5d6787d20192ac0e4e919bf0f4dd->enter($__internal_920018dad64ffc9ff3e96ecc05e4997fcc0f5d6787d20192ac0e4e919bf0f4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_90d474ad74467860e876d7b911711e5596819975586c1248bae7885a97fe36a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d474ad74467860e876d7b911711e5596819975586c1248bae7885a97fe36a6->enter($__internal_90d474ad74467860e876d7b911711e5596819975586c1248bae7885a97fe36a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_920018dad64ffc9ff3e96ecc05e4997fcc0f5d6787d20192ac0e4e919bf0f4dd->leave($__internal_920018dad64ffc9ff3e96ecc05e4997fcc0f5d6787d20192ac0e4e919bf0f4dd_prof);

        
        $__internal_90d474ad74467860e876d7b911711e5596819975586c1248bae7885a97fe36a6->leave($__internal_90d474ad74467860e876d7b911711e5596819975586c1248bae7885a97fe36a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
