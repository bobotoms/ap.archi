<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_81406a6f558a038414440c924f07c70861fab04429050dbf9ddb5f80972a9a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f847d531486bb3a7d017c4916c449442ff59b46aa0b8eff528a4a4aa0481ea76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f847d531486bb3a7d017c4916c449442ff59b46aa0b8eff528a4a4aa0481ea76->enter($__internal_f847d531486bb3a7d017c4916c449442ff59b46aa0b8eff528a4a4aa0481ea76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f847d531486bb3a7d017c4916c449442ff59b46aa0b8eff528a4a4aa0481ea76->leave($__internal_f847d531486bb3a7d017c4916c449442ff59b46aa0b8eff528a4a4aa0481ea76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b83202b52f81463b18bc997ad1ae47cb4dfe6266681bdca9e03273c298d70764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83202b52f81463b18bc997ad1ae47cb4dfe6266681bdca9e03273c298d70764->enter($__internal_b83202b52f81463b18bc997ad1ae47cb4dfe6266681bdca9e03273c298d70764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b83202b52f81463b18bc997ad1ae47cb4dfe6266681bdca9e03273c298d70764->leave($__internal_b83202b52f81463b18bc997ad1ae47cb4dfe6266681bdca9e03273c298d70764_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/new.html.twig");
    }
}
