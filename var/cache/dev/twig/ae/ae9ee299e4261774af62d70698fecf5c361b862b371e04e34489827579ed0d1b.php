<?php

/* BotellaBundle:posts:single-post.html.twig */
class __TwigTemplate_2648041266eca496088a63db0820714c79d9edba1479ef123472a35115f57889 extends Twig_Template
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
        $__internal_94ce2c65e61796bd90c502ba7e9faa81320b3ccc5db2d4c286513d6529645177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ce2c65e61796bd90c502ba7e9faa81320b3ccc5db2d4c286513d6529645177->enter($__internal_94ce2c65e61796bd90c502ba7e9faa81320b3ccc5db2d4c286513d6529645177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:single-post.html.twig"));

        $__internal_8fee54cc541d07c82dbc29fd265672d80b2fa594ede65a780d9bd04ab9bb9a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fee54cc541d07c82dbc29fd265672d80b2fa594ede65a780d9bd04ab9bb9a13->enter($__internal_8fee54cc541d07c82dbc29fd265672d80b2fa594ede65a780d9bd04ab9bb9a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:single-post.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "    <div class=\"single-post\">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"single-post-link\">
            <h4>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4>
        </a>
        <h5>Du 12 au 25 Mai</h5>
        <p>Invité d'honneur - Halle Piquot Leguevin</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    
";
        
        $__internal_94ce2c65e61796bd90c502ba7e9faa81320b3ccc5db2d4c286513d6529645177->leave($__internal_94ce2c65e61796bd90c502ba7e9faa81320b3ccc5db2d4c286513d6529645177_prof);

        
        $__internal_8fee54cc541d07c82dbc29fd265672d80b2fa594ede65a780d9bd04ab9bb9a13->leave($__internal_8fee54cc541d07c82dbc29fd265672d80b2fa594ede65a780d9bd04ab9bb9a13_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:posts:single-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  39 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
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
    <div class=\"single-post\">
        <a href=\"{{ path('blog_view', { id: article.id}) }}\" class=\"single-post-link\">
            <h4>{{ article.title }}</h4>
        </a>
        <h5>Du 12 au 25 Mai</h5>
        <p>Invité d'honneur - Halle Piquot Leguevin</p>
    </div>
    {% endfor %}
    
", "BotellaBundle:posts:single-post.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/single-post.html.twig");
    }
}
