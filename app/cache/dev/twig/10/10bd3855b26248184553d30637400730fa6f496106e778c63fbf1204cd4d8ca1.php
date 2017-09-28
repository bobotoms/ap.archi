<?php

/* SonataPageBundle:PageAdmin:select_site.html.twig */
class __TwigTemplate_e8eb927179e304473045ce3c30fbfe6bce33ab8685e3a4689fddc42a5bd08dd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:action.html.twig", "SonataPageBundle:PageAdmin:select_site.html.twig", 12);
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
        $__internal_29474e3d2efb561d9d0ca0dadde243088f6167ce364e7586cb63574d0f144cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29474e3d2efb561d9d0ca0dadde243088f6167ce364e7586cb63574d0f144cfa->enter($__internal_29474e3d2efb561d9d0ca0dadde243088f6167ce364e7586cb63574d0f144cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:PageAdmin:select_site.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29474e3d2efb561d9d0ca0dadde243088f6167ce364e7586cb63574d0f144cfa->leave($__internal_29474e3d2efb561d9d0ca0dadde243088f6167ce364e7586cb63574d0f144cfa_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_9920f81697c0e903c4eca252f8ab408860829efee66c46d6bb61b023fdb68bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9920f81697c0e903c4eca252f8ab408860829efee66c46d6bb61b023fdb68bb4->enter($__internal_9920f81697c0e903c4eca252f8ab408860829efee66c46d6bb61b023fdb68bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_site", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_9920f81697c0e903c4eca252f8ab408860829efee66c46d6bb61b023fdb68bb4->leave($__internal_9920f81697c0e903c4eca252f8ab408860829efee66c46d6bb61b023fdb68bb4_prof);

    }

    // line 16
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7136d90b8d077f2165abfb2f4473e7b3dbda0f150a1fd97e0e20711ddc196e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7136d90b8d077f2165abfb2f4473e7b3dbda0f150a1fd97e0e20711ddc196e58->enter($__internal_7136d90b8d077f2165abfb2f4473e7b3dbda0f150a1fd97e0e20711ddc196e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 17
        echo "
";
        
        $__internal_7136d90b8d077f2165abfb2f4473e7b3dbda0f150a1fd97e0e20711ddc196e58->leave($__internal_7136d90b8d077f2165abfb2f4473e7b3dbda0f150a1fd97e0e20711ddc196e58_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f69987e4cc5baa678d7c10a347395f0e29c2f362c12cf6840031b5d59838f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f69987e4cc5baa678d7c10a347395f0e29c2f362c12cf6840031b5d59838f8b->enter($__internal_4f69987e4cc5baa678d7c10a347395f0e29c2f362c12cf6840031b5d59838f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4f69987e4cc5baa678d7c10a347395f0e29c2f362c12cf6840031b5d59838f8b->leave($__internal_4f69987e4cc5baa678d7c10a347395f0e29c2f362c12cf6840031b5d59838f8b_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:select_site.html.twig";
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
", "SonataPageBundle:PageAdmin:select_site.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/PageAdmin/select_site.html.twig");
    }
}
