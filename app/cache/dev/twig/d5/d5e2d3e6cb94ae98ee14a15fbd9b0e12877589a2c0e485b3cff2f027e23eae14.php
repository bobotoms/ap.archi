<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_a0d5354a950d770ca666710c0b0cd5d81a4d437adf686b273982a1458cf6dfe8 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c9818d955245e352dfc764e41dc0d92bec92724b71ddb17438d72a63d931f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9818d955245e352dfc764e41dc0d92bec92724b71ddb17438d72a63d931f58->enter($__internal_2c9818d955245e352dfc764e41dc0d92bec92724b71ddb17438d72a63d931f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9818d955245e352dfc764e41dc0d92bec92724b71ddb17438d72a63d931f58->leave($__internal_2c9818d955245e352dfc764e41dc0d92bec92724b71ddb17438d72a63d931f58_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_683ad8664d3ff07e95eb8f2b97bf721bd816a31c8a0146bc1001c0e468aba9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683ad8664d3ff07e95eb8f2b97bf721bd816a31c8a0146bc1001c0e468aba9a9->enter($__internal_683ad8664d3ff07e95eb8f2b97bf721bd816a31c8a0146bc1001c0e468aba9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_683ad8664d3ff07e95eb8f2b97bf721bd816a31c8a0146bc1001c0e468aba9a9->leave($__internal_683ad8664d3ff07e95eb8f2b97bf721bd816a31c8a0146bc1001c0e468aba9a9_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_d7772ebe8b149f49612784a26ebb76ce31ea05cf16c0a202e118362c8a6fbdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7772ebe8b149f49612784a26ebb76ce31ea05cf16c0a202e118362c8a6fbdbe->enter($__internal_d7772ebe8b149f49612784a26ebb76ce31ea05cf16c0a202e118362c8a6fbdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_d7772ebe8b149f49612784a26ebb76ce31ea05cf16c0a202e118362c8a6fbdbe->leave($__internal_d7772ebe8b149f49612784a26ebb76ce31ea05cf16c0a202e118362c8a6fbdbe_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_37474f387e4ca76068ddfce922c2d6a560210fb92bfe9a5470b51c9cd5223dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37474f387e4ca76068ddfce922c2d6a560210fb92bfe9a5470b51c9cd5223dfc->enter($__internal_37474f387e4ca76068ddfce922c2d6a560210fb92bfe9a5470b51c9cd5223dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_37474f387e4ca76068ddfce922c2d6a560210fb92bfe9a5470b51c9cd5223dfc->leave($__internal_37474f387e4ca76068ddfce922c2d6a560210fb92bfe9a5470b51c9cd5223dfc_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
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
", "@SonataAdmin/CRUD/action.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\action.html.twig");
    }
}
