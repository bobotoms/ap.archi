<?php

/* @SonataAdmin/CRUD/preview.html.twig */
class __TwigTemplate_f4930e5d2307a0ae7cda7698d5bf9fea2b9480ae51ca00f2a62a9045cd8d58ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "@SonataAdmin/CRUD/preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_482997343acb7a0de5bb2885907d377f9c74a2b030dac9ea3a24a30598658c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482997343acb7a0de5bb2885907d377f9c74a2b030dac9ea3a24a30598658c26->enter($__internal_482997343acb7a0de5bb2885907d377f9c74a2b030dac9ea3a24a30598658c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482997343acb7a0de5bb2885907d377f9c74a2b030dac9ea3a24a30598658c26->leave($__internal_482997343acb7a0de5bb2885907d377f9c74a2b030dac9ea3a24a30598658c26_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_051a4599ff5aac93f444dcd6106c78f3257e2cb0da8a91c73c3aa666e11e7f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051a4599ff5aac93f444dcd6106c78f3257e2cb0da8a91c73c3aa666e11e7f0b->enter($__internal_051a4599ff5aac93f444dcd6106c78f3257e2cb0da8a91c73c3aa666e11e7f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_051a4599ff5aac93f444dcd6106c78f3257e2cb0da8a91c73c3aa666e11e7f0b->leave($__internal_051a4599ff5aac93f444dcd6106c78f3257e2cb0da8a91c73c3aa666e11e7f0b_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_86491ad24528445112a4fbecfa130929cb7d84bdfccadeee39bc2b676a05722d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86491ad24528445112a4fbecfa130929cb7d84bdfccadeee39bc2b676a05722d->enter($__internal_86491ad24528445112a4fbecfa130929cb7d84bdfccadeee39bc2b676a05722d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_86491ad24528445112a4fbecfa130929cb7d84bdfccadeee39bc2b676a05722d->leave($__internal_86491ad24528445112a4fbecfa130929cb7d84bdfccadeee39bc2b676a05722d_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_d5a1d64e06044aa513a221364bf5b5e67e50f84b3224dead79c0e61731bf4c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a1d64e06044aa513a221364bf5b5e67e50f84b3224dead79c0e61731bf4c8c->enter($__internal_d5a1d64e06044aa513a221364bf5b5e67e50f84b3224dead79c0e61731bf4c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_d5a1d64e06044aa513a221364bf5b5e67e50f84b3224dead79c0e61731bf4c8c->leave($__internal_d5a1d64e06044aa513a221364bf5b5e67e50f84b3224dead79c0e61731bf4c8c_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_da0aeea02cffa7d2f0a2feffd5d1e5a440725f18fc6cc5fc7ea0f48e36605183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0aeea02cffa7d2f0a2feffd5d1e5a440725f18fc6cc5fc7ea0f48e36605183->enter($__internal_da0aeea02cffa7d2f0a2feffd5d1e5a440725f18fc6cc5fc7ea0f48e36605183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_da0aeea02cffa7d2f0a2feffd5d1e5a440725f18fc6cc5fc7ea0f48e36605183->leave($__internal_da0aeea02cffa7d2f0a2feffd5d1e5a440725f18fc6cc5fc7ea0f48e36605183_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_25e9fb5bbb5b52860c5513922bc8f22e71d7e745290a6b658cf12500b695de55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e9fb5bbb5b52860c5513922bc8f22e71d7e745290a6b658cf12500b695de55->enter($__internal_25e9fb5bbb5b52860c5513922bc8f22e71d7e745290a6b658cf12500b695de55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_25e9fb5bbb5b52860c5513922bc8f22e71d7e745290a6b658cf12500b695de55->leave($__internal_25e9fb5bbb5b52860c5513922bc8f22e71d7e745290a6b658cf12500b695de55_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "@SonataAdmin/CRUD/preview.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\preview.html.twig");
    }
}
