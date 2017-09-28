<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_364696100a53116d28518c6da9e9ecea204de2b49b44adf24d4a6d72573a214d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f5a2d9fdbab45715e6c2d17cfb1d737c74b1329ca3441115935723c3da4bf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5a2d9fdbab45715e6c2d17cfb1d737c74b1329ca3441115935723c3da4bf98->enter($__internal_4f5a2d9fdbab45715e6c2d17cfb1d737c74b1329ca3441115935723c3da4bf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f5a2d9fdbab45715e6c2d17cfb1d737c74b1329ca3441115935723c3da4bf98->leave($__internal_4f5a2d9fdbab45715e6c2d17cfb1d737c74b1329ca3441115935723c3da4bf98_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b5fa639e7ced353d9fa5da2ad64f1c260b9f312385bf9fcfadd600671c4ae80a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fa639e7ced353d9fa5da2ad64f1c260b9f312385bf9fcfadd600671c4ae80a->enter($__internal_b5fa639e7ced353d9fa5da2ad64f1c260b9f312385bf9fcfadd600671c4ae80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b5fa639e7ced353d9fa5da2ad64f1c260b9f312385bf9fcfadd600671c4ae80a->leave($__internal_b5fa639e7ced353d9fa5da2ad64f1c260b9f312385bf9fcfadd600671c4ae80a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
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
", "@SonataAdmin/CRUD/edit_file.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_file.html.twig");
    }
}
