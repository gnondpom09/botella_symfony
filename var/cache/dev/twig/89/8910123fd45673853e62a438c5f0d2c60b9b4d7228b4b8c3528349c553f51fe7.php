<?php

/* BotellaBundle:Posts:list-posts.html.twig */
class __TwigTemplate_b111f61b0c3e2a04d4398977c1ef33bffcb52ac96f2f40e28588338649a84bf1 extends Twig_Template
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
        $__internal_4961a8371e5074a49e5b8ed7090ee6bf371274ec104bb21495fc5890ce7e5bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4961a8371e5074a49e5b8ed7090ee6bf371274ec104bb21495fc5890ce7e5bd8->enter($__internal_4961a8371e5074a49e5b8ed7090ee6bf371274ec104bb21495fc5890ce7e5bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:Posts:list-posts.html.twig"));

        $__internal_7a4f0ed7d83659670adede962ecb7e1fec597c4162fb0e35fec0c15a5ba5fd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4f0ed7d83659670adede962ecb7e1fec597c4162fb0e35fec0c15a5ba5fd86->enter($__internal_7a4f0ed7d83659670adede962ecb7e1fec597c4162fb0e35fec0c15a5ba5fd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:Posts:list-posts.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listArticles"] ?? $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "    <div class=\"col-xs-4\">
        <div class=\"actu actu-home\">
            <h4>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4>
        </div>
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"voir\">
            <button type=\"button\" name=\"top\">
                <div class=\"content-button preview\">
                    <p>Voir</p>
                </div>
            </button>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4961a8371e5074a49e5b8ed7090ee6bf371274ec104bb21495fc5890ce7e5bd8->leave($__internal_4961a8371e5074a49e5b8ed7090ee6bf371274ec104bb21495fc5890ce7e5bd8_prof);

        
        $__internal_7a4f0ed7d83659670adede962ecb7e1fec597c4162fb0e35fec0c15a5ba5fd86->leave($__internal_7a4f0ed7d83659670adede962ecb7e1fec597c4162fb0e35fec0c15a5ba5fd86_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:Posts:list-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  36 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
    {% for article in listArticles %}
    <div class=\"col-xs-4\">
        <div class=\"actu actu-home\">
            <h4>{{ article.title }}</h4>
        </div>
        <a href=\"{{ path('blog_view', { id: article.id }) }}\" class=\"voir\">
            <button type=\"button\" name=\"top\">
                <div class=\"content-button preview\">
                    <p>Voir</p>
                </div>
            </button>
        </a>
    </div>
    {% endfor %}
", "BotellaBundle:Posts:list-posts.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/Posts/list-posts.html.twig");
    }
}
