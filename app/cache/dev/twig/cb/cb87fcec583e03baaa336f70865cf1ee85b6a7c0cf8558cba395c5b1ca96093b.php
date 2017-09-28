<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e7f93dce45aaa4554693c3f7af6377a1e03bcffb2a74461933afdc603b8820ee extends Twig_Template
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
        $__internal_ed21b2f6e77c5b19284b72151eaf5d7c918c4cf0f0dae75459e51df5212eeee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed21b2f6e77c5b19284b72151eaf5d7c918c4cf0f0dae75459e51df5212eeee3->enter($__internal_ed21b2f6e77c5b19284b72151eaf5d7c918c4cf0f0dae75459e51df5212eeee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ed21b2f6e77c5b19284b72151eaf5d7c918c4cf0f0dae75459e51df5212eeee3->leave($__internal_ed21b2f6e77c5b19284b72151eaf5d7c918c4cf0f0dae75459e51df5212eeee3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8fccd352147a2670e5bb86534a98978ca940f4c1fb27354e7aad8bf64b8c213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fccd352147a2670e5bb86534a98978ca940f4c1fb27354e7aad8bf64b8c213->enter($__internal_d8fccd352147a2670e5bb86534a98978ca940f4c1fb27354e7aad8bf64b8c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d8fccd352147a2670e5bb86534a98978ca940f4c1fb27354e7aad8bf64b8c213->leave($__internal_d8fccd352147a2670e5bb86534a98978ca940f4c1fb27354e7aad8bf64b8c213_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
