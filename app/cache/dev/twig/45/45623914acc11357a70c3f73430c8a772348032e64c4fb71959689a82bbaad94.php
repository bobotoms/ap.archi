<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_2d3c133ce622e38a5f9ac75a58d976be7fcc6ee1616a57aeb1fc7d450a9692b1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37392cc74a673fb1f6348ab04f0fb536e2a550fa2341cbd73595e1440b88efe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37392cc74a673fb1f6348ab04f0fb536e2a550fa2341cbd73595e1440b88efe5->enter($__internal_37392cc74a673fb1f6348ab04f0fb536e2a550fa2341cbd73595e1440b88efe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37392cc74a673fb1f6348ab04f0fb536e2a550fa2341cbd73595e1440b88efe5->leave($__internal_37392cc74a673fb1f6348ab04f0fb536e2a550fa2341cbd73595e1440b88efe5_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_62934b8176bdfb8b22c655362b3755720ba8b6e5822cc1e122796fe3d59843b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62934b8176bdfb8b22c655362b3755720ba8b6e5822cc1e122796fe3d59843b4->enter($__internal_62934b8176bdfb8b22c655362b3755720ba8b6e5822cc1e122796fe3d59843b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_62934b8176bdfb8b22c655362b3755720ba8b6e5822cc1e122796fe3d59843b4->leave($__internal_62934b8176bdfb8b22c655362b3755720ba8b6e5822cc1e122796fe3d59843b4_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_cecccf77c8a12b49481a2bf8e60ed52d7fdb19f39657c4c04350e61c713f651e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecccf77c8a12b49481a2bf8e60ed52d7fdb19f39657c4c04350e61c713f651e->enter($__internal_cecccf77c8a12b49481a2bf8e60ed52d7fdb19f39657c4c04350e61c713f651e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_cecccf77c8a12b49481a2bf8e60ed52d7fdb19f39657c4c04350e61c713f651e->leave($__internal_cecccf77c8a12b49481a2bf8e60ed52d7fdb19f39657c4c04350e61c713f651e_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5f97134af927cf79816278f60ba2f683f2ac619a47fc7586f40feb41ce96c793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f97134af927cf79816278f60ba2f683f2ac619a47fc7586f40feb41ce96c793->enter($__internal_5f97134af927cf79816278f60ba2f683f2ac619a47fc7586f40feb41ce96c793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_5f97134af927cf79816278f60ba2f683f2ac619a47fc7586f40feb41ce96c793->leave($__internal_5f97134af927cf79816278f60ba2f683f2ac619a47fc7586f40feb41ce96c793_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_e9046c6fa4945654b2063e08a7d3cd7951315df458d36e2b7d84f3890fad9fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9046c6fa4945654b2063e08a7d3cd7951315df458d36e2b7d84f3890fad9fab->enter($__internal_e9046c6fa4945654b2063e08a7d3cd7951315df458d36e2b7d84f3890fad9fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_e9046c6fa4945654b2063e08a7d3cd7951315df458d36e2b7d84f3890fad9fab->leave($__internal_e9046c6fa4945654b2063e08a7d3cd7951315df458d36e2b7d84f3890fad9fab_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_684ef464e798aac51079bfded285d5c436324c7e14f174074ad93c742282747c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684ef464e798aac51079bfded285d5c436324c7e14f174074ad93c742282747c->enter($__internal_684ef464e798aac51079bfded285d5c436324c7e14f174074ad93c742282747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_684ef464e798aac51079bfded285d5c436324c7e14f174074ad93c742282747c->leave($__internal_684ef464e798aac51079bfded285d5c436324c7e14f174074ad93c742282747c_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_62c64338b2b4c690069229947171dc57ba0ed9cf8de148e2c69846e3e6ca04ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c64338b2b4c690069229947171dc57ba0ed9cf8de148e2c69846e3e6ca04ab->enter($__internal_62c64338b2b4c690069229947171dc57ba0ed9cf8de148e2c69846e3e6ca04ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_62c64338b2b4c690069229947171dc57ba0ed9cf8de148e2c69846e3e6ca04ab->leave($__internal_62c64338b2b4c690069229947171dc57ba0ed9cf8de148e2c69846e3e6ca04ab_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_2447ed88d6661d15b2d9ec4fad2619c03a244ee542c0a30e13c43ba9aeb5dc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2447ed88d6661d15b2d9ec4fad2619c03a244ee542c0a30e13c43ba9aeb5dc79->enter($__internal_2447ed88d6661d15b2d9ec4fad2619c03a244ee542c0a30e13c43ba9aeb5dc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_2447ed88d6661d15b2d9ec4fad2619c03a244ee542c0a30e13c43ba9aeb5dc79->leave($__internal_2447ed88d6661d15b2d9ec4fad2619c03a244ee542c0a30e13c43ba9aeb5dc79_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
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
", "@SonataAdmin/empty_layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\empty_layout.html.twig");
    }
}
