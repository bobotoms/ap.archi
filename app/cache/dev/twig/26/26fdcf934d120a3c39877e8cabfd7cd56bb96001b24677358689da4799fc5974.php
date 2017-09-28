<?php

/* SonataSeoBundle:Block:block_facebook_like_button.html.twig */
class __TwigTemplate_fc337f6bb8c886aa685bf8b8ce6fdb7762275cef24f484e97147cfbb45386b2f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_facebook_like_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5fcafc9f8b298747b9b5c2d988de1995291b448e3e9a2fe66e649a7747558dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fcafc9f8b298747b9b5c2d988de1995291b448e3e9a2fe66e649a7747558dc->enter($__internal_b5fcafc9f8b298747b9b5c2d988de1995291b448e3e9a2fe66e649a7747558dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_facebook_like_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5fcafc9f8b298747b9b5c2d988de1995291b448e3e9a2fe66e649a7747558dc->leave($__internal_b5fcafc9f8b298747b9b5c2d988de1995291b448e3e9a2fe66e649a7747558dc_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_4de223376b02657ff9390db4591190596d156d11e005a4de97f9478356920ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de223376b02657ff9390db4591190596d156d11e005a4de97f9478356920ce9->enter($__internal_4de223376b02657ff9390db4591190596d156d11e005a4de97f9478356920ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    <div class=\"fb-like\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
            echo "data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        data-layout=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "layout", array()), "html", null, true);
        echo "\"
        data-action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "action", array()), "html", null, true);
        echo "\"
        data-show-faces=\"";
        // line 20
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "show_faces", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
        data-share=\"";
        // line 21
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "share", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
        ";
        // line 22
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array())) {
            echo "data-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array()), "html", null, true);
            echo "\"";
        }
        // line 23
        echo "        data-colorscheme=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "colorscheme", array()), "html", null, true);
        echo "\">
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4de223376b02657ff9390db4591190596d156d11e005a4de97f9478356920ce9->leave($__internal_4de223376b02657ff9390db4591190596d156d11e005a4de97f9478356920ce9_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_facebook_like_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  76 => 22,  68 => 21,  60 => 20,  56 => 19,  51 => 18,  45 => 17,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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

    <div class=\"fb-like\"
        {% if settings.url %}data-href=\"{{ settings.url }}\"{% endif %}
        data-layout=\"{{ settings.layout }}\"
        data-action=\"{{ settings.action }}\"
        data-show-faces=\"{% if settings.show_faces %}true{% else %}false{% endif %}\"
        data-share=\"{% if settings.share %}true{% else %}false{% endif %}\"
        {% if settings.width %}data-width=\"{{ settings.width }}\"{% endif %}
        data-colorscheme=\"{{ settings.colorscheme }}\">
    </div>

{% endspaceless %}
{% endblock %}
", "SonataSeoBundle:Block:block_facebook_like_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/block_facebook_like_button.html.twig");
    }
}
