<?php

/* @SonataPage/BlockAdmin/edit.html.twig */
class __TwigTemplate_1b74e6e2af140661a8d9849ac89892ecf71caa0d2eb3895d80469caffa62c104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'information' => array($this, 'block_information'),
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataPage/BlockAdmin/edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa580b61c7baa059b16907c281c9f9ffcbd45b50778ddcf4c69138051d0add75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa580b61c7baa059b16907c281c9f9ffcbd45b50778ddcf4c69138051d0add75->enter($__internal_fa580b61c7baa059b16907c281c9f9ffcbd45b50778ddcf4c69138051d0add75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/BlockAdmin/edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa580b61c7baa059b16907c281c9f9ffcbd45b50778ddcf4c69138051d0add75->leave($__internal_fa580b61c7baa059b16907c281c9f9ffcbd45b50778ddcf4c69138051d0add75_prof);

    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
        $__internal_0f1d7b94e88e2ca84525dce3dd3a382845e498450016fb6033aef30f5aae5e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1d7b94e88e2ca84525dce3dd3a382845e498450016fb6033aef30f5aae5e0b->enter($__internal_0f1d7b94e88e2ca84525dce3dd3a382845e498450016fb6033aef30f5aae5e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 15
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "update", 1 => array("id" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">
        <p>
             ";
        // line 17
        $this->displayBlock('information', $context, $blocks);
        // line 20
        echo "        </p>

        <p>
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'errors');
        echo "
        </p>

        <div>
            ";
        // line 29
        $this->displayBlock('block', $context, $blocks);
        // line 32
        echo "        </div>

        <input type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button_save", array(), "SonataPageBundle"), "html", null, true);
        echo "\">

        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
";
        
        $__internal_0f1d7b94e88e2ca84525dce3dd3a382845e498450016fb6033aef30f5aae5e0b->leave($__internal_0f1d7b94e88e2ca84525dce3dd3a382845e498450016fb6033aef30f5aae5e0b_prof);

    }

    // line 17
    public function block_information($context, array $blocks = array())
    {
        $__internal_8ed9359d63b46626696e1798f97350500f6572fb7594c6266916dfee3ba2dfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed9359d63b46626696e1798f97350500f6572fb7594c6266916dfee3ba2dfa5->enter($__internal_8ed9359d63b46626696e1798f97350500f6572fb7594c6266916dfee3ba2dfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "information"));

        // line 18
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "type", array()), "html", null, true);
        echo "
             ";
        
        $__internal_8ed9359d63b46626696e1798f97350500f6572fb7594c6266916dfee3ba2dfa5->leave($__internal_8ed9359d63b46626696e1798f97350500f6572fb7594c6266916dfee3ba2dfa5_prof);

    }

    // line 29
    public function block_block($context, array $blocks = array())
    {
        $__internal_ee6361283822cf83e33952982eac6fdb197b42eea1bcc15629314e964e5686ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6361283822cf83e33952982eac6fdb197b42eea1bcc15629314e964e5686ee->enter($__internal_ee6361283822cf83e33952982eac6fdb197b42eea1bcc15629314e964e5686ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 30
        echo "                Custom block settings ...
            ";
        
        $__internal_ee6361283822cf83e33952982eac6fdb197b42eea1bcc15629314e964e5686ee->leave($__internal_ee6361283822cf83e33952982eac6fdb197b42eea1bcc15629314e964e5686ee_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/BlockAdmin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  106 => 29,  96 => 18,  90 => 17,  80 => 36,  75 => 34,  71 => 32,  69 => 29,  62 => 25,  58 => 24,  54 => 23,  49 => 20,  47 => 17,  41 => 15,  35 => 14,  20 => 12,);
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

{% block form %}
    <form action=\"{{ admin.generateUrl('update', {'id' : object.id}) }}\" method=\"POST\">
        <p>
             {% block information %}
                {{ object.type }}
             {% endblock %}
        </p>

        <p>
            {{ form_label(form.enabled) }}
            {{ form_widget(form.enabled) }}
            {{ form_errors(form.enabled) }}
        </p>

        <div>
            {% block block %}
                Custom block settings ...
            {% endblock %}
        </div>

        <input type=\"submit\" value=\"{{ 'button_save'|trans({}, 'SonataPageBundle') }}\">

        {{ form_rest(form) }}
    </form>
{% endblock %}
", "@SonataPage/BlockAdmin/edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\BlockAdmin\\edit.html.twig");
    }
}
