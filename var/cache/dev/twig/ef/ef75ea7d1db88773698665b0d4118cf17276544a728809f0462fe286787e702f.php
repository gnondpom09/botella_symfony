<?php

/* BotellaBundle:blog:bio.html.twig */
class __TwigTemplate_622cbb7bda80a10a2df8ca932a34b9edac5bd5d35f7430e9156629cb372969c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout.html.twig", "BotellaBundle:blog:bio.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BotellaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac1194fd9aa64af9a5908f22366611f27cfb9a697d3b04980cb6d45d7bb8bc24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1194fd9aa64af9a5908f22366611f27cfb9a697d3b04980cb6d45d7bb8bc24->enter($__internal_ac1194fd9aa64af9a5908f22366611f27cfb9a697d3b04980cb6d45d7bb8bc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:bio.html.twig"));

        $__internal_e78249ed938b4a2eb3f995d470ce65647ebc2e4113e1fb5732613f0c352e7e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78249ed938b4a2eb3f995d470ce65647ebc2e4113e1fb5732613f0c352e7e24->enter($__internal_e78249ed938b4a2eb3f995d470ce65647ebc2e4113e1fb5732613f0c352e7e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:bio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac1194fd9aa64af9a5908f22366611f27cfb9a697d3b04980cb6d45d7bb8bc24->leave($__internal_ac1194fd9aa64af9a5908f22366611f27cfb9a697d3b04980cb6d45d7bb8bc24_prof);

        
        $__internal_e78249ed938b4a2eb3f995d470ce65647ebc2e4113e1fb5732613f0c352e7e24->leave($__internal_e78249ed938b4a2eb3f995d470ce65647ebc2e4113e1fb5732613f0c352e7e24_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_46b1685e3a7800ac21d6a273396212476810e671609e17379a9cff02aa1f4481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b1685e3a7800ac21d6a273396212476810e671609e17379a9cff02aa1f4481->enter($__internal_46b1685e3a7800ac21d6a273396212476810e671609e17379a9cff02aa1f4481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f05b19c6aee64c4965073210b6046e36b0d80068986cad0c58ca5aae8baeb9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f05b19c6aee64c4965073210b6046e36b0d80068986cad0c58ca5aae8baeb9b->enter($__internal_4f05b19c6aee64c4965073210b6046e36b0d80068986cad0c58ca5aae8baeb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4f05b19c6aee64c4965073210b6046e36b0d80068986cad0c58ca5aae8baeb9b->leave($__internal_4f05b19c6aee64c4965073210b6046e36b0d80068986cad0c58ca5aae8baeb9b_prof);

        
        $__internal_46b1685e3a7800ac21d6a273396212476810e671609e17379a9cff02aa1f4481->leave($__internal_46b1685e3a7800ac21d6a273396212476810e671609e17379a9cff02aa1f4481_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d0de5fbeab30811423c8794ba0fc8035d07774edb3ab0f813d2fef5be838486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0de5fbeab30811423c8794ba0fc8035d07774edb3ab0f813d2fef5be838486->enter($__internal_4d0de5fbeab30811423c8794ba0fc8035d07774edb3ab0f813d2fef5be838486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d468a82e315a23e18ab0c3d87ade7792bc20a7e79f49b46ab99fca539a967f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d468a82e315a23e18ab0c3d87ade7792bc20a7e79f49b46ab99fca539a967f63->enter($__internal_d468a82e315a23e18ab0c3d87ade7792bc20a7e79f49b46ab99fca539a967f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded page\">
    <h1>Biographie</h1>
    <div class=\"portrait col-xs-4\">
        <img class=\"size-medium wp-image-21 alignleft\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/portrait.jpeg"), "html", null, true);
        echo "\" alt=\"\" width=\"252\" height=\"300\" />
    </div>
    <div class=\"bio\">Né le 30 Juin 1974 à Nantes. Son apprentissage de la peinture a débuté en 1989 dans l’atelier de Maïthé Rovino à Aussonne suivi d’une année aux Beaux Arts de Toulouse. Le travail était ciblé sur la peinture à l’huile et le pastel. Le travail au fusain et au crayon a toujours été la base de son travail avant et après les cours. Inspiré par les impressionnistes et les esquisses des grands maîtres italiens, sa peinture est spontanée et structurée. Les compositions et les couleurs sont étudiés de manière à mettre en valeur le sujet. Le traitement inachevé des fonds et les effets de lumières dirigent l’œil vers les expressions, les attitudes et les émotions des personnages. Son but est de donner une impression de vie dans ses tableaux.
        <br>
        <hr>
        <br>
        <span class=\"\"><em>\"Fabulous transition from the surface of the paper that leads into the painting itself. The back-lit scene is phenomenal and accents the figure so exquisitely.\" – Informed Collector</em>
        </span>
    </div>
</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>
</div>

";
        // line 32
        $this->loadTemplate("BotellaBundle:blog:footer-page.html.twig", "BotellaBundle:blog:bio.html.twig", 32)->display($context);
        
        $__internal_d468a82e315a23e18ab0c3d87ade7792bc20a7e79f49b46ab99fca539a967f63->leave($__internal_d468a82e315a23e18ab0c3d87ade7792bc20a7e79f49b46ab99fca539a967f63_prof);

        
        $__internal_4d0de5fbeab30811423c8794ba0fc8035d07774edb3ab0f813d2fef5be838486->leave($__internal_4d0de5fbeab30811423c8794ba0fc8035d07774edb3ab0f813d2fef5be838486_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:bio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  77 => 12,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BotellaBundle::layout.html.twig\" %}


{% block title %}
Galerie - {{ parent() }}
{% endblock %}

{% block body %}
<section class=\"cadre row expanded page\">
    <h1>Biographie</h1>
    <div class=\"portrait col-xs-4\">
        <img class=\"size-medium wp-image-21 alignleft\" src=\"{{ asset('uploads/img/portrait.jpeg') }}\" alt=\"\" width=\"252\" height=\"300\" />
    </div>
    <div class=\"bio\">Né le 30 Juin 1974 à Nantes. Son apprentissage de la peinture a débuté en 1989 dans l’atelier de Maïthé Rovino à Aussonne suivi d’une année aux Beaux Arts de Toulouse. Le travail était ciblé sur la peinture à l’huile et le pastel. Le travail au fusain et au crayon a toujours été la base de son travail avant et après les cours. Inspiré par les impressionnistes et les esquisses des grands maîtres italiens, sa peinture est spontanée et structurée. Les compositions et les couleurs sont étudiés de manière à mettre en valeur le sujet. Le traitement inachevé des fonds et les effets de lumières dirigent l’œil vers les expressions, les attitudes et les émotions des personnages. Son but est de donner une impression de vie dans ses tableaux.
        <br>
        <hr>
        <br>
        <span class=\"\"><em>\"Fabulous transition from the surface of the paper that leads into the painting itself. The back-lit scene is phenomenal and accents the figure so exquisitely.\" – Informed Collector</em>
        </span>
    </div>
</section>
<a href=\"#section1\" class=\"top bottom\">
    <button type=\"button\" name=\"bottom\">
        <div class=\"content-button\">
            <i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i>
            <p>Top</p>
        </div>
    </button>
</a>
</div>

{% include 'BotellaBundle:blog:footer-page.html.twig' %}
{% endblock %}
", "BotellaBundle:blog:bio.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/bio.html.twig");
    }
}
