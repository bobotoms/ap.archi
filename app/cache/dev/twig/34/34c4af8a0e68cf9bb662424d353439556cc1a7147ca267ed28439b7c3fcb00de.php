<?php

/* base.html.twig */
class __TwigTemplate_30425f8070d8ff60d235f60281f7fd7edf65f6205b1b859d22d503e679b392a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f806fee2d605b9f81499fbc674e359cb6211fa838a4d9a1a4e7a4290b45feac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f806fee2d605b9f81499fbc674e359cb6211fa838a4d9a1a4e7a4290b45feac8->enter($__internal_f806fee2d605b9f81499fbc674e359cb6211fa838a4d9a1a4e7a4290b45feac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f806fee2d605b9f81499fbc674e359cb6211fa838a4d9a1a4e7a4290b45feac8->leave($__internal_f806fee2d605b9f81499fbc674e359cb6211fa838a4d9a1a4e7a4290b45feac8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a0101499cff98983941acbb25ae5b69bba311d47fe4b92cbf1cd1ae3e3cbb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0101499cff98983941acbb25ae5b69bba311d47fe4b92cbf1cd1ae3e3cbb6e->enter($__internal_0a0101499cff98983941acbb25ae5b69bba311d47fe4b92cbf1cd1ae3e3cbb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0a0101499cff98983941acbb25ae5b69bba311d47fe4b92cbf1cd1ae3e3cbb6e->leave($__internal_0a0101499cff98983941acbb25ae5b69bba311d47fe4b92cbf1cd1ae3e3cbb6e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f281c1ab6f5310d41d95669a3c07d856233fd9903e75ffd5a2ee869f94d1c15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f281c1ab6f5310d41d95669a3c07d856233fd9903e75ffd5a2ee869f94d1c15e->enter($__internal_f281c1ab6f5310d41d95669a3c07d856233fd9903e75ffd5a2ee869f94d1c15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f281c1ab6f5310d41d95669a3c07d856233fd9903e75ffd5a2ee869f94d1c15e->leave($__internal_f281c1ab6f5310d41d95669a3c07d856233fd9903e75ffd5a2ee869f94d1c15e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e56b46acbe52142c2013cc982a77931d69e768cae27da4597c95750f1848398d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56b46acbe52142c2013cc982a77931d69e768cae27da4597c95750f1848398d->enter($__internal_e56b46acbe52142c2013cc982a77931d69e768cae27da4597c95750f1848398d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e56b46acbe52142c2013cc982a77931d69e768cae27da4597c95750f1848398d->leave($__internal_e56b46acbe52142c2013cc982a77931d69e768cae27da4597c95750f1848398d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c2c84b80451b220a8208067e79ef9bfbe537f3537931f025b0fd54d81e32660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2c84b80451b220a8208067e79ef9bfbe537f3537931f025b0fd54d81e32660->enter($__internal_5c2c84b80451b220a8208067e79ef9bfbe537f3537931f025b0fd54d81e32660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5c2c84b80451b220a8208067e79ef9bfbe537f3537931f025b0fd54d81e32660->leave($__internal_5c2c84b80451b220a8208067e79ef9bfbe537f3537931f025b0fd54d81e32660_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\Aparchi\\app\\Resources\\views\\base.html.twig");
    }
}
