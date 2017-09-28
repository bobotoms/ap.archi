<?php

/* @SonataMedia/Form/media_widgets.html.twig */
class __TwigTemplate_6810ae163d072385edce2db257bd5708cb82e2a87fc836d4e49ade3cfe98fea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_media_type_widget' => array($this, 'block_sonata_media_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_224ca5b240164ed46b59983f071fb2046023b9fb7384a6e9d32de5f21cbf4e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224ca5b240164ed46b59983f071fb2046023b9fb7384a6e9d32de5f21cbf4e9c->enter($__internal_224ca5b240164ed46b59983f071fb2046023b9fb7384a6e9d32de5f21cbf4e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Form/media_widgets.html.twig"));

        // line 1
        $this->displayBlock('sonata_media_type_widget', $context, $blocks);
        
        $__internal_224ca5b240164ed46b59983f071fb2046023b9fb7384a6e9d32de5f21cbf4e9c->leave($__internal_224ca5b240164ed46b59983f071fb2046023b9fb7384a6e9d32de5f21cbf4e9c_prof);

    }

    public function block_sonata_media_type_widget($context, array $blocks = array())
    {
        $__internal_e3dbcf019995c74a687a39a07816bd3dc51cbda56ec9962fdf5f053a2e512b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3dbcf019995c74a687a39a07816bd3dc51cbda56ec9962fdf5f053a2e512b60->enter($__internal_e3dbcf019995c74a687a39a07816bd3dc51cbda56ec9962fdf5f053a2e512b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_media_type_widget"));

        // line 2
        echo "    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            ";
        // line 4
        if (( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "providerReference", array()))) {
            // line 5
            echo "                ";
            if ((array_key_exists("sonata_admin_enabled", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled")))) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "adminByAdminCode", array(0 => "sonata.media.admin.media"), "method"), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"), "html", null, true);
                echo "\">
                        <strong>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "name", array()), "html", null, true);
                echo "</strong>
                    </a>
                ";
            } else {
                // line 10
                echo "                    <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "name", array()), "html", null, true);
                echo "</strong>
                ";
            }
            // line 12
            echo "            ";
        } else {
            // line 13
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_linked_media", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong>
            ";
        }
        // line 15
        echo "        </div>

        <div class=\"col-md-3 pull-left\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_headline_information", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></div>
        <div class=\"col-md-2 pull-left\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_media", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            ";
        // line 22
        if (( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "providerReference", array()))) {
            // line 23
            echo "                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    ";
            // line 24
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "admin", array("class" => "img-polaroid media-object"));
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatamedia/grey.png"), "html", null, true);
            echo "\" class=\"img-polaroid media-object\" style=\"width: 85px; height: 85px\"/>
                </div>
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"col-md-3 pull-left\">
            ";
        // line 33
        if (( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "providerReference", array()))) {
            // line 34
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_label_type", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
                <br />
                <strong>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_label_context", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "context", array()), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 38
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_label_type", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "provider", array(), "array"), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
                <br />
                <strong>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("widget_label_context", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "context", array(), "array"), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
            ";
        }
        // line 42
        echo "        </div>
        <div class=\"col-md-2 pull-left\">
            ";
        // line 44
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        </div>
    </div>
";
        
        $__internal_e3dbcf019995c74a687a39a07816bd3dc51cbda56ec9962fdf5f053a2e512b60->leave($__internal_e3dbcf019995c74a687a39a07816bd3dc51cbda56ec9962fdf5f053a2e512b60_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Form/media_widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  145 => 44,  141 => 42,  134 => 40,  126 => 38,  119 => 36,  111 => 34,  109 => 33,  105 => 31,  99 => 28,  96 => 27,  92 => 25,  90 => 24,  87 => 23,  85 => 22,  78 => 18,  74 => 17,  70 => 15,  64 => 13,  61 => 12,  55 => 10,  49 => 7,  44 => 6,  41 => 5,  39 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sonata_media_type_widget %}
    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            {% if value is not empty and value.providerReference %}
                {% if sonata_admin_enabled is defined and sonata_admin_enabled %}
                    <a href=\"{{ sonata_admin.admin.getConfigurationPool().adminByAdminCode('sonata.media.admin.media').generateObjectUrl('edit', value) }}\">
                        <strong>{{ value.name }}</strong>
                    </a>
                {% else %}
                    <strong>{{ value.name }}</strong>
                {% endif %}
            {% else %}
                <strong>{{ 'no_linked_media'|trans({}, 'SonataMediaBundle') }}</strong>
            {% endif %}
        </div>

        <div class=\"col-md-3 pull-left\"><strong>{{ 'widget_headline_information'|trans({}, 'SonataMediaBundle') }}</strong></div>
        <div class=\"col-md-2 pull-left\"><strong>{{ 'link_media'|trans({}, 'SonataMediaBundle') }}</strong></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            {% if value is not empty and value.providerReference %}
                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    {% thumbnail value, 'admin' with {'class': 'img-polaroid media-object'} %}
                </div>
            {% else %}
                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    <img src=\"{{ asset('bundles/sonatamedia/grey.png') }}\" class=\"img-polaroid media-object\" style=\"width: 85px; height: 85px\"/>
                </div>
            {% endif %}
        </div>
        <div class=\"col-md-3 pull-left\">
            {% if value is not empty and value.providerReference %}
                <strong>{{ 'widget_label_type'|trans({}, 'SonataMediaBundle') }}:</strong> <span type=\"label\">{{ value.providerName|trans({}, 'SonataMediaBundle') }}</span>
                <br />
                <strong>{{ 'widget_label_context'|trans({}, 'SonataMediaBundle') }}:</strong> <span type=\"label\">{{ value.context|trans({}, 'SonataMediaBundle') }}</span>
            {% else %}
                <strong>{{ 'widget_label_type'|trans({}, 'SonataMediaBundle') }}:</strong> <span type=\"label\">{{ form.vars['provider']|trans({}, 'SonataMediaBundle') }}</span>
                <br />
                <strong>{{ 'widget_label_context'|trans({}, 'SonataMediaBundle') }}:</strong> <span type=\"label\">{{ form.vars['context']|trans({}, 'SonataMediaBundle') }}</span>
            {% endif %}
        </div>
        <div class=\"col-md-2 pull-left\">
            {{ block('form_widget') }}
        </div>
    </div>
{% endblock sonata_media_type_widget %}
", "@SonataMedia/Form/media_widgets.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Form\\media_widgets.html.twig");
    }
}
