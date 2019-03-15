<?php

/* BotellaBundle::layout.html.twig */
class __TwigTemplate_1af35d81e49ab30572695318d58841b921e7b1c5d520287baeb6e7c2496b2c7b extends Twig_Template
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
        $__internal_68a53262cf65910623f07c11e766c196c9eb9c4479d481515992ebb7f1434400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a53262cf65910623f07c11e766c196c9eb9c4479d481515992ebb7f1434400->enter($__internal_68a53262cf65910623f07c11e766c196c9eb9c4479d481515992ebb7f1434400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout.html.twig"));

        $__internal_f373f8168893f04de71c18db713ae7bde7140624f34c09db29568a899822a375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f373f8168893f04de71c18db713ae7bde7140624f34c09db29568a899822a375->enter($__internal_f373f8168893f04de71c18db713ae7bde7140624f34c09db29568a899822a375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BotellaBundle::layout.html.twig"));

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
    <!-- lightbox -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simpleLightBox.css"), "html", null, true);
        echo "\">
    <!-- Animation gallery  category -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/gallery.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!-- StepForm -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
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
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_homepage");
        echo "\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/signature.png"), "html", null, true);
        echo "\" alt=\"logo\">
                </a>
            </div>
            ";
        // line 47
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 48
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_backoffice");
            echo "\">Backend</a>
            ";
        }
        // line 50
        echo "            <nav class=\"menu-opener\">
                <div class=\"menu-opener-inner\"></div>
            </nav>
            <nav class=\"menu\">
                <ul class=\"menu-inner\">
                    <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_bio");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_gallery");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-picture-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_videos");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-video-camera\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_expositions");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("botella_contest");
        echo "\" class=\"menu-link\">
                        <li>
                            <i class=\"fa fa-calendar-check-o\" aria-hidden=\"true\"></i>
                        </li>
                    </a>
                    <a href=\"";
        // line 80
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
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" charset=\"utf-8\"></script>

    <!-- Compiled and minified JavaScript -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>
    <!-- Portfolio -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.filterizr.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/gallery.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <!-- Stepform -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 102
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
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.events.touch.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 113
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
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "

    <script src=\"http://code.jquery.com/jquery-1.11.3.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simplewizard.js"), "html", null, true);
        echo "\"></script>



</body>
</html>
";
        
        $__internal_68a53262cf65910623f07c11e766c196c9eb9c4479d481515992ebb7f1434400->leave($__internal_68a53262cf65910623f07c11e766c196c9eb9c4479d481515992ebb7f1434400_prof);

        
        $__internal_f373f8168893f04de71c18db713ae7bde7140624f34c09db29568a899822a375->leave($__internal_f373f8168893f04de71c18db713ae7bde7140624f34c09db29568a899822a375_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c55d288eac4539c5baba04b21689e15708d476622eb4e732c2de0ac1e3588d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c55d288eac4539c5baba04b21689e15708d476622eb4e732c2de0ac1e3588d9->enter($__internal_9c55d288eac4539c5baba04b21689e15708d476622eb4e732c2de0ac1e3588d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69faadf8d0869b7c93a902d05e1a7101b9a768f36b35f8adca1a19ee5687c4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69faadf8d0869b7c93a902d05e1a7101b9a768f36b35f8adca1a19ee5687c4f1->enter($__internal_69faadf8d0869b7c93a902d05e1a7101b9a768f36b35f8adca1a19ee5687c4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Laurent Botella";
        
        $__internal_69faadf8d0869b7c93a902d05e1a7101b9a768f36b35f8adca1a19ee5687c4f1->leave($__internal_69faadf8d0869b7c93a902d05e1a7101b9a768f36b35f8adca1a19ee5687c4f1_prof);

        
        $__internal_9c55d288eac4539c5baba04b21689e15708d476622eb4e732c2de0ac1e3588d9->leave($__internal_9c55d288eac4539c5baba04b21689e15708d476622eb4e732c2de0ac1e3588d9_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_853b0e1f3ab5d163be2e0c16ca05994d060e46428f06fbbe8358751e29f46780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853b0e1f3ab5d163be2e0c16ca05994d060e46428f06fbbe8358751e29f46780->enter($__internal_853b0e1f3ab5d163be2e0c16ca05994d060e46428f06fbbe8358751e29f46780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b2b658d202a875511c46aef522296407d33cb8a0c8ab6b50acf0de5f120f6c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b658d202a875511c46aef522296407d33cb8a0c8ab6b50acf0de5f120f6c2c->enter($__internal_b2b658d202a875511c46aef522296407d33cb8a0c8ab6b50acf0de5f120f6c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <!-- style application -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        
        $__internal_b2b658d202a875511c46aef522296407d33cb8a0c8ab6b50acf0de5f120f6c2c->leave($__internal_b2b658d202a875511c46aef522296407d33cb8a0c8ab6b50acf0de5f120f6c2c_prof);

        
        $__internal_853b0e1f3ab5d163be2e0c16ca05994d060e46428f06fbbe8358751e29f46780->leave($__internal_853b0e1f3ab5d163be2e0c16ca05994d060e46428f06fbbe8358751e29f46780_prof);

    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        $__internal_7edd587481092f367ee92378f2581733c80b10d43f5752e1d1db0366c3d4145b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7edd587481092f367ee92378f2581733c80b10d43f5752e1d1db0366c3d4145b->enter($__internal_7edd587481092f367ee92378f2581733c80b10d43f5752e1d1db0366c3d4145b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1aa0d6c48ef94ac61d6b0e775b55e59c0b4e64833a7b89f91c5a236c5b0c1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1aa0d6c48ef94ac61d6b0e775b55e59c0b4e64833a7b89f91c5a236c5b0c1c4->enter($__internal_f1aa0d6c48ef94ac61d6b0e775b55e59c0b4e64833a7b89f91c5a236c5b0c1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 90
        echo "        <!--contenu principal-->
        ";
        
        $__internal_f1aa0d6c48ef94ac61d6b0e775b55e59c0b4e64833a7b89f91c5a236c5b0c1c4->leave($__internal_f1aa0d6c48ef94ac61d6b0e775b55e59c0b4e64833a7b89f91c5a236c5b0c1c4_prof);

        
        $__internal_7edd587481092f367ee92378f2581733c80b10d43f5752e1d1db0366c3d4145b->leave($__internal_7edd587481092f367ee92378f2581733c80b10d43f5752e1d1db0366c3d4145b_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe59a526e17cdc99f1e6df654d76228cb8b1427a01e62e12d36c2a366e47c7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe59a526e17cdc99f1e6df654d76228cb8b1427a01e62e12d36c2a366e47c7e2->enter($__internal_fe59a526e17cdc99f1e6df654d76228cb8b1427a01e62e12d36c2a366e47c7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a76965e3df052f595b35f170919fe616c49eea7bd558fcb96aa26d442aa0de24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76965e3df052f595b35f170919fe616c49eea7bd558fcb96aa26d442aa0de24->enter($__internal_a76965e3df052f595b35f170919fe616c49eea7bd558fcb96aa26d442aa0de24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/stepform.js"), "html", null, true);
        echo "\" charset=\"utf-8\"></script>
    ";
        
        $__internal_a76965e3df052f595b35f170919fe616c49eea7bd558fcb96aa26d442aa0de24->leave($__internal_a76965e3df052f595b35f170919fe616c49eea7bd558fcb96aa26d442aa0de24_prof);

        
        $__internal_fe59a526e17cdc99f1e6df654d76228cb8b1427a01e62e12d36c2a366e47c7e2->leave($__internal_fe59a526e17cdc99f1e6df654d76228cb8b1427a01e62e12d36c2a366e47c7e2_prof);

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
        return array (  333 => 130,  329 => 129,  325 => 128,  320 => 127,  311 => 126,  300 => 90,  291 => 89,  279 => 11,  274 => 8,  265 => 7,  247 => 4,  230 => 136,  224 => 132,  222 => 126,  206 => 113,  202 => 112,  189 => 102,  183 => 99,  179 => 98,  171 => 92,  169 => 89,  157 => 80,  149 => 75,  141 => 70,  133 => 65,  125 => 60,  117 => 55,  110 => 50,  104 => 48,  102 => 47,  96 => 44,  92 => 43,  69 => 23,  65 => 22,  60 => 20,  55 => 18,  50 => 16,  45 => 13,  43 => 7,  38 => 5,  34 => 4,  29 => 1,);
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
    <!-- lightbox -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/simpleLightBox.css') }}\">
    <!-- Animation gallery  category -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/gallery.css') }}\" type=\"text/css\">
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
                    <a href=\"{{ path('botella_contest') }}\" class=\"menu-link\">
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
    <script src=\"{{ asset('js/classie.js') }}\" charset=\"utf-8\"></script>
    <script src=\"{{ asset('js/stepform.js') }}\" charset=\"utf-8\"></script>
    {% endblock %}


    <script src=\"http://code.jquery.com/jquery-1.11.3.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js\"></script>
    <script src=\"{{ asset('css/simplewizard.js') }}\"></script>



</body>
</html>
", "BotellaBundle::layout.html.twig", "/Applications/MAMP/htdocs/app_botella/src/BotellaBundle/Resources/views/layout.html.twig");
    }
}
