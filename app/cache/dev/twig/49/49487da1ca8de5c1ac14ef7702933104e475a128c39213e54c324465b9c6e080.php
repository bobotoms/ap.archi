<?php

/* SonataSeoBundle:Block:block_twitter_mention_button.html.twig */
class __TwigTemplate_cfbfc0370c2a00d092462b7f1b5e7043caa0e324c0fd4960b3ae92b90cf014d4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_twitter_mention_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7234592f1be3e4a1fa57b4917ad5ecb2977a22cd65aff5c0445515ef92949094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7234592f1be3e4a1fa57b4917ad5ecb2977a22cd65aff5c0445515ef92949094->enter($__internal_7234592f1be3e4a1fa57b4917ad5ecb2977a22cd65aff5c0445515ef92949094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_twitter_mention_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7234592f1be3e4a1fa57b4917ad5ecb2977a22cd65aff5c0445515ef92949094->leave($__internal_7234592f1be3e4a1fa57b4917ad5ecb2977a22cd65aff5c0445515ef92949094_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_79a2f1f4a11e94e3c75ed93c6813b3b201e01e7162adc412645214eb3c8c4eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a2f1f4a11e94e3c75ed93c6813b3b201e01e7162adc412645214eb3c8c4eba->enter($__internal_79a2f1f4a11e94e3c75ed93c6813b3b201e01e7162adc412645214eb3c8c4eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    ";
        // line 16
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "user", array())) {
            // line 17
            echo "
        <a href=\"https://twitter.com/intent/tweet?screen_name=";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "user", array()), "html", null, true);
            echo "\" class=\"twitter-mention-button\"
            data-related=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "recommend", array()), "html", null, true);
            echo "\"
            ";
            // line 20
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array())) {
                echo "data-text=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array()), "html", null, true);
                echo "\"";
            }
            // line 21
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "recommend", array())) {
                echo "data-related=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "recommend", array()), "html", null, true);
                echo "\"";
            }
            // line 22
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "large_button", array())) {
                echo "data-size=\"large\"";
            }
            // line 23
            echo "            data-lang=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "language", array()), "html", null, true);
            echo "\"
            ";
            // line 24
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "opt_out", array())) {
                echo "data-dnt=\"true\"";
            }
            echo ">
            Tweet to @";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "user", array()), "html", null, true);
            echo "
        </a>

    ";
        }
        // line 29
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_79a2f1f4a11e94e3c75ed93c6813b3b201e01e7162adc412645214eb3c8c4eba->leave($__internal_79a2f1f4a11e94e3c75ed93c6813b3b201e01e7162adc412645214eb3c8c4eba_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_twitter_mention_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  86 => 25,  80 => 24,  75 => 23,  70 => 22,  63 => 21,  57 => 20,  53 => 19,  49 => 18,  46 => 17,  44 => 16,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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

    {% if settings.user %}

        <a href=\"https://twitter.com/intent/tweet?screen_name={{ settings.user }}\" class=\"twitter-mention-button\"
            data-related=\"{{ settings.recommend }}\"
            {% if settings.text %}data-text=\"{{ settings.text }}\"{% endif %}
            {% if settings.recommend %}data-related=\"{{ settings.recommend }}\"{% endif %}
            {% if settings.large_button %}data-size=\"large\"{% endif %}
            data-lang=\"{{ settings.language }}\"
            {% if settings.opt_out %}data-dnt=\"true\"{% endif %}>
            Tweet to @{{ settings.user }}
        </a>

    {% endif %}

{% endspaceless %}
{% endblock %}
", "SonataSeoBundle:Block:block_twitter_mention_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/block_twitter_mention_button.html.twig");
    }
}
