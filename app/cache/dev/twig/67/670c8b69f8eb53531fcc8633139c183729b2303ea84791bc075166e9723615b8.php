<?php

/* @SonataPage/SiteAdmin/list_create_snapshots.html.twig */
class __TwigTemplate_100b4286c332678f5e62a28432e037753ec1396de177d8b3449decd4a49db967 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "@SonataPage/SiteAdmin/list_create_snapshots.html.twig", 12);
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
        $__internal_85d13b71c0f01b8754f0d4dc96123be9b1d1c452062b9a8b7e9c44705d6708f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d13b71c0f01b8754f0d4dc96123be9b1d1c452062b9a8b7e9c44705d6708f1->enter($__internal_85d13b71c0f01b8754f0d4dc96123be9b1d1c452062b9a8b7e9c44705d6708f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/SiteAdmin/list_create_snapshots.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d13b71c0f01b8754f0d4dc96123be9b1d1c452062b9a8b7e9c44705d6708f1->leave($__internal_85d13b71c0f01b8754f0d4dc96123be9b1d1c452062b9a8b7e9c44705d6708f1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1916ad2b881e820acd7766e4c9a61a29fdf4ae9adaa4876f0aa4a253f09fe669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1916ad2b881e820acd7766e4c9a61a29fdf4ae9adaa4876f0aa4a253f09fe669->enter($__internal_1916ad2b881e820acd7766e4c9a61a29fdf4ae9adaa4876f0aa4a253f09fe669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "snapshots", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_create_snapshots", array(), "SonataPageBundle"), "html", null, true);
        echo "</a>
";
        
        $__internal_1916ad2b881e820acd7766e4c9a61a29fdf4ae9adaa4876f0aa4a253f09fe669->leave($__internal_1916ad2b881e820acd7766e4c9a61a29fdf4ae9adaa4876f0aa4a253f09fe669_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/SiteAdmin/list_create_snapshots.html.twig";
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

{% block field %}
    <a href=\"{{ admin.generateObjectUrl('snapshots', object) }}\">{{ \"link_create_snapshots\"|trans({}, \"SonataPageBundle\")}}</a>
{% endblock %}
", "@SonataPage/SiteAdmin/list_create_snapshots.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\SiteAdmin\\list_create_snapshots.html.twig");
    }
}
