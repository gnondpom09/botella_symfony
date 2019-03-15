<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b36d09a3a07b54e86a9a553932cfa07068975151ec2d31e26a6bbe8811a429a8 extends Twig_Template
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
        $__internal_96094dfa30f029f2e6ac9f1ebc1bc8dacda41b98f29617b3d0c9cc2febcef087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96094dfa30f029f2e6ac9f1ebc1bc8dacda41b98f29617b3d0c9cc2febcef087->enter($__internal_96094dfa30f029f2e6ac9f1ebc1bc8dacda41b98f29617b3d0c9cc2febcef087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6a4b5725e12304fdd6534b8cdbf42ee91a160be65940d6ff23263c9fb9571e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4b5725e12304fdd6534b8cdbf42ee91a160be65940d6ff23263c9fb9571e8f->enter($__internal_6a4b5725e12304fdd6534b8cdbf42ee91a160be65940d6ff23263c9fb9571e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_96094dfa30f029f2e6ac9f1ebc1bc8dacda41b98f29617b3d0c9cc2febcef087->leave($__internal_96094dfa30f029f2e6ac9f1ebc1bc8dacda41b98f29617b3d0c9cc2febcef087_prof);

        
        $__internal_6a4b5725e12304fdd6534b8cdbf42ee91a160be65940d6ff23263c9fb9571e8f->leave($__internal_6a4b5725e12304fdd6534b8cdbf42ee91a160be65940d6ff23263c9fb9571e8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
