<?php

/* FrontOfficeBundle::mail.html.twig */
class __TwigTemplate_bb3eef82db685a134e927a9d01ccfe0e10445c0d79cd443a5c6d138d02233cca extends Twig_Template
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
        $__internal_7c375c59e558cbee3f0d5a9515beaf1656beeeb224a3a80e23a5f36c98446eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c375c59e558cbee3f0d5a9515beaf1656beeeb224a3a80e23a5f36c98446eec->enter($__internal_7c375c59e558cbee3f0d5a9515beaf1656beeeb224a3a80e23a5f36c98446eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::mail.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        
        $__internal_7c375c59e558cbee3f0d5a9515beaf1656beeeb224a3a80e23a5f36c98446eec->leave($__internal_7c375c59e558cbee3f0d5a9515beaf1656beeeb224a3a80e23a5f36c98446eec_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle::mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ message }}", "FrontOfficeBundle::mail.html.twig", "C:\\wamp\\www\\Aparchi\\src\\FrontOfficeBundle/Resources/views/mail.html.twig");
    }
}
