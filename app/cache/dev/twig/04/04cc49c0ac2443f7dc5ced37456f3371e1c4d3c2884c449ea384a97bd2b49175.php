<?php

/* @SonataSeo/Block/block_twitter_share_button.html.twig */
class __TwigTemplate_63aeda001090cddd32cf662d864cf71a81c426987bf5f150b7cfb75d4a4b6c9d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataSeo/Block/block_twitter_share_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4202d69e08d4563064292241c935df8e29e1c72abffce160d635c6fc1eee585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4202d69e08d4563064292241c935df8e29e1c72abffce160d635c6fc1eee585->enter($__internal_f4202d69e08d4563064292241c935df8e29e1c72abffce160d635c6fc1eee585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/block_twitter_share_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4202d69e08d4563064292241c935df8e29e1c72abffce160d635c6fc1eee585->leave($__internal_f4202d69e08d4563064292241c935df8e29e1c72abffce160d635c6fc1eee585_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_96e09a84009ddcaf804d37f120de9fb807b1fc614648a3ca241cf1f9bc3e10cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e09a84009ddcaf804d37f120de9fb807b1fc614648a3ca241cf1f9bc3e10cc->enter($__internal_96e09a84009ddcaf804d37f120de9fb807b1fc614648a3ca241cf1f9bc3e10cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    <a href=\"https://twitter.com/share\" class=\"twitter-share-button\"
        ";
        // line 17
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array())) {
            echo "data-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "url", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array())) {
            echo "data-text=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array()), "html", null, true);
            echo "\"";
        }
        // line 19
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "via", array())) {
            echo "data-via=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "via", array()), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "recommend", array())) {
            echo "data-related=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "recommend", array()), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "hashtag", array())) {
            echo "data-hashtags=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "hashtag", array()), "html", null, true);
            echo "\"";
        }
        // line 22
        echo "        ";
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "show_count", array())) {
            echo "data-count=\"none\"";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "large_button", array())) {
            echo "data-size=\"large\"";
        }
        // line 24
        echo "        data-lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "language", array()), "html", null, true);
        echo "\"
        ";
        // line 25
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "opt_out", array())) {
            echo "data-dnt=\"true\"";
        }
        echo ">
        Tweet
    </a>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_96e09a84009ddcaf804d37f120de9fb807b1fc614648a3ca241cf1f9bc3e10cc->leave($__internal_96e09a84009ddcaf804d37f120de9fb807b1fc614648a3ca241cf1f9bc3e10cc_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/block_twitter_share_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  89 => 24,  84 => 23,  79 => 22,  72 => 21,  65 => 20,  58 => 19,  51 => 18,  45 => 17,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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

    <a href=\"https://twitter.com/share\" class=\"twitter-share-button\"
        {% if settings.url %}data-url=\"{{ settings.url }}\"{% endif %}
        {% if settings.text %}data-text=\"{{ settings.text }}\"{% endif %}
        {% if settings.via %}data-via=\"{{ settings.via }}\"{% endif %}
        {% if settings.recommend %}data-related=\"{{ settings.recommend }}\"{% endif %}
        {% if settings.hashtag %}data-hashtags=\"{{ settings.hashtag }}\"{% endif %}
        {% if not settings.show_count %}data-count=\"none\"{% endif %}
        {% if settings.large_button %}data-size=\"large\"{% endif %}
        data-lang=\"{{ settings.language }}\"
        {% if settings.opt_out %}data-dnt=\"true\"{% endif %}>
        Tweet
    </a>

{% endspaceless %}
{% endblock %}
", "@SonataSeo/Block/block_twitter_share_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\block_twitter_share_button.html.twig");
    }
}
