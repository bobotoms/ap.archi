<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d77066268068d682cdc9b6909d58297a72b4c3c4f7998975f05906074bcc2977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2eed77e3e4129ce786b2ffafc8e8d3043cfa8fe536f30b1a32527dd74213a4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eed77e3e4129ce786b2ffafc8e8d3043cfa8fe536f30b1a32527dd74213a4ef->enter($__internal_2eed77e3e4129ce786b2ffafc8e8d3043cfa8fe536f30b1a32527dd74213a4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eed77e3e4129ce786b2ffafc8e8d3043cfa8fe536f30b1a32527dd74213a4ef->leave($__internal_2eed77e3e4129ce786b2ffafc8e8d3043cfa8fe536f30b1a32527dd74213a4ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1dcd7b720f0d39fcd706aee19affea1ec743864fa36b2e099f14be1c16efeb02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcd7b720f0d39fcd706aee19affea1ec743864fa36b2e099f14be1c16efeb02->enter($__internal_1dcd7b720f0d39fcd706aee19affea1ec743864fa36b2e099f14be1c16efeb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1dcd7b720f0d39fcd706aee19affea1ec743864fa36b2e099f14be1c16efeb02->leave($__internal_1dcd7b720f0d39fcd706aee19affea1ec743864fa36b2e099f14be1c16efeb02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80d6aebe12e5fd5c1437d0a034aa0ee6b7ef49f463567eac302588fad16cf200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d6aebe12e5fd5c1437d0a034aa0ee6b7ef49f463567eac302588fad16cf200->enter($__internal_80d6aebe12e5fd5c1437d0a034aa0ee6b7ef49f463567eac302588fad16cf200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80d6aebe12e5fd5c1437d0a034aa0ee6b7ef49f463567eac302588fad16cf200->leave($__internal_80d6aebe12e5fd5c1437d0a034aa0ee6b7ef49f463567eac302588fad16cf200_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7101a5936abe23e8c52bc59fcf64da5ccaae3e7d1b14edfcd908e146e46f2828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7101a5936abe23e8c52bc59fcf64da5ccaae3e7d1b14edfcd908e146e46f2828->enter($__internal_7101a5936abe23e8c52bc59fcf64da5ccaae3e7d1b14edfcd908e146e46f2828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7101a5936abe23e8c52bc59fcf64da5ccaae3e7d1b14edfcd908e146e46f2828->leave($__internal_7101a5936abe23e8c52bc59fcf64da5ccaae3e7d1b14edfcd908e146e46f2828_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
