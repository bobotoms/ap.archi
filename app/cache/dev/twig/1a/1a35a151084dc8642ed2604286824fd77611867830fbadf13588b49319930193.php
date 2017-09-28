<?php

/* BackOfficeBundle::index.html.twig */
class __TwigTemplate_691575360d1368aa85a10d63439468c8f53f5c98cc702794919fb67a9593d39f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22d7ff2ecd58321d9f80d8f9dd88e0b4756edd05d09970cdcc742896453b2c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d7ff2ecd58321d9f80d8f9dd88e0b4756edd05d09970cdcc742896453b2c3c->enter($__internal_22d7ff2ecd58321d9f80d8f9dd88e0b4756edd05d09970cdcc742896453b2c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_22d7ff2ecd58321d9f80d8f9dd88e0b4756edd05d09970cdcc742896453b2c3c->leave($__internal_22d7ff2ecd58321d9f80d8f9dd88e0b4756edd05d09970cdcc742896453b2c3c_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_ef813d41898a210b55a71dd3ea18f79a257c1a8a64e67d65bfc6282b43c56676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef813d41898a210b55a71dd3ea18f79a257c1a8a64e67d65bfc6282b43c56676->enter($__internal_ef813d41898a210b55a71dd3ea18f79a257c1a8a64e67d65bfc6282b43c56676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Liste package :
";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute((isset($context["api"]) ? $context["api"] : $this->getContext($context, "api")), "donnees", array(), "array"));
        echo "

Detail package :
";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute((isset($context["api1"]) ? $context["api1"] : $this->getContext($context, "api1")), "donnees", array(), "array"));
        echo "

Prix package :
";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute((isset($context["api2"]) ? $context["api2"] : $this->getContext($context, "api2")), "2017-04-14", array(), "array"));
        echo "

Prestation :
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute((isset($context["api3"]) ? $context["api3"] : $this->getContext($context, "api3")), "donnees", array(), "array"));
        echo "
";
        
        $__internal_ef813d41898a210b55a71dd3ea18f79a257c1a8a64e67d65bfc6282b43c56676->leave($__internal_ef813d41898a210b55a71dd3ea18f79a257c1a8a64e67d65bfc6282b43c56676_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  53 => 10,  47 => 7,  41 => 4,  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block body %}
Liste package :
{{ dump(api['donnees']) }}

Detail package :
{{ dump(api1['donnees']) }}

Prix package :
{{ dump(api2['2017-04-14']) }}

Prestation :
{{ dump(api3['donnees']) }}
{% endblock %}", "BackOfficeBundle::index.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/index.html.twig");
    }
}
