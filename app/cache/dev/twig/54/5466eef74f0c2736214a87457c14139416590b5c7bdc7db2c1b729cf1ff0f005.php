<?php

/* SonataPageBundle::internal_error.html.twig */
class __TwigTemplate_30aaffadc5bc81f495907f92b720ca2e9bddfd881cd787901816e15b668732da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataPageBundle::base_error.html.twig", "SonataPageBundle::internal_error.html.twig", 11);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle::base_error.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35f4681c7370a3bb4bd469b93c0366907cca8abc0234318eaa8c12bb15196143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f4681c7370a3bb4bd469b93c0366907cca8abc0234318eaa8c12bb15196143->enter($__internal_35f4681c7370a3bb4bd469b93c0366907cca8abc0234318eaa8c12bb15196143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle::internal_error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f4681c7370a3bb4bd469b93c0366907cca8abc0234318eaa8c12bb15196143->leave($__internal_35f4681c7370a3bb4bd469b93c0366907cca8abc0234318eaa8c12bb15196143_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_6e7eb338963a7d57f68eb4d82f9bd4ad822cda8c1c48a46c1ed83c253293b2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7eb338963a7d57f68eb4d82f9bd4ad822cda8c1c48a46c1ed83c253293b2eb->enter($__internal_6e7eb338963a7d57f68eb4d82f9bd4ad822cda8c1c48a46c1ed83c253293b2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "
";
        
        $__internal_6e7eb338963a7d57f68eb4d82f9bd4ad822cda8c1c48a46c1ed83c253293b2eb->leave($__internal_6e7eb338963a7d57f68eb4d82f9bd4ad822cda8c1c48a46c1ed83c253293b2eb_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle::internal_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  34 => 13,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends 'SonataPageBundle::base_error.html.twig' %}

{% block content %}
    {{ exception.message }}
{% endblock %}
", "SonataPageBundle::internal_error.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/internal_error.html.twig");
    }
}
