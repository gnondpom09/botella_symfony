<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d710e7ed16c18f0504d5f91d400a6c996ab5f8d92eace2554193e8bcb124937a extends Twig_Template
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
        $__internal_001427a8cac614835670fd427b5866b96920e7121b315e29115dd4891b007ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001427a8cac614835670fd427b5866b96920e7121b315e29115dd4891b007ddb->enter($__internal_001427a8cac614835670fd427b5866b96920e7121b315e29115dd4891b007ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5e982e68387de473ddf458e231349f0e7f6c2f02c0e6b07f29e0eb0f77b83392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e982e68387de473ddf458e231349f0e7f6c2f02c0e6b07f29e0eb0f77b83392->enter($__internal_5e982e68387de473ddf458e231349f0e7f6c2f02c0e6b07f29e0eb0f77b83392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_001427a8cac614835670fd427b5866b96920e7121b315e29115dd4891b007ddb->leave($__internal_001427a8cac614835670fd427b5866b96920e7121b315e29115dd4891b007ddb_prof);

        
        $__internal_5e982e68387de473ddf458e231349f0e7f6c2f02c0e6b07f29e0eb0f77b83392->leave($__internal_5e982e68387de473ddf458e231349f0e7f6c2f02c0e6b07f29e0eb0f77b83392_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
