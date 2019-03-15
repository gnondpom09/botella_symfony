<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6afd84b4b390eaf3e016b941e569747cf037ddb9234a465d12c8cec73ba5546f extends Twig_Template
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
        $__internal_ff00e5826f51123190131f3923d2c0feaae17e6b801f00e52103ec27fc8800f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff00e5826f51123190131f3923d2c0feaae17e6b801f00e52103ec27fc8800f4->enter($__internal_ff00e5826f51123190131f3923d2c0feaae17e6b801f00e52103ec27fc8800f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c9f25aee328b6aab2ee9ecb1094518dd4c7950a245bde9401ef15f3fef6cbdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f25aee328b6aab2ee9ecb1094518dd4c7950a245bde9401ef15f3fef6cbdaa->enter($__internal_c9f25aee328b6aab2ee9ecb1094518dd4c7950a245bde9401ef15f3fef6cbdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ff00e5826f51123190131f3923d2c0feaae17e6b801f00e52103ec27fc8800f4->leave($__internal_ff00e5826f51123190131f3923d2c0feaae17e6b801f00e52103ec27fc8800f4_prof);

        
        $__internal_c9f25aee328b6aab2ee9ecb1094518dd4c7950a245bde9401ef15f3fef6cbdaa->leave($__internal_c9f25aee328b6aab2ee9ecb1094518dd4c7950a245bde9401ef15f3fef6cbdaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
