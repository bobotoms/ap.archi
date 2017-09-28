<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_ef1dd4a03329b9c5983de3f297406719e1756a25d88d7fd83aeacfc9c782a761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 33
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0834d74a1de0221d9e2d38ef2030a654a96f906472dd4422b949f5f1004327f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0834d74a1de0221d9e2d38ef2030a654a96f906472dd4422b949f5f1004327f8->enter($__internal_0834d74a1de0221d9e2d38ef2030a654a96f906472dd4422b949f5f1004327f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0834d74a1de0221d9e2d38ef2030a654a96f906472dd4422b949f5f1004327f8->leave($__internal_0834d74a1de0221d9e2d38ef2030a654a96f906472dd4422b949f5f1004327f8_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_58a11e45491a4579069c4caf9e5f04687c23e7d86f5b360f04a18ae74f1a95da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a11e45491a4579069c4caf9e5f04687c23e7d86f5b360f04a18ae74f1a95da->enter($__internal_58a11e45491a4579069c4caf9e5f04687c23e7d86f5b360f04a18ae74f1a95da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_58a11e45491a4579069c4caf9e5f04687c23e7d86f5b360f04a18ae74f1a95da->leave($__internal_58a11e45491a4579069c4caf9e5f04687c23e7d86f5b360f04a18ae74f1a95da_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_7a64d5562f6bf4e536320a0667074ae3952d63e1da92c2ab9e7e203113ed3db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a64d5562f6bf4e536320a0667074ae3952d63e1da92c2ab9e7e203113ed3db1->enter($__internal_7a64d5562f6bf4e536320a0667074ae3952d63e1da92c2ab9e7e203113ed3db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7a64d5562f6bf4e536320a0667074ae3952d63e1da92c2ab9e7e203113ed3db1->leave($__internal_7a64d5562f6bf4e536320a0667074ae3952d63e1da92c2ab9e7e203113ed3db1_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bcb4bc857549e9ca8b24ba73f8f7ee05249ffc34311845aa5a66e04f53d67057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb4bc857549e9ca8b24ba73f8f7ee05249ffc34311845aa5a66e04f53d67057->enter($__internal_bcb4bc857549e9ca8b24ba73f8f7ee05249ffc34311845aa5a66e04f53d67057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_bcb4bc857549e9ca8b24ba73f8f7ee05249ffc34311845aa5a66e04f53d67057->leave($__internal_bcb4bc857549e9ca8b24ba73f8f7ee05249ffc34311845aa5a66e04f53d67057_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e0b9e4543e8ec6ab5671d8f6d79fef88429962ad2c7d48876bc3a23ad5a108ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b9e4543e8ec6ab5671d8f6d79fef88429962ad2c7d48876bc3a23ad5a108ec->enter($__internal_e0b9e4543e8ec6ab5671d8f6d79fef88429962ad2c7d48876bc3a23ad5a108ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_e0b9e4543e8ec6ab5671d8f6d79fef88429962ad2c7d48876bc3a23ad5a108ec->leave($__internal_e0b9e4543e8ec6ab5671d8f6d79fef88429962ad2c7d48876bc3a23ad5a108ec_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_0e18187e498d7532cd44d98e1fd95dd8df55f1b8157ed6f90fe0cbd3276acb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e18187e498d7532cd44d98e1fd95dd8df55f1b8157ed6f90fe0cbd3276acb79->enter($__internal_0e18187e498d7532cd44d98e1fd95dd8df55f1b8157ed6f90fe0cbd3276acb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_0e18187e498d7532cd44d98e1fd95dd8df55f1b8157ed6f90fe0cbd3276acb79->leave($__internal_0e18187e498d7532cd44d98e1fd95dd8df55f1b8157ed6f90fe0cbd3276acb79_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  124 => 35,  112 => 31,  105 => 28,  99 => 27,  89 => 24,  83 => 23,  72 => 19,  66 => 17,  63 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 33,);
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

{% block title %}
    {# NEXT_MAJOR: remove default filter #}
    {% if objectId|default(admin.id(object)) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
