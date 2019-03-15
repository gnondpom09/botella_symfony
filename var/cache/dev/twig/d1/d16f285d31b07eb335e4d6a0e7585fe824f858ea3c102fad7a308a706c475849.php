<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_a50b87d290367a0c517f75bb77e93f993534cb336ffa301cc71460c58cdadb0c extends Twig_Template
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
        $__internal_b6e41d2afd91db6cb0e59b9a6fba3806cd612c1ebc05c097de36c7a1f737f66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e41d2afd91db6cb0e59b9a6fba3806cd612c1ebc05c097de36c7a1f737f66c->enter($__internal_b6e41d2afd91db6cb0e59b9a6fba3806cd612c1ebc05c097de36c7a1f737f66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_ce7b9e664c59ed4e3f1b4e61198e5828da5d85ab90f66ffaac47a9367e9fea0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7b9e664c59ed4e3f1b4e61198e5828da5d85ab90f66ffaac47a9367e9fea0b->enter($__internal_ce7b9e664c59ed4e3f1b4e61198e5828da5d85ab90f66ffaac47a9367e9fea0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_b6e41d2afd91db6cb0e59b9a6fba3806cd612c1ebc05c097de36c7a1f737f66c->leave($__internal_b6e41d2afd91db6cb0e59b9a6fba3806cd612c1ebc05c097de36c7a1f737f66c_prof);

        
        $__internal_ce7b9e664c59ed4e3f1b4e61198e5828da5d85ab90f66ffaac47a9367e9fea0b->leave($__internal_ce7b9e664c59ed4e3f1b4e61198e5828da5d85ab90f66ffaac47a9367e9fea0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
