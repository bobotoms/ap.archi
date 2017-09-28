<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_96ff142282a435421db741718b8e228e16a262c33ee260b5fd88ad8a370f6096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_701573408b301d3bc2d127ff30c2b72b727ec92d7cdd6de2f52a0020ed7c4a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701573408b301d3bc2d127ff30c2b72b727ec92d7cdd6de2f52a0020ed7c4a89->enter($__internal_701573408b301d3bc2d127ff30c2b72b727ec92d7cdd6de2f52a0020ed7c4a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_701573408b301d3bc2d127ff30c2b72b727ec92d7cdd6de2f52a0020ed7c4a89->leave($__internal_701573408b301d3bc2d127ff30c2b72b727ec92d7cdd6de2f52a0020ed7c4a89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad24d71cda5340e6cf7f96364843e90595033bd8c0919dbd68a475fd417824f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad24d71cda5340e6cf7f96364843e90595033bd8c0919dbd68a475fd417824f3->enter($__internal_ad24d71cda5340e6cf7f96364843e90595033bd8c0919dbd68a475fd417824f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ad24d71cda5340e6cf7f96364843e90595033bd8c0919dbd68a475fd417824f3->leave($__internal_ad24d71cda5340e6cf7f96364843e90595033bd8c0919dbd68a475fd417824f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/checkEmail.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
