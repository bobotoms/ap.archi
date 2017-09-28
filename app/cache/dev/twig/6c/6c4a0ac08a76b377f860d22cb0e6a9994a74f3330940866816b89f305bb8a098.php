<?php

/* SonataPageBundle:PageAdmin:list.html.twig */
class __TwigTemplate_1a0483bef04468a3a7954cf8972d3c014e312c326e51bed6cf0298ab49b6bf8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataPageBundle:PageAdmin:list.html.twig", 12);
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
        $__internal_e033f26ade41dd57084626d57d47060f2774934c5c8b3b45924d0e055006547f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e033f26ade41dd57084626d57d47060f2774934c5c8b3b45924d0e055006547f->enter($__internal_e033f26ade41dd57084626d57d47060f2774934c5c8b3b45924d0e055006547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:PageAdmin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e033f26ade41dd57084626d57d47060f2774934c5c8b3b45924d0e055006547f->leave($__internal_e033f26ade41dd57084626d57d47060f2774934c5c8b3b45924d0e055006547f_prof);

    }

    // line 14
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_dcb17c414a601202efdd456fed7396c62a44ae8a29d86ec63b7fce6d20276c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb17c414a601202efdd456fed7396c62a44ae8a29d86ec63b7fce6d20276c6d->enter($__internal_dcb17c414a601202efdd456fed7396c62a44ae8a29d86ec63b7fce6d20276c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataPageBundle:PageAdmin:list_tab_menu.html.twig", "SonataPageBundle:PageAdmin:list.html.twig", 15)->display(array("mode" => "list", "action" =>         // line 17
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "admin" =>         // line 18
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))));
        
        $__internal_dcb17c414a601202efdd456fed7396c62a44ae8a29d86ec63b7fce6d20276c6d->leave($__internal_dcb17c414a601202efdd456fed7396c62a44ae8a29d86ec63b7fce6d20276c6d_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:list.html.twig";
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
{% endblock %}", "SonataPageBundle:PageAdmin:list.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/PageAdmin/list.html.twig");
    }
}
