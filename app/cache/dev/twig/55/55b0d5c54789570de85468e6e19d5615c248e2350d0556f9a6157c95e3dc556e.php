<?php

/* SonataSeoBundle:Block:block_facebook_share_button.html.twig */
class __TwigTemplate_822d42553287e9dc23658ad205b0e18750f2caad84a4fc00a2dfc301da8af301 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_facebook_share_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62056bf306fd65d3178d46edffb81d09319c198c437bd95497abe9b119ad2b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62056bf306fd65d3178d46edffb81d09319c198c437bd95497abe9b119ad2b96->enter($__internal_62056bf306fd65d3178d46edffb81d09319c198c437bd95497abe9b119ad2b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_facebook_share_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62056bf306fd65d3178d46edffb81d09319c198c437bd95497abe9b119ad2b96->leave($__internal_62056bf306fd65d3178d46edffb81d09319c198c437bd95497abe9b119ad2b96_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_697651423b81320c81525b46960b5e869b717fbf93608c5a2be0b6e526168e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697651423b81320c81525b46960b5e869b717fbf93608c5a2be0b6e526168e73->enter($__internal_697651423b81320c81525b46960b5e869b717fbf93608c5a2be0b6e526168e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    <div class=\"fb-share-button\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
            echo "data-href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array())) {
            echo "data-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "width", array()), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "        data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "layout", array()), "html", null, true);
        echo "\">
    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_697651423b81320c81525b46960b5e869b717fbf93608c5a2be0b6e526168e73->leave($__internal_697651423b81320c81525b46960b5e869b717fbf93608c5a2be0b6e526168e73_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_facebook_share_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  51 => 18,  45 => 17,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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

    <div class=\"fb-share-button\"
        {% if settings.url %}data-href=\"{{ settings.url }}\"{% endif %}
        {% if settings.width %}data-width=\"{{ settings.width }}\"{% endif %}
        data-type=\"{{ settings.layout }}\">
    </div>

{% endspaceless %}
{% endblock %}
", "SonataSeoBundle:Block:block_facebook_share_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/block_facebook_share_button.html.twig");
    }
}
