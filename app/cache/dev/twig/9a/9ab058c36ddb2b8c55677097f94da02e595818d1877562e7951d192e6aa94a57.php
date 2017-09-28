<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_84700ec4971e9a7ea867174e26003ff4abff7bcf8a1331f285f4afde451cb161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 33);
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72d30fdf50eb746f1ad1267f9e25f8f74e44bc2693a77e8ed4bcbc2cdb346a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d30fdf50eb746f1ad1267f9e25f8f74e44bc2693a77e8ed4bcbc2cdb346a04->enter($__internal_72d30fdf50eb746f1ad1267f9e25f8f74e44bc2693a77e8ed4bcbc2cdb346a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d30fdf50eb746f1ad1267f9e25f8f74e44bc2693a77e8ed4bcbc2cdb346a04->leave($__internal_72d30fdf50eb746f1ad1267f9e25f8f74e44bc2693a77e8ed4bcbc2cdb346a04_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_34a0a9f6af491c26c033f76fd1c6ea0ef8fe37c2a1d42ec26440dc0a92e7348f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a0a9f6af491c26c033f76fd1c6ea0ef8fe37c2a1d42ec26440dc0a92e7348f->enter($__internal_34a0a9f6af491c26c033f76fd1c6ea0ef8fe37c2a1d42ec26440dc0a92e7348f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_34a0a9f6af491c26c033f76fd1c6ea0ef8fe37c2a1d42ec26440dc0a92e7348f->leave($__internal_34a0a9f6af491c26c033f76fd1c6ea0ef8fe37c2a1d42ec26440dc0a92e7348f_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_47069c4acd2e4e05032ec968abe6969da2f7b481401269752d70f6bbc97afad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47069c4acd2e4e05032ec968abe6969da2f7b481401269752d70f6bbc97afad1->enter($__internal_47069c4acd2e4e05032ec968abe6969da2f7b481401269752d70f6bbc97afad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_47069c4acd2e4e05032ec968abe6969da2f7b481401269752d70f6bbc97afad1->leave($__internal_47069c4acd2e4e05032ec968abe6969da2f7b481401269752d70f6bbc97afad1_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5baef6dfc2d382bf3f2b9d05d83123ebf6a388b54144c0632942eac782876d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5baef6dfc2d382bf3f2b9d05d83123ebf6a388b54144c0632942eac782876d98->enter($__internal_5baef6dfc2d382bf3f2b9d05d83123ebf6a388b54144c0632942eac782876d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 28)->display($context);
        
        $__internal_5baef6dfc2d382bf3f2b9d05d83123ebf6a388b54144c0632942eac782876d98->leave($__internal_5baef6dfc2d382bf3f2b9d05d83123ebf6a388b54144c0632942eac782876d98_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_8b76619da1020a7cf4e2d384b2a2eec7e5d86aa5222e07ec26aec26f0453bcee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b76619da1020a7cf4e2d384b2a2eec7e5d86aa5222e07ec26aec26f0453bcee->enter($__internal_8b76619da1020a7cf4e2d384b2a2eec7e5d86aa5222e07ec26aec26f0453bcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_8b76619da1020a7cf4e2d384b2a2eec7e5d86aa5222e07ec26aec26f0453bcee->leave($__internal_8b76619da1020a7cf4e2d384b2a2eec7e5d86aa5222e07ec26aec26f0453bcee_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_16a382f74e45b18b624dcbd8b106f4ea417ca9eb3fa4aa508f45b33068abad79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a382f74e45b18b624dcbd8b106f4ea417ca9eb3fa4aa508f45b33068abad79->enter($__internal_16a382f74e45b18b624dcbd8b106f4ea417ca9eb3fa4aa508f45b33068abad79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_16a382f74e45b18b624dcbd8b106f4ea417ca9eb3fa4aa508f45b33068abad79->leave($__internal_16a382f74e45b18b624dcbd8b106f4ea417ca9eb3fa4aa508f45b33068abad79_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
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
", "@SonataAdmin/CRUD/base_edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_edit.html.twig");
    }
}
