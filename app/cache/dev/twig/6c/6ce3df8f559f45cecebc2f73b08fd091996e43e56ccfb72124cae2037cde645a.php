<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_4b26df1f68986823f1461a8e094deff59f49b0ba6a666b1b40bfaafdb9fc5d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec40be5b43b9ad3eb1104907b6ed68e34fc649036bbcf8bc944e84975581986a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec40be5b43b9ad3eb1104907b6ed68e34fc649036bbcf8bc944e84975581986a->enter($__internal_ec40be5b43b9ad3eb1104907b6ed68e34fc649036bbcf8bc944e84975581986a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec40be5b43b9ad3eb1104907b6ed68e34fc649036bbcf8bc944e84975581986a->leave($__internal_ec40be5b43b9ad3eb1104907b6ed68e34fc649036bbcf8bc944e84975581986a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1739a544337232364219068ec279b330230b77035b8b407bf83ebecc8c4c0e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1739a544337232364219068ec279b330230b77035b8b407bf83ebecc8c4c0e61->enter($__internal_1739a544337232364219068ec279b330230b77035b8b407bf83ebecc8c4c0e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_1739a544337232364219068ec279b330230b77035b8b407bf83ebecc8c4c0e61->leave($__internal_1739a544337232364219068ec279b330230b77035b8b407bf83ebecc8c4c0e61_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
