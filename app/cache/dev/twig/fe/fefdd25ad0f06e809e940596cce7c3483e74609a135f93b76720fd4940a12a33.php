<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9c4d3166c2b7fcfc1799e366b3af1536671c6336bded095e74d7269e0e61c4b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_40ba525b8a2d543e3b57ef7a7b1978408c60783baddd3ad6b607a27fef1c94d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ba525b8a2d543e3b57ef7a7b1978408c60783baddd3ad6b607a27fef1c94d1->enter($__internal_40ba525b8a2d543e3b57ef7a7b1978408c60783baddd3ad6b607a27fef1c94d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40ba525b8a2d543e3b57ef7a7b1978408c60783baddd3ad6b607a27fef1c94d1->leave($__internal_40ba525b8a2d543e3b57ef7a7b1978408c60783baddd3ad6b607a27fef1c94d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3ecff8c0ea2402b7acd93dc9849e8e7a022dc1f2417a69db6aef171ac804122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ecff8c0ea2402b7acd93dc9849e8e7a022dc1f2417a69db6aef171ac804122->enter($__internal_b3ecff8c0ea2402b7acd93dc9849e8e7a022dc1f2417a69db6aef171ac804122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b3ecff8c0ea2402b7acd93dc9849e8e7a022dc1f2417a69db6aef171ac804122->leave($__internal_b3ecff8c0ea2402b7acd93dc9849e8e7a022dc1f2417a69db6aef171ac804122_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5679256844e7f73fd20ca6831d33f8af2c508f48630214444b85db1da6cbe0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5679256844e7f73fd20ca6831d33f8af2c508f48630214444b85db1da6cbe0da->enter($__internal_5679256844e7f73fd20ca6831d33f8af2c508f48630214444b85db1da6cbe0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5679256844e7f73fd20ca6831d33f8af2c508f48630214444b85db1da6cbe0da->leave($__internal_5679256844e7f73fd20ca6831d33f8af2c508f48630214444b85db1da6cbe0da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_391d102df3e11311786902e6e6fa4b813c662558b9890346e375aa663ad0db97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391d102df3e11311786902e6e6fa4b813c662558b9890346e375aa663ad0db97->enter($__internal_391d102df3e11311786902e6e6fa4b813c662558b9890346e375aa663ad0db97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_391d102df3e11311786902e6e6fa4b813c662558b9890346e375aa663ad0db97->leave($__internal_391d102df3e11311786902e6e6fa4b813c662558b9890346e375aa663ad0db97_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
