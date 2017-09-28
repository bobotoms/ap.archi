<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_687a00a60b7b1a2e4abda896508b7239740b6c0a1d1573e86fb2832450289032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_10ddf7bd9fcbab8e976e6e724295d2e01606a6d1c333e413a14977cb521bd03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ddf7bd9fcbab8e976e6e724295d2e01606a6d1c333e413a14977cb521bd03e->enter($__internal_10ddf7bd9fcbab8e976e6e724295d2e01606a6d1c333e413a14977cb521bd03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ddf7bd9fcbab8e976e6e724295d2e01606a6d1c333e413a14977cb521bd03e->leave($__internal_10ddf7bd9fcbab8e976e6e724295d2e01606a6d1c333e413a14977cb521bd03e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_626508a93c9370ba5606d75fabd1104e44926fbc793f248c644e05c38decac58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626508a93c9370ba5606d75fabd1104e44926fbc793f248c644e05c38decac58->enter($__internal_626508a93c9370ba5606d75fabd1104e44926fbc793f248c644e05c38decac58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_626508a93c9370ba5606d75fabd1104e44926fbc793f248c644e05c38decac58->leave($__internal_626508a93c9370ba5606d75fabd1104e44926fbc793f248c644e05c38decac58_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e893fea711d13be427a13a111a6e4f0b29acfea6e0bea2be66028108aab8166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e893fea711d13be427a13a111a6e4f0b29acfea6e0bea2be66028108aab8166->enter($__internal_2e893fea711d13be427a13a111a6e4f0b29acfea6e0bea2be66028108aab8166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_2e893fea711d13be427a13a111a6e4f0b29acfea6e0bea2be66028108aab8166->leave($__internal_2e893fea711d13be427a13a111a6e4f0b29acfea6e0bea2be66028108aab8166_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5906df7fd4a380b4904b3dd8f2dd823ff751123828d469269e87ff121478befb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5906df7fd4a380b4904b3dd8f2dd823ff751123828d469269e87ff121478befb->enter($__internal_5906df7fd4a380b4904b3dd8f2dd823ff751123828d469269e87ff121478befb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5906df7fd4a380b4904b3dd8f2dd823ff751123828d469269e87ff121478befb->leave($__internal_5906df7fd4a380b4904b3dd8f2dd823ff751123828d469269e87ff121478befb_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9fbe9dd1b59d0f583d80dc8ba34958022ed8848e3d9129ea66089ac02a7bde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fbe9dd1b59d0f583d80dc8ba34958022ed8848e3d9129ea66089ac02a7bde7->enter($__internal_d9fbe9dd1b59d0f583d80dc8ba34958022ed8848e3d9129ea66089ac02a7bde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d9fbe9dd1b59d0f583d80dc8ba34958022ed8848e3d9129ea66089ac02a7bde7->leave($__internal_d9fbe9dd1b59d0f583d80dc8ba34958022ed8848e3d9129ea66089ac02a7bde7_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
