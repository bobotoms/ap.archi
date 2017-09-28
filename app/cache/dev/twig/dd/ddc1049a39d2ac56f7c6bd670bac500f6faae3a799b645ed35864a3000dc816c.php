<?php

/* @BackOffice/map.html.twig */
class __TwigTemplate_7c5138b12894ac5d172794886837294421a1c8336ed0ea8b2c5e4b3f6ff2d1ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "@BackOffice/map.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c23d7ed8aa8c4040a5f17156572e2a57cb8a5bc4efd029affdb823c12ab36a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c23d7ed8aa8c4040a5f17156572e2a57cb8a5bc4efd029affdb823c12ab36a2->enter($__internal_2c23d7ed8aa8c4040a5f17156572e2a57cb8a5bc4efd029affdb823c12ab36a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c23d7ed8aa8c4040a5f17156572e2a57cb8a5bc4efd029affdb823c12ab36a2->leave($__internal_2c23d7ed8aa8c4040a5f17156572e2a57cb8a5bc4efd029affdb823c12ab36a2_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1075902b527b42bae4eaacd396c91086021b68458431e959477298a6584a6a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1075902b527b42bae4eaacd396c91086021b68458431e959477298a6584a6a57->enter($__internal_1075902b527b42bae4eaacd396c91086021b68458431e959477298a6584a6a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "
";
        // line 4
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
\t\tvar \$ = \$.noConflict(true);
\t</script>
\t
  \t<script type=\"text/javascript\"
            src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js\">
    </script>
    
    <script type=\"text/javascript\"
            src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyAOXT4bZLqvV_AVNpE4BOxgE_qrsjoj_Bo\">
    </script>
    
    <script type=\"text/javascript\">
\t\tvar jq1 = \$.noConflict(true);
\t</script>
\t
    <script type=\"text/javascript\">
    jq1(document).ready(function(e) {
    
    \tconsole.log('mapType');
    \tconsole.log(jq1('.mapType').val());
\t    if(jq1('.mapType').val() != 'oui')
\t    {
\t        jq1('.nameMapType').parent().parent().hide();
        }
    });
    </script>
    <script type=\"text/javascript\">
     
     jq1(function() {
\t\tif (jq1('.lat').val() || jq1('.lng').val())
\t\t{
            var latlng = new google.maps.LatLng(jq1('.lat').val(),jq1('.lng').val());
\t\t}
\t\telse
\t\t{
            var latlng = new google.maps.LatLng(43.57317363820925,3.863909667968759);
\t\t}
        var map = new google.maps.Map(document.getElementById('gmap'),{
            zoom : 6,
            center: latlng,
            mapTypeId:  google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
            position : latlng,
            map : map,
            title : 'curseur',
            draggable : true
        });
        var geocoder = new google.maps.Geocoder();

        google.maps.event.addListener(marker,'drag',function(){
            setPosition(marker);
        });

        \$('#address').keypress(function(e){

            if(e.keyCode==13){

                var request = {
                    address : jq1(this).val()
                }
                geocoder.geocode(request,function(results, status){
                    if(status == google.maps.GeocoderStatus.OK){
                        var pos = results[0].geometry.location;
                        map.setCenter(pos);
                        marker.setPosition(pos);
                        setPosition(marker);
                    };
                });
                return false;
            }
        })

     });
     function setPosition(marker){
         var pos = marker.getPosition();
         jq1('.lat').val(pos.lat());
         jq1('.lng').val(pos.lng());
     }
    </script>
    <script type=\"text/javascript\">
    function mapType() {
        if (jq1('.mapType').val()=='oui')
        {
            jq1('.nameMapType').parent().parent().show();
            jq1('.nameMapType').show();
            jq1('.nameMapType').attr(\"required\", true);
        }
        else
        {
            jq1('.nameMapType').parent().parent().hide();
            jq1('.nameMapType').attr(\"required\", false);
        }
    };

    </script> 
";
        
        $__internal_1075902b527b42bae4eaacd396c91086021b68458431e959477298a6584a6a57->leave($__internal_1075902b527b42bae4eaacd396c91086021b68458431e959477298a6584a6a57_prof);

    }

    // line 104
    public function block_form($context, array $blocks = array())
    {
        $__internal_f52f88e76466ec8e0b22a74111a667b4a490c8a503a309ced1b7a64fc014cdc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52f88e76466ec8e0b22a74111a667b4a490c8a503a309ced1b7a64fc014cdc4->enter($__internal_f52f88e76466ec8e0b22a74111a667b4a490c8a503a309ced1b7a64fc014cdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 105
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
    <div class=\"\">
    <h1>Map</h1>
   
\tLieu: <input type=\"text\" name=\"adresse\" id=\"address\"><br/><br/>
    <div id=\"gmap\" clas=\"col-md-6\" style=\"width:100%; height:350px\"></div>

    </div>
";
        
        $__internal_f52f88e76466ec8e0b22a74111a667b4a490c8a503a309ced1b7a64fc014cdc4->leave($__internal_f52f88e76466ec8e0b22a74111a667b4a490c8a503a309ced1b7a64fc014cdc4_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 105,  151 => 104,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
\t\tvar \$ = \$.noConflict(true);
\t</script>
\t
  \t<script type=\"text/javascript\"
            src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js\">
    </script>
    
    <script type=\"text/javascript\"
            src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyAOXT4bZLqvV_AVNpE4BOxgE_qrsjoj_Bo\">
    </script>
    
    <script type=\"text/javascript\">
\t\tvar jq1 = \$.noConflict(true);
\t</script>
\t
    <script type=\"text/javascript\">
    jq1(document).ready(function(e) {
    
    \tconsole.log('mapType');
    \tconsole.log(jq1('.mapType').val());
\t    if(jq1('.mapType').val() != 'oui')
\t    {
\t        jq1('.nameMapType').parent().parent().hide();
        }
    });
    </script>
    <script type=\"text/javascript\">
     
     jq1(function() {
\t\tif (jq1('.lat').val() || jq1('.lng').val())
\t\t{
            var latlng = new google.maps.LatLng(jq1('.lat').val(),jq1('.lng').val());
\t\t}
\t\telse
\t\t{
            var latlng = new google.maps.LatLng(43.57317363820925,3.863909667968759);
\t\t}
        var map = new google.maps.Map(document.getElementById('gmap'),{
            zoom : 6,
            center: latlng,
            mapTypeId:  google.maps.MapTypeId.ROADMAP
        });
        var marker = new google.maps.Marker({
            position : latlng,
            map : map,
            title : 'curseur',
            draggable : true
        });
        var geocoder = new google.maps.Geocoder();

        google.maps.event.addListener(marker,'drag',function(){
            setPosition(marker);
        });

        \$('#address').keypress(function(e){

            if(e.keyCode==13){

                var request = {
                    address : jq1(this).val()
                }
                geocoder.geocode(request,function(results, status){
                    if(status == google.maps.GeocoderStatus.OK){
                        var pos = results[0].geometry.location;
                        map.setCenter(pos);
                        marker.setPosition(pos);
                        setPosition(marker);
                    };
                });
                return false;
            }
        })

     });
     function setPosition(marker){
         var pos = marker.getPosition();
         jq1('.lat').val(pos.lat());
         jq1('.lng').val(pos.lng());
     }
    </script>
    <script type=\"text/javascript\">
    function mapType() {
        if (jq1('.mapType').val()=='oui')
        {
            jq1('.nameMapType').parent().parent().show();
            jq1('.nameMapType').show();
            jq1('.nameMapType').attr(\"required\", true);
        }
        else
        {
            jq1('.nameMapType').parent().parent().hide();
            jq1('.nameMapType').attr(\"required\", false);
        }
    };

    </script> 
{% endblock %}
{% block form %}
    {{ block('parentForm') }}
    <div class=\"\">
    <h1>Map</h1>
   
\tLieu: <input type=\"text\" name=\"adresse\" id=\"address\"><br/><br/>
    <div id=\"gmap\" clas=\"col-md-6\" style=\"width:100%; height:350px\"></div>

    </div>
{% endblock %}
    
  



", "@BackOffice/map.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\map.html.twig");
    }
}
