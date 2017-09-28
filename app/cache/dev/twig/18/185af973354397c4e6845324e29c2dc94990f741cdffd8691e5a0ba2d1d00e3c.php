<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_c3217847d7cd096358e5584536756144fa1774bb4615007fbc5a1f855b082876 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eae1327b8c8ea54407c2ff9e4160eec16db37d5a4da710f79aafde012300b607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae1327b8c8ea54407c2ff9e4160eec16db37d5a4da710f79aafde012300b607->enter($__internal_eae1327b8c8ea54407c2ff9e4160eec16db37d5a4da710f79aafde012300b607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eae1327b8c8ea54407c2ff9e4160eec16db37d5a4da710f79aafde012300b607->leave($__internal_eae1327b8c8ea54407c2ff9e4160eec16db37d5a4da710f79aafde012300b607_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ac453885792ae786315aaafd1ebc08d2e239c89b9fc7ac5266e8781323548afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac453885792ae786315aaafd1ebc08d2e239c89b9fc7ac5266e8781323548afa->enter($__internal_ac453885792ae786315aaafd1ebc08d2e239c89b9fc7ac5266e8781323548afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ac453885792ae786315aaafd1ebc08d2e239c89b9fc7ac5266e8781323548afa->leave($__internal_ac453885792ae786315aaafd1ebc08d2e239c89b9fc7ac5266e8781323548afa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
