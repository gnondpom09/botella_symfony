<?php

/* BotellaBundle:blog:expositions.html.twig */
class __TwigTemplate_526f822fcd5caed3cbc1be0e953062579e4dbcd6930339ee4f059b7c3280ed5c extends Twig_Template
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
        $__internal_91d0c050c10b5463007f2957764dc290bd8266faf5cccef8e969525da31e7d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d0c050c10b5463007f2957764dc290bd8266faf5cccef8e969525da31e7d2c->enter($__internal_91d0c050c10b5463007f2957764dc290bd8266faf5cccef8e969525da31e7d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:expositions.html.twig"));

        $__internal_6a187881d0d6ae8b1c709e4b9531cbca1a8ccb876d52dca282092acdc54e1279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a187881d0d6ae8b1c709e4b9531cbca1a8ccb876d52dca282092acdc54e1279->enter($__internal_6a187881d0d6ae8b1c709e4b9531cbca1a8ccb876d52dca282092acdc54e1279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:expositions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91d0c050c10b5463007f2957764dc290bd8266faf5cccef8e969525da31e7d2c->leave($__internal_91d0c050c10b5463007f2957764dc290bd8266faf5cccef8e969525da31e7d2c_prof);

        
        $__internal_6a187881d0d6ae8b1c709e4b9531cbca1a8ccb876d52dca282092acdc54e1279->leave($__internal_6a187881d0d6ae8b1c709e4b9531cbca1a8ccb876d52dca282092acdc54e1279_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_95d91941452023d154dce17af41699fab3abf52d6be5fe9e1f509ef941684b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d91941452023d154dce17af41699fab3abf52d6be5fe9e1f509ef941684b57->enter($__internal_95d91941452023d154dce17af41699fab3abf52d6be5fe9e1f509ef941684b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4b212ccb07266eedc0dff4a0bfa9d13d8bb052fe18687962aa8dbeadca0cb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b212ccb07266eedc0dff4a0bfa9d13d8bb052fe18687962aa8dbeadca0cb9a->enter($__internal_b4b212ccb07266eedc0dff4a0bfa9d13d8bb052fe18687962aa8dbeadca0cb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Galerie - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b4b212ccb07266eedc0dff4a0bfa9d13d8bb052fe18687962aa8dbeadca0cb9a->leave($__internal_b4b212ccb07266eedc0dff4a0bfa9d13d8bb052fe18687962aa8dbeadca0cb9a_prof);

        
        $__internal_95d91941452023d154dce17af41699fab3abf52d6be5fe9e1f509ef941684b57->leave($__internal_95d91941452023d154dce17af41699fab3abf52d6be5fe9e1f509ef941684b57_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f20a2b341f38272b0fffefefa3c1f027ac0af6a2705829944f7539e53871df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f20a2b341f38272b0fffefefa3c1f027ac0af6a2705829944f7539e53871df0->enter($__internal_9f20a2b341f38272b0fffefefa3c1f027ac0af6a2705829944f7539e53871df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_314370edebfb8dd5295801c3698f422eef0fc0f3e05d8babb5c2e2200f0cca21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314370edebfb8dd5295801c3698f422eef0fc0f3e05d8babb5c2e2200f0cca21->enter($__internal_314370edebfb8dd5295801c3698f422eef0fc0f3e05d8babb5c2e2200f0cca21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<section class=\"cadre row expanded expo\">
    <h1>Expositions</h1>
    <aside class=\"col-xs-4\">
        <h3>Évènements</h3>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listArticles"] ?? $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "            ";
            if ($this->getAttribute($context["article"], "categories", array())) {
                // line 15
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "categories", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 16
                    echo "                    ";
                    if (($this->getAttribute($context["category"], "name", array()) == "Expositions")) {
                        // line 17
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_view", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                        echo "\" class=\"single-post-link\">
                        <div class=\"single-post\">
                            <h4>";
                        // line 19
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                        echo "</h4>
                            <h5>";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
                        echo "</h5>
                        </div>
                    </a>
                    <ul class=\"pagination\">
                        ";
                        // line 25
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? $this->getContext($context, "nbPages"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                            // line 26
                            echo "                            <li";
                            if (($context["p"] == ($context["page"] ?? $this->getContext($context, "page")))) {
                                echo " class=\"active\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 27
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
                        // line 30
                        echo "                    </ul>
                    ";
                    }
                    // line 32
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "            ";
            }
            // line 34
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
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
        // line 169
        $this->loadTemplate("BotellaBundle:blog:footer-page.html.twig", "BotellaBundle:blog:expositions.html.twig", 169)->display($context);
        
        $__internal_314370edebfb8dd5295801c3698f422eef0fc0f3e05d8babb5c2e2200f0cca21->leave($__internal_314370edebfb8dd5295801c3698f422eef0fc0f3e05d8babb5c2e2200f0cca21_prof);

        
        $__internal_9f20a2b341f38272b0fffefefa3c1f027ac0af6a2705829944f7539e53871df0->leave($__internal_9f20a2b341f38272b0fffefefa3c1f027ac0af6a2705829944f7539e53871df0_prof);

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
        return array (  288 => 169,  152 => 35,  146 => 34,  143 => 33,  137 => 32,  133 => 30,  122 => 27,  115 => 26,  110 => 25,  103 => 20,  99 => 19,  93 => 17,  90 => 16,  85 => 15,  82 => 14,  78 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 1,);
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
            {% if article.categories  %}
                {% for category in article.categories %}
                    {% if category.name == \"Expositions\" %}
                    <a href=\"{{ path('blog_view', { id: article.id}) }}\" class=\"single-post-link\">
                        <div class=\"single-post\">
                            <h4>{{ article.title }}</h4>
                            <h5>{{ article.content }}</h5>
                        </div>
                    </a>
                    <ul class=\"pagination\">
                        {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
                        {% for p in range(1, nbPages) %}
                            <li{% if p == page %} class=\"active\"{% endif %}>
                                <a href=\"{{ path('botella_expositions', {'page': p}) }}\">{{ p }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}

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
