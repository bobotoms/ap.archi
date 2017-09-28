<?php

/* BackOfficeBundle::packagelist.html.twig */
class __TwigTemplate_2ebe955554b17dae86a544254d7242689fc0a945af945a45524db23ee7b366e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "BackOfficeBundle::packagelist.html.twig", 1);
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
        $__internal_93d2425baf7008e7bb6464be859a99789bc47b53ef2a70b2ce335f2ac2f4fb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d2425baf7008e7bb6464be859a99789bc47b53ef2a70b2ce335f2ac2f4fb77->enter($__internal_93d2425baf7008e7bb6464be859a99789bc47b53ef2a70b2ce335f2ac2f4fb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::packagelist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d2425baf7008e7bb6464be859a99789bc47b53ef2a70b2ce335f2ac2f4fb77->leave($__internal_93d2425baf7008e7bb6464be859a99789bc47b53ef2a70b2ce335f2ac2f4fb77_prof);

    }

    // line 2
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_aacbeb1615d19d2d33a421849cc2fdd8b08782f7b8fbac8643bbb227966e58d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacbeb1615d19d2d33a421849cc2fdd8b08782f7b8fbac8643bbb227966e58d9->enter($__internal_aacbeb1615d19d2d33a421849cc2fdd8b08782f7b8fbac8643bbb227966e58d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

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
        
        $__internal_aacbeb1615d19d2d33a421849cc2fdd8b08782f7b8fbac8643bbb227966e58d9->leave($__internal_aacbeb1615d19d2d33a421849cc2fdd8b08782f7b8fbac8643bbb227966e58d9_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::packagelist.html.twig";
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






", "BackOfficeBundle::packagelist.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/packagelist.html.twig");
    }
}
