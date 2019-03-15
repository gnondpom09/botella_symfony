<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_851e4cecf476be3fc85b3a116a496730c5c50eca6d6d9590627e5817d0eaff9c extends Twig_Template
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
        $__internal_217d40a7cb3162fd6ef4a498d8c54d3086edb0793786704639dd62642b38ceb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217d40a7cb3162fd6ef4a498d8c54d3086edb0793786704639dd62642b38ceb6->enter($__internal_217d40a7cb3162fd6ef4a498d8c54d3086edb0793786704639dd62642b38ceb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_42aea01cf53cb6c85509a9c3f04c34880ab671a23b5151d4e19b54eef736251d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42aea01cf53cb6c85509a9c3f04c34880ab671a23b5151d4e19b54eef736251d->enter($__internal_42aea01cf53cb6c85509a9c3f04c34880ab671a23b5151d4e19b54eef736251d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_217d40a7cb3162fd6ef4a498d8c54d3086edb0793786704639dd62642b38ceb6->leave($__internal_217d40a7cb3162fd6ef4a498d8c54d3086edb0793786704639dd62642b38ceb6_prof);

        
        $__internal_42aea01cf53cb6c85509a9c3f04c34880ab671a23b5151d4e19b54eef736251d->leave($__internal_42aea01cf53cb6c85509a9c3f04c34880ab671a23b5151d4e19b54eef736251d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
