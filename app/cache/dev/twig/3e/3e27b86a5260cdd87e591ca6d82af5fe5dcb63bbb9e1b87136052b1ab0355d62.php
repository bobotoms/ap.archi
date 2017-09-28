<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2ea2523da1f7ff5c87f980e4eda362a04fcdd5c98e81227fb1315e239fbb5741 extends Twig_Template
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
        $__internal_8b33481dbf2b51571106f9789fcc37b5238971d6efe24d82e85f48a2d3538e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b33481dbf2b51571106f9789fcc37b5238971d6efe24d82e85f48a2d3538e1d->enter($__internal_8b33481dbf2b51571106f9789fcc37b5238971d6efe24d82e85f48a2d3538e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_8b33481dbf2b51571106f9789fcc37b5238971d6efe24d82e85f48a2d3538e1d->leave($__internal_8b33481dbf2b51571106f9789fcc37b5238971d6efe24d82e85f48a2d3538e1d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
