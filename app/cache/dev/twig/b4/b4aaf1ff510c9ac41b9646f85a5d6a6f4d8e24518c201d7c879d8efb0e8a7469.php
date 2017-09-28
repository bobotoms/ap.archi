<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_17ddaec4f007612d269d29bd4e1c026a98a1c1b5adc6671af326da3d9cb23c77 extends Twig_Template
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
        $__internal_d9eb46ba730f50b46f3adb0bc167a437eebbbc3fd4286b8281e0af772af9cb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9eb46ba730f50b46f3adb0bc167a437eebbbc3fd4286b8281e0af772af9cb4c->enter($__internal_d9eb46ba730f50b46f3adb0bc167a437eebbbc3fd4286b8281e0af772af9cb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9eb46ba730f50b46f3adb0bc167a437eebbbc3fd4286b8281e0af772af9cb4c->leave($__internal_d9eb46ba730f50b46f3adb0bc167a437eebbbc3fd4286b8281e0af772af9cb4c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c5b8487c84f9f816c067fed808e3a1414154b7e3b2ad504b8701a7e2641e11c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b8487c84f9f816c067fed808e3a1414154b7e3b2ad504b8701a7e2641e11c6->enter($__internal_c5b8487c84f9f816c067fed808e3a1414154b7e3b2ad504b8701a7e2641e11c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_c5b8487c84f9f816c067fed808e3a1414154b7e3b2ad504b8701a7e2641e11c6->leave($__internal_c5b8487c84f9f816c067fed808e3a1414154b7e3b2ad504b8701a7e2641e11c6_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_00ec79e74b9f0b797dc47a73b70c13dcc0fac1ae17057b44d4dc45eda4472c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ec79e74b9f0b797dc47a73b70c13dcc0fac1ae17057b44d4dc45eda4472c29->enter($__internal_00ec79e74b9f0b797dc47a73b70c13dcc0fac1ae17057b44d4dc45eda4472c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_00ec79e74b9f0b797dc47a73b70c13dcc0fac1ae17057b44d4dc45eda4472c29->leave($__internal_00ec79e74b9f0b797dc47a73b70c13dcc0fac1ae17057b44d4dc45eda4472c29_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_fbef7c22b0de4f8e8fa8bd4d414e75fd5dcc8aa1a0bae936ee952e43cf8d20f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbef7c22b0de4f8e8fa8bd4d414e75fd5dcc8aa1a0bae936ee952e43cf8d20f3->enter($__internal_fbef7c22b0de4f8e8fa8bd4d414e75fd5dcc8aa1a0bae936ee952e43cf8d20f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_fbef7c22b0de4f8e8fa8bd4d414e75fd5dcc8aa1a0bae936ee952e43cf8d20f3->leave($__internal_fbef7c22b0de4f8e8fa8bd4d414e75fd5dcc8aa1a0bae936ee952e43cf8d20f3_prof);

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
", "SonataAdminBundle:CRUD:action.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\action.html.twig");
    }
}
