<?php

/* SonataPageBundle:Block:block_container.html.twig */
class __TwigTemplate_5ec0ec76745b680159573258b9093241671ab05b9b31dfda6a62de6bfdc96512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_container.html.twig", "SonataPageBundle:Block:block_container.html.twig", 12);
        $this->blocks = array(
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6669f2fab7b7dba257211ca4c6557ea138443cf059843de98258c1adb492201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6669f2fab7b7dba257211ca4c6557ea138443cf059843de98258c1adb492201->enter($__internal_e6669f2fab7b7dba257211ca4c6557ea138443cf059843de98258c1adb492201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Block:block_container.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6669f2fab7b7dba257211ca4c6557ea138443cf059843de98258c1adb492201->leave($__internal_e6669f2fab7b7dba257211ca4c6557ea138443cf059843de98258c1adb492201_prof);

    }

    // line 14
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_82d33e46d2b931f7695d2ed888a7ad5b158c463f207b2dceb237f67d2215cc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d33e46d2b931f7695d2ed888a7ad5b158c463f207b2dceb237f67d2215cc5f->enter($__internal_82d33e46d2b931f7695d2ed888a7ad5b158c463f207b2dceb237f67d2215cc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")));
        echo "
";
        
        $__internal_82d33e46d2b931f7695d2ed888a7ad5b158c463f207b2dceb237f67d2215cc5f->leave($__internal_82d33e46d2b931f7695d2ed888a7ad5b158c463f207b2dceb237f67d2215cc5f_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  34 => 14,  11 => 12,);
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

{% extends \"SonataBlockBundle:Block:block_container.html.twig\" %}

{% block block_child_render %}
    {{ sonata_page_render_block(child) }}
{% endblock %}", "SonataPageBundle:Block:block_container.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/Block/block_container.html.twig");
    }
}
