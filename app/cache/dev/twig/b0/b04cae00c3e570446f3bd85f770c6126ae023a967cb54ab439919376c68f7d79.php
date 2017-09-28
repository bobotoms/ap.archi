<?php

/* SonataUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_ffe451bcae744c35dff52accf56dd025d6ef7084145a7cf79a3f11a4df81a6cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05452ce8f57d8267e668b984308a2ff18c7ff1d41105b8a75df7ac6ca26e4358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05452ce8f57d8267e668b984308a2ff18c7ff1d41105b8a75df7ac6ca26e4358->enter($__internal_05452ce8f57d8267e668b984308a2ff18c7ff1d41105b8a75df7ac6ca26e4358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Resetting:request_content.html.twig"));

        // line 11
        echo "
<form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    ";
        // line 13
        if (array_key_exists("invalid_username", $context)) {
            // line 14
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 16
        echo "
    <div class=\"form-group\">
        <label for=\"username\" class=\"control-label required\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo " * </label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>

    <div class=\"form-actions form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            <input type=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
        </div>
    </div>
</form>
";
        
        $__internal_05452ce8f57d8267e668b984308a2ff18c7ff1d41105b8a75df7ac6ca26e4358->leave($__internal_05452ce8f57d8267e668b984308a2ff18c7ff1d41105b8a75df7ac6ca26e4358_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  41 => 18,  37 => 16,  31 => 14,  29 => 13,  25 => 12,  22 => 11,);
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

<form action=\"{{ path('sonata_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    {% if invalid_username is defined %}
        <div class=\"alert alert-danger\">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</div>
    {% endif %}

    <div class=\"form-group\">
        <label for=\"username\" class=\"control-label required\">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }} * </label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>

    <div class=\"form-actions form-group\">
        <div class=\"col-sm-offset-3 col-sm-9\">
            <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-primary\" />
        </div>
    </div>
</form>
", "SonataUserBundle:Resetting:request_content.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
