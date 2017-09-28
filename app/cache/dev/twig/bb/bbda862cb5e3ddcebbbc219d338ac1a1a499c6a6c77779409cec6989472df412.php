<?php

/* SonataSeoBundle:Block:block_pinterest_pin_button.html.twig */
class __TwigTemplate_f7c1fb78d98f41c2dc0ef2dac890b742be517f4ff9bcdd48e986b1ee72988770 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_pinterest_pin_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d65b9e491b68d4fdab74e94a4b098991acc801aabc9f93ad3c708b67769a6240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65b9e491b68d4fdab74e94a4b098991acc801aabc9f93ad3c708b67769a6240->enter($__internal_d65b9e491b68d4fdab74e94a4b098991acc801aabc9f93ad3c708b67769a6240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_pinterest_pin_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65b9e491b68d4fdab74e94a4b098991acc801aabc9f93ad3c708b67769a6240->leave($__internal_d65b9e491b68d4fdab74e94a4b098991acc801aabc9f93ad3c708b67769a6240_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_7244ff4945564a4ba28a36f3b9601890050060242b9a479c3a910534d132d033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7244ff4945564a4ba28a36f3b9601890050060242b9a479c3a910534d132d033->enter($__internal_7244ff4945564a4ba28a36f3b9601890050060242b9a479c3a910534d132d033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "
        <a href=\"//www.pinterest.com/pin/create/button/?url=";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
        echo "&media=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "image", array()), "html", null, true);
        echo "&description=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "description", array()), "html", null, true);
        echo "\"
           data-pin-do=\"buttonPin\"
           ";
        // line 18
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "size", array())) {
            echo "data-pin-height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "size", array()), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "           ";
        if (("round" == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "shape", array()))) {
            echo "data-pin-shape=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "shape", array()), "html", null, true);
            echo "\"";
        }
        echo ">
            <img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png\" />
        </a>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7244ff4945564a4ba28a36f3b9601890050060242b9a479c3a910534d132d033->leave($__internal_7244ff4945564a4ba28a36f3b9601890050060242b9a479c3a910534d132d033_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_pinterest_pin_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 18,  45 => 16,  42 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
    {% spaceless %}

        <a href=\"//www.pinterest.com/pin/create/button/?url={{ settings.url }}&media={{ settings.image }}&description={{ settings.description }}\"
           data-pin-do=\"buttonPin\"
           {% if settings.size %}data-pin-height=\"{{ settings.size }}\"{% endif %}
           {% if 'round' == settings.shape %}data-pin-shape=\"{{ settings.shape }}\"{% endif %}>
            <img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png\" />
        </a>

    {% endspaceless %}
{% endblock %}
", "SonataSeoBundle:Block:block_pinterest_pin_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/block_pinterest_pin_button.html.twig");
    }
}
