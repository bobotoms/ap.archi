<?php

/* SonataPageBundle:BlockAdmin:select_type.html.twig */
class __TwigTemplate_7ca3e6c245e020a6d1fdbd99b88dd57ab904afbec22cb88348dc3646937001e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:action.html.twig", "SonataPageBundle:BlockAdmin:select_type.html.twig", 8);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ba8ddc07979fb20868c7eaf573af65e2b70d3b8f4d5274ed7191c5335b670c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba8ddc07979fb20868c7eaf573af65e2b70d3b8f4d5274ed7191c5335b670c2->enter($__internal_8ba8ddc07979fb20868c7eaf573af65e2b70d3b8f4d5274ed7191c5335b670c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:BlockAdmin:select_type.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba8ddc07979fb20868c7eaf573af65e2b70d3b8f4d5274ed7191c5335b670c2->leave($__internal_8ba8ddc07979fb20868c7eaf573af65e2b70d3b8f4d5274ed7191c5335b670c2_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebc9e51545c8221d225ce0701d75fcbc5ecba926c35e54b120176a702577758a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc9e51545c8221d225ce0701d75fcbc5ecba926c35e54b120176a702577758a->enter($__internal_ebc9e51545c8221d225ce0701d75fcbc5ecba926c35e54b120176a702577758a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_block_type", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_ebc9e51545c8221d225ce0701d75fcbc5ecba926c35e54b120176a702577758a->leave($__internal_ebc9e51545c8221d225ce0701d75fcbc5ecba926c35e54b120176a702577758a_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_51575f87ac0869d16d0294fc6e9b01f451f3b9e4f47583fd7a3dfebad1a4f619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51575f87ac0869d16d0294fc6e9b01f451f3b9e4f47583fd7a3dfebad1a4f619->enter($__internal_51575f87ac0869d16d0294fc6e9b01f451f3b9e4f47583fd7a3dfebad1a4f619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_block_type", array(), "SonataPageBundle"), "html", null, true);
        echo "</h2>
    <ul>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["code"] => $context["service"]) {
            // line 16
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("type" => $context["code"])), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "name", array()), "html", null, true);
            echo "</a></li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_type_available", array(), "SonataPageBundle"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
";
        
        $__internal_51575f87ac0869d16d0294fc6e9b01f451f3b9e4f47583fd7a3dfebad1a4f619->leave($__internal_51575f87ac0869d16d0294fc6e9b01f451f3b9e4f47583fd7a3dfebad1a4f619_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:BlockAdmin:select_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  74 => 18,  64 => 16,  59 => 15,  53 => 13,  47 => 12,  35 => 10,  11 => 8,);
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

{% extends 'SonataAdminBundle:CRUD:action.html.twig' %}

{% block title %}{{ 'title_select_block_type'|trans({}, 'SonataPageBundle') }}{% endblock %}
 
{% block content %}
    <h2>{{ 'title_select_block_type'|trans({}, 'SonataPageBundle') }}</h2>
    <ul>
        {% for code, service in services %}
            <li><a href=\"{{ admin.generateUrl('create', {'type': code}) }}\">{{ service.name }}</a></li>
        {% else %}
            <li>{{ 'no_type_available'|trans({}, 'SonataPageBundle') }}</li>
        {% endfor %}
    </ul>
{% endblock %}", "SonataPageBundle:BlockAdmin:select_type.html.twig", "C:\\wamp\\www\\Aparchi\\app/Resources/SonataPageBundle/views/BlockAdmin/select_type.html.twig");
    }
}
