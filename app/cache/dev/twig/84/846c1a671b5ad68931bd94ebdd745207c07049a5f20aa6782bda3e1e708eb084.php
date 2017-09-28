<?php

/* @SonataUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_28aa39960d10fe7bad8f471dda53d698001e6d872c5b9c7be99d22d06a70c43c extends Twig_Template
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
        $__internal_6cf1b1f9b7bbe03d4736f13b8cdd939630db1d95c99389fd7161eb24065ac369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf1b1f9b7bbe03d4736f13b8cdd939630db1d95c99389fd7161eb24065ac369->enter($__internal_6cf1b1f9b7bbe03d4736f13b8cdd939630db1d95c99389fd7161eb24065ac369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/ChangePassword/changePassword_content.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_change_password")));
        echo "
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <button type=\"submit\" class=\"btn btn-danger\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6cf1b1f9b7bbe03d4736f13b8cdd939630db1d95c99389fd7161eb24065ac369->leave($__internal_6cf1b1f9b7bbe03d4736f13b8cdd939630db1d95c99389fd7161eb24065ac369_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 20,  36 => 17,  29 => 13,  25 => 12,  22 => 11,);
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

{{ form_start(form, {'action': path('sonata_user_change_password')  }) }}
{{ form_widget(form) }}

<div class=\"form-actions form-group\">
    <div class=\"col-sm-offset-3 col-sm-9\">
        <button type=\"submit\" class=\"btn btn-danger\">{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}</button>
    </div>
</div>
{{ form_end(form) }}
", "@SonataUser/ChangePassword/changePassword_content.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\user-bundle\\Resources\\views\\ChangePassword\\changePassword_content.html.twig");
    }
}
