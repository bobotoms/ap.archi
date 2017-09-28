<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_58cc495bed0689b07f82499b3f8b2f4fb75d2c1e44a88aa0aadf28c6db30b5e9 extends Twig_Template
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
        $__internal_c96eddb238a6b03d042a8abf30ac1db38f9c783a22742ba2219784a2c5d549a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96eddb238a6b03d042a8abf30ac1db38f9c783a22742ba2219784a2c5d549a8->enter($__internal_c96eddb238a6b03d042a8abf30ac1db38f9c783a22742ba2219784a2c5d549a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96eddb238a6b03d042a8abf30ac1db38f9c783a22742ba2219784a2c5d549a8->leave($__internal_c96eddb238a6b03d042a8abf30ac1db38f9c783a22742ba2219784a2c5d549a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13adf3fe1e6b250d8188514fd5687b8e0b430463bd26e85b920de92ad9df3f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13adf3fe1e6b250d8188514fd5687b8e0b430463bd26e85b920de92ad9df3f90->enter($__internal_13adf3fe1e6b250d8188514fd5687b8e0b430463bd26e85b920de92ad9df3f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_13adf3fe1e6b250d8188514fd5687b8e0b430463bd26e85b920de92ad9df3f90->leave($__internal_13adf3fe1e6b250d8188514fd5687b8e0b430463bd26e85b920de92ad9df3f90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_116123358bc141dc3f66cdd60808fc9da61a1a65ee640a85263c39ff5dc7b3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116123358bc141dc3f66cdd60808fc9da61a1a65ee640a85263c39ff5dc7b3f5->enter($__internal_116123358bc141dc3f66cdd60808fc9da61a1a65ee640a85263c39ff5dc7b3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_116123358bc141dc3f66cdd60808fc9da61a1a65ee640a85263c39ff5dc7b3f5->leave($__internal_116123358bc141dc3f66cdd60808fc9da61a1a65ee640a85263c39ff5dc7b3f5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_da58eed889865fe854548a612240091c14e76d76c660899f00efe3627ee92aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da58eed889865fe854548a612240091c14e76d76c660899f00efe3627ee92aba->enter($__internal_da58eed889865fe854548a612240091c14e76d76c660899f00efe3627ee92aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_da58eed889865fe854548a612240091c14e76d76c660899f00efe3627ee92aba->leave($__internal_da58eed889865fe854548a612240091c14e76d76c660899f00efe3627ee92aba_prof);

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
