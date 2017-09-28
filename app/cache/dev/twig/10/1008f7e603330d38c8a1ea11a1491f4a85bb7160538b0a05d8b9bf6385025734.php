<?php

/* ApplicationSonataAdminBundle::layout.html.twig */
class __TwigTemplate_3b142e1f9c01ee62b072a5a07fc2fae7b58a15b2c20fb7563b636fb59162b92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "ApplicationSonataAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbe74732f804bd3f6e5cf4cc21649fcac68059c5afd497bef115bb86901e30c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe74732f804bd3f6e5cf4cc21649fcac68059c5afd497bef115bb86901e30c1->enter($__internal_bbe74732f804bd3f6e5cf4cc21649fcac68059c5afd497bef115bb86901e30c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApplicationSonataAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe74732f804bd3f6e5cf4cc21649fcac68059c5afd497bef115bb86901e30c1->leave($__internal_bbe74732f804bd3f6e5cf4cc21649fcac68059c5afd497bef115bb86901e30c1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_725597ac074f53dc2703491a077f165b6a196f4479ecb3f38a352a9cb0802d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725597ac074f53dc2703491a077f165b6a196f4479ecb3f38a352a9cb0802d27->enter($__internal_725597ac074f53dc2703491a077f165b6a196f4479ecb3f38a352a9cb0802d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/skins/sonata/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/markdown/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/html/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/textile/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_725597ac074f53dc2703491a077f165b6a196f4479ecb3f38a352a9cb0802d27->leave($__internal_725597ac074f53dc2703491a077f165b6a196f4479ecb3f38a352a9cb0802d27_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_50b677fbd9868132ce4b1b67820c7b87ac851efaac2ae040a1ba57e5138054f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b677fbd9868132ce4b1b67820c7b87ac851efaac2ae040a1ba57e5138054f6->enter($__internal_50b677fbd9868132ce4b1b67820c7b87ac851efaac2ae040a1ba57e5138054f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ivoryckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/vendor/markitup-markitup/markitup/jquery.markitup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/markdown/set.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/html/set.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/textile/set.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_50b677fbd9868132ce4b1b67820c7b87ac851efaac2ae040a1ba57e5138054f6->leave($__internal_50b677fbd9868132ce4b1b67820c7b87ac851efaac2ae040a1ba57e5138054f6_prof);

    }

    public function getTemplateName()
    {
        return "ApplicationSonataAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  74 => 13,  68 => 12,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle::standard_layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataformatter/markitup/skins/sonata/style.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataformatter/markitup/sets/markdown/style.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataformatter/markitup/sets/html/style.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataformatter/markitup/sets/textile/style.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('bundles/ivoryckeditor/ckeditor.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/sonataformatter/vendor/markitup-markitup/markitup/jquery.markitup.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/sonataformatter/markitup/sets/markdown/set.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/sonataformatter/markitup/sets/html/set.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/sonataformatter/markitup/sets/textile/set.js') }}\" type=\"text/javascript\"></script>
{% endblock %}", "ApplicationSonataAdminBundle::layout.html.twig", "C:\\wamp\\www\\Aparchi\\app/Resources/ApplicationSonataAdminBundle/views/layout.html.twig");
    }
}
