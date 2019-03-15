<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9c777bfb410eb372bc7a0eba1257d52780c40934c4d9831b85674366192b55c3 extends Twig_Template
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
        $__internal_d52c570874bb3e4f4db2a63e99738e54c4802480fd5a161b64f808e11d06c286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52c570874bb3e4f4db2a63e99738e54c4802480fd5a161b64f808e11d06c286->enter($__internal_d52c570874bb3e4f4db2a63e99738e54c4802480fd5a161b64f808e11d06c286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8f0bc9400eafc429ea6bab345e4eb04a677bdc2b159a8fb9c180a0ecce4e7eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0bc9400eafc429ea6bab345e4eb04a677bdc2b159a8fb9c180a0ecce4e7eb3->enter($__internal_8f0bc9400eafc429ea6bab345e4eb04a677bdc2b159a8fb9c180a0ecce4e7eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d52c570874bb3e4f4db2a63e99738e54c4802480fd5a161b64f808e11d06c286->leave($__internal_d52c570874bb3e4f4db2a63e99738e54c4802480fd5a161b64f808e11d06c286_prof);

        
        $__internal_8f0bc9400eafc429ea6bab345e4eb04a677bdc2b159a8fb9c180a0ecce4e7eb3->leave($__internal_8f0bc9400eafc429ea6bab345e4eb04a677bdc2b159a8fb9c180a0ecce4e7eb3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
