<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_ea7e162ab9ad8c326ac6327d83cbdc4c78d6e8a5e01ad96950eeef77152927c5 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f4d58f8dd405d370e682dd94a3366b6f34762fdaf8355ff5361a959fd0b41d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4d58f8dd405d370e682dd94a3366b6f34762fdaf8355ff5361a959fd0b41d6->enter($__internal_9f4d58f8dd405d370e682dd94a3366b6f34762fdaf8355ff5361a959fd0b41d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f4d58f8dd405d370e682dd94a3366b6f34762fdaf8355ff5361a959fd0b41d6->leave($__internal_9f4d58f8dd405d370e682dd94a3366b6f34762fdaf8355ff5361a959fd0b41d6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ebf549c9a9f99f91aa42736853e1b6634a49a8b58b50da4e08da42c88780a67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf549c9a9f99f91aa42736853e1b6634a49a8b58b50da4e08da42c88780a67a->enter($__internal_ebf549c9a9f99f91aa42736853e1b6634a49a8b58b50da4e08da42c88780a67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ebf549c9a9f99f91aa42736853e1b6634a49a8b58b50da4e08da42c88780a67a->leave($__internal_ebf549c9a9f99f91aa42736853e1b6634a49a8b58b50da4e08da42c88780a67a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
", "@SonataAdmin/CRUD/edit_string.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_string.html.twig");
    }
}
