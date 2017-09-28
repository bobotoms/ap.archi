<?php

/* @SonataPage/BlockAdmin/select_type.html.twig */
class __TwigTemplate_972a96012071295737d49105148d5b10bbefc02f44ce23d3201422b552b806d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:action.html.twig", "@SonataPage/BlockAdmin/select_type.html.twig", 8);
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
        $__internal_2d04fcb3c5ae2b1a210eb553fce2ea45c432b211cc62b81f9975f79b8e37689e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d04fcb3c5ae2b1a210eb553fce2ea45c432b211cc62b81f9975f79b8e37689e->enter($__internal_2d04fcb3c5ae2b1a210eb553fce2ea45c432b211cc62b81f9975f79b8e37689e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/BlockAdmin/select_type.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d04fcb3c5ae2b1a210eb553fce2ea45c432b211cc62b81f9975f79b8e37689e->leave($__internal_2d04fcb3c5ae2b1a210eb553fce2ea45c432b211cc62b81f9975f79b8e37689e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f40efa4dfd99f940d365e203d6b592f16d0be7912ae993a9d72793c85af4e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f40efa4dfd99f940d365e203d6b592f16d0be7912ae993a9d72793c85af4e9b->enter($__internal_0f40efa4dfd99f940d365e203d6b592f16d0be7912ae993a9d72793c85af4e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_block_type", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_0f40efa4dfd99f940d365e203d6b592f16d0be7912ae993a9d72793c85af4e9b->leave($__internal_0f40efa4dfd99f940d365e203d6b592f16d0be7912ae993a9d72793c85af4e9b_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5b945c8416e72fd50645133fd832c0149177cd765e353ed11b6a77f68bf08bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b945c8416e72fd50645133fd832c0149177cd765e353ed11b6a77f68bf08bf->enter($__internal_a5b945c8416e72fd50645133fd832c0149177cd765e353ed11b6a77f68bf08bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a5b945c8416e72fd50645133fd832c0149177cd765e353ed11b6a77f68bf08bf->leave($__internal_a5b945c8416e72fd50645133fd832c0149177cd765e353ed11b6a77f68bf08bf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/BlockAdmin/select_type.html.twig";
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
{% endblock %}", "@SonataPage/BlockAdmin/select_type.html.twig", "C:\\wamp\\www\\Aparchi\\app\\Resources\\SonataPageBundle\\views\\BlockAdmin\\select_type.html.twig");
    }
}
