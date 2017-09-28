<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a12b5a8cc826ff19129b0a68e83d41bda2b554ca5e3c55ec1eaeeebdbecdb325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_d11e9f6e811ca3ccf773c52d7df21cce8b850a1e3a14d298a8880a52d87d69c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11e9f6e811ca3ccf773c52d7df21cce8b850a1e3a14d298a8880a52d87d69c2->enter($__internal_d11e9f6e811ca3ccf773c52d7df21cce8b850a1e3a14d298a8880a52d87d69c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d11e9f6e811ca3ccf773c52d7df21cce8b850a1e3a14d298a8880a52d87d69c2->leave($__internal_d11e9f6e811ca3ccf773c52d7df21cce8b850a1e3a14d298a8880a52d87d69c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f33f9bde68e8d3e0ce95533b85cc3567d5e90ebdf2be76cf1322cd192bf908e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f33f9bde68e8d3e0ce95533b85cc3567d5e90ebdf2be76cf1322cd192bf908e->enter($__internal_3f33f9bde68e8d3e0ce95533b85cc3567d5e90ebdf2be76cf1322cd192bf908e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3f33f9bde68e8d3e0ce95533b85cc3567d5e90ebdf2be76cf1322cd192bf908e->leave($__internal_3f33f9bde68e8d3e0ce95533b85cc3567d5e90ebdf2be76cf1322cd192bf908e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/show.html.twig");
    }
}
