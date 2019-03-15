<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_6617c35e4b163bb5fa72e904f99f2d36ff92926e7d3b72951b8daaeb4b58cb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81d3b267dd8df960a87882cb3986c62b9a96a794aeb5cbb074a274b882ba5852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d3b267dd8df960a87882cb3986c62b9a96a794aeb5cbb074a274b882ba5852->enter($__internal_81d3b267dd8df960a87882cb3986c62b9a96a794aeb5cbb074a274b882ba5852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e628af026f456d5e456cd853922bf33d1b3f377e3d70d25cd7b03be367fe6b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e628af026f456d5e456cd853922bf33d1b3f377e3d70d25cd7b03be367fe6b22->enter($__internal_e628af026f456d5e456cd853922bf33d1b3f377e3d70d25cd7b03be367fe6b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_81d3b267dd8df960a87882cb3986c62b9a96a794aeb5cbb074a274b882ba5852->leave($__internal_81d3b267dd8df960a87882cb3986c62b9a96a794aeb5cbb074a274b882ba5852_prof);

        
        $__internal_e628af026f456d5e456cd853922bf33d1b3f377e3d70d25cd7b03be367fe6b22->leave($__internal_e628af026f456d5e456cd853922bf33d1b3f377e3d70d25cd7b03be367fe6b22_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c85f6ece64207741ccb0507d4e6b6fb2078d5715ce033978adc087dde0099a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85f6ece64207741ccb0507d4e6b6fb2078d5715ce033978adc087dde0099a54->enter($__internal_c85f6ece64207741ccb0507d4e6b6fb2078d5715ce033978adc087dde0099a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_30743b277c2f45e286e4ad8df4b56f2085bdca3fb94c24de63b6b9e2a68eea9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30743b277c2f45e286e4ad8df4b56f2085bdca3fb94c24de63b6b9e2a68eea9d->enter($__internal_30743b277c2f45e286e4ad8df4b56f2085bdca3fb94c24de63b6b9e2a68eea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_30743b277c2f45e286e4ad8df4b56f2085bdca3fb94c24de63b6b9e2a68eea9d->leave($__internal_30743b277c2f45e286e4ad8df4b56f2085bdca3fb94c24de63b6b9e2a68eea9d_prof);

        
        $__internal_c85f6ece64207741ccb0507d4e6b6fb2078d5715ce033978adc087dde0099a54->leave($__internal_c85f6ece64207741ccb0507d4e6b6fb2078d5715ce033978adc087dde0099a54_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_982010e76ba7bf3d65969538725c19ba66b6e28f623e032b5ba3569f40e38ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982010e76ba7bf3d65969538725c19ba66b6e28f623e032b5ba3569f40e38ded->enter($__internal_982010e76ba7bf3d65969538725c19ba66b6e28f623e032b5ba3569f40e38ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_a8ea2abba9bbd3ed86f3a69155cedc2aa4e5810e0573baab46f8883f8d812a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ea2abba9bbd3ed86f3a69155cedc2aa4e5810e0573baab46f8883f8d812a60->enter($__internal_a8ea2abba9bbd3ed86f3a69155cedc2aa4e5810e0573baab46f8883f8d812a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_a8ea2abba9bbd3ed86f3a69155cedc2aa4e5810e0573baab46f8883f8d812a60->leave($__internal_a8ea2abba9bbd3ed86f3a69155cedc2aa4e5810e0573baab46f8883f8d812a60_prof);

        
        $__internal_982010e76ba7bf3d65969538725c19ba66b6e28f623e032b5ba3569f40e38ded->leave($__internal_982010e76ba7bf3d65969538725c19ba66b6e28f623e032b5ba3569f40e38ded_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a05b497f6618b4acf66759a522be6aaf0724b267f16b952d19cae668d6155c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05b497f6618b4acf66759a522be6aaf0724b267f16b952d19cae668d6155c5e->enter($__internal_a05b497f6618b4acf66759a522be6aaf0724b267f16b952d19cae668d6155c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_bdaddab529694e5608bfe7569b0f63c907b2b5ad3c1bd3314edf3b2914732d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdaddab529694e5608bfe7569b0f63c907b2b5ad3c1bd3314edf3b2914732d6d->enter($__internal_bdaddab529694e5608bfe7569b0f63c907b2b5ad3c1bd3314edf3b2914732d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_bdaddab529694e5608bfe7569b0f63c907b2b5ad3c1bd3314edf3b2914732d6d->leave($__internal_bdaddab529694e5608bfe7569b0f63c907b2b5ad3c1bd3314edf3b2914732d6d_prof);

        
        $__internal_a05b497f6618b4acf66759a522be6aaf0724b267f16b952d19cae668d6155c5e->leave($__internal_a05b497f6618b4acf66759a522be6aaf0724b267f16b952d19cae668d6155c5e_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7890facefd2abdf4bc7d5e9efdc72f8c4ce0723d1370a0806ee7911c2276ac38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7890facefd2abdf4bc7d5e9efdc72f8c4ce0723d1370a0806ee7911c2276ac38->enter($__internal_7890facefd2abdf4bc7d5e9efdc72f8c4ce0723d1370a0806ee7911c2276ac38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3d483d7bd1da74460d3b889249f929a388ec0fe2df15db0bcd7f2db3d4ff6cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d483d7bd1da74460d3b889249f929a388ec0fe2df15db0bcd7f2db3d4ff6cc6->enter($__internal_3d483d7bd1da74460d3b889249f929a388ec0fe2df15db0bcd7f2db3d4ff6cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_e45be51ae4132a435c0c0bf8690fa6074bba0e5570c4c361ef9f11079da225d5 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_a93450b737d9fdac34c96f5f2f993c13ce3a37c93aadd9997fe67dc8e54828c7 = "{{") && ('' === $__internal_a93450b737d9fdac34c96f5f2f993c13ce3a37c93aadd9997fe67dc8e54828c7 || 0 === strpos($__internal_e45be51ae4132a435c0c0bf8690fa6074bba0e5570c4c361ef9f11079da225d5, $__internal_a93450b737d9fdac34c96f5f2f993c13ce3a37c93aadd9997fe67dc8e54828c7)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_3d483d7bd1da74460d3b889249f929a388ec0fe2df15db0bcd7f2db3d4ff6cc6->leave($__internal_3d483d7bd1da74460d3b889249f929a388ec0fe2df15db0bcd7f2db3d4ff6cc6_prof);

        
        $__internal_7890facefd2abdf4bc7d5e9efdc72f8c4ce0723d1370a0806ee7911c2276ac38->leave($__internal_7890facefd2abdf4bc7d5e9efdc72f8c4ce0723d1370a0806ee7911c2276ac38_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2208241015b6e6ee358a5a29204ced64867c99b7488a3ccc720a47460accd92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2208241015b6e6ee358a5a29204ced64867c99b7488a3ccc720a47460accd92b->enter($__internal_2208241015b6e6ee358a5a29204ced64867c99b7488a3ccc720a47460accd92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_df1e5ba88706680db3e9ec07e171123c1d86d046e4964490c9ed5fad9f427e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1e5ba88706680db3e9ec07e171123c1d86d046e4964490c9ed5fad9f427e78->enter($__internal_df1e5ba88706680db3e9ec07e171123c1d86d046e4964490c9ed5fad9f427e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_df1e5ba88706680db3e9ec07e171123c1d86d046e4964490c9ed5fad9f427e78->leave($__internal_df1e5ba88706680db3e9ec07e171123c1d86d046e4964490c9ed5fad9f427e78_prof);

        
        $__internal_2208241015b6e6ee358a5a29204ced64867c99b7488a3ccc720a47460accd92b->leave($__internal_2208241015b6e6ee358a5a29204ced64867c99b7488a3ccc720a47460accd92b_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_154427145bd12072ace7065f188061af6d9232266d1464c2b0c14b25e420fc6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_154427145bd12072ace7065f188061af6d9232266d1464c2b0c14b25e420fc6a->enter($__internal_154427145bd12072ace7065f188061af6d9232266d1464c2b0c14b25e420fc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4871c0ad5ef959e6f3d10f12f107cda9d16eeb5d840909c108513c6383700c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4871c0ad5ef959e6f3d10f12f107cda9d16eeb5d840909c108513c6383700c2f->enter($__internal_4871c0ad5ef959e6f3d10f12f107cda9d16eeb5d840909c108513c6383700c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_4871c0ad5ef959e6f3d10f12f107cda9d16eeb5d840909c108513c6383700c2f->leave($__internal_4871c0ad5ef959e6f3d10f12f107cda9d16eeb5d840909c108513c6383700c2f_prof);

        
        $__internal_154427145bd12072ace7065f188061af6d9232266d1464c2b0c14b25e420fc6a->leave($__internal_154427145bd12072ace7065f188061af6d9232266d1464c2b0c14b25e420fc6a_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_92de7fdf6db7865d53069ab488e75e0fdf09fd1e5942c70fe38bc3afcf822353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92de7fdf6db7865d53069ab488e75e0fdf09fd1e5942c70fe38bc3afcf822353->enter($__internal_92de7fdf6db7865d53069ab488e75e0fdf09fd1e5942c70fe38bc3afcf822353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_8764072cbef8735fa761882772f5a80d84e62ecf68019fed618e387bd11d30e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8764072cbef8735fa761882772f5a80d84e62ecf68019fed618e387bd11d30e9->enter($__internal_8764072cbef8735fa761882772f5a80d84e62ecf68019fed618e387bd11d30e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_8764072cbef8735fa761882772f5a80d84e62ecf68019fed618e387bd11d30e9->leave($__internal_8764072cbef8735fa761882772f5a80d84e62ecf68019fed618e387bd11d30e9_prof);

        
        $__internal_92de7fdf6db7865d53069ab488e75e0fdf09fd1e5942c70fe38bc3afcf822353->leave($__internal_92de7fdf6db7865d53069ab488e75e0fdf09fd1e5942c70fe38bc3afcf822353_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_aad024c5e80fbf830c1520094b1c624cc8232fa6b70b95e640f756ca9f2f284f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad024c5e80fbf830c1520094b1c624cc8232fa6b70b95e640f756ca9f2f284f->enter($__internal_aad024c5e80fbf830c1520094b1c624cc8232fa6b70b95e640f756ca9f2f284f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_75756731e7559d7b1bc6153c83e5f97901230652949179b1334a88ea7a57738a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75756731e7559d7b1bc6153c83e5f97901230652949179b1334a88ea7a57738a->enter($__internal_75756731e7559d7b1bc6153c83e5f97901230652949179b1334a88ea7a57738a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_75756731e7559d7b1bc6153c83e5f97901230652949179b1334a88ea7a57738a->leave($__internal_75756731e7559d7b1bc6153c83e5f97901230652949179b1334a88ea7a57738a_prof);

        
        $__internal_aad024c5e80fbf830c1520094b1c624cc8232fa6b70b95e640f756ca9f2f284f->leave($__internal_aad024c5e80fbf830c1520094b1c624cc8232fa6b70b95e640f756ca9f2f284f_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_8cf9a2cbbee9ce1ec4055b35c9d9bd875ce5dee440f23dce70d0c5262c98f0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf9a2cbbee9ce1ec4055b35c9d9bd875ce5dee440f23dce70d0c5262c98f0a1->enter($__internal_8cf9a2cbbee9ce1ec4055b35c9d9bd875ce5dee440f23dce70d0c5262c98f0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_8715b919d8a85ecf159896082f42a9c9ccd8edfa729ecaff3f6e5a5d7f5e3e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8715b919d8a85ecf159896082f42a9c9ccd8edfa729ecaff3f6e5a5d7f5e3e7f->enter($__internal_8715b919d8a85ecf159896082f42a9c9ccd8edfa729ecaff3f6e5a5d7f5e3e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_8715b919d8a85ecf159896082f42a9c9ccd8edfa729ecaff3f6e5a5d7f5e3e7f->leave($__internal_8715b919d8a85ecf159896082f42a9c9ccd8edfa729ecaff3f6e5a5d7f5e3e7f_prof);

        
        $__internal_8cf9a2cbbee9ce1ec4055b35c9d9bd875ce5dee440f23dce70d0c5262c98f0a1->leave($__internal_8cf9a2cbbee9ce1ec4055b35c9d9bd875ce5dee440f23dce70d0c5262c98f0a1_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_62632d1f631017017aa4145d07ed3e410046db88670e96ed47af31ffdc317190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62632d1f631017017aa4145d07ed3e410046db88670e96ed47af31ffdc317190->enter($__internal_62632d1f631017017aa4145d07ed3e410046db88670e96ed47af31ffdc317190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_365819f5c38bc12ca7896a3a7876630f9b66338a3d144bfce546e629721dc336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365819f5c38bc12ca7896a3a7876630f9b66338a3d144bfce546e629721dc336->enter($__internal_365819f5c38bc12ca7896a3a7876630f9b66338a3d144bfce546e629721dc336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_365819f5c38bc12ca7896a3a7876630f9b66338a3d144bfce546e629721dc336->leave($__internal_365819f5c38bc12ca7896a3a7876630f9b66338a3d144bfce546e629721dc336_prof);

        
        $__internal_62632d1f631017017aa4145d07ed3e410046db88670e96ed47af31ffdc317190->leave($__internal_62632d1f631017017aa4145d07ed3e410046db88670e96ed47af31ffdc317190_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_3b96c6ed842926016c78168a97c7c2f3ee307b2b0d970920d1cd6b29702cf07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b96c6ed842926016c78168a97c7c2f3ee307b2b0d970920d1cd6b29702cf07e->enter($__internal_3b96c6ed842926016c78168a97c7c2f3ee307b2b0d970920d1cd6b29702cf07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3e296648bd8ca01848929a0f0d7b204a4fad13ffc499a8365e325daa2fe52bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e296648bd8ca01848929a0f0d7b204a4fad13ffc499a8365e325daa2fe52bbd->enter($__internal_3e296648bd8ca01848929a0f0d7b204a4fad13ffc499a8365e325daa2fe52bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_3e296648bd8ca01848929a0f0d7b204a4fad13ffc499a8365e325daa2fe52bbd->leave($__internal_3e296648bd8ca01848929a0f0d7b204a4fad13ffc499a8365e325daa2fe52bbd_prof);

        
        $__internal_3b96c6ed842926016c78168a97c7c2f3ee307b2b0d970920d1cd6b29702cf07e->leave($__internal_3b96c6ed842926016c78168a97c7c2f3ee307b2b0d970920d1cd6b29702cf07e_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_7d4034305bcb82f86a0b19e109510028cecb1c810f8338f1967740ae2247957b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4034305bcb82f86a0b19e109510028cecb1c810f8338f1967740ae2247957b->enter($__internal_7d4034305bcb82f86a0b19e109510028cecb1c810f8338f1967740ae2247957b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_51b7590356d542c1b2c80a15a0ac850fffd9376890a7e5a65da57c6debcc6e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51b7590356d542c1b2c80a15a0ac850fffd9376890a7e5a65da57c6debcc6e18->enter($__internal_51b7590356d542c1b2c80a15a0ac850fffd9376890a7e5a65da57c6debcc6e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_51b7590356d542c1b2c80a15a0ac850fffd9376890a7e5a65da57c6debcc6e18->leave($__internal_51b7590356d542c1b2c80a15a0ac850fffd9376890a7e5a65da57c6debcc6e18_prof);

        
        $__internal_7d4034305bcb82f86a0b19e109510028cecb1c810f8338f1967740ae2247957b->leave($__internal_7d4034305bcb82f86a0b19e109510028cecb1c810f8338f1967740ae2247957b_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_010b80a5796f3e4fdf88cd43df009dc7f9081090644081108620de1b3337c7be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010b80a5796f3e4fdf88cd43df009dc7f9081090644081108620de1b3337c7be->enter($__internal_010b80a5796f3e4fdf88cd43df009dc7f9081090644081108620de1b3337c7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_5c1fedcecbd2edf068df0c1057dc7d47747d7c774bf1e9df38061c8dec2b17c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1fedcecbd2edf068df0c1057dc7d47747d7c774bf1e9df38061c8dec2b17c8->enter($__internal_5c1fedcecbd2edf068df0c1057dc7d47747d7c774bf1e9df38061c8dec2b17c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_5c1fedcecbd2edf068df0c1057dc7d47747d7c774bf1e9df38061c8dec2b17c8->leave($__internal_5c1fedcecbd2edf068df0c1057dc7d47747d7c774bf1e9df38061c8dec2b17c8_prof);

        
        $__internal_010b80a5796f3e4fdf88cd43df009dc7f9081090644081108620de1b3337c7be->leave($__internal_010b80a5796f3e4fdf88cd43df009dc7f9081090644081108620de1b3337c7be_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cf5c7cbf350ba1953f07f0e6d1fabdabdd9d5839e739eea65862b888614d6e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5c7cbf350ba1953f07f0e6d1fabdabdd9d5839e739eea65862b888614d6e16->enter($__internal_cf5c7cbf350ba1953f07f0e6d1fabdabdd9d5839e739eea65862b888614d6e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_118c7184be28e37b899a3bcc6fdc84d92d7f905a77e8d3b0422a8a7d08547c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118c7184be28e37b899a3bcc6fdc84d92d7f905a77e8d3b0422a8a7d08547c67->enter($__internal_118c7184be28e37b899a3bcc6fdc84d92d7f905a77e8d3b0422a8a7d08547c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_118c7184be28e37b899a3bcc6fdc84d92d7f905a77e8d3b0422a8a7d08547c67->leave($__internal_118c7184be28e37b899a3bcc6fdc84d92d7f905a77e8d3b0422a8a7d08547c67_prof);

        
        $__internal_cf5c7cbf350ba1953f07f0e6d1fabdabdd9d5839e739eea65862b888614d6e16->leave($__internal_cf5c7cbf350ba1953f07f0e6d1fabdabdd9d5839e739eea65862b888614d6e16_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ff3dd4ffdb874ad6633b057f7053e58c6c46b79e8ca52c6522c92c0545088a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3dd4ffdb874ad6633b057f7053e58c6c46b79e8ca52c6522c92c0545088a40->enter($__internal_ff3dd4ffdb874ad6633b057f7053e58c6c46b79e8ca52c6522c92c0545088a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_abf97244979090e37d1ab7b4893062c34e258d57632cc5ef7b08f4d74498052d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf97244979090e37d1ab7b4893062c34e258d57632cc5ef7b08f4d74498052d->enter($__internal_abf97244979090e37d1ab7b4893062c34e258d57632cc5ef7b08f4d74498052d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_abf97244979090e37d1ab7b4893062c34e258d57632cc5ef7b08f4d74498052d->leave($__internal_abf97244979090e37d1ab7b4893062c34e258d57632cc5ef7b08f4d74498052d_prof);

        
        $__internal_ff3dd4ffdb874ad6633b057f7053e58c6c46b79e8ca52c6522c92c0545088a40->leave($__internal_ff3dd4ffdb874ad6633b057f7053e58c6c46b79e8ca52c6522c92c0545088a40_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_d3196b650facd2c3024cee306b973d6b76e4a5305405b672e4d39f12d1d54ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3196b650facd2c3024cee306b973d6b76e4a5305405b672e4d39f12d1d54ad3->enter($__internal_d3196b650facd2c3024cee306b973d6b76e4a5305405b672e4d39f12d1d54ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8d8dd9f3e3d05e7fe54fa06befb557d8c77fc648216c59aa89c5440d097e3d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8dd9f3e3d05e7fe54fa06befb557d8c77fc648216c59aa89c5440d097e3d18->enter($__internal_8d8dd9f3e3d05e7fe54fa06befb557d8c77fc648216c59aa89c5440d097e3d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8d8dd9f3e3d05e7fe54fa06befb557d8c77fc648216c59aa89c5440d097e3d18->leave($__internal_8d8dd9f3e3d05e7fe54fa06befb557d8c77fc648216c59aa89c5440d097e3d18_prof);

        
        $__internal_d3196b650facd2c3024cee306b973d6b76e4a5305405b672e4d39f12d1d54ad3->leave($__internal_d3196b650facd2c3024cee306b973d6b76e4a5305405b672e4d39f12d1d54ad3_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_6e06e7de2b0ec3e1da97b3484c7aeee41d25031b5d1c63b7eacc8afa0b0bbd87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e06e7de2b0ec3e1da97b3484c7aeee41d25031b5d1c63b7eacc8afa0b0bbd87->enter($__internal_6e06e7de2b0ec3e1da97b3484c7aeee41d25031b5d1c63b7eacc8afa0b0bbd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_0e163bddb6c1873de513a1d633ac2c31d560a570fe9ff6401ad65246aa32089e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e163bddb6c1873de513a1d633ac2c31d560a570fe9ff6401ad65246aa32089e->enter($__internal_0e163bddb6c1873de513a1d633ac2c31d560a570fe9ff6401ad65246aa32089e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0e163bddb6c1873de513a1d633ac2c31d560a570fe9ff6401ad65246aa32089e->leave($__internal_0e163bddb6c1873de513a1d633ac2c31d560a570fe9ff6401ad65246aa32089e_prof);

        
        $__internal_6e06e7de2b0ec3e1da97b3484c7aeee41d25031b5d1c63b7eacc8afa0b0bbd87->leave($__internal_6e06e7de2b0ec3e1da97b3484c7aeee41d25031b5d1c63b7eacc8afa0b0bbd87_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_77f7fcfcf04cca148f270a3e19328081ac9d76a678b397280bf42ccb3a2ddea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f7fcfcf04cca148f270a3e19328081ac9d76a678b397280bf42ccb3a2ddea2->enter($__internal_77f7fcfcf04cca148f270a3e19328081ac9d76a678b397280bf42ccb3a2ddea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d1504a94f74430fd64c332229e9a7f80b1c266428a1e0237827efa18ae97acdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1504a94f74430fd64c332229e9a7f80b1c266428a1e0237827efa18ae97acdc->enter($__internal_d1504a94f74430fd64c332229e9a7f80b1c266428a1e0237827efa18ae97acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_d1504a94f74430fd64c332229e9a7f80b1c266428a1e0237827efa18ae97acdc->leave($__internal_d1504a94f74430fd64c332229e9a7f80b1c266428a1e0237827efa18ae97acdc_prof);

        
        $__internal_77f7fcfcf04cca148f270a3e19328081ac9d76a678b397280bf42ccb3a2ddea2->leave($__internal_77f7fcfcf04cca148f270a3e19328081ac9d76a678b397280bf42ccb3a2ddea2_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cdfab5168afe14fb9c8eff2a06db8ed01a911f8eecdf8bf958f85d508ca5564d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdfab5168afe14fb9c8eff2a06db8ed01a911f8eecdf8bf958f85d508ca5564d->enter($__internal_cdfab5168afe14fb9c8eff2a06db8ed01a911f8eecdf8bf958f85d508ca5564d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4b94c5eb4604db36de2dc41358400d0f11f3dedbcd9ce9146bc57fcfb42d2622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b94c5eb4604db36de2dc41358400d0f11f3dedbcd9ce9146bc57fcfb42d2622->enter($__internal_4b94c5eb4604db36de2dc41358400d0f11f3dedbcd9ce9146bc57fcfb42d2622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_4b94c5eb4604db36de2dc41358400d0f11f3dedbcd9ce9146bc57fcfb42d2622->leave($__internal_4b94c5eb4604db36de2dc41358400d0f11f3dedbcd9ce9146bc57fcfb42d2622_prof);

        
        $__internal_cdfab5168afe14fb9c8eff2a06db8ed01a911f8eecdf8bf958f85d508ca5564d->leave($__internal_cdfab5168afe14fb9c8eff2a06db8ed01a911f8eecdf8bf958f85d508ca5564d_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c27d6157096feec8e6045693e13e1103cd90b7d511a63a00076261008e2ac6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27d6157096feec8e6045693e13e1103cd90b7d511a63a00076261008e2ac6f2->enter($__internal_c27d6157096feec8e6045693e13e1103cd90b7d511a63a00076261008e2ac6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_758c782e18e8476816a49dd1dcf18f9be4a3b6caf9eb77acd8fe8d414fa9a842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758c782e18e8476816a49dd1dcf18f9be4a3b6caf9eb77acd8fe8d414fa9a842->enter($__internal_758c782e18e8476816a49dd1dcf18f9be4a3b6caf9eb77acd8fe8d414fa9a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_758c782e18e8476816a49dd1dcf18f9be4a3b6caf9eb77acd8fe8d414fa9a842->leave($__internal_758c782e18e8476816a49dd1dcf18f9be4a3b6caf9eb77acd8fe8d414fa9a842_prof);

        
        $__internal_c27d6157096feec8e6045693e13e1103cd90b7d511a63a00076261008e2ac6f2->leave($__internal_c27d6157096feec8e6045693e13e1103cd90b7d511a63a00076261008e2ac6f2_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_2dc5e812073c048b5d616d40b69ffc117db7b275e148bd620ea295622bbfedc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc5e812073c048b5d616d40b69ffc117db7b275e148bd620ea295622bbfedc5->enter($__internal_2dc5e812073c048b5d616d40b69ffc117db7b275e148bd620ea295622bbfedc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f7ba124740f1270b9c757c19cdde6879d95d2c02f9e24667a4a03ce156f25a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ba124740f1270b9c757c19cdde6879d95d2c02f9e24667a4a03ce156f25a21->enter($__internal_f7ba124740f1270b9c757c19cdde6879d95d2c02f9e24667a4a03ce156f25a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f7ba124740f1270b9c757c19cdde6879d95d2c02f9e24667a4a03ce156f25a21->leave($__internal_f7ba124740f1270b9c757c19cdde6879d95d2c02f9e24667a4a03ce156f25a21_prof);

        
        $__internal_2dc5e812073c048b5d616d40b69ffc117db7b275e148bd620ea295622bbfedc5->leave($__internal_2dc5e812073c048b5d616d40b69ffc117db7b275e148bd620ea295622bbfedc5_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e6395b40269248cb3b7aa5dbfff66f780f3ea1f91b936d24fb3ae79295d2711f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6395b40269248cb3b7aa5dbfff66f780f3ea1f91b936d24fb3ae79295d2711f->enter($__internal_e6395b40269248cb3b7aa5dbfff66f780f3ea1f91b936d24fb3ae79295d2711f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a81c1adf2f6aabef60d6b7411005f11eb2c0150a647b3a6d7005d24a35723ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81c1adf2f6aabef60d6b7411005f11eb2c0150a647b3a6d7005d24a35723ddb->enter($__internal_a81c1adf2f6aabef60d6b7411005f11eb2c0150a647b3a6d7005d24a35723ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a81c1adf2f6aabef60d6b7411005f11eb2c0150a647b3a6d7005d24a35723ddb->leave($__internal_a81c1adf2f6aabef60d6b7411005f11eb2c0150a647b3a6d7005d24a35723ddb_prof);

        
        $__internal_e6395b40269248cb3b7aa5dbfff66f780f3ea1f91b936d24fb3ae79295d2711f->leave($__internal_e6395b40269248cb3b7aa5dbfff66f780f3ea1f91b936d24fb3ae79295d2711f_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_18aec291e148711c2a77ae3a205455641d8dca3b6c3ffa7362a33b9648784dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18aec291e148711c2a77ae3a205455641d8dca3b6c3ffa7362a33b9648784dc1->enter($__internal_18aec291e148711c2a77ae3a205455641d8dca3b6c3ffa7362a33b9648784dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_2f27efeaec42602782860d9c6e262fe076de93eb948087e05c5bab10f1d8cbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f27efeaec42602782860d9c6e262fe076de93eb948087e05c5bab10f1d8cbee->enter($__internal_2f27efeaec42602782860d9c6e262fe076de93eb948087e05c5bab10f1d8cbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2f27efeaec42602782860d9c6e262fe076de93eb948087e05c5bab10f1d8cbee->leave($__internal_2f27efeaec42602782860d9c6e262fe076de93eb948087e05c5bab10f1d8cbee_prof);

        
        $__internal_18aec291e148711c2a77ae3a205455641d8dca3b6c3ffa7362a33b9648784dc1->leave($__internal_18aec291e148711c2a77ae3a205455641d8dca3b6c3ffa7362a33b9648784dc1_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a050d9aeb70e56c12fa8abba0c8f4ab66483acfc19d1934f9deb54911739b520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a050d9aeb70e56c12fa8abba0c8f4ab66483acfc19d1934f9deb54911739b520->enter($__internal_a050d9aeb70e56c12fa8abba0c8f4ab66483acfc19d1934f9deb54911739b520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_bcdcc90caea9260065948976a9745d8cb2ec73af8c13a7651388b51413476ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdcc90caea9260065948976a9745d8cb2ec73af8c13a7651388b51413476ae5->enter($__internal_bcdcc90caea9260065948976a9745d8cb2ec73af8c13a7651388b51413476ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bcdcc90caea9260065948976a9745d8cb2ec73af8c13a7651388b51413476ae5->leave($__internal_bcdcc90caea9260065948976a9745d8cb2ec73af8c13a7651388b51413476ae5_prof);

        
        $__internal_a050d9aeb70e56c12fa8abba0c8f4ab66483acfc19d1934f9deb54911739b520->leave($__internal_a050d9aeb70e56c12fa8abba0c8f4ab66483acfc19d1934f9deb54911739b520_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4f7f8bbb050a93b4a42092e2277d2628963c401d6bc5c1c139087254ff8528ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7f8bbb050a93b4a42092e2277d2628963c401d6bc5c1c139087254ff8528ce->enter($__internal_4f7f8bbb050a93b4a42092e2277d2628963c401d6bc5c1c139087254ff8528ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_351cff07b15133c86bff374119d3235f22d95971d2e285a54ad83f5e92e3e388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351cff07b15133c86bff374119d3235f22d95971d2e285a54ad83f5e92e3e388->enter($__internal_351cff07b15133c86bff374119d3235f22d95971d2e285a54ad83f5e92e3e388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_351cff07b15133c86bff374119d3235f22d95971d2e285a54ad83f5e92e3e388->leave($__internal_351cff07b15133c86bff374119d3235f22d95971d2e285a54ad83f5e92e3e388_prof);

        
        $__internal_4f7f8bbb050a93b4a42092e2277d2628963c401d6bc5c1c139087254ff8528ce->leave($__internal_4f7f8bbb050a93b4a42092e2277d2628963c401d6bc5c1c139087254ff8528ce_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_1cc2f8bb923684ca26457fc79ce51b0a8263681443b4d85b5b6aac1434e7ae32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc2f8bb923684ca26457fc79ce51b0a8263681443b4d85b5b6aac1434e7ae32->enter($__internal_1cc2f8bb923684ca26457fc79ce51b0a8263681443b4d85b5b6aac1434e7ae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7a183c8f34fde1cd75ecf508d9cbb470a934c8f90dbe89abbbc8ed76b5143c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a183c8f34fde1cd75ecf508d9cbb470a934c8f90dbe89abbbc8ed76b5143c3d->enter($__internal_7a183c8f34fde1cd75ecf508d9cbb470a934c8f90dbe89abbbc8ed76b5143c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_7a183c8f34fde1cd75ecf508d9cbb470a934c8f90dbe89abbbc8ed76b5143c3d->leave($__internal_7a183c8f34fde1cd75ecf508d9cbb470a934c8f90dbe89abbbc8ed76b5143c3d_prof);

        
        $__internal_1cc2f8bb923684ca26457fc79ce51b0a8263681443b4d85b5b6aac1434e7ae32->leave($__internal_1cc2f8bb923684ca26457fc79ce51b0a8263681443b4d85b5b6aac1434e7ae32_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2c49331a256db06d536d6a23447846b66c09155a65732bf45fbb01a457de5667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c49331a256db06d536d6a23447846b66c09155a65732bf45fbb01a457de5667->enter($__internal_2c49331a256db06d536d6a23447846b66c09155a65732bf45fbb01a457de5667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9b453a3d15d344e6991c3c35fc95269dd4d5fab3de8ea9808273cfa5eb36303f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b453a3d15d344e6991c3c35fc95269dd4d5fab3de8ea9808273cfa5eb36303f->enter($__internal_9b453a3d15d344e6991c3c35fc95269dd4d5fab3de8ea9808273cfa5eb36303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_9b453a3d15d344e6991c3c35fc95269dd4d5fab3de8ea9808273cfa5eb36303f->leave($__internal_9b453a3d15d344e6991c3c35fc95269dd4d5fab3de8ea9808273cfa5eb36303f_prof);

        
        $__internal_2c49331a256db06d536d6a23447846b66c09155a65732bf45fbb01a457de5667->leave($__internal_2c49331a256db06d536d6a23447846b66c09155a65732bf45fbb01a457de5667_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/app_botella/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
