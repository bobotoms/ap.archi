<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9d9bdd23bcc73dea7330e44310e1c13c19c50851ae66b0940379dc2dca62ac54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7dee9f0e96ded8eed019711e7c546794df74a3cf4e59601d9570e62282df4370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dee9f0e96ded8eed019711e7c546794df74a3cf4e59601d9570e62282df4370->enter($__internal_7dee9f0e96ded8eed019711e7c546794df74a3cf4e59601d9570e62282df4370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dee9f0e96ded8eed019711e7c546794df74a3cf4e59601d9570e62282df4370->leave($__internal_7dee9f0e96ded8eed019711e7c546794df74a3cf4e59601d9570e62282df4370_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcad228e497b2ec5fa5014ee8d7266874294270a7d481b935e814dc222f6db38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcad228e497b2ec5fa5014ee8d7266874294270a7d481b935e814dc222f6db38->enter($__internal_dcad228e497b2ec5fa5014ee8d7266874294270a7d481b935e814dc222f6db38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dcad228e497b2ec5fa5014ee8d7266874294270a7d481b935e814dc222f6db38->leave($__internal_dcad228e497b2ec5fa5014ee8d7266874294270a7d481b935e814dc222f6db38_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9515f4325511bfb75c0e1ea97760e7f8e8a16bacc5faca81aa3539347438b3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9515f4325511bfb75c0e1ea97760e7f8e8a16bacc5faca81aa3539347438b3c9->enter($__internal_9515f4325511bfb75c0e1ea97760e7f8e8a16bacc5faca81aa3539347438b3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9515f4325511bfb75c0e1ea97760e7f8e8a16bacc5faca81aa3539347438b3c9->leave($__internal_9515f4325511bfb75c0e1ea97760e7f8e8a16bacc5faca81aa3539347438b3c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
