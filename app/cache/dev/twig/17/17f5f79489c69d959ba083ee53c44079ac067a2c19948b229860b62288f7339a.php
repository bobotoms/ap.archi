<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_b577603dfe591ab041ba251d2a6aa1be2b2140efc15dd542e2abb2df23ef0e9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_fe44eb239f69881801777022cef4eb78bef2e1d0d4f986a6a7d6d8740d97f6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe44eb239f69881801777022cef4eb78bef2e1d0d4f986a6a7d6d8740d97f6c5->enter($__internal_fe44eb239f69881801777022cef4eb78bef2e1d0d4f986a6a7d6d8740d97f6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe44eb239f69881801777022cef4eb78bef2e1d0d4f986a6a7d6d8740d97f6c5->leave($__internal_fe44eb239f69881801777022cef4eb78bef2e1d0d4f986a6a7d6d8740d97f6c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fcbacacd0d9529fae6ce60355ad526bf0009b6ffabfa8b00c1e5ce6acc0bb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcbacacd0d9529fae6ce60355ad526bf0009b6ffabfa8b00c1e5ce6acc0bb72->enter($__internal_9fcbacacd0d9529fae6ce60355ad526bf0009b6ffabfa8b00c1e5ce6acc0bb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_9fcbacacd0d9529fae6ce60355ad526bf0009b6ffabfa8b00c1e5ce6acc0bb72->leave($__internal_9fcbacacd0d9529fae6ce60355ad526bf0009b6ffabfa8b00c1e5ce6acc0bb72_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
