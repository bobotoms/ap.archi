<?php

/* SonataPageBundle::base_error.html.twig */
class __TwigTemplate_c7869e0f54b46486f9e4696676ddf6214ed4841deaf0dcc6d594439eacf78b9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_stylesheets' => array($this, 'block_page_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (        $this->renderBlock("title", $context, $blocks)) : ("Sonata Project - Internal Error"));
        // line 12
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        ";
        // line 17
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 21
        echo "
        <title>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    </head>

    <body class=\"sonata-bc\">
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"page-header\">
                    <h1>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
                </div>

                <div class=\"row\">
                    ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "                </div>
            </div>
        </div>
   </body>
</html>
";
    }

    // line 17
    public function block_page_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" media=\"all\" >
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatapage/sonata-page.front.css"), "html", null, true);
        echo "\" media=\"all\" >
        ";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataPageBundle::base_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  71 => 19,  66 => 18,  63 => 17,  54 => 34,  52 => 33,  45 => 29,  35 => 22,  32 => 21,  30 => 17,  23 => 12,  21 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataPageBundle::base_error.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/base_error.html.twig");
    }
}
