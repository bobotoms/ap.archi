<?php

/* SonataPageBundle::base_error.html.twig */
class __TwigTemplate_30cb745cceb3122351c8879abbb56228e8775d2a2a0841599e018d4eba9cd687 extends Twig_Template
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
        $__internal_ae93c532750e2dd8848996061537db50bec62f35e11a3c7dc4052e008e8e4e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae93c532750e2dd8848996061537db50bec62f35e11a3c7dc4052e008e8e4e66->enter($__internal_ae93c532750e2dd8848996061537db50bec62f35e11a3c7dc4052e008e8e4e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle::base_error.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>
    </head>

    <body class=\"sonata-bc\">
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"page-header\">
                    <h1>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
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
        
        $__internal_ae93c532750e2dd8848996061537db50bec62f35e11a3c7dc4052e008e8e4e66->leave($__internal_ae93c532750e2dd8848996061537db50bec62f35e11a3c7dc4052e008e8e4e66_prof);

    }

    // line 17
    public function block_page_stylesheets($context, array $blocks = array())
    {
        $__internal_fb4013db837a093d9b9c11ceac71ec3be00e60ed6c8a787ab6eaa69ab3e59ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4013db837a093d9b9c11ceac71ec3be00e60ed6c8a787ab6eaa69ab3e59ef3->enter($__internal_fb4013db837a093d9b9c11ceac71ec3be00e60ed6c8a787ab6eaa69ab3e59ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_stylesheets"));

        // line 18
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" media=\"all\" >
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatapage/sonata-page.front.css"), "html", null, true);
        echo "\" media=\"all\" >
        ";
        
        $__internal_fb4013db837a093d9b9c11ceac71ec3be00e60ed6c8a787ab6eaa69ab3e59ef3->leave($__internal_fb4013db837a093d9b9c11ceac71ec3be00e60ed6c8a787ab6eaa69ab3e59ef3_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc36ae43b077a6a41e65acbc9a3e5857088b6f06bd36eaf1aae314732b291784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc36ae43b077a6a41e65acbc9a3e5857088b6f06bd36eaf1aae314732b291784->enter($__internal_bc36ae43b077a6a41e65acbc9a3e5857088b6f06bd36eaf1aae314732b291784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_bc36ae43b077a6a41e65acbc9a3e5857088b6f06bd36eaf1aae314732b291784->leave($__internal_bc36ae43b077a6a41e65acbc9a3e5857088b6f06bd36eaf1aae314732b291784_prof);

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
        return array (  89 => 33,  80 => 19,  75 => 18,  69 => 17,  57 => 34,  55 => 33,  48 => 29,  38 => 22,  35 => 21,  33 => 17,  26 => 12,  24 => 11,);
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
{% set title = block('title') is defined ? block('title') : 'Sonata Project - Internal Error' %}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        {% block page_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.css') }}\" media=\"all\" >
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonatapage/sonata-page.front.css') }}\" media=\"all\" >
        {% endblock %}

        <title>{{ title }}</title>
    </head>

    <body class=\"sonata-bc\">
        <div class=\"container\">
            <div class=\"content\">
                <div class=\"page-header\">
                    <h1>{{ title }}</h1>
                </div>

                <div class=\"row\">
                    {% block content %}{% endblock %}
                </div>
            </div>
        </div>
   </body>
</html>
", "SonataPageBundle::base_error.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/base_error.html.twig");
    }
}
