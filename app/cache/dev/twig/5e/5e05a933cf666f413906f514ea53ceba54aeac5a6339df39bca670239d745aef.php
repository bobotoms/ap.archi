<?php

/* @SonataPage/PageAdmin/select_site.html.twig */
class __TwigTemplate_9d82a2964da97c9f0c7cbafb5835046766ecefa32d1c37fe66b42e5f51d84749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:action.html.twig", "@SonataPage/PageAdmin/select_site.html.twig", 12);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_654e2e2ad559f942e55d326050b9b9182cbd7f29cbae09e733ef20f276be5a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654e2e2ad559f942e55d326050b9b9182cbd7f29cbae09e733ef20f276be5a81->enter($__internal_654e2e2ad559f942e55d326050b9b9182cbd7f29cbae09e733ef20f276be5a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/PageAdmin/select_site.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_654e2e2ad559f942e55d326050b9b9182cbd7f29cbae09e733ef20f276be5a81->leave($__internal_654e2e2ad559f942e55d326050b9b9182cbd7f29cbae09e733ef20f276be5a81_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9c82a025dc14000b83ed81211cea972109fd09e33b1467bb016b43f258314f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c82a025dc14000b83ed81211cea972109fd09e33b1467bb016b43f258314f1->enter($__internal_c9c82a025dc14000b83ed81211cea972109fd09e33b1467bb016b43f258314f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_site", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_c9c82a025dc14000b83ed81211cea972109fd09e33b1467bb016b43f258314f1->leave($__internal_c9c82a025dc14000b83ed81211cea972109fd09e33b1467bb016b43f258314f1_prof);

    }

    // line 16
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ec55d1535387f80432130ee226b34beefcb2fd61ab64837d0d8d35b5a79a894c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec55d1535387f80432130ee226b34beefcb2fd61ab64837d0d8d35b5a79a894c->enter($__internal_ec55d1535387f80432130ee226b34beefcb2fd61ab64837d0d8d35b5a79a894c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 17
        echo "
";
        
        $__internal_ec55d1535387f80432130ee226b34beefcb2fd61ab64837d0d8d35b5a79a894c->leave($__internal_ec55d1535387f80432130ee226b34beefcb2fd61ab64837d0d8d35b5a79a894c_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_f870746e592143c91c6aa3098aadd68fb09af5fc3e37e0a2ccee51c30746e4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f870746e592143c91c6aa3098aadd68fb09af5fc3e37e0a2ccee51c30746e4c0->enter($__internal_f870746e592143c91c6aa3098aadd68fb09af5fc3e37e0a2ccee51c30746e4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "
    <h2>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_message_create_page", array(), "SonataPageBundle"), "html", null, true);
        echo "</h2>

    <p>
    ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_create_page", array(), "SonataPageBundle"), "html", null, true);
        echo "
    </p>

    ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites"))) > 0)) {
            // line 29
            echo "        <ul>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 31
                echo "                <li>
                    ";
                // line 32
                if (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) && ($this->getAttribute($context["site"], "id", array()) == $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id", array())))) {
                    // line 33
                    echo "                        <i class=\"fa fa-check\"></i>
                    ";
                }
                // line 35
                echo "
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("siteId" => $this->getAttribute($context["site"], "id", array()), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()))), "method"), "html", null, true);
                echo "\">
                    ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "name", array()), "html", null, true);
                echo "
                    </a>
                    - ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "url", array()), "html", null, true);
                echo "
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </ul>
    ";
        } else {
            // line 44
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pages.label_no_sites", array(), "SonataPageBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f870746e592143c91c6aa3098aadd68fb09af5fc3e37e0a2ccee51c30746e4c0->leave($__internal_f870746e592143c91c6aa3098aadd68fb09af5fc3e37e0a2ccee51c30746e4c0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/PageAdmin/select_site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 44,  122 => 42,  113 => 39,  108 => 37,  104 => 36,  101 => 35,  97 => 33,  95 => 32,  92 => 31,  88 => 30,  85 => 29,  83 => 28,  77 => 25,  71 => 22,  68 => 21,  62 => 20,  54 => 17,  48 => 16,  36 => 14,  11 => 12,);
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

{% block title %}{{ 'title_select_site'|trans({}, 'SonataPageBundle') }}{% endblock %}

{% block actions %}

{% endblock %}

{% block content %}

    <h2>{{ 'title_message_create_page'|trans({}, 'SonataPageBundle') }}</h2>

    <p>
    {{ 'message_create_page'|trans({}, 'SonataPageBundle')}}
    </p>

    {% if sites|length > 0 %}
        <ul>
            {% for site in sites %}
                <li>
                    {% if current and site.id == current.id %}
                        <i class=\"fa fa-check\"></i>
                    {% endif %}

                    <a href=\"{{ admin.generateUrl('create', {'siteId': site.id, 'uniqid': admin.uniqid}) }}\">
                    {{ site.name }}
                    </a>
                    - {{ site.url }}
                </li>
            {% endfor %}
        </ul>
    {% else %}
        {{ 'pages.label_no_sites'|trans({}, 'SonataPageBundle') }}
    {% endif %}
{% endblock %}
", "@SonataPage/PageAdmin/select_site.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\PageAdmin\\select_site.html.twig");
    }
}
