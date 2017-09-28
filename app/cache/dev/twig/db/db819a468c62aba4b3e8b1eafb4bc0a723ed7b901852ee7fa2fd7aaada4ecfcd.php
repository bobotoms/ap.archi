<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_6e075d23eabfde7d00fe2a4bccaf936e0a22e1d97e4ecec4862518ba0d559f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4bb7ae8eed4d08df9e304f6ca0a597edb29dcea40418fb3c0ef7b40bd6f4d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bb7ae8eed4d08df9e304f6ca0a597edb29dcea40418fb3c0ef7b40bd6f4d0d->enter($__internal_c4bb7ae8eed4d08df9e304f6ca0a597edb29dcea40418fb3c0ef7b40bd6f4d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4bb7ae8eed4d08df9e304f6ca0a597edb29dcea40418fb3c0ef7b40bd6f4d0d->leave($__internal_c4bb7ae8eed4d08df9e304f6ca0a597edb29dcea40418fb3c0ef7b40bd6f4d0d_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_df129feeb5398c4492bb9b56a0ea409d6e59ef05ed2728b6af8b461afdbc9743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df129feeb5398c4492bb9b56a0ea409d6e59ef05ed2728b6af8b461afdbc9743->enter($__internal_df129feeb5398c4492bb9b56a0ea409d6e59ef05ed2728b6af8b461afdbc9743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_df129feeb5398c4492bb9b56a0ea409d6e59ef05ed2728b6af8b461afdbc9743->leave($__internal_df129feeb5398c4492bb9b56a0ea409d6e59ef05ed2728b6af8b461afdbc9743_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_21fee2174a93f2d1366d10d5786042c2e667327f1af4d504615a447b0eb94371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fee2174a93f2d1366d10d5786042c2e667327f1af4d504615a447b0eb94371->enter($__internal_21fee2174a93f2d1366d10d5786042c2e667327f1af4d504615a447b0eb94371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_21fee2174a93f2d1366d10d5786042c2e667327f1af4d504615a447b0eb94371->leave($__internal_21fee2174a93f2d1366d10d5786042c2e667327f1af4d504615a447b0eb94371_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_6e75a8842b1f8a0ef5c5ac184b1c1ff3ebf30f21b1046a73cc02cb36c57a6821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e75a8842b1f8a0ef5c5ac184b1c1ff3ebf30f21b1046a73cc02cb36c57a6821->enter($__internal_6e75a8842b1f8a0ef5c5ac184b1c1ff3ebf30f21b1046a73cc02cb36c57a6821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_6e75a8842b1f8a0ef5c5ac184b1c1ff3ebf30f21b1046a73cc02cb36c57a6821->leave($__internal_6e75a8842b1f8a0ef5c5ac184b1c1ff3ebf30f21b1046a73cc02cb36c57a6821_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_b871aabb96f5fb8757ea549aecfe96731ff6e56802e3862fffaffca6390b2868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b871aabb96f5fb8757ea549aecfe96731ff6e56802e3862fffaffca6390b2868->enter($__internal_b871aabb96f5fb8757ea549aecfe96731ff6e56802e3862fffaffca6390b2868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_b871aabb96f5fb8757ea549aecfe96731ff6e56802e3862fffaffca6390b2868->leave($__internal_b871aabb96f5fb8757ea549aecfe96731ff6e56802e3862fffaffca6390b2868_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
