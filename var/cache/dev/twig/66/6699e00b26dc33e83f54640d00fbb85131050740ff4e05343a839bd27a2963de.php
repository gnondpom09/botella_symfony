<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_8fad9954225fa679191e8eb04d5ef4d2667181fd70ef4b26ca69f61b59ab64ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01b78230dddee8c503dac23e204ded4c6eedf022a4466078f9cba12263e5d38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b78230dddee8c503dac23e204ded4c6eedf022a4466078f9cba12263e5d38d->enter($__internal_01b78230dddee8c503dac23e204ded4c6eedf022a4466078f9cba12263e5d38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $__internal_7ea923baabb56a81cab34bc7b29841a9798f1254fb92db4fe1a2965b2a5599e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea923baabb56a81cab34bc7b29841a9798f1254fb92db4fe1a2965b2a5599e6->enter($__internal_7ea923baabb56a81cab34bc7b29841a9798f1254fb92db4fe1a2965b2a5599e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01b78230dddee8c503dac23e204ded4c6eedf022a4466078f9cba12263e5d38d->leave($__internal_01b78230dddee8c503dac23e204ded4c6eedf022a4466078f9cba12263e5d38d_prof);

        
        $__internal_7ea923baabb56a81cab34bc7b29841a9798f1254fb92db4fe1a2965b2a5599e6->leave($__internal_7ea923baabb56a81cab34bc7b29841a9798f1254fb92db4fe1a2965b2a5599e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3bd982159e2e0d75d09e974855593bb2b1ab348170f9a0a7d07be483561b44d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd982159e2e0d75d09e974855593bb2b1ab348170f9a0a7d07be483561b44d0->enter($__internal_3bd982159e2e0d75d09e974855593bb2b1ab348170f9a0a7d07be483561b44d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c5ac6a36ccdbb477f4a6ff29978d4ca434fdd9618ae584ac45560c7fbedf58aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ac6a36ccdbb477f4a6ff29978d4ca434fdd9618ae584ac45560c7fbedf58aa->enter($__internal_c5ac6a36ccdbb477f4a6ff29978d4ca434fdd9618ae584ac45560c7fbedf58aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_c5ac6a36ccdbb477f4a6ff29978d4ca434fdd9618ae584ac45560c7fbedf58aa->leave($__internal_c5ac6a36ccdbb477f4a6ff29978d4ca434fdd9618ae584ac45560c7fbedf58aa_prof);

        
        $__internal_3bd982159e2e0d75d09e974855593bb2b1ab348170f9a0a7d07be483561b44d0->leave($__internal_3bd982159e2e0d75d09e974855593bb2b1ab348170f9a0a7d07be483561b44d0_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  63 => 12,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('console') }}\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    {% endset %}
    {% set text %}Console{% endset %}

    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/coresphere/console-bundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
