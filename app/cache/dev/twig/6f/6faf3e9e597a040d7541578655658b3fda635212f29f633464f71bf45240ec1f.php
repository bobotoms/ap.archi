<?php

/* SonataMediaBundle:Block:block_media.html.twig */
class __TwigTemplate_f1f25cba10bbbc2ddadc269b29815c117809531bd87272bbc6773df6c511bb34 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aad5f17bbe09a5a955dd6eeb71c53fc5fcd70ac4ed99fe087eb2d3ee33e2ff97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad5f17bbe09a5a955dd6eeb71c53fc5fcd70ac4ed99fe087eb2d3ee33e2ff97->enter($__internal_aad5f17bbe09a5a955dd6eeb71c53fc5fcd70ac4ed99fe087eb2d3ee33e2ff97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:Block:block_media.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aad5f17bbe09a5a955dd6eeb71c53fc5fcd70ac4ed99fe087eb2d3ee33e2ff97->leave($__internal_aad5f17bbe09a5a955dd6eeb71c53fc5fcd70ac4ed99fe087eb2d3ee33e2ff97_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_10094aa66e2684fd5182e1e8c411a9f5cc572056e2468b73461d03f8aa4721fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10094aa66e2684fd5182e1e8c411a9f5cc572056e2468b73461d03f8aa4721fb->enter($__internal_10094aa66e2684fd5182e1e8c411a9f5cc572056e2468b73461d03f8aa4721fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 15
            echo "        <h3 class=\"sonata-media-block-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>
    ";
        }
        // line 17
        echo "
    <div class=\"sonata-media-block-media-container\">
        ";
        // line 19
        if (((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")) && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format", array()))) {
            // line 20
            echo "            ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format", array()), array());
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "            ";
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
";
        
        $__internal_10094aa66e2684fd5182e1e8c411a9f5cc572056e2468b73461d03f8aa4721fb->leave($__internal_10094aa66e2684fd5182e1e8c411a9f5cc572056e2468b73461d03f8aa4721fb_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  62 => 23,  60 => 22,  57 => 21,  54 => 20,  52 => 19,  48 => 17,  42 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
    {% if settings.title %}
        <h3 class=\"sonata-media-block-media-title\">{{ settings.title }}</h3>
    {% endif %}

    <div class=\"sonata-media-block-media-container\">
        {% if media and settings.format%}
            {% media media, settings.format %}
        {% else %}
            {# no media selected or format defined... #}
        {% endif %}
    </div>
{% endblock %}
", "SonataMediaBundle:Block:block_media.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle/Resources/views/Block/block_media.html.twig");
    }
}
