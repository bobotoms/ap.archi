<?php

/* BackOfficeBundle::mapmonde.html.twig */
class __TwigTemplate_8e7bbb0edc7cba34c530ef9351e93eed05d3567da682b893201d6ed2a34402b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "BackOfficeBundle::mapmonde.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21dc699b17e304c8ba7ae567a063aeef5002d310b9c43cf89933bb31a7a5be49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21dc699b17e304c8ba7ae567a063aeef5002d310b9c43cf89933bb31a7a5be49->enter($__internal_21dc699b17e304c8ba7ae567a063aeef5002d310b9c43cf89933bb31a7a5be49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::mapmonde.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21dc699b17e304c8ba7ae567a063aeef5002d310b9c43cf89933bb31a7a5be49->leave($__internal_21dc699b17e304c8ba7ae567a063aeef5002d310b9c43cf89933bb31a7a5be49_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68f8c4170bc4e72e50ffdd00346a73cd492e1bd439956cea9befd4947c2e8149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f8c4170bc4e72e50ffdd00346a73cd492e1bd439956cea9befd4947c2e8149->enter($__internal_68f8c4170bc4e72e50ffdd00346a73cd492e1bd439956cea9befd4947c2e8149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "
";
        // line 4
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script type=\"text/javascript\">
\$(document).ready(function(e) {
\t
\tif ((\$('.leftCat').val()!='') && (\$('.topCat').val()!='') )
    {
        Calc();
    }
    
\tif (\$('.subZone option:selected').val()=='non')
    {
        \$('.linkCat').parent().parent().show();
        \$('.linkCat').prop('required',true);
        \$('.subDestination').parent().parent().hide();
    }
    else
    {
        \$('.linkCat').parent().parent().hide();
        \$('.linkCat').prop('required',false);
        \$('.subDestination').parent().parent().show();
    }
});

</script>
<script type=\"text/javascript\">
    function subZoneLink() {
        if (\$('.subZone option:selected').val()=='non')
        {
            \$('.linkCat').parent().parent().show();
            \$('.linkCat').prop('required',true);
            \$('.subDestination').parent().parent().hide();
        }
        else
        {
            \$('.linkCat').parent().parent().hide();
            \$('.linkCat').prop('required',false);
            \$('.subDestination').parent().parent().show();
        }
    };

</script> 
<script type=\"text/javascript\">
    function CalcTop(){
        var top = \$('.topCat').val();
        document.getElementById(\"map-item\").style.top = top+'px';
    }

</script>
<script type=\"text/javascript\">
    function CalcLeft(){
    
        var left = \$('.leftCat').val();
        document.getElementById(\"map-item\").style.left = left+'px';
    }

</script>
<script type=\"text/javascript\">
    function Calc(){
        var top = \$('.topCat').val();
        document.getElementById(\"map-item\").style.top = top+'px';
        var left =  \$('.leftCat').val();
        document.getElementById(\"map-item\").style.left = left+'px';
    }

</script>
";
        
        $__internal_68f8c4170bc4e72e50ffdd00346a73cd492e1bd439956cea9befd4947c2e8149->leave($__internal_68f8c4170bc4e72e50ffdd00346a73cd492e1bd439956cea9befd4947c2e8149_prof);

    }

    // line 72
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e837175f1cefaf6686753ddccedcec96b66616f010953e9f4f0383700cd0e13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e837175f1cefaf6686753ddccedcec96b66616f010953e9f4f0383700cd0e13c->enter($__internal_e837175f1cefaf6686753ddccedcec96b66616f010953e9f4f0383700cd0e13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 73
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

        <--! <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("@BackOfficeBundle/Resources/public/css/home.css"), "html", null, true);
        echo "\" /> -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/backoffice/css/home.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e837175f1cefaf6686753ddccedcec96b66616f010953e9f4f0383700cd0e13c->leave($__internal_e837175f1cefaf6686753ddccedcec96b66616f010953e9f4f0383700cd0e13c_prof);

    }

    // line 79
    public function block_form($context, array $blocks = array())
    {
        $__internal_d0b8a6d82dcdd4f85cab995f161a424d14bc1daa3ace7658bb5e353d9193a4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b8a6d82dcdd4f85cab995f161a424d14bc1daa3ace7658bb5e353d9193a4c9->enter($__internal_d0b8a6d82dcdd4f85cab995f161a424d14bc1daa3ace7658bb5e353d9193a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 80
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
    <div class=\"map\" id=\"map\">
        <strong class=\"map-name\">
            <span class=\"t-hdg1\">Destination</span>
        </strong>
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map_monde_mapmonde");
        echo "\" >MapMonde</a></p>
        <ul class=\"map-list\">
            <li class=\"map-item\" id=\"map-item\" style=\"top:195px;left:241px\">
            </li>

        </ul>
    </div>
";
        
        $__internal_d0b8a6d82dcdd4f85cab995f161a424d14bc1daa3ace7658bb5e353d9193a4c9->leave($__internal_d0b8a6d82dcdd4f85cab995f161a424d14bc1daa3ace7658bb5e353d9193a4c9_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::mapmonde.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 85,  149 => 80,  143 => 79,  134 => 76,  130 => 75,  125 => 73,  119 => 72,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SonataAdminBundle:CRUD:edit.html.twig\" %}
{% block javascripts %}

{{ parent() }}

<script type=\"text/javascript\">
\$(document).ready(function(e) {
\t
\tif ((\$('.leftCat').val()!='') && (\$('.topCat').val()!='') )
    {
        Calc();
    }
    
\tif (\$('.subZone option:selected').val()=='non')
    {
        \$('.linkCat').parent().parent().show();
        \$('.linkCat').prop('required',true);
        \$('.subDestination').parent().parent().hide();
    }
    else
    {
        \$('.linkCat').parent().parent().hide();
        \$('.linkCat').prop('required',false);
        \$('.subDestination').parent().parent().show();
    }
});

</script>
<script type=\"text/javascript\">
    function subZoneLink() {
        if (\$('.subZone option:selected').val()=='non')
        {
            \$('.linkCat').parent().parent().show();
            \$('.linkCat').prop('required',true);
            \$('.subDestination').parent().parent().hide();
        }
        else
        {
            \$('.linkCat').parent().parent().hide();
            \$('.linkCat').prop('required',false);
            \$('.subDestination').parent().parent().show();
        }
    };

</script> 
<script type=\"text/javascript\">
    function CalcTop(){
        var top = \$('.topCat').val();
        document.getElementById(\"map-item\").style.top = top+'px';
    }

</script>
<script type=\"text/javascript\">
    function CalcLeft(){
    
        var left = \$('.leftCat').val();
        document.getElementById(\"map-item\").style.left = left+'px';
    }

</script>
<script type=\"text/javascript\">
    function Calc(){
        var top = \$('.topCat').val();
        document.getElementById(\"map-item\").style.top = top+'px';
        var left =  \$('.leftCat').val();
        document.getElementById(\"map-item\").style.left = left+'px';
    }

</script>
{% endblock %}

{% block stylesheets %}
{{ parent() }}

        <--! <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('@BackOfficeBundle/Resources/public/css/home.css') }}\" /> -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/backoffice/css/home.css') }}\" />
{% endblock %}

{% block form %}
    {{ block('parentForm') }}
    <div class=\"map\" id=\"map\">
        <strong class=\"map-name\">
            <span class=\"t-hdg1\">Destination</span>
        </strong>
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('map_monde_mapmonde') }}\" >MapMonde</a></p>
        <ul class=\"map-list\">
            <li class=\"map-item\" id=\"map-item\" style=\"top:195px;left:241px\">
            </li>

        </ul>
    </div>
{% endblock %}
    
    
    



", "BackOfficeBundle::mapmonde.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/mapmonde.html.twig");
    }
}
