<?php

/* SonataSeoBundle:Block:block_facebook_send_button.html.twig */
class __TwigTemplate_276df68003dfdcc442ff584a76b2bf76303948c1b1ba91c297389399e8de9246 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_facebook_send_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dce202074ef13d99f45d44363d55985951ec72ffe172aa1fcd3bc750ece8c598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce202074ef13d99f45d44363d55985951ec72ffe172aa1fcd3bc750ece8c598->enter($__internal_dce202074ef13d99f45d44363d55985951ec72ffe172aa1fcd3bc750ece8c598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_facebook_send_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dce202074ef13d99f45d44363d55985951ec72ffe172aa1fcd3bc750ece8c598->leave($__internal_dce202074ef13d99f45d44363d55985951ec72ffe172aa1fcd3bc750ece8c598_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_a5c51186f7aae6110827d305397c33e31feb6269a9d336173fe6542543ab4589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c51186f7aae6110827d305397c33e31feb6269a9d336173fe6542543ab4589->enter($__internal_a5c51186f7aae6110827d305397c33e31feb6269a9d336173fe6542543ab4589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    <div class=\"fb-send\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
            echo "data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        data-colorscheme=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "colorscheme", array()), "html", null, true);
        echo "\"
        ";
        // line 19
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array())) {
            echo "data-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array()), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "height", array())) {
            echo "data-height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "height", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a5c51186f7aae6110827d305397c33e31feb6269a9d336173fe6542543ab4589->leave($__internal_a5c51186f7aae6110827d305397c33e31feb6269a9d336173fe6542543ab4589_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_facebook_send_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  56 => 19,  51 => 18,  45 => 17,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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

    <div class=\"fb-send\"
        {% if settings.url %}data-href=\"{{ settings.url }}\"{% endif %}
        data-colorscheme=\"{{ settings.colorscheme }}\"
        {% if settings.width %}data-width=\"{{ settings.width }}\"{% endif %}
        {% if settings.height %}data-height=\"{{ settings.height }}\"{% endif %}>
    </div>

{% endspaceless %}
{% endblock %}
", "SonataSeoBundle:Block:block_facebook_send_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/block_facebook_send_button.html.twig");
    }
}
