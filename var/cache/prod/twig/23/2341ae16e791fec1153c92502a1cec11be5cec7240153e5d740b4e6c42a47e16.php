<?php

/* BotellaBundle:posts:list-post-back.html.twig */
class __TwigTemplate_b8d721cbfa7f2ace145fb974e14ce2ab4c90d4c20a013bfab214ab5ec73dc059 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<article class=\"content-back col-md-12\">
    <h1>Liste des articles</h1>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : null));
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
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 44
            echo "        <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : null))) {
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
        return array (  128 => 48,  117 => 45,  110 => 44,  105 => 43,  96 => 36,  93 => 35,  80 => 28,  73 => 24,  66 => 20,  60 => 17,  56 => 16,  52 => 14,  48 => 13,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:posts:list-post-back.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/posts/list-post-back.html.twig");
    }
}
