<?php

/* @SonataAdmin/CRUD/list_array.html.twig */
class __TwigTemplate_b3d79e668f0017ff8e8afa7ecb7881448ce2dc6c8f8f92536c91e152b6363467 extends Twig_Template
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
        // line 13
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3e881796f4570a491ed26e08411c44cd96a58a2172868836758185243fd4192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e881796f4570a491ed26e08411c44cd96a58a2172868836758185243fd4192->enter($__internal_e3e881796f4570a491ed26e08411c44cd96a58a2172868836758185243fd4192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        // line 11
        $context["list"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "@SonataAdmin/CRUD/list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3e881796f4570a491ed26e08411c44cd96a58a2172868836758185243fd4192->leave($__internal_e3e881796f4570a491ed26e08411c44cd96a58a2172868836758185243fd4192_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_e98c7e0c7bbc0922fd8c55364b12d07181dc564d41e0b86e5709630a085b3fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98c7e0c7bbc0922fd8c55364b12d07181dc564d41e0b86e5709630a085b3fcf->enter($__internal_e98c7e0c7bbc0922fd8c55364b12d07181dc564d41e0b86e5709630a085b3fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["list"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "inline", array())));
        echo "
";
        
        $__internal_e98c7e0c7bbc0922fd8c55364b12d07181dc564d41e0b86e5709630a085b3fcf->leave($__internal_e98c7e0c7bbc0922fd8c55364b12d07181dc564d41e0b86e5709630a085b3fcf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  36 => 15,  29 => 13,  27 => 11,  18 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as list %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value, field_description.options.inline is not defined or field_description.options.inline) }}
{% endblock %}
", "@SonataAdmin/CRUD/list_array.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_array.html.twig");
    }
}
