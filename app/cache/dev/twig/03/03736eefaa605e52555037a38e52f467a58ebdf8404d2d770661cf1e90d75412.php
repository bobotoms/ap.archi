<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_49ae937fab79408f66df02d174349a20f615c38bbb33670d4826136d0b100fb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e5752c8610aa1525d03bb580c7dae43780bdb0d56bb2add7b3cec2c46e44d182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5752c8610aa1525d03bb580c7dae43780bdb0d56bb2add7b3cec2c46e44d182->enter($__internal_e5752c8610aa1525d03bb580c7dae43780bdb0d56bb2add7b3cec2c46e44d182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5752c8610aa1525d03bb580c7dae43780bdb0d56bb2add7b3cec2c46e44d182->leave($__internal_e5752c8610aa1525d03bb580c7dae43780bdb0d56bb2add7b3cec2c46e44d182_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53f868734508834de5c3eee7e26942a52806a8492c0a96ef69773bcc99a16854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f868734508834de5c3eee7e26942a52806a8492c0a96ef69773bcc99a16854->enter($__internal_53f868734508834de5c3eee7e26942a52806a8492c0a96ef69773bcc99a16854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_53f868734508834de5c3eee7e26942a52806a8492c0a96ef69773bcc99a16854->leave($__internal_53f868734508834de5c3eee7e26942a52806a8492c0a96ef69773bcc99a16854_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
