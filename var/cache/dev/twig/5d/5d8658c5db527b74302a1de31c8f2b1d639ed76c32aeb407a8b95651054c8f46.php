<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_16d4e425067b83270263d2ae5505873e1b1f6d56b651c1a55a64baf940e3fe1a extends Twig_Template
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
        $__internal_aad59050dca5a0b099db415bc814a1fc5a54f9da4e1fa9db7c5ff75e9071780d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad59050dca5a0b099db415bc814a1fc5a54f9da4e1fa9db7c5ff75e9071780d->enter($__internal_aad59050dca5a0b099db415bc814a1fc5a54f9da4e1fa9db7c5ff75e9071780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_70ee3aa713cb8480ad9dcd56fd6c93d2e083f08e620d17635ea0a3c4e2364887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ee3aa713cb8480ad9dcd56fd6c93d2e083f08e620d17635ea0a3c4e2364887->enter($__internal_70ee3aa713cb8480ad9dcd56fd6c93d2e083f08e620d17635ea0a3c4e2364887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_aad59050dca5a0b099db415bc814a1fc5a54f9da4e1fa9db7c5ff75e9071780d->leave($__internal_aad59050dca5a0b099db415bc814a1fc5a54f9da4e1fa9db7c5ff75e9071780d_prof);

        
        $__internal_70ee3aa713cb8480ad9dcd56fd6c93d2e083f08e620d17635ea0a3c4e2364887->leave($__internal_70ee3aa713cb8480ad9dcd56fd6c93d2e083f08e620d17635ea0a3c4e2364887_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
