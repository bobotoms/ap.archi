<?php

/* @SonataPage/Block/block_pagelist.html.twig */
class __TwigTemplate_a8881dc9ec278f0a67336b6723e9b43760bc96e9b84605d305ddcdb3d4ad1f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataPage/Block/block_pagelist.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbf7fad40a5361391fa1a94e31b41e831ee2ff25c6bd9e20939919bf78e8d028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf7fad40a5361391fa1a94e31b41e831ee2ff25c6bd9e20939919bf78e8d028->enter($__internal_fbf7fad40a5361391fa1a94e31b41e831ee2ff25c6bd9e20939919bf78e8d028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/Block/block_pagelist.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf7fad40a5361391fa1a94e31b41e831ee2ff25c6bd9e20939919bf78e8d028->leave($__internal_fbf7fad40a5361391fa1a94e31b41e831ee2ff25c6bd9e20939919bf78e8d028_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_ed0600015186da9267f15dbf4b7756aa41de3da1c9698243ec37698346f5064c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0600015186da9267f15dbf4b7756aa41de3da1c9698243ec37698346f5064c->enter($__internal_ed0600015186da9267f15dbf4b7756aa41de3da1c9698243ec37698346f5064c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 4
        echo "    <div class=\"panel panel-default panel-page-list\">
        ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()))) {
            // line 6
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-globe\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h4>
            </div>
        ";
        }
        // line 10
        echo "
        <div class=\"panel-body\">
            <h4>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_content_pages", array(), "SonataPageBundle"), "html", null, true);
        echo "</h4>

            <div class=\"list-group\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 16
            echo "                    ";
            if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "mode", array()) == "admin") && array_key_exists("sonata_admin", $context))) {
                // line 17
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.page.admin.page", 1 => "compose", 2 => array("id" => $this->getAttribute($context["page"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 18
                if ($this->getAttribute($context["page"], "enabled", array())) {
                    // line 19
                    echo "                                <span class=\"label label-success pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_page_enabled", array(), "SonataPageBundle"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 21
                    echo "                                <span class=\"label label-danger pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_page_disabled", array(), "SonataPageBundle"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 23
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 26
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_slug", array("path" => $this->getAttribute($context["page"], "url", array()))), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 30
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_pages_found", array(), "SonataPageBundle"), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>

            ";
        // line 35
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "mode", array()) == "admin") && array_key_exists("sonata_admin", $context))) {
            // line 36
            echo "                <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_system_pages", array(), "SonataPageBundle"), "html", null, true);
            echo "</h4>
                <div class=\"list-group\">
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["systemElements"]) ? $context["systemElements"] : $this->getContext($context, "systemElements")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 39
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.page.admin.page", 1 => "compose", 2 => array("id" => $this->getAttribute($context["page"], "id", array()))), "method"), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 40
                if ($this->getAttribute($context["page"], "enabled", array())) {
                    // line 41
                    echo "                                <span class=\"label label-success pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_page_enabled", array(), "SonataPageBundle"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 43
                    echo "                                <span class=\"label label-danger pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_page_disabled", array(), "SonataPageBundle"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 45
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </div>
            ";
        }
        // line 50
        echo "
            ";
        // line 51
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "mode", array()) == "admin") && array_key_exists("sonata_admin", $context))) {
            // line 52
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.page.admin.page", 1 => "compose", 2 => array("filter" => array("hybrid" => array("value" => "cms")))), "method"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\">
                    <i class=\"fa fa-list\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view_all_pages", array(), "SonataPageBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 56
        echo "        </div>
    </div>
";
        
        $__internal_ed0600015186da9267f15dbf4b7756aa41de3da1c9698243ec37698346f5064c->leave($__internal_ed0600015186da9267f15dbf4b7756aa41de3da1c9698243ec37698346f5064c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/Block/block_pagelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 56,  181 => 53,  176 => 52,  174 => 51,  171 => 50,  167 => 48,  157 => 45,  151 => 43,  145 => 41,  143 => 40,  138 => 39,  134 => 38,  128 => 36,  126 => 35,  122 => 33,  113 => 31,  108 => 30,  102 => 27,  97 => 26,  90 => 23,  84 => 21,  78 => 19,  76 => 18,  71 => 17,  68 => 16,  63 => 15,  57 => 12,  53 => 10,  47 => 7,  44 => 6,  42 => 5,  39 => 4,  33 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"panel panel-default panel-page-list\">
        {% if settings.title is not empty %}
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-globe\"></i> {{ settings.title }}</h4>
            </div>
        {% endif %}

        <div class=\"panel-body\">
            <h4>{{ 'title_content_pages'|trans({}, 'SonataPageBundle') }}</h4>

            <div class=\"list-group\">
                {% for page in elements %}
                    {% if settings.mode == 'admin' and sonata_admin is defined %}
                        <a href=\"{{ sonata_admin.url('sonata.page.admin.page', 'compose', { 'id': page.id }) }}\" class=\"list-group-item\">
                            {% if page.enabled %}
                                <span class=\"label label-success pull-right\">{{ 'label_page_enabled'|trans({}, 'SonataPageBundle') }}</span>
                            {% else %}
                                <span class=\"label label-danger pull-right\">{{ 'label_page_disabled'|trans({}, 'SonataPageBundle') }}</span>
                            {% endif %}
                            {{ page.name }}
                        </a>
                    {% else %}
                        <a href=\"{{ path('page_slug', { 'path': page.url }) }}\" class=\"list-group-item\">
                            {{ page.name }}
                        </a>
                    {% endif %}
                {% else %}
                    <li>{{ 'no_pages_found'|trans({}, 'SonataPageBundle') }}</li>
                {% endfor %}
            </div>

            {% if settings.mode == 'admin' and sonata_admin is defined %}
                <h4>{{ 'title_system_pages'|trans({}, 'SonataPageBundle') }}</h4>
                <div class=\"list-group\">
                    {% for page in systemElements %}
                        <a href=\"{{ sonata_admin.url('sonata.page.admin.page', 'compose', { 'id': page.id }) }}\" class=\"list-group-item\">
                            {% if page.enabled %}
                                <span class=\"label label-success pull-right\">{{ 'label_page_enabled'|trans({}, 'SonataPageBundle') }}</span>
                            {% else %}
                                <span class=\"label label-danger pull-right\">{{ 'label_page_disabled'|trans({}, 'SonataPageBundle') }}</span>
                            {% endif %}
                            {{ page.name }}
                        </a>
                    {% endfor %}
                </div>
            {% endif %}

            {% if settings.mode == 'admin' and sonata_admin is defined %}
                <a href=\"{{ sonata_admin.url('sonata.page.admin.page', 'compose', {filter:{hybrid:{value:'cms' }}}) }}\" class=\"btn btn-primary btn-block\">
                    <i class=\"fa fa-list\"></i> {{ 'view_all_pages'|trans({}, 'SonataPageBundle') }}
                </a>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@SonataPage/Block/block_pagelist.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\Block\\block_pagelist.html.twig");
    }
}
