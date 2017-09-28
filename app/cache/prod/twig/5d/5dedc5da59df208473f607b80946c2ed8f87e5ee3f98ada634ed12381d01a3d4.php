<?php

/* SonataPageBundle::base_layout.html.twig */
class __TwigTemplate_e832a8c945fa8c145f09cc27a745f88024129a18879dcfc6a0575e8ec0714939 extends Twig_Template
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
    }

    // line 11
    public function block_sonata_page_html_tag($context, array $blocks = array())
    {
        // line 12
        echo "<!DOCTYPE html>
<html ";
        // line 13
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getHtmlAttributes();
        echo ">
";
    }

    // line 15
    public function block_sonata_page_head($context, array $blocks = array())
    {
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
    }

    // line 22
    public function block_sonata_page_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "                ";
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 28
        echo "            ";
    }

    // line 23
    public function block_page_stylesheets($context, array $blocks = array())
    {
        echo " ";
        // line 24
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : null), "assets", array()), "stylesheets", array()));
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
    }

    // line 30
    public function block_sonata_page_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "                ";
        $this->displayBlock('page_javascripts', $context, $blocks);
        // line 41
        echo "
            ";
    }

    // line 31
    public function block_page_javascripts($context, array $blocks = array())
    {
        echo " ";
        // line 32
        echo "                    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
                    <!--[if lt IE 9]>
                        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                    <![endif]-->

                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : null), "assets", array()), "javascripts", array()));
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
    }

    // line 46
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        // line 47
        echo "        <body class=\"sonata-bc\">
    ";
    }

    // line 50
    public function block_sonata_page_top_bar($context, array $blocks = array())
    {
        // line 51
        echo "            ";
        $this->displayBlock('page_top_bar', $context, $blocks);
        // line 148
        echo "        ";
    }

    // line 51
    public function block_page_top_bar($context, array $blocks = array())
    {
        echo " ";
        // line 52
        echo "                ";
        if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : null), "isEditor", array()) || ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")))) {
            // line 53
            echo "
                    ";
            // line 54
            if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : null), "isEditor", array()) && $this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : null), "isInlineEditionOn", array()))) {
                // line 55
                echo "                        <!-- CMS specific variables -->
                        <script>
                            jQuery(document).ready(function() {
                                Sonata.Page.init({
                                    url: {
                                        block_save_position: '";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "objectUrl", array(0 => "sonata.page.admin.page", 1 => "edit", 2 => (isset($context["page"]) ? $context["page"] : null)), "method"), "html", null, true);
                echo "',
                                        block_edit:          '";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "url", array(0 => "sonata.page.admin.page|sonata.page.admin.block", 1 => "edit", 2 => array("id" => "BLOCK_ID")), "method"), "html", null, true);
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
            if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : null), "isEditor", array()) && $this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : null), "isInlineEditionOn", array()))) {
                // line 70
                echo "                        data-page-editor='";
                echo twig_jsonencode_filter(array("url" => array("block_save_position" => $this->getAttribute(                // line 72
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "objectUrl", array(0 => "sonata.page.admin.page", 1 => "edit", 2 => (isset($context["page"]) ? $context["page"] : null)), "method"), "block_edit" => $this->getAttribute(                // line 73
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "url", array(0 => "sonata.page.admin.page|sonata.page.admin.block", 1 => "edit", 2 => array("id" => "BLOCK_ID")), "method"))));
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
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
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
            if ($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : null), "isEditor", array())) {
                // line 84
                echo "                                    ";
                $context["sites"] = $this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : null), "siteavailables", array());
                // line 85
                echo "
                                    ";
                // line 86
                if (((twig_length_filter($this->env, (isset($context["sites"]) ? $context["sites"] : null)) > 1) && array_key_exists("site", $context))) {
                    // line 87
                    echo "                                        <li class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array()), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) ? $context["sites"] : null));
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
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "objectUrl", array(0 => "sonata.page.admin.page", 1 => "edit", 2 => (isset($context["page"]) ? $context["page"] : null)), "method"), "html", null, true);
                    echo "\" target=\"_new\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.edit_page", array(), "SonataPageBundle"), "html", null, true);
                    echo "</a></li>
                                                <li><a href=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "objectUrl", array(0 => "sonata.page.admin.page|sonata.page.admin.snapshot", 1 => "list", 2 => (isset($context["page"]) ? $context["page"] : null)), "method"), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "url", array(0 => "sonata.page.admin.page", 1 => "list"), "method"), "html", null, true);
                echo "\" target=\"_new\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.view_all_pages", array(), "SonataPageBundle"), "html", null, true);
                echo "</a></li>

                                            ";
                // line 108
                if ((array_key_exists("error_codes", $context) && twig_length_filter($this->env, (isset($context["error_codes"]) ? $context["error_codes"] : null)))) {
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
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "url", array(0 => "sonata.page.admin.page", 1 => "compose", 2 => array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "id", array()))), "method"), "html", null, true);
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
                if ((array_key_exists("page", $context) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "enabled", array()))) {
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
                if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : null), "isInlineEditionOn", array()) && array_key_exists("page", $context))) {
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
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN"))) {
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
    }

    // line 150
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 151
        echo "            ";
        $this->displayBlock('page_container', $context, $blocks);
        echo " ";
        // line 152
        echo "        ";
    }

    // line 151
    public function block_page_container($context, array $blocks = array())
    {
    }

    // line 154
    public function block_sonata_page_asset_footer($context, array $blocks = array())
    {
        // line 155
        echo "            ";
        $this->displayBlock('page_asset_footer', $context, $blocks);
        // line 175
        echo "        ";
    }

    // line 155
    public function block_page_asset_footer($context, array $blocks = array())
    {
        echo " ";
        // line 156
        echo "                ";
        if (array_key_exists("page", $context)) {
            // line 157
            echo "                    ";
            if ( !twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "javascript", array()))) {
                // line 158
                echo "                        <script>
                            ";
                // line 159
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "javascript", array());
                echo "
                        </script>
                    ";
            }
            // line 162
            echo "                    ";
            if ( !twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stylesheet", array()))) {
                // line 163
                echo "                        <style>
                            ";
                // line 164
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "stylesheet", array());
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
        echo call_user_func_array($this->env->getFunction('sonata_block_include_stylesheets')->getCallable(), array("screen", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basePath", array())));
        echo "
                ";
        // line 173
        echo call_user_func_array($this->env->getFunction('sonata_block_include_javascripts')->getCallable(), array("screen", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basePath", array())));
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle::base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  493 => 173,  488 => 172,  486 => 168,  483 => 167,  477 => 164,  474 => 163,  471 => 162,  465 => 159,  462 => 158,  459 => 157,  456 => 156,  452 => 155,  448 => 175,  445 => 155,  442 => 154,  437 => 151,  433 => 152,  429 => 151,  426 => 150,  422 => 147,  414 => 141,  406 => 139,  404 => 138,  401 => 137,  398 => 136,  391 => 132,  387 => 131,  383 => 129,  381 => 128,  378 => 127,  372 => 125,  370 => 124,  367 => 123,  360 => 119,  355 => 117,  352 => 116,  350 => 115,  345 => 112,  338 => 110,  335 => 109,  333 => 108,  326 => 106,  323 => 105,  315 => 102,  308 => 101,  306 => 100,  300 => 96,  295 => 93,  284 => 91,  280 => 90,  275 => 88,  272 => 87,  270 => 86,  267 => 85,  264 => 84,  262 => 83,  259 => 82,  251 => 80,  249 => 79,  244 => 76,  240 => 75,  238 => 73,  237 => 72,  235 => 70,  233 => 69,  229 => 67,  220 => 61,  216 => 60,  209 => 55,  207 => 54,  204 => 53,  201 => 52,  197 => 51,  193 => 148,  190 => 51,  187 => 50,  182 => 47,  179 => 46,  175 => 40,  166 => 38,  162 => 37,  155 => 32,  151 => 31,  146 => 41,  143 => 31,  140 => 30,  136 => 27,  127 => 25,  122 => 24,  118 => 23,  114 => 28,  111 => 23,  108 => 22,  103 => 43,  101 => 30,  98 => 29,  96 => 22,  91 => 20,  87 => 19,  80 => 16,  77 => 15,  71 => 13,  68 => 12,  65 => 11,  57 => 176,  55 => 154,  52 => 153,  50 => 150,  47 => 149,  45 => 50,  42 => 49,  40 => 46,  37 => 45,  34 => 15,  32 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataPageBundle::base_layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/base_layout.html.twig");
    }
}
