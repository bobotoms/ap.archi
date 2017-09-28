<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3a222250dec456f3e83a35809b3e250b9ebe7653a68a6daba89dfc3f3641b8ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_f5e4862edb6d33110bf2ba45591676dfe94ec862c2aea0db0d42d46995cd40ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e4862edb6d33110bf2ba45591676dfe94ec862c2aea0db0d42d46995cd40ef->enter($__internal_f5e4862edb6d33110bf2ba45591676dfe94ec862c2aea0db0d42d46995cd40ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5e4862edb6d33110bf2ba45591676dfe94ec862c2aea0db0d42d46995cd40ef->leave($__internal_f5e4862edb6d33110bf2ba45591676dfe94ec862c2aea0db0d42d46995cd40ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_36254dd48d569b3eb59d2b0f1172bb213b41776f418231546cf8ebe2e910d79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36254dd48d569b3eb59d2b0f1172bb213b41776f418231546cf8ebe2e910d79a->enter($__internal_36254dd48d569b3eb59d2b0f1172bb213b41776f418231546cf8ebe2e910d79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_36254dd48d569b3eb59d2b0f1172bb213b41776f418231546cf8ebe2e910d79a->leave($__internal_36254dd48d569b3eb59d2b0f1172bb213b41776f418231546cf8ebe2e910d79a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7ed970afe749496fcaa20779374c7b89a0f90c1618ae1923ab4ae2cef271c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ed970afe749496fcaa20779374c7b89a0f90c1618ae1923ab4ae2cef271c95->enter($__internal_c7ed970afe749496fcaa20779374c7b89a0f90c1618ae1923ab4ae2cef271c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c7ed970afe749496fcaa20779374c7b89a0f90c1618ae1923ab4ae2cef271c95->leave($__internal_c7ed970afe749496fcaa20779374c7b89a0f90c1618ae1923ab4ae2cef271c95_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
