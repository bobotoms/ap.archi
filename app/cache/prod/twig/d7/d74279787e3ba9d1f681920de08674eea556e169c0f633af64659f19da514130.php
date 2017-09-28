<?php

/* SonataPageBundle::layout-custom.html.twig */
class __TwigTemplate_23c7be1e7abaf0172edd8b2a8be65a0f3212a2cb36c2dcb838cc726fe96e528c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataPageBundle::base_layout.html.twig", "SonataPageBundle::layout-custom.html.twig", 11);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_page_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 157
    public function block_page_javascripts($context, array $blocks = array())
    {
        // line 158
        echo "        <script src=\"https://use.fontawesome.com/4abfd00f83.js\"></script>
    ";
    }

    // line 163
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        // line 164
        echo "    <body class=\"stretched\">
";
    }

    // line 167
    public function block_sonata_page_top_bar($context, array $blocks = array())
    {
    }

    // line 170
    public function block_sonata_page_container($context, array $blocks = array())
    {
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
    }

    // line 220
    public function block_page_content($context, array $blocks = array())
    {
        // line 221
        echo "                ";
        if (array_key_exists("content", $context)) {
            // line 222
            echo "                    ";
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
                ";
        } else {
            // line 224
            echo "                    ";
            $context["content"] =             $this->renderBlock("content", $context, $blocks);
            // line 225
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : null)) > 0)) {
                // line 226
                echo "                        ";
                echo (isset($context["content"]) ? $context["content"] : null);
                echo "
                    ";
            } elseif (            // line 227
array_key_exists("page", $context)) {
                // line 228
                echo "                        ";
                echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("content", (isset($context["page"]) ? $context["page"] : null));
                echo "
                    ";
            }
            // line 230
            echo "                ";
        }
        // line 231
        echo "            ";
    }

    // line 290
    public function block_page_asset_footer($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "SonataPageBundle::layout-custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 291,  352 => 290,  348 => 231,  345 => 230,  339 => 228,  337 => 227,  332 => 226,  329 => 225,  326 => 224,  320 => 222,  317 => 221,  314 => 220,  254 => 232,  252 => 220,  201 => 171,  198 => 170,  193 => 167,  188 => 164,  185 => 163,  180 => 158,  177 => 157,  40 => 21,  37 => 19,  34 => 18,  11 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataPageBundle::layout-custom.html.twig", "C:\\wamp\\www\\Aparchi\\src\\Application\\Sonata\\PageBundle/Resources/views/layout-custom.html.twig");
    }
}
