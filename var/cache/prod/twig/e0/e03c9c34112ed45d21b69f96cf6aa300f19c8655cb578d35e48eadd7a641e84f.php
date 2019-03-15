<?php

/* BotellaBundle:blog:contact.html.twig */
class __TwigTemplate_0206e24d323408cb703d2b1ec82f476d52032a028d18e01d6cc0ba61c0b30885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BotellaBundle::layout_page.html.twig", "BotellaBundle:blog:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<section class=\"cadre row expanded\">
    <h1>Contact</h1>
    <form action=\"\" method=\"post\" class=\"col-md-12 contact\">

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        <div class=\"col-md-6\">
            <span class=\"input input--kuro col-md-2\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'widget', array("attr" => array("class" => "input__field input__field--kuro")));
        echo "
                <label class=\"input__label input__label--kuro\" for=\"input-7\">
                    <span class=\"input__label-content input__label-content--kuro\">Prénom</span>
                </label>
    \t\t</span>
            <span class=\"input input--kuro col-md-2\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'widget', array("attr" => array("class" => "input__field input__field--kuro")));
        echo "
                <label class=\"input__label input__label--kuro\" for=\"input-7\">
                    <span class=\"input__label-content input__label-content--kuro\">Nom</span>
                </label>
            </span>
            <span class=\"input input--kuro col-md-2\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "input__field input__field--kuro")));
        echo "
                <label class=\"input__label input__label--kuro\" for=\"input-7\">
                    <span class=\"input__label-content input__label-content--kuro\">Email</span>
                </label>
            </span>
            <span class=\"input input--kuro col-md-2\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'widget', array("attr" => array("class" => "input__field input__field--kuro")));
        echo "
                <label class=\"input__label input__label--kuro\" for=\"input-7\">
                    <span class=\"input__label-content input__label-content--kuro\">Sujet</span>
                </label>
            </span>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-textarea\">
                <div class=\"\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Message")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("label" => "Envoyer", "attr" => array("class" => "valid")));
        echo "
                </div>
            </div>
        </div>

                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </form>

</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>

";
    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 58,  114 => 56,  106 => 51,  98 => 46,  86 => 37,  77 => 31,  68 => 25,  59 => 19,  53 => 16,  48 => 14,  42 => 10,  39 => 9,  32 => 6,  29 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:blog:contact.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/contact.html.twig");
    }
}
