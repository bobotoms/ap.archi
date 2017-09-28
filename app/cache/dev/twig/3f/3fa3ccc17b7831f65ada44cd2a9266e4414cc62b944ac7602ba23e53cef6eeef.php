<?php

/* @SonataPage/base_error.html.twig */
class __TwigTemplate_25cd477e7f406523b508f3ad57b3cec9f4f43bc4325de70c7468bae7284a8348 extends Twig_Template
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
        $__internal_780505a2faf8e08e15ae5088847bdedcbf3aff4d6f6661fb28dc5f6d47e260c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780505a2faf8e08e15ae5088847bdedcbf3aff4d6f6661fb28dc5f6d47e260c9->enter($__internal_780505a2faf8e08e15ae5088847bdedcbf3aff4d6f6661fb28dc5f6d47e260c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/base_error.html.twig"));

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
        
        $__internal_780505a2faf8e08e15ae5088847bdedcbf3aff4d6f6661fb28dc5f6d47e260c9->leave($__internal_780505a2faf8e08e15ae5088847bdedcbf3aff4d6f6661fb28dc5f6d47e260c9_prof);

    }

    // line 17
    public function block_page_stylesheets($context, array $blocks = array())
    {
        $__internal_c63a40744d5154710cff26eb69a2c5945005c36654730ec348abf6ce6baea04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63a40744d5154710cff26eb69a2c5945005c36654730ec348abf6ce6baea04e->enter($__internal_c63a40744d5154710cff26eb69a2c5945005c36654730ec348abf6ce6baea04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_stylesheets"));

        // line 18
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" media=\"all\" >
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonatapage/sonata-page.front.css"), "html", null, true);
        echo "\" media=\"all\" >
        ";
        
        $__internal_c63a40744d5154710cff26eb69a2c5945005c36654730ec348abf6ce6baea04e->leave($__internal_c63a40744d5154710cff26eb69a2c5945005c36654730ec348abf6ce6baea04e_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_e19a5c6f5ef18ff7676e56be002fa35de0ddb8e09f2ad0feab1cadf57a88e2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19a5c6f5ef18ff7676e56be002fa35de0ddb8e09f2ad0feab1cadf57a88e2fb->enter($__internal_e19a5c6f5ef18ff7676e56be002fa35de0ddb8e09f2ad0feab1cadf57a88e2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e19a5c6f5ef18ff7676e56be002fa35de0ddb8e09f2ad0feab1cadf57a88e2fb->leave($__internal_e19a5c6f5ef18ff7676e56be002fa35de0ddb8e09f2ad0feab1cadf57a88e2fb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/base_error.html.twig";
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
", "@SonataPage/base_error.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\base_error.html.twig");
    }
}
