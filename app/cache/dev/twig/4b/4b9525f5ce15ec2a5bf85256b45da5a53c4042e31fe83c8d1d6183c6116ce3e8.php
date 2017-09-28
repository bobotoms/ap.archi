<?php

/* @BackOffice/index.html.twig */
class __TwigTemplate_0b48031d410d9b10d73c05694880d4d8a98bf1e7f068ad1c6db45a37031f33b7 extends Twig_Template
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
        $__internal_abc13a91c6ad8da36ad78587f97e87d18c966420565e9c6a8881c3f2673d5c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc13a91c6ad8da36ad78587f97e87d18c966420565e9c6a8881c3f2673d5c0d->enter($__internal_abc13a91c6ad8da36ad78587f97e87d18c966420565e9c6a8881c3f2673d5c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/index.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_abc13a91c6ad8da36ad78587f97e87d18c966420565e9c6a8881c3f2673d5c0d->leave($__internal_abc13a91c6ad8da36ad78587f97e87d18c966420565e9c6a8881c3f2673d5c0d_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_0182af68e90fb5ff831040df6e2895c801fb91ff5aa46a9712183e2b110c42ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0182af68e90fb5ff831040df6e2895c801fb91ff5aa46a9712183e2b110c42ff->enter($__internal_0182af68e90fb5ff831040df6e2895c801fb91ff5aa46a9712183e2b110c42ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0182af68e90fb5ff831040df6e2895c801fb91ff5aa46a9712183e2b110c42ff->leave($__internal_0182af68e90fb5ff831040df6e2895c801fb91ff5aa46a9712183e2b110c42ff_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/index.html.twig";
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
{% endblock %}", "@BackOffice/index.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\index.html.twig");
    }
}
