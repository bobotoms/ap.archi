<?php

/* ApplicationSonataAdminBundle::layout.html.twig */
class __TwigTemplate_fe95b4c6fb1815cc6748b9b6de4848a2157d37d3013e32385ef0caf755ccf79c extends Twig_Template
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
        $__internal_c008d26e00b0cf71d5b09bc5cfef3fa7de287045609f8e2b8103fc261565be63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c008d26e00b0cf71d5b09bc5cfef3fa7de287045609f8e2b8103fc261565be63->enter($__internal_c008d26e00b0cf71d5b09bc5cfef3fa7de287045609f8e2b8103fc261565be63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApplicationSonataAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c008d26e00b0cf71d5b09bc5cfef3fa7de287045609f8e2b8103fc261565be63->leave($__internal_c008d26e00b0cf71d5b09bc5cfef3fa7de287045609f8e2b8103fc261565be63_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08d11ee6ae1259acf191a05e2d1eaa3ca60a79763d63f3929d1cff194d8aaed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d11ee6ae1259acf191a05e2d1eaa3ca60a79763d63f3929d1cff194d8aaed2->enter($__internal_08d11ee6ae1259acf191a05e2d1eaa3ca60a79763d63f3929d1cff194d8aaed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_08d11ee6ae1259acf191a05e2d1eaa3ca60a79763d63f3929d1cff194d8aaed2->leave($__internal_08d11ee6ae1259acf191a05e2d1eaa3ca60a79763d63f3929d1cff194d8aaed2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d661856ffd68af189b846d62641947a34022e09aa9547bf761091671a61c1e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d661856ffd68af189b846d62641947a34022e09aa9547bf761091671a61c1e42->enter($__internal_d661856ffd68af189b846d62641947a34022e09aa9547bf761091671a61c1e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d661856ffd68af189b846d62641947a34022e09aa9547bf761091671a61c1e42->leave($__internal_d661856ffd68af189b846d62641947a34022e09aa9547bf761091671a61c1e42_prof);

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
{% endblock %}", "ApplicationSonataAdminBundle::layout.html.twig", "C:\\wamp\\www\\Aparchi\\app\\Resources\\ApplicationSonataAdminBundle\\views\\layout.html.twig");
    }
}
