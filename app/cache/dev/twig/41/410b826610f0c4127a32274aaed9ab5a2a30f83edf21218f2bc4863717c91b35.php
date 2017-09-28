<?php

/* @SonataPage/PageAdmin/tree.html.twig */
class __TwigTemplate_9d36c23afa34ef9c8fe7b40c74343d1de6e3f6cf06573c7c18197cbc61615acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataPage/PageAdmin/tree.html.twig", 12);
        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_468c7d16ca34a839a2dfc2adea33f906a920c29603573653d6cbc4a4b1b4d3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468c7d16ca34a839a2dfc2adea33f906a920c29603573653d6cbc4a4b1b4d3c5->enter($__internal_468c7d16ca34a839a2dfc2adea33f906a920c29603573653d6cbc4a4b1b4d3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/PageAdmin/tree.html.twig"));

        // line 14
        $context["tree"] = $this;
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_468c7d16ca34a839a2dfc2adea33f906a920c29603573653d6cbc4a4b1b4d3c5->leave($__internal_468c7d16ca34a839a2dfc2adea33f906a920c29603573653d6cbc4a4b1b4d3c5_prof);

    }

    // line 36
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_52d0c8014c041afcaf4511604ca7aa6da647c0293dc6a68ab5b1e0830b51378a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d0c8014c041afcaf4511604ca7aa6da647c0293dc6a68ab5b1e0830b51378a->enter($__internal_52d0c8014c041afcaf4511604ca7aa6da647c0293dc6a68ab5b1e0830b51378a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 37
        echo "    ";
        $this->loadTemplate("SonataPageBundle:PageAdmin:list_tab_menu.html.twig", "@SonataPage/PageAdmin/tree.html.twig", 37)->display(array("mode" => "tree", "action" =>         // line 39
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "admin" =>         // line 40
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "currentSite" =>         // line 41
(isset($context["currentSite"]) ? $context["currentSite"] : $this->getContext($context, "currentSite"))));
        
        $__internal_52d0c8014c041afcaf4511604ca7aa6da647c0293dc6a68ab5b1e0830b51378a->leave($__internal_52d0c8014c041afcaf4511604ca7aa6da647c0293dc6a68ab5b1e0830b51378a_prof);

    }

    // line 45
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_cf385de6f5e2539a34d34d5e97430f782daf66664e81dcf9eadc60fc0431a3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf385de6f5e2539a34d34d5e97430f782daf66664e81dcf9eadc60fc0431a3d2->enter($__internal_cf385de6f5e2539a34d34d5e97430f782daf66664e81dcf9eadc60fc0431a3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 46
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pages.tree_site_label", array(), "SonataPageBundle"), "html", null, true);
        echo "
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                            <strong class=\"text-info\">";
        // line 54
        if (((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")) && (twig_length_filter($this->env, (isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites"))) > 0))) {
            // line 55
            if ((isset($context["currentSite"]) ? $context["currentSite"] : $this->getContext($context, "currentSite"))) {
                // line 56
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentSite"]) ? $context["currentSite"] : $this->getContext($context, "currentSite")), "name", array()), "html", null, true);
                echo "
                                    ";
            } else {
                // line 58
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pages.label_no_site_selected", array(), "SonataPageBundle"), "html", null, true);
                echo "
                                    ";
            }
        } else {
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pages.label_no_sites", array(), "SonataPageBundle"), "html", null, true);
        }
        // line 63
        echo "</strong> <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 67
            echo "                                <li>
                                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "tree", 1 => array("site" => $this->getAttribute($context["site"], "id", array()))), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 69
            if (((isset($context["currentSite"]) ? $context["currentSite"] : $this->getContext($context, "currentSite")) && ($this->getAttribute($context["site"], "id", array()) == $this->getAttribute((isset($context["currentSite"]) ? $context["currentSite"] : $this->getContext($context, "currentSite")), "id", array())))) {
                // line 70
                echo "                                            <span class=\"pull-right\">
                                                <i class=\"fa fa-check\"></i>
                                            </span>
                                        ";
            }
            // line 74
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "name", array()), "html", null, true);
            echo "
                                    </a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                        </ul>
                    </div>
                </h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 83
        echo $context["tree"]->getpages((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), true);
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_cf385de6f5e2539a34d34d5e97430f782daf66664e81dcf9eadc60fc0431a3d2->leave($__internal_cf385de6f5e2539a34d34d5e97430f782daf66664e81dcf9eadc60fc0431a3d2_prof);

    }

    // line 15
    public function getpages($__pages__ = null, $__admin__ = null, $__rootPages__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "pages" => $__pages__,
            "admin" => $__admin__,
            "rootPages" => $__rootPages__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_16c5ec2562ddcdde575a8d5cc9b491e5c4652b5a1e3bc5459a5255ce35fd0f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_16c5ec2562ddcdde575a8d5cc9b491e5c4652b5a1e3bc5459a5255ce35fd0f54->enter($__internal_16c5ec2562ddcdde575a8d5cc9b491e5c4652b5a1e3bc5459a5255ce35fd0f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "pages"));

            // line 16
            echo "    <ul";
            if ((isset($context["rootPages"]) ? $context["rootPages"] : $this->getContext($context, "rootPages"))) {
                echo " class=\"page-tree\"";
            }
            echo ">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                if (( !$this->getAttribute($context["page"], "internal", array()) && ( !$this->getAttribute($context["page"], "parent", array()) ||  !(isset($context["rootPages"]) ? $context["rootPages"] : $this->getContext($context, "rootPages"))))) {
                    // line 18
                    echo "            <li>
                <div class=\"page-tree__item\">
                    ";
                    // line 20
                    if ($this->getAttribute($context["page"], "parent", array())) {
                        echo "<i class=\"fa fa-caret-right\"></i>";
                    }
                    // line 21
                    echo "                    <i class=\"fa page-tree__item__is-hybrid fa-";
                    if ($this->getAttribute($context["page"], "isHybrid", array())) {
                        echo "gears";
                    } else {
                        echo "code";
                    }
                    echo "\"></i>
                    <a class=\"page-tree__item__edit\" href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
                    echo "</a>
                    <i class=\"text-muted\">";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", array()), "html", null, true);
                    echo "</i>
                    <a class=\"label label-default pull-right\" href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "compose", 1 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pages.compose_label", array(), "SonataPageBundle"), "html", null, true);
                    echo " <i class=\"fa fa-magic\"></i></a>
                    ";
                    // line 25
                    if ($this->getAttribute($context["page"], "edited", array())) {
                        echo "<span class=\"label label-warning pull-right\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pages.edited_label", array(), "SonataPageBundle"), "html", null, true);
                        echo "</span>";
                    }
                    // line 26
                    echo "                </div>
                ";
                    // line 27
                    $context["macro"] = $this;
                    // line 28
                    echo "                ";
                    if (twig_length_filter($this->env, $this->getAttribute($context["page"], "children", array()))) {
                        // line 29
                        echo "                    ";
                        echo $context["macro"]->getpages($this->getAttribute($context["page"], "children", array()), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), false);
                        echo "
                ";
                    }
                    // line 31
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </ul>
";
            
            $__internal_16c5ec2562ddcdde575a8d5cc9b491e5c4652b5a1e3bc5459a5255ce35fd0f54->leave($__internal_16c5ec2562ddcdde575a8d5cc9b491e5c4652b5a1e3bc5459a5255ce35fd0f54_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@SonataPage/PageAdmin/tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 33,  229 => 31,  223 => 29,  220 => 28,  218 => 27,  215 => 26,  209 => 25,  203 => 24,  199 => 23,  193 => 22,  184 => 21,  180 => 20,  176 => 18,  171 => 17,  164 => 16,  147 => 15,  135 => 83,  128 => 78,  117 => 74,  111 => 70,  109 => 69,  105 => 68,  102 => 67,  98 => 66,  93 => 63,  90 => 61,  83 => 58,  77 => 56,  75 => 55,  73 => 54,  67 => 50,  61 => 46,  55 => 45,  48 => 41,  47 => 40,  46 => 39,  44 => 37,  38 => 36,  31 => 12,  29 => 14,  11 => 12,);
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

{% import _self as tree %}
{% macro pages(pages, admin, rootPages) %}
    <ul{% if rootPages %} class=\"page-tree\"{% endif %}>
        {% for page in pages if not page.internal and (not page.parent or not rootPages)%}
            <li>
                <div class=\"page-tree__item\">
                    {% if page.parent %}<i class=\"fa fa-caret-right\"></i>{% endif %}
                    <i class=\"fa page-tree__item__is-hybrid fa-{% if page.isHybrid %}gears{% else %}code{% endif %}\"></i>
                    <a class=\"page-tree__item__edit\" href=\"{{ admin.generateObjectUrl('edit', page) }}\">{{ page.name }}</a>
                    <i class=\"text-muted\">{{ page.url }}</i>
                    <a class=\"label label-default pull-right\" href=\"{{ admin.generateObjectUrl('compose', page) }}\">{{ 'pages.compose_label'|trans({}, 'SonataPageBundle') }} <i class=\"fa fa-magic\"></i></a>
                    {% if page.edited %}<span class=\"label label-warning pull-right\">{{ 'pages.edited_label'|trans({}, 'SonataPageBundle') }}</span>{% endif %}
                </div>
                {% import _self as macro %}
                {% if page.children|length %}
                    {{ macro.pages(page.children, admin, false) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endmacro %}

{% block tab_menu %}
    {% include 'SonataPageBundle:PageAdmin:list_tab_menu.html.twig' with {
        'mode':        'tree',
        'action':      action,
        'admin':       admin,
        'currentSite': currentSite,
    } only %}
{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    {{ 'pages.tree_site_label'|trans({}, 'SonataPageBundle') }}
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                            <strong class=\"text-info\">
                                {%- if sites and sites|length > 0 -%}
                                    {% if currentSite %}
                                        {{ currentSite.name }}
                                    {% else %}
                                        {{ 'pages.label_no_site_selected'|trans({}, 'SonataPageBundle') }}
                                    {% endif %}
                                {%- else -%}
                                    {{ 'pages.label_no_sites'|trans({}, 'SonataPageBundle') }}
                                {%- endif -%}
                            </strong> <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            {% for site in sites %}
                                <li>
                                    <a href=\"{{ admin.generateUrl('tree', { 'site': site.id }) }}\">
                                        {% if currentSite and site.id == currentSite.id %}
                                            <span class=\"pull-right\">
                                                <i class=\"fa fa-check\"></i>
                                            </span>
                                        {% endif %}
                                        {{ site.name }}
                                    </a>
                                </li>
                            {% endfor%}
                        </ul>
                    </div>
                </h1>
            </div>
            <div class=\"box-content\">
                {{ tree.pages(pages, admin, true) }}
            </div>
        </div>
    </div>
{% endblock %}
", "@SonataPage/PageAdmin/tree.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\PageAdmin\\tree.html.twig");
    }
}
