<?php

/* @SonataUser/Admin/Security/Resetting/checkEmail.html.twig */
class __TwigTemplate_5b8483d8f7e96bc9a152ac118693e4ed5fd2388415bbd767f8f45f479483d565 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a37b2d31fe09ee61bdd81ebf45d0a5fcc928dbbee06f2ed6b9ba103ed140927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a37b2d31fe09ee61bdd81ebf45d0a5fcc928dbbee06f2ed6b9ba103ed140927->enter($__internal_3a37b2d31fe09ee61bdd81ebf45d0a5fcc928dbbee06f2ed6b9ba103ed140927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a37b2d31fe09ee61bdd81ebf45d0a5fcc928dbbee06f2ed6b9ba103ed140927->leave($__internal_3a37b2d31fe09ee61bdd81ebf45d0a5fcc928dbbee06f2ed6b9ba103ed140927_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_2b7f1b58f12a9e280fa4ae5a32daa0017d2bc58ed8cc857c258eb6ca9b485816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7f1b58f12a9e280fa4ae5a32daa0017d2bc58ed8cc857c258eb6ca9b485816->enter($__internal_2b7f1b58f12a9e280fa4ae5a32daa0017d2bc58ed8cc857c258eb6ca9b485816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_2b7f1b58f12a9e280fa4ae5a32daa0017d2bc58ed8cc857c258eb6ca9b485816->leave($__internal_2b7f1b58f12a9e280fa4ae5a32daa0017d2bc58ed8cc857c258eb6ca9b485816_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        $__internal_a893a262062b4dee38de7080b58603b3dd08b7217f01956772463fc9ec51c548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a893a262062b4dee38de7080b58603b3dd08b7217f01956772463fc9ec51c548->enter($__internal_a893a262062b4dee38de7080b58603b3dd08b7217f01956772463fc9ec51c548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_a893a262062b4dee38de7080b58603b3dd08b7217f01956772463fc9ec51c548->leave($__internal_a893a262062b4dee38de7080b58603b3dd08b7217f01956772463fc9ec51c548_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_a0d1bdb54d8d46c9a3986ffe48e834c697ec53f2d6a8999527460bbd1f85e9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d1bdb54d8d46c9a3986ffe48e834c697ec53f2d6a8999527460bbd1f85e9b9->enter($__internal_a0d1bdb54d8d46c9a3986ffe48e834c697ec53f2d6a8999527460bbd1f85e9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_a0d1bdb54d8d46c9a3986ffe48e834c697ec53f2d6a8999527460bbd1f85e9b9->leave($__internal_a0d1bdb54d8d46c9a3986ffe48e834c697ec53f2d6a8999527460bbd1f85e9b9_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_0f573e023a9936653d39029d992a32e9f38c29aa22635da34d04811d2e2631e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f573e023a9936653d39029d992a32e9f38c29aa22635da34d04811d2e2631e1->enter($__internal_0f573e023a9936653d39029d992a32e9f38c29aa22635da34d04811d2e2631e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_0f573e023a9936653d39029d992a32e9f38c29aa22635da34d04811d2e2631e1->leave($__internal_0f573e023a9936653d39029d992a32e9f38c29aa22635da34d04811d2e2631e1_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a0484a9f7b08bf9cde7c6023a68fb238d3ff0d1541c5819d177226df26a33b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0484a9f7b08bf9cde7c6023a68fb238d3ff0d1541c5819d177226df26a33b67->enter($__internal_a0484a9f7b08bf9cde7c6023a68fb238d3ff0d1541c5819d177226df26a33b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_a0484a9f7b08bf9cde7c6023a68fb238d3ff0d1541c5819d177226df26a33b67->leave($__internal_a0484a9f7b08bf9cde7c6023a68fb238d3ff0d1541c5819d177226df26a33b67_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig";
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
", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Admin\\Security\\Resetting\\checkEmail.html.twig");
    }
}
