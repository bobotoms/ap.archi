<?php

/* SonataPageBundle:Page:breadcrumb.html.twig */
class __TwigTemplate_8c98b2ffbaf6a67bdcab4500412d4c2098fe77460541c54f9be7fcf58aabe231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6d501e6dce3437c9c2847ab105695389c1ca1ee7b796ea905c72b7b8939b38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d501e6dce3437c9c2847ab105695389c1ca1ee7b796ea905c72b7b8939b38a->enter($__internal_b6d501e6dce3437c9c2847ab105695389c1ca1ee7b796ea905c72b7b8939b38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Page:breadcrumb.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs"))) {
            // line 13
            echo "    <ul ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "container_attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 15
                echo "            <li ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "elements_attr", array()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 16
                if ( !$this->getAttribute($context["breadcrumb"], "isdynamic", array())) {
                    // line 17
                    echo "                    <a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($context["breadcrumb"]);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["breadcrumb"], "title", array())) ? ($this->getAttribute($context["breadcrumb"], "title", array())) : ($this->getAttribute($context["breadcrumb"], "name", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["breadcrumb"], "title", array())) ? ($this->getAttribute($context["breadcrumb"], "title", array())) : ($this->getAttribute($context["breadcrumb"], "name", array()))), "html", null, true);
                    echo "</a>";
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "separator", array());
                    echo "
                ";
                } else {
                    // line 19
                    echo "                    ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["breadcrumb"], "title", array())) ? ($this->getAttribute($context["breadcrumb"], "title", array())) : ($this->getAttribute($context["breadcrumb"], "name", array()))), "html", null, true);
                    echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "separator", array());
                    echo "
                ";
                }
                // line 21
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
        ";
            // line 24
            $context["li_attrs_class"] = (((($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "elements_attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "elements_attr", array(), "any", false, true), "class", array()), "")) : ("")) . " ") . $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "current_class", array()));
            // line 25
            echo "        ";
            $context["li_attrs"] = twig_array_merge($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "elements_attr", array()), array("class" => (isset($context["li_attrs_class"]) ? $context["li_attrs_class"] : $this->getContext($context, "li_attrs_class"))));
            // line 26
            echo "        <li ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["li_attrs"]) ? $context["li_attrs"] : $this->getContext($context, "li_attrs")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 27
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "isdynamic", array())) {
                // line 28
                echo "                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) ? ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) ? ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()))), "html", null, true);
                echo "</a>";
                echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "last_separator", array());
                echo "
            ";
            } else {
                // line 30
                echo "                ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) ? ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()))), "html", null, true);
                echo $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "last_separator", array());
                echo "
            ";
            }
            // line 32
            echo "        </li>
    </ul>
";
        }
        
        $__internal_b6d501e6dce3437c9c2847ab105695389c1ca1ee7b796ea905c72b7b8939b38a->leave($__internal_b6d501e6dce3437c9c2847ab105695389c1ca1ee7b796ea905c72b7b8939b38a_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Page:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  126 => 30,  114 => 28,  112 => 27,  97 => 26,  94 => 25,  92 => 24,  89 => 23,  82 => 21,  75 => 19,  63 => 17,  61 => 16,  46 => 15,  42 => 14,  27 => 13,  25 => 12,  22 => 11,);
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

{% if breadcrumbs %}
    <ul {% for attrname, attrvalue in options.container_attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}>
        {% for breadcrumb in breadcrumbs %}
            <li {% for attrname, attrvalue in options.elements_attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}>
                {% if not breadcrumb.isdynamic %}
                    <a href=\"{{ path(breadcrumb) }}\" title=\"{{ breadcrumb.title ? : breadcrumb.name }}\">{{ breadcrumb.title ? : breadcrumb.name }}</a>{{ options.separator|raw }}
                {% else %}
                    {{ breadcrumb.title ? : breadcrumb.name }}{{ options.separator|raw }}
                {% endif %}
            </li>
        {% endfor %}

        {% set li_attrs_class = options.elements_attr.class|default('') ~ ' ' ~ options.current_class %}
        {% set li_attrs = options.elements_attr|merge({'class': li_attrs_class}) %}
        <li {% for attrname, attrvalue in li_attrs %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}>
            {% if not page.isdynamic %}
                <a href=\"{{ path(page) }}\" title=\"{{ page.title ? : page.name }}\">{{ page.title ? : page.name }}</a>{{ options.last_separator|raw }}
            {% else %}
                {{ page.title ? : page.name }}{{ options.last_separator|raw }}
            {% endif %}
        </li>
    </ul>
{% endif %}
", "SonataPageBundle:Page:breadcrumb.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/Page/breadcrumb.html.twig");
    }
}
