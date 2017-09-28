<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_f9f9f73cda713a7976e8ae2ed29b72467a5df06a0dd84f9152028422a822c15f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4261c3a34a5b5f011adc992be23520b68e19845d61b8a923a1145d3237af95ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4261c3a34a5b5f011adc992be23520b68e19845d61b8a923a1145d3237af95ed->enter($__internal_4261c3a34a5b5f011adc992be23520b68e19845d61b8a923a1145d3237af95ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4261c3a34a5b5f011adc992be23520b68e19845d61b8a923a1145d3237af95ed->leave($__internal_4261c3a34a5b5f011adc992be23520b68e19845d61b8a923a1145d3237af95ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_919bfeb56908278b6e3fd6e85043301ce74a7b858d5819ac42e47b6209899de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919bfeb56908278b6e3fd6e85043301ce74a7b858d5819ac42e47b6209899de5->enter($__internal_919bfeb56908278b6e3fd6e85043301ce74a7b858d5819ac42e47b6209899de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_919bfeb56908278b6e3fd6e85043301ce74a7b858d5819ac42e47b6209899de5->leave($__internal_919bfeb56908278b6e3fd6e85043301ce74a7b858d5819ac42e47b6209899de5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f48cda130ccd782642e1c7095aa45c40b6b8fb23c858a68efa35e9b89ef4f4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48cda130ccd782642e1c7095aa45c40b6b8fb23c858a68efa35e9b89ef4f4df->enter($__internal_f48cda130ccd782642e1c7095aa45c40b6b8fb23c858a68efa35e9b89ef4f4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f48cda130ccd782642e1c7095aa45c40b6b8fb23c858a68efa35e9b89ef4f4df->leave($__internal_f48cda130ccd782642e1c7095aa45c40b6b8fb23c858a68efa35e9b89ef4f4df_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_40f489db2e212edff76a2bd5e976db342d2e9e159a688f496857e5712df03ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f489db2e212edff76a2bd5e976db342d2e9e159a688f496857e5712df03ef3->enter($__internal_40f489db2e212edff76a2bd5e976db342d2e9e159a688f496857e5712df03ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_40f489db2e212edff76a2bd5e976db342d2e9e159a688f496857e5712df03ef3->leave($__internal_40f489db2e212edff76a2bd5e976db342d2e9e159a688f496857e5712df03ef3_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b4572ad88772561465302a7306ba87770525cfa654cacda6691c3e1110d2c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4572ad88772561465302a7306ba87770525cfa654cacda6691c3e1110d2c38->enter($__internal_5b4572ad88772561465302a7306ba87770525cfa654cacda6691c3e1110d2c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5b4572ad88772561465302a7306ba87770525cfa654cacda6691c3e1110d2c38->leave($__internal_5b4572ad88772561465302a7306ba87770525cfa654cacda6691c3e1110d2c38_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
