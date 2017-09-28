<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_a67c52ebd0ad6085ef36a637b9c34bac8b8ea1dfd9456432773a28b67d754e99 extends Twig_Template
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
        $__internal_69b70c8b2e85b1c8cf284414f33a579edf1e2b0acc1441ee70dc62973d2850e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b70c8b2e85b1c8cf284414f33a579edf1e2b0acc1441ee70dc62973d2850e6->enter($__internal_69b70c8b2e85b1c8cf284414f33a579edf1e2b0acc1441ee70dc62973d2850e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b70c8b2e85b1c8cf284414f33a579edf1e2b0acc1441ee70dc62973d2850e6->leave($__internal_69b70c8b2e85b1c8cf284414f33a579edf1e2b0acc1441ee70dc62973d2850e6_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7b45dbfd65d796f3af4432387c1c6c604879bc566a9ed84330c9064f9ce54a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b45dbfd65d796f3af4432387c1c6c604879bc566a9ed84330c9064f9ce54a5->enter($__internal_f7b45dbfd65d796f3af4432387c1c6c604879bc566a9ed84330c9064f9ce54a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_f7b45dbfd65d796f3af4432387c1c6c604879bc566a9ed84330c9064f9ce54a5->leave($__internal_f7b45dbfd65d796f3af4432387c1c6c604879bc566a9ed84330c9064f9ce54a5_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_2bc48d28d8631b0098a2a80df6834deb1882dd1b73edf9cf20298497030805c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc48d28d8631b0098a2a80df6834deb1882dd1b73edf9cf20298497030805c6->enter($__internal_2bc48d28d8631b0098a2a80df6834deb1882dd1b73edf9cf20298497030805c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2bc48d28d8631b0098a2a80df6834deb1882dd1b73edf9cf20298497030805c6->leave($__internal_2bc48d28d8631b0098a2a80df6834deb1882dd1b73edf9cf20298497030805c6_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d5a22316ca94d4c3000e69538289f98d3f810d2e5c03edd9cece31d37f10aa61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a22316ca94d4c3000e69538289f98d3f810d2e5c03edd9cece31d37f10aa61->enter($__internal_d5a22316ca94d4c3000e69538289f98d3f810d2e5c03edd9cece31d37f10aa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_d5a22316ca94d4c3000e69538289f98d3f810d2e5c03edd9cece31d37f10aa61->leave($__internal_d5a22316ca94d4c3000e69538289f98d3f810d2e5c03edd9cece31d37f10aa61_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_7a64eff0f53ecadbb31664674589259281af283d9a127cf2f9be848124872328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a64eff0f53ecadbb31664674589259281af283d9a127cf2f9be848124872328->enter($__internal_7a64eff0f53ecadbb31664674589259281af283d9a127cf2f9be848124872328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_7a64eff0f53ecadbb31664674589259281af283d9a127cf2f9be848124872328->leave($__internal_7a64eff0f53ecadbb31664674589259281af283d9a127cf2f9be848124872328_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_670cb1c946c0ea851693786bd029f78a203e2a5a22af5b7cb4e245acb208c4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670cb1c946c0ea851693786bd029f78a203e2a5a22af5b7cb4e245acb208c4b5->enter($__internal_670cb1c946c0ea851693786bd029f78a203e2a5a22af5b7cb4e245acb208c4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_670cb1c946c0ea851693786bd029f78a203e2a5a22af5b7cb4e245acb208c4b5->leave($__internal_670cb1c946c0ea851693786bd029f78a203e2a5a22af5b7cb4e245acb208c4b5_prof);

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
", "SonataAdminBundle:CRUD:base_edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_edit.html.twig");
    }
}
