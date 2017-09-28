<?php

/* @SonataUser/Admin/Security/Resetting/reset.html.twig */
class __TwigTemplate_01780b3ddb2f552475225da2a841193b4395fb43b5281ce104eb7ed1c62e14f3 extends Twig_Template
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
            'sonata_user_reset_form' => array($this, 'block_sonata_user_reset_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataUser/Admin/Security/Resetting/reset.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d446f523228084b85b0fdfbe5c4db1452e225b2688b8b7a2b26aa3685d2d2007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d446f523228084b85b0fdfbe5c4db1452e225b2688b8b7a2b26aa3685d2d2007->enter($__internal_d446f523228084b85b0fdfbe5c4db1452e225b2688b8b7a2b26aa3685d2d2007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d446f523228084b85b0fdfbe5c4db1452e225b2688b8b7a2b26aa3685d2d2007->leave($__internal_d446f523228084b85b0fdfbe5c4db1452e225b2688b8b7a2b26aa3685d2d2007_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_89c1c715017f5e9dc986b51fb33951ba987b9cd20ed2dcf75c9f5996286f80c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c1c715017f5e9dc986b51fb33951ba987b9cd20ed2dcf75c9f5996286f80c6->enter($__internal_89c1c715017f5e9dc986b51fb33951ba987b9cd20ed2dcf75c9f5996286f80c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_89c1c715017f5e9dc986b51fb33951ba987b9cd20ed2dcf75c9f5996286f80c6->leave($__internal_89c1c715017f5e9dc986b51fb33951ba987b9cd20ed2dcf75c9f5996286f80c6_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        $__internal_23d2d9df5fc53aa4ad33c1f378b5fb7f31040e3684902bc2a28ff0bb7d1702a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d2d9df5fc53aa4ad33c1f378b5fb7f31040e3684902bc2a28ff0bb7d1702a2->enter($__internal_23d2d9df5fc53aa4ad33c1f378b5fb7f31040e3684902bc2a28ff0bb7d1702a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_23d2d9df5fc53aa4ad33c1f378b5fb7f31040e3684902bc2a28ff0bb7d1702a2->leave($__internal_23d2d9df5fc53aa4ad33c1f378b5fb7f31040e3684902bc2a28ff0bb7d1702a2_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_223ddafadd12057349e441a21c4601a9e3142146e9ea444a714387eae00772e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223ddafadd12057349e441a21c4601a9e3142146e9ea444a714387eae00772e1->enter($__internal_223ddafadd12057349e441a21c4601a9e3142146e9ea444a714387eae00772e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_223ddafadd12057349e441a21c4601a9e3142146e9ea444a714387eae00772e1->leave($__internal_223ddafadd12057349e441a21c4601a9e3142146e9ea444a714387eae00772e1_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_2fa5ab4b0a9bebc5603a4cf21922595a3f3c6610f14285194f741e54e747763b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa5ab4b0a9bebc5603a4cf21922595a3f3c6610f14285194f741e54e747763b->enter($__internal_2fa5ab4b0a9bebc5603a4cf21922595a3f3c6610f14285194f741e54e747763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_2fa5ab4b0a9bebc5603a4cf21922595a3f3c6610f14285194f741e54e747763b->leave($__internal_2fa5ab4b0a9bebc5603a4cf21922595a3f3c6610f14285194f741e54e747763b_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a88c530cb3c72f303dfdef51e50d0438b9feebc4185084785660047bbc6c8cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88c530cb3c72f303dfdef51e50d0438b9feebc4185084785660047bbc6c8cc9->enter($__internal_a88c530cb3c72f303dfdef51e50d0438b9feebc4185084785660047bbc6c8cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        $this->displayBlock('sonata_user_reset_form', $context, $blocks);
        // line 54
        echo "        </div>
    </div>

";
        
        $__internal_a88c530cb3c72f303dfdef51e50d0438b9feebc4185084785660047bbc6c8cc9->leave($__internal_a88c530cb3c72f303dfdef51e50d0438b9feebc4185084785660047bbc6c8cc9_prof);

    }

    // line 36
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_45b870c259b6c51978c2d42d9510f01d98bf9d08543b883b3a1030b091c2f572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b870c259b6c51978c2d42d9510f01d98bf9d08543b883b3a1030b091c2f572->enter($__internal_45b870c259b6c51978c2d42d9510f01d98bf9d08543b883b3a1030b091c2f572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

        // line 37
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.new_password", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.new_password_confirmation", array(), "FOSUserBundle"), array(":" => "")), "html", null, true);
        echo "\"/>
                    </div>
                    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>
            ";
        
        $__internal_45b870c259b6c51978c2d42d9510f01d98bf9d08543b883b3a1030b091c2f572->leave($__internal_45b870c259b6c51978c2d42d9510f01d98bf9d08543b883b3a1030b091c2f572_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 49,  150 => 45,  145 => 43,  139 => 40,  134 => 38,  129 => 37,  123 => 36,  113 => 54,  111 => 36,  106 => 33,  100 => 31,  98 => 30,  94 => 29,  89 => 26,  83 => 25,  71 => 23,  60 => 20,  49 => 17,  38 => 14,  23 => 12,);
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
            {% block sonata_user_reset_form %}
                <p class=\"login-box-msg\">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</p>
                <form action=\"{{ path('sonata_user_admin_resetting_reset', {'token': token}) }}\" method=\"post\" role=\"form\">
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_first\"  name=\"fos_user_resetting_form[new][first]\" required=\"required\" placeholder=\"{{ 'form.new_password'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" id=\"fos_user_resetting_form_new_second\"  name=\"fos_user_resetting_form[new][second]\" required=\"required\" placeholder=\"{{ 'form.new_password_confirmation'|trans({}, 'FOSUserBundle')|replace({':': ''}) }}\"/>
                    </div>
                    {{ form_widget(form._token) }}

                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/Resetting/reset.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\Admin\\Security\\Resetting\\reset.html.twig");
    }
}
