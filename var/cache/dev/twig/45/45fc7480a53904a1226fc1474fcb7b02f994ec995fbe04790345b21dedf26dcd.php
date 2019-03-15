<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_0dbc6f84a80434963d388a67158bd2ea15b4f47e964b9b1606a015caeccbf0ee extends Twig_Template
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
        $__internal_d6efa1843ec68de9bf2c0fff648d2471f6488090b0106d2fcf0f596c7cfddb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6efa1843ec68de9bf2c0fff648d2471f6488090b0106d2fcf0f596c7cfddb00->enter($__internal_d6efa1843ec68de9bf2c0fff648d2471f6488090b0106d2fcf0f596c7cfddb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c6757cc19ba9659f45df8e6885f67c8301ae22af0b1ee859e70dfa4e5f9305fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6757cc19ba9659f45df8e6885f67c8301ae22af0b1ee859e70dfa4e5f9305fa->enter($__internal_c6757cc19ba9659f45df8e6885f67c8301ae22af0b1ee859e70dfa4e5f9305fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d6efa1843ec68de9bf2c0fff648d2471f6488090b0106d2fcf0f596c7cfddb00->leave($__internal_d6efa1843ec68de9bf2c0fff648d2471f6488090b0106d2fcf0f596c7cfddb00_prof);

        
        $__internal_c6757cc19ba9659f45df8e6885f67c8301ae22af0b1ee859e70dfa4e5f9305fa->leave($__internal_c6757cc19ba9659f45df8e6885f67c8301ae22af0b1ee859e70dfa4e5f9305fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
