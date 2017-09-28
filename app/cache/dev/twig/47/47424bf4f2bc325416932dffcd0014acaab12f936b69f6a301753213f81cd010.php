<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_3a6a26c35396ad35f5dfd7a9aa42114339724a1136bc96b9f8e43c171a9a8081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0e18cd09e6de8d24de63708fba96516d74bc328b466a47ac6031d8d76173976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e18cd09e6de8d24de63708fba96516d74bc328b466a47ac6031d8d76173976->enter($__internal_b0e18cd09e6de8d24de63708fba96516d74bc328b466a47ac6031d8d76173976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0e18cd09e6de8d24de63708fba96516d74bc328b466a47ac6031d8d76173976->leave($__internal_b0e18cd09e6de8d24de63708fba96516d74bc328b466a47ac6031d8d76173976_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_48e072f9221ad16d9c3c48825084a3e63fc1f8c03bb9c3ebd43485935f0bd557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e072f9221ad16d9c3c48825084a3e63fc1f8c03bb9c3ebd43485935f0bd557->enter($__internal_48e072f9221ad16d9c3c48825084a3e63fc1f8c03bb9c3ebd43485935f0bd557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_48e072f9221ad16d9c3c48825084a3e63fc1f8c03bb9c3ebd43485935f0bd557->leave($__internal_48e072f9221ad16d9c3c48825084a3e63fc1f8c03bb9c3ebd43485935f0bd557_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
