<?php

/* SonataUserBundle:Admin/Security/Resetting:reset.html.twig */
class __TwigTemplate_3839ab4830ac06d1c827545954acfef3653f487f8213952ea547bbe4b7c39f17 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataUserBundle:Admin/Security/Resetting:reset.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_507c38be9c8d2b8ce4a8df427681f65faaad86bfe64237a1e1678120a296a26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507c38be9c8d2b8ce4a8df427681f65faaad86bfe64237a1e1678120a296a26a->enter($__internal_507c38be9c8d2b8ce4a8df427681f65faaad86bfe64237a1e1678120a296a26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security/Resetting:reset.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_507c38be9c8d2b8ce4a8df427681f65faaad86bfe64237a1e1678120a296a26a->leave($__internal_507c38be9c8d2b8ce4a8df427681f65faaad86bfe64237a1e1678120a296a26a_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_4ac9006d5373c7012745bf0ca975937145f846520db0b9c3cc526aeeb65abd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac9006d5373c7012745bf0ca975937145f846520db0b9c3cc526aeeb65abd4d->enter($__internal_4ac9006d5373c7012745bf0ca975937145f846520db0b9c3cc526aeeb65abd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_4ac9006d5373c7012745bf0ca975937145f846520db0b9c3cc526aeeb65abd4d->leave($__internal_4ac9006d5373c7012745bf0ca975937145f846520db0b9c3cc526aeeb65abd4d_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        $__internal_1ff0553d260272abaeb75b06f8865e1feeea8e3d0fc3d34c5f29c11d5abdcea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff0553d260272abaeb75b06f8865e1feeea8e3d0fc3d34c5f29c11d5abdcea5->enter($__internal_1ff0553d260272abaeb75b06f8865e1feeea8e3d0fc3d34c5f29c11d5abdcea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_1ff0553d260272abaeb75b06f8865e1feeea8e3d0fc3d34c5f29c11d5abdcea5->leave($__internal_1ff0553d260272abaeb75b06f8865e1feeea8e3d0fc3d34c5f29c11d5abdcea5_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ba3b827455da3d647f747af7aeca5ad78a9ab42a3724ba1c36fb3164de440069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3b827455da3d647f747af7aeca5ad78a9ab42a3724ba1c36fb3164de440069->enter($__internal_ba3b827455da3d647f747af7aeca5ad78a9ab42a3724ba1c36fb3164de440069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ba3b827455da3d647f747af7aeca5ad78a9ab42a3724ba1c36fb3164de440069->leave($__internal_ba3b827455da3d647f747af7aeca5ad78a9ab42a3724ba1c36fb3164de440069_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_f43705c32f57ae7933f9c090be97b4d4145e226a12bc6bb9e0a58ec4388412a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43705c32f57ae7933f9c090be97b4d4145e226a12bc6bb9e0a58ec4388412a4->enter($__internal_f43705c32f57ae7933f9c090be97b4d4145e226a12bc6bb9e0a58ec4388412a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_f43705c32f57ae7933f9c090be97b4d4145e226a12bc6bb9e0a58ec4388412a4->leave($__internal_f43705c32f57ae7933f9c090be97b4d4145e226a12bc6bb9e0a58ec4388412a4_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_41d4f4cfc6fbd086def770e6b8d4b103e85688455584b861573092876aa178cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d4f4cfc6fbd086def770e6b8d4b103e85688455584b861573092876aa178cd->enter($__internal_41d4f4cfc6fbd086def770e6b8d4b103e85688455584b861573092876aa178cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_41d4f4cfc6fbd086def770e6b8d4b103e85688455584b861573092876aa178cd->leave($__internal_41d4f4cfc6fbd086def770e6b8d4b103e85688455584b861573092876aa178cd_prof);

    }

    // line 36
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        $__internal_33d2f93fa3ed8304271d6d85369d0671e9dc475113fa6c7f9c42fa19455ee058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d2f93fa3ed8304271d6d85369d0671e9dc475113fa6c7f9c42fa19455ee058->enter($__internal_33d2f93fa3ed8304271d6d85369d0671e9dc475113fa6c7f9c42fa19455ee058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_reset_form"));

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
        
        $__internal_33d2f93fa3ed8304271d6d85369d0671e9dc475113fa6c7f9c42fa19455ee058->leave($__internal_33d2f93fa3ed8304271d6d85369d0671e9dc475113fa6c7f9c42fa19455ee058_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:reset.html.twig";
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
", "SonataUserBundle:Admin/Security/Resetting:reset.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/Admin/Security/Resetting/reset.html.twig");
    }
}
