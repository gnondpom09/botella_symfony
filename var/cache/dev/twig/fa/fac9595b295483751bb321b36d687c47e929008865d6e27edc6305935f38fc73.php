<?php

/* BotellaBundle:posts:list-post-back.html.twig */
class __TwigTemplate_78d9363b2037083fddfedb9ced0746f2991504b8ba166beaa36d259d82141f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:posts:list-post-back.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcd93c78cdad0223ce37ef7f3d85933dfe46f30f2ed492a78ed1ee84da5ed1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd93c78cdad0223ce37ef7f3d85933dfe46f30f2ed492a78ed1ee84da5ed1df->enter($__internal_dcd93c78cdad0223ce37ef7f3d85933dfe46f30f2ed492a78ed1ee84da5ed1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:list-post-back.html.twig"));

        $__internal_b47429b966a175e4ab036241a063b84e31d3a382d8d6f25ca6d1fc73dbeb6ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47429b966a175e4ab036241a063b84e31d3a382d8d6f25ca6d1fc73dbeb6ae3->enter($__internal_b47429b966a175e4ab036241a063b84e31d3a382d8d6f25ca6d1fc73dbeb6ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:list-post-back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcd93c78cdad0223ce37ef7f3d85933dfe46f30f2ed492a78ed1ee84da5ed1df->leave($__internal_dcd93c78cdad0223ce37ef7f3d85933dfe46f30f2ed492a78ed1ee84da5ed1df_prof);

        
        $__internal_b47429b966a175e4ab036241a063b84e31d3a382d8d6f25ca6d1fc73dbeb6ae3->leave($__internal_b47429b966a175e4ab036241a063b84e31d3a382d8d6f25ca6d1fc73dbeb6ae3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b077f7b806dbdd0f5b283f045328cfefbfaa5a65bcc11effe41c1603a6ca895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b077f7b806dbdd0f5b283f045328cfefbfaa5a65bcc11effe41c1603a6ca895->enter($__internal_5b077f7b806dbdd0f5b283f045328cfefbfaa5a65bcc11effe41c1603a6ca895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af81ae1897f37b10fbf44815341146a993119b1f0ef1da1387b7c92af194d430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af81ae1897f37b10fbf44815341146a993119b1f0ef1da1387b7c92af194d430->enter($__internal_af81ae1897f37b10fbf44815341146a993119b1f0ef1da1387b7c92af194d430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_af81ae1897f37b10fbf44815341146a993119b1f0ef1da1387b7c92af194d430->leave($__internal_af81ae1897f37b10fbf44815341146a993119b1f0ef1da1387b7c92af194d430_prof);

        
        $__internal_5b077f7b806dbdd0f5b283f045328cfefbfaa5a65bcc11effe41c1603a6ca895->leave($__internal_5b077f7b806dbdd0f5b283f045328cfefbfaa5a65bcc11effe41c1603a6ca895_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_37f92c3b05ec953e15c7cfa29063511c066cc8a28d76d6364ea60901b58570be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f92c3b05ec953e15c7cfa29063511c066cc8a28d76d6364ea60901b58570be->enter($__internal_37f92c3b05ec953e15c7cfa29063511c066cc8a28d76d6364ea60901b58570be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66bc5fcef382375a9d09b91ffb40300d3bfeb84d30b47e5f3cc6653ca05df368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66bc5fcef382375a9d09b91ffb40300d3bfeb84d30b47e5f3cc6653ca05df368->enter($__internal_66bc5fcef382375a9d09b91ffb40300d3bfeb84d30b47e5f3cc6653ca05df368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back col-md-12\">
    <h1>Liste des articles</h1>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "    <div class=\"well\">
        <div class=\"col-md-8\">
            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
                <h3>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h3>
            </a>
            <ul>
                <li>publie par : ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", array()), "html", null, true);
            echo "</li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier l'article
            </a>
            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer l'article
            </a>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_add");
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-plus\"></i>
        Ajouter un article
    </a>

    <ul class=\"pagination\">
        ";
        // line 43
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 44
            echo "        <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_expositions", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    </ul>

</article>
</section>
";
        
        $__internal_66bc5fcef382375a9d09b91ffb40300d3bfeb84d30b47e5f3cc6653ca05df368->leave($__internal_66bc5fcef382375a9d09b91ffb40300d3bfeb84d30b47e5f3cc6653ca05df368_prof);

        
        $__internal_37f92c3b05ec953e15c7cfa29063511c066cc8a28d76d6364ea60901b58570be->leave($__internal_37f92c3b05ec953e15c7cfa29063511c066cc8a28d76d6364ea60901b58570be_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:posts:list-post-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 48,  147 => 45,  140 => 44,  135 => 43,  126 => 36,  123 => 35,  110 => 28,  103 => 24,  96 => 20,  90 => 17,  86 => 16,  82 => 14,  78 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BotellaBundle::layout_back.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}

{% block body %}

<article class=\"content-back col-md-12\">
    <h1>Liste des articles</h1>

    {% for article in listArticles %}
    <div class=\"well\">
        <div class=\"col-md-8\">
            <a href=\"{{ path('article_view', {'id': article.id}) }}\">
                <h3>{{ article.title }}</h3>
            </a>
            <ul>
                <li>publie par : {{ article.author }}</li>
            </ul>
        </div>
        <div class=\"col-md-4\">
            <a href=\"{{ path('blog_edit', {'id': article.id}) }}\" class=\"btn btn-default\">
                <i class=\"glyphicon glyphicon-edit\"></i>
                Modifier l'article
            </a>
            <a href=\"{{ path('blog_delete', {'id': article.id}) }}\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i>
                Supprimer l'article
            </a>
        </div>
    </div>
    {% endfor %}

    <a href=\"{{ path('blog_add') }}\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-plus\"></i>
        Ajouter un article
    </a>

    <ul class=\"pagination\">
        {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
        {% for p in range(1, nbPages) %}
        <li{% if p == page %} class=\"active\"{% endif %}>
            <a href=\"{{ path('botella_expositions', {'page': p}) }}\">{{ p }}</a>
        </li>
        {% endfor %}
    </ul>

</article>
</section>
{% endblock %}
", "BotellaBundle:posts:list-post-back.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/list-post-back.html.twig");
    }
}
