<?php

/* @SonataMedia/MediaAdmin/list_image.html.twig */
class __TwigTemplate_236466094ce66cf9a9b2b080ab0891ccf867270edf87be7ca2400238f130df9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "@SonataMedia/MediaAdmin/list_image.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1679c95fad182cb4d423bb96f1fb70f76786f76dfe1347b71d31f96ab7e7e425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1679c95fad182cb4d423bb96f1fb70f76786f76dfe1347b71d31f96ab7e7e425->enter($__internal_1679c95fad182cb4d423bb96f1fb70f76786f76dfe1347b71d31f96ab7e7e425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/MediaAdmin/list_image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1679c95fad182cb4d423bb96f1fb70f76786f76dfe1347b71d31f96ab7e7e425->leave($__internal_1679c95fad182cb4d423bb96f1fb70f76786f76dfe1347b71d31f96ab7e7e425_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_920185905da7ee3016043d3dde176aa94634c6ae07918a1567e77a9bb2ef3c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920185905da7ee3016043d3dde176aa94634c6ae07918a1567e77a9bb2ef3c25->enter($__internal_920185905da7ee3016043d3dde176aa94634c6ae07918a1567e77a9bb2ef3c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "method"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array())), "admin", array("width" => 75, "height" => 60));
        echo "</a>
";
        
        $__internal_920185905da7ee3016043d3dde176aa94634c6ae07918a1567e77a9bb2ef3c25->leave($__internal_920185905da7ee3016043d3dde176aa94634c6ae07918a1567e77a9bb2ef3c25_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/MediaAdmin/list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field%}
    <a href=\"{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid }) }}\">{% thumbnail attribute(object, field_description.name ), 'admin' with {'width': 75, 'height': 60} %}</a>
{% endblock %}
", "@SonataMedia/MediaAdmin/list_image.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\MediaAdmin\\list_image.html.twig");
    }
}
