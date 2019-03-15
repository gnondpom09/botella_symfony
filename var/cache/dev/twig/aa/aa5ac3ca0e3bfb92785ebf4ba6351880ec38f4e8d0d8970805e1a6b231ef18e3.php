<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_291c3d4bd62c6797b3e472fcaefccafd2a3afdac8d4f89ad71f85e4e7e7d9ccf extends Twig_Template
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
        $__internal_99d78369e24527461cb7b33e57461a10cfd4bb8c644dd92276abc8da3af99355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d78369e24527461cb7b33e57461a10cfd4bb8c644dd92276abc8da3af99355->enter($__internal_99d78369e24527461cb7b33e57461a10cfd4bb8c644dd92276abc8da3af99355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e2075637bf2b5d79f0f1f5362208c5c2599794248ee582e625ed933b480ec74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2075637bf2b5d79f0f1f5362208c5c2599794248ee582e625ed933b480ec74d->enter($__internal_e2075637bf2b5d79f0f1f5362208c5c2599794248ee582e625ed933b480ec74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_99d78369e24527461cb7b33e57461a10cfd4bb8c644dd92276abc8da3af99355->leave($__internal_99d78369e24527461cb7b33e57461a10cfd4bb8c644dd92276abc8da3af99355_prof);

        
        $__internal_e2075637bf2b5d79f0f1f5362208c5c2599794248ee582e625ed933b480ec74d->leave($__internal_e2075637bf2b5d79f0f1f5362208c5c2599794248ee582e625ed933b480ec74d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
