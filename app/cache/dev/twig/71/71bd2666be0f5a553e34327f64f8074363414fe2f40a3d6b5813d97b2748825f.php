<?php

/* @SonataMedia/MediaAdmin/list_outer_rows_mosaic.html.twig */
class __TwigTemplate_5acbf4789b7a52ac67824cab05b47a10ca2f5cada96ef2f2bd15efb9e9105c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig", "@SonataMedia/MediaAdmin/list_outer_rows_mosaic.html.twig", 12);
        $this->blocks = array(
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5fc6c6f9128026543835ace7e18b17f6cb0fc1d9e72af0eb1a627d6895ebabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fc6c6f9128026543835ace7e18b17f6cb0fc1d9e72af0eb1a627d6895ebabd->enter($__internal_e5fc6c6f9128026543835ace7e18b17f6cb0fc1d9e72af0eb1a627d6895ebabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/MediaAdmin/list_outer_rows_mosaic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5fc6c6f9128026543835ace7e18b17f6cb0fc1d9e72af0eb1a627d6895ebabd->leave($__internal_e5fc6c6f9128026543835ace7e18b17f6cb0fc1d9e72af0eb1a627d6895ebabd_prof);

    }

    // line 14
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        $__internal_318a309a97a9edfdb4be774d26889247441a7b885ee7d1cc504e7183cd826c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318a309a97a9edfdb4be774d26889247441a7b885ee7d1cc504e7183cd826c5a->enter($__internal_318a309a97a9edfdb4be774d26889247441a7b885ee7d1cc504e7183cd826c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 15
        echo "    <span class=\"mosaic-box-label label label-primary pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_318a309a97a9edfdb4be774d26889247441a7b885ee7d1cc504e7183cd826c5a->leave($__internal_318a309a97a9edfdb4be774d26889247441a7b885ee7d1cc504e7183cd826c5a_prof);

    }

    // line 18
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        $__internal_f32067bf4438199856982a90e4431097ccf1e641e94758f127881ae2b015a6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32067bf4438199856982a90e4431097ccf1e641e94758f127881ae2b015a6cf->enter($__internal_f32067bf4438199856982a90e4431097ccf1e641e94758f127881ae2b015a6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        // line 19
        echo "    <span class=\"mosaic-box-label label label-primary pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>

    ";
        // line 21
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "width", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "width", array()), "html", null, true);
            if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "height", array())) {
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "height", array()), "html", null, true);
            }
            echo "px";
        }
        // line 22
        echo "    ";
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "length", array()) > 0)) {
            // line 23
            echo "        (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "length", array()), "html", null, true);
            echo ")
    ";
        }
        // line 25
        echo "
    <br />

    ";
        // line 28
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "authorname", array()))) {
            // line 29
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "authorname", array()), "html", null, true);
            echo "
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "copyright", array())) &&  !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "authorname", array())))) {
            // line 33
            echo "        ~
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "copyright", array()))) {
            // line 37
            echo "        &copy; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "copyright", array()), "html", null, true);
            echo "
    ";
        }
        // line 39
        echo "
";
        
        $__internal_f32067bf4438199856982a90e4431097ccf1e641e94758f127881ae2b015a6cf->leave($__internal_f32067bf4438199856982a90e4431097ccf1e641e94758f127881ae2b015a6cf_prof);

    }

    // line 42
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        $__internal_b5863bd376d4b98bc1a27b261eb5f2578fdd38ab50afd73565d3cedcb6817c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5863bd376d4b98bc1a27b261eb5f2578fdd38ab50afd73565d3cedcb6817c46->enter($__internal_b5863bd376d4b98bc1a27b261eb5f2578fdd38ab50afd73565d3cedcb6817c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        // line 43
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 44
            echo "        <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
    ";
        } elseif (($this->getAttribute(        // line 45
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "SHOW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 46
            echo "        <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "show", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b5863bd376d4b98bc1a27b261eb5f2578fdd38ab50afd73565d3cedcb6817c46->leave($__internal_b5863bd376d4b98bc1a27b261eb5f2578fdd38ab50afd73565d3cedcb6817c46_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/MediaAdmin/list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  142 => 46,  140 => 45,  133 => 44,  130 => 43,  124 => 42,  116 => 39,  110 => 37,  108 => 36,  105 => 35,  101 => 33,  99 => 32,  96 => 31,  90 => 29,  88 => 28,  83 => 25,  77 => 23,  74 => 22,  64 => 21,  58 => 19,  52 => 18,  42 => 15,  36 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig' %}

{% block sonata_mosaic_default_view %}
    <span class=\"mosaic-box-label label label-primary pull-right\">{{ object.providerName|trans({}, 'SonataMediaBundle') }}</span>
{% endblock %}

{% block sonata_mosaic_hover_view %}
    <span class=\"mosaic-box-label label label-primary pull-right\">{{ object.providerName|trans({}, 'SonataMediaBundle') }}</span>

    {% if object.width %} {{ object.width }}{% if object.height %}x{{ object.height }}{% endif %}px{% endif %}
    {% if object.length > 0 %}
        ({{ object.length }})
    {% endif %}

    <br />

    {% if object.authorname is not empty %}
       {{ object.authorname }}
    {% endif %}

    {% if object.copyright is not empty and object.authorname is not empty %}
        ~
    {% endif %}

    {% if object.copyright is not empty %}
        &copy; {{ object.copyright }}
    {% endif  %}

{% endblock %}

{% block sonata_mosaic_description %}
    {% if admin.isGranted('EDIT', object) and admin.hasRoute('edit') %}
        <a class=\"mosaic-inner-link\" href=\"{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid }) }}\">{{ meta.title|truncate(40) }}</a>
    {% elseif admin.isGranted('SHOW', object) and admin.hasRoute('show') %}
        <a class=\"mosaic-inner-link\" href=\"{{ admin.generateUrl('show', {'id' : object|sonata_urlsafeid }) }}\">{{ meta.title|truncate(40) }}</a>
    {% else %}
        {{ meta.title|truncate(40) }}
    {% endif %}
{% endblock %}", "@SonataMedia/MediaAdmin/list_outer_rows_mosaic.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\MediaAdmin\\list_outer_rows_mosaic.html.twig");
    }
}
