<?php

/* BotellaBundle:posts:list-post-back.html.twig */
class __TwigTemplate_976441e6326e2e152ebea0f5be341e8f84060bf77931abe6baa9ab74a3be561e extends Twig_Template
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
        $__internal_53256a4d064ce1369229cef6e808186f29c2ceb2ad11fa6f31de06e0da604cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53256a4d064ce1369229cef6e808186f29c2ceb2ad11fa6f31de06e0da604cce->enter($__internal_53256a4d064ce1369229cef6e808186f29c2ceb2ad11fa6f31de06e0da604cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:list-post-back.html.twig"));

        $__internal_7c58fdcc1fe25e3ec2a482eb90700c79a637ed5c6b2c92a365d662ef4e8c51d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c58fdcc1fe25e3ec2a482eb90700c79a637ed5c6b2c92a365d662ef4e8c51d1->enter($__internal_7c58fdcc1fe25e3ec2a482eb90700c79a637ed5c6b2c92a365d662ef4e8c51d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:posts:list-post-back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53256a4d064ce1369229cef6e808186f29c2ceb2ad11fa6f31de06e0da604cce->leave($__internal_53256a4d064ce1369229cef6e808186f29c2ceb2ad11fa6f31de06e0da604cce_prof);

        
        $__internal_7c58fdcc1fe25e3ec2a482eb90700c79a637ed5c6b2c92a365d662ef4e8c51d1->leave($__internal_7c58fdcc1fe25e3ec2a482eb90700c79a637ed5c6b2c92a365d662ef4e8c51d1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dabb43c3d8d522cc3ec5a5f550b71827ab43a1847061d67070fce41689ebec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dabb43c3d8d522cc3ec5a5f550b71827ab43a1847061d67070fce41689ebec7->enter($__internal_3dabb43c3d8d522cc3ec5a5f550b71827ab43a1847061d67070fce41689ebec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79f572260db675ffb6a02b33751ff800ccfae7b8dee028b238810d24ddc72261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f572260db675ffb6a02b33751ff800ccfae7b8dee028b238810d24ddc72261->enter($__internal_79f572260db675ffb6a02b33751ff800ccfae7b8dee028b238810d24ddc72261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_79f572260db675ffb6a02b33751ff800ccfae7b8dee028b238810d24ddc72261->leave($__internal_79f572260db675ffb6a02b33751ff800ccfae7b8dee028b238810d24ddc72261_prof);

        
        $__internal_3dabb43c3d8d522cc3ec5a5f550b71827ab43a1847061d67070fce41689ebec7->leave($__internal_3dabb43c3d8d522cc3ec5a5f550b71827ab43a1847061d67070fce41689ebec7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd1e0d953bff982c1cf9abf41d401c59dee7e28d4acf960dd193d7891107ee93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1e0d953bff982c1cf9abf41d401c59dee7e28d4acf960dd193d7891107ee93->enter($__internal_bd1e0d953bff982c1cf9abf41d401c59dee7e28d4acf960dd193d7891107ee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_489ef83bf03321bc1101418fb9432d300cb4291b9f5d57baefe3e2fcf4bfa686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489ef83bf03321bc1101418fb9432d300cb4291b9f5d57baefe3e2fcf4bfa686->enter($__internal_489ef83bf03321bc1101418fb9432d300cb4291b9f5d57baefe3e2fcf4bfa686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<article class=\"content-back col-md-12\">
    <h1>Liste des articles</h1>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listArticles"] ?? $this->getContext($context, "listArticles")));
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
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 44
            echo "        <li";
            if (($context["p"] == ($context["page"] ?? $this->getContext($context, "page")))) {
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
        
        $__internal_489ef83bf03321bc1101418fb9432d300cb4291b9f5d57baefe3e2fcf4bfa686->leave($__internal_489ef83bf03321bc1101418fb9432d300cb4291b9f5d57baefe3e2fcf4bfa686_prof);

        
        $__internal_bd1e0d953bff982c1cf9abf41d401c59dee7e28d4acf960dd193d7891107ee93->leave($__internal_bd1e0d953bff982c1cf9abf41d401c59dee7e28d4acf960dd193d7891107ee93_prof);

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
