<?php

/* SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5e1581ed01fac8eba8d5875d6cf4d565713d9b6b182a08e52a086af2065b6c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c12b5a1664222183ec1cc87d503b81b8667b579c33d2ff5b871ccfdc7408d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c12b5a1664222183ec1cc87d503b81b8667b579c33d2ff5b871ccfdc7408d2d->enter($__internal_6c12b5a1664222183ec1cc87d503b81b8667b579c33d2ff5b871ccfdc7408d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c12b5a1664222183ec1cc87d503b81b8667b579c33d2ff5b871ccfdc7408d2d->leave($__internal_6c12b5a1664222183ec1cc87d503b81b8667b579c33d2ff5b871ccfdc7408d2d_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0e93d4f7b76e680d5c1b5e16b07ad7e3c4ef2b25bf2bc05af57d55a668b0131c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e93d4f7b76e680d5c1b5e16b07ad7e3c4ef2b25bf2bc05af57d55a668b0131c->enter($__internal_0e93d4f7b76e680d5c1b5e16b07ad7e3c4ef2b25bf2bc05af57d55a668b0131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_0e93d4f7b76e680d5c1b5e16b07ad7e3c4ef2b25bf2bc05af57d55a668b0131c->leave($__internal_0e93d4f7b76e680d5c1b5e16b07ad7e3c4ef2b25bf2bc05af57d55a668b0131c_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        $__internal_01e6113941522b425b362d378c383ea144a88fb2864ff4f8fef71ac7236ee34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e6113941522b425b362d378c383ea144a88fb2864ff4f8fef71ac7236ee34b->enter($__internal_01e6113941522b425b362d378c383ea144a88fb2864ff4f8fef71ac7236ee34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_01e6113941522b425b362d378c383ea144a88fb2864ff4f8fef71ac7236ee34b->leave($__internal_01e6113941522b425b362d378c383ea144a88fb2864ff4f8fef71ac7236ee34b_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_872846a0656c4169788b8ed230e18b2cc8fc9af610d5c97a87570ea5c0945a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872846a0656c4169788b8ed230e18b2cc8fc9af610d5c97a87570ea5c0945a10->enter($__internal_872846a0656c4169788b8ed230e18b2cc8fc9af610d5c97a87570ea5c0945a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_872846a0656c4169788b8ed230e18b2cc8fc9af610d5c97a87570ea5c0945a10->leave($__internal_872846a0656c4169788b8ed230e18b2cc8fc9af610d5c97a87570ea5c0945a10_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_1c738e75235abe4eab6f64a15c9a279316393dffd06c0233e4d507cdf25c83d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c738e75235abe4eab6f64a15c9a279316393dffd06c0233e4d507cdf25c83d9->enter($__internal_1c738e75235abe4eab6f64a15c9a279316393dffd06c0233e4d507cdf25c83d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_1c738e75235abe4eab6f64a15c9a279316393dffd06c0233e4d507cdf25c83d9->leave($__internal_1c738e75235abe4eab6f64a15c9a279316393dffd06c0233e4d507cdf25c83d9_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_4472b4b605291862a9d04c530dac1bb2c1cd20af431577e4ce76296249488ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4472b4b605291862a9d04c530dac1bb2c1cd20af431577e4ce76296249488ac2->enter($__internal_4472b4b605291862a9d04c530dac1bb2c1cd20af431577e4ce76296249488ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 26
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 30
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 31
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 33
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
        </div>
    </div>

";
        
        $__internal_4472b4b605291862a9d04c530dac1bb2c1cd20af431577e4ce76296249488ac2->leave($__internal_4472b4b605291862a9d04c530dac1bb2c1cd20af431577e4ce76296249488ac2_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  110 => 36,  105 => 33,  99 => 31,  97 => 30,  93 => 29,  88 => 26,  82 => 25,  70 => 23,  59 => 20,  48 => 17,  37 => 14,  22 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('sonata_admin_dashboard') }}\">
                {% if 'single_text' == admin_pool.getOption('title_mode') or 'both' == admin_pool.getOption('title_mode') %}
                    <span>{{ admin_pool.title }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"login-box-body\">
            <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security/Resetting:passwordAlreadyRequested.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/Admin/Security/Resetting/passwordAlreadyRequested.html.twig");
    }
}
