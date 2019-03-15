<?php

/* BotellaBundle::layout.html.twig */
class __TwigTemplate_37d89aabbbcae2dd105ab7c511d39bf70d1df2df38e4e6ca45b803def0b6f985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b89047cfd28d9290c48ed18d4630687ac62606e4672b352efaaf0b7c1afa4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b89047cfd28d9290c48ed18d4630687ac62606e4672b352efaaf0b7c1afa4f9->enter($__internal_9b89047cfd28d9290c48ed18d4630687ac62606e4672b352efaaf0b7c1afa4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout.html.twig"));

        $__internal_50112135c4e06fd766c367bca198736af3c4cff8a0acc76a322a09efb5a8be91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50112135c4e06fd766c367bca198736af3c4cff8a0acc76a322a09efb5a8be91->enter($__internal_50112135c4e06fd766c367bca198736af3c4cff8a0acc76a322a09efb5a8be91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/fav.jpg"), "html", null, true);
        echo "\">

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <!-- fonts -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Cinzel|Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,600,600i,700,800\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/Brownhill-Script"), "html", null, true);
        echo "\">

    <!-- StepForm -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" type=\"text/css\">

    <!--JQuery-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\" charset=\"utf-8\"></script>

    <!-- Loader -->
    <script>jQuery(window).load(function(){ jQuery(\".loader\").fadeOut(\"200\"); });</script>

</head>
<body id=\"homepage\">

    <div class=\"loader progress\">
        <div class=\"indeterminate\" style=\"width: 50%;\"></div>
    </div>

    <div id=\"section1\" class=\"\">
        <header>
            <div id=\"logo\" class=\"col-xs-3\">
                <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_homepage");
        echo "\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/signature.png"), "html", null, true);
        echo "\" alt=\"logo\">
                </a>
            </div>
            ";
        // line 43
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_backoffice");
            echo "\">Backend</a>
            ";
        }
        // line 46
        echo "            <nav class=\"menu-opener\">
                <div class=\"menu-opener-inner\"></div>
            </nav>
            <nav class=\"menu\">
                <ul class=\"menu-inner\">
                    <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_bio");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_gallery");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_videos");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_expositions");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_contact");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                </ul>
            </nav>
        </header>

        ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" charset=\"utf-8\"></script>

    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
    <!-- Portfolio -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.filterizr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gallery.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <!-- Stepform -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stepform.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>

    <script type=\"text/javascript\">
    \$(function() {
        //Initialize filterizr with default options
        \$('.filtr-container').filterizr();
    });
    </script>

    <!-- Lightbox -->
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.events.touch.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/simplelightBox.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('a[data-rel^=lightcase]').lightcase({
                // options
                transition: 'scrollHorizontal',
                showSequenceInfo: false,
                showTitle: false,
                swipe: true // modifier la vitesse
            });
        });
    </script>

    ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "
    <script>
        var theForm = document.getElementById( 'theForm' );

        new stepsForm( theForm, {
            onSubmit : function( form ) {
                // hide form
                classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );
                form.submit();
                /*
                form.submit()
                */

                // let's just simulate something...
                var messageEl = theForm.querySelector( '.final-message' );
                messageEl.innerHTML = 'Thank you! We\\'ll be in touch.';
                classie.addClass( messageEl, 'show' );
            }
        } );
    </script>


</body>
</html>
";
        
        $__internal_9b89047cfd28d9290c48ed18d4630687ac62606e4672b352efaaf0b7c1afa4f9->leave($__internal_9b89047cfd28d9290c48ed18d4630687ac62606e4672b352efaaf0b7c1afa4f9_prof);

        
        $__internal_50112135c4e06fd766c367bca198736af3c4cff8a0acc76a322a09efb5a8be91->leave($__internal_50112135c4e06fd766c367bca198736af3c4cff8a0acc76a322a09efb5a8be91_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_61dee9006ada67ca4107534db5551fe70b79a6240ccb19d20620a5ffe70538a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dee9006ada67ca4107534db5551fe70b79a6240ccb19d20620a5ffe70538a3->enter($__internal_61dee9006ada67ca4107534db5551fe70b79a6240ccb19d20620a5ffe70538a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ace6777ef8739473e536b37b0cefdce47578ba4409e3feee3ad304fdafdd2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ace6777ef8739473e536b37b0cefdce47578ba4409e3feee3ad304fdafdd2da->enter($__internal_9ace6777ef8739473e536b37b0cefdce47578ba4409e3feee3ad304fdafdd2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Laurent Botella";
        
        $__internal_9ace6777ef8739473e536b37b0cefdce47578ba4409e3feee3ad304fdafdd2da->leave($__internal_9ace6777ef8739473e536b37b0cefdce47578ba4409e3feee3ad304fdafdd2da_prof);

        
        $__internal_61dee9006ada67ca4107534db5551fe70b79a6240ccb19d20620a5ffe70538a3->leave($__internal_61dee9006ada67ca4107534db5551fe70b79a6240ccb19d20620a5ffe70538a3_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d8085f8de4c16fdae4dabd3a6fc5ba24efd3472b5114819e06a2136465d13bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8085f8de4c16fdae4dabd3a6fc5ba24efd3472b5114819e06a2136465d13bb->enter($__internal_3d8085f8de4c16fdae4dabd3a6fc5ba24efd3472b5114819e06a2136465d13bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9ac5b56c4679fbdfad912d96ed819acac7f9f2f80e0db875fd04d31193553ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac5b56c4679fbdfad912d96ed819acac7f9f2f80e0db875fd04d31193553ae8->enter($__internal_9ac5b56c4679fbdfad912d96ed819acac7f9f2f80e0db875fd04d31193553ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <!-- style application -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        
        $__internal_9ac5b56c4679fbdfad912d96ed819acac7f9f2f80e0db875fd04d31193553ae8->leave($__internal_9ac5b56c4679fbdfad912d96ed819acac7f9f2f80e0db875fd04d31193553ae8_prof);

        
        $__internal_3d8085f8de4c16fdae4dabd3a6fc5ba24efd3472b5114819e06a2136465d13bb->leave($__internal_3d8085f8de4c16fdae4dabd3a6fc5ba24efd3472b5114819e06a2136465d13bb_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_8507f423af6e3a080c15143ae317e95392edc1b517cdf362469d5298c3fd7fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8507f423af6e3a080c15143ae317e95392edc1b517cdf362469d5298c3fd7fa1->enter($__internal_8507f423af6e3a080c15143ae317e95392edc1b517cdf362469d5298c3fd7fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_235d9329614324c5ba3fd60c323daba56b2e35857668191fbe4df954e12ab775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235d9329614324c5ba3fd60c323daba56b2e35857668191fbe4df954e12ab775->enter($__internal_235d9329614324c5ba3fd60c323daba56b2e35857668191fbe4df954e12ab775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 81
        echo "        <!--contenu principal-->
        ";
        
        $__internal_235d9329614324c5ba3fd60c323daba56b2e35857668191fbe4df954e12ab775->leave($__internal_235d9329614324c5ba3fd60c323daba56b2e35857668191fbe4df954e12ab775_prof);

        
        $__internal_8507f423af6e3a080c15143ae317e95392edc1b517cdf362469d5298c3fd7fa1->leave($__internal_8507f423af6e3a080c15143ae317e95392edc1b517cdf362469d5298c3fd7fa1_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d118eba3cc8d88e0a7e8aa8d9c69d85a281d46aa1e89f5f0edc14c53bf55dbe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d118eba3cc8d88e0a7e8aa8d9c69d85a281d46aa1e89f5f0edc14c53bf55dbe2->enter($__internal_d118eba3cc8d88e0a7e8aa8d9c69d85a281d46aa1e89f5f0edc14c53bf55dbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_16b7198477cd4f9a7c04b8ca8272862030a344239da4ceec18ef30c7d36998cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b7198477cd4f9a7c04b8ca8272862030a344239da4ceec18ef30c7d36998cd->enter($__internal_16b7198477cd4f9a7c04b8ca8272862030a344239da4ceec18ef30c7d36998cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stepform.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    ";
        
        $__internal_16b7198477cd4f9a7c04b8ca8272862030a344239da4ceec18ef30c7d36998cd->leave($__internal_16b7198477cd4f9a7c04b8ca8272862030a344239da4ceec18ef30c7d36998cd_prof);

        
        $__internal_d118eba3cc8d88e0a7e8aa8d9c69d85a281d46aa1e89f5f0edc14c53bf55dbe2->leave($__internal_d118eba3cc8d88e0a7e8aa8d9c69d85a281d46aa1e89f5f0edc14c53bf55dbe2_prof);

    }

    public function getTemplateName()
    {
        return "BotellaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 121,  318 => 119,  313 => 118,  304 => 117,  293 => 81,  284 => 80,  272 => 11,  267 => 8,  258 => 7,  240 => 4,  206 => 123,  204 => 117,  188 => 104,  184 => 103,  171 => 93,  165 => 90,  161 => 89,  153 => 83,  151 => 80,  139 => 71,  131 => 66,  123 => 61,  115 => 56,  107 => 51,  100 => 46,  94 => 44,  92 => 43,  86 => 40,  82 => 39,  60 => 20,  56 => 19,  50 => 16,  45 => 13,  43 => 7,  38 => 5,  34 => 4,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>{% block title %}Laurent Botella{% endblock %}</title>
    <link rel=\"shortcut icon\" href=\"{{ asset('uploads/img/fav.jpg') }}\">

    {% block stylesheets %}
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <!-- style application -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" type=\"text/css\" />
    {% endblock %}
    <!-- fonts -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Cinzel|Open+Sans+Condensed:300,300i,700|Open+Sans:300,300i,400,400i,600,600i,700,800\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('fonts/Brownhill-Script') }}\">

    <!-- StepForm -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/demo.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/component.css') }}\" type=\"text/css\">

    <!--JQuery-->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\" charset=\"utf-8\"></script>

    <!-- Loader -->
    <script>jQuery(window).load(function(){ jQuery(\".loader\").fadeOut(\"200\"); });</script>

</head>
<body id=\"homepage\">

    <div class=\"loader progress\">
        <div class=\"indeterminate\" style=\"width: 50%;\"></div>
    </div>

    <div id=\"section1\" class=\"\">
        <header>
            <div id=\"logo\" class=\"col-xs-3\">
                <a href=\"{{ path('botella_homepage') }}\">
                    <img src=\"{{asset('uploads/img/signature.png')}}\" alt=\"logo\">
                </a>
            </div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            <a href=\"{{ path('blog_backoffice') }}\">Backend</a>
            {% endif %}
            <nav class=\"menu-opener\">
                <div class=\"menu-opener-inner\"></div>
            </nav>
            <nav class=\"menu\">
                <ul class=\"menu-inner\">
                    <a href=\"{{ path('botella_bio') }}\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"{{ path('botella_gallery') }}\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"{{ path('botella_videos') }}\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"{{ path('botella_expositions') }}\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"{{ path('botella_contact') }}\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                </ul>
            </nav>
        </header>

        {% block body %}
        <!--contenu principal-->
        {% endblock %}

    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" charset=\"utf-8\"></script>

    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
    <!-- Portfolio -->
    <script src=\"{{ asset('js/jquery.filterizr.min.js') }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"{{ asset('js/gallery.js') }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <!-- Stepform -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js\" charset=\"utf-8\"></script>
    <script src=\"{{ asset('js/stepform.js') }}\" charset=\"utf-8\"></script>

    <script type=\"text/javascript\">
    \$(function() {
        //Initialize filterizr with default options
        \$('.filtr-container').filterizr();
    });
    </script>

    <!-- Lightbox -->
    <script src=\"{{ asset('js/jquery.events.touch.js') }}\" charset=\"utf-8\"></script>
    <script src=\"{{ asset('js/simplelightBox.js') }}\" charset=\"utf-8\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('a[data-rel^=lightcase]').lightcase({
                // options
                transition: 'scrollHorizontal',
                showSequenceInfo: false,
                showTitle: false,
                swipe: true // modifier la vitesse
            });
        });
    </script>

    {% block javascripts %}
    <script src=\"{{ asset('js/script.js') }}\"></script>
    <script src=\"{{ asset('js/modernizr.custom.js') }}\" charset=\"utf-8\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js\" charset=\"utf-8\"></script>
    <script src=\"{{ asset('js/stepform.js') }}\" charset=\"utf-8\"></script>
    {% endblock %}

    <script>
        var theForm = document.getElementById( 'theForm' );

        new stepsForm( theForm, {
            onSubmit : function( form ) {
                // hide form
                classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );
                form.submit();
                /*
                form.submit()
                */

                // let's just simulate something...
                var messageEl = theForm.querySelector( '.final-message' );
                messageEl.innerHTML = 'Thank you! We\\'ll be in touch.';
                classie.addClass( messageEl, 'show' );
            }
        } );
    </script>


</body>
</html>
", "BotellaBundle::layout.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/layout.html.twig");
    }
}
