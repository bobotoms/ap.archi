<?php

/* SonataSeoBundle:Block:block_twitter_embed.html.twig */
class __TwigTemplate_b69665083008a31ea47b5b08ef3e85510693d46fa77dd05c999390ad69885293 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataSeoBundle:Block:block_twitter_embed.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e57664c0d516dbb6bee9d04621a9f7428982471a4b9290d3b37e9a8377aa6d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57664c0d516dbb6bee9d04621a9f7428982471a4b9290d3b37e9a8377aa6d7c->enter($__internal_e57664c0d516dbb6bee9d04621a9f7428982471a4b9290d3b37e9a8377aa6d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_twitter_embed.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e57664c0d516dbb6bee9d04621a9f7428982471a4b9290d3b37e9a8377aa6d7c->leave($__internal_e57664c0d516dbb6bee9d04621a9f7428982471a4b9290d3b37e9a8377aa6d7c_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_9c2a8cbb606f702338bb0343cf9e515229138fe79da7bb1c025b32f33a141f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2a8cbb606f702338bb0343cf9e515229138fe79da7bb1c025b32f33a141f9f->enter($__internal_9c2a8cbb606f702338bb0343cf9e515229138fe79da7bb1c025b32f33a141f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        ";
        echo (isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet"));
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9c2a8cbb606f702338bb0343cf9e515229138fe79da7bb1c025b32f33a141f9f->leave($__internal_9c2a8cbb606f702338bb0343cf9e515229138fe79da7bb1c025b32f33a141f9f_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_twitter_embed.html.twig";
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
", "SonataSeoBundle:Block:block_twitter_embed.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/block_twitter_embed.html.twig");
    }
}
