<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_92c4c16fe90ae45b7e50bfe5aa01b5f6e01341dcb956b13f441361b68673d946 extends Twig_Template
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
        $__internal_9ed6e63ab12c61c924da964411d49c9acf8d3f93e17063367d353c951b08eb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed6e63ab12c61c924da964411d49c9acf8d3f93e17063367d353c951b08eb4d->enter($__internal_9ed6e63ab12c61c924da964411d49c9acf8d3f93e17063367d353c951b08eb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ba52a42bd20e90560cd844d155b5cf9db57ecc47bdbf1e2ea2fbd9a36ab91132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba52a42bd20e90560cd844d155b5cf9db57ecc47bdbf1e2ea2fbd9a36ab91132->enter($__internal_ba52a42bd20e90560cd844d155b5cf9db57ecc47bdbf1e2ea2fbd9a36ab91132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9ed6e63ab12c61c924da964411d49c9acf8d3f93e17063367d353c951b08eb4d->leave($__internal_9ed6e63ab12c61c924da964411d49c9acf8d3f93e17063367d353c951b08eb4d_prof);

        
        $__internal_ba52a42bd20e90560cd844d155b5cf9db57ecc47bdbf1e2ea2fbd9a36ab91132->leave($__internal_ba52a42bd20e90560cd844d155b5cf9db57ecc47bdbf1e2ea2fbd9a36ab91132_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
