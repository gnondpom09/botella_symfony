<?php

/* BotellaBundle:blog:footer-page.html.twig */
class __TwigTemplate_2d41eab84778185bd8ca4c0c5486e7859f81dfdb56186fde4f60c09dcc14accf extends Twig_Template
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
        $__internal_e7f6e747d840675baf40661d2cfb1a9b8254d76da8f9774e20d4a6ad46a90f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f6e747d840675baf40661d2cfb1a9b8254d76da8f9774e20d4a6ad46a90f8b->enter($__internal_e7f6e747d840675baf40661d2cfb1a9b8254d76da8f9774e20d4a6ad46a90f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:footer-page.html.twig"));

        $__internal_b4703a9c5f79ae9dd6d449f1f741f2ba05e96032792e1630977158446d9ccafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4703a9c5f79ae9dd6d449f1f741f2ba05e96032792e1630977158446d9ccafd->enter($__internal_b4703a9c5f79ae9dd6d449f1f741f2ba05e96032792e1630977158446d9ccafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle:blog:footer-page.html.twig"));

        // line 1
        echo "<footer id=\"section5-bis\" class=\"under container footer-page\">
    <div class=\"wrapper-footer\">
        <div class=\" col-xs-12 social\">
            <a href=\"https://www.facebook.com/laurentbotellaartist/\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/facebook.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </a>
            <a href=\"https://instagram.com/laurentbotella/\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/instagram.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </a>
            <a href=\"https://twitter.com/laurentbotella\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/twiter.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </a>
            <a href=\"https://www.youtube.com/channel/UCPhwMWvem3Ef9wXD2MX54Nw\" class=\"social icon youtube\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/youtube.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </a>
        </div>
        <div class=\"col-xs-12\">
            <ul class=\"sub-menu\">
                <li>
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_bio");
        echo "\">Biographie</a>
                </li>
                <li>
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_gallery");
        echo "\">Galerie</a>
                </li>
                <li>
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_videos");
        echo "\">Vidéos</a>
                </li>
                <li>
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_expositions");
        echo "\">Expositions</a>
                </li>
                <li>
                    <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_contact");
        echo "\">Contact</a>
                </li>
            </ul>
        </div>
        <div class=\"col-xs-12 credit\">
            <p>Crédit : <a href=\"https://www.linkedin.com/in/laurent-botella-9ba310125/\" target=\"new\">Laurent Botella</a> | Copyright © 2017 | <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_legal");
        echo "\">Mentions légales</a></p>
            <span>
                <p>Ressources : <a href=\"http://PixelBuddha.net\" target=\"new\">PixelBuddha.net</a></p>
            </span>
        </div>
    </div>
</footer>
";
        
        $__internal_e7f6e747d840675baf40661d2cfb1a9b8254d76da8f9774e20d4a6ad46a90f8b->leave($__internal_e7f6e747d840675baf40661d2cfb1a9b8254d76da8f9774e20d4a6ad46a90f8b_prof);

        
        $__internal_b4703a9c5f79ae9dd6d449f1f741f2ba05e96032792e1630977158446d9ccafd->leave($__internal_b4703a9c5f79ae9dd6d449f1f741f2ba05e96032792e1630977158446d9ccafd_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle:blog:footer-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  82 => 32,  76 => 29,  70 => 26,  64 => 23,  58 => 20,  49 => 14,  43 => 11,  37 => 8,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"section5-bis\" class=\"under container footer-page\">
    <div class=\"wrapper-footer\">
        <div class=\" col-xs-12 social\">
            <a href=\"https://www.facebook.com/laurentbotellaartist/\">
                <img src=\"{{ asset('uploads/img/facebook.jpg') }}\" alt=\"\">
            </a>
            <a href=\"https://instagram.com/laurentbotella/\">
                <img src=\"{{ asset('uploads/img/instagram.jpg') }}\" alt=\"\">
            </a>
            <a href=\"https://twitter.com/laurentbotella\">
                <img src=\"{{ asset('uploads/img/twiter.jpg') }}\" alt=\"\">
            </a>
            <a href=\"https://www.youtube.com/channel/UCPhwMWvem3Ef9wXD2MX54Nw\" class=\"social icon youtube\">
                <img src=\"{{ asset('uploads/img/youtube.jpg') }}\" alt=\"\">
            </a>
        </div>
        <div class=\"col-xs-12\">
            <ul class=\"sub-menu\">
                <li>
                    <a href=\"{{ path('botella_bio') }}\">Biographie</a>
                </li>
                <li>
                    <a href=\"{{ path('botella_gallery') }}\">Galerie</a>
                </li>
                <li>
                    <a href=\"{{ path('botella_videos') }}\">Vidéos</a>
                </li>
                <li>
                    <a href=\"{{ path('botella_expositions') }}\">Expositions</a>
                </li>
                <li>
                    <a href=\"{{ path('botella_contact') }}\">Contact</a>
                </li>
            </ul>
        </div>
        <div class=\"col-xs-12 credit\">
            <p>Crédit : <a href=\"https://www.linkedin.com/in/laurent-botella-9ba310125/\" target=\"new\">Laurent Botella</a> | Copyright © 2017 | <a href=\"{{ path('botella_legal') }}\">Mentions légales</a></p>
            <span>
                <p>Ressources : <a href=\"http://PixelBuddha.net\" target=\"new\">PixelBuddha.net</a></p>
            </span>
        </div>
    </div>
</footer>
", "BotellaBundle:blog:footer-page.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/blog/footer-page.html.twig");
    }
}
