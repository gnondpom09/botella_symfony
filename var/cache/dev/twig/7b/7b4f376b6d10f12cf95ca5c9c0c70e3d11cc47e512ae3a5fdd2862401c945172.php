<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_629e5dff37dc7490581bdb8e0e30699e97f8cb22485a74f2301dd94bc8f46489 extends Twig_Template
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
        $__internal_62e71bc5e3d2042e5d7f6b5e0178fdb59ab4b67245043e39c0a8756f77524333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e71bc5e3d2042e5d7f6b5e0178fdb59ab4b67245043e39c0a8756f77524333->enter($__internal_62e71bc5e3d2042e5d7f6b5e0178fdb59ab4b67245043e39c0a8756f77524333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a9271b85a72f2607a71800283621429521786f203eb7d90b7da1fb413f212c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9271b85a72f2607a71800283621429521786f203eb7d90b7da1fb413f212c5d->enter($__internal_a9271b85a72f2607a71800283621429521786f203eb7d90b7da1fb413f212c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_62e71bc5e3d2042e5d7f6b5e0178fdb59ab4b67245043e39c0a8756f77524333->leave($__internal_62e71bc5e3d2042e5d7f6b5e0178fdb59ab4b67245043e39c0a8756f77524333_prof);

        
        $__internal_a9271b85a72f2607a71800283621429521786f203eb7d90b7da1fb413f212c5d->leave($__internal_a9271b85a72f2607a71800283621429521786f203eb7d90b7da1fb413f212c5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
