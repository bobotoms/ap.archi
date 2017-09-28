<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_f5cbc756274139f5c954e24497c0e6e7389e2bfb556e06ad4fe8f1dc3f8a4572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
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
        $__internal_82169a6961138513fc85427248e74a46b5a2381545d45e48eb54d7f66942a64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82169a6961138513fc85427248e74a46b5a2381545d45e48eb54d7f66942a64c->enter($__internal_82169a6961138513fc85427248e74a46b5a2381545d45e48eb54d7f66942a64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82169a6961138513fc85427248e74a46b5a2381545d45e48eb54d7f66942a64c->leave($__internal_82169a6961138513fc85427248e74a46b5a2381545d45e48eb54d7f66942a64c_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_d6cdc19634f3d3d8c40e2a0a0fc5869ba395e48ff5f3baf6fcf91007526140c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cdc19634f3d3d8c40e2a0a0fc5869ba395e48ff5f3baf6fcf91007526140c1->enter($__internal_d6cdc19634f3d3d8c40e2a0a0fc5869ba395e48ff5f3baf6fcf91007526140c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_d6cdc19634f3d3d8c40e2a0a0fc5869ba395e48ff5f3baf6fcf91007526140c1->leave($__internal_d6cdc19634f3d3d8c40e2a0a0fc5869ba395e48ff5f3baf6fcf91007526140c1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
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
", "@SonataAdmin/CRUD/show_email.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_email.html.twig");
    }
}
