<?php

/* @SonataMedia/Block/block_media.html.twig */
class __TwigTemplate_91d6879ac11166d60d243ec2091520b9215a575687e0877c0fb5535a3cb99fd4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataMedia/Block/block_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b443525186924bbcc53eee9a46d6fa12dce3958324670d80b459cffd696f0f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b443525186924bbcc53eee9a46d6fa12dce3958324670d80b459cffd696f0f63->enter($__internal_b443525186924bbcc53eee9a46d6fa12dce3958324670d80b459cffd696f0f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Block/block_media.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b443525186924bbcc53eee9a46d6fa12dce3958324670d80b459cffd696f0f63->leave($__internal_b443525186924bbcc53eee9a46d6fa12dce3958324670d80b459cffd696f0f63_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_c4794edb4348ce0d0ac330893aa8c79e345cbe73785578ec7139dcb1dfd9cacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4794edb4348ce0d0ac330893aa8c79e345cbe73785578ec7139dcb1dfd9cacd->enter($__internal_c4794edb4348ce0d0ac330893aa8c79e345cbe73785578ec7139dcb1dfd9cacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_c4794edb4348ce0d0ac330893aa8c79e345cbe73785578ec7139dcb1dfd9cacd->leave($__internal_c4794edb4348ce0d0ac330893aa8c79e345cbe73785578ec7139dcb1dfd9cacd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Block/block_media.html.twig";
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
", "@SonataMedia/Block/block_media.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Block\\block_media.html.twig");
    }
}
