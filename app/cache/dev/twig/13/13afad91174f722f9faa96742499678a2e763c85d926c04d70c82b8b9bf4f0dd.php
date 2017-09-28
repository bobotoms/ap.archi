<?php

/* @BackOffice/Api/index.html.twig */
class __TwigTemplate_3591635469d055109614fb2d95072d38b91a1c159ec85cc98ef7398937a1ad8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::layout.html.twig", "@BackOffice/Api/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65825716407d0981cd9d4397c83d5a1ecc89df92439a4e84219686873d8a31ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65825716407d0981cd9d4397c83d5a1ecc89df92439a4e84219686873d8a31ea->enter($__internal_65825716407d0981cd9d4397c83d5a1ecc89df92439a4e84219686873d8a31ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/Api/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65825716407d0981cd9d4397c83d5a1ecc89df92439a4e84219686873d8a31ea->leave($__internal_65825716407d0981cd9d4397c83d5a1ecc89df92439a4e84219686873d8a31ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aae0bd13468453a5d3ff3a6edfd9658de67715282a94dba422bad2e26b98958c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae0bd13468453a5d3ff3a6edfd9658de67715282a94dba422bad2e26b98958c->enter($__internal_aae0bd13468453a5d3ff3a6edfd9658de67715282a94dba422bad2e26b98958c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "TESSSSSSSSSST
";
        
        $__internal_aae0bd13468453a5d3ff3a6edfd9658de67715282a94dba422bad2e26b98958c->leave($__internal_aae0bd13468453a5d3ff3a6edfd9658de67715282a94dba422bad2e26b98958c_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/Api/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontOfficeBundle::layout.html.twig\" %}

{% block body %}
TESSSSSSSSSST
{% endblock %}", "@BackOffice/Api/index.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\Api\\index.html.twig");
    }
}
