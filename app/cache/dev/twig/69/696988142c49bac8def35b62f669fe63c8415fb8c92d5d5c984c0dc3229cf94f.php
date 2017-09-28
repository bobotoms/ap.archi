<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_ded6050731103947e090bb01590f1a2ebeecee619653c57116245805edd2c7b4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d79517c41cc1ed1a55c7ce1c2d452681c9db99fe279adcd17576951a529b855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d79517c41cc1ed1a55c7ce1c2d452681c9db99fe279adcd17576951a529b855->enter($__internal_2d79517c41cc1ed1a55c7ce1c2d452681c9db99fe279adcd17576951a529b855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d79517c41cc1ed1a55c7ce1c2d452681c9db99fe279adcd17576951a529b855->leave($__internal_2d79517c41cc1ed1a55c7ce1c2d452681c9db99fe279adcd17576951a529b855_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_19e6530935a2d6341ed32aa66ae1d2a7c74a149fbd3f0761b7c360e65c8ce78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e6530935a2d6341ed32aa66ae1d2a7c74a149fbd3f0761b7c360e65c8ce78a->enter($__internal_19e6530935a2d6341ed32aa66ae1d2a7c74a149fbd3f0761b7c360e65c8ce78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_19e6530935a2d6341ed32aa66ae1d2a7c74a149fbd3f0761b7c360e65c8ce78a->leave($__internal_19e6530935a2d6341ed32aa66ae1d2a7c74a149fbd3f0761b7c360e65c8ce78a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
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
", "@SonataAdmin/CRUD/edit_array.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_array.html.twig");
    }
}
