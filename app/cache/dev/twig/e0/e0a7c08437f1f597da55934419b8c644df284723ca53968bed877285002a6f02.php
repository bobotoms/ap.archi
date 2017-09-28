<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_e0f2dce7f5e4dcdca6fe0990dba59e6ade2a063ce1e5c644aaf38707ca90ea0d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3899464776bbb59e2530590c4851fed2f8dd0a62555623b52af9cfde7600dfa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3899464776bbb59e2530590c4851fed2f8dd0a62555623b52af9cfde7600dfa4->enter($__internal_3899464776bbb59e2530590c4851fed2f8dd0a62555623b52af9cfde7600dfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3899464776bbb59e2530590c4851fed2f8dd0a62555623b52af9cfde7600dfa4->leave($__internal_3899464776bbb59e2530590c4851fed2f8dd0a62555623b52af9cfde7600dfa4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6f068e3ed91823f1c6b3ab4c9552b9a1abe44b0e54902b02253f610eddf634d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f068e3ed91823f1c6b3ab4c9552b9a1abe44b0e54902b02253f610eddf634d4->enter($__internal_6f068e3ed91823f1c6b3ab4c9552b9a1abe44b0e54902b02253f610eddf634d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_6f068e3ed91823f1c6b3ab4c9552b9a1abe44b0e54902b02253f610eddf634d4->leave($__internal_6f068e3ed91823f1c6b3ab4c9552b9a1abe44b0e54902b02253f610eddf634d4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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
", "@SonataAdmin/CRUD/edit_integer.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_integer.html.twig");
    }
}
