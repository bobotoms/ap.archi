<?php

/* BackOfficeBundle::layout.html.twig */
class __TwigTemplate_8faf7c932a2f56f2e151898349dbb14972c8b7b3fd2c3daa9e744f90db6686ce extends Twig_Template
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
        $__internal_37317cb88c4cd9b457dab3edd319d74941e40a2af4ee385e727f19c4280ba27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37317cb88c4cd9b457dab3edd319d74941e40a2af4ee385e727f19c4280ba27d->enter($__internal_37317cb88c4cd9b457dab3edd319d74941e40a2af4ee385e727f19c4280ba27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::layout.html.twig"));

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
        
        $__internal_37317cb88c4cd9b457dab3edd319d74941e40a2af4ee385e727f19c4280ba27d->leave($__internal_37317cb88c4cd9b457dab3edd319d74941e40a2af4ee385e727f19c4280ba27d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a41ce23bcc4b1be4cb777ffe0a157b729570ffccf1d2bb8770bc8770648ea259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41ce23bcc4b1be4cb777ffe0a157b729570ffccf1d2bb8770bc8770648ea259->enter($__internal_a41ce23bcc4b1be4cb777ffe0a157b729570ffccf1d2bb8770bc8770648ea259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Title";
        
        $__internal_a41ce23bcc4b1be4cb777ffe0a157b729570ffccf1d2bb8770bc8770648ea259->leave($__internal_a41ce23bcc4b1be4cb777ffe0a157b729570ffccf1d2bb8770bc8770648ea259_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e142dbc2386efbdb367c58f8a3cc3f6d06040b8c2543e4a5a8eaca6e6c5db64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e142dbc2386efbdb367c58f8a3cc3f6d06040b8c2543e4a5a8eaca6e6c5db64a->enter($__internal_e142dbc2386efbdb367c58f8a3cc3f6d06040b8c2543e4a5a8eaca6e6c5db64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e142dbc2386efbdb367c58f8a3cc3f6d06040b8c2543e4a5a8eaca6e6c5db64a->leave($__internal_e142dbc2386efbdb367c58f8a3cc3f6d06040b8c2543e4a5a8eaca6e6c5db64a_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::layout.html.twig";
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
</html>", "BackOfficeBundle::layout.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/layout.html.twig");
    }
}
