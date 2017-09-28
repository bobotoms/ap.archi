<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_d1ec384a31eb3b532a75bf69bbf9209ba58e4ea0b8f1d334d1220dd77c9a4409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58e13bfb3606498716e070159e3f131d70e02a13e7e9dfceb7e5b96e42a40f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e13bfb3606498716e070159e3f131d70e02a13e7e9dfceb7e5b96e42a40f0d->enter($__internal_58e13bfb3606498716e070159e3f131d70e02a13e7e9dfceb7e5b96e42a40f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58e13bfb3606498716e070159e3f131d70e02a13e7e9dfceb7e5b96e42a40f0d->leave($__internal_58e13bfb3606498716e070159e3f131d70e02a13e7e9dfceb7e5b96e42a40f0d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d693f5f2ad1f3399d54c4b1d20b69f00266fcbebb24cc5858c29edde46c271b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d693f5f2ad1f3399d54c4b1d20b69f00266fcbebb24cc5858c29edde46c271b7->enter($__internal_d693f5f2ad1f3399d54c4b1d20b69f00266fcbebb24cc5858c29edde46c271b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_d693f5f2ad1f3399d54c4b1d20b69f00266fcbebb24cc5858c29edde46c271b7->leave($__internal_d693f5f2ad1f3399d54c4b1d20b69f00266fcbebb24cc5858c29edde46c271b7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
