<?php

/* @SonataAdmin/CRUD/show_array.html.twig */
class __TwigTemplate_c7d94ef435a30e12f7e1a9864bc53811401d36c35d7284fe4b568eeeef07bcdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_array.html.twig", 13);
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
        $__internal_38a946bd3122cbfb192db12ea76db0e09768cb63de74ffd3aa1ddce3b55003f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a946bd3122cbfb192db12ea76db0e09768cb63de74ffd3aa1ddce3b55003f9->enter($__internal_38a946bd3122cbfb192db12ea76db0e09768cb63de74ffd3aa1ddce3b55003f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_array.html.twig"));

        // line 11
        $context["show"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "@SonataAdmin/CRUD/show_array.html.twig", 11);
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a946bd3122cbfb192db12ea76db0e09768cb63de74ffd3aa1ddce3b55003f9->leave($__internal_38a946bd3122cbfb192db12ea76db0e09768cb63de74ffd3aa1ddce3b55003f9_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_036f6c927f737770459178620bf3a804ecc5e9c85b9662968aacac21ac03fe0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036f6c927f737770459178620bf3a804ecc5e9c85b9662968aacac21ac03fe0e->enter($__internal_036f6c927f737770459178620bf3a804ecc5e9c85b9662968aacac21ac03fe0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["show"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array()), false)) : (false)));
        echo "
";
        
        $__internal_036f6c927f737770459178620bf3a804ecc5e9c85b9662968aacac21ac03fe0e->leave($__internal_036f6c927f737770459178620bf3a804ecc5e9c85b9662968aacac21ac03fe0e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  37 => 15,  30 => 13,  28 => 11,  11 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as show %}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {{ show.render_array(value, field_description.options.inline|default(false)) }}
{% endblock %}
", "@SonataAdmin/CRUD/show_array.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_array.html.twig");
    }
}
