<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_189b94bee1ea43a0e5251be6181472de9dbe94515cfc9822dcb6269f03a71bfe extends Twig_Template
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
        $__internal_502f5d178b1790738c1df39ed16619597fe6c1ba4fa3cbe231ba53162c0e8440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502f5d178b1790738c1df39ed16619597fe6c1ba4fa3cbe231ba53162c0e8440->enter($__internal_502f5d178b1790738c1df39ed16619597fe6c1ba4fa3cbe231ba53162c0e8440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_502f5d178b1790738c1df39ed16619597fe6c1ba4fa3cbe231ba53162c0e8440->leave($__internal_502f5d178b1790738c1df39ed16619597fe6c1ba4fa3cbe231ba53162c0e8440_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
