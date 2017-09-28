<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_f2590a6ae27ba70e9c940320582077f29593446cefa2d933f461ed6b43cc0d09 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_324dfce737acdd40d752f64311c4f7c61a386c220c1fb5da41ac72e724b99618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324dfce737acdd40d752f64311c4f7c61a386c220c1fb5da41ac72e724b99618->enter($__internal_324dfce737acdd40d752f64311c4f7c61a386c220c1fb5da41ac72e724b99618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_324dfce737acdd40d752f64311c4f7c61a386c220c1fb5da41ac72e724b99618->leave($__internal_324dfce737acdd40d752f64311c4f7c61a386c220c1fb5da41ac72e724b99618_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_43559748b81a222dd4797ac10134ff4260b442144df5d9d1a0b1f4b6f642aaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43559748b81a222dd4797ac10134ff4260b442144df5d9d1a0b1f4b6f642aaea->enter($__internal_43559748b81a222dd4797ac10134ff4260b442144df5d9d1a0b1f4b6f642aaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_43559748b81a222dd4797ac10134ff4260b442144df5d9d1a0b1f4b6f642aaea->leave($__internal_43559748b81a222dd4797ac10134ff4260b442144df5d9d1a0b1f4b6f642aaea_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
