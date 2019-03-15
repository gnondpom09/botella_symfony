<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4cf3aa60ff183caff474818c73a8b24c9260d5adcebaddd18fa8174a2ccebb88 extends Twig_Template
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
        $__internal_9b96a632ce83d80edb82685e31b3dcc6cac702e6ef16c5ecdb252e71d32d696d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b96a632ce83d80edb82685e31b3dcc6cac702e6ef16c5ecdb252e71d32d696d->enter($__internal_9b96a632ce83d80edb82685e31b3dcc6cac702e6ef16c5ecdb252e71d32d696d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4560b031794e182f8acd75d5f61b6baa3392b6c0ee38c016b8b02ba35362020c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4560b031794e182f8acd75d5f61b6baa3392b6c0ee38c016b8b02ba35362020c->enter($__internal_4560b031794e182f8acd75d5f61b6baa3392b6c0ee38c016b8b02ba35362020c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9b96a632ce83d80edb82685e31b3dcc6cac702e6ef16c5ecdb252e71d32d696d->leave($__internal_9b96a632ce83d80edb82685e31b3dcc6cac702e6ef16c5ecdb252e71d32d696d_prof);

        
        $__internal_4560b031794e182f8acd75d5f61b6baa3392b6c0ee38c016b8b02ba35362020c->leave($__internal_4560b031794e182f8acd75d5f61b6baa3392b6c0ee38c016b8b02ba35362020c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
