<?php

/* BotellaBundle:paintings:list-paintings.html.twig */
class __TwigTemplate_f9ee2927356efb50acb3ad7b8095aa50f409e06c7ad3adadd158aecd45d230be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:paintings:list-paintings.html.twig", 1);
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
<article class=\"content-back\">
    <h1>liste des oeuvres</h1>
    <div class=\"col-md-12\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPaintings"]) ? $context["listPaintings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["painting"]) {
            // line 14
            echo "        <div class=\"well\">
            <div class=\"col-md-6\">
                <ul class=\"infos-painting\">
                    <li>- ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["painting"], "id", array()), "html", null, true);
            echo " - Titre de l'euvre : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["painting"], "title", array()), "html", null, true);
            echo "</li>
                    <li>Hauteur : ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["painting"], "height", array()), "html", null, true);
            echo "</li>
                    <li>Largeur : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["painting"], "width", array()), "html", null, true);
            echo "</li>
                    <li>Technique : ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["painting"], "technic", array()), "html", null, true);
            echo "</li>
                    ";
            // line 21
            if ( !$this->getAttribute($this->getAttribute($context["painting"], "series", array()), "empty", array())) {
                // line 22
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["painting"], "series", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
                    // line 23
                    echo "                        <li>Serie : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
                    echo "</li>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 24
                    echo "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                    ";
            }
            // line 26
            echo "                </ul>
            </div>
            <div class=\"col-md-2\">
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_view", array("id" => $this->getAttribute($context["painting"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 30
            if ( !(null === $this->getAttribute($context["painting"], "image", array()))) {
                // line 31
                echo "                    <img
                    src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["painting"], "image", array()), "webPath", array())), "html", null, true);
                echo "\"
                    alt=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["painting"], "image", array()), "alt", array()), "html", null, true);
                echo "\"
                    />
                </a>
            </div>
            <div class=\"col-md-4\">
                <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_edit", array("id" => $this->getAttribute($context["painting"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">
                    <i class=\"glyphicon glyphicon-edit\"></i>
                    Modifier l'oeuvre
                </a>
                <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_delete", array("id" => $this->getAttribute($context["painting"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">
                    <i class=\"glyphicon glyphicon-trash\"></i>
                    Supprimer l'oeuvre
                </a>
            </div>
        </div>
        ";
            }
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['painting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_add");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-plus\"></i>
            Ajouter une oeuvre
        </a>
    </div>

    <ul class=\"pagination\">
        ";
        // line 59
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 60
            echo "        <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : null))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_list", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </ul>

</article>
</section>
";
    }

    public function getTemplateName()
    {
        return "BotellaBundle:paintings:list-paintings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 64,  193 => 61,  186 => 60,  181 => 59,  171 => 51,  168 => 50,  162 => 49,  152 => 42,  145 => 38,  137 => 33,  133 => 32,  130 => 31,  128 => 30,  124 => 29,  119 => 26,  116 => 25,  102 => 24,  95 => 23,  77 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  57 => 17,  52 => 14,  48 => 13,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:paintings:list-paintings.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/list-paintings.html.twig");
    }
}
