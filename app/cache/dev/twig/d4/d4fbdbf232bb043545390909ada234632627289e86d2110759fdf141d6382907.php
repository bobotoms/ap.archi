<?php

/* @SonataPage/SiteAdmin/create_snapshots.html.twig */
class __TwigTemplate_9f77e896bcc9285c75e137a4b44accba64ac1a1397b42b4a2ecffcf6fa662543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:action.html.twig", "@SonataPage/SiteAdmin/create_snapshots.html.twig", 12);
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
        $__internal_a888825aa34a771fa27ab14b24286c0a6d1621d4264c06d6e12c4612dd835d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a888825aa34a771fa27ab14b24286c0a6d1621d4264c06d6e12c4612dd835d56->enter($__internal_a888825aa34a771fa27ab14b24286c0a6d1621d4264c06d6e12c4612dd835d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/SiteAdmin/create_snapshots.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a888825aa34a771fa27ab14b24286c0a6d1621d4264c06d6e12c4612dd835d56->leave($__internal_a888825aa34a771fa27ab14b24286c0a6d1621d4264c06d6e12c4612dd835d56_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe346b9fa713caeeca528a3223908fda91e518d4a82d17de9bfd638e19953579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe346b9fa713caeeca528a3223908fda91e518d4a82d17de9bfd638e19953579->enter($__internal_fe346b9fa713caeeca528a3223908fda91e518d4a82d17de9bfd638e19953579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create_snapshots", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_fe346b9fa713caeeca528a3223908fda91e518d4a82d17de9bfd638e19953579->leave($__internal_fe346b9fa713caeeca528a3223908fda91e518d4a82d17de9bfd638e19953579_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_f27ede31781c77b5181ef2c1f7d0a8c22aa2d9fede62e32b0bbce28d74f5f20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27ede31781c77b5181ef2c1f7d0a8c22aa2d9fede62e32b0bbce28d74f5f20c->enter($__internal_f27ede31781c77b5181ef2c1f7d0a8c22aa2d9fede62e32b0bbce28d74f5f20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h4 class=\"box-title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_create_snapshots", array("%site%" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "name", array())), "SonataPageBundle"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "snapshots", 1 => array("id" => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">

                    <button class=\"btn btn-danger\" type=\"submit\" name=\"create\">
                        <i class=\"fa fa-save\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("button_create_snapshots", array(), "SonataPageBundle"), "html", null, true);
        echo "
                    </button>

                    ";
        // line 29
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 30
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or_list", array(), "SonataPageBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\"></i> ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 36
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_f27ede31781c77b5181ef2c1f7d0a8c22aa2d9fede62e32b0bbce28d74f5f20c->leave($__internal_f27ede31781c77b5181ef2c1f7d0a8c22aa2d9fede62e32b0bbce28d74f5f20c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/SiteAdmin/create_snapshots.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 36,  88 => 33,  84 => 32,  78 => 30,  76 => 29,  70 => 26,  64 => 23,  58 => 20,  53 => 17,  47 => 16,  35 => 14,  11 => 12,);
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

{% block title %}{{ 'title_create_snapshots'|trans({}, 'SonataPageBundle') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h4 class=\"box-title\">{{ \"message_create_snapshots\"|trans({'%site%': object.name }, 'SonataPageBundle') }}</h4>
            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"{{ admin.generateUrl('snapshots', {'id': object.id}) }}\" method=\"POST\">

                    <button class=\"btn btn-danger\" type=\"submit\" name=\"create\">
                        <i class=\"fa fa-save\"></i> {{ 'button_create_snapshots'|trans({}, 'SonataPageBundle') }}
                    </button>

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
", "@SonataPage/SiteAdmin/create_snapshots.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\SiteAdmin\\create_snapshots.html.twig");
    }
}
