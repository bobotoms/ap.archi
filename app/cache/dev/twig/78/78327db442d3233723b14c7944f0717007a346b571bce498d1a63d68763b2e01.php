<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_24e400e1c654e165e587b71956da6cab2a5db643954ef7b693160245f2e84d46 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_172b13217075e2f6be0d99289df92a66f86c4a11157a9c15d1f642bd76a05ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172b13217075e2f6be0d99289df92a66f86c4a11157a9c15d1f642bd76a05ed5->enter($__internal_172b13217075e2f6be0d99289df92a66f86c4a11157a9c15d1f642bd76a05ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_172b13217075e2f6be0d99289df92a66f86c4a11157a9c15d1f642bd76a05ed5->leave($__internal_172b13217075e2f6be0d99289df92a66f86c4a11157a9c15d1f642bd76a05ed5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_71b328df90848469af52720ae30ac53be0226aa1c2ef26f797a4804dade8dc0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b328df90848469af52720ae30ac53be0226aa1c2ef26f797a4804dade8dc0d->enter($__internal_71b328df90848469af52720ae30ac53be0226aa1c2ef26f797a4804dade8dc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_71b328df90848469af52720ae30ac53be0226aa1c2ef26f797a4804dade8dc0d->leave($__internal_71b328df90848469af52720ae30ac53be0226aa1c2ef26f797a4804dade8dc0d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_string.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
