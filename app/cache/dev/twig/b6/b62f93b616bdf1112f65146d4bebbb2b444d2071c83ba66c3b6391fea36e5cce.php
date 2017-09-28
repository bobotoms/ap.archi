<?php

/* @BackOffice/packagelist.html.twig */
class __TwigTemplate_990d896a605fe4e62436425dc79eaa26b1edc27555f2358a85c737712e294386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@BackOffice/packagelist.html.twig", 1);
        $this->blocks = array(
            'list_header' => array($this, 'block_list_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e949de521bab8b25c245f0691b9794149dc273848b8964f0d3ea634ddc4f958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e949de521bab8b25c245f0691b9794149dc273848b8964f0d3ea634ddc4f958->enter($__internal_3e949de521bab8b25c245f0691b9794149dc273848b8964f0d3ea634ddc4f958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/packagelist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e949de521bab8b25c245f0691b9794149dc273848b8964f0d3ea634ddc4f958->leave($__internal_3e949de521bab8b25c245f0691b9794149dc273848b8964f0d3ea634ddc4f958_prof);

    }

    // line 2
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_fa4bf0d9b314d717560b581fd7a685c3f9a9bea93495a4e8801e2ca9a8aa40b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4bf0d9b314d717560b581fd7a685c3f9a9bea93495a4e8801e2ca9a8aa40b1->enter($__internal_fa4bf0d9b314d717560b581fd7a685c3f9a9bea93495a4e8801e2ca9a8aa40b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        // line 3
        echo "    <script type=\"text/javascript\">
        \$(document).ready( function () {
            \$('.sonata-filters-box').css('display', 'block');
            \$('.spotsearch').parent().parent().css('display', 'block');
            \$('.productionsearch').parent().parent().css('display', 'block');
            
            \$('#s2id_autogen8').hide();
        });

        \$('.productionsearch').change(function(){

            var production = \$('#filter_production_value').val();

            console.log('production');
            console.log(production);
            
            var url = '";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("prod_search", array("production" => "production"));
        echo "';
            url = url.replace('production', production);
            
            \$.ajax({
                url: url,
                success: function(spots){
                    console.log('spots');
                    console.log(spots);

                    var values = '';

                    \$('#filter_spot_value option').each(function() {
                        var ok = 0;
                    \tfor (var spot in spots) {
 
                            if(\$(this).val() == spot[1])
                            {
                                var ok = 1;
                            }
                        }
                        if( ok == 0)
                        {
                            \$(this).hide();
                        }
                    });

                }
            })
            
            
            
            
            switch(production) {
\t\t\t    case 'dunesafari':
\t\t\t    \tconsole.log(\"Créer safari.\");
\t\t\t        \$('select[name=\"action\"]').val('createSafari');
\t\t\t        var textbtn = 'Créer safari'; 
\t\t\t        break;
\t\t\t    case 'dunetravel':
\t\t\t    case 'suboceatravel':
\t\t\t    \tconsole.log(\"Créer séjour.\");
\t\t\t        \$('select[name=\"action\"]').val('createTravel');
\t\t\t        var textbtn = 'Créer séjour';
\t\t\t        break;
\t\t\t    case 'suboceacruise':
\t\t\t    case 'dunecruise':
\t\t\t    \tconsole.log(\"Créer croisière.\");
\t\t\t        \$('select[name=\"action\"]').val('createCruise');
\t\t\t        var textbtn = 'Créer croisière';
\t\t\t        break;
\t\t\t    default:
\t\t\t        var textbtn = 'Erreur Merci de modifer votre choix'
\t\t\t}
            \$('.btn-primary').val(textbtn);
            
        });
    </script>
";
        
        $__internal_fa4bf0d9b314d717560b581fd7a685c3f9a9bea93495a4e8801e2ca9a8aa40b1->leave($__internal_fa4bf0d9b314d717560b581fd7a685c3f9a9bea93495a4e8801e2ca9a8aa40b1_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/packagelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
{% block list_header %}
    <script type=\"text/javascript\">
        \$(document).ready( function () {
            \$('.sonata-filters-box').css('display', 'block');
            \$('.spotsearch').parent().parent().css('display', 'block');
            \$('.productionsearch').parent().parent().css('display', 'block');
            
            \$('#s2id_autogen8').hide();
        });

        \$('.productionsearch').change(function(){

            var production = \$('#filter_production_value').val();

            console.log('production');
            console.log(production);
            
            var url = '{{ url(\"prod_search\", {'production':'production'}) }}';
            url = url.replace('production', production);
            
            \$.ajax({
                url: url,
                success: function(spots){
                    console.log('spots');
                    console.log(spots);

                    var values = '';

                    \$('#filter_spot_value option').each(function() {
                        var ok = 0;
                    \tfor (var spot in spots) {
 
                            if(\$(this).val() == spot[1])
                            {
                                var ok = 1;
                            }
                        }
                        if( ok == 0)
                        {
                            \$(this).hide();
                        }
                    });

                }
            })
            
            
            
            
            switch(production) {
\t\t\t    case 'dunesafari':
\t\t\t    \tconsole.log(\"Créer safari.\");
\t\t\t        \$('select[name=\"action\"]').val('createSafari');
\t\t\t        var textbtn = 'Créer safari'; 
\t\t\t        break;
\t\t\t    case 'dunetravel':
\t\t\t    case 'suboceatravel':
\t\t\t    \tconsole.log(\"Créer séjour.\");
\t\t\t        \$('select[name=\"action\"]').val('createTravel');
\t\t\t        var textbtn = 'Créer séjour';
\t\t\t        break;
\t\t\t    case 'suboceacruise':
\t\t\t    case 'dunecruise':
\t\t\t    \tconsole.log(\"Créer croisière.\");
\t\t\t        \$('select[name=\"action\"]').val('createCruise');
\t\t\t        var textbtn = 'Créer croisière';
\t\t\t        break;
\t\t\t    default:
\t\t\t        var textbtn = 'Erreur Merci de modifer votre choix'
\t\t\t}
            \$('.btn-primary').val(textbtn);
            
        });
    </script>
{% endblock %}






", "@BackOffice/packagelist.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\packagelist.html.twig");
    }
}
