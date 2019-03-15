<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2ba0f56f9b19d48b6fd3b1473c856c7adbf9078996062e107dc532644b28ffe6 extends Twig_Template
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
        $__internal_09ccb66d69604a03563593d1a2b4a2b81e4c703830e55463da535347167e1aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ccb66d69604a03563593d1a2b4a2b81e4c703830e55463da535347167e1aed->enter($__internal_09ccb66d69604a03563593d1a2b4a2b81e4c703830e55463da535347167e1aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_836d0a3613eeea4dfb00cc4b0bba16e5dad8c335e8c3143894ee59029b55f24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836d0a3613eeea4dfb00cc4b0bba16e5dad8c335e8c3143894ee59029b55f24d->enter($__internal_836d0a3613eeea4dfb00cc4b0bba16e5dad8c335e8c3143894ee59029b55f24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_09ccb66d69604a03563593d1a2b4a2b81e4c703830e55463da535347167e1aed->leave($__internal_09ccb66d69604a03563593d1a2b4a2b81e4c703830e55463da535347167e1aed_prof);

        
        $__internal_836d0a3613eeea4dfb00cc4b0bba16e5dad8c335e8c3143894ee59029b55f24d->leave($__internal_836d0a3613eeea4dfb00cc4b0bba16e5dad8c335e8c3143894ee59029b55f24d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
