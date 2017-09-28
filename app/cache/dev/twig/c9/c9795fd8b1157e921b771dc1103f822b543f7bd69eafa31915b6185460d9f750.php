<?php

/* SonataSeoBundle:Default:index.html.twig */
class __TwigTemplate_1e90299c20ceb7239b168808ca0414791a44e84b32b9f92820980bac311ec1c2 extends Twig_Template
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
        $__internal_79bced756ea4ff03dc01ca9c04ff744c8753d39df74687865487f5f7e17b0333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bced756ea4ff03dc01ca9c04ff744c8753d39df74687865487f5f7e17b0333->enter($__internal_79bced756ea4ff03dc01ca9c04ff744c8753d39df74687865487f5f7e17b0333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_79bced756ea4ff03dc01ca9c04ff744c8753d39df74687865487f5f7e17b0333->leave($__internal_79bced756ea4ff03dc01ca9c04ff744c8753d39df74687865487f5f7e17b0333_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello {{ name }}!
", "SonataSeoBundle:Default:index.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Default/index.html.twig");
    }
}
