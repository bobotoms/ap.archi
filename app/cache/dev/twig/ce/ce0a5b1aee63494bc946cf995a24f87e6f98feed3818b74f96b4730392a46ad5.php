<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_f506a39896db7adad192ea02572921b86bccf6b999cc3d94580cbbf1bb5679b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6133183fd2eb83d99b37cf3bd96dd2b5159972fc2382299e0f1364ea25676bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6133183fd2eb83d99b37cf3bd96dd2b5159972fc2382299e0f1364ea25676bb1->enter($__internal_6133183fd2eb83d99b37cf3bd96dd2b5159972fc2382299e0f1364ea25676bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6133183fd2eb83d99b37cf3bd96dd2b5159972fc2382299e0f1364ea25676bb1->leave($__internal_6133183fd2eb83d99b37cf3bd96dd2b5159972fc2382299e0f1364ea25676bb1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_755c3c7d66447992b01bde4f8edba6445e1997173f5f7404c27ef00e9f4e7bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755c3c7d66447992b01bde4f8edba6445e1997173f5f7404c27ef00e9f4e7bab->enter($__internal_755c3c7d66447992b01bde4f8edba6445e1997173f5f7404c27ef00e9f4e7bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_755c3c7d66447992b01bde4f8edba6445e1997173f5f7404c27ef00e9f4e7bab->leave($__internal_755c3c7d66447992b01bde4f8edba6445e1997173f5f7404c27ef00e9f4e7bab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
