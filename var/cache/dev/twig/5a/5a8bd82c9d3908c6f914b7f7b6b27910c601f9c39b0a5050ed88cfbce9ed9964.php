<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_06ce00634d62188ba19342b0962f29e25d9736e8d0f0aaa19009149a4e5b181a extends Twig_Template
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
        $__internal_f456387c7d966e2b6503d32919e76156c66251a9d61da87b2c31d3f74effdf67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f456387c7d966e2b6503d32919e76156c66251a9d61da87b2c31d3f74effdf67->enter($__internal_f456387c7d966e2b6503d32919e76156c66251a9d61da87b2c31d3f74effdf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b532fca60d073087a530cc200b30ce3b77d2cdcc0e30cb97607169cab133e73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b532fca60d073087a530cc200b30ce3b77d2cdcc0e30cb97607169cab133e73f->enter($__internal_b532fca60d073087a530cc200b30ce3b77d2cdcc0e30cb97607169cab133e73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f456387c7d966e2b6503d32919e76156c66251a9d61da87b2c31d3f74effdf67->leave($__internal_f456387c7d966e2b6503d32919e76156c66251a9d61da87b2c31d3f74effdf67_prof);

        
        $__internal_b532fca60d073087a530cc200b30ce3b77d2cdcc0e30cb97607169cab133e73f->leave($__internal_b532fca60d073087a530cc200b30ce3b77d2cdcc0e30cb97607169cab133e73f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
