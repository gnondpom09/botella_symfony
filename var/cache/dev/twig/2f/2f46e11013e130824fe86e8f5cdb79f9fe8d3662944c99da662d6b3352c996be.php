<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1e13c40454134db750135f25a4d78b75f0a6cb68d947d6805c392a1ef958659f extends Twig_Template
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
        $__internal_3964b5d274dc0a0225c0f04861f7cca347aaf92527e643824561869851b74598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3964b5d274dc0a0225c0f04861f7cca347aaf92527e643824561869851b74598->enter($__internal_3964b5d274dc0a0225c0f04861f7cca347aaf92527e643824561869851b74598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0be789364f6874bf2d476e24b63e0b6adb32aa0d740a8e8fc4e23e432f7db1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be789364f6874bf2d476e24b63e0b6adb32aa0d740a8e8fc4e23e432f7db1df->enter($__internal_0be789364f6874bf2d476e24b63e0b6adb32aa0d740a8e8fc4e23e432f7db1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3964b5d274dc0a0225c0f04861f7cca347aaf92527e643824561869851b74598->leave($__internal_3964b5d274dc0a0225c0f04861f7cca347aaf92527e643824561869851b74598_prof);

        
        $__internal_0be789364f6874bf2d476e24b63e0b6adb32aa0d740a8e8fc4e23e432f7db1df->leave($__internal_0be789364f6874bf2d476e24b63e0b6adb32aa0d740a8e8fc4e23e432f7db1df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
