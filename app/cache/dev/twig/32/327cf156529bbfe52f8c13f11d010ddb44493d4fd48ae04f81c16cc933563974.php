<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_f3845dc1711d092e132a63e9857cab0276c553339b13bca9e79dfdc35bf510f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bafd486a72065d735fdad9cf8d555f55403f2204bf325a87026a3be090a386a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafd486a72065d735fdad9cf8d555f55403f2204bf325a87026a3be090a386a0->enter($__internal_bafd486a72065d735fdad9cf8d555f55403f2204bf325a87026a3be090a386a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bafd486a72065d735fdad9cf8d555f55403f2204bf325a87026a3be090a386a0->leave($__internal_bafd486a72065d735fdad9cf8d555f55403f2204bf325a87026a3be090a386a0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d5ca6a9a6c1ec8d569126b27949d2763c1a4e6c44e45a1581878a81b0d86d623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ca6a9a6c1ec8d569126b27949d2763c1a4e6c44e45a1581878a81b0d86d623->enter($__internal_d5ca6a9a6c1ec8d569126b27949d2763c1a4e6c44e45a1581878a81b0d86d623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_d5ca6a9a6c1ec8d569126b27949d2763c1a4e6c44e45a1581878a81b0d86d623->leave($__internal_d5ca6a9a6c1ec8d569126b27949d2763c1a4e6c44e45a1581878a81b0d86d623_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
