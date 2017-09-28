<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_b51f9e4fb3e1428ca1ac145dcdc7980d33651043c6ca41b2d9cae6917e8b43f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_267e91c9f8684f084c804285e3a532a9f71470d5c34a36626aac1edfbd8e85c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267e91c9f8684f084c804285e3a532a9f71470d5c34a36626aac1edfbd8e85c2->enter($__internal_267e91c9f8684f084c804285e3a532a9f71470d5c34a36626aac1edfbd8e85c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_267e91c9f8684f084c804285e3a532a9f71470d5c34a36626aac1edfbd8e85c2->leave($__internal_267e91c9f8684f084c804285e3a532a9f71470d5c34a36626aac1edfbd8e85c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e8fbc008f987f5c0b0e24ac13388eff4ce0962c87271d287aa1325b26d0c5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8fbc008f987f5c0b0e24ac13388eff4ce0962c87271d287aa1325b26d0c5a1->enter($__internal_6e8fbc008f987f5c0b0e24ac13388eff4ce0962c87271d287aa1325b26d0c5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_6e8fbc008f987f5c0b0e24ac13388eff4ce0962c87271d287aa1325b26d0c5a1->leave($__internal_6e8fbc008f987f5c0b0e24ac13388eff4ce0962c87271d287aa1325b26d0c5a1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
