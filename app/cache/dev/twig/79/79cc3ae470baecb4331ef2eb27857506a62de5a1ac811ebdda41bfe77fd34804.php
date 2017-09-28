<?php

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_307188d71a84bc9f63f86035731ed43344fffc4dbcfb3acf8c3d8db34ede18df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataMediaBundle:MediaAdmin:list.html.twig", 12);
        $this->blocks = array(
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcdefdd88f0b2b36e1e83a199c5b6509ce72d30205ce7a56f48d8ec0c527fe64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdefdd88f0b2b36e1e83a199c5b6509ce72d30205ce7a56f48d8ec0c527fe64->enter($__internal_bcdefdd88f0b2b36e1e83a199c5b6509ce72d30205ce7a56f48d8ec0c527fe64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataMediaBundle:MediaAdmin:list.html.twig"));

        // line 14
        $context["tree"] = $this;
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcdefdd88f0b2b36e1e83a199c5b6509ce72d30205ce7a56f48d8ec0c527fe64->leave($__internal_bcdefdd88f0b2b36e1e83a199c5b6509ce72d30205ce7a56f48d8ec0c527fe64_prof);

    }

    // line 40
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_0de5c076646b13f3456ee0b46de91455eae1b3181b257936c64b6cc84e96f7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de5c076646b13f3456ee0b46de91455eae1b3181b257936c64b6cc84e96f7e2->enter($__internal_0de5c076646b13f3456ee0b46de91455eae1b3181b257936c64b6cc84e96f7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 41
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datagrid"]) ? $context["datagrid"] : null), "values", array(), "any", false, true), "category", array(), "array", false, true), "value", array(), "array", true, true)) {
            // line 42
            echo "        <div class=\"col-xs-6 col-md-3\">
            ";
            // line 43
            echo $context["tree"]->getnavigate_child(array(0 => (isset($context["root_category"]) ? $context["root_category"] : $this->getContext($context, "root_category"))), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), true, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datagrid"]) ? $context["datagrid"] : $this->getContext($context, "datagrid")), "values", array()), "category", array(), "array"), "value", array(), "array"), 1);
            echo "
        </div>
        <div class=\"col-xs-12 col-md-9 no-padding\">
            ";
            // line 46
            $this->displayParentBlock("list_table", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 49
            echo "        ";
            $this->displayParentBlock("list_table", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_0de5c076646b13f3456ee0b46de91455eae1b3181b257936c64b6cc84e96f7e2->leave($__internal_0de5c076646b13f3456ee0b46de91455eae1b3181b257936c64b6cc84e96f7e2_prof);

    }

    // line 16
    public function getnavigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__current_category_id__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "current_category_id" => $__current_category_id__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_184ff5020bcc41c108df5d1eb142ae812551342aa7fcd50287e41d45fff24cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_184ff5020bcc41c108df5d1eb142ae812551342aa7fcd50287e41d45fff24cdb->enter($__internal_184ff5020bcc41c108df5d1eb142ae812551342aa7fcd50287e41d45fff24cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "navigate_child"));

            // line 17
            echo "    ";
            $context["tree"] = $this;
            // line 18
            echo "
    ";
            // line 19
            if (((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root")) && (twig_length_filter($this->env, (isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection"))) == 0))) {
                // line 20
                echo "        <div>
            <p class=\"bg-warning\">";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("warning_no_category", array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            // line 24
            echo "    <ul";
            if ((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root"))) {
                echo " class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"";
            }
            echo ">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                if ( !(null === $context["element"])) {
                    // line 26
                    echo "            <li>
                <div class=\"sonata-tree__item";
                    // line 27
                    if (($this->getAttribute($context["element"], "id", array()) == (isset($context["current_category_id"]) ? $context["current_category_id"] : $this->getContext($context, "current_category_id")))) {
                        echo " is-active";
                    }
                    echo "\"";
                    if (((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) < 2)) {
                        echo " data-treeview-toggled";
                    }
                    echo ">
                    ";
                    // line 28
                    if (($this->getAttribute($context["element"], "parent", array()) || (isset($context["root"]) ? $context["root"] : $this->getContext($context, "root")))) {
                        echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                    }
                    // line 29
                    echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("category" => $this->getAttribute($context["element"], "id", array())))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                    echo "</a>
                </div>

                ";
                    // line 32
                    if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                        // line 33
                        echo "                    ";
                        echo $context["tree"]->getnavigate_child($this->getAttribute($context["element"], "children", array()), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), false, (isset($context["current_category_id"]) ? $context["current_category_id"] : $this->getContext($context, "current_category_id")), ((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) + 1));
                        echo "
                ";
                    }
                    // line 35
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";
            
            $__internal_184ff5020bcc41c108df5d1eb142ae812551342aa7fcd50287e41d45fff24cdb->leave($__internal_184ff5020bcc41c108df5d1eb142ae812551342aa7fcd50287e41d45fff24cdb_prof);

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
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 37,  154 => 35,  148 => 33,  146 => 32,  137 => 29,  133 => 28,  123 => 27,  120 => 26,  115 => 25,  108 => 24,  102 => 21,  99 => 20,  97 => 19,  94 => 18,  91 => 17,  72 => 16,  61 => 49,  55 => 46,  49 => 43,  46 => 42,  43 => 41,  37 => 40,  30 => 12,  28 => 14,  11 => 12,);
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

{% macro navigate_child(collection, admin, root, current_category_id, depth) %}
    {% import _self as tree %}

    {% if root and collection|length == 0 %}
        <div>
            <p class=\"bg-warning\">{{ 'warning_no_category'|trans({}, admin.translationdomain) }}</p>
        </div>
    {% endif %}
    <ul{% if root %} class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"{% endif %}>
        {% for element in collection if element is not null %}
            <li>
                <div class=\"sonata-tree__item{% if element.id == current_category_id %} is-active{% endif %}\"{% if depth < 2 %} data-treeview-toggled{% endif %}>
                    {% if element.parent or root %}<i class=\"fa fa-caret-right\" data-treeview-toggler></i>{% endif %}
                    <a class=\"sonata-tree__item__edit\" href=\"{{ url(app.request.attributes.get('_route'), app.request.query.all|merge({category: element.id})) }}\">{{ element.name }}</a>
                </div>

                {% if element.children|length %}
                    {{ tree.navigate_child(element.children, admin, false, current_category_id, depth + 1) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endmacro %}

{% block list_table %}
    {% if datagrid.values['category']['value'] is defined %}
        <div class=\"col-xs-6 col-md-3\">
            {{ tree.navigate_child([root_category], admin, true, datagrid.values['category']['value'], 1) }}
        </div>
        <div class=\"col-xs-12 col-md-9 no-padding\">
            {{ parent() }}
        </div>
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}
", "SonataMediaBundle:MediaAdmin:list.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle/Resources/views/MediaAdmin/list.html.twig");
    }
}
