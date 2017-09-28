<?php

/* @BackOffice/layout.html.twig */
class __TwigTemplate_c565a426d8cad08adbe069c4a1d8840991adeed0cd23f1d01b49e358392eec58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eb83a89309aea706fd50b10d6341cdc3b3e5ba8d3df5ef7c816075d9f48d998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb83a89309aea706fd50b10d6341cdc3b3e5ba8d3df5ef7c816075d9f48d998->enter($__internal_7eb83a89309aea706fd50b10d6341cdc3b3e5ba8d3df5ef7c816075d9f48d998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 \t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\">
 \t<script type=\"text/javascript\" charset=\"utf8\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
 \t<script type=\"text/javascript\" charset=\"utf8\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
</head>
<body>

";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
</body>
</html>";
        
        $__internal_7eb83a89309aea706fd50b10d6341cdc3b3e5ba8d3df5ef7c816075d9f48d998->leave($__internal_7eb83a89309aea706fd50b10d6341cdc3b3e5ba8d3df5ef7c816075d9f48d998_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_52695721a6721f61f67e37448fe23ce59161fc25bb37ac9f17abc2fcdffa32a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52695721a6721f61f67e37448fe23ce59161fc25bb37ac9f17abc2fcdffa32a0->enter($__internal_52695721a6721f61f67e37448fe23ce59161fc25bb37ac9f17abc2fcdffa32a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Title";
        
        $__internal_52695721a6721f61f67e37448fe23ce59161fc25bb37ac9f17abc2fcdffa32a0->leave($__internal_52695721a6721f61f67e37448fe23ce59161fc25bb37ac9f17abc2fcdffa32a0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fa2d23e97996a70da785bc02b8975d9ebc3f8ba7f61fcac88707ec3abfb29da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa2d23e97996a70da785bc02b8975d9ebc3f8ba7f61fcac88707ec3abfb29da->enter($__internal_6fa2d23e97996a70da785bc02b8975d9ebc3f8ba7f61fcac88707ec3abfb29da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6fa2d23e97996a70da785bc02b8975d9ebc3f8ba7f61fcac88707ec3abfb29da->leave($__internal_6fa2d23e97996a70da785bc02b8975d9ebc3f8ba7f61fcac88707ec3abfb29da_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  60 => 5,  51 => 14,  49 => 12,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}Title{% endblock %}</title>
 \t<link rel=\"stylesheet\" href=\"{{ asset('/css/jquery.dataTables.min.css') }}\">
 \t<script type=\"text/javascript\" charset=\"utf8\" src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
 \t<script type=\"text/javascript\" charset=\"utf8\" src=\"{{ asset('js/jquery.dataTables.min.js') }}\"></script>
</head>
<body>

{% block body %}
{% endblock %}

</body>
</html>", "@BackOffice/layout.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\layout.html.twig");
    }
}
