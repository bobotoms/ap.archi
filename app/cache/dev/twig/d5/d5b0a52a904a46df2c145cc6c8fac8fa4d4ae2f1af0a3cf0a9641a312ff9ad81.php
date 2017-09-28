<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_58a1097ce1c285bdcd54f4903aba72bfc1222a228b32dca8c42f0418d364e7f8 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6269b3ee400f2bcf7b3072b650e63ad0c4df390fc78ecd0798d63c4dbbf2deb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6269b3ee400f2bcf7b3072b650e63ad0c4df390fc78ecd0798d63c4dbbf2deb0->enter($__internal_6269b3ee400f2bcf7b3072b650e63ad0c4df390fc78ecd0798d63c4dbbf2deb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6269b3ee400f2bcf7b3072b650e63ad0c4df390fc78ecd0798d63c4dbbf2deb0->leave($__internal_6269b3ee400f2bcf7b3072b650e63ad0c4df390fc78ecd0798d63c4dbbf2deb0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_13b1e7c0ec480d30ac3dff5277a110d6f64e8bd5fcf73d431a5a942562e2286d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b1e7c0ec480d30ac3dff5277a110d6f64e8bd5fcf73d431a5a942562e2286d->enter($__internal_13b1e7c0ec480d30ac3dff5277a110d6f64e8bd5fcf73d431a5a942562e2286d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_13b1e7c0ec480d30ac3dff5277a110d6f64e8bd5fcf73d431a5a942562e2286d->leave($__internal_13b1e7c0ec480d30ac3dff5277a110d6f64e8bd5fcf73d431a5a942562e2286d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
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
", "@SonataAdmin/CRUD/edit_text.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_text.html.twig");
    }
}
