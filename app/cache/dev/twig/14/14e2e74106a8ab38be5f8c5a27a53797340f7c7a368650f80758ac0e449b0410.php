<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_4ba8432be76d9338bfa7ea08c544963737e669a3b309b1b2c9778f365acf650f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_62f2024ddd4ab5ff4c6f6f845974a922e632e9df457ee18946ed53c4a67246de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f2024ddd4ab5ff4c6f6f845974a922e632e9df457ee18946ed53c4a67246de->enter($__internal_62f2024ddd4ab5ff4c6f6f845974a922e632e9df457ee18946ed53c4a67246de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62f2024ddd4ab5ff4c6f6f845974a922e632e9df457ee18946ed53c4a67246de->leave($__internal_62f2024ddd4ab5ff4c6f6f845974a922e632e9df457ee18946ed53c4a67246de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_213e80478eed5a34f61e981b535fa4ad3a05e5b8021ba376b3ce8c87d52d1df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213e80478eed5a34f61e981b535fa4ad3a05e5b8021ba376b3ce8c87d52d1df2->enter($__internal_213e80478eed5a34f61e981b535fa4ad3a05e5b8021ba376b3ce8c87d52d1df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_213e80478eed5a34f61e981b535fa4ad3a05e5b8021ba376b3ce8c87d52d1df2->leave($__internal_213e80478eed5a34f61e981b535fa4ad3a05e5b8021ba376b3ce8c87d52d1df2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
