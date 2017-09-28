<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_f83ad9f861288a3250887d43ca95bd5bc7182d030e6f04d38551190dd62b0297 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c60d9e02066a3b3dc81850604fd993c2118d69ba79194808a307cef2dc264108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60d9e02066a3b3dc81850604fd993c2118d69ba79194808a307cef2dc264108->enter($__internal_c60d9e02066a3b3dc81850604fd993c2118d69ba79194808a307cef2dc264108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c60d9e02066a3b3dc81850604fd993c2118d69ba79194808a307cef2dc264108->leave($__internal_c60d9e02066a3b3dc81850604fd993c2118d69ba79194808a307cef2dc264108_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7d4f0d39e297feed6e653d76c8847054ed56c585e52ff47b1f01132a1f7165d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4f0d39e297feed6e653d76c8847054ed56c585e52ff47b1f01132a1f7165d3->enter($__internal_7d4f0d39e297feed6e653d76c8847054ed56c585e52ff47b1f01132a1f7165d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_7d4f0d39e297feed6e653d76c8847054ed56c585e52ff47b1f01132a1f7165d3->leave($__internal_7d4f0d39e297feed6e653d76c8847054ed56c585e52ff47b1f01132a1f7165d3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
