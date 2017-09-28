<?php

/* SonataFormatterBundle:Form:formatter.html.twig */
class __TwigTemplate_809c75dbb03d8216f3810d7ca79179889b8bdf81574b66fcb225268dfcbc8509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_formatter_type_widget' => array($this, 'block_sonata_formatter_type_widget'),
            'sonata_simple_formatter_type_widget' => array($this, 'block_sonata_simple_formatter_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb49cbf86027e18a6c2085490a2c6375813685bdf9c9c6b2bac861511819361d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb49cbf86027e18a6c2085490a2c6375813685bdf9c9c6b2bac861511819361d->enter($__internal_bb49cbf86027e18a6c2085490a2c6375813685bdf9c9c6b2bac861511819361d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataFormatterBundle:Form:formatter.html.twig"));

        // line 1
        $this->displayBlock('sonata_formatter_type_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('sonata_simple_formatter_type_widget', $context, $blocks);
        
        $__internal_bb49cbf86027e18a6c2085490a2c6375813685bdf9c9c6b2bac861511819361d->leave($__internal_bb49cbf86027e18a6c2085490a2c6375813685bdf9c9c6b2bac861511819361d_prof);

    }

    // line 1
    public function block_sonata_formatter_type_widget($context, array $blocks = array())
    {
        $__internal_8c13364ae386129bcbf466dc24259bfc1a3f5ff831a0c64a0aec1d5849246f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c13364ae386129bcbf466dc24259bfc1a3f5ff831a0c64a0aec1d5849246f3d->enter($__internal_8c13364ae386129bcbf466dc24259bfc1a3f5ff831a0c64a0aec1d5849246f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_formatter_type_widget"));

        // line 2
        echo "
    <!-- widget: sonata_formatter_type_widget -->
    <div style=\"margin-bottom: 5px;\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["format_field"]) ? $context["format_field"] : $this->getContext($context, "format_field")), array(), "array"), 'widget');
        echo "
        ";
        // line 6
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["format_field_options"]) ? $context["format_field_options"] : $this->getContext($context, "format_field_options")), "choices", array())) > 1)) {
            // line 7
            echo "            <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("please_select_format_method", array(), "SonataFormatterBundle"), "html", null, true);
            echo "</i>
        ";
        }
        // line 9
        echo "    </div>

    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : $this->getContext($context, "source_field")), array(), "array"), 'widget');
        echo "
    <script>
        jQuery(document).ready(function() {

            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            jQuery('#";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["format_field"]) ? $context["format_field"] : $this->getContext($context, "format_field")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').change(function(event) {
                var elms = jQuery('#";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : $this->getContext($context, "source_field")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "');
                elms.markItUpRemove();

                ";
        // line 24
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : $this->getContext($context, "source_field")), array(), "array"), "vars", array()), "id", array()));
        echo "

                var val = jQuery(this).val();
                var appendClass = val;
                switch(val) {
                    case 'textile':
                        elms.markItUp(markitup_sonataTextileSettings);
                        break;
                    case 'markdown':
                        elms.markItUp(markitup_sonataMarkdownSettings);
                        break;
                    case 'bbcode':
                        elms.markItUp(markitup_sonataBBCodeSettings);
                        break;
                    case 'rawhtml':
                        elms.markItUp(markitup_sonataHtmlSettings);
                        appendClass = 'html';
                        break;
                    case 'richhtml':
                        ";
        // line 43
        $this->loadTemplate("SonataFormatterBundle:Form:ckeditor.html.twig", "SonataFormatterBundle:Form:formatter.html.twig", 43)->display(array_merge($context, array("ckeditor_field_id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["source_field"]) ? $context["source_field"] : $this->getContext($context, "source_field")), array(), "array"), "vars", array()), "id", array()))));
        // line 44
        echo "                }

                var parent = elms.parents('div.markItUp');

                if (parent) {
                    for (name in ['textile', 'markdown', 'bbcode', 'rawhtml', 'richhtml', 'rawhtml']) {
                        parent.removeClass(name)
                    }

                    parent.addClass(appendClass);
                }
            });

            jQuery('#";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), (isset($context["format_field"]) ? $context["format_field"] : $this->getContext($context, "format_field")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').trigger('change');
        });
    </script>
";
        
        $__internal_8c13364ae386129bcbf466dc24259bfc1a3f5ff831a0c64a0aec1d5849246f3d->leave($__internal_8c13364ae386129bcbf466dc24259bfc1a3f5ff831a0c64a0aec1d5849246f3d_prof);

    }

    // line 62
    public function block_sonata_simple_formatter_type_widget($context, array $blocks = array())
    {
        $__internal_3080c7fb51c2891ed9f658029e8f7ea83b2f18758da6c1f73611491b0cd71d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3080c7fb51c2891ed9f658029e8f7ea83b2f18758da6c1f73611491b0cd71d2c->enter($__internal_3080c7fb51c2891ed9f658029e8f7ea83b2f18758da6c1f73611491b0cd71d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_simple_formatter_type_widget"));

        // line 63
        echo "
    <!-- widget: sonata_simple_formatter_type_widget -->

    ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <script>
        jQuery(document).ready(function() {
            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            var elms = jQuery('#";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "');

            ";
        // line 77
        if (((isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "textile")) {
            // line 78
            echo "                elms.markItUp(markitup_sonataTextileSettings);
            ";
        } elseif ((        // line 79
(isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "markdown")) {
            // line 80
            echo "                elms.markItUp(markitup_sonataMarkdownSettings);
            ";
        } elseif ((        // line 81
(isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "bbcode")) {
            // line 82
            echo "                elms.markItUp(markitup_sonataBBCodeSettings);
            ";
        } elseif ((        // line 83
(isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "rawhtml")) {
            // line 84
            echo "                elms.markItUp(markitup_sonataHtmlSettings);
            ";
        } elseif ((        // line 85
(isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "richhtml")) {
            // line 86
            echo "                ";
            $this->loadTemplate("SonataFormatterBundle:Form:ckeditor.html.twig", "SonataFormatterBundle:Form:formatter.html.twig", 86)->display(array_merge($context, array("ckeditor_field_id" => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()))));
            // line 87
            echo "            ";
        }
        // line 88
        echo "
            var parent = elms.parents('div.markItUp');

            if (parent) {
                parent.addClass('";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), "html", null, true);
        echo "');
                ";
        // line 93
        if (((isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")) == "rawhtml")) {
            // line 94
            echo "                    parent.addClass('html');
                ";
        }
        // line 96
        echo "            }

        });
    </script>
";
        
        $__internal_3080c7fb51c2891ed9f658029e8f7ea83b2f18758da6c1f73611491b0cd71d2c->leave($__internal_3080c7fb51c2891ed9f658029e8f7ea83b2f18758da6c1f73611491b0cd71d2c_prof);

    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Form:formatter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  207 => 96,  203 => 94,  201 => 93,  197 => 92,  191 => 88,  188 => 87,  185 => 86,  183 => 85,  180 => 84,  178 => 83,  175 => 82,  173 => 81,  170 => 80,  168 => 79,  165 => 78,  163 => 77,  158 => 75,  146 => 66,  141 => 63,  135 => 62,  124 => 57,  109 => 44,  107 => 43,  85 => 24,  79 => 21,  75 => 20,  63 => 11,  59 => 9,  53 => 7,  51 => 6,  47 => 5,  42 => 2,  36 => 1,  29 => 62,  26 => 61,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sonata_formatter_type_widget %}

    <!-- widget: sonata_formatter_type_widget -->
    <div style=\"margin-bottom: 5px;\">
        {{ form_widget(form.children[format_field]) }}
        {% if format_field_options.choices|length > 1 %}
            <i>{{ \"please_select_format_method\"|trans({}, \"SonataFormatterBundle\") }}</i>
        {% endif %}
    </div>

    {{ form_widget(form.children[source_field]) }}
    <script>
        jQuery(document).ready(function() {

            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            jQuery('#{{ form.children[format_field].vars.id }}').change(function(event) {
                var elms = jQuery('#{{ form.children[source_field].vars.id }}');
                elms.markItUpRemove();

                {{ ckeditor_destroy(form.children[source_field].vars.id) }}

                var val = jQuery(this).val();
                var appendClass = val;
                switch(val) {
                    case 'textile':
                        elms.markItUp(markitup_sonataTextileSettings);
                        break;
                    case 'markdown':
                        elms.markItUp(markitup_sonataMarkdownSettings);
                        break;
                    case 'bbcode':
                        elms.markItUp(markitup_sonataBBCodeSettings);
                        break;
                    case 'rawhtml':
                        elms.markItUp(markitup_sonataHtmlSettings);
                        appendClass = 'html';
                        break;
                    case 'richhtml':
                        {% include 'SonataFormatterBundle:Form:ckeditor.html.twig' with {'ckeditor_field_id': form.children[source_field].vars.id} %}
                }

                var parent = elms.parents('div.markItUp');

                if (parent) {
                    for (name in ['textile', 'markdown', 'bbcode', 'rawhtml', 'richhtml', 'rawhtml']) {
                        parent.removeClass(name)
                    }

                    parent.addClass(appendClass);
                }
            });

            jQuery('#{{ form.children[format_field].vars.id }}').trigger('change');
        });
    </script>
{% endblock sonata_formatter_type_widget %}

{% block sonata_simple_formatter_type_widget %}

    <!-- widget: sonata_simple_formatter_type_widget -->

    {{ form_widget(form) }}

    <script>
        jQuery(document).ready(function() {
            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            var elms = jQuery('#{{ form.vars.id }}');

            {% if format == 'textile' %}
                elms.markItUp(markitup_sonataTextileSettings);
            {% elseif format == 'markdown' %}
                elms.markItUp(markitup_sonataMarkdownSettings);
            {% elseif format == 'bbcode' %}
                elms.markItUp(markitup_sonataBBCodeSettings);
            {% elseif format == 'rawhtml' %}
                elms.markItUp(markitup_sonataHtmlSettings);
            {% elseif format == 'richhtml' %}
                {% include 'SonataFormatterBundle:Form:ckeditor.html.twig' with {'ckeditor_field_id': form.vars.id} %}
            {% endif %}

            var parent = elms.parents('div.markItUp');

            if (parent) {
                parent.addClass('{{ format }}');
                {% if format == 'rawhtml' %}
                    parent.addClass('html');
                {% endif %}
            }

        });
    </script>
{% endblock sonata_simple_formatter_type_widget %}
", "SonataFormatterBundle:Form:formatter.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\formatter-bundle/Resources/views/Form/formatter.html.twig");
    }
}
