<?php

/* @SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_f082c32733a8c50e246a648d3b3f33f1952730ce02ab5dd04494f1cff09f62fc extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b25c3663f38b0a8a034414090033d82b29d23e864943ef3b01598bd00330e3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25c3663f38b0a8a034414090033d82b29d23e864943ef3b01598bd00330e3ac->enter($__internal_b25c3663f38b0a8a034414090033d82b29d23e864943ef3b01598bd00330e3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b25c3663f38b0a8a034414090033d82b29d23e864943ef3b01598bd00330e3ac->leave($__internal_b25c3663f38b0a8a034414090033d82b29d23e864943ef3b01598bd00330e3ac_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b87ccf35ec1335ac64f3cab3ec470f9badff6b4283206cc622a626758c36e233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87ccf35ec1335ac64f3cab3ec470f9badff6b4283206cc622a626758c36e233->enter($__internal_b87ccf35ec1335ac64f3cab3ec470f9badff6b4283206cc622a626758c36e233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_b87ccf35ec1335ac64f3cab3ec470f9badff6b4283206cc622a626758c36e233->leave($__internal_b87ccf35ec1335ac64f3cab3ec470f9badff6b4283206cc622a626758c36e233_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        $__internal_27db30c1a7d2bef0b596d2b441970442148cce5d5be0051f3ae30336c0ca1923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27db30c1a7d2bef0b596d2b441970442148cce5d5be0051f3ae30336c0ca1923->enter($__internal_27db30c1a7d2bef0b596d2b441970442148cce5d5be0051f3ae30336c0ca1923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_27db30c1a7d2bef0b596d2b441970442148cce5d5be0051f3ae30336c0ca1923->leave($__internal_27db30c1a7d2bef0b596d2b441970442148cce5d5be0051f3ae30336c0ca1923_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_f146802d0be9219ba10ac74d2bf9299ba5b98f086e0c28751f58c8dfedd587a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f146802d0be9219ba10ac74d2bf9299ba5b98f086e0c28751f58c8dfedd587a2->enter($__internal_f146802d0be9219ba10ac74d2bf9299ba5b98f086e0c28751f58c8dfedd587a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_f146802d0be9219ba10ac74d2bf9299ba5b98f086e0c28751f58c8dfedd587a2->leave($__internal_f146802d0be9219ba10ac74d2bf9299ba5b98f086e0c28751f58c8dfedd587a2_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_5f115c0c71d20ec61da98ca96096fa38d3c761ec00405c8214c26bf693c17247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f115c0c71d20ec61da98ca96096fa38d3c761ec00405c8214c26bf693c17247->enter($__internal_5f115c0c71d20ec61da98ca96096fa38d3c761ec00405c8214c26bf693c17247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_5f115c0c71d20ec61da98ca96096fa38d3c761ec00405c8214c26bf693c17247->leave($__internal_5f115c0c71d20ec61da98ca96096fa38d3c761ec00405c8214c26bf693c17247_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_b2fd84e4b711b6e0b7d1ffaa925a52d59b2e5172045a7febd3952c9962ed5825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fd84e4b711b6e0b7d1ffaa925a52d59b2e5172045a7febd3952c9962ed5825->enter($__internal_b2fd84e4b711b6e0b7d1ffaa925a52d59b2e5172045a7febd3952c9962ed5825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_b2fd84e4b711b6e0b7d1ffaa925a52d59b2e5172045a7febd3952c9962ed5825->leave($__internal_b2fd84e4b711b6e0b7d1ffaa925a52d59b2e5172045a7febd3952c9962ed5825_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig";
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
", "@SonataUser/Admin/Security/Resetting/passwordAlreadyRequested.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Admin\\Security\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
