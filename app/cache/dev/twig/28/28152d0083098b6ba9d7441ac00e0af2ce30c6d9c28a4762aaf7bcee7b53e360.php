<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_51ed261ed9206d500b23529fc7ac65a16610546e799fc57154902342675ccc97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1756a7bcb9d43c4c714a54816d6b3178ba885831daa744467b3157618e7ccede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1756a7bcb9d43c4c714a54816d6b3178ba885831daa744467b3157618e7ccede->enter($__internal_1756a7bcb9d43c4c714a54816d6b3178ba885831daa744467b3157618e7ccede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1756a7bcb9d43c4c714a54816d6b3178ba885831daa744467b3157618e7ccede->leave($__internal_1756a7bcb9d43c4c714a54816d6b3178ba885831daa744467b3157618e7ccede_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
