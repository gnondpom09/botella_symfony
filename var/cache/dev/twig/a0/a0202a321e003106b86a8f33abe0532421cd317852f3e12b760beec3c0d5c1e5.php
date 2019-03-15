<?php

/* BotellaBundle:blog:expositions.html.twig */
class __TwigTemplate_3d5a5e781ab48a1082e7b46d67d01fdc6bed375948a7e43c1debe0ae1973168b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BotellaBundle::layout.html.twig", "BotellaBundle:blog:expositions.html.twig", 1);
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
        $__internal_8812a17ddbc2a7db0fb897e4f615148ef484e36ae730a2e41b0c43bafe1d1ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8812a17ddbc2a7db0fb897e4f615148ef484e36ae730a2e41b0c43bafe1d1ad5->enter($__internal_8812a17ddbc2a7db0fb897e4f615148ef484e36ae730a2e41b0c43bafe1d1ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:expositions.html.twig"));

        $__internal_b3fe2863b5c07359c9dda9701f0136a825d39f7ce8f680f03833b6df1c86d1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fe2863b5c07359c9dda9701f0136a825d39f7ce8f680f03833b6df1c86d1a5->enter($__internal_b3fe2863b5c07359c9dda9701f0136a825d39f7ce8f680f03833b6df1c86d1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:expositions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8812a17ddbc2a7db0fb897e4f615148ef484e36ae730a2e41b0c43bafe1d1ad5->leave($__internal_8812a17ddbc2a7db0fb897e4f615148ef484e36ae730a2e41b0c43bafe1d1ad5_prof);

        
        $__internal_b3fe2863b5c07359c9dda9701f0136a825d39f7ce8f680f03833b6df1c86d1a5->leave($__internal_b3fe2863b5c07359c9dda9701f0136a825d39f7ce8f680f03833b6df1c86d1a5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_91e90df29d0be9664e1c3bf9883cbde580393bda5a39862af013938e42727792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e90df29d0be9664e1c3bf9883cbde580393bda5a39862af013938e42727792->enter($__internal_91e90df29d0be9664e1c3bf9883cbde580393bda5a39862af013938e42727792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c8a2cc2862066ed863faa6f702f06dc7de982abafdc11956838c66ee83a7e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8a2cc2862066ed863faa6f702f06dc7de982abafdc11956838c66ee83a7e77->enter($__internal_3c8a2cc2862066ed863faa6f702f06dc7de982abafdc11956838c66ee83a7e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3c8a2cc2862066ed863faa6f702f06dc7de982abafdc11956838c66ee83a7e77->leave($__internal_3c8a2cc2862066ed863faa6f702f06dc7de982abafdc11956838c66ee83a7e77_prof);

        
        $__internal_91e90df29d0be9664e1c3bf9883cbde580393bda5a39862af013938e42727792->leave($__internal_91e90df29d0be9664e1c3bf9883cbde580393bda5a39862af013938e42727792_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bebd07d7c06de909bf60429ea5c3dc12901da4e9c16dba06f206db1afea9d94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebd07d7c06de909bf60429ea5c3dc12901da4e9c16dba06f206db1afea9d94f->enter($__internal_bebd07d7c06de909bf60429ea5c3dc12901da4e9c16dba06f206db1afea9d94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a7edaac7c8de92645f80eb43afe862294d4d940081405dd5d73b9567f42f634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7edaac7c8de92645f80eb43afe862294d4d940081405dd5d73b9567f42f634->enter($__internal_5a7edaac7c8de92645f80eb43afe862294d4d940081405dd5d73b9567f42f634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded expo\">
    <h1>Expositions</h1>
    <aside class=\"col-xs-4\">
        <h3>Évènements</h3>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listArticles"]) ? $context["listArticles"] : $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"single-post-link\">
            <div class=\"single-post\">
                <h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h4>
                <h5>Du 12 au 25 Mai</h5>
                <p>Invité d'honneur - Halle Piquot Leguevin</p>
            </div>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        <ul class=\"pagination\">
            ";
        // line 24
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "            <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 26
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
        // line 29
        echo "    </ul>

</aside>
<article class=\"archives col-xs-8\">
    <h3>Récompenses</h3>
    <div class=\"block\">
        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-one\" hidden />
            <label for=\"item-one\">2015</label>
            <div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Salon d’automne d’Albi – Invité d’honneur</li>
                    <li class=\"list-group-item\">Salon du Pastel Grand Sud – Villepinte ( Aude )</li>
                    <li class=\"list-group-item\">Honorable mention concours Pastel100 – PastelJournal</li>
                    <li class=\"list-group-item\">Prix APF – Salon du Pastel de Giverny</li>
                    <li class=\"list-group-item\">Prix Outstanding Pastel “BolBrush Painting Competition”</li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-two\" hidden />
            <label for=\"item-two\">2014</label>
            <div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Galerie municipale – Salle Paul Descazeaux, Castelsarrasin</li>
                    <li class=\"list-group-item\">Salon des artistes français – Grand palais, Paris</li>
                    <li class=\"list-group-item\">Honorable mention concours Pastel100 – PastelJournal</li>
                    <li class=\"list-group-item\">Salon d’automne de Semalens – Invité d’honneur</li>
                    <li class=\"list-group-item\">Prix de la technique à Ballaruc les bains</li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-three\" hidden />
            <label for=\"item-three\">2013</label>
            <div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Salon de peinture et sculpture – Invité d’honneur</li>
                    <li class=\"list-group-item\">Prix de la technique Fougères</li>
                    <li class=\"list-group-item\">Prix Outstanding Pastel “BolBrush Painting Competition”</li>
                    <li class=\"list-group-item\">2ème prix “peinture figurative” Artoulouse</li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-four\" hidden />
            <label for=\"item-four\">2012</label>
            <div class=\"\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Salon internationnal Greenhouse Gallery, Texas</li>
                    <li class=\"list-group-item\">Prix Académique “Arts et Lettres de France” de Toulouse</li>
                    <li class=\"list-group-item\">Prix des Amis des Arts à Albi</li>
                    <li class=\"list-group-item\">Prix Spécial du Jury à Soual</li>
                    <li class=\"list-group-item\">Prix “Art et Cadres” à Colomiers</li>
                    <li class=\"list-group-item\">Prix de la ville à Sorèze</li>
                    <li class=\"list-group-item\">Finaliste “figurative category” Art Renewal Center</li>
                    <li class=\"list-group-item\">Prix du public à Florentin</li>
                    <li class=\"list-group-item\">Prix “Pastel Society of America” à Giverny 2012</li>
                    <li class=\"list-group-item\">1er prix de peinture à Florentin</li>
                    <li class=\"list-group-item\">Prix du public à Aussonne</li>
                    <li class=\"list-group-item\">1er prix du salon à Fonsorbes</li>
                    <li class=\"list-group-item\">Prix du public à Leguevin</li>
                </ul>
            </div>
        </div>

        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-five\" hidden />
            <label for=\"item-five\">2011</label>
            <div class=\"\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">nvité d’honneur au salon des artiste midi-pyrénées à Tournefeuille</li>
                    <li class=\"list-group-item\">1er prix de peinture à Tournefeuille</li>
                    <li class=\"list-group-item\">1er prix du jury techniques sèches à Soual</li>
                    <li class=\"list-group-item\">Prix du public à Colomiers</li>
                    <li class=\"list-group-item\">Prix du public à Semalens</li>
                    <li class=\"list-group-item\">Prix du Président à Sorèze</li>
                    <li class=\"list-group-item\">Finaliste Art Renewal Center “figurative category”</li>
                    <li class=\"list-group-item\">2ème prix du Public à “Le Fousseret”</li>
                    <li class=\"list-group-item\">1er Prix catégorie contemporain – Perez Fine Art Galleries</li>
                </ul>
            </div>
        </div>

        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-six\" hidden />
            <label for=\"item-six\">2010</label>
            <div class=\"\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Invité d’honneur au salon de peinture de Muret 2010</li>
                    <li class=\"list-group-item\">Prix de peinture à l’ESC Toulouse au concours “Arts et lettres de France”</li>
                    <li class=\"list-group-item\">Prix du public à Soual 2010</li>
                    <li class=\"list-group-item\">Médaille d’argent catégorie “huile” à Soual</li>
                    <li class=\"list-group-item\">1er Prix de peinture de la ville “Le Fousseret”</li>
                    <li class=\"list-group-item\">Prix du public à Aussonne Mai 2010</li>
                    <li class=\"list-group-item\">1er prix du concours « nos lecteurs ont du talent » du magazine « Pratique des Arts »</li>
                </ul>
            </div>
        </div>

        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-seven\" hidden />
            <label for=\"item-seven\">2007 - 1991</label>
            <div class=\"\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Exposition à la galerie Vermayer à Toulouse</li>
                    <li class=\"list-group-item\">exposition à La galerie Murestyl à Toulouse</li>
                    <li class=\"list-group-item\">1er prix de pastel à Fonsorbes</li>
                    <li class=\"list-group-item\">1er prix de dessin à Escalquens</li>
                    <li class=\"list-group-item\">2ème prix de pastel à St-Jean</li>
                    <li class=\"list-group-item\">1er prix de la ville de Toulouse à Balma</li>
                    <li class=\"list-group-item\">Prix de dessin à St-Jean</li>
                    <li class=\"list-group-item\">Prix de dessin à Grenade</li>
                    <li class=\"list-group-item\">Prix de dessin à Escalquens</li>
                    <li class=\"list-group-item\">Diplome d’honneur à St-Jean</li>
                    <li class=\"list-group-item\">1er prix de dessin à L’Union</li>
                    <li class=\"list-group-item\">2ème prix des jeunes talents à Balma</li>
                    <li class=\"list-group-item\">2ème prix des jeunes talents à Arcachon</li>
                </ul>
            </div>
        </div>
    </div>

</article>
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
        // line 164
        $this->loadTemplate("BotellaBundle:blog:footer-page.html.twig", "BotellaBundle:blog:expositions.html.twig", 164)->display($context);
        
        $__internal_5a7edaac7c8de92645f80eb43afe862294d4d940081405dd5d73b9567f42f634->leave($__internal_5a7edaac7c8de92645f80eb43afe862294d4d940081405dd5d73b9567f42f634_prof);

        
        $__internal_bebd07d7c06de909bf60429ea5c3dc12901da4e9c16dba06f206db1afea9d94f->leave($__internal_bebd07d7c06de909bf60429ea5c3dc12901da4e9c16dba06f206db1afea9d94f_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:expositions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 164,  126 => 29,  115 => 26,  108 => 25,  103 => 24,  100 => 22,  88 => 16,  82 => 14,  78 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
<section class=\"cadre row expanded expo\">
    <h1>Expositions</h1>
    <aside class=\"col-xs-4\">
        <h3>Évènements</h3>
        {% for article in listArticles %}
        <a href=\"{{ path('blog_view', { id: article.id}) }}\" class=\"single-post-link\">
            <div class=\"single-post\">
                <h4>{{ article.title }}</h4>
                <h5>Du 12 au 25 Mai</h5>
                <p>Invité d'honneur - Halle Piquot Leguevin</p>
            </div>
        </a>
        {% endfor %}
        <ul class=\"pagination\">
            {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
            {% for p in range(1, nbPages) %}
            <li{% if p == page %} class=\"active\"{% endif %}>
            <a href=\"{{ path('botella_expositions', {'page': p}) }}\">{{ p }}</a>
        </li>
        {% endfor %}
    </ul>

</aside>
<article class=\"archives col-xs-8\">
    <h3>Récompenses</h3>
    <div class=\"block\">
        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-one\" hidden />
            <label for=\"item-one\">2015</label>
            <div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Salon d’automne d’Albi – Invité d’honneur</li>
                    <li class=\"list-group-item\">Salon du Pastel Grand Sud – Villepinte ( Aude )</li>
                    <li class=\"list-group-item\">Honorable mention concours Pastel100 – PastelJournal</li>
                    <li class=\"list-group-item\">Prix APF – Salon du Pastel de Giverny</li>
                    <li class=\"list-group-item\">Prix Outstanding Pastel “BolBrush Painting Competition”</li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-two\" hidden />
            <label for=\"item-two\">2014</label>
            <div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Galerie municipale – Salle Paul Descazeaux, Castelsarrasin</li>
                    <li class=\"list-group-item\">Salon des artistes français – Grand palais, Paris</li>
                    <li class=\"list-group-item\">Honorable mention concours Pastel100 – PastelJournal</li>
                    <li class=\"list-group-item\">Salon d’automne de Semalens – Invité d’honneur</li>
                    <li class=\"list-group-item\">Prix de la technique à Ballaruc les bains</li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-three\" hidden />
            <label for=\"item-three\">2013</label>
            <div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Salon de peinture et sculpture – Invité d’honneur</li>
                    <li class=\"list-group-item\">Prix de la technique Fougères</li>
                    <li class=\"list-group-item\">Prix Outstanding Pastel “BolBrush Painting Competition”</li>
                    <li class=\"list-group-item\">2ème prix “peinture figurative” Artoulouse</li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-four\" hidden />
            <label for=\"item-four\">2012</label>
            <div class=\"\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Salon internationnal Greenhouse Gallery, Texas</li>
                    <li class=\"list-group-item\">Prix Académique “Arts et Lettres de France” de Toulouse</li>
                    <li class=\"list-group-item\">Prix des Amis des Arts à Albi</li>
                    <li class=\"list-group-item\">Prix Spécial du Jury à Soual</li>
                    <li class=\"list-group-item\">Prix “Art et Cadres” à Colomiers</li>
                    <li class=\"list-group-item\">Prix de la ville à Sorèze</li>
                    <li class=\"list-group-item\">Finaliste “figurative category” Art Renewal Center</li>
                    <li class=\"list-group-item\">Prix du public à Florentin</li>
                    <li class=\"list-group-item\">Prix “Pastel Society of America” à Giverny 2012</li>
                    <li class=\"list-group-item\">1er prix de peinture à Florentin</li>
                    <li class=\"list-group-item\">Prix du public à Aussonne</li>
                    <li class=\"list-group-item\">1er prix du salon à Fonsorbes</li>
                    <li class=\"list-group-item\">Prix du public à Leguevin</li>
                </ul>
            </div>
        </div>

        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-five\" hidden />
            <label for=\"item-five\">2011</label>
            <div class=\"\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">nvité d’honneur au salon des artiste midi-pyrénées à Tournefeuille</li>
                    <li class=\"list-group-item\">1er prix de peinture à Tournefeuille</li>
                    <li class=\"list-group-item\">1er prix du jury techniques sèches à Soual</li>
                    <li class=\"list-group-item\">Prix du public à Colomiers</li>
                    <li class=\"list-group-item\">Prix du public à Semalens</li>
                    <li class=\"list-group-item\">Prix du Président à Sorèze</li>
                    <li class=\"list-group-item\">Finaliste Art Renewal Center “figurative category”</li>
                    <li class=\"list-group-item\">2ème prix du Public à “Le Fousseret”</li>
                    <li class=\"list-group-item\">1er Prix catégorie contemporain – Perez Fine Art Galleries</li>
                </ul>
            </div>
        </div>

        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-six\" hidden />
            <label for=\"item-six\">2010</label>
            <div class=\"\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Invité d’honneur au salon de peinture de Muret 2010</li>
                    <li class=\"list-group-item\">Prix de peinture à l’ESC Toulouse au concours “Arts et lettres de France”</li>
                    <li class=\"list-group-item\">Prix du public à Soual 2010</li>
                    <li class=\"list-group-item\">Médaille d’argent catégorie “huile” à Soual</li>
                    <li class=\"list-group-item\">1er Prix de peinture de la ville “Le Fousseret”</li>
                    <li class=\"list-group-item\">Prix du public à Aussonne Mai 2010</li>
                    <li class=\"list-group-item\">1er prix du concours « nos lecteurs ont du talent » du magazine « Pratique des Arts »</li>
                </ul>
            </div>
        </div>

        <div class=\"col-xs-12\">
            <input type=\"checkbox\" name=\"item\" id=\"item-seven\" hidden />
            <label for=\"item-seven\">2007 - 1991</label>
            <div class=\"\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">Exposition à la galerie Vermayer à Toulouse</li>
                    <li class=\"list-group-item\">exposition à La galerie Murestyl à Toulouse</li>
                    <li class=\"list-group-item\">1er prix de pastel à Fonsorbes</li>
                    <li class=\"list-group-item\">1er prix de dessin à Escalquens</li>
                    <li class=\"list-group-item\">2ème prix de pastel à St-Jean</li>
                    <li class=\"list-group-item\">1er prix de la ville de Toulouse à Balma</li>
                    <li class=\"list-group-item\">Prix de dessin à St-Jean</li>
                    <li class=\"list-group-item\">Prix de dessin à Grenade</li>
                    <li class=\"list-group-item\">Prix de dessin à Escalquens</li>
                    <li class=\"list-group-item\">Diplome d’honneur à St-Jean</li>
                    <li class=\"list-group-item\">1er prix de dessin à L’Union</li>
                    <li class=\"list-group-item\">2ème prix des jeunes talents à Balma</li>
                    <li class=\"list-group-item\">2ème prix des jeunes talents à Arcachon</li>
                </ul>
            </div>
        </div>
    </div>

</article>
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
", "BotellaBundle:blog:expositions.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/expositions.html.twig");
    }
}
