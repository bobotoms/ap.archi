<?php

/* @SonataPage/Block/block_container.html.twig */
class __TwigTemplate_350d8090aa88fd8696eebfbf98012ec9b121a5f1a85441839d21a074ce897f3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_container.html.twig", "@SonataPage/Block/block_container.html.twig", 12);
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
        $__internal_b0ea4544093ec4cf4d286e6f874ebebe7eb72f87e5d387209eb99c0530062ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ea4544093ec4cf4d286e6f874ebebe7eb72f87e5d387209eb99c0530062ea8->enter($__internal_b0ea4544093ec4cf4d286e6f874ebebe7eb72f87e5d387209eb99c0530062ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/Block/block_container.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0ea4544093ec4cf4d286e6f874ebebe7eb72f87e5d387209eb99c0530062ea8->leave($__internal_b0ea4544093ec4cf4d286e6f874ebebe7eb72f87e5d387209eb99c0530062ea8_prof);

    }

    // line 14
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_c67738913422328d27cf765d40825a2678952c55c504228d0f84c065553daa2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67738913422328d27cf765d40825a2678952c55c504228d0f84c065553daa2c->enter($__internal_c67738913422328d27cf765d40825a2678952c55c504228d0f84c065553daa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")));
        echo "
";
        
        $__internal_c67738913422328d27cf765d40825a2678952c55c504228d0f84c065553daa2c->leave($__internal_c67738913422328d27cf765d40825a2678952c55c504228d0f84c065553daa2c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/Block/block_container.html.twig";
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
{% endblock %}", "@SonataPage/Block/block_container.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\Block\\block_container.html.twig");
    }
}
