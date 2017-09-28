<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_d441d403c070d229f794295966d9a8721966e1613f3e13745fa23c90d7f8d8d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_828a9ce472777284af7676c88380b09d1148063573129c860327ad9b38a1d222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828a9ce472777284af7676c88380b09d1148063573129c860327ad9b38a1d222->enter($__internal_828a9ce472777284af7676c88380b09d1148063573129c860327ad9b38a1d222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_828a9ce472777284af7676c88380b09d1148063573129c860327ad9b38a1d222->leave($__internal_828a9ce472777284af7676c88380b09d1148063573129c860327ad9b38a1d222_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_e69a5b49de3329af93e0f19da63f353a94d9afc653f8037684c43d1bc67fb702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69a5b49de3329af93e0f19da63f353a94d9afc653f8037684c43d1bc67fb702->enter($__internal_e69a5b49de3329af93e0f19da63f353a94d9afc653f8037684c43d1bc67fb702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_e69a5b49de3329af93e0f19da63f353a94d9afc653f8037684c43d1bc67fb702->leave($__internal_e69a5b49de3329af93e0f19da63f353a94d9afc653f8037684c43d1bc67fb702_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
