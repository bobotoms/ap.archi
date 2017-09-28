<?php

/* @ApplicationSonataPage/layout-custom.html.twig */
class __TwigTemplate_d8447714d8d0e4f1fe769f99ff288b8351bb51ab593cbb4d78028fc791069055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataPageBundle::base_layout.html.twig", "@ApplicationSonataPage/layout-custom.html.twig", 11);
        $this->blocks = array(
            'page_stylesheets' => array($this, 'block_page_stylesheets'),
            'page_javascripts' => array($this, 'block_page_javascripts'),
            'sonata_page_body_tag' => array($this, 'block_sonata_page_body_tag'),
            'sonata_page_top_bar' => array($this, 'block_sonata_page_top_bar'),
            'sonata_page_container' => array($this, 'block_sonata_page_container'),
            'page_content' => array($this, 'block_page_content'),
            'page_asset_footer' => array($this, 'block_page_asset_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle::base_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b26838dcc287223ea25b73176373b97257d04a6cb28fee16ae10d63ac1a0a29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26838dcc287223ea25b73176373b97257d04a6cb28fee16ae10d63ac1a0a29c->enter($__internal_b26838dcc287223ea25b73176373b97257d04a6cb28fee16ae10d63ac1a0a29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ApplicationSonataPage/layout-custom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b26838dcc287223ea25b73176373b97257d04a6cb28fee16ae10d63ac1a0a29c->leave($__internal_b26838dcc287223ea25b73176373b97257d04a6cb28fee16ae10d63ac1a0a29c_prof);

    }

    // line 18
    public function block_page_stylesheets($context, array $blocks = array())
    {
        $__internal_47ea025b2de54e280b770bbc744fcd670141e490b6eb9e43da822f8be85719f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ea025b2de54e280b770bbc744fcd670141e490b6eb9e43da822f8be85719f0->enter($__internal_47ea025b2de54e280b770bbc744fcd670141e490b6eb9e43da822f8be85719f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_stylesheets"));

        // line 19
        echo "    
";
        // line 21
        echo "        <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/bootstrap.css\" type=\"text/css\" />

        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/fonts.css\" type=\"text/css\" />

        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/style.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/custom.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/swiper.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/dark.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/font-icons.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/animate.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/magnific-popup.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/responsive.css\" type=\"text/css\" />

        <!-- Include Final Tiles Gallery stylesheet (Homepage) -->
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/finaltilesgallery.css\">
        <!-- Bootstrap Select CSS (à déplacer dans les vues contenant les filtres )-->
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/components/bs-select.css\" type=\"text/css\" />

        <style>


            body, div, h1,h2, form, fieldset, input, textarea, footer,p {
                margin: 0; padding: 0; border: 0; outline: none;
            }


            @font-face {
                font-family: 'YanoneKaffeesatzRegular';
                src: url('yanonekaffeesatz-regular-webfont.eot');
                src: url('yanonekaffeesatz-regular-webfont.eot?#iefix') format('embedded-opentype'),
                url('yanonekaffeesatz-regular-webfont.woff') format('woff'),
                url('yanonekaffeesatz-regular-webfont.ttf') format('truetype'),
                url('yanonekaffeesatz-regular-webfont.svg#YanoneKaffeesatzRegular') format('svg');
                font-weight: normal;
                font-style: normal;
            }

            body {background: #ccc url('/apArchi/web/bundles/frontoffice/images/bg_out.png'); color: #7c7873; font-family: 'YanoneKaffeesatzRegular';}
            #wrap {width:530px; margin:20px auto 0; height:600px;}
            /*      p {text-shadow:0 1px 0 #fff; font-size:24px;}
                  h1 {margin-bottom:20px; text-align:center;font-size:48px; text-shadow:0 1px 0 #ede8d9; }*/


            #form_wrap { overflow:hidden; height:446px; position:relative; top:0px;
                -webkit-transition: all 1s ease-in-out .3s;
                -moz-transition: all 1s ease-in-out .3s;
                -o-transition: all 1s ease-in-out .3s;
                transition: all 1s ease-in-out .3s;}

            #form_wrap:before {content:\"\";
                position:absolute;
                bottom:128px;left:0px;
                background:url('/apArchi/web/bundles/frontoffice/images/before.png');
                width:530px;height: 316px;}

            #form_wrap:after {
                margin-top: 30px;
                content:\"\";
                position:absolute;
                bottom:0px;
                left:0;
                background:url('/apArchi/web/bundles/frontoffice/images/after.png');
                width:530px;
                height: 260px;
            }

            #form_wrap.hide:after, #form_wrap.hide:before {display:none; }
            #form_wrap:hover {height:776px;top:-200px;}


            form {background:#f7f2ec url('/apArchi/web/bundles/frontoffice/images/letter_bg.png');
                position:relative;top:150px;overflow:hidden;
                height:200px;width:400px;margin:0px auto;padding:20px;
                border: 1px solid #fff;
                border-radius: 3px;
                -moz-border-radius: 3px; -webkit-border-radius: 3px;
                box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
                -moz-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 14px #fff;
                -webkit-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
                -webkit-transition: all 1s ease-in-out .3s;
                -moz-transition: all 1s ease-in-out .3s;
                -o-transition: all 1s ease-in-out .3s;
                transition: all 1s ease-in-out .3s;}


            #form_wrap:hover form {height:530px;}

            label {
                margin: 11px 20px 0 0;
                font-size: 16px; color: #b3aba1;
                text-transform: uppercase;
                text-shadow: 0px 1px 0px #fff;
            }

            input[type=text], textarea {
                font: 14px normal normal uppercase helvetica, arial, serif;
                color: #7c7873;background:none;
                width: 380px; height: 36px; padding: 0px 10px; margin: 0 0 10px 0;
                border:1px solid #f8f5f1;
                -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px;
                -moz-box-shadow: inset 0px 0px 1px #726959;
                -webkit-box-shadow:  inset 0px 0px 1px #b3a895;
                box-shadow:  inset 0px 0px 1px #b3a895;
            }

            textarea { height: 80px; padding-top:14px;}

            textarea:focus, input[type=text]:focus {background:rgba(255,255,255,.35);}

            #form_wrap input[type=submit] {
                position:relative;font-family: 'YanoneKaffeesatzRegular';
                font-size:24px; color: #7c7873;text-shadow:0 1px 0 #fff;
                width:100%; text-align:center;opacity:0;
                background:none;
                cursor: pointer;
                -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px;
                -webkit-transition: opacity .6s ease-in-out 0s;
                -moz-transition: opacity .6s ease-in-out 0s;
                -o-transition: opacity .6s ease-in-out 0s;
                transition: opacity .6s ease-in-out 0s;
            }

            #form_wrap:hover input[type=submit] {z-index:1;opacity:1;
                -webkit-transition: opacity .5s ease-in-out 1.3s;
                -moz-transition: opacity .5s ease-in-out 1.3s;
                -o-transition: opacity .5s ease-in-out 1.3s;
                transition: opacity .5s ease-in-out 1.3s;}

            #form_wrap:hover input:hover[type=submit] {color:#435c70;}

        </style>
    \t
    ";
        
        $__internal_47ea025b2de54e280b770bbc744fcd670141e490b6eb9e43da822f8be85719f0->leave($__internal_47ea025b2de54e280b770bbc744fcd670141e490b6eb9e43da822f8be85719f0_prof);

    }

    // line 157
    public function block_page_javascripts($context, array $blocks = array())
    {
        $__internal_65b97845d206c41d886f0e6fbde11312effb5dd6377af094af9a67202050e621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b97845d206c41d886f0e6fbde11312effb5dd6377af094af9a67202050e621->enter($__internal_65b97845d206c41d886f0e6fbde11312effb5dd6377af094af9a67202050e621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_javascripts"));

        // line 158
        echo "        <script src=\"https://use.fontawesome.com/4abfd00f83.js\"></script>
    ";
        
        $__internal_65b97845d206c41d886f0e6fbde11312effb5dd6377af094af9a67202050e621->leave($__internal_65b97845d206c41d886f0e6fbde11312effb5dd6377af094af9a67202050e621_prof);

    }

    // line 163
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        $__internal_baa8cea75cadd630d81ce34dd0d77668d9040537d60df473c2af9528c0e684e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa8cea75cadd630d81ce34dd0d77668d9040537d60df473c2af9528c0e684e5->enter($__internal_baa8cea75cadd630d81ce34dd0d77668d9040537d60df473c2af9528c0e684e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_body_tag"));

        // line 164
        echo "    <body class=\"stretched\">
";
        
        $__internal_baa8cea75cadd630d81ce34dd0d77668d9040537d60df473c2af9528c0e684e5->leave($__internal_baa8cea75cadd630d81ce34dd0d77668d9040537d60df473c2af9528c0e684e5_prof);

    }

    // line 167
    public function block_sonata_page_top_bar($context, array $blocks = array())
    {
        $__internal_90cc6595dfb41b03f17f299ddd0e06f28a099a0f38ad3664151b3a898bfdac7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cc6595dfb41b03f17f299ddd0e06f28a099a0f38ad3664151b3a898bfdac7b->enter($__internal_90cc6595dfb41b03f17f299ddd0e06f28a099a0f38ad3664151b3a898bfdac7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_top_bar"));

        
        $__internal_90cc6595dfb41b03f17f299ddd0e06f28a099a0f38ad3664151b3a898bfdac7b->leave($__internal_90cc6595dfb41b03f17f299ddd0e06f28a099a0f38ad3664151b3a898bfdac7b_prof);

    }

    // line 170
    public function block_sonata_page_container($context, array $blocks = array())
    {
        $__internal_b42a487b86e5ff82cb3f38036aa38aa93e9a508f3df11a6f1b037515a77ce0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42a487b86e5ff82cb3f38036aa38aa93e9a508f3df11a6f1b037515a77ce0b2->enter($__internal_b42a487b86e5ff82cb3f38036aa38aa93e9a508f3df11a6f1b037515a77ce0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_container"));

        // line 171
        echo "
\t<!-- The Main Wrapper
\t============================================= -->
\t<div id=\"wrapper\" class=\"clearfix\">

\t\t<!-- Header
\t\t============================================= -->
\t\t<header id=\"header\" class=\"transparent-header semi-transparent full-header responsive-sticky-header\">

            <div id=\"header-wrap\">

                <div class=\"container clearfix\">

                    <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

                   <!-- Logo
                    ============================================= -->
                    <div id=\"logo\">
                        <a href=\"/\" class=\"standard-logo\" data-dark-logo=\"/apArchi/web/bundles/applicationsonatapage/images/logo.png\" data-sticky-logo=\"/apArchi/web/bundles/applicationsonatapage/images/logo-sticky.png\"><img src=\"/apArchi/web/bundles/applicationsonatapage/images/logo.png\" alt=\"Subocea Logo\"></a>
                        <a href=\"/\" class=\"retina-logo\" data-dark-logo=\"/apArchi/web/bundles/applicationsonatapage/images/logo@2x.png\"><img src=\"/apArchi/web/bundles/applicationsonatapage/images/logo@2x.png\" alt=\"Subocea Logo\"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id=\"primary-menu\" class=\"dark style-2\">

                        <ul>
                            <!-- <li class=\"current\"><a href=\"index.html\"><div>Accueil</div></a></li> -->
                            <li class=\"\"><a href=\"#agence\"><div>L'agence</div></a></li>
                            <li class=\"\"><a href=\"#pourquoi\"><div>Pourquoi un architecte ?</div></a></li>
                            <li class=\"\"><a href=\"#missions\"><div>Les missions possible</div></a></li>
                            <li class=\"\"><a href=\"#realisations\"><div>Réalisations</div></a></li>
                        </ul>


                     
                    </nav>

                    <ul class=\"header-extras\">
                        <li><div class=\"he-text\">04 90 50 32 57</div><br><a class=\"button button-circle\">Contactez moi</a></li>
                    </ul>


                </div>
            </div>

\t\t</header>
\t\t
\t\t
            ";
        // line 220
        $this->displayBlock('page_content', $context, $blocks);
        // line 232
        echo "
        <iframe width=\"100%\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2882.314395588635!2d5.075962714725396!3d43.74556765447218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ca00b782147da9%3A0xb5e435a3779dbda4!2s8+Place+Victor+Hugo%2C+13560+Senas%2C+France!5e0!3m2!1sfr!2sus!4v1505464344863\"></iframe>

        <!-- Footer
        ============================================= -->
\t\t<footer id=\"footer\" class=\"dark notopborder\" style=\"background: url('/apArchi/web/bundles/applicationsonatapage/images/footer_test.jpg') no-repeat; background-size: cover;\">

\t\t\t<div class=\"container\">


\t\t\t\t\t\t\t<div class=\"line\" style=\"margin: 30px 0;\"></div>

                <div class=\"row\">

                    <div class=\"col-md-offset-2 col-md-4 col-xs-12 bottommargin-sm widget_links\">
                        <ul>
                            <li><a href=\"#agence\">L'agence</a></li>
                            <li><a href=\"#pourquoi\">Pourquoi un architecte ?</a></li>
                            <li><a href=\"#missions\">Les missions possible</a></li>
                            <li><a href=\"#realisations\">Réalisations</a></li>
                            <li><a href=\"#contact\">Contact</a></li>
                        </ul>
                    </div>

                    <div class=\"col-md-4 col-xs-12 bottommargin-sm widget_links\">
                        <ul>
                            <a href=\"https://www.facebook.com/aparchitecture2010/\" title=\"Facebook\" class=\"facebook\" target=\"_blank\"><i class=\"fa fa-facebook-square fa-3x\"></i></a>
                        </ul>
                    </div>

                </div>

\t\t\t</div>

\t\t\t<!-- Copyrights
\t\t\t============================================= -->
\t\t\t<div id=\"copyrights\">

\t\t\t\t<div class=\"container clearfix\">

\t\t\t\t\t...

\t\t\t\t</div>

\t\t\t</div>

\t\t</footer>


\t</div> <!-- end wrapper -->
\t
\t<!-- Go To Top
\t============================================= -->
\t<div id=\"gotoTop\" class=\"icon-angle-up\"></div>
\t

";
        
        $__internal_b42a487b86e5ff82cb3f38036aa38aa93e9a508f3df11a6f1b037515a77ce0b2->leave($__internal_b42a487b86e5ff82cb3f38036aa38aa93e9a508f3df11a6f1b037515a77ce0b2_prof);

    }

    // line 220
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ddbebbd2a35fccf514efa90d1cbd8bea1a8a0be6a3d24a0621285f3afabdb13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbebbd2a35fccf514efa90d1cbd8bea1a8a0be6a3d24a0621285f3afabdb13f->enter($__internal_ddbebbd2a35fccf514efa90d1cbd8bea1a8a0be6a3d24a0621285f3afabdb13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 221
        echo "                ";
        if (array_key_exists("content", $context)) {
            // line 222
            echo "                    ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
                ";
        } else {
            // line 224
            echo "                    ";
            $context["content"] =             $this->renderBlock("content", $context, $blocks);
            // line 225
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 226
                echo "                        ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
                    ";
            } elseif (            // line 227
array_key_exists("page", $context)) {
                // line 228
                echo "                        ";
                echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
                    ";
            }
            // line 230
            echo "                ";
        }
        // line 231
        echo "            ";
        
        $__internal_ddbebbd2a35fccf514efa90d1cbd8bea1a8a0be6a3d24a0621285f3afabdb13f->leave($__internal_ddbebbd2a35fccf514efa90d1cbd8bea1a8a0be6a3d24a0621285f3afabdb13f_prof);

    }

    // line 290
    public function block_page_asset_footer($context, array $blocks = array())
    {
        $__internal_96fe942b9347e825673c9015409648f3f646c0d98f65adc62a01400d0724a18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fe942b9347e825673c9015409648f3f646c0d98f65adc62a01400d0724a18c->enter($__internal_96fe942b9347e825673c9015409648f3f646c0d98f65adc62a01400d0724a18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_asset_footer"));

        // line 291
        echo "
\t<!-- External JavaScripts
\t============================================= -->
 \t<script type=\"text/javascript\" src=\"/apArchi/web/bundles/applicationsonatapage/js/jquery.js\"></script>
\t<script type=\"text/javascript\" src=\"/apArchi/web/bundles/applicationsonatapage/js/plugins.js\"></script>
\t
\t<!-- ------------------------------------------------------------------------
\t\t--\t2 scripts ci-dessous à déplacer dans les pages intégrant les filtres 
\t-------------------------------------------------------------------------- -->
    <!-- Bootstrap Select Plugin -->
    <script type=\"text/javascript\" src=\"/apArchi/web/bundles/applicationsonatapage/js/components/bs-select.js\"></script>
    <!-- Select Splitter Plugin -->
    <script type=\"text/javascript\" src=\"/apArchi/web/bundles/applicationsonatapage/js/components/selectsplitter.js\"></script>
    
    <!-- Include Final Tiles Gallery script -->
    <script src=\"/apArchi/web/bundles/applicationsonatapage/js/jquery.finaltilesgallery.js\"></script>
    
    <!-- Infinite scroll -->
    <script src=\"/apArchi/web/bundles/applicationsonatapage/js/jquery-ias.min.js\" type=\"text/javascript\"></script>
\t
\t<!-- Footer Scripts
\t============================================= -->
\t<script type=\"text/javascript\" src=\"/apArchi/web/bundles/applicationsonatapage/js/functions.js\"></script>
    \t  
";
        
        $__internal_96fe942b9347e825673c9015409648f3f646c0d98f65adc62a01400d0724a18c->leave($__internal_96fe942b9347e825673c9015409648f3f646c0d98f65adc62a01400d0724a18c_prof);

    }

    public function getTemplateName()
    {
        return "@ApplicationSonataPage/layout-custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 291,  394 => 290,  387 => 231,  384 => 230,  378 => 228,  376 => 227,  371 => 226,  368 => 225,  365 => 224,  359 => 222,  356 => 221,  350 => 220,  287 => 232,  285 => 220,  234 => 171,  228 => 170,  217 => 167,  209 => 164,  203 => 163,  195 => 158,  189 => 157,  49 => 21,  46 => 19,  40 => 18,  11 => 11,);
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
{% extends 'SonataPageBundle::base_layout.html.twig' %}

{# {% block sonata_page_head %}#}

{#     {{ parent() }}#}
    
    
    {% block page_stylesheets %}
    
{#     \t{{ parent() }}#}
        <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/bootstrap.css\" type=\"text/css\" />

        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/fonts.css\" type=\"text/css\" />

        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/style.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/custom.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/swiper.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/dark.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/font-icons.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/animate.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/magnific-popup.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/responsive.css\" type=\"text/css\" />

        <!-- Include Final Tiles Gallery stylesheet (Homepage) -->
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/finaltilesgallery.css\">
        <!-- Bootstrap Select CSS (à déplacer dans les vues contenant les filtres )-->
        <link rel=\"stylesheet\" href=\"/apArchi/web/bundles/applicationsonatapage/css/components/bs-select.css\" type=\"text/css\" />

        <style>


            body, div, h1,h2, form, fieldset, input, textarea, footer,p {
                margin: 0; padding: 0; border: 0; outline: none;
            }


            @font-face {
                font-family: 'YanoneKaffeesatzRegular';
                src: url('yanonekaffeesatz-regular-webfont.eot');
                src: url('yanonekaffeesatz-regular-webfont.eot?#iefix') format('embedded-opentype'),
                url('yanonekaffeesatz-regular-webfont.woff') format('woff'),
                url('yanonekaffeesatz-regular-webfont.ttf') format('truetype'),
                url('yanonekaffeesatz-regular-webfont.svg#YanoneKaffeesatzRegular') format('svg');
                font-weight: normal;
                font-style: normal;
            }

            body {background: #ccc url('/apArchi/web/bundles/frontoffice/images/bg_out.png'); color: #7c7873; font-family: 'YanoneKaffeesatzRegular';}
            #wrap {width:530px; margin:20px auto 0; height:600px;}
            /*      p {text-shadow:0 1px 0 #fff; font-size:24px;}
                  h1 {margin-bottom:20px; text-align:center;font-size:48px; text-shadow:0 1px 0 #ede8d9; }*/


            #form_wrap { overflow:hidden; height:446px; position:relative; top:0px;
                -webkit-transition: all 1s ease-in-out .3s;
                -moz-transition: all 1s ease-in-out .3s;
                -o-transition: all 1s ease-in-out .3s;
                transition: all 1s ease-in-out .3s;}

            #form_wrap:before {content:\"\";
                position:absolute;
                bottom:128px;left:0px;
                background:url('/apArchi/web/bundles/frontoffice/images/before.png');
                width:530px;height: 316px;}

            #form_wrap:after {
                margin-top: 30px;
                content:\"\";
                position:absolute;
                bottom:0px;
                left:0;
                background:url('/apArchi/web/bundles/frontoffice/images/after.png');
                width:530px;
                height: 260px;
            }

            #form_wrap.hide:after, #form_wrap.hide:before {display:none; }
            #form_wrap:hover {height:776px;top:-200px;}


            form {background:#f7f2ec url('/apArchi/web/bundles/frontoffice/images/letter_bg.png');
                position:relative;top:150px;overflow:hidden;
                height:200px;width:400px;margin:0px auto;padding:20px;
                border: 1px solid #fff;
                border-radius: 3px;
                -moz-border-radius: 3px; -webkit-border-radius: 3px;
                box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
                -moz-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 14px #fff;
                -webkit-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
                -webkit-transition: all 1s ease-in-out .3s;
                -moz-transition: all 1s ease-in-out .3s;
                -o-transition: all 1s ease-in-out .3s;
                transition: all 1s ease-in-out .3s;}


            #form_wrap:hover form {height:530px;}

            label {
                margin: 11px 20px 0 0;
                font-size: 16px; color: #b3aba1;
                text-transform: uppercase;
                text-shadow: 0px 1px 0px #fff;
            }

            input[type=text], textarea {
                font: 14px normal normal uppercase helvetica, arial, serif;
                color: #7c7873;background:none;
                width: 380px; height: 36px; padding: 0px 10px; margin: 0 0 10px 0;
                border:1px solid #f8f5f1;
                -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px;
                -moz-box-shadow: inset 0px 0px 1px #726959;
                -webkit-box-shadow:  inset 0px 0px 1px #b3a895;
                box-shadow:  inset 0px 0px 1px #b3a895;
            }

            textarea { height: 80px; padding-top:14px;}

            textarea:focus, input[type=text]:focus {background:rgba(255,255,255,.35);}

            #form_wrap input[type=submit] {
                position:relative;font-family: 'YanoneKaffeesatzRegular';
                font-size:24px; color: #7c7873;text-shadow:0 1px 0 #fff;
                width:100%; text-align:center;opacity:0;
                background:none;
                cursor: pointer;
                -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px;
                -webkit-transition: opacity .6s ease-in-out 0s;
                -moz-transition: opacity .6s ease-in-out 0s;
                -o-transition: opacity .6s ease-in-out 0s;
                transition: opacity .6s ease-in-out 0s;
            }

            #form_wrap:hover input[type=submit] {z-index:1;opacity:1;
                -webkit-transition: opacity .5s ease-in-out 1.3s;
                -moz-transition: opacity .5s ease-in-out 1.3s;
                -o-transition: opacity .5s ease-in-out 1.3s;
                transition: opacity .5s ease-in-out 1.3s;}

            #form_wrap:hover input:hover[type=submit] {color:#435c70;}

        </style>
    \t
    {% endblock %}
    
    
    {% block page_javascripts %}
        <script src=\"https://use.fontawesome.com/4abfd00f83.js\"></script>
    {% endblock %}

{# {% endblock %}#}

{% block sonata_page_body_tag %}
    <body class=\"stretched\">
{% endblock %}

{% block sonata_page_top_bar %}
{% endblock %}

{% block sonata_page_container %}

\t<!-- The Main Wrapper
\t============================================= -->
\t<div id=\"wrapper\" class=\"clearfix\">

\t\t<!-- Header
\t\t============================================= -->
\t\t<header id=\"header\" class=\"transparent-header semi-transparent full-header responsive-sticky-header\">

            <div id=\"header-wrap\">

                <div class=\"container clearfix\">

                    <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

                   <!-- Logo
                    ============================================= -->
                    <div id=\"logo\">
                        <a href=\"/\" class=\"standard-logo\" data-dark-logo=\"/apArchi/web/bundles/applicationsonatapage/images/logo.png\" data-sticky-logo=\"/apArchi/web/bundles/applicationsonatapage/images/logo-sticky.png\"><img src=\"/apArchi/web/bundles/applicationsonatapage/images/logo.png\" alt=\"Subocea Logo\"></a>
                        <a href=\"/\" class=\"retina-logo\" data-dark-logo=\"/apArchi/web/bundles/applicationsonatapage/images/logo@2x.png\"><img src=\"/apArchi/web/bundles/applicationsonatapage/images/logo@2x.png\" alt=\"Subocea Logo\"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id=\"primary-menu\" class=\"dark style-2\">

                        <ul>
                            <!-- <li class=\"current\"><a href=\"index.html\"><div>Accueil</div></a></li> -->
                            <li class=\"\"><a href=\"#agence\"><div>L'agence</div></a></li>
                            <li class=\"\"><a href=\"#pourquoi\"><div>Pourquoi un architecte ?</div></a></li>
                            <li class=\"\"><a href=\"#missions\"><div>Les missions possible</div></a></li>
                            <li class=\"\"><a href=\"#realisations\"><div>Réalisations</div></a></li>
                        </ul>


                     
                    </nav>

                    <ul class=\"header-extras\">
                        <li><div class=\"he-text\">04 90 50 32 57</div><br><a class=\"button button-circle\">Contactez moi</a></li>
                    </ul>


                </div>
            </div>

\t\t</header>
\t\t
\t\t
            {% block page_content %}
                {% if content is defined %}
                    {{ content|raw }}
                {% else %}
                    {% set content = block('content') %}
                    {% if content|length > 0 %}
                        {{ content|raw }}
                    {% elseif page is defined %}
                        {{ sonata_page_render_container('content', page) }}
                    {% endif %}
                {% endif %}
            {% endblock %}

        <iframe width=\"100%\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2882.314395588635!2d5.075962714725396!3d43.74556765447218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ca00b782147da9%3A0xb5e435a3779dbda4!2s8+Place+Victor+Hugo%2C+13560+Senas%2C+France!5e0!3m2!1sfr!2sus!4v1505464344863\"></iframe>

        <!-- Footer
        ============================================= -->
\t\t<footer id=\"footer\" class=\"dark notopborder\" style=\"background: url('/apArchi/web/bundles/applicationsonatapage/images/footer_test.jpg') no-repeat; background-size: cover;\">

\t\t\t<div class=\"container\">


\t\t\t\t\t\t\t<div class=\"line\" style=\"margin: 30px 0;\"></div>

                <div class=\"row\">

                    <div class=\"col-md-offset-2 col-md-4 col-xs-12 bottommargin-sm widget_links\">
                        <ul>
                            <li><a href=\"#agence\">L'agence</a></li>
                            <li><a href=\"#pourquoi\">Pourquoi un architecte ?</a></li>
                            <li><a href=\"#missions\">Les missions possible</a></li>
                            <li><a href=\"#realisations\">Réalisations</a></li>
                            <li><a href=\"#contact\">Contact</a></li>
                        </ul>
                    </div>

                    <div class=\"col-md-4 col-xs-12 bottommargin-sm widget_links\">
                        <ul>
                            <a href=\"https://www.facebook.com/aparchitecture2010/\" title=\"Facebook\" class=\"facebook\" target=\"_blank\"><i class=\"fa fa-facebook-square fa-3x\"></i></a>
                        </ul>
                    </div>

                </div>

\t\t\t</div>

\t\t\t<!-- Copyrights
\t\t\t============================================= -->
\t\t\t<div id=\"copyrights\">

\t\t\t\t<div class=\"container clearfix\">

\t\t\t\t\t...

\t\t\t\t</div>

\t\t\t</div>

\t\t</footer>


\t</div> <!-- end wrapper -->
\t
\t<!-- Go To Top
\t============================================= -->
\t<div id=\"gotoTop\" class=\"icon-angle-up\"></div>
\t

{% endblock %}

{% block page_asset_footer %}

\t<!-- External JavaScripts
\t============================================= -->
 \t<script type=\"text/javascript\" src=\"/apArchi/web/bundles/applicationsonatapage/js/jquery.js\"></script>
\t<script type=\"text/javascript\" src=\"/apArchi/web/bundles/applicationsonatapage/js/plugins.js\"></script>
\t
\t<!-- ------------------------------------------------------------------------
\t\t--\t2 scripts ci-dessous à déplacer dans les pages intégrant les filtres 
\t-------------------------------------------------------------------------- -->
    <!-- Bootstrap Select Plugin -->
    <script type=\"text/javascript\" src=\"/apArchi/web/bundles/applicationsonatapage/js/components/bs-select.js\"></script>
    <!-- Select Splitter Plugin -->
    <script type=\"text/javascript\" src=\"/apArchi/web/bundles/applicationsonatapage/js/components/selectsplitter.js\"></script>
    
    <!-- Include Final Tiles Gallery script -->
    <script src=\"/apArchi/web/bundles/applicationsonatapage/js/jquery.finaltilesgallery.js\"></script>
    
    <!-- Infinite scroll -->
    <script src=\"/apArchi/web/bundles/applicationsonatapage/js/jquery-ias.min.js\" type=\"text/javascript\"></script>
\t
\t<!-- Footer Scripts
\t============================================= -->
\t<script type=\"text/javascript\" src=\"/apArchi/web/bundles/applicationsonatapage/js/functions.js\"></script>
    \t  
{% endblock %}
", "@ApplicationSonataPage/layout-custom.html.twig", "C:\\wamp\\www\\Aparchi\\src\\Application\\Sonata\\PageBundle\\Resources\\views\\layout-custom.html.twig");
    }
}
