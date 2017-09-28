<?php

/* @SonataPage/PageAdmin/list.html.twig */
class __TwigTemplate_bdf87a4cb9abe69674a0112cee90e3c5511915252e0bf24c61fc18dde84d8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataPage/PageAdmin/list.html.twig", 12);
        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db76dec662d20cf75bd34bcafad035b068912d1d00f7cd7903fa030231cb7146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db76dec662d20cf75bd34bcafad035b068912d1d00f7cd7903fa030231cb7146->enter($__internal_db76dec662d20cf75bd34bcafad035b068912d1d00f7cd7903fa030231cb7146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/PageAdmin/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db76dec662d20cf75bd34bcafad035b068912d1d00f7cd7903fa030231cb7146->leave($__internal_db76dec662d20cf75bd34bcafad035b068912d1d00f7cd7903fa030231cb7146_prof);

    }

    // line 14
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_a97fe08f341d17723f3d0aaa3b89c266044900bb0ca4d3ec0f0bc34f6e48713d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97fe08f341d17723f3d0aaa3b89c266044900bb0ca4d3ec0f0bc34f6e48713d->enter($__internal_a97fe08f341d17723f3d0aaa3b89c266044900bb0ca4d3ec0f0bc34f6e48713d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataPageBundle:PageAdmin:list_tab_menu.html.twig", "@SonataPage/PageAdmin/list.html.twig", 15)->display(array("mode" => "list", "action" =>         // line 17
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "admin" =>         // line 18
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))));
        
        $__internal_a97fe08f341d17723f3d0aaa3b89c266044900bb0ca4d3ec0f0bc34f6e48713d->leave($__internal_a97fe08f341d17723f3d0aaa3b89c266044900bb0ca4d3ec0f0bc34f6e48713d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/PageAdmin/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 18,  42 => 17,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}

{% block tab_menu %}
    {% include 'SonataPageBundle:PageAdmin:list_tab_menu.html.twig' with {
        'mode':   'list',
        'action': action,
        'admin':  admin
    } only %}
{% endblock %}", "@SonataPage/PageAdmin/list.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\PageAdmin\\list.html.twig");
    }
}
