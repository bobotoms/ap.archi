<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_f43adff0d272dc863083ce317e005d0d257c6161d02c7700455145e3ae51c6d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92a34b3aebf5a138069a03760d88e33c5274a350f32e58da9a184e4754f2cb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a34b3aebf5a138069a03760d88e33c5274a350f32e58da9a184e4754f2cb10->enter($__internal_92a34b3aebf5a138069a03760d88e33c5274a350f32e58da9a184e4754f2cb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92a34b3aebf5a138069a03760d88e33c5274a350f32e58da9a184e4754f2cb10->leave($__internal_92a34b3aebf5a138069a03760d88e33c5274a350f32e58da9a184e4754f2cb10_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b413b4565a56d343d6852fd78c25a116b1c93ee70414a3585cb02f3f4edbe381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b413b4565a56d343d6852fd78c25a116b1c93ee70414a3585cb02f3f4edbe381->enter($__internal_b413b4565a56d343d6852fd78c25a116b1c93ee70414a3585cb02f3f4edbe381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_b413b4565a56d343d6852fd78c25a116b1c93ee70414a3585cb02f3f4edbe381->leave($__internal_b413b4565a56d343d6852fd78c25a116b1c93ee70414a3585cb02f3f4edbe381_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e14243889f57b6948a1e1935e1396f79054d18614872ccca26622e2f53dd1d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14243889f57b6948a1e1935e1396f79054d18614872ccca26622e2f53dd1d3e->enter($__internal_e14243889f57b6948a1e1935e1396f79054d18614872ccca26622e2f53dd1d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_e14243889f57b6948a1e1935e1396f79054d18614872ccca26622e2f53dd1d3e->leave($__internal_e14243889f57b6948a1e1935e1396f79054d18614872ccca26622e2f53dd1d3e_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_c829a2036161db15bf7c0014e9ac27b58939b370c5f8ad442aef633fa4ac90bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c829a2036161db15bf7c0014e9ac27b58939b370c5f8ad442aef633fa4ac90bc->enter($__internal_c829a2036161db15bf7c0014e9ac27b58939b370c5f8ad442aef633fa4ac90bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_c829a2036161db15bf7c0014e9ac27b58939b370c5f8ad442aef633fa4ac90bc->leave($__internal_c829a2036161db15bf7c0014e9ac27b58939b370c5f8ad442aef633fa4ac90bc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
