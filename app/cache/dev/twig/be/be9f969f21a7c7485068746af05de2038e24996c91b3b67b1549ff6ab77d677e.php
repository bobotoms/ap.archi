<?php

/* SonataSeoBundle:Block:block_social_container.html.twig */
class __TwigTemplate_b0bcbb1282e59fecfa46b895d0148df0ba9a5681f6852ccef983cfa220da1440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_container", array(), "array"), "SonataSeoBundle:Block:block_social_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_315eb9f1ee0d99603248f7d34cf0d5321484436a79dd5e95478d7e6c8fc52bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315eb9f1ee0d99603248f7d34cf0d5321484436a79dd5e95478d7e6c8fc52bd0->enter($__internal_315eb9f1ee0d99603248f7d34cf0d5321484436a79dd5e95478d7e6c8fc52bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:block_social_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_315eb9f1ee0d99603248f7d34cf0d5321484436a79dd5e95478d7e6c8fc52bd0->leave($__internal_315eb9f1ee0d99603248f7d34cf0d5321484436a79dd5e95478d7e6c8fc52bd0_prof);

    }

    // line 15
    public function block_block($context, array $blocks = array())
    {
        $__internal_61e380b152ec612260f37f5d3690f7e33559a0547838fb619bae459430ffe950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e380b152ec612260f37f5d3690f7e33559a0547838fb619bae459430ffe950->enter($__internal_61e380b152ec612260f37f5d3690f7e33559a0547838fb619bae459430ffe950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 16
        echo "    <div class=\"col-sm-12\">
        <div class=\"row\">
            ";
        // line 18
        $this->displayParentBlock("block", $context, $blocks);
        echo "
        </div>
        <div class=\"clearfix\"></div>
    </div>
";
        
        $__internal_61e380b152ec612260f37f5d3690f7e33559a0547838fb619bae459430ffe950->leave($__internal_61e380b152ec612260f37f5d3690f7e33559a0547838fb619bae459430ffe950_prof);

    }

    // line 23
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_1c4a7dc3e503e2fca8a2f4ef99d5eb7abd7e91930148f02db7bac3685ae05513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4a7dc3e503e2fca8a2f4ef99d5eb7abd7e91930148f02db7bac3685ae05513->enter($__internal_1c4a7dc3e503e2fca8a2f4ef99d5eb7abd7e91930148f02db7bac3685ae05513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 24
        echo "    <div class=\"sonata_seo_social pull-left\">
        ";
        // line 25
        $this->displayParentBlock("block_child_render", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_1c4a7dc3e503e2fca8a2f4ef99d5eb7abd7e91930148f02db7bac3685ae05513->leave($__internal_1c4a7dc3e503e2fca8a2f4ef99d5eb7abd7e91930148f02db7bac3685ae05513_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:block_social_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  62 => 24,  56 => 23,  44 => 18,  40 => 16,  34 => 15,  19 => 12,);
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

{% extends sonata_block.templates['block_container'] %}

{# render container block #}
{% block block %}
    <div class=\"col-sm-12\">
        <div class=\"row\">
            {{ parent() }}
        </div>
        <div class=\"clearfix\"></div>
    </div>
{% endblock %}
{% block block_child_render %}
    <div class=\"sonata_seo_social pull-left\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataSeoBundle:Block:block_social_container.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/block_social_container.html.twig");
    }
}
