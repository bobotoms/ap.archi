<?php

/* @SonataSeo/Block/block_twitter_embed.html.twig */
class __TwigTemplate_4261412784e093554338346fd70978c1b97a6d0ea117551c80c8e014fb96aeb3 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataSeo/Block/block_twitter_embed.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2edf39a96edf88992e9ba46d4df6ed5e083eab827908ef6f751195a32187a7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edf39a96edf88992e9ba46d4df6ed5e083eab827908ef6f751195a32187a7e5->enter($__internal_2edf39a96edf88992e9ba46d4df6ed5e083eab827908ef6f751195a32187a7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/block_twitter_embed.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2edf39a96edf88992e9ba46d4df6ed5e083eab827908ef6f751195a32187a7e5->leave($__internal_2edf39a96edf88992e9ba46d4df6ed5e083eab827908ef6f751195a32187a7e5_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_a1fec7b8fcb088dffdc0251150193978d916eb56a6a8a52a915b925adabe46ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1fec7b8fcb088dffdc0251150193978d916eb56a6a8a52a915b925adabe46ad->enter($__internal_a1fec7b8fcb088dffdc0251150193978d916eb56a6a8a52a915b925adabe46ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        ";
        echo (isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet"));
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a1fec7b8fcb088dffdc0251150193978d916eb56a6a8a52a915b925adabe46ad->leave($__internal_a1fec7b8fcb088dffdc0251150193978d916eb56a6a8a52a915b925adabe46ad_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/block_twitter_embed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  39 => 14,  33 => 13,  18 => 11,);
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
        {{ tweet|raw }}
    {% endspaceless %}
{% endblock %}
", "@SonataSeo/Block/block_twitter_embed.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\block_twitter_embed.html.twig");
    }
}
