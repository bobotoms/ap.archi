<?php

/* @SonataSeo/Block/breadcrumb.html.twig */
class __TwigTemplate_44fdbc1c3320f80f1b7c306a1267357e44952acde0c0b994dab57b27a994480f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu_ordered.html.twig", "@SonataSeo/Block/breadcrumb.html.twig", 12);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_ordered.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fd7525d35c6d286ad048f870e594f0a04e79f852f850c8ef407b66e342a34bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd7525d35c6d286ad048f870e594f0a04e79f852f850c8ef407b66e342a34bc->enter($__internal_5fd7525d35c6d286ad048f870e594f0a04e79f852f850c8ef407b66e342a34bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/breadcrumb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fd7525d35c6d286ad048f870e594f0a04e79f852f850c8ef407b66e342a34bc->leave($__internal_5fd7525d35c6d286ad048f870e594f0a04e79f852f850c8ef407b66e342a34bc_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_1a2fa8e0a3f3664ec86eb04b2dc2837a4afe00a8b0e896aa799a1b4aa4474af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2fa8e0a3f3664ec86eb04b2dc2837a4afe00a8b0e896aa799a1b4aa4474af8->enter($__internal_1a2fa8e0a3f3664ec86eb04b2dc2837a4afe00a8b0e896aa799a1b4aa4474af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "    ";
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => "SonataSeoBundle"), "method");
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 17
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } elseif ((        // line 18
(isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        } else {
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        }
        
        $__internal_1a2fa8e0a3f3664ec86eb04b2dc2837a4afe00a8b0e896aa799a1b4aa4474af8->leave($__internal_1a2fa8e0a3f3664ec86eb04b2dc2837a4afe00a8b0e896aa799a1b4aa4474af8_prof);

    }

    // line 25
    public function block_list($context, array $blocks = array())
    {
        $__internal_e8a0a3487387df48a52d2aefdcdf64c9fa0ef0e7cf33e915226804c8db13c99a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a0a3487387df48a52d2aefdcdf64c9fa0ef0e7cf33e915226804c8db13c99a->enter($__internal_e8a0a3487387df48a52d2aefdcdf64c9fa0ef0e7cf33e915226804c8db13c99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 26
        ob_start();
        // line 27
        echo "    <div class=\"sonata_breadcrumb\">
        ";
        // line 28
        $this->displayParentBlock("list", $context, $blocks);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e8a0a3487387df48a52d2aefdcdf64c9fa0ef0e7cf33e915226804c8db13c99a->leave($__internal_e8a0a3487387df48a52d2aefdcdf64c9fa0ef0e7cf33e915226804c8db13c99a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 28,  70 => 27,  68 => 26,  62 => 25,  54 => 21,  51 => 19,  49 => 18,  47 => 17,  44 => 16,  41 => 15,  35 => 14,  11 => 12,);
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

{% extends 'knp_menu_ordered.html.twig' %}

{% block label %}
    {% set translation_domain = item.getExtra('translation_domain', 'SonataSeoBundle') %}
    {% if options.allow_safe_labels and item.extra('safe_label', false) %}
        {{- item.label|raw -}}
    {% elseif translation_domain is same as(false) %}
        {{- item.label -}}
    {% else %}
        {{- item.label|trans(item.getExtra('translation_params', {}), translation_domain) -}}
    {% endif %}
{% endblock %}

{% block list %}
{% spaceless %}
    <div class=\"sonata_breadcrumb\">
        {{ parent() }}
    </div>
{% endspaceless %}
{% endblock %}
", "@SonataSeo/Block/breadcrumb.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\breadcrumb.html.twig");
    }
}
