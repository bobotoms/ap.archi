<?php

/* BackOfficeBundle:Api:index.html.twig */
class __TwigTemplate_67d948a740ba288eb8b8d5c1d72a076fccb57f0c68fdaa5f46dd8c8a48616c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::layout.html.twig", "BackOfficeBundle:Api:index.html.twig", 1);
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
        $__internal_dced6b4920ae81b08c7ef8a8615a0241e848cbfbb23bca99a032c7d52c86faf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dced6b4920ae81b08c7ef8a8615a0241e848cbfbb23bca99a032c7d52c86faf2->enter($__internal_dced6b4920ae81b08c7ef8a8615a0241e848cbfbb23bca99a032c7d52c86faf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Api:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dced6b4920ae81b08c7ef8a8615a0241e848cbfbb23bca99a032c7d52c86faf2->leave($__internal_dced6b4920ae81b08c7ef8a8615a0241e848cbfbb23bca99a032c7d52c86faf2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_222c80f7a44c918197a0a3693d071919db31da1528672ac4be76b9f6dad866d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222c80f7a44c918197a0a3693d071919db31da1528672ac4be76b9f6dad866d1->enter($__internal_222c80f7a44c918197a0a3693d071919db31da1528672ac4be76b9f6dad866d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "TESSSSSSSSSST
";
        
        $__internal_222c80f7a44c918197a0a3693d071919db31da1528672ac4be76b9f6dad866d1->leave($__internal_222c80f7a44c918197a0a3693d071919db31da1528672ac4be76b9f6dad866d1_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Api:index.html.twig";
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
{% endblock %}", "BackOfficeBundle:Api:index.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/Api/index.html.twig");
    }
}
