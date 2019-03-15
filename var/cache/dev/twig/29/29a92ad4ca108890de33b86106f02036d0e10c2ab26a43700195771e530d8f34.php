<?php

/* BotellaBundle:posts:list-posts.html.twig */
class __TwigTemplate_4da63407594ca79c04b5def6d42111332236e1d9fc15f0360a47b9790957e1de extends Twig_Template
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
        $__internal_c4cf8a1fd48e1be3b2de00a4f94f50f2c2e5e89bbd4ae7e69d2d5bf9b4d6f5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4cf8a1fd48e1be3b2de00a4f94f50f2c2e5e89bbd4ae7e69d2d5bf9b4d6f5aa->enter($__internal_c4cf8a1fd48e1be3b2de00a4f94f50f2c2e5e89bbd4ae7e69d2d5bf9b4d6f5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:list-posts.html.twig"));

        $__internal_5457e06de965998b5e9697d0d779ed6a73c1e93ed4af34b7b3a0b9a8c6b70b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5457e06de965998b5e9697d0d779ed6a73c1e93ed4af34b7b3a0b9a8c6b70b51->enter($__internal_5457e06de965998b5e9697d0d779ed6a73c1e93ed4af34b7b3a0b9a8c6b70b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:list-posts.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
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
        
        $__internal_c4cf8a1fd48e1be3b2de00a4f94f50f2c2e5e89bbd4ae7e69d2d5bf9b4d6f5aa->leave($__internal_c4cf8a1fd48e1be3b2de00a4f94f50f2c2e5e89bbd4ae7e69d2d5bf9b4d6f5aa_prof);

        
        $__internal_5457e06de965998b5e9697d0d779ed6a73c1e93ed4af34b7b3a0b9a8c6b70b51->leave($__internal_5457e06de965998b5e9697d0d779ed6a73c1e93ed4af34b7b3a0b9a8c6b70b51_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:posts:list-posts.html.twig";
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
", "BotellaBundle:posts:list-posts.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/list-posts.html.twig");
    }
}
