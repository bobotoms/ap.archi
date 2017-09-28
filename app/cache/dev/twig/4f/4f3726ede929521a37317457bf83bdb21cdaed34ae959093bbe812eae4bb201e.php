<?php

/* SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig */
class __TwigTemplate_2303a5ee39cf9d17b26362dde4be07fa157257c62d972f650b5da58b93956eba extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17f7ce5aa3d05ab369dfd7cd99e129aad28cfe5413948d03e9d85671d159a3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f7ce5aa3d05ab369dfd7cd99e129aad28cfe5413948d03e9d85671d159a3ee->enter($__internal_17f7ce5aa3d05ab369dfd7cd99e129aad28cfe5413948d03e9d85671d159a3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17f7ce5aa3d05ab369dfd7cd99e129aad28cfe5413948d03e9d85671d159a3ee->leave($__internal_17f7ce5aa3d05ab369dfd7cd99e129aad28cfe5413948d03e9d85671d159a3ee_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c3e221ec84f5577a27c802d064cb07fc91a1df92ba68d449d343cc61a4148322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e221ec84f5577a27c802d064cb07fc91a1df92ba68d449d343cc61a4148322->enter($__internal_c3e221ec84f5577a27c802d064cb07fc91a1df92ba68d449d343cc61a4148322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c3e221ec84f5577a27c802d064cb07fc91a1df92ba68d449d343cc61a4148322->leave($__internal_c3e221ec84f5577a27c802d064cb07fc91a1df92ba68d449d343cc61a4148322_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        $__internal_c5bec5c060f2390d6db704a6fd813a32eeea5c92766aada741647acb56bfdfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bec5c060f2390d6db704a6fd813a32eeea5c92766aada741647acb56bfdfb6->enter($__internal_c5bec5c060f2390d6db704a6fd813a32eeea5c92766aada741647acb56bfdfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_c5bec5c060f2390d6db704a6fd813a32eeea5c92766aada741647acb56bfdfb6->leave($__internal_c5bec5c060f2390d6db704a6fd813a32eeea5c92766aada741647acb56bfdfb6_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_1159a8b453d7a330e602237ffe805f6170df70ffd571d5fd01696add2cf185a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1159a8b453d7a330e602237ffe805f6170df70ffd571d5fd01696add2cf185a4->enter($__internal_1159a8b453d7a330e602237ffe805f6170df70ffd571d5fd01696add2cf185a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_1159a8b453d7a330e602237ffe805f6170df70ffd571d5fd01696add2cf185a4->leave($__internal_1159a8b453d7a330e602237ffe805f6170df70ffd571d5fd01696add2cf185a4_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_a6ffda9c1620e1173766fbaa8f61552c34008ac12d9e60acf5f2dbaef2f20d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ffda9c1620e1173766fbaa8f61552c34008ac12d9e60acf5f2dbaef2f20d83->enter($__internal_a6ffda9c1620e1173766fbaa8f61552c34008ac12d9e60acf5f2dbaef2f20d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_a6ffda9c1620e1173766fbaa8f61552c34008ac12d9e60acf5f2dbaef2f20d83->leave($__internal_a6ffda9c1620e1173766fbaa8f61552c34008ac12d9e60acf5f2dbaef2f20d83_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_64e4410188fe7cac1c4c8833ecdb187a5fe1d266a3976756c815cc79bea31da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e4410188fe7cac1c4c8833ecdb187a5fe1d266a3976756c815cc79bea31da2->enter($__internal_64e4410188fe7cac1c4c8833ecdb187a5fe1d266a3976756c815cc79bea31da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
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
        
        $__internal_64e4410188fe7cac1c4c8833ecdb187a5fe1d266a3976756c815cc79bea31da2->leave($__internal_64e4410188fe7cac1c4c8833ecdb187a5fe1d266a3976756c815cc79bea31da2_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig";
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
            <p>{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/Admin/Security/Resetting/checkEmail.html.twig");
    }
}
