<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_c3f5a44ec55b9a6d35448e48b4ae13d6e50cfc4981a8bf54c20b454166877040 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40ca9be01431b510b2b334b31a3326f2ea5d4ed58db541ea85f41e100333610b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ca9be01431b510b2b334b31a3326f2ea5d4ed58db541ea85f41e100333610b->enter($__internal_40ca9be01431b510b2b334b31a3326f2ea5d4ed58db541ea85f41e100333610b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40ca9be01431b510b2b334b31a3326f2ea5d4ed58db541ea85f41e100333610b->leave($__internal_40ca9be01431b510b2b334b31a3326f2ea5d4ed58db541ea85f41e100333610b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5ca8a485d0f1307b1319bd209852305b632d225d6baf7b310f7972baffbe6c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca8a485d0f1307b1319bd209852305b632d225d6baf7b310f7972baffbe6c89->enter($__internal_5ca8a485d0f1307b1319bd209852305b632d225d6baf7b310f7972baffbe6c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_5ca8a485d0f1307b1319bd209852305b632d225d6baf7b310f7972baffbe6c89->leave($__internal_5ca8a485d0f1307b1319bd209852305b632d225d6baf7b310f7972baffbe6c89_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/show_currency.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_currency.html.twig");
    }
}
