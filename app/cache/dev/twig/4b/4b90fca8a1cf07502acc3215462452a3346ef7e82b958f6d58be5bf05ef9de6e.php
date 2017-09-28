<?php

/* @SonataPage/PageAdmin/compose.html.twig */
class __TwigTemplate_d0a380305f7a51ce0a3a1b2151bcad6162ff83784884780adaf23088a078535d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:action.html.twig", "@SonataPage/PageAdmin/compose.html.twig", 12);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c411917566c956eef34140b080f21936ce8017ecc9e37af7273b03d860086d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c411917566c956eef34140b080f21936ce8017ecc9e37af7273b03d860086d65->enter($__internal_c411917566c956eef34140b080f21936ce8017ecc9e37af7273b03d860086d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/PageAdmin/compose.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c411917566c956eef34140b080f21936ce8017ecc9e37af7273b03d860086d65->leave($__internal_c411917566c956eef34140b080f21936ce8017ecc9e37af7273b03d860086d65_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_46d1df997d6af6b579a5a43747099d9a62c4fb9abd3c7406fe1827dcc8d3e195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d1df997d6af6b579a5a43747099d9a62c4fb9abd3c7406fe1827dcc8d3e195->enter($__internal_46d1df997d6af6b579a5a43747099d9a62c4fb9abd3c7406fe1827dcc8d3e195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_46d1df997d6af6b579a5a43747099d9a62c4fb9abd3c7406fe1827dcc8d3e195->leave($__internal_46d1df997d6af6b579a5a43747099d9a62c4fb9abd3c7406fe1827dcc8d3e195_prof);

    }

    // line 18
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_8c67c860b87bd0dafe78e3dac64577c97236b21036e5c1c52d417e3811751c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c67c860b87bd0dafe78e3dac64577c97236b21036e5c1c52d417e3811751c0a->enter($__internal_8c67c860b87bd0dafe78e3dac64577c97236b21036e5c1c52d417e3811751c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8c67c860b87bd0dafe78e3dac64577c97236b21036e5c1c52d417e3811751c0a->leave($__internal_8c67c860b87bd0dafe78e3dac64577c97236b21036e5c1c52d417e3811751c0a_prof);

    }

    // line 22
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_73c425206d5066a86590a1bc3bfb5171c384015c854b1c3849894ed13e0a6a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c425206d5066a86590a1bc3bfb5171c384015c854b1c3849894ed13e0a6a3c->enter($__internal_73c425206d5066a86590a1bc3bfb5171c384015c854b1c3849894ed13e0a6a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed page-composer-page sonata-ba-no-side-menu\"";
        
        $__internal_73c425206d5066a86590a1bc3bfb5171c384015c854b1c3849894ed13e0a6a3c->leave($__internal_73c425206d5066a86590a1bc3bfb5171c384015c854b1c3849894ed13e0a6a3c_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_d681f7f82fdbaec12f43fed96ca7f7f0b951eba47025896302f62fcd28df0adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d681f7f82fdbaec12f43fed96ca7f7f0b951eba47025896302f62fcd28df0adb->enter($__internal_d681f7f82fdbaec12f43fed96ca7f7f0b951eba47025896302f62fcd28df0adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "    <div class=\"page-composer\">
        <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("page.compose_page", array(), "SonataPageBundle"), "html", null, true);
        echo " \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "\" <small>[";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("page.compose_template_label", array(), "SonataPageBundle"), "html", null, true);
        echo ": <b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name", array()), "html", null, true);
        echo "</b>]</small></h2>

        ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["containers"]) ? $context["containers"] : $this->getContext($context, "containers"))) == 0)) {
            // line 29
            echo "            ";
            $this->loadTemplate("SonataPageBundle:PageAdmin:compose_hint.html.twig", "@SonataPage/PageAdmin/compose.html.twig", 29)->display($context);
            // line 30
            echo "        ";
        } else {
            // line 31
            echo "            <div class=\"row row-fluid\">
                <div class=\"col-md-4 span4\">
                    <div class=\"page-composer__page-preview\" data-page-composer='";
            // line 33
            echo twig_jsonencode_filter(array("pageId" => $this->getAttribute(            // line 34
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), "csrfTokens" =>             // line 35
(isset($context["csrfTokens"]) ? $context["csrfTokens"] : $this->getContext($context, "csrfTokens")), "translations" => array("cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("cancel", array(), "SonataPageBundle"), "yes" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("yes", array(), "SonataPageBundle"), "composer_remove_confirm" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("composer.remove.confirm", array(), "SonataPageBundle"), "composer_preview_error" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("page.composer_preview_error", array(), "SonataPageBundle"), "composer_update_saving" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("page.composer_update_saving", array(), "SonataPageBundle"), "composer_update_saved" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("page.composer_update_saved", array(), "SonataPageBundle"), "composer_update_error" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("page.composer_update_error", array(), "SonataPageBundle"), "composer_status_error" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("page.composer_status_error", array(), "SonataPageBundle")), "routes" => array("save_blocks_positions" => $this->getAttribute($this->getAttribute(            // line 47
(isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getAdminByAdminCode", array(0 => "sonata.page.admin.block"), "method"), "generateUrl", array(0 => "savePosition", 1 => array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "method"), "block_switch_parent" => $this->getAttribute($this->getAttribute(            // line 48
(isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getAdminByAdminCode", array(0 => "sonata.page.admin.block"), "method"), "generateUrl", array(0 => "switchParent"), "method"), "block_preview" => $this->getAttribute($this->getAttribute(            // line 49
(isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getAdminByAdminCode", array(0 => "sonata.page.admin.block"), "method"), "generateUrl", array(0 => "composePreview", 1 => array("block_id" => "BLOCK_ID")), "method"))));
            // line 51
            echo "'>
                        <div class=\"page-composer__page-preview__containers\">
                            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) ? $context["containers"] : $this->getContext($context, "containers")));
            foreach ($context['_seq'] as $context["_key"] => $context["container"]) {
                // line 54
                echo "                                ";
                if (($this->getAttribute($context["container"], "block", array(), "any", true, true) && $this->getAttribute($context["container"], "block", array()))) {
                    // line 55
                    echo "                                    <a class=\"page-composer__page-preview__container block-preview-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["container"], "block", array()), "id", array()), "html", null, true);
                    echo "\"
                                       data-block-id=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["container"], "block", array()), "id", array()), "html", null, true);
                    echo "\"
                                       data-block-whitelist=\"";
                    // line 57
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($context["container"], "area", array()), "blocks", array()), ","), "html", null, true);
                    echo "\"
                                       style=\"top:";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "y", array()), "html", null, true);
                    echo "%;right:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "right", array()), "html", null, true);
                    echo "%;bottom:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "bottom", array()), "html", null, true);
                    echo "%;left:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "x", array()), "html", null, true);
                    echo "%\"
                                       href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "compose_container_show", 1 => array("id" => $this->getAttribute($this->getAttribute($context["container"], "block", array()), "id", array()))), "method"), "html", null, true);
                    echo "\"
                                    >
                                        <div class=\"page-composer__page-preview__container__content\">
                                            <strong>";
                    // line 62
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["container"], "block", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["container"], "block", array(), "any", false, true), "name", array()), $this->getAttribute($this->getAttribute($context["container"], "area", array()), "name", array()))) : ($this->getAttribute($this->getAttribute($context["container"], "area", array()), "name", array()))), "html", null, true);
                    echo "</strong><br>
                                            <small><span class=\"child-count\">";
                    // line 63
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["container"], "block", array()), "children", array())), "html", null, true);
                    echo "</span> ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("page.compose_blocks_label", twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["container"], "block", array()), "children", array())), array(), "SonataPageBundle");
                    echo "</small>
                                            <span class=\"page-composer__page-preview__add-block\">
                                                <i class=\"fa fa-circle-o\"></i>
                                                <i class=\"fa fa-dot-circle-o\"></i>
                                            </span>
                                            <span class=\"drop-indicator\">
                                                <span class=\"fa fa-download\"></span>
                                            </span>
                                        </div>
                                    </a>
                                ";
                } else {
                    // line 74
                    echo "                                    <div class=\"page-composer__page-preview__container--no-block\"
                                         style=\"top:";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "y", array()), "html", null, true);
                    echo "%;right:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "right", array()), "html", null, true);
                    echo "%;bottom:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "bottom", array()), "html", null, true);
                    echo "%;left:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "x", array()), "html", null, true);
                    echo "%\"
                                    >
                                        <div class=\"page-composer__page-preview__container__content\">
                                            <strong>";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["container"], "area", array()), "name", array()), "html", null, true);
                    echo "</strong>
                                        </div>
                                    </div>
                                ";
                }
                // line 82
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                        </div>
                    </div>

                    ";
            // line 86
            if ((twig_length_filter($this->env, (isset($context["orphanContainers"]) ? $context["orphanContainers"] : $this->getContext($context, "orphanContainers"))) > 0)) {
                // line 87
                echo "                        <div class=\"page-composer__orphan-containers\">
                            <h3 class=\"page-composer__orphan-containers__header\">";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("page.orphan_containers", array(), "SonataPageBundle"), "html", null, true);
                echo "</h3>
                            <ul>
                                ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["orphanContainers"]) ? $context["orphanContainers"] : $this->getContext($context, "orphanContainers")));
                foreach ($context['_seq'] as $context["_key"] => $context["orphanContainer"]) {
                    // line 91
                    echo "                                    <li>
                                        <a href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "compose_container_show", 1 => array("id" => $this->getAttribute($context["orphanContainer"], "id", array()))), "method"), "html", null, true);
                    echo "\" data-block-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["orphanContainer"], "id", array()), "html", null, true);
                    echo "\" class=\"page-composer__orphan-container block-preview-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["orphanContainer"], "id", array()), "html", null, true);
                    echo "\">
                                            <strong>";
                    // line 93
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["orphanContainer"], "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["orphanContainer"], "name", array()), $this->getAttribute($context["orphanContainer"], "type", array()))) : ($this->getAttribute($context["orphanContainer"], "type", array()))), "html", null, true);
                    echo "</strong><br>
                                            <small><span class=\"child-count\">";
                    // line 94
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["orphanContainer"], "children", array())), "html", null, true);
                    echo "</span> ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("page.compose_blocks_label", twig_length_filter($this->env, $this->getAttribute($context["orphanContainer"], "children", array())), array(), "SonataPageBundle");
                    echo "</small>
                                        </a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orphanContainer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                            </ul>
                        </div>
                    ";
            }
            // line 101
            echo "                </div>
                <div class=\"col-md-8 span8\">
                    <div class=\"page-composer__dyn-content\">
                    </div>
                </div>
            </div>
        ";
        }
        // line 108
        echo "    </div>
";
        
        $__internal_d681f7f82fdbaec12f43fed96ca7f7f0b951eba47025896302f62fcd28df0adb->leave($__internal_d681f7f82fdbaec12f43fed96ca7f7f0b951eba47025896302f62fcd28df0adb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/PageAdmin/compose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 108,  259 => 101,  254 => 98,  242 => 94,  238 => 93,  230 => 92,  227 => 91,  223 => 90,  218 => 88,  215 => 87,  213 => 86,  208 => 83,  202 => 82,  195 => 78,  183 => 75,  180 => 74,  164 => 63,  160 => 62,  154 => 59,  144 => 58,  140 => 57,  136 => 56,  131 => 55,  128 => 54,  124 => 53,  120 => 51,  118 => 49,  117 => 48,  116 => 47,  115 => 35,  114 => 34,  113 => 33,  109 => 31,  106 => 30,  103 => 29,  101 => 28,  90 => 26,  87 => 25,  81 => 24,  69 => 22,  59 => 19,  53 => 18,  43 => 15,  37 => 14,  11 => 12,);
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

{% block title %}
    {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block body_attributes %}class=\"sonata-bc skin-black fixed page-composer-page sonata-ba-no-side-menu\"{% endblock %}

{% block content %}
    <div class=\"page-composer\">
        <h2>{{ 'page.compose_page'|trans({}, 'SonataPageBundle') }} \"{{ page.name }}\" <small>[{{ 'page.compose_template_label'|trans({}, 'SonataPageBundle') }}: <b>{{ template.name }}</b>]</small></h2>

        {% if containers|length == 0 %}
            {% include 'SonataPageBundle:PageAdmin:compose_hint.html.twig' %}
        {% else %}
            <div class=\"row row-fluid\">
                <div class=\"col-md-4 span4\">
                    <div class=\"page-composer__page-preview\" data-page-composer='{{ {
                        pageId: page.id,
                        csrfTokens: csrfTokens,
                        translations: {
                            cancel: 'cancel'|trans({}, 'SonataPageBundle'),
                            yes: 'yes'|trans({}, 'SonataPageBundle'),
                            composer_remove_confirm: 'composer.remove.confirm'|trans({}, 'SonataPageBundle'),
                            composer_preview_error: 'page.composer_preview_error'|trans({}, 'SonataPageBundle'),
                            composer_update_saving: 'page.composer_update_saving'|trans({}, 'SonataPageBundle'),
                            composer_update_saved: 'page.composer_update_saved'|trans({}, 'SonataPageBundle'),
                            composer_update_error: 'page.composer_update_error'|trans({}, 'SonataPageBundle'),
                            composer_status_error: 'page.composer_status_error'|trans({}, 'SonataPageBundle')
                        },
                        routes: {
                            save_blocks_positions: admin_pool.getAdminByAdminCode('sonata.page.admin.block').generateUrl('savePosition', { 'id': page.id }),
                            block_switch_parent:   admin_pool.getAdminByAdminCode('sonata.page.admin.block').generateUrl('switchParent'),
                            block_preview:         admin_pool.getAdminByAdminCode('sonata.page.admin.block').generateUrl('composePreview', { 'block_id': 'BLOCK_ID' })
                        }
                    }|json_encode()|raw }}'>
                        <div class=\"page-composer__page-preview__containers\">
                            {% for container in containers %}
                                {% if container.block is defined and container.block %}
                                    <a class=\"page-composer__page-preview__container block-preview-{{ container.block.id }}\"
                                       data-block-id=\"{{ container.block.id }}\"
                                       data-block-whitelist=\"{{ container.area.blocks|join(',') }}\"
                                       style=\"top:{{ container.area.placement.y }}%;right:{{ container.area.placement.right }}%;bottom:{{ container.area.placement.bottom }}%;left:{{ container.area.placement.x }}%\"
                                       href=\"{{ admin.generateUrl('compose_container_show', { 'id': container.block.id }) }}\"
                                    >
                                        <div class=\"page-composer__page-preview__container__content\">
                                            <strong>{{ container.block.name|default(container.area.name) }}</strong><br>
                                            <small><span class=\"child-count\">{{ container.block.children|length }}</span> {% transchoice container.block.children|length from 'SonataPageBundle' %}page.compose_blocks_label{% endtranschoice %}</small>
                                            <span class=\"page-composer__page-preview__add-block\">
                                                <i class=\"fa fa-circle-o\"></i>
                                                <i class=\"fa fa-dot-circle-o\"></i>
                                            </span>
                                            <span class=\"drop-indicator\">
                                                <span class=\"fa fa-download\"></span>
                                            </span>
                                        </div>
                                    </a>
                                {% else %}
                                    <div class=\"page-composer__page-preview__container--no-block\"
                                         style=\"top:{{ container.area.placement.y }}%;right:{{ container.area.placement.right }}%;bottom:{{ container.area.placement.bottom }}%;left:{{ container.area.placement.x }}%\"
                                    >
                                        <div class=\"page-composer__page-preview__container__content\">
                                            <strong>{{ container.area.name }}</strong>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>

                    {% if orphanContainers|length > 0 %}
                        <div class=\"page-composer__orphan-containers\">
                            <h3 class=\"page-composer__orphan-containers__header\">{{ 'page.orphan_containers'|trans({}, 'SonataPageBundle') }}</h3>
                            <ul>
                                {% for orphanContainer in orphanContainers %}
                                    <li>
                                        <a href=\"{{ admin.generateUrl('compose_container_show', { 'id': orphanContainer.id }) }}\" data-block-id=\"{{ orphanContainer.id }}\" class=\"page-composer__orphan-container block-preview-{{ orphanContainer.id }}\">
                                            <strong>{{ orphanContainer.name|default(orphanContainer.type) }}</strong><br>
                                            <small><span class=\"child-count\">{{ orphanContainer.children|length }}</span> {% transchoice orphanContainer.children|length from 'SonataPageBundle' %}page.compose_blocks_label{% endtranschoice %}</small>
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    {% endif %}
                </div>
                <div class=\"col-md-8 span8\">
                    <div class=\"page-composer__dyn-content\">
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
{% endblock %}
", "@SonataPage/PageAdmin/compose.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\PageAdmin\\compose.html.twig");
    }
}
