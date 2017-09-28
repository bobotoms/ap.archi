<?php

/* @SonataMedia/Block/block_gallery_list.html.twig */
class __TwigTemplate_322d0efc4dc19effec5f29b507dd1ca228acb6b487894cf91c44aa7f21a69412 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataMedia/Block/block_gallery_list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b85a6a4fad95b5a8df05d31eae9825c19a3f0ca3d65bb565537c2bc85bb2b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b85a6a4fad95b5a8df05d31eae9825c19a3f0ca3d65bb565537c2bc85bb2b7e->enter($__internal_5b85a6a4fad95b5a8df05d31eae9825c19a3f0ca3d65bb565537c2bc85bb2b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Block/block_gallery_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b85a6a4fad95b5a8df05d31eae9825c19a3f0ca3d65bb565537c2bc85bb2b7e->leave($__internal_5b85a6a4fad95b5a8df05d31eae9825c19a3f0ca3d65bb565537c2bc85bb2b7e_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_11d1bb481e9815d10196f29150f7089708d626924b5472a490f5afc8b6551d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d1bb481e9815d10196f29150f7089708d626924b5472a490f5afc8b6551d3e->enter($__internal_11d1bb481e9815d10196f29150f7089708d626924b5472a490f5afc8b6551d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 4
        echo "    <div class=\"panel panel-default panel-gallery-list\">
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
            <div class=\"list-group\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 14
            echo "                    ";
            if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "mode", array()) == "admin") && array_key_exists("sonata_admin", $context))) {
                // line 15
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.media.admin.gallery", 1 => "edit", 2 => array("id" => $this->getAttribute($context["gallery"], "id", array()), "context" => $this->getAttribute($context["gallery"], "context", array()))), "method"), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 16
                if ($this->getAttribute($context["gallery"], "enabled", array())) {
                    // line 17
                    echo "                                <span class=\"label label-success pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_gallery_enabled", array(), "SonataMediaBundle"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 19
                    echo "                                <span class=\"label label-danger pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_gallery_disabled", array(), "SonataMediaBundle"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 21
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 24
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_media_gallery_view", array("id" => $this->getAttribute($context["gallery"], "id", array()))), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 28
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "                    <span class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_galleries_found", array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </div>

            ";
        // line 33
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "mode", array()) == "admin") && array_key_exists("sonata_admin", $context))) {
            // line 34
            echo "                ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "context", array())) {
                // line 35
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.media.admin.gallery", 1 => "list", 2 => array("context" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "context", array()))), "method"), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view_all_galleries", array(), "SonataMediaBundle"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 38
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.media.admin.gallery", 1 => "list"), "method"), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("view_all_galleries", array(), "SonataMediaBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 41
            echo "            ";
        }
        // line 42
        echo "        </div>
    </div>
";
        
        $__internal_11d1bb481e9815d10196f29150f7089708d626924b5472a490f5afc8b6551d3e->leave($__internal_11d1bb481e9815d10196f29150f7089708d626924b5472a490f5afc8b6551d3e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Block/block_gallery_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  144 => 41,  135 => 38,  126 => 35,  123 => 34,  121 => 33,  117 => 31,  108 => 29,  103 => 28,  97 => 25,  92 => 24,  85 => 21,  79 => 19,  73 => 17,  71 => 16,  66 => 15,  63 => 14,  58 => 13,  53 => 10,  47 => 7,  44 => 6,  42 => 5,  39 => 4,  33 => 3,  18 => 1,);
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
    <div class=\"panel panel-default panel-gallery-list\">
        {% if settings.title is not empty %}
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\"><i class=\"fa fa-globe\"></i> {{ settings.title }}</h4>
            </div>
        {% endif %}

        <div class=\"panel-body\">
            <div class=\"list-group\">
                {% for gallery in pager.getResults() %}
                    {% if settings.mode == 'admin' and sonata_admin is defined %}
                        <a href=\"{{ sonata_admin.url('sonata.media.admin.gallery', 'edit', { 'id': gallery.id, 'context': gallery.context }) }}\" class=\"list-group-item\">
                            {% if gallery.enabled %}
                                <span class=\"label label-success pull-right\">{{ 'label_gallery_enabled'|trans({}, 'SonataMediaBundle') }}</span>
                            {% else %}
                                <span class=\"label label-danger pull-right\">{{ 'label_gallery_disabled'|trans({}, 'SonataMediaBundle') }}</span>
                            {% endif %}
                            {{ gallery.name }}
                        </a>
                    {% else %}
                        <a href=\"{{ url('sonata_media_gallery_view', { 'id': gallery.id }) }}\" class=\"list-group-item\">
                            {{ gallery.name }}
                        </a>
                    {% endif %}
                {% else %}
                    <span class=\"list-group-item\">{{ 'no_galleries_found'|trans({}, 'SonataMediaBundle') }}</span>
                {% endfor %}
            </div>

            {% if settings.mode == 'admin' and sonata_admin is defined %}
                {% if settings.context %}
                    <a href=\"{{ sonata_admin.url('sonata.media.admin.gallery', 'list', {context:settings.context }) }}\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> {{ 'view_all_galleries'|trans({}, 'SonataMediaBundle') }}
                    </a>
                {% else %}
                    <a href=\"{{ sonata_admin.url('sonata.media.admin.gallery', 'list') }}\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> {{ 'view_all_galleries'|trans({}, 'SonataMediaBundle') }}
                    </a>
                {% endif %}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@SonataMedia/Block/block_gallery_list.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Block\\block_gallery_list.html.twig");
    }
}
