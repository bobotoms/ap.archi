<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_71dbce64f03492ce4de8f3400c7a4067feb918933f0ca9a2bc54cc3b28a22e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcf1e0f87eda5bdc2886a968c215d3d0758e7daacf65c581913e5e10204e32f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf1e0f87eda5bdc2886a968c215d3d0758e7daacf65c581913e5e10204e32f9->enter($__internal_fcf1e0f87eda5bdc2886a968c215d3d0758e7daacf65c581913e5e10204e32f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcf1e0f87eda5bdc2886a968c215d3d0758e7daacf65c581913e5e10204e32f9->leave($__internal_fcf1e0f87eda5bdc2886a968c215d3d0758e7daacf65c581913e5e10204e32f9_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_140d7211b683d03556d0a0993ff62aac723b3cf59f49d7b08686a449642cb9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140d7211b683d03556d0a0993ff62aac723b3cf59f49d7b08686a449642cb9d2->enter($__internal_140d7211b683d03556d0a0993ff62aac723b3cf59f49d7b08686a449642cb9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_140d7211b683d03556d0a0993ff62aac723b3cf59f49d7b08686a449642cb9d2->leave($__internal_140d7211b683d03556d0a0993ff62aac723b3cf59f49d7b08686a449642cb9d2_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_a997072010acd68f925cd556f1da1a8ac517e56b2e12acca80eddd44fa1b526b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a997072010acd68f925cd556f1da1a8ac517e56b2e12acca80eddd44fa1b526b->enter($__internal_a997072010acd68f925cd556f1da1a8ac517e56b2e12acca80eddd44fa1b526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_a997072010acd68f925cd556f1da1a8ac517e56b2e12acca80eddd44fa1b526b->leave($__internal_a997072010acd68f925cd556f1da1a8ac517e56b2e12acca80eddd44fa1b526b_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_dbbc30b4706645f4daab7193478d70ce7361597b5924ef9c9cc326e54f57a88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbc30b4706645f4daab7193478d70ce7361597b5924ef9c9cc326e54f57a88d->enter($__internal_dbbc30b4706645f4daab7193478d70ce7361597b5924ef9c9cc326e54f57a88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_dbbc30b4706645f4daab7193478d70ce7361597b5924ef9c9cc326e54f57a88d->leave($__internal_dbbc30b4706645f4daab7193478d70ce7361597b5924ef9c9cc326e54f57a88d_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_73386306d93704ed1ddcd1991a5dad5c36ea8d05064b529fe3dd50a5a4a36053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73386306d93704ed1ddcd1991a5dad5c36ea8d05064b529fe3dd50a5a4a36053->enter($__internal_73386306d93704ed1ddcd1991a5dad5c36ea8d05064b529fe3dd50a5a4a36053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_73386306d93704ed1ddcd1991a5dad5c36ea8d05064b529fe3dd50a5a4a36053->leave($__internal_73386306d93704ed1ddcd1991a5dad5c36ea8d05064b529fe3dd50a5a4a36053_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51030228fb2093f5ab86c589390c75193f8bec6a9f47adcba34fab0b03ba542a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51030228fb2093f5ab86c589390c75193f8bec6a9f47adcba34fab0b03ba542a->enter($__internal_51030228fb2093f5ab86c589390c75193f8bec6a9f47adcba34fab0b03ba542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_51030228fb2093f5ab86c589390c75193f8bec6a9f47adcba34fab0b03ba542a->leave($__internal_51030228fb2093f5ab86c589390c75193f8bec6a9f47adcba34fab0b03ba542a_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_8bcc5bfda565df991c7233b8ec9d0f069783f898326bae0c9693ee6bae7092b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcc5bfda565df991c7233b8ec9d0f069783f898326bae0c9693ee6bae7092b6->enter($__internal_8bcc5bfda565df991c7233b8ec9d0f069783f898326bae0c9693ee6bae7092b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_8bcc5bfda565df991c7233b8ec9d0f069783f898326bae0c9693ee6bae7092b6->leave($__internal_8bcc5bfda565df991c7233b8ec9d0f069783f898326bae0c9693ee6bae7092b6_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_f6085368c1cc69c98fc686abe3e06af63a8dc3dbda11410aba80e73d1f9841b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6085368c1cc69c98fc686abe3e06af63a8dc3dbda11410aba80e73d1f9841b8->enter($__internal_f6085368c1cc69c98fc686abe3e06af63a8dc3dbda11410aba80e73d1f9841b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_f6085368c1cc69c98fc686abe3e06af63a8dc3dbda11410aba80e73d1f9841b8->leave($__internal_f6085368c1cc69c98fc686abe3e06af63a8dc3dbda11410aba80e73d1f9841b8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  112 => 31,  106 => 30,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
