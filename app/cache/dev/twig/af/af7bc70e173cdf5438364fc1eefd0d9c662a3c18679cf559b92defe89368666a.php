<?php

/* @SonataPage/base_layout.html.twig */
class __TwigTemplate_994a9aeb17984be24acbbaac5261ef365b4afe56d72d24cf4f7d54d5b556e930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_html_tag' => array($this, 'block_sonata_page_html_tag'),
            'sonata_page_head' => array($this, 'block_sonata_page_head'),
            'sonata_page_stylesheets' => array($this, 'block_sonata_page_stylesheets'),
            'page_stylesheets' => array($this, 'block_page_stylesheets'),
            'sonata_page_javascripts' => array($this, 'block_sonata_page_javascripts'),
            'page_javascripts' => array($this, 'block_page_javascripts'),
            'sonata_page_body_tag' => array($this, 'block_sonata_page_body_tag'),
            'sonata_page_top_bar' => array($this, 'block_sonata_page_top_bar'),
            'page_top_bar' => array($this, 'block_page_top_bar'),
            'sonata_page_container' => array($this, 'block_sonata_page_container'),
            'page_container' => array($this, 'block_page_container'),
            'sonata_page_asset_footer' => array($this, 'block_sonata_page_asset_footer'),
            'page_asset_footer' => array($this, 'block_page_asset_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ea17220bbf51cec17bd1ee9ad518169461bf7c9bc5dae9230e9d876992759b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea17220bbf51cec17bd1ee9ad518169461bf7c9bc5dae9230e9d876992759b5->enter($__internal_3ea17220bbf51cec17bd1ee9ad518169461bf7c9bc5dae9230e9d876992759b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/base_layout.html.twig"));

        // line 11
        $this->displayBlock('sonata_page_html_tag', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('sonata_page_head', $context, $blocks);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('sonata_page_body_tag', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('sonata_page_top_bar', $context, $blocks);
        // line 149
        echo "
        ";
        // line 150
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 153
        echo "
        ";
        // line 154
        $this->displayBlock('sonata_page_asset_footer', $context, $blocks);
        // line 176
        echo "
        <!-- monitoring:3e9fda56df2cdd3b039f189693ab7844fbb2d4f6 -->
    </body>
</html>
";
        
        $__internal_3ea17220bbf51cec17bd1ee9ad518169461bf7c9bc5dae9230e9d876992759b5->leave($__internal_3ea17220bbf51cec17bd1ee9ad518169461bf7c9bc5dae9230e9d876992759b5_prof);

    }

    // line 11
    public function block_sonata_page_html_tag($context, array $blocks = array())
    {
        $__internal_ff7d6d67ec966d8c39a79ce5ea0587f6232bec3e8c6cc246df45f43a22ec0afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7d6d67ec966d8c39a79ce5ea0587f6232bec3e8c6cc246df45f43a22ec0afd->enter($__internal_ff7d6d67ec966d8c39a79ce5ea0587f6232bec3e8c6cc246df45f43a22ec0afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_html_tag"));

        // line 12
        echo "<!DOCTYPE html>
<html ";
        // line 13
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getHtmlAttributes();
        echo ">
";
        
        $__internal_ff7d6d67ec966d8c39a79ce5ea0587f6232bec3e8c6cc246df45f43a22ec0afd->leave($__internal_ff7d6d67ec966d8c39a79ce5ea0587f6232bec3e8c6cc246df45f43a22ec0afd_prof);

    }

    // line 15
    public function block_sonata_page_head($context, array $blocks = array())
    {
        $__internal_29137938504acd07a36032e7217c2220d4d0630e4cdb40441a1b850e408ccc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29137938504acd07a36032e7217c2220d4d0630e4cdb40441a1b850e408ccc27->enter($__internal_29137938504acd07a36032e7217c2220d4d0630e4cdb40441a1b850e408ccc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_head"));

        // line 16
        echo "        <head ";
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getHeadAttributes();
        echo ">

            <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><![endif]-->
            ";
        // line 19
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getTitle();
        echo "
            ";
        // line 20
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getMetadatas();
        echo "

            ";
        // line 22
        $this->displayBlock('sonata_page_stylesheets', $context, $blocks);
        // line 29
        echo "
            ";
        // line 30
        $this->displayBlock('sonata_page_javascripts', $context, $blocks);
        // line 43
        echo "        </head>
    ";
        
        $__internal_29137938504acd07a36032e7217c2220d4d0630e4cdb40441a1b850e408ccc27->leave($__internal_29137938504acd07a36032e7217c2220d4d0630e4cdb40441a1b850e408ccc27_prof);

    }

    // line 22
    public function block_sonata_page_stylesheets($context, array $blocks = array())
    {
        $__internal_817437500aaaa539daff7a0483f44c435a13b2f2e8ea02eebf34ebf8493bd74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817437500aaaa539daff7a0483f44c435a13b2f2e8ea02eebf34ebf8493bd74e->enter($__internal_817437500aaaa539daff7a0483f44c435a13b2f2e8ea02eebf34ebf8493bd74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_stylesheets"));

        // line 23
        echo "                ";
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 28
        echo "            ";
        
        $__internal_817437500aaaa539daff7a0483f44c435a13b2f2e8ea02eebf34ebf8493bd74e->leave($__internal_817437500aaaa539daff7a0483f44c435a13b2f2e8ea02eebf34ebf8493bd74e_prof);

    }

    // line 23
    public function block_page_stylesheets($context, array $blocks = array())
    {
        $__internal_d8d2f1210cd7eb52ebbd0d668649ddf4fc769b33e7893aa7a6d8a615436d420a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d2f1210cd7eb52ebbd0d668649ddf4fc769b33e7893aa7a6d8a615436d420a->enter($__internal_d8d2f1210cd7eb52ebbd0d668649ddf4fc769b33e7893aa7a6d8a615436d420a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_stylesheets"));

        echo " ";
        // line 24
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "stylesheets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 25
            echo "                        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\" media=\"all\">
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                ";
        
        $__internal_d8d2f1210cd7eb52ebbd0d668649ddf4fc769b33e7893aa7a6d8a615436d420a->leave($__internal_d8d2f1210cd7eb52ebbd0d668649ddf4fc769b33e7893aa7a6d8a615436d420a_prof);

    }

    // line 30
    public function block_sonata_page_javascripts($context, array $blocks = array())
    {
        $__internal_2fda2c1d4bb994b90eca80d9f10ff80363f952e24af5a79ca598c5db01561cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fda2c1d4bb994b90eca80d9f10ff80363f952e24af5a79ca598c5db01561cbc->enter($__internal_2fda2c1d4bb994b90eca80d9f10ff80363f952e24af5a79ca598c5db01561cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_javascripts"));

        // line 31
        echo "                ";
        $this->displayBlock('page_javascripts', $context, $blocks);
        // line 41
        echo "
            ";
        
        $__internal_2fda2c1d4bb994b90eca80d9f10ff80363f952e24af5a79ca598c5db01561cbc->leave($__internal_2fda2c1d4bb994b90eca80d9f10ff80363f952e24af5a79ca598c5db01561cbc_prof);

    }

    // line 31
    public function block_page_javascripts($context, array $blocks = array())
    {
        $__internal_da4e563327e8b139e9f65f035c6a599881171fc717ff6f5e2939d5f13c9bf212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4e563327e8b139e9f65f035c6a599881171fc717ff6f5e2939d5f13c9bf212->enter($__internal_da4e563327e8b139e9f65f035c6a599881171fc717ff6f5e2939d5f13c9bf212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_javascripts"));

        echo " ";
        // line 32
        echo "                    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
                    <!--[if lt IE 9]>
                        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                    <![endif]-->

                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "javascripts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 38
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js"]), "html", null, true);
            echo "\"></script>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                ";
        
        $__internal_da4e563327e8b139e9f65f035c6a599881171fc717ff6f5e2939d5f13c9bf212->leave($__internal_da4e563327e8b139e9f65f035c6a599881171fc717ff6f5e2939d5f13c9bf212_prof);

    }

    // line 46
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        $__internal_e8fb6ffc0b791ee0a4e2198a52072bce8d1c28b11f1c4df845c2fb62520b0895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fb6ffc0b791ee0a4e2198a52072bce8d1c28b11f1c4df845c2fb62520b0895->enter($__internal_e8fb6ffc0b791ee0a4e2198a52072bce8d1c28b11f1c4df845c2fb62520b0895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_body_tag"));

        // line 47
        echo "        <body class=\"sonata-bc\">
    ";
        
        $__internal_e8fb6ffc0b791ee0a4e2198a52072bce8d1c28b11f1c4df845c2fb62520b0895->leave($__internal_e8fb6ffc0b791ee0a4e2198a52072bce8d1c28b11f1c4df845c2fb62520b0895_prof);

    }

    // line 50
    public function block_sonata_page_top_bar($context, array $blocks = array())
    {
        $__internal_2127f2eaaf1394de5350f88d4d378a7bd6b9f02b68dcb610ad1fdfe0f2464774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2127f2eaaf1394de5350f88d4d378a7bd6b9f02b68dcb610ad1fdfe0f2464774->enter($__internal_2127f2eaaf1394de5350f88d4d378a7bd6b9f02b68dcb610ad1fdfe0f2464774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_top_bar"));

        // line 51
        echo "            ";
        $this->displayBlock('page_top_bar', $context, $blocks);
        // line 148
        echo "        ";
        
        $__internal_2127f2eaaf1394de5350f88d4d378a7bd6b9f02b68dcb610ad1fdfe0f2464774->leave($__internal_2127f2eaaf1394de5350f88d4d378a7bd6b9f02b68dcb610ad1fdfe0f2464774_prof);

    }

    // line 51
    public function block_page_top_bar($context, array $blocks = array())
    {
        $__internal_33c014126448bdba297791f822680eedd7e38ed3802343c03cf65e7d00e1451b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c014126448bdba297791f822680eedd7e38ed3802343c03cf65e7d00e1451b->enter($__internal_33c014126448bdba297791f822680eedd7e38ed3802343c03cf65e7d00e1451b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_top_bar"));

        echo " ";
        // line 52
        echo "                ";
        if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isEditor", array()) || ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")))) {
            // line 53
            echo "
                    ";
            // line 54
            if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isEditor", array()) && $this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isInlineEditionOn", array()))) {
                // line 55
                echo "                        <!-- CMS specific variables -->
                        <script>
                            jQuery(document).ready(function() {
                                Sonata.Page.init({
                                    url: {
                                        block_save_position: '";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "objectUrl", array(0 => "sonata.page.admin.page", 1 => "edit", 2 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method"), "html", null, true);
                echo "',
                                        block_edit:          '";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.page.admin.page|sonata.page.admin.block", 1 => "edit", 2 => array("id" => "BLOCK_ID")), "method"), "html", null, true);
                echo "'
                                    }
                                });
                            });
                        </script>
                    ";
            }
            // line 67
            echo "
                    <header class=\"sonata-bc sonata-page-top-bar navbar navbar-inverse navbar-fixed-top\" role=\"banner\"
                    ";
            // line 69
            if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isEditor", array()) && $this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isInlineEditionOn", array()))) {
                // line 70
                echo "                        data-page-editor='";
                echo twig_jsonencode_filter(array("url" => array("block_save_position" => $this->getAttribute(                // line 72
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "objectUrl", array(0 => "sonata.page.admin.page", 1 => "edit", 2 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method"), "block_edit" => $this->getAttribute(                // line 73
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.page.admin.page|sonata.page.admin.block", 1 => "edit", 2 => array("id" => "BLOCK_ID")), "method"))));
                // line 75
                echo "'
                    ";
            }
            // line 76
            echo ">
                        <div class=\"container\">
                            <ul class=\"nav navbar-nav\">
                                ";
            // line 79
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
                // line 80
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.sonata_admin_dashboard", array(), "SonataPageBundle"), "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 82
            echo "
                                ";
            // line 83
            if ($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isEditor", array())) {
                // line 84
                echo "                                    ";
                $context["sites"] = $this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "siteavailables", array());
                // line 85
                echo "
                                    ";
                // line 86
                if (((twig_length_filter($this->env, (isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites"))) > 1) && array_key_exists("site", $context))) {
                    // line 87
                    echo "                                        <li class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "name", array()), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")));
                    foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                        // line 91
                        echo "                                                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "name", array()), "html", null, true);
                        echo "</a></li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 93
                    echo "                                            </ul>
                                        </li>
                                    ";
                }
                // line 96
                echo "
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Page <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            ";
                // line 100
                if (array_key_exists("page", $context)) {
                    // line 101
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "objectUrl", array(0 => "sonata.page.admin.page", 1 => "edit", 2 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method"), "html", null, true);
                    echo "\" target=\"_new\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.edit_page", array(), "SonataPageBundle"), "html", null, true);
                    echo "</a></li>
                                                <li><a href=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "objectUrl", array(0 => "sonata.page.admin.page|sonata.page.admin.snapshot", 1 => "list", 2 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method"), "html", null, true);
                    echo "\" target=\"_new\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.create_snapshot", array(), "SonataPageBundle"), "html", null, true);
                    echo "</a></li>
                                                <li class=\"divider\"></li>
                                            ";
                }
                // line 105
                echo "
                                            <li><a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.page.admin.page", 1 => "list"), "method"), "html", null, true);
                echo "\" target=\"_new\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.view_all_pages", array(), "SonataPageBundle"), "html", null, true);
                echo "</a></li>

                                            ";
                // line 108
                if ((array_key_exists("error_codes", $context) && twig_length_filter($this->env, (isset($context["error_codes"]) ? $context["error_codes"] : $this->getContext($context, "error_codes"))))) {
                    // line 109
                    echo "                                                <li class=\"divider\"></li>
                                                <li><a href=\"";
                    // line 110
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_page_exceptions_list");
                    echo "\" target=\"_new\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.view_all_exceptions", array(), "SonataPageBundle"), "html", null, true);
                    echo "</a></li>
                                            ";
                }
                // line 112
                echo "                                        </ul>
                                    </li>

                                    ";
                // line 115
                if (array_key_exists("page", $context)) {
                    // line 116
                    echo "                                        <li>
                                            <a href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.page.admin.page", 1 => "compose", 2 => array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "method"), "html", null, true);
                    echo "\">
                                                <i class=\"fa fa-magic\"></i>
                                                ";
                    // line 119
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.compose_page", array(), "SonataPageBundle"), "html", null, true);
                    echo "
                                            </a>
                                        </li>
                                    ";
                }
                // line 123
                echo "
                                    ";
                // line 124
                if ((array_key_exists("page", $context) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "enabled", array()))) {
                    // line 125
                    echo "                                        <li><span style=\"padding-left: 20px; background: red;\"><strong><em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.page_is_disabled", array(), "SonataPageBundle"), "html", null, true);
                    echo "</em></strong></span></li>
                                    ";
                }
                // line 127
                echo "
                                    ";
                // line 128
                if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isInlineEditionOn", array()) && array_key_exists("page", $context))) {
                    // line 129
                    echo "                                        <li>
                                            <form class=\"form-inline\" style=\"margin: 0px\">
                                                <label class=\"checkbox inline\" for=\"page-action-enabled-edit\"><input type=\"checkbox\" id=\"page-action-enabled-edit\">";
                    // line 131
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.show_zone", array(), "SonataPageBundle"), "html", null, true);
                    echo "</label>
                                                <input type=\"submit\" class=\"btn\" value=\"";
                    // line 132
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_save_position", array(), "SonataPageBundle"), "html", null, true);
                    echo "\" id=\"page-action-save-position\">
                                            </form>
                                        </li>
                                    ";
                }
                // line 136
                echo "                                ";
            }
            // line 137
            echo "
                                ";
            // line 138
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN"))) {
                // line 139
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage", array("_switch_user" => "_exit"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.switch_user_exit", array(), "SonataPageBundle"), "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 141
            echo "
                            </ul>
                        </div>
                    </header>

                ";
        }
        // line 147
        echo "            ";
        
        $__internal_33c014126448bdba297791f822680eedd7e38ed3802343c03cf65e7d00e1451b->leave($__internal_33c014126448bdba297791f822680eedd7e38ed3802343c03cf65e7d00e1451b_prof);

    }

    // line 150
    public function block_sonata_page_container($context, array $blocks = array())
    {
        $__internal_1efc083eb14542ff811b57d42ae0fa9f673cc08b400f509a8fb17330aebfc463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efc083eb14542ff811b57d42ae0fa9f673cc08b400f509a8fb17330aebfc463->enter($__internal_1efc083eb14542ff811b57d42ae0fa9f673cc08b400f509a8fb17330aebfc463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_container"));

        // line 151
        echo "            ";
        $this->displayBlock('page_container', $context, $blocks);
        echo " ";
        // line 152
        echo "        ";
        
        $__internal_1efc083eb14542ff811b57d42ae0fa9f673cc08b400f509a8fb17330aebfc463->leave($__internal_1efc083eb14542ff811b57d42ae0fa9f673cc08b400f509a8fb17330aebfc463_prof);

    }

    // line 151
    public function block_page_container($context, array $blocks = array())
    {
        $__internal_338cd567ad68c2b73a59b75dda316d0ed1dae81587bc64d420434e106216adda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338cd567ad68c2b73a59b75dda316d0ed1dae81587bc64d420434e106216adda->enter($__internal_338cd567ad68c2b73a59b75dda316d0ed1dae81587bc64d420434e106216adda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_container"));

        
        $__internal_338cd567ad68c2b73a59b75dda316d0ed1dae81587bc64d420434e106216adda->leave($__internal_338cd567ad68c2b73a59b75dda316d0ed1dae81587bc64d420434e106216adda_prof);

    }

    // line 154
    public function block_sonata_page_asset_footer($context, array $blocks = array())
    {
        $__internal_ec58dd33c16c35896f420d806d396fc983679dfccbacf72928da1967b2696c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec58dd33c16c35896f420d806d396fc983679dfccbacf72928da1967b2696c2f->enter($__internal_ec58dd33c16c35896f420d806d396fc983679dfccbacf72928da1967b2696c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_asset_footer"));

        // line 155
        echo "            ";
        $this->displayBlock('page_asset_footer', $context, $blocks);
        // line 175
        echo "        ";
        
        $__internal_ec58dd33c16c35896f420d806d396fc983679dfccbacf72928da1967b2696c2f->leave($__internal_ec58dd33c16c35896f420d806d396fc983679dfccbacf72928da1967b2696c2f_prof);

    }

    // line 155
    public function block_page_asset_footer($context, array $blocks = array())
    {
        $__internal_7064a355c19020e0b52e1dcc6b8776f687cc38146d19ee8eabaa86596990d1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7064a355c19020e0b52e1dcc6b8776f687cc38146d19ee8eabaa86596990d1ec->enter($__internal_7064a355c19020e0b52e1dcc6b8776f687cc38146d19ee8eabaa86596990d1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_asset_footer"));

        echo " ";
        // line 156
        echo "                ";
        if (array_key_exists("page", $context)) {
            // line 157
            echo "                    ";
            if ( !twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "javascript", array()))) {
                // line 158
                echo "                        <script>
                            ";
                // line 159
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "javascript", array());
                echo "
                        </script>
                    ";
            }
            // line 162
            echo "                    ";
            if ( !twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "stylesheet", array()))) {
                // line 163
                echo "                        <style>
                            ";
                // line 164
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "stylesheet", array());
                echo "
                        </style>
                    ";
            }
            // line 167
            echo "                ";
        }
        // line 168
        echo "                ";
        // line 172
        echo "                ";
        echo call_user_func_array($this->env->getFunction('sonata_block_include_stylesheets')->getCallable(), array("screen", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array())));
        echo "
                ";
        // line 173
        echo call_user_func_array($this->env->getFunction('sonata_block_include_javascripts')->getCallable(), array("screen", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array())));
        echo "
            ";
        
        $__internal_7064a355c19020e0b52e1dcc6b8776f687cc38146d19ee8eabaa86596990d1ec->leave($__internal_7064a355c19020e0b52e1dcc6b8776f687cc38146d19ee8eabaa86596990d1ec_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  574 => 173,  569 => 172,  567 => 168,  564 => 167,  558 => 164,  555 => 163,  552 => 162,  546 => 159,  543 => 158,  540 => 157,  537 => 156,  530 => 155,  523 => 175,  520 => 155,  514 => 154,  503 => 151,  496 => 152,  492 => 151,  486 => 150,  479 => 147,  471 => 141,  463 => 139,  461 => 138,  458 => 137,  455 => 136,  448 => 132,  444 => 131,  440 => 129,  438 => 128,  435 => 127,  429 => 125,  427 => 124,  424 => 123,  417 => 119,  412 => 117,  409 => 116,  407 => 115,  402 => 112,  395 => 110,  392 => 109,  390 => 108,  383 => 106,  380 => 105,  372 => 102,  365 => 101,  363 => 100,  357 => 96,  352 => 93,  341 => 91,  337 => 90,  332 => 88,  329 => 87,  327 => 86,  324 => 85,  321 => 84,  319 => 83,  316 => 82,  308 => 80,  306 => 79,  301 => 76,  297 => 75,  295 => 73,  294 => 72,  292 => 70,  290 => 69,  286 => 67,  277 => 61,  273 => 60,  266 => 55,  264 => 54,  261 => 53,  258 => 52,  251 => 51,  244 => 148,  241 => 51,  235 => 50,  227 => 47,  221 => 46,  214 => 40,  205 => 38,  201 => 37,  194 => 32,  187 => 31,  179 => 41,  176 => 31,  170 => 30,  163 => 27,  154 => 25,  149 => 24,  142 => 23,  135 => 28,  132 => 23,  126 => 22,  118 => 43,  116 => 30,  113 => 29,  111 => 22,  106 => 20,  102 => 19,  95 => 16,  89 => 15,  80 => 13,  77 => 12,  71 => 11,  60 => 176,  58 => 154,  55 => 153,  53 => 150,  50 => 149,  48 => 50,  45 => 49,  43 => 46,  40 => 45,  37 => 15,  35 => 11,);
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
{%- block sonata_page_html_tag -%}
<!DOCTYPE html>
<html {{ sonata_seo_html_attributes() }}>
{% endblock %}
    {% block sonata_page_head %}
        <head {{ sonata_seo_head_attributes() }}>

            <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><![endif]-->
            {{ sonata_seo_title() }}
            {{ sonata_seo_metadatas() }}

            {% block sonata_page_stylesheets %}
                {% block page_stylesheets %} {# Deprecated block #}
                    {% for stylesheet in sonata_page.assets.stylesheets %}
                        <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\" media=\"all\">
                    {% endfor %}
                {% endblock %}
            {% endblock %}

            {% block sonata_page_javascripts %}
                {% block page_javascripts %} {# Deprecated block #}
                    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
                    <!--[if lt IE 9]>
                        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                    <![endif]-->

                    {% for js in sonata_page.assets.javascripts %}
                        <script src=\"{{ asset(js) }}\"></script>
                    {% endfor %}
                {% endblock %}

            {% endblock %}
        </head>
    {% endblock %}

    {% block sonata_page_body_tag %}
        <body class=\"sonata-bc\">
    {% endblock %}

        {% block sonata_page_top_bar %}
            {% block page_top_bar %} {# Deprecated block #}
                {% if sonata_page.isEditor or ( app.user and is_granted('ROLE_PREVIOUS_ADMIN') ) %}

                    {% if sonata_page.isEditor and sonata_page.isInlineEditionOn %}
                        <!-- CMS specific variables -->
                        <script>
                            jQuery(document).ready(function() {
                                Sonata.Page.init({
                                    url: {
                                        block_save_position: '{{ sonata_admin.objectUrl('sonata.page.admin.page', 'edit', page) }}',
                                        block_edit:          '{{ sonata_admin.url('sonata.page.admin.page|sonata.page.admin.block', 'edit', {'id': 'BLOCK_ID'}) }}'
                                    }
                                });
                            });
                        </script>
                    {% endif %}

                    <header class=\"sonata-bc sonata-page-top-bar navbar navbar-inverse navbar-fixed-top\" role=\"banner\"
                    {% if sonata_page.isEditor and sonata_page.isInlineEditionOn %}
                        data-page-editor='{{ {
                            url: {
                                block_save_position: sonata_admin.objectUrl('sonata.page.admin.page', 'edit', page),
                                block_edit:          sonata_admin.url('sonata.page.admin.page|sonata.page.admin.block', 'edit', {'id': 'BLOCK_ID'})
                            }
                        }|json_encode()|raw }}'
                    {% endif %}>
                        <div class=\"container\">
                            <ul class=\"nav navbar-nav\">
                                {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                    <li><a href=\"{{ path('sonata_admin_dashboard') }}\">{{ \"header.sonata_admin_dashboard\"|trans({}, 'SonataPageBundle') }}</a></li>
                                {% endif %}

                                {% if sonata_page.isEditor %}
                                    {% set sites = sonata_page.siteavailables %}

                                    {% if sites|length > 1 and site is defined %}
                                        <li class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ site.name }} <span class=\"caret\"></span></a>
                                            <ul class=\"dropdown-menu\">
                                                {% for site in sites %}
                                                    <li><a href=\"{{ site.url }}\">{{ site.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </li>
                                    {% endif %}

                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Page <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            {% if page is defined %}
                                                <li><a href=\"{{ sonata_admin.objectUrl('sonata.page.admin.page', 'edit', page) }}\" target=\"_new\">{{ \"header.edit_page\"|trans({}, 'SonataPageBundle') }}</a></li>
                                                <li><a href=\"{{ sonata_admin.objectUrl('sonata.page.admin.page|sonata.page.admin.snapshot', 'list', page) }}\" target=\"_new\">{{ \"header.create_snapshot\"|trans({}, 'SonataPageBundle') }}</a></li>
                                                <li class=\"divider\"></li>
                                            {% endif %}

                                            <li><a href=\"{{ sonata_admin.url('sonata.page.admin.page', 'list') }}\" target=\"_new\">{{ \"header.view_all_pages\"|trans({}, 'SonataPageBundle') }}</a></li>

                                            {% if error_codes is defined and error_codes|length %}
                                                <li class=\"divider\"></li>
                                                <li><a href=\"{{ path('sonata_page_exceptions_list') }}\" target=\"_new\">{{ \"header.view_all_exceptions\"|trans({}, 'SonataPageBundle') }}</a></li>
                                            {% endif %}
                                        </ul>
                                    </li>

                                    {% if page is defined %}
                                        <li>
                                            <a href=\"{{ sonata_admin.url('sonata.page.admin.page', 'compose', {'id': page.id}) }}\">
                                                <i class=\"fa fa-magic\"></i>
                                                {{ 'header.compose_page'|trans({}, 'SonataPageBundle')}}
                                            </a>
                                        </li>
                                    {% endif %}

                                    {% if page is defined and not page.enabled %}
                                        <li><span style=\"padding-left: 20px; background: red;\"><strong><em>{{ 'header.page_is_disabled'|trans([], 'SonataPageBundle') }}</em></strong></span></li>
                                    {% endif %}

                                    {% if sonata_page.isInlineEditionOn and page is defined %}
                                        <li>
                                            <form class=\"form-inline\" style=\"margin: 0px\">
                                                <label class=\"checkbox inline\" for=\"page-action-enabled-edit\"><input type=\"checkbox\" id=\"page-action-enabled-edit\">{{ 'header.show_zone'|trans({}, 'SonataPageBundle') }}</label>
                                                <input type=\"submit\" class=\"btn\" value=\"{{ 'btn_save_position'|trans({}, 'SonataPageBundle') }}\" id=\"page-action-save-position\">
                                            </form>
                                        </li>
                                    {% endif %}
                                {% endif %}

                                {% if app.user and is_granted('ROLE_PREVIOUS_ADMIN') %}
                                    <li><a href=\"{{ url('homepage', {'_switch_user': '_exit'}) }}\">{{ \"header.switch_user_exit\"|trans({}, 'SonataPageBundle')}}</a></li>
                                {% endif %}

                            </ul>
                        </div>
                    </header>

                {% endif %}
            {% endblock %}
        {% endblock %}

        {% block sonata_page_container %}
            {% block page_container %}{% endblock %} {# Deprecated block #}
        {% endblock %}

        {% block sonata_page_asset_footer %}
            {% block page_asset_footer %} {# Deprecated block #}
                {% if page is defined %}
                    {% if page.javascript is not empty %}
                        <script>
                            {{ page.javascript|raw }}
                        </script>
                    {% endif %}
                    {% if page.stylesheet is not empty %}
                        <style>
                            {{ page.stylesheet|raw }}
                        </style>
                    {% endif %}
                {% endif %}
                {#
                    These includes can be done only at this point as all blocks are loaded,
                    Limition : this does not work if a global page is loaded from an ESI tag inside a container block
                #}
                {{ sonata_block_include_stylesheets('screen', app.request.basePath) }}
                {{ sonata_block_include_javascripts('screen', app.request.basePath) }}
            {% endblock %}
        {% endblock %}

        <!-- monitoring:3e9fda56df2cdd3b039f189693ab7844fbb2d4f6 -->
    </body>
</html>
", "@SonataPage/base_layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\base_layout.html.twig");
    }
}
