<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b7b1dae75d19b78b27dcdfb98cdd427520ccf15bf2c2cfa617825f15f7c07233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e5e37aa2ef4b1f41d0e2c7a9ae535f7b6a47dd7db106940e4809a5527ccc5fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e37aa2ef4b1f41d0e2c7a9ae535f7b6a47dd7db106940e4809a5527ccc5fc9->enter($__internal_e5e37aa2ef4b1f41d0e2c7a9ae535f7b6a47dd7db106940e4809a5527ccc5fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e37aa2ef4b1f41d0e2c7a9ae535f7b6a47dd7db106940e4809a5527ccc5fc9->leave($__internal_e5e37aa2ef4b1f41d0e2c7a9ae535f7b6a47dd7db106940e4809a5527ccc5fc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7d9e54616340baffaf428536df0daa0689fbe3aacccf29b075bec1f8c4df92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d9e54616340baffaf428536df0daa0689fbe3aacccf29b075bec1f8c4df92a->enter($__internal_e7d9e54616340baffaf428536df0daa0689fbe3aacccf29b075bec1f8c4df92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e7d9e54616340baffaf428536df0daa0689fbe3aacccf29b075bec1f8c4df92a->leave($__internal_e7d9e54616340baffaf428536df0daa0689fbe3aacccf29b075bec1f8c4df92a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/list.html.twig");
    }
}
