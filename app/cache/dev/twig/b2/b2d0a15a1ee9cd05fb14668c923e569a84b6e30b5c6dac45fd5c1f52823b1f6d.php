<?php

/* SonataUserBundle:Admin/Security/Resetting:request.html.twig */
class __TwigTemplate_f17d0d39b8d1c7a332bfab3197f34278e30bdd52b3bd5f25df0753016f60e9b9 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:request.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f61a457103b55367b4c1ed56d567fe03f4b026e4f06fc65b19f6d735f0c9dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f61a457103b55367b4c1ed56d567fe03f4b026e4f06fc65b19f6d735f0c9dc1->enter($__internal_4f61a457103b55367b4c1ed56d567fe03f4b026e4f06fc65b19f6d735f0c9dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:request.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f61a457103b55367b4c1ed56d567fe03f4b026e4f06fc65b19f6d735f0c9dc1->leave($__internal_4f61a457103b55367b4c1ed56d567fe03f4b026e4f06fc65b19f6d735f0c9dc1_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_590c0ff7becd453bb008a6f17ec4f38987fd3667d95abb0f1f0630cb34ed2c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590c0ff7becd453bb008a6f17ec4f38987fd3667d95abb0f1f0630cb34ed2c3d->enter($__internal_590c0ff7becd453bb008a6f17ec4f38987fd3667d95abb0f1f0630cb34ed2c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_590c0ff7becd453bb008a6f17ec4f38987fd3667d95abb0f1f0630cb34ed2c3d->leave($__internal_590c0ff7becd453bb008a6f17ec4f38987fd3667d95abb0f1f0630cb34ed2c3d_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        $__internal_e7dc48952f4703347b66c706ef15349690ab17af12a4d4bd84b325f219c8ea30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dc48952f4703347b66c706ef15349690ab17af12a4d4bd84b325f219c8ea30->enter($__internal_e7dc48952f4703347b66c706ef15349690ab17af12a4d4bd84b325f219c8ea30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_e7dc48952f4703347b66c706ef15349690ab17af12a4d4bd84b325f219c8ea30->leave($__internal_e7dc48952f4703347b66c706ef15349690ab17af12a4d4bd84b325f219c8ea30_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_4d10f9272a1911640cfd15087a8205d9116a339abef2d18f1fa810c711fb321e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d10f9272a1911640cfd15087a8205d9116a339abef2d18f1fa810c711fb321e->enter($__internal_4d10f9272a1911640cfd15087a8205d9116a339abef2d18f1fa810c711fb321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_4d10f9272a1911640cfd15087a8205d9116a339abef2d18f1fa810c711fb321e->leave($__internal_4d10f9272a1911640cfd15087a8205d9116a339abef2d18f1fa810c711fb321e_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_0c7a212b61cac364fde258c509419eeadafe1c2f2c1167237c238660d292b915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7a212b61cac364fde258c509419eeadafe1c2f2c1167237c238660d292b915->enter($__internal_0c7a212b61cac364fde258c509419eeadafe1c2f2c1167237c238660d292b915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_0c7a212b61cac364fde258c509419eeadafe1c2f2c1167237c238660d292b915->leave($__internal_0c7a212b61cac364fde258c509419eeadafe1c2f2c1167237c238660d292b915_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_8305583631962aabf01706e42c36fda6eaf524a5eb989dd14c7c06c4b8edca58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8305583631962aabf01706e42c36fda6eaf524a5eb989dd14c7c06c4b8edca58->enter($__internal_8305583631962aabf01706e42c36fda6eaf524a5eb989dd14c7c06c4b8edca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_8305583631962aabf01706e42c36fda6eaf524a5eb989dd14c7c06c4b8edca58->leave($__internal_8305583631962aabf01706e42c36fda6eaf524a5eb989dd14c7c06c4b8edca58_prof);

    }

    // line 36
    public function block_sonata_user_reset_request_form($context, array $blocks = array())
    {
        $__internal_5e2b6f0e8f1a4a4a80b23a31167dd152907c4faeecb28f9ba2ca0ec127492278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2b6f0e8f1a4a4a80b23a31167dd152907c4faeecb28f9ba2ca0ec127492278->enter($__internal_5e2b6f0e8f1a4a4a80b23a31167dd152907c4faeecb28f9ba2ca0ec127492278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_form"));

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
        
        $__internal_5e2b6f0e8f1a4a4a80b23a31167dd152907c4faeecb28f9ba2ca0ec127492278->leave($__internal_5e2b6f0e8f1a4a4a80b23a31167dd152907c4faeecb28f9ba2ca0ec127492278_prof);

    }

    // line 37
    public function block_sonata_user_reset_request_error($context, array $blocks = array())
    {
        $__internal_16c2a5acdaeeeb80de042407fb1a3e51ddc743e313934b305a0557c173beab2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c2a5acdaeeeb80de042407fb1a3e51ddc743e313934b305a0557c173beab2c->enter($__internal_16c2a5acdaeeeb80de042407fb1a3e51ddc743e313934b305a0557c173beab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_request_error"));

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
        
        $__internal_16c2a5acdaeeeb80de042407fb1a3e51ddc743e313934b305a0557c173beab2c->leave($__internal_16c2a5acdaeeeb80de042407fb1a3e51ddc743e313934b305a0557c173beab2c_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:request.html.twig";
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
", "SonataUserBundle:Admin/Security/Resetting:request.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/Admin/Security/Resetting/request.html.twig");
    }
}
