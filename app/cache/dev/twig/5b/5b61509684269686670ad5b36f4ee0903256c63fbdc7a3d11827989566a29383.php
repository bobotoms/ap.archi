<?php

/* @SonataAdmin/CRUD/base_show_compare.html.twig */
class __TwigTemplate_03c39181d76a4142f50970487f96d75f4919a0311fd8bfb19c2d19d50ba71eaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0f798d92efcbf04a9636fc50cd347fc7cb7880d4af62e26e8e4bc0c92d504ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f798d92efcbf04a9636fc50cd347fc7cb7880d4af62e26e8e4bc0c92d504ca->enter($__internal_e0f798d92efcbf04a9636fc50cd347fc7cb7880d4af62e26e8e4bc0c92d504ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0f798d92efcbf04a9636fc50cd347fc7cb7880d4af62e26e8e4bc0c92d504ca->leave($__internal_e0f798d92efcbf04a9636fc50cd347fc7cb7880d4af62e26e8e4bc0c92d504ca_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_19c2a57bfb080e8bc47e0db5ac2eaacfce4271d4ea92d3c9d29b6b99860b1323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c2a57bfb080e8bc47e0db5ac2eaacfce4271d4ea92d3c9d29b6b99860b1323->enter($__internal_19c2a57bfb080e8bc47e0db5ac2eaacfce4271d4ea92d3c9d29b6b99860b1323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_19c2a57bfb080e8bc47e0db5ac2eaacfce4271d4ea92d3c9d29b6b99860b1323->leave($__internal_19c2a57bfb080e8bc47e0db5ac2eaacfce4271d4ea92d3c9d29b6b99860b1323_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "@SonataAdmin/CRUD/base_show_compare.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_show_compare.html.twig");
    }
}
