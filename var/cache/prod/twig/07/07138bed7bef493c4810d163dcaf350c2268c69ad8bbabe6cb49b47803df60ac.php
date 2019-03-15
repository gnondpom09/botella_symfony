<?php

/* BotellaBundle:paintings:detail-painting.html.twig */
class __TwigTemplate_fe2431d2768ed9defa450603004c5d7f1ae71bb927496cf372a54b84c040f589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout_back.html.twig", "BotellaBundle:paintings:detail-painting.html.twig", 1);
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
        echo "<section class=\"cadre row expanded\">
    <h1>Detail de l'oeuvre</h1>
    <div class=\"col-md-4\">
        ";
        // line 13
        echo "        ";
        if ( !(null === $this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "image", array()))) {
            // line 14
            echo "        <img
        src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
        alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "image", array()), "alt", array()), "html", null, true);
            echo "\"
        />
        ";
        }
        // line 19
        echo "    </div>
    <div class=\"col-md-8\">
        <h3>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "title", array()), "html", null, true);
        echo "</h3>
        <h4>Dimensions</h4>
        <p>Hauteur : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "height", array()), "html", null, true);
        echo " <br> Largeur : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "width", array()), "html", null, true);
        echo "</p>
        <div class=\"well\">
            <h4>Technique </h4>
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "technic", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 28
        if ( !$this->getAttribute($this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "series", array()), "empty", array())) {
            // line 29
            echo "        <p>
            Cette oeuvre est parue dans la série suivante :
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "series", array()));
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
                // line 32
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 33
                echo "            ";
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
            // line 34
            echo "        </p>
        ";
        }
        // line 36
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_list");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_edit", array("id" => $this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'oeuvre
        </a>
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("painting_delete", array("id" => $this->getAttribute((isset($context["painting"]) ? $context["painting"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'oeuvre
        </a>
    </div>

</section>

";
    }

    public function getTemplateName()
    {
        return "BotellaBundle:paintings:detail-painting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 44,  140 => 40,  132 => 36,  128 => 34,  114 => 33,  108 => 32,  91 => 31,  87 => 29,  85 => 28,  80 => 26,  72 => 23,  67 => 21,  63 => 19,  57 => 16,  53 => 15,  50 => 14,  47 => 13,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BotellaBundle:paintings:detail-painting.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/paintings/detail-painting.html.twig");
    }
}
