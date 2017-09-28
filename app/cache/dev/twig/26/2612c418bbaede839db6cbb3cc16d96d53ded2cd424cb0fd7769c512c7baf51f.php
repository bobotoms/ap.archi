<?php

/* @SonataPage/BlockAdmin/block_core_container_edit.html.twig */
class __TwigTemplate_260fd150748720e64ea7a306482d3626f8e3adf60f953f7e0c62cb00a71d0ddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataPageBundle:BlockAdmin:edit.html.twig", "@SonataPage/BlockAdmin/block_core_container_edit.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle:BlockAdmin:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d30d59a5559957ce24b37938de055a068fdf1a6a3bdd84e3d9345e56d2fdcbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30d59a5559957ce24b37938de055a068fdf1a6a3bdd84e3d9345e56d2fdcbee->enter($__internal_d30d59a5559957ce24b37938de055a068fdf1a6a3bdd84e3d9345e56d2fdcbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/BlockAdmin/block_core_container_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d30d59a5559957ce24b37938de055a068fdf1a6a3bdd84e3d9345e56d2fdcbee->leave($__internal_d30d59a5559957ce24b37938de055a068fdf1a6a3bdd84e3d9345e56d2fdcbee_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b0dba4bce0d0c98b7f724328f3b876e3f59524f700922782761dc989264ea9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0dba4bce0d0c98b7f724328f3b876e3f59524f700922782761dc989264ea9d7->enter($__internal_b0dba4bce0d0c98b7f724328f3b876e3f59524f700922782761dc989264ea9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "
";
        
        $__internal_b0dba4bce0d0c98b7f724328f3b876e3f59524f700922782761dc989264ea9d7->leave($__internal_b0dba4bce0d0c98b7f724328f3b876e3f59524f700922782761dc989264ea9d7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/BlockAdmin/block_core_container_edit.html.twig";
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

{% extends 'SonataPageBundle:BlockAdmin:edit.html.twig' %}

{% block block %}

{% endblock %}
", "@SonataPage/BlockAdmin/block_core_container_edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\BlockAdmin\\block_core_container_edit.html.twig");
    }
}
