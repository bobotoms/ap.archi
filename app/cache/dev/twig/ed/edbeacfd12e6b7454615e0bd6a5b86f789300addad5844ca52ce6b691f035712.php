<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_1131c2ae761b74f766344d2495909033443cb641b3e63f0e9f4b260a098c1617 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01bb3cae49d14c41606f1533a601c67826b90ceaddda632cf05941904eaa235b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bb3cae49d14c41606f1533a601c67826b90ceaddda632cf05941904eaa235b->enter($__internal_01bb3cae49d14c41606f1533a601c67826b90ceaddda632cf05941904eaa235b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01bb3cae49d14c41606f1533a601c67826b90ceaddda632cf05941904eaa235b->leave($__internal_01bb3cae49d14c41606f1533a601c67826b90ceaddda632cf05941904eaa235b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_76282f5167ef7a8aa0097868a8ba8d3647970bf8b0537d2db05ecb5650e19e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76282f5167ef7a8aa0097868a8ba8d3647970bf8b0537d2db05ecb5650e19e04->enter($__internal_76282f5167ef7a8aa0097868a8ba8d3647970bf8b0537d2db05ecb5650e19e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_76282f5167ef7a8aa0097868a8ba8d3647970bf8b0537d2db05ecb5650e19e04->leave($__internal_76282f5167ef7a8aa0097868a8ba8d3647970bf8b0537d2db05ecb5650e19e04_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_1d2acb3eccafb1d9cda75ff180ab209eadbdd0e8fe1d406a5728dd794416d64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2acb3eccafb1d9cda75ff180ab209eadbdd0e8fe1d406a5728dd794416d64a->enter($__internal_1d2acb3eccafb1d9cda75ff180ab209eadbdd0e8fe1d406a5728dd794416d64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_1d2acb3eccafb1d9cda75ff180ab209eadbdd0e8fe1d406a5728dd794416d64a->leave($__internal_1d2acb3eccafb1d9cda75ff180ab209eadbdd0e8fe1d406a5728dd794416d64a_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_d484caf8719b86888e8beb4ceb2c23856885e32e66d9fe803bf1bff216d4470c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d484caf8719b86888e8beb4ceb2c23856885e32e66d9fe803bf1bff216d4470c->enter($__internal_d484caf8719b86888e8beb4ceb2c23856885e32e66d9fe803bf1bff216d4470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_d484caf8719b86888e8beb4ceb2c23856885e32e66d9fe803bf1bff216d4470c->leave($__internal_d484caf8719b86888e8beb4ceb2c23856885e32e66d9fe803bf1bff216d4470c_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_b7e4ad065db774154e81541c1ca87babd0b5d6f525817619cf9986c614a39f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e4ad065db774154e81541c1ca87babd0b5d6f525817619cf9986c614a39f2f->enter($__internal_b7e4ad065db774154e81541c1ca87babd0b5d6f525817619cf9986c614a39f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_b7e4ad065db774154e81541c1ca87babd0b5d6f525817619cf9986c614a39f2f->leave($__internal_b7e4ad065db774154e81541c1ca87babd0b5d6f525817619cf9986c614a39f2f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
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
", "@SonataAdmin/CRUD/base_acl.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_acl.html.twig");
    }
}
