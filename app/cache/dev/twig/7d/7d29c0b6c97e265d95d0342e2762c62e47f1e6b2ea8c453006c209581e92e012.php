<?php

/* SonataPageBundle:SiteAdmin:create_snapshots.html.twig */
class __TwigTemplate_7de895b44ada0d5c2ecd46eef33dfa885b24e8d64b15612d09cdee43d8d7b6c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:action.html.twig", "SonataPageBundle:SiteAdmin:create_snapshots.html.twig", 12);
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
        $__internal_f79dd0143fc3689d4bb96c12715cd825d0884a39bf44f1d33210ef4f271b7648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79dd0143fc3689d4bb96c12715cd825d0884a39bf44f1d33210ef4f271b7648->enter($__internal_f79dd0143fc3689d4bb96c12715cd825d0884a39bf44f1d33210ef4f271b7648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:SiteAdmin:create_snapshots.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f79dd0143fc3689d4bb96c12715cd825d0884a39bf44f1d33210ef4f271b7648->leave($__internal_f79dd0143fc3689d4bb96c12715cd825d0884a39bf44f1d33210ef4f271b7648_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_91ba751f57764b0ac0853fe40ff241a3041e22814b5dea0a31367a7fb3d03756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ba751f57764b0ac0853fe40ff241a3041e22814b5dea0a31367a7fb3d03756->enter($__internal_91ba751f57764b0ac0853fe40ff241a3041e22814b5dea0a31367a7fb3d03756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create_snapshots", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_91ba751f57764b0ac0853fe40ff241a3041e22814b5dea0a31367a7fb3d03756->leave($__internal_91ba751f57764b0ac0853fe40ff241a3041e22814b5dea0a31367a7fb3d03756_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_72f059b2ebeaa95c0603cbbfc4f5a2d2a507a18cc4a15dd460829ccdf583d4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f059b2ebeaa95c0603cbbfc4f5a2d2a507a18cc4a15dd460829ccdf583d4a3->enter($__internal_72f059b2ebeaa95c0603cbbfc4f5a2d2a507a18cc4a15dd460829ccdf583d4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_72f059b2ebeaa95c0603cbbfc4f5a2d2a507a18cc4a15dd460829ccdf583d4a3->leave($__internal_72f059b2ebeaa95c0603cbbfc4f5a2d2a507a18cc4a15dd460829ccdf583d4a3_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:SiteAdmin:create_snapshots.html.twig";
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
", "SonataPageBundle:SiteAdmin:create_snapshots.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/SiteAdmin/create_snapshots.html.twig");
    }
}
