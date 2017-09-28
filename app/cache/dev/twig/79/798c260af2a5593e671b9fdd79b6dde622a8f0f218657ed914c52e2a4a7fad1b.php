<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_57823ae1d6c08a952ef0fb77c3b368ed6a6a25848e5a1438fe5094638277d042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
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
        $__internal_c972c088abca548c691e8bd9fb27b4445de2d4fac2dae0802a61d41593a1c4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c972c088abca548c691e8bd9fb27b4445de2d4fac2dae0802a61d41593a1c4d6->enter($__internal_c972c088abca548c691e8bd9fb27b4445de2d4fac2dae0802a61d41593a1c4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c972c088abca548c691e8bd9fb27b4445de2d4fac2dae0802a61d41593a1c4d6->leave($__internal_c972c088abca548c691e8bd9fb27b4445de2d4fac2dae0802a61d41593a1c4d6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_77e97b0ab248eb1d61ef07e9e2042a4e1b825c3a65dd41407e69b8b8878e4cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e97b0ab248eb1d61ef07e9e2042a4e1b825c3a65dd41407e69b8b8878e4cb7->enter($__internal_77e97b0ab248eb1d61ef07e9e2042a4e1b825c3a65dd41407e69b8b8878e4cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_77e97b0ab248eb1d61ef07e9e2042a4e1b825c3a65dd41407e69b8b8878e4cb7->leave($__internal_77e97b0ab248eb1d61ef07e9e2042a4e1b825c3a65dd41407e69b8b8878e4cb7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/show_time.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_time.html.twig");
    }
}
