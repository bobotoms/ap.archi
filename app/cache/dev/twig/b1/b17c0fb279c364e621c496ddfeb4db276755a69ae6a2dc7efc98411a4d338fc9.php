<?php

/* @SonataUser/Admin/Security/Resetting/request.html.twig */
class __TwigTemplate_c527378c71c9ab0e3087da82c5ababb2f99630852a2ba6536e9e8f8e2ba8b910 extends Twig_Template
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
            'sonata_user_reset_request_form' => array($this, 'block_sonata_user_reset_request_form'),
            'sonata_user_reset_request_error' => array($this, 'block_sonata_user_reset_request_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/request.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d732d1b6e52fea8b79fcaba8f97741d41cfd2d06ec406fee4226b474fa9b5ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d732d1b6e52fea8b79fcaba8f97741d41cfd2d06ec406fee4226b474fa9b5ac0->enter($__internal_d732d1b6e52fea8b79fcaba8f97741d41cfd2d06ec406fee4226b474fa9b5ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d732d1b6e52fea8b79fcaba8f97741d41cfd2d06ec406fee4226b474fa9b5ac0->leave($__internal_d732d1b6e52fea8b79fcaba8f97741d41cfd2d06ec406fee4226b474fa9b5ac0_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_315d9532c8ff43bdd29f0782bb05f4cbfc7cf3a73b07d4ffc7ed8116e31f91f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315d9532c8ff43bdd29f0782bb05f4cbfc7cf3a73b07d4ffc7ed8116e31f91f8->enter($__internal_315d9532c8ff43bdd29f0782bb05f4cbfc7cf3a73b07d4ffc7ed8116e31f91f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_315d9532c8ff43bdd29f0782bb05f4cbfc7cf3a73b07d4ffc7ed8116e31f91f8->leave($__internal_315d9532c8ff43bdd29f0782bb05f4cbfc7cf3a73b07d4ffc7ed8116e31f91f8_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        $__internal_34de74530fdd90f9d2c96702ca45648ca448318004a06c33d819d1d89ae5fb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34de74530fdd90f9d2c96702ca45648ca448318004a06c33d819d1d89ae5fb9d->enter($__internal_34de74530fdd90f9d2c96702ca45648ca448318004a06c33d819d1d89ae5fb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_34de74530fdd90f9d2c96702ca45648ca448318004a06c33d819d1d89ae5fb9d->leave($__internal_34de74530fdd90f9d2c96702ca45648ca448318004a06c33d819d1d89ae5fb9d_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_5211bde8c6afc8eef6d912712b8587ce00a82bb1b357129bf9f2d7f3de7cf21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5211bde8c6afc8eef6d912712b8587ce00a82bb1b357129bf9f2d7f3de7cf21a->enter($__internal_5211bde8c6afc8eef6d912712b8587ce00a82bb1b357129bf9f2d7f3de7cf21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_5211bde8c6afc8eef6d912712b8587ce00a82bb1b357129bf9f2d7f3de7cf21a->leave($__internal_5211bde8c6afc8eef6d912712b8587ce00a82bb1b357129bf9f2d7f3de7cf21a_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_43b109d2dbc50152cddcfb7b0e53e893fd0b319e75776c466181ffd371b36c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b109d2dbc50152cddcfb7b0e53e893fd0b319e75776c466181ffd371b36c6f->enter($__internal_43b109d2dbc50152cddcfb7b0e53e893fd0b319e75776c466181ffd371b36c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_43b109d2dbc50152cddcfb7b0e53e893fd0b319e75776c466181ffd371b36c6f->leave($__internal_43b109d2dbc50152cddcfb7b0e53e893fd0b319e75776c466181ffd371b36c6f_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_38de4b24c1413710a7a0fcb2c8e321b48f1018a32f89ac1daf1c57af5a72355d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38de4b24c1413710a7a0fcb2c8e321b48f1018a32f89ac1daf1c57af5a72355d->enter($__internal_38de4b24c1413710a7a0fcb2c8e321b48f1018a32f89ac1daf1c57af5a72355d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
            ";
        // line 36
        $this->displayBlock('sonata_user_reset_request_form', $context, $blocks);
        // line 58
        echo "        </div>
    </div>

";
        
        $__internal_38de4b24c1413710a7a0fcb2c8e321b48f1018a32f89ac1daf1c57af5a72355d->leave($__internal_38de4b24c1413710a7a0fcb2c8e321b48f1018a32f89ac1daf1c57af5a72355d_prof);

    }

    // line 36
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_9e8c0294a7fa2f30c6fc3930ebfeabc57bb11cccee79813bb4b197d503f3595e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8c0294a7fa2f30c6fc3930ebfeabc57bb11cccee79813bb4b197d503f3595e->enter($__internal_9e8c0294a7fa2f30c6fc3930ebfeabc57bb11cccee79813bb4b197d503f3595e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

        // line 37
        echo "                ";
        $this->displayBlock('sonata_user_reset_request_error', $context, $blocks);
        // line 42
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_resetting_send_email");
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_9e8c0294a7fa2f30c6fc3930ebfeabc57bb11cccee79813bb4b197d503f3595e->leave($__internal_9e8c0294a7fa2f30c6fc3930ebfeabc57bb11cccee79813bb4b197d503f3595e_prof);

    }

    // line 37
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_b822a65038c714cf738202e1c36728a951ec9062d7b659571c54dc83f2aa4a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b822a65038c714cf738202e1c36728a951ec9062d7b659571c54dc83f2aa4a57->enter($__internal_b822a65038c714cf738202e1c36728a951ec9062d7b659571c54dc83f2aa4a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

        // line 38
        echo "                    ";
        if (array_key_exists("invalid_username", $context)) {
            // line 39
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 41
        echo "                ";
        
        $__internal_b822a65038c714cf738202e1c36728a951ec9062d7b659571c54dc83f2aa4a57->leave($__internal_b822a65038c714cf738202e1c36728a951ec9062d7b659571c54dc83f2aa4a57_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 41,  180 => 39,  177 => 38,  171 => 37,  160 => 56,  152 => 51,  143 => 45,  138 => 43,  133 => 42,  130 => 37,  124 => 36,  114 => 58,  112 => 36,  107 => 33,  101 => 31,  99 => 30,  95 => 29,  90 => 26,  84 => 25,  72 => 23,  61 => 20,  50 => 17,  39 => 14,  24 => 12,);
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
            {% block sonata_user_reset_request_form %}
                {% block sonata_user_reset_request_error %}
                    {% if invalid_username is defined %}
                        <div class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_send_email') }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"username\" required=\"required\" placeholder=\"{{ 'resetting.request.username'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                <a href=\"{{ path('sonata_user_admin_security_login') }}\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/Resetting/request.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Admin\\Security\\Resetting\\request.html.twig");
    }
}
