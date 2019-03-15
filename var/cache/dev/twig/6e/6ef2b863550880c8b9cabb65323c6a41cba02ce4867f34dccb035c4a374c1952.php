<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9b9f1d51099ac8126abd87d816e93d57d235e08122a769f76a1bc68def51f127 extends Twig_Template
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
        $__internal_25f24f39d86960f08cf83c10ec1934b387c62def9956eb54f580bfa43f992614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f24f39d86960f08cf83c10ec1934b387c62def9956eb54f580bfa43f992614->enter($__internal_25f24f39d86960f08cf83c10ec1934b387c62def9956eb54f580bfa43f992614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cea168f9f71fa57bcc803088b079b9a9c796f1d79f045efc267b7ce5d4012531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea168f9f71fa57bcc803088b079b9a9c796f1d79f045efc267b7ce5d4012531->enter($__internal_cea168f9f71fa57bcc803088b079b9a9c796f1d79f045efc267b7ce5d4012531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_25f24f39d86960f08cf83c10ec1934b387c62def9956eb54f580bfa43f992614->leave($__internal_25f24f39d86960f08cf83c10ec1934b387c62def9956eb54f580bfa43f992614_prof);

        
        $__internal_cea168f9f71fa57bcc803088b079b9a9c796f1d79f045efc267b7ce5d4012531->leave($__internal_cea168f9f71fa57bcc803088b079b9a9c796f1d79f045efc267b7ce5d4012531_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
