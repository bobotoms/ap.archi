<?php

/* SonataPageBundle:PageAdmin:field_hybrid.html.twig */
class __TwigTemplate_6a361e102074e5313b03c2e9744535c1066b64dc1bd222aca457fa6e3d2fa58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataPageBundle:PageAdmin:field_hybrid.html.twig", 11);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0269955d3ea0af1493cd2e50323a66a857e64766bce63924a656bf72ac7bb6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0269955d3ea0af1493cd2e50323a66a857e64766bce63924a656bf72ac7bb6db->enter($__internal_0269955d3ea0af1493cd2e50323a66a857e64766bce63924a656bf72ac7bb6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:PageAdmin:field_hybrid.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0269955d3ea0af1493cd2e50323a66a857e64766bce63924a656bf72ac7bb6db->leave($__internal_0269955d3ea0af1493cd2e50323a66a857e64766bce63924a656bf72ac7bb6db_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_299b700c7841bf7ea25f0c292bae88e54a7d602ea7c6079b0f8aca3d09abedac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299b700c7841bf7ea25f0c292bae88e54a7d602ea7c6079b0f8aca3d09abedac->enter($__internal_299b700c7841bf7ea25f0c292bae88e54a7d602ea7c6079b0f8aca3d09abedac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "isHybrid", array())) {
            // line 16
            echo "        <i class=\"fa fa-gears\"></i>
    ";
        } else {
            // line 18
            echo "        <i class=\"fa fa-code\"></i>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_299b700c7841bf7ea25f0c292bae88e54a7d602ea7c6079b0f8aca3d09abedac->leave($__internal_299b700c7841bf7ea25f0c292bae88e54a7d602ea7c6079b0f8aca3d09abedac_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:field_hybrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  45 => 16,  42 => 15,  40 => 14,  34 => 13,  11 => 11,);
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
{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
{% spaceless %}
    {% if object.isHybrid %}
        <i class=\"fa fa-gears\"></i>
    {% else %}
        <i class=\"fa fa-code\"></i>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "SonataPageBundle:PageAdmin:field_hybrid.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/PageAdmin/field_hybrid.html.twig");
    }
}
