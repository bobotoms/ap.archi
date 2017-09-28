<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_b5e4191d5ef0cbd49af3494b279baf7265c5dfcd287f98be4aa95b48cc756ad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_05c9f002c6ce75920b0c81e347e3ee7f1d961decf22786e9ab9e42875e6f4cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c9f002c6ce75920b0c81e347e3ee7f1d961decf22786e9ab9e42875e6f4cdc->enter($__internal_05c9f002c6ce75920b0c81e347e3ee7f1d961decf22786e9ab9e42875e6f4cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c9f002c6ce75920b0c81e347e3ee7f1d961decf22786e9ab9e42875e6f4cdc->leave($__internal_05c9f002c6ce75920b0c81e347e3ee7f1d961decf22786e9ab9e42875e6f4cdc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fccff26ba8ac401adff7721084b39a442034b97694d0d0f11738752a4e018adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccff26ba8ac401adff7721084b39a442034b97694d0d0f11738752a4e018adf->enter($__internal_fccff26ba8ac401adff7721084b39a442034b97694d0d0f11738752a4e018adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_fccff26ba8ac401adff7721084b39a442034b97694d0d0f11738752a4e018adf->leave($__internal_fccff26ba8ac401adff7721084b39a442034b97694d0d0f11738752a4e018adf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/show_percent.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_percent.html.twig");
    }
}
