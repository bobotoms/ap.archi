<?php

/* SonataSeoBundle:Block:block_twitter_follow_button.html.twig */
class __TwigTemplate_b581ec616fb75da5e1ddb0f13fb6a7ac14a3a562069dc92bb199272e03a7fbbe extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_twitter_follow_button.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c8b151644691dd03977a7622adb43702cbcf3f19720f56406e789f541207e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8b151644691dd03977a7622adb43702cbcf3f19720f56406e789f541207e98->enter($__internal_1c8b151644691dd03977a7622adb43702cbcf3f19720f56406e789f541207e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_twitter_follow_button.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c8b151644691dd03977a7622adb43702cbcf3f19720f56406e789f541207e98->leave($__internal_1c8b151644691dd03977a7622adb43702cbcf3f19720f56406e789f541207e98_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_ccaa484796b9d65529c2475a15e071c505c2079634a8f59578380154f8214950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccaa484796b9d65529c2475a15e071c505c2079634a8f59578380154f8214950->enter($__internal_ccaa484796b9d65529c2475a15e071c505c2079634a8f59578380154f8214950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        ob_start();
        // line 15
        echo "
    ";
        // line 16
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "user", array())) {
            // line 17
            echo "
        <a href=\"https://twitter.com/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "user", array()), "html", null, true);
            echo "\" class=\"twitter-follow-button\"
            ";
            // line 19
            if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "show_username", array())) {
                echo "data-show-screen-name=\"false\"";
            }
            // line 20
            echo "            ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "large_button", array())) {
                echo "data-size=\"large\"";
            }
            // line 21
            echo "            data-lang=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "language", array()), "html", null, true);
            echo "\"
            ";
            // line 22
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "opt_out", array())) {
                echo "data-dnt=\"true\"";
            }
            echo ">
            Follow @";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "user", array()), "html", null, true);
            echo "
        </a>

    ";
        }
        // line 27
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ccaa484796b9d65529c2475a15e071c505c2079634a8f59578380154f8214950->leave($__internal_ccaa484796b9d65529c2475a15e071c505c2079634a8f59578380154f8214950_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_twitter_follow_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  73 => 23,  67 => 22,  62 => 21,  57 => 20,  53 => 19,  49 => 18,  46 => 17,  44 => 16,  41 => 15,  39 => 14,  33 => 13,  18 => 11,);
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

        <a href=\"https://twitter.com/{{ settings.user }}\" class=\"twitter-follow-button\"
            {% if not settings.show_username %}data-show-screen-name=\"false\"{% endif %}
            {% if settings.large_button %}data-size=\"large\"{% endif %}
            data-lang=\"{{ settings.language }}\"
            {% if settings.opt_out %}data-dnt=\"true\"{% endif %}>
            Follow @{{ settings.user }}
        </a>

    {% endif %}

{% endspaceless %}
{% endblock %}
", "SonataSeoBundle:Block:block_twitter_follow_button.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/block_twitter_follow_button.html.twig");
    }
}
