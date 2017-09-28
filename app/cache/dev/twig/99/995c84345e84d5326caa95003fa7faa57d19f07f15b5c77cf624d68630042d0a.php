<?php

/* SonataSeoBundle:Block:breadcrumb.html.twig */
class __TwigTemplate_0375afb90a99ec01011dade032b7d5b55506535debbc8708d07ee2a9ed8507ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu_ordered.html.twig", "SonataSeoBundle:Block:breadcrumb.html.twig", 12);
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
        $__internal_dd06b5085435ec90e00628eac8e064e7b861ce32821ed9876b2f7e265aa59ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd06b5085435ec90e00628eac8e064e7b861ce32821ed9876b2f7e265aa59ce6->enter($__internal_dd06b5085435ec90e00628eac8e064e7b861ce32821ed9876b2f7e265aa59ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:breadcrumb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd06b5085435ec90e00628eac8e064e7b861ce32821ed9876b2f7e265aa59ce6->leave($__internal_dd06b5085435ec90e00628eac8e064e7b861ce32821ed9876b2f7e265aa59ce6_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_07897dc4ccc00ffecda218d42e2189b19d30fa1a9dd56198859b9512a10fe3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07897dc4ccc00ffecda218d42e2189b19d30fa1a9dd56198859b9512a10fe3f6->enter($__internal_07897dc4ccc00ffecda218d42e2189b19d30fa1a9dd56198859b9512a10fe3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_07897dc4ccc00ffecda218d42e2189b19d30fa1a9dd56198859b9512a10fe3f6->leave($__internal_07897dc4ccc00ffecda218d42e2189b19d30fa1a9dd56198859b9512a10fe3f6_prof);

    }

    // line 25
    public function block_list($context, array $blocks = array())
    {
        $__internal_72e49f1f8c5c77da0410da2782bf291d66ca6f3cd092c0bfae66e3c438e09e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e49f1f8c5c77da0410da2782bf291d66ca6f3cd092c0bfae66e3c438e09e1d->enter($__internal_72e49f1f8c5c77da0410da2782bf291d66ca6f3cd092c0bfae66e3c438e09e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_72e49f1f8c5c77da0410da2782bf291d66ca6f3cd092c0bfae66e3c438e09e1d->leave($__internal_72e49f1f8c5c77da0410da2782bf291d66ca6f3cd092c0bfae66e3c438e09e1d_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:breadcrumb.html.twig";
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
", "SonataSeoBundle:Block:breadcrumb.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\breadcrumb.html.twig");
    }
}
