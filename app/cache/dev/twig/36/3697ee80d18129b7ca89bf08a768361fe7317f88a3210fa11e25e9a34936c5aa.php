<?php

/* @SonataSeo/Block/block_facebook_send_button.html.twig */
class __TwigTemplate_de093ff14a4416ba156359c82ac19bb7318101979a47c755132fe76ef2b437bf extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataSeo/Block/block_facebook_send_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0062e5c120248a8775c5846a497c80fa0b85ae2af1a339890898f429f0393bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0062e5c120248a8775c5846a497c80fa0b85ae2af1a339890898f429f0393bfd->enter($__internal_0062e5c120248a8775c5846a497c80fa0b85ae2af1a339890898f429f0393bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/block_facebook_send_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0062e5c120248a8775c5846a497c80fa0b85ae2af1a339890898f429f0393bfd->leave($__internal_0062e5c120248a8775c5846a497c80fa0b85ae2af1a339890898f429f0393bfd_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_250426e2d117514ecc4f065dadb77f57397d0b06b9e81eb68b08982b1ffbd873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250426e2d117514ecc4f065dadb77f57397d0b06b9e81eb68b08982b1ffbd873->enter($__internal_250426e2d117514ecc4f065dadb77f57397d0b06b9e81eb68b08982b1ffbd873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_250426e2d117514ecc4f065dadb77f57397d0b06b9e81eb68b08982b1ffbd873->leave($__internal_250426e2d117514ecc4f065dadb77f57397d0b06b9e81eb68b08982b1ffbd873_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/block_facebook_send_button.html.twig";
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
", "@SonataSeo/Block/block_facebook_send_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\block_facebook_send_button.html.twig");
    }
}
