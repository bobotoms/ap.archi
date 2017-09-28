<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_c150d29e738bf7b54f68f437be4338105d77a8af7e23a9aad0fdcf9d2cda2682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6cd2f70130d3fc8a38cc1a3e5fa9a1302b562460abc7c63acac5e15919cefe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cd2f70130d3fc8a38cc1a3e5fa9a1302b562460abc7c63acac5e15919cefe7->enter($__internal_a6cd2f70130d3fc8a38cc1a3e5fa9a1302b562460abc7c63acac5e15919cefe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6cd2f70130d3fc8a38cc1a3e5fa9a1302b562460abc7c63acac5e15919cefe7->leave($__internal_a6cd2f70130d3fc8a38cc1a3e5fa9a1302b562460abc7c63acac5e15919cefe7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fb48cd44aead765afe9353bcf72d98e9d400ce8fce8db912ecc798613ae4a035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb48cd44aead765afe9353bcf72d98e9d400ce8fce8db912ecc798613ae4a035->enter($__internal_fb48cd44aead765afe9353bcf72d98e9d400ce8fce8db912ecc798613ae4a035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:display_boolean.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 15)->display($context);
        
        $__internal_fb48cd44aead765afe9353bcf72d98e9d400ce8fce8db912ecc798613ae4a035->leave($__internal_fb48cd44aead765afe9353bcf72d98e9d400ce8fce8db912ecc798613ae4a035_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_boolean.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- include 'SonataAdminBundle:CRUD:display_boolean.html.twig' -%}
{% endblock %}
", "@SonataAdmin/CRUD/show_boolean.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_boolean.html.twig");
    }
}
