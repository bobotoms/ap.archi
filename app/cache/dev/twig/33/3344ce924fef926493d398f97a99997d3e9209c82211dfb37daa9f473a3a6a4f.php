<?php

/* SonataUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_5b26e8b158bbaafa838af0a713b5f636ae0ecd467b6fdd8cd38316d6ab0d697a extends Twig_Template
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
        $__internal_f27f65301355ac05a05eecb9e384a8078f2d9f2576a9fa6baffca0fec9a72760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27f65301355ac05a05eecb9e384a8078f2d9f2576a9fa6baffca0fec9a72760->enter($__internal_f27f65301355ac05a05eecb9e384a8078f2d9f2576a9fa6baffca0fec9a72760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Registration:register_content.html.twig"));

        // line 11
        echo "
<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_registration", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">

            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <div class=\"form-actions\">
                <input type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_f27f65301355ac05a05eecb9e384a8078f2d9f2576a9fa6baffca0fec9a72760->leave($__internal_f27f65301355ac05a05eecb9e384a8078f2d9f2576a9fa6baffca0fec9a72760_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 22,  40 => 19,  33 => 17,  27 => 14,  22 => 11,);
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

<div class=\"panel panel-success\">
    <div class=\"panel-heading\">
        <h2 class=\"panel-title\">{{ 'title_user_registration'|trans({}, 'SonataUserBundle') }}</h2>
    </div>
    <div class=\"panel-body\">
        <form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register form-horizontal\">

            {{ form_widget(form) }}

            <div class=\"form-actions\">
                <input type=\"submit\" value=\"{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-success pull-right\" />
            </div>
        </form>
    </div>
</div>
", "SonataUserBundle:Registration:register_content.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
