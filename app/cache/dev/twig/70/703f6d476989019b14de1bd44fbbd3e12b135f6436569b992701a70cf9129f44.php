<?php

/* SonataPageBundle:SnapshotAdmin:create.html.twig */
class __TwigTemplate_cb17b5c69fd7031d5b200f5fdecbfee818d850575774b05d3e797c9688897629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:action.html.twig", "SonataPageBundle:SnapshotAdmin:create.html.twig", 12);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c34295b0f815fbe22888c900cccaa5f52797c6c7658fbefeed365a1dfaf335c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34295b0f815fbe22888c900cccaa5f52797c6c7658fbefeed365a1dfaf335c9->enter($__internal_c34295b0f815fbe22888c900cccaa5f52797c6c7658fbefeed365a1dfaf335c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:SnapshotAdmin:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c34295b0f815fbe22888c900cccaa5f52797c6c7658fbefeed365a1dfaf335c9->leave($__internal_c34295b0f815fbe22888c900cccaa5f52797c6c7658fbefeed365a1dfaf335c9_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ff0d9423e6e7dd2526741b8db34a79e693a8fa119a9322383ba0644a9d41105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff0d9423e6e7dd2526741b8db34a79e693a8fa119a9322383ba0644a9d41105->enter($__internal_3ff0d9423e6e7dd2526741b8db34a79e693a8fa119a9322383ba0644a9d41105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create_snapshot", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_3ff0d9423e6e7dd2526741b8db34a79e693a8fa119a9322383ba0644a9d41105->leave($__internal_3ff0d9423e6e7dd2526741b8db34a79e693a8fa119a9322383ba0644a9d41105_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_1a674a89891ec2abc522fb438cb3e18ab97f2818a27e0302915fe5552947e948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a674a89891ec2abc522fb438cb3e18ab97f2818a27e0302915fe5552947e948->enter($__internal_1a674a89891ec2abc522fb438cb3e18ab97f2818a27e0302915fe5552947e948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h4 class=\"box-title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_create_snapshot", array(), "SonataPageBundle"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
        echo "\" method=\"POST\">
                    ";
        // line 24
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array(), "method")) {
            // line 25
            echo "                        <div style=\"display:none\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "</div>
                    ";
        } else {
            // line 27
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
                    ";
        }
        // line 29
        echo "
                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button_create_snapshot", array(), "SonataPageBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 32
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 33
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or_list", array(), "SonataPageBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\"></i> ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 39
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_1a674a89891ec2abc522fb438cb3e18ab97f2818a27e0302915fe5552947e948->leave($__internal_1a674a89891ec2abc522fb438cb3e18ab97f2818a27e0302915fe5552947e948_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:SnapshotAdmin:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 39,  102 => 36,  98 => 35,  92 => 33,  90 => 32,  85 => 30,  82 => 29,  76 => 27,  70 => 25,  68 => 24,  64 => 23,  58 => 20,  53 => 17,  47 => 16,  35 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:action.html.twig' %}

{% block title %}{{ 'title_create_snapshot'|trans({}, 'SonataPageBundle') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h4 class=\"box-title\">{{ 'message_create_snapshot'|trans({}, 'SonataPageBundle') }}</h4>
            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"{{ admin.generateUrl('create') }}\" method=\"POST\">
                    {% if admin.isChild() %}
                        <div style=\"display:none\">{{ form_rest(form) }}</div>
                    {% else %}
                        {{ form_rest(form) }}
                    {% endif %}

                    <button type=\"submit\" class=\"btn btn-danger\">{{ 'button_create_snapshot'|trans({}, 'SonataPageBundle') }}</button>

                    {% if admin.hasRoute('list') and admin.isGranted('LIST') %}
                        {{ 'or_list'|trans({}, 'SonataPageBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateUrl('list') }}\">
                            <i class=\"fa fa-th-list\"></i> {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
                        </a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataPageBundle:SnapshotAdmin:create.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/SnapshotAdmin/create.html.twig");
    }
}
