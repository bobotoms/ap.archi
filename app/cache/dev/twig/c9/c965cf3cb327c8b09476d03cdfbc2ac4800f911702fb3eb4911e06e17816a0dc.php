<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_040d92ed9474d806e1ce6300e902eb1fac6a56a33d64b4ac0f8a3286dc817e6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_14d485645df3a6e2ef5642fc84713f66cc5848e7494315792d14f1a5c454414e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d485645df3a6e2ef5642fc84713f66cc5848e7494315792d14f1a5c454414e->enter($__internal_14d485645df3a6e2ef5642fc84713f66cc5848e7494315792d14f1a5c454414e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14d485645df3a6e2ef5642fc84713f66cc5848e7494315792d14f1a5c454414e->leave($__internal_14d485645df3a6e2ef5642fc84713f66cc5848e7494315792d14f1a5c454414e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b313063716b1d39f5186a60fd71e12cb490744fc8bff153b713aeca767a52b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b313063716b1d39f5186a60fd71e12cb490744fc8bff153b713aeca767a52b47->enter($__internal_b313063716b1d39f5186a60fd71e12cb490744fc8bff153b713aeca767a52b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b313063716b1d39f5186a60fd71e12cb490744fc8bff153b713aeca767a52b47->leave($__internal_b313063716b1d39f5186a60fd71e12cb490744fc8bff153b713aeca767a52b47_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
