<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b1e652da32a121dbb8420f08580f829f0afd94d02972d3743319a50b5d03d8d8 extends Twig_Template
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
        $__internal_19b2792691c8b7973582e4da32a89c2b289029f5efed55cb6fbc8d618e94f23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b2792691c8b7973582e4da32a89c2b289029f5efed55cb6fbc8d618e94f23c->enter($__internal_19b2792691c8b7973582e4da32a89c2b289029f5efed55cb6fbc8d618e94f23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2cc48b43fdaddbd0f26c4cbdc32467848b245875c895849c41abe9a90a7405ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc48b43fdaddbd0f26c4cbdc32467848b245875c895849c41abe9a90a7405ca->enter($__internal_2cc48b43fdaddbd0f26c4cbdc32467848b245875c895849c41abe9a90a7405ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_19b2792691c8b7973582e4da32a89c2b289029f5efed55cb6fbc8d618e94f23c->leave($__internal_19b2792691c8b7973582e4da32a89c2b289029f5efed55cb6fbc8d618e94f23c_prof);

        
        $__internal_2cc48b43fdaddbd0f26c4cbdc32467848b245875c895849c41abe9a90a7405ca->leave($__internal_2cc48b43fdaddbd0f26c4cbdc32467848b245875c895849c41abe9a90a7405ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
