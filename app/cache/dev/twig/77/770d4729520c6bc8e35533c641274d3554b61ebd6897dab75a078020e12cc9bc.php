<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a912b4006583287a8266c910add8a324f86e21417aece5c7041034eaca8488e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_685b7a4e1cfa8ec1b300fa897896baf0fbb43d1bb19c3cab9aad54d8e0e5bafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685b7a4e1cfa8ec1b300fa897896baf0fbb43d1bb19c3cab9aad54d8e0e5bafd->enter($__internal_685b7a4e1cfa8ec1b300fa897896baf0fbb43d1bb19c3cab9aad54d8e0e5bafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685b7a4e1cfa8ec1b300fa897896baf0fbb43d1bb19c3cab9aad54d8e0e5bafd->leave($__internal_685b7a4e1cfa8ec1b300fa897896baf0fbb43d1bb19c3cab9aad54d8e0e5bafd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ecbd9d8c2a67080b4a3ef01ab11c484a238b984c80273359ea8790b06f0b8091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbd9d8c2a67080b4a3ef01ab11c484a238b984c80273359ea8790b06f0b8091->enter($__internal_ecbd9d8c2a67080b4a3ef01ab11c484a238b984c80273359ea8790b06f0b8091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ecbd9d8c2a67080b4a3ef01ab11c484a238b984c80273359ea8790b06f0b8091->leave($__internal_ecbd9d8c2a67080b4a3ef01ab11c484a238b984c80273359ea8790b06f0b8091_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1703104be4a4c154d344cf14404b0ec120fc59541a8820a047414d55f1f3122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1703104be4a4c154d344cf14404b0ec120fc59541a8820a047414d55f1f3122->enter($__internal_f1703104be4a4c154d344cf14404b0ec120fc59541a8820a047414d55f1f3122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1703104be4a4c154d344cf14404b0ec120fc59541a8820a047414d55f1f3122->leave($__internal_f1703104be4a4c154d344cf14404b0ec120fc59541a8820a047414d55f1f3122_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_419b60c514a9d440edd502cc97b818d12575cfd4bc2a4d83a6fe415dadb5a7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419b60c514a9d440edd502cc97b818d12575cfd4bc2a4d83a6fe415dadb5a7ea->enter($__internal_419b60c514a9d440edd502cc97b818d12575cfd4bc2a4d83a6fe415dadb5a7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_419b60c514a9d440edd502cc97b818d12575cfd4bc2a4d83a6fe415dadb5a7ea->leave($__internal_419b60c514a9d440edd502cc97b818d12575cfd4bc2a4d83a6fe415dadb5a7ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
