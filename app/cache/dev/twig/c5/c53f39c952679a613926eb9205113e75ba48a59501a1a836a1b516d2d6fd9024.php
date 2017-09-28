<?php

/* @SonataMedia/Block/block_feature_media.html.twig */
class __TwigTemplate_e538a2c5b3ac57d3640bdb6d4fdc19a82a29f47d1e9e733082f848c737bf6053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataMedia/Block/block_feature_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_813fae7b965766ac79ef0592acaea316944c6f839b29303c42ebc02f5444c6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813fae7b965766ac79ef0592acaea316944c6f839b29303c42ebc02f5444c6ca->enter($__internal_813fae7b965766ac79ef0592acaea316944c6f839b29303c42ebc02f5444c6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Block/block_feature_media.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_813fae7b965766ac79ef0592acaea316944c6f839b29303c42ebc02f5444c6ca->leave($__internal_813fae7b965766ac79ef0592acaea316944c6f839b29303c42ebc02f5444c6ca_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_cfa134ff45d391c8662d7a8f679d3a79976ac634a7966b806d4e3badc6ac7882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa134ff45d391c8662d7a8f679d3a79976ac634a7966b806d4e3badc6ac7882->enter($__internal_cfa134ff45d391c8662d7a8f679d3a79976ac634a7966b806d4e3badc6ac7882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "
    <div class=\"sonata-media-block-feature-media-container\">

        <div class=\"sonata-media-block-feature-media-container-";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "orientation", array()), "html", null, true);
        echo "\">
            ";
        // line 18
        if (((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")) && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format", array()))) {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format", array()), array());
            // line 20
            echo "            ";
        } else {
            // line 21
            echo "                ";
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </div>

        ";
        // line 25
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 26
            echo "            <h3 class=\"sonata-media-block-feature-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-media-block-feature-media-content\">
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array()), "html", null, true);
        echo "
        </div>

        <div style=\"clear: both\"></div>
    </div>
";
        
        $__internal_cfa134ff45d391c8662d7a8f679d3a79976ac634a7966b806d4e3badc6ac7882->leave($__internal_cfa134ff45d391c8662d7a8f679d3a79976ac634a7966b806d4e3badc6ac7882_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Block/block_feature_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  73 => 28,  67 => 26,  65 => 25,  61 => 23,  58 => 22,  56 => 21,  53 => 20,  50 => 19,  48 => 18,  44 => 17,  39 => 14,  33 => 13,  18 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends sonata_block.templates.block_base %}

{% block block %}

    <div class=\"sonata-media-block-feature-media-container\">

        <div class=\"sonata-media-block-feature-media-container-{{ settings.orientation }}\">
            {% if media and settings.format%}
                {% media media, settings.format %}
            {% else %}
                {# no media selected or format defined... #}
            {% endif %}
        </div>

        {% if settings.title %}
            <h3 class=\"sonata-media-block-feature-media-title\">{{ settings.title }}</h3>
        {% endif %}

        <div class=\"sonata-media-block-feature-media-content\">
            {{ settings.content }}
        </div>

        <div style=\"clear: both\"></div>
    </div>
{% endblock %}
", "@SonataMedia/Block/block_feature_media.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Block\\block_feature_media.html.twig");
    }
}
