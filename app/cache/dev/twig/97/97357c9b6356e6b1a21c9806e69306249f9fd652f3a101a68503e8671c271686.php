<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_351b8d37a23869fcbc3b9753e71c22ef1a43a7e4c87a21dbfd11499fda422abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_5da5cebbfbce0581a7b4c56cf9fce8fadd8afda51f3df4b259329928cf8dd7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da5cebbfbce0581a7b4c56cf9fce8fadd8afda51f3df4b259329928cf8dd7ef->enter($__internal_5da5cebbfbce0581a7b4c56cf9fce8fadd8afda51f3df4b259329928cf8dd7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da5cebbfbce0581a7b4c56cf9fce8fadd8afda51f3df4b259329928cf8dd7ef->leave($__internal_5da5cebbfbce0581a7b4c56cf9fce8fadd8afda51f3df4b259329928cf8dd7ef_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8f4a0551b482ae60d509bcb7057cfe1797cfc32a3720dee9059f886ecce5822c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4a0551b482ae60d509bcb7057cfe1797cfc32a3720dee9059f886ecce5822c->enter($__internal_8f4a0551b482ae60d509bcb7057cfe1797cfc32a3720dee9059f886ecce5822c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:display_boolean.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 15)->display($context);
        
        $__internal_8f4a0551b482ae60d509bcb7057cfe1797cfc32a3720dee9059f886ecce5822c->leave($__internal_8f4a0551b482ae60d509bcb7057cfe1797cfc32a3720dee9059f886ecce5822c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
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
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_boolean.html.twig");
    }
}
