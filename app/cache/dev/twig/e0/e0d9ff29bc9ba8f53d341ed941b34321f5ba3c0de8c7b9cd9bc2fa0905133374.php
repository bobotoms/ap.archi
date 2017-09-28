<?php

/* SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig */
class __TwigTemplate_77689542464485ef4b4474a967a2b84160c524ebcd1de83141bd34549e8a84f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig", "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig", 12);
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
        $__internal_9569320850dc6b6dfef7d4b7fcbbea7db9f0a94024f26575f0016fd058112dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9569320850dc6b6dfef7d4b7fcbbea7db9f0a94024f26575f0016fd058112dc4->enter($__internal_9569320850dc6b6dfef7d4b7fcbbea7db9f0a94024f26575f0016fd058112dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9569320850dc6b6dfef7d4b7fcbbea7db9f0a94024f26575f0016fd058112dc4->leave($__internal_9569320850dc6b6dfef7d4b7fcbbea7db9f0a94024f26575f0016fd058112dc4_prof);

    }

    // line 14
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        $__internal_d8e303ab1f380286a80264bd5f53f668a6a16e33d0608222a8ac12751f24fb75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e303ab1f380286a80264bd5f53f668a6a16e33d0608222a8ac12751f24fb75->enter($__internal_d8e303ab1f380286a80264bd5f53f668a6a16e33d0608222a8ac12751f24fb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 15
        echo "    <span class=\"mosaic-box-label label label-primary pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_d8e303ab1f380286a80264bd5f53f668a6a16e33d0608222a8ac12751f24fb75->leave($__internal_d8e303ab1f380286a80264bd5f53f668a6a16e33d0608222a8ac12751f24fb75_prof);

    }

    // line 18
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        $__internal_e5acbb8044ed29f945f9799853a5584cecaf26a5bb708eb60f2857da719f258d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5acbb8044ed29f945f9799853a5584cecaf26a5bb708eb60f2857da719f258d->enter($__internal_e5acbb8044ed29f945f9799853a5584cecaf26a5bb708eb60f2857da719f258d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

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
        
        $__internal_e5acbb8044ed29f945f9799853a5584cecaf26a5bb708eb60f2857da719f258d->leave($__internal_e5acbb8044ed29f945f9799853a5584cecaf26a5bb708eb60f2857da719f258d_prof);

    }

    // line 42
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        $__internal_aa616ad6fc57ecbd87336324f31642d4a411d25911b32c8af51f89c86f7f9015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa616ad6fc57ecbd87336324f31642d4a411d25911b32c8af51f89c86f7f9015->enter($__internal_aa616ad6fc57ecbd87336324f31642d4a411d25911b32c8af51f89c86f7f9015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

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
        
        $__internal_aa616ad6fc57ecbd87336324f31642d4a411d25911b32c8af51f89c86f7f9015->leave($__internal_aa616ad6fc57ecbd87336324f31642d4a411d25911b32c8af51f89c86f7f9015_prof);

    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig";
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
{% endblock %}", "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle/Resources/views/MediaAdmin/list_outer_rows_mosaic.html.twig");
    }
}
