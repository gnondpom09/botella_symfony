<?php

/* BotellaBundle:posts:list-posts.html.twig */
class __TwigTemplate_db3d83717563aec43bc530b64e83347018abcc018d509ce59c56dfa43a33354d extends Twig_Template
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
        // line 1
        echo "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "    <div class=\"col-md-4\">
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
        return array (  35 => 7,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:posts:list-posts.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/list-posts.html.twig");
    }
}
