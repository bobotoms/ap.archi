<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9982b27c73de47dffa048817dac809612cf26980c1214045faf3ee7adab088cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_7cfad7cb835ee3b4db764703e9019354c924390e7b9646078f56ca329a54eb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfad7cb835ee3b4db764703e9019354c924390e7b9646078f56ca329a54eb3f->enter($__internal_7cfad7cb835ee3b4db764703e9019354c924390e7b9646078f56ca329a54eb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cfad7cb835ee3b4db764703e9019354c924390e7b9646078f56ca329a54eb3f->leave($__internal_7cfad7cb835ee3b4db764703e9019354c924390e7b9646078f56ca329a54eb3f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bb7c93ac5f490d1e668628f21f4c0740d8d0e9141656f38500e7cdeab4f55e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb7c93ac5f490d1e668628f21f4c0740d8d0e9141656f38500e7cdeab4f55e7->enter($__internal_4bb7c93ac5f490d1e668628f21f4c0740d8d0e9141656f38500e7cdeab4f55e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4bb7c93ac5f490d1e668628f21f4c0740d8d0e9141656f38500e7cdeab4f55e7->leave($__internal_4bb7c93ac5f490d1e668628f21f4c0740d8d0e9141656f38500e7cdeab4f55e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ddb9d469db5e6dd5364b3eb985020dcc566f1752719abbf02d41d73d0914f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddb9d469db5e6dd5364b3eb985020dcc566f1752719abbf02d41d73d0914f20->enter($__internal_6ddb9d469db5e6dd5364b3eb985020dcc566f1752719abbf02d41d73d0914f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ddb9d469db5e6dd5364b3eb985020dcc566f1752719abbf02d41d73d0914f20->leave($__internal_6ddb9d469db5e6dd5364b3eb985020dcc566f1752719abbf02d41d73d0914f20_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0905ac0d3c127ed1a1cfeb32b8f3304d448a039e6b5837b0832f6aa17557d638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0905ac0d3c127ed1a1cfeb32b8f3304d448a039e6b5837b0832f6aa17557d638->enter($__internal_0905ac0d3c127ed1a1cfeb32b8f3304d448a039e6b5837b0832f6aa17557d638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0905ac0d3c127ed1a1cfeb32b8f3304d448a039e6b5837b0832f6aa17557d638->leave($__internal_0905ac0d3c127ed1a1cfeb32b8f3304d448a039e6b5837b0832f6aa17557d638_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
