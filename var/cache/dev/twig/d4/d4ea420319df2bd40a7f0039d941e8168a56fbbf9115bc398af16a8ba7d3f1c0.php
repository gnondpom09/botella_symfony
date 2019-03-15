<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1f88676d193f7cd0bb0252a415adaf322d95fd2c26e299992907078cd098ab14 extends Twig_Template
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
        $__internal_f1ef4bbd81cdca80f1bb0a7c3965ccb5faad26eebd3971e6360d0232aa0dbbcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ef4bbd81cdca80f1bb0a7c3965ccb5faad26eebd3971e6360d0232aa0dbbcb->enter($__internal_f1ef4bbd81cdca80f1bb0a7c3965ccb5faad26eebd3971e6360d0232aa0dbbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_51a5ec96c7e3305741eac65c7dd224d89be172403779f795703f45e564f34f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a5ec96c7e3305741eac65c7dd224d89be172403779f795703f45e564f34f6e->enter($__internal_51a5ec96c7e3305741eac65c7dd224d89be172403779f795703f45e564f34f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f1ef4bbd81cdca80f1bb0a7c3965ccb5faad26eebd3971e6360d0232aa0dbbcb->leave($__internal_f1ef4bbd81cdca80f1bb0a7c3965ccb5faad26eebd3971e6360d0232aa0dbbcb_prof);

        
        $__internal_51a5ec96c7e3305741eac65c7dd224d89be172403779f795703f45e564f34f6e->leave($__internal_51a5ec96c7e3305741eac65c7dd224d89be172403779f795703f45e564f34f6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
