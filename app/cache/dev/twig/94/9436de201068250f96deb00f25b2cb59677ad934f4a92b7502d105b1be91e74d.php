<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_e84e9e293382a50c232011bd2e653f788cca9c3610aa2a12d9b1082bb8b43e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dea1ddb0819c656ba87fa729a54c37add2d3b0f6eb746fe72d65a4d4058ecf03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea1ddb0819c656ba87fa729a54c37add2d3b0f6eb746fe72d65a4d4058ecf03->enter($__internal_dea1ddb0819c656ba87fa729a54c37add2d3b0f6eb746fe72d65a4d4058ecf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dea1ddb0819c656ba87fa729a54c37add2d3b0f6eb746fe72d65a4d4058ecf03->leave($__internal_dea1ddb0819c656ba87fa729a54c37add2d3b0f6eb746fe72d65a4d4058ecf03_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_41a7bb37e590945fe422cac68a7bd78de85fb9bd8f1dae3e7e48bc71923a1ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a7bb37e590945fe422cac68a7bd78de85fb9bd8f1dae3e7e48bc71923a1ba3->enter($__internal_41a7bb37e590945fe422cac68a7bd78de85fb9bd8f1dae3e7e48bc71923a1ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_41a7bb37e590945fe422cac68a7bd78de85fb9bd8f1dae3e7e48bc71923a1ba3->leave($__internal_41a7bb37e590945fe422cac68a7bd78de85fb9bd8f1dae3e7e48bc71923a1ba3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
