<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_b623a361b6989aab7b5657fb46b78026e07f00e5db1816daf0746dce3bddf2d0 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb2655d2425f7a1190cea44bd5772beefe9b787aadf19ec168206a4b09a2b977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2655d2425f7a1190cea44bd5772beefe9b787aadf19ec168206a4b09a2b977->enter($__internal_cb2655d2425f7a1190cea44bd5772beefe9b787aadf19ec168206a4b09a2b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb2655d2425f7a1190cea44bd5772beefe9b787aadf19ec168206a4b09a2b977->leave($__internal_cb2655d2425f7a1190cea44bd5772beefe9b787aadf19ec168206a4b09a2b977_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e2d48e90795a02de84b1005fbcec47f3074c53eb8cf61f3bbc49d8e2a251f009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d48e90795a02de84b1005fbcec47f3074c53eb8cf61f3bbc49d8e2a251f009->enter($__internal_e2d48e90795a02de84b1005fbcec47f3074c53eb8cf61f3bbc49d8e2a251f009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_e2d48e90795a02de84b1005fbcec47f3074c53eb8cf61f3bbc49d8e2a251f009->leave($__internal_e2d48e90795a02de84b1005fbcec47f3074c53eb8cf61f3bbc49d8e2a251f009_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/list_currency.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_currency.html.twig");
    }
}
