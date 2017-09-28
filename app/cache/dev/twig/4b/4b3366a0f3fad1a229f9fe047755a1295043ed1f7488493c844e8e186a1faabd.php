<?php

/* SonataPageBundle::base_layout.html.twig */
class __TwigTemplate_8aad0e407818b027dc0769634681f92bd883f7e41c2ea86c00174e768aa064cd extends Twig_Template
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
        $__internal_e51c934a936fd37d8f2a2b907a927b165e17f69bace4c236d514de8d503f0703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51c934a936fd37d8f2a2b907a927b165e17f69bace4c236d514de8d503f0703->enter($__internal_e51c934a936fd37d8f2a2b907a927b165e17f69bace4c236d514de8d503f0703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle::base_layout.html.twig"));

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
        
        $__internal_e51c934a936fd37d8f2a2b907a927b165e17f69bace4c236d514de8d503f0703->leave($__internal_e51c934a936fd37d8f2a2b907a927b165e17f69bace4c236d514de8d503f0703_prof);

    }

    // line 11
    public function block_sonata_page_html_tag($context, array $blocks = array())
    {
        $__internal_38d9e9a55ae10c8c5169246d5faa0ca90d92825aab8c3b768875780b02a1b57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d9e9a55ae10c8c5169246d5faa0ca90d92825aab8c3b768875780b02a1b57b->enter($__internal_38d9e9a55ae10c8c5169246d5faa0ca90d92825aab8c3b768875780b02a1b57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_html_tag"));

        // line 12
        echo "<!DOCTYPE html>
<html ";
        // line 13
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getHtmlAttributes();
        echo ">
";
        
        $__internal_38d9e9a55ae10c8c5169246d5faa0ca90d92825aab8c3b768875780b02a1b57b->leave($__internal_38d9e9a55ae10c8c5169246d5faa0ca90d92825aab8c3b768875780b02a1b57b_prof);

    }

    // line 15
    public function block_sonata_page_head($context, array $blocks = array())
    {
        $__internal_6759a79af80144e85969edc1e29e592938a9bf4dec97b0a5a34581f55e54e776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6759a79af80144e85969edc1e29e592938a9bf4dec97b0a5a34581f55e54e776->enter($__internal_6759a79af80144e85969edc1e29e592938a9bf4dec97b0a5a34581f55e54e776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_head"));

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
        
        $__internal_6759a79af80144e85969edc1e29e592938a9bf4dec97b0a5a34581f55e54e776->leave($__internal_6759a79af80144e85969edc1e29e592938a9bf4dec97b0a5a34581f55e54e776_prof);

    }

    // line 22
    public function block_sonata_page_stylesheets($context, array $blocks = array())
    {
        $__internal_96f949386536f20656c6e9498be88c4385f89e13bae93fc5b374a1207e5c6e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f949386536f20656c6e9498be88c4385f89e13bae93fc5b374a1207e5c6e7b->enter($__internal_96f949386536f20656c6e9498be88c4385f89e13bae93fc5b374a1207e5c6e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_stylesheets"));

        // line 23
        echo "                ";
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 28
        echo "            ";
        
        $__internal_96f949386536f20656c6e9498be88c4385f89e13bae93fc5b374a1207e5c6e7b->leave($__internal_96f949386536f20656c6e9498be88c4385f89e13bae93fc5b374a1207e5c6e7b_prof);

    }

    // line 23
    public function block_page_stylesheets($context, array $blocks = array())
    {
        $__internal_3e862b88229bebdd029be2a028174a138fca57272dbf4a80f185b303a4c4bdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e862b88229bebdd029be2a028174a138fca57272dbf4a80f185b303a4c4bdfe->enter($__internal_3e862b88229bebdd029be2a028174a138fca57272dbf4a80f185b303a4c4bdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_stylesheets"));

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
        
        $__internal_3e862b88229bebdd029be2a028174a138fca57272dbf4a80f185b303a4c4bdfe->leave($__internal_3e862b88229bebdd029be2a028174a138fca57272dbf4a80f185b303a4c4bdfe_prof);

    }

    // line 30
    public function block_sonata_page_javascripts($context, array $blocks = array())
    {
        $__internal_e4bb02c5b765d99b745e0484426dc805fc770e4632b5f4998aa3c8135083a762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bb02c5b765d99b745e0484426dc805fc770e4632b5f4998aa3c8135083a762->enter($__internal_e4bb02c5b765d99b745e0484426dc805fc770e4632b5f4998aa3c8135083a762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_javascripts"));

        // line 31
        echo "                ";
        $this->displayBlock('page_javascripts', $context, $blocks);
        // line 41
        echo "
            ";
        
        $__internal_e4bb02c5b765d99b745e0484426dc805fc770e4632b5f4998aa3c8135083a762->leave($__internal_e4bb02c5b765d99b745e0484426dc805fc770e4632b5f4998aa3c8135083a762_prof);

    }

    // line 31
    public function block_page_javascripts($context, array $blocks = array())
    {
        $__internal_85437b219a40030d3b31b75a5b1868599f9799fc1b0f809ed4a3f8ec72df2af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85437b219a40030d3b31b75a5b1868599f9799fc1b0f809ed4a3f8ec72df2af3->enter($__internal_85437b219a40030d3b31b75a5b1868599f9799fc1b0f809ed4a3f8ec72df2af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_javascripts"));

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
        
        $__internal_85437b219a40030d3b31b75a5b1868599f9799fc1b0f809ed4a3f8ec72df2af3->leave($__internal_85437b219a40030d3b31b75a5b1868599f9799fc1b0f809ed4a3f8ec72df2af3_prof);

    }

    // line 46
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        $__internal_e12008c1c10bb8e1c2cf04662969abf94a28a37453cae36efe589d787f5cabaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12008c1c10bb8e1c2cf04662969abf94a28a37453cae36efe589d787f5cabaf->enter($__internal_e12008c1c10bb8e1c2cf04662969abf94a28a37453cae36efe589d787f5cabaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_body_tag"));

        // line 47
        echo "        <body class=\"sonata-bc\">
    ";
        
        $__internal_e12008c1c10bb8e1c2cf04662969abf94a28a37453cae36efe589d787f5cabaf->leave($__internal_e12008c1c10bb8e1c2cf04662969abf94a28a37453cae36efe589d787f5cabaf_prof);

    }

    // line 50
    public function block_sonata_page_top_bar($context, array $blocks = array())
    {
        $__internal_b42c040b103ae599a2321f1e75d2f1c0c656225f2abd77efb0a8fb840a7a7d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42c040b103ae599a2321f1e75d2f1c0c656225f2abd77efb0a8fb840a7a7d29->enter($__internal_b42c040b103ae599a2321f1e75d2f1c0c656225f2abd77efb0a8fb840a7a7d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_top_bar"));

        // line 51
        echo "            ";
        $this->displayBlock('page_top_bar', $context, $blocks);
        // line 148
        echo "        ";
        
        $__internal_b42c040b103ae599a2321f1e75d2f1c0c656225f2abd77efb0a8fb840a7a7d29->leave($__internal_b42c040b103ae599a2321f1e75d2f1c0c656225f2abd77efb0a8fb840a7a7d29_prof);

    }

    // line 51
    public function block_page_top_bar($context, array $blocks = array())
    {
        $__internal_00f52ad07d481a5d9079b0de594fc6dad8ed1358a59671236b0f6b4505cdbe1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f52ad07d481a5d9079b0de594fc6dad8ed1358a59671236b0f6b4505cdbe1a->enter($__internal_00f52ad07d481a5d9079b0de594fc6dad8ed1358a59671236b0f6b4505cdbe1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_top_bar"));

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
        
        $__internal_00f52ad07d481a5d9079b0de594fc6dad8ed1358a59671236b0f6b4505cdbe1a->leave($__internal_00f52ad07d481a5d9079b0de594fc6dad8ed1358a59671236b0f6b4505cdbe1a_prof);

    }

    // line 150
    public function block_sonata_page_container($context, array $blocks = array())
    {
        $__internal_10ee3299c61872e317b70dd406d9e349d7a7f5a6317131bd92514a618764b376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ee3299c61872e317b70dd406d9e349d7a7f5a6317131bd92514a618764b376->enter($__internal_10ee3299c61872e317b70dd406d9e349d7a7f5a6317131bd92514a618764b376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_container"));

        // line 151
        echo "            ";
        $this->displayBlock('page_container', $context, $blocks);
        echo " ";
        // line 152
        echo "        ";
        
        $__internal_10ee3299c61872e317b70dd406d9e349d7a7f5a6317131bd92514a618764b376->leave($__internal_10ee3299c61872e317b70dd406d9e349d7a7f5a6317131bd92514a618764b376_prof);

    }

    // line 151
    public function block_page_container($context, array $blocks = array())
    {
        $__internal_4e5fe4778c03523c3adb774bc760c4fad8a41e6724d00005fcff310ea217f504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5fe4778c03523c3adb774bc760c4fad8a41e6724d00005fcff310ea217f504->enter($__internal_4e5fe4778c03523c3adb774bc760c4fad8a41e6724d00005fcff310ea217f504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_container"));

        
        $__internal_4e5fe4778c03523c3adb774bc760c4fad8a41e6724d00005fcff310ea217f504->leave($__internal_4e5fe4778c03523c3adb774bc760c4fad8a41e6724d00005fcff310ea217f504_prof);

    }

    // line 154
    public function block_sonata_page_asset_footer($context, array $blocks = array())
    {
        $__internal_0320e73e70c51e570e779caef6a96f54c5b4c1e3c22d82b45c40b3e4c74fa503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0320e73e70c51e570e779caef6a96f54c5b4c1e3c22d82b45c40b3e4c74fa503->enter($__internal_0320e73e70c51e570e779caef6a96f54c5b4c1e3c22d82b45c40b3e4c74fa503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_asset_footer"));

        // line 155
        echo "            ";
        $this->displayBlock('page_asset_footer', $context, $blocks);
        // line 175
        echo "        ";
        
        $__internal_0320e73e70c51e570e779caef6a96f54c5b4c1e3c22d82b45c40b3e4c74fa503->leave($__internal_0320e73e70c51e570e779caef6a96f54c5b4c1e3c22d82b45c40b3e4c74fa503_prof);

    }

    // line 155
    public function block_page_asset_footer($context, array $blocks = array())
    {
        $__internal_d0b8bad571b6d85d6b9ba77bcaca7f586ffc8900620bcc626a07cb32aae54ac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b8bad571b6d85d6b9ba77bcaca7f586ffc8900620bcc626a07cb32aae54ac2->enter($__internal_d0b8bad571b6d85d6b9ba77bcaca7f586ffc8900620bcc626a07cb32aae54ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_asset_footer"));

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
        
        $__internal_d0b8bad571b6d85d6b9ba77bcaca7f586ffc8900620bcc626a07cb32aae54ac2->leave($__internal_d0b8bad571b6d85d6b9ba77bcaca7f586ffc8900620bcc626a07cb32aae54ac2_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle::base_layout.html.twig";
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
", "SonataPageBundle::base_layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/base_layout.html.twig");
    }
}
