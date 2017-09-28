<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b87dc4f3c00c4a9eb80389ffc5dad62b832d9e52ab00455534d88466f4baf9ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d08e5a5a10467b3c55b1114035875d432365a7a2eea74f6ad9785327af0521b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d08e5a5a10467b3c55b1114035875d432365a7a2eea74f6ad9785327af0521b->enter($__internal_7d08e5a5a10467b3c55b1114035875d432365a7a2eea74f6ad9785327af0521b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7d08e5a5a10467b3c55b1114035875d432365a7a2eea74f6ad9785327af0521b->leave($__internal_7d08e5a5a10467b3c55b1114035875d432365a7a2eea74f6ad9785327af0521b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
