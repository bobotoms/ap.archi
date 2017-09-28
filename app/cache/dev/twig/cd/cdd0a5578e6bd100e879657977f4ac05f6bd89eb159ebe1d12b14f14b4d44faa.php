<?php

/* @SonataMedia/Extra/pixlr_editor.html.twig */
class __TwigTemplate_bf85c77123916e147eb154a82d4c074a5472863e8cf69d94478cfa1d8e2a9f8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle::empty_layout.html.twig", "@SonataMedia/Extra/pixlr_editor.html.twig", 12);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ae6c0fa3cc7a751ea1dcf3b38f19e9d2d78153cec823c829847683ce92ef4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae6c0fa3cc7a751ea1dcf3b38f19e9d2d78153cec823c829847683ce92ef4fb->enter($__internal_7ae6c0fa3cc7a751ea1dcf3b38f19e9d2d78153cec823c829847683ce92ef4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataMedia/Extra/pixlr_editor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae6c0fa3cc7a751ea1dcf3b38f19e9d2d78153cec823c829847683ce92ef4fb->leave($__internal_7ae6c0fa3cc7a751ea1dcf3b38f19e9d2d78153cec823c829847683ce92ef4fb_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f1f579e30c2dead13daf0baa0d29abcbdce2425a4ea77f5a738cffad0c2ad1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1f579e30c2dead13daf0baa0d29abcbdce2425a4ea77f5a738cffad0c2ad1a->enter($__internal_5f1f579e30c2dead13daf0baa0d29abcbdce2425a4ea77f5a738cffad0c2ad1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pixlr Editor";
        
        $__internal_5f1f579e30c2dead13daf0baa0d29abcbdce2425a4ea77f5a738cffad0c2ad1a->leave($__internal_5f1f579e30c2dead13daf0baa0d29abcbdce2425a4ea77f5a738cffad0c2ad1a_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b77afa16d6ae8da9a1b1e0682df72b085d8951a6ba288e6a250f75abd681877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b77afa16d6ae8da9a1b1e0682df72b085d8951a6ba288e6a250f75abd681877->enter($__internal_2b77afa16d6ae8da9a1b1e0682df72b085d8951a6ba288e6a250f75abd681877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .header {
            text-align: center;
            background: none repeat scroll 0 0 #222222;
            border-bottom: 5px solid #B6B6B6;
            padding: 15px 0;
        }

        a.pixlr-box {
            text-align: center;
            width: 230px;
            float: left;
            margin: 30px;
            margin-left: 35px;
            margin-right: 35px;

            padding: 30px;
            text-decoration: none;

            color: #B6B6B6;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            border:9px solid #B6B6B6;
            background-color:#222222;
        }

        a.pixlr-box:hover {
            color: #222222;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            border:9px solid #222222;
            background-color:#B6B6B6;
            text-decoration: none;
        }

        .centered {
            float: none;
            margin: 0 auto;
        }
    </style>
";
        
        $__internal_2b77afa16d6ae8da9a1b1e0682df72b085d8951a6ba288e6a250f75abd681877->leave($__internal_2b77afa16d6ae8da9a1b1e0682df72b085d8951a6ba288e6a250f75abd681877_prof);

    }

    // line 64
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_4efb9f5ebbd59c9fa7775908302334aa8231a421fa9b7f90b8e37337c45b16bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efb9f5ebbd59c9fa7775908302334aa8231a421fa9b7f90b8e37337c45b16bf->enter($__internal_4efb9f5ebbd59c9fa7775908302334aa8231a421fa9b7f90b8e37337c45b16bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 65
        echo "    <section class=\"content\">
        <div class=\"row header\">
           <div class=\"col-sm-12\">
               <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatamedia/extra/pixlr/pixlr.png"), "html", null, true);
        echo "\" alt=\"Pixlr\"/>
           </div>
       </div>

        <div class=\"row\">
            <div class=\"col-sm-6 centered\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_media_pixlr_edit", array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))), "mode" => "express")), "html", null, true);
        echo "\" class=\"pixlr-box\">
                            <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatamedia/extra/pixlr/express_128.png"), "html", null, true);
        echo "\" alt=\"Pixlr Express\"/>
                            ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.pixlr_express_editor", array(), "SonataMediaBundle");
        echo "
                        </a>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_media_pixlr_edit", array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))), "mode" => "editor")), "html", null, true);
        echo "\" class=\"pixlr-box\">
                            <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatamedia/extra/pixlr/editor_128.png"), "html", null, true);
        echo "\" alt=\"Pixlr Editor\"/>
                            ";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.pixlr_advanced_editor", array(), "SonataMediaBundle");
        echo "
                        </a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12 centered\">
                        <div class=\"alert alert-warning\">
                            ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.pixlr_warning", array(), "SonataMediaBundle");
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_4efb9f5ebbd59c9fa7775908302334aa8231a421fa9b7f90b8e37337c45b16bf->leave($__internal_4efb9f5ebbd59c9fa7775908302334aa8231a421fa9b7f90b8e37337c45b16bf_prof);

    }

    public function getTemplateName()
    {
        return "@SonataMedia/Extra/pixlr_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 91,  151 => 84,  147 => 83,  143 => 82,  136 => 78,  132 => 77,  128 => 76,  117 => 68,  112 => 65,  106 => 64,  54 => 18,  48 => 17,  36 => 15,  11 => 12,);
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

{% extends \"SonataAdminBundle::empty_layout.html.twig\" %}


{% block title %}Pixlr Editor{% endblock title %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .header {
            text-align: center;
            background: none repeat scroll 0 0 #222222;
            border-bottom: 5px solid #B6B6B6;
            padding: 15px 0;
        }

        a.pixlr-box {
            text-align: center;
            width: 230px;
            float: left;
            margin: 30px;
            margin-left: 35px;
            margin-right: 35px;

            padding: 30px;
            text-decoration: none;

            color: #B6B6B6;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            border:9px solid #B6B6B6;
            background-color:#222222;
        }

        a.pixlr-box:hover {
            color: #222222;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            border:9px solid #222222;
            background-color:#B6B6B6;
            text-decoration: none;
        }

        .centered {
            float: none;
            margin: 0 auto;
        }
    </style>
{% endblock stylesheets %}


{% block sonata_wrapper %}
    <section class=\"content\">
        <div class=\"row header\">
           <div class=\"col-sm-12\">
               <img src=\"{{ asset('bundles/sonatamedia/extra/pixlr/pixlr.png')}}\" alt=\"Pixlr\"/>
           </div>
       </div>

        <div class=\"row\">
            <div class=\"col-sm-6 centered\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <a href=\"{{ url('sonata_media_pixlr_edit', {'id': media|sonata_urlsafeid , 'mode': 'express'}) }}\" class=\"pixlr-box\">
                            <img src=\"{{ asset('bundles/sonatamedia/extra/pixlr/express_128.png')}}\" alt=\"Pixlr Express\"/>
                            {{ \"label.pixlr_express_editor\"|trans({}, \"SonataMediaBundle\")|raw }}
                        </a>
                    </div>
                    <div class=\"col-sm-6\">
                        <a href=\"{{ url('sonata_media_pixlr_edit', {'id': media|sonata_urlsafeid , 'mode': 'editor'}) }}\" class=\"pixlr-box\">
                            <img src=\"{{ asset('bundles/sonatamedia/extra/pixlr/editor_128.png')}}\" alt=\"Pixlr Editor\"/>
                            {{ \"label.pixlr_advanced_editor\"|trans({}, \"SonataMediaBundle\")|raw }}
                        </a>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12 centered\">
                        <div class=\"alert alert-warning\">
                            {{ \"label.pixlr_warning\"|trans({}, \"SonataMediaBundle\")|raw }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "@SonataMedia/Extra/pixlr_editor.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\media-bundle\\Resources\\views\\Extra\\pixlr_editor.html.twig");
    }
}
