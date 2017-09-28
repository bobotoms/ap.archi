<?php

/* @SonataMedia/MediaAdmin/edit.html.twig */
class __TwigTemplate_f246a291c34c03609c9938ce88340d579d4f38744c89795754c187df1e2f63e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 29
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataMedia/MediaAdmin/edit.html.twig", 29);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'form' => array($this, 'block_form'),
            'sonata_media_show_reference' => array($this, 'block_sonata_media_show_reference'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a67e9318d6420f25c8dcb2ffa2ba10da179a4c66b0b846bd19762624ea8be8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67e9318d6420f25c8dcb2ffa2ba10da179a4c66b0b846bd19762624ea8be8d6->enter($__internal_a67e9318d6420f25c8dcb2ffa2ba10da179a4c66b0b846bd19762624ea8be8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/MediaAdmin/edit.html.twig"));

        // line 12
        $context["macros"] = $this;
        // line 29
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a67e9318d6420f25c8dcb2ffa2ba10da179a4c66b0b846bd19762624ea8be8d6->leave($__internal_a67e9318d6420f25c8dcb2ffa2ba10da179a4c66b0b846bd19762624ea8be8d6_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c31b68ea86b433cc08461e7a15a390dab38e2c530b54e5fe3373f118cb861e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c31b68ea86b433cc08461e7a15a390dab38e2c530b54e5fe3373f118cb861e1->enter($__internal_0c31b68ea86b433cc08461e7a15a390dab38e2c530b54e5fe3373f118cb861e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        button.btn.btn-sm.btn-default.pixlr-link {
            margin-bottom: 0;
        }
    </style>
";
        
        $__internal_0c31b68ea86b433cc08461e7a15a390dab38e2c530b54e5fe3373f118cb861e1->leave($__internal_0c31b68ea86b433cc08461e7a15a390dab38e2c530b54e5fe3373f118cb861e1_prof);

    }

    // line 40
    public function block_form($context, array $blocks = array())
    {
        $__internal_e2afbbf117d5d28863262bbec824af9e9cf02b82d71463a0a6dc0a860be1d986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2afbbf117d5d28863262bbec824af9e9cf02b82d71463a0a6dc0a860be1d986->enter($__internal_e2afbbf117d5d28863262bbec824af9e9cf02b82d71463a0a6dc0a860be1d986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 41
        echo "    <div class=\"row\">
        ";
        // line 42
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array())) {
            // line 43
            echo "            <div class=\"col-md-6\">
                ";
            // line 44
            $this->displayBlock('sonata_media_show_reference', $context, $blocks);
            // line 121
            echo "            </div>
        ";
        }
        // line 123
        echo "
        <div class=\"col-md-6\">
            ";
        // line 126
        echo "            ";
        $this->displayParentBlock("form", $context, $blocks);
        echo "
        </div>
    </div>

    ";
        // line 130
        if (($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pixlr", array()) && $this->getAttribute($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pixlr", array()), "isEditable", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 131
            echo "        <div class=\"modal fade\" id=\"pixlr-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "</h4>
                    </div>
                    <div class=\"modal-body\" id=\"pixlr-modal-body\">
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\">
            window.closeModal = function() {
                jQuery('#pixlr-modal').modal('hide');
            }

            jQuery('button.pixlr-link').on('click', function(e) {
                e.preventDefault();
                var url = jQuery(this).attr('data-href');
                jQuery(\"#pixlr-modal-body\").html('<iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\" allowtransparency=\"true\" src=\"'+url+'\"></iframe>');
            });

            Admin.setup_list_modal(jQuery('#pixlr-modal'));
        </script>
    ";
        }
        
        $__internal_e2afbbf117d5d28863262bbec824af9e9cf02b82d71463a0a6dc0a860be1d986->leave($__internal_e2afbbf117d5d28863262bbec824af9e9cf02b82d71463a0a6dc0a860be1d986_prof);

    }

    // line 44
    public function block_sonata_media_show_reference($context, array $blocks = array())
    {
        $__internal_c30fab0d6a5f52787f18fda8ce88e352dab442f2352ea984899906e9218a6487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30fab0d6a5f52787f18fda8ce88e352dab442f2352ea984899906e9218a6487->enter($__internal_c30fab0d6a5f52787f18fda8ce88e352dab442f2352ea984899906e9218a6487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_media_show_reference"));

        // line 45
        echo "                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.media_preview", array(), "SonataMediaBundle"), "html", null, true);
        echo "</h3>
                            ";
        // line 48
        if (($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pixlr", array()) && $this->getAttribute($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pixlr", array()), "isEditable", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 49
            echo "                                <div class=\"box-tools pull-right\">
                                    <button class=\"btn btn-sm btn-default pixlr-link\"
                                            data-href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_media_pixlr_open_editor", array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "html", null, true);
            echo "\"
                                            data-toggle=\"modal\"
                                            data-target=\"#pixlr-modal\"
                                            >
                                        <i class=\"fa fa-pencil-square-o\"></i> ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                    </button>
                                </div>
                            ";
        }
        // line 59
        echo "
                        </div>
                        <div class=\"box-body table-responsive\">

                            <div class=\"text-center\">
                                ";
        // line 64
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "reference", array("class" => "img-responsive img-rounded"));
        // line 65
        echo "                            </div>

                            <table class=\"table\">
                                <tr>
                                    <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.size", array(), "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "width", array()), "html", null, true);
        echo " x ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "height", array()), "html", null, true);
        echo "
                                        ";
        // line 72
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "size", array()) > 0)) {
            echo "(";
            echo $context["macros"]->getbytesToSize($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "size", array()));
            echo ")";
        }
        // line 73
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.content_type", array(), "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contenttype", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.cdn", array(), "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 82
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "cdnisflushable", array())) {
            // line 83
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.to_be_flushed", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                        ";
        } else {
            // line 85
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.flushed_at", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                            ";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "cdnflushat", array())), "html", null, true);
            echo "
                                        ";
        }
        // line 88
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <th><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_media_download", array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.protected_download_url", array(), "SonataMediaBundle"), "html", null, true);
        echo "</a></th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_media_download", array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))))), "html", null, true);
        echo "\" />
                                        <span class=\"label label-warning\">";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.protected_download_url_notice", array(), "SonataMediaBundle"), "html", null, true);
        echo "</span> ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pool", array()), "downloadStrategy", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "description", array());
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <a href=\"";
        // line 99
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "reference");
        echo "\" target=\"_blank\">reference</a>
                                    </th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
        // line 102
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "reference");
        echo "\" />
                                    </td>
                                </tr>

                                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_media"]) ? $context["sonata_media"] : $this->getContext($context, "sonata_media")), "pool", array()), "formatNamesByContext", array(0 => $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "context", array())), "method"));
        foreach ($context['_seq'] as $context["name"] => $context["format"]) {
            // line 107
            echo "                                    <tr>
                                        <th>
                                            <a href=\"";
            // line 109
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $context["name"]);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
                                        </th>
                                        <td>
                                            <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
            // line 112
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $context["name"]);
            echo "\" />
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                            </table>
                        </div>

                    </div>
                ";
        
        $__internal_c30fab0d6a5f52787f18fda8ce88e352dab442f2352ea984899906e9218a6487->leave($__internal_c30fab0d6a5f52787f18fda8ce88e352dab442f2352ea984899906e9218a6487_prof);

    }

    // line 14
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_af07dd97a8bcc21ad49faf27411124ca607386fc425c92de5ad3bb9349c0e7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_af07dd97a8bcc21ad49faf27411124ca607386fc425c92de5ad3bb9349c0e7b4->enter($__internal_af07dd97a8bcc21ad49faf27411124ca607386fc425c92de5ad3bb9349c0e7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "bytesToSize"));

            // line 15
            ob_start();
            // line 16
            echo "    ";
            $context["kilobyte"] = 1024;
            // line 17
            echo "    ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")) * 1024);
            // line 18
            echo "
    ";
            // line 19
            if (((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")))) {
                // line 20
                echo "        ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) . " B"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 21
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")))) {
                // line 22
                echo "        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte"))), 2) . " KB"), "html", null, true);
                echo "
    ";
            } else {
                // line 24
                echo "        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte"))), 2) . " MB"), "html", null, true);
                echo "
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_af07dd97a8bcc21ad49faf27411124ca607386fc425c92de5ad3bb9349c0e7b4->leave($__internal_af07dd97a8bcc21ad49faf27411124ca607386fc425c92de5ad3bb9349c0e7b4_prof);

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
        return "@SonataMedia/MediaAdmin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 24,  348 => 22,  346 => 21,  341 => 20,  339 => 19,  336 => 18,  333 => 17,  330 => 16,  328 => 15,  313 => 14,  302 => 116,  292 => 112,  284 => 109,  280 => 107,  276 => 106,  269 => 102,  263 => 99,  253 => 94,  249 => 93,  242 => 91,  237 => 88,  232 => 86,  227 => 85,  221 => 83,  219 => 82,  214 => 80,  208 => 77,  204 => 76,  199 => 73,  193 => 72,  187 => 71,  182 => 69,  176 => 65,  174 => 64,  167 => 59,  160 => 55,  153 => 51,  149 => 49,  147 => 48,  143 => 47,  139 => 45,  133 => 44,  103 => 136,  94 => 131,  92 => 130,  84 => 126,  80 => 123,  76 => 121,  74 => 44,  71 => 43,  69 => 42,  66 => 41,  60 => 40,  45 => 32,  39 => 31,  32 => 29,  30 => 12,  11 => 29,);
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

{% import _self as macros %}

{% macro bytesToSize(bytes) %}
{% spaceless %}
    {% set kilobyte = 1024 %}
    {% set megabyte = kilobyte * 1024 %}

    {% if bytes < kilobyte %}
        {{ bytes ~ ' B' }}
    {% elseif bytes < megabyte %}
        {{ (bytes / kilobyte)|number_format(2) ~ ' KB' }}
    {% else %}
        {{ (bytes / megabyte)|number_format(2) ~ ' MB' }}
    {% endif %}
{% endspaceless %}
{% endmacro %}

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        button.btn.btn-sm.btn-default.pixlr-link {
            margin-bottom: 0;
        }
    </style>
{% endblock %}

{% block form %}
    <div class=\"row\">
        {% if object.id %}
            <div class=\"col-md-6\">
                {% block sonata_media_show_reference %}
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">{{ 'title.media_preview'|trans({}, 'SonataMediaBundle') }}</h3>
                            {% if sonata_media.pixlr and sonata_media.pixlr.isEditable(object) %}
                                <div class=\"box-tools pull-right\">
                                    <button class=\"btn btn-sm btn-default pixlr-link\"
                                            data-href=\"{{ path('sonata_media_pixlr_open_editor', { 'id': object|sonata_urlsafeid }) }}\"
                                            data-toggle=\"modal\"
                                            data-target=\"#pixlr-modal\"
                                            >
                                        <i class=\"fa fa-pencil-square-o\"></i> {{ \"label.edit_with_pixlr\"|trans({}, \"SonataMediaBundle\") }}
                                    </button>
                                </div>
                            {% endif %}

                        </div>
                        <div class=\"box-body table-responsive\">

                            <div class=\"text-center\">
                                {% media object, 'reference' with {'class': 'img-responsive img-rounded'} %}
                            </div>

                            <table class=\"table\">
                                <tr>
                                    <th>{{ 'label.size'|trans({}, 'SonataMediaBundle') }}</th>
                                    <td>
                                        {{ object.width }} x {{ object.height }}
                                        {% if object.size > 0 %}({{ macros.bytesToSize(object.size) }}){% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>{{ 'label.content_type'|trans({}, 'SonataMediaBundle') }}</th>
                                    <td>{{ object.contenttype }}</td>
                                </tr>
                                <tr>
                                    <th>{{ 'label.cdn'|trans({}, 'SonataMediaBundle') }}</th>
                                    <td>
                                        {% if object.cdnisflushable %}
                                            {{ 'label.to_be_flushed'|trans({}, 'SonataMediaBundle') }}
                                        {% else %}
                                            {{ 'label.flushed_at'|trans({}, 'SonataMediaBundle') }}
                                            {{ object.cdnflushat|date }}
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th><a href=\"{{ path('sonata_media_download', {'id': object|sonata_urlsafeid }) }}\">{{ 'label.protected_download_url'|trans({}, 'SonataMediaBundle') }}</a></th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"{{ path('sonata_media_download', {'id': object|sonata_urlsafeid }) }}\" />
                                        <span class=\"label label-warning\">{{ 'label.protected_download_url_notice'|trans({}, 'SonataMediaBundle') }}</span> {{ sonata_media.pool.downloadStrategy(object).description|raw }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <a href=\"{% path object, 'reference' %}\" target=\"_blank\">reference</a>
                                    </th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"{% path object, 'reference' %}\" />
                                    </td>
                                </tr>

                                {% for name, format in sonata_media.pool.formatNamesByContext(object.context) %}
                                    <tr>
                                        <th>
                                            <a href=\"{% path object, name %}\" target=\"_blank\">{{ name }}</a>
                                        </th>
                                        <td>
                                            <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"{% path object, name %}\" />
                                        </td>
                                    </tr>
                                {% endfor %}
                            </table>
                        </div>

                    </div>
                {% endblock sonata_media_show_reference %}
            </div>
        {% endif %}

        <div class=\"col-md-6\">
            {# Renders the form #}
            {{ parent() }}
        </div>
    </div>

    {% if sonata_media.pixlr and sonata_media.pixlr.isEditable(object) %}
        <div class=\"modal fade\" id=\"pixlr-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{{ \"label.edit_with_pixlr\"|trans({}, \"SonataMediaBundle\")}}\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">{{ \"label.edit_with_pixlr\"|trans({}, \"SonataMediaBundle\")}}</h4>
                    </div>
                    <div class=\"modal-body\" id=\"pixlr-modal-body\">
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\">
            window.closeModal = function() {
                jQuery('#pixlr-modal').modal('hide');
            }

            jQuery('button.pixlr-link').on('click', function(e) {
                e.preventDefault();
                var url = jQuery(this).attr('data-href');
                jQuery(\"#pixlr-modal-body\").html('<iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\" allowtransparency=\"true\" src=\"'+url+'\"></iframe>');
            });

            Admin.setup_list_modal(jQuery('#pixlr-modal'));
        </script>
    {% endif %}
{% endblock form %}
", "@SonataMedia/MediaAdmin/edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\MediaAdmin\\edit.html.twig");
    }
}
