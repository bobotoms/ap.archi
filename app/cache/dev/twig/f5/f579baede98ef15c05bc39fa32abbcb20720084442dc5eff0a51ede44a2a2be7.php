<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_50cffef284fa74681ea28cb2fa5a595c1f1e223fd52cedcea69968a49fd252cc extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_465044be8a0884307b324d1c47c85923ff33d4fa0be4438299f940a39176b857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465044be8a0884307b324d1c47c85923ff33d4fa0be4438299f940a39176b857->enter($__internal_465044be8a0884307b324d1c47c85923ff33d4fa0be4438299f940a39176b857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_465044be8a0884307b324d1c47c85923ff33d4fa0be4438299f940a39176b857->leave($__internal_465044be8a0884307b324d1c47c85923ff33d4fa0be4438299f940a39176b857_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_973c4313dcf542e10b2ead483f0223980765b25909c251496dc3a31ecbed48c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973c4313dcf542e10b2ead483f0223980765b25909c251496dc3a31ecbed48c9->enter($__internal_973c4313dcf542e10b2ead483f0223980765b25909c251496dc3a31ecbed48c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_973c4313dcf542e10b2ead483f0223980765b25909c251496dc3a31ecbed48c9->leave($__internal_973c4313dcf542e10b2ead483f0223980765b25909c251496dc3a31ecbed48c9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
