<?php

/* BackOfficeBundle::mapedit.html.twig */
class __TwigTemplate_8094966549cce2625195ddbca5ae80af3ea397ed7c2c914052390a2954c1de9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "BackOfficeBundle::mapedit.html.twig", 1);
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
        $__internal_15270f43925a9a50c5c914528253eb84d0bffc0b32e77371699cbf18f95b394a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15270f43925a9a50c5c914528253eb84d0bffc0b32e77371699cbf18f95b394a->enter($__internal_15270f43925a9a50c5c914528253eb84d0bffc0b32e77371699cbf18f95b394a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::mapedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15270f43925a9a50c5c914528253eb84d0bffc0b32e77371699cbf18f95b394a->leave($__internal_15270f43925a9a50c5c914528253eb84d0bffc0b32e77371699cbf18f95b394a_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e3e03e65b749a495e337ac22a6a0c1f26f6b09c8c07771919e639a149512ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3e03e65b749a495e337ac22a6a0c1f26f6b09c8c07771919e639a149512ead->enter($__internal_6e3e03e65b749a495e337ac22a6a0c1f26f6b09c8c07771919e639a149512ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "

    ";
        // line 5
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
\t\tvar \$ = \$.noConflict(true);
\t</script>
    <script type=\"text/javascript\" charset=\"utf8\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyAOXT4bZLqvV_AVNpE4BOxgE_qrsjoj_Bo\">
    </script>
    <script type=\"text/javascript\">
\t\tvar jq1 = \$.noConflict(true);
\t</script>

  
    <script type=\"text/javascript\">
        jq1(document).ready( function () {
        \tjq1(\".mapMarker\").parent().parent().parent().parent().hide();
        \tjq1(\".mapIti\").parent().parent().parent().parent().hide();

\t\t\tgTypeMap()

            jq1(\".typeMap\").click(function() {
                gTypeMap()
            });

            jq1(\".mapMarker\" ).click(function() {
                gMapMarker();
            });

            jq1(\".mapIti\" ).click(function() {
                gMapIti();
            });
        })

\t\tfunction gTypeMap()
\t\t{
\t\t\tif(jq1(\".typeMap\").val() == 'null')
                {
\t\t        \tjq1(\".mapMarker\").parent().parent().parent().parent().hide();
\t\t        \tjq1(\".mapIti\").parent().parent().parent().parent().hide();
\t\t        \tjq1('.mapMarker').val('');
\t\t        \tjq1('.mapIti').val('');
                }
                else if(jq1(\".typeMap\").val() == 'markers')
                {
        \t\t\tjq1(\".mapMarker\").parent().parent().parent().parent().show();\t
        \t\t\tjq1(\".mapIti\").parent().parent().parent().parent().hide();
\t\t        \tjq1('.mapIti').val('');
                \tgMapMarker();
                }
                else
                {
        \t\t\tjq1(\".mapIti\").parent().parent().parent().parent().show();
        \t\t\tjq1(\".mapMarker\").parent().parent().parent().parent().hide();
\t\t        \tjq1('.mapMarker').val('');
                \tgMapIti();
                }
\t\t}

\t\tfunction gMapMarker() {

            console.log('mapMarker');
            console.log(jq1('.mapMarker').val().length);
            markers = jq1('.mapMarker').val();
        
            markers = jq1('.mapMarker').val();

            console.log('mapMarker2');
            console.log(typeof(markers));
            
            console.log('nameIti');
            console.log(typeof(nameIti));
            
            var url = '";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("marker_search", array("markers" => "markers"));
        echo "';
            url = url.replace('markers', markers);
            console.log('url');
            console.log(url);
            \$.ajax({
                url: url,
                success: function(response){
                    response=response.replace(/\\[/g,'');
                    response=response.replace(/\\]/g,'');
                    response=response.replace(/\\\"/g,'');

                    var markersArray = response.split(',');

\t\t\t\t\t/*    On centre la carte sur les première coordonnèes */
\t\t\t\t\tvar infosCenter = markersArray[0].split(';');
\t\t\t\t\tvar latCenter = infosCenter[0];
\t                var lngCenter = infosCenter[1];
\t               
\t\t\t\t\tvar latlng = new google.maps.LatLng(latCenter,lngCenter);
\t\t            var map = new google.maps.Map(document.getElementById('gmap'),{
\t\t                zoom : 4,
\t\t                center: latlng,
\t\t                mapTypeId:  google.maps.MapTypeId.ROADMAP
\t\t            });
\t\t\t\t\t/*    FIN On centre la carte sur les première coordonnèes */

\t\t            console.log('markersArray.length');
\t\t            console.log(markersArray.length);
\t\t            for(var i= 0; i < markersArray.length; i++)
\t\t            {
\t\t
\t\t                console.log('i');
\t\t                console.log(i);
\t\t                console.log('********************FOR*******************');
\t\t                var infos = markersArray[i].split(';');
\t\t                var lat = infos[0];
\t\t                console.log('lat');
\t\t                console.log(lat);
\t\t                var lng = infos[1];
\t\t                console.log('lng');
\t\t                console.log(lng);
\t\t                var type = infos[2]
\t\t                console.log('type');
\t\t                console.log(type);
\t\t                var name = infos[3]
\t\t                console.log('name');
\t\t                console.log(name);
\t\t                var desc = infos[4]
\t\t                console.log('desc');
\t\t                console.log(desc);
\t\t
\t\t                
\t\t                var icon = '';
\t\t                console.log('icon');
\t\t                console.log(icon);
\t\t                switch (type) {
\t\t                    case 'accommodation':
\t\t                        icon = '";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/hostel.png"), "html", null, true);
        echo "'
\t\t                        break;
\t\t                    case 'divingcenter':
\t\t                        icon = '";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/scubadiving.png"), "html", null, true);
        echo "'
\t\t                        break;
\t\t                    case 'boat':
\t\t                        icon = '";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/boat.png"), "html", null, true);
        echo "'
\t\t                        break;
\t\t                    case 'restaurant':
\t\t                        icon = '";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/restaurant.png"), "html", null, true);
        echo "'
\t\t                        break;
\t\t                    case 'country':
\t\t                        icon = '";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/country.png"), "html", null, true);
        echo "'
\t\t                        break;
\t\t                    default:
\t\t                        icon = '";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/direction.png"), "html", null, true);
        echo "'
\t\t                }
\t\t                ;
\t\t\t\t\t\tvar infoWindow = new google.maps.InfoWindow();
\t\t                var marker = new google.maps.Marker({
\t\t                    position: new google.maps.LatLng(lat,lng),
\t\t                    icon: icon,
\t\t                    map: map,
\t\t                    draggable: false,
\t\t                    animation: google.maps.Animation.DROP,
\t\t                    title: name
\t\t                });
\t\t\t\t\t\tgoogle.maps.event.addListener(marker,'click', (
\t\t\t\t\t\t\tfunction(marker,desc,infoWindow){
\t\t\t\t\t\t\treturn function() {
\t\t\t\t\t\t\t\tinfoWindow.close();
\t\t\t\t\t\t\t\tinfoWindow.setContent(desc);
\t\t\t\t\t\t\t\tinfoWindow.open(map,marker);
\t\t\t\t\t\t\t};
\t\t\t\t\t\t})(marker,desc,infoWindow));  
\t\t                
                    }
                }
            })            
        };

\t\tfunction gMapIti() {

            
            
            console.log('mapIti');
            idIti = jq1('.mapIti').val();
        
            console.log('idIti');
            console.log(idIti);
            
            var url = '";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("nameiti_search", array("idIti" => "idIti"));
        echo "';
            url = url.replace('idIti', idIti);
            console.log('url');
            console.log(url);
            \$.ajax({
                url: url,
                success: function(response){

                    console.log('******************** gItis *******************');

                    console.log(response);
                    
                    response=response.replace(/\\[/g,'');
                    response=response.replace(/\\]/g,'');
                    response=response.replace(/\\\"/g,'');

                    console.log('******************** gItis *******************');
            
\t\t\t        var ItisMarkers = response.split(',');
\t\t\t
\t\t\t        /*    On centre la carte sur les première coordonnèes */
\t\t\t\t\tvar infosCenter = ItisMarkers[0].split(';');
\t\t\t\t\tvar latCenter = infosCenter[0];
\t                var lngCenter = infosCenter[1];
\t               
\t\t\t\t\tvar latlng = new google.maps.LatLng(latCenter,lngCenter);
\t\t            var map = new google.maps.Map(document.getElementById('gmap'),{
\t\t                zoom : 4,
\t\t                center: latlng,
\t\t                mapTypeId:  google.maps.MapTypeId.ROADMAP
\t\t            });
\t\t\t\t\t/*    FIN On centre la carte sur les première coordonnèes */
\t\t\t       
\t\t\t        wayPointArray = new Array();
\t\t\t        
\t\t            console.log('ItisMarkers');
\t\t            console.log(ItisMarkers);
\t\t            console.log(ItisMarkers.length);
\t\t
\t\t            for(var k= 0; k < ItisMarkers.length; k++)
\t\t            {
\t\t
\t\t
\t\t\t            console.log(' *********** ItisMarkers[k] **********');
\t\t\t            console.log(ItisMarkers[k]);
\t\t                ItisMarkers[k]=ItisMarkers[k].replace(/\\//g,'');
\t\t                ItisMarkers[k]=ItisMarkers[k].replace(/\\\\/g,'');
\t\t
\t\t                var infos = ItisMarkers[k].split(';');
\t\t                var lat = infos[0];
\t\t                console.log('lat iti');
\t\t                console.log(lat);
\t\t                var lng = infos[1];
\t\t                console.log('lng iti');
\t\t                console.log(lng);
\t\t                var type = infos[2]
\t\t                console.log('type iti');
\t\t                console.log(type);
\t\t                var desc = infos[3]
\t\t
\t\t                var infoWindow = new google.maps.InfoWindow();
\t\t                var icon = '';
\t\t                console.log('icon');
\t\t                console.log(icon);
\t\t                switch (type) {
\t\t                    case 'accommodation':
\t\t                        icon = '";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/hostel.png"), "html", null, true);
        echo "'
\t\t                        break;
\t\t                    case 'divingcenter':
\t\t                        icon = '";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/scubadiving.png"), "html", null, true);
        echo "'
\t\t                        break;
\t\t                    case 'boat':
\t\t                        icon = '";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/boat.png"), "html", null, true);
        echo "'
\t\t                        break;
\t\t                    case 'restaurant':
\t\t                        icon = '";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/restaurant.png"), "html", null, true);
        echo "'
\t\t                        break;
\t\t                    case 'country':
\t\t                        icon = '";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/country.png"), "html", null, true);
        echo "'
\t\t                        break;
\t\t                    default:
\t\t                        icon = '";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/frontoffice/images/direction.png"), "html", null, true);
        echo "'
\t\t                };
\t\t
\t\t                var marker = new google.maps.Marker({
\t\t                    position: new google.maps.LatLng(lat,lng),
\t\t                    icon: icon,
\t\t                    map: map,
\t\t                    draggable: false,
\t\t                    animation: google.maps.Animation.DROP,
\t\t                    title: 'Title'
\t\t                });
\t\t                google.maps.event.addListener(marker, \"click\", function() {
\t\t
\t\t                    infoWindow.close();
\t\t                    infoWindow.setContent(
\t\t                        '<div id=\"content\"> '+desc+' </div>'
\t\t                    );
\t\t                    infoWindow.open(map, this);
\t\t                });
\t\t
\t\t                if (k == 0)
\t\t                {
\t\t                    console.log('**** dans if ****')
\t\t                    var first = new google.maps.LatLng(lat,lng)
\t\t                }
\t\t                else if (k == ItisMarkers.length-1)
\t\t                {
\t\t                    console.log('**** dans else if****')
\t\t                    var last = new google.maps.LatLng(lat,lng)
\t                console.log(' ***  ** last **  ***');
\t                console.log(last);
\t\t                }
\t\t                else
\t\t                {
\t\t                    console.log('**** dans else ****')
\t\t                    var waypoint = new google.maps.LatLng(lat,lng);
\t                console.log(' *** ** waypoint ** ***');
\t                console.log(waypoint);
\t\t                    wayPointArray.push({location: waypoint, stopover: true}) 
\t\t                    console.log(' ***  wayPointArray length ***');
\t                \t\tconsole.log(wayPointArray.length);
\t\t                    
\t\t                }
\t\t
\t\t\t\t\t}
\t\t\t\t\t\t
\t                console.log(' *** ** ** ** wayPointArray ** ** ** ***');
\t                console.log(wayPointArray);
\t                console.log('directionsDisplay');
\t                directionsDisplay = new google.maps.DirectionsRenderer();
\t
\t                console.log(directionsDisplay);
\t
\t                directionsDisplay.setMap(map);
\t
\t                console.log('directionsDisplay Map');
\t                //           function calcRoute() {
\t
\t                console.log('calcRoute');
\t                current_pos = first;
\t                console.log(current_pos);
\t                end_pos = last;
\t                console.log(end_pos);
\t                var request = {
\t                    origin:current_pos,
\t                    destination:end_pos,
\t                    waypoints: wayPointArray,
\t                    optimizeWaypoints: true,
\t                    travelMode: google.maps.TravelMode.DRIVING,
\t                    avoidHighways: true
\t                };
\t                var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
\t
\t                console.log('avant directionsService');
\t                directionsService.route(request, function(result, status) {
\t
\t                    console.log('dans directionsService');
\t                    if (status == google.maps.DirectionsStatus.OK) {
\t                        console.log('dans if directionsService');
\t                        directionsDisplay.setDirections(result);
\t                        directionsDisplay.setMap(map);
\t                        directionsDisplay.setOptions( { suppressMarkers: true } );
\t                    }
\t                });
\t\t\t        
                }
            })
        };

    </script>


";
        
        $__internal_6e3e03e65b749a495e337ac22a6a0c1f26f6b09c8c07771919e639a149512ead->leave($__internal_6e3e03e65b749a495e337ac22a6a0c1f26f6b09c8c07771919e639a149512ead_prof);

    }

    // line 359
    public function block_form($context, array $blocks = array())
    {
        $__internal_2f46c469901275bd328207ac28df6d26bb1b67b921e18f9f0efe85f34d1b8fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f46c469901275bd328207ac28df6d26bb1b67b921e18f9f0efe85f34d1b8fa9->enter($__internal_2f46c469901275bd328207ac28df6d26bb1b67b921e18f9f0efe85f34d1b8fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 360
        $this->displayParentBlock("form", $context, $blocks);
        echo "

    <h1>Map</h1>

    <div id=\"gmap\" style=\"width:100%; height:450px\"></div>
";
        
        $__internal_2f46c469901275bd328207ac28df6d26bb1b67b921e18f9f0efe85f34d1b8fa9->leave($__internal_2f46c469901275bd328207ac28df6d26bb1b67b921e18f9f0efe85f34d1b8fa9_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::mapedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 360,  451 => 359,  351 => 266,  345 => 263,  339 => 260,  333 => 257,  327 => 254,  321 => 251,  252 => 185,  213 => 149,  207 => 146,  201 => 143,  195 => 140,  189 => 137,  183 => 134,  123 => 77,  52 => 9,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
    <script type=\"text/javascript\" charset=\"utf8\" src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyAOXT4bZLqvV_AVNpE4BOxgE_qrsjoj_Bo\">
    </script>
    <script type=\"text/javascript\">
\t\tvar jq1 = \$.noConflict(true);
\t</script>

  
    <script type=\"text/javascript\">
        jq1(document).ready( function () {
        \tjq1(\".mapMarker\").parent().parent().parent().parent().hide();
        \tjq1(\".mapIti\").parent().parent().parent().parent().hide();

\t\t\tgTypeMap()

            jq1(\".typeMap\").click(function() {
                gTypeMap()
            });

            jq1(\".mapMarker\" ).click(function() {
                gMapMarker();
            });

            jq1(\".mapIti\" ).click(function() {
                gMapIti();
            });
        })

\t\tfunction gTypeMap()
\t\t{
\t\t\tif(jq1(\".typeMap\").val() == 'null')
                {
\t\t        \tjq1(\".mapMarker\").parent().parent().parent().parent().hide();
\t\t        \tjq1(\".mapIti\").parent().parent().parent().parent().hide();
\t\t        \tjq1('.mapMarker').val('');
\t\t        \tjq1('.mapIti').val('');
                }
                else if(jq1(\".typeMap\").val() == 'markers')
                {
        \t\t\tjq1(\".mapMarker\").parent().parent().parent().parent().show();\t
        \t\t\tjq1(\".mapIti\").parent().parent().parent().parent().hide();
\t\t        \tjq1('.mapIti').val('');
                \tgMapMarker();
                }
                else
                {
        \t\t\tjq1(\".mapIti\").parent().parent().parent().parent().show();
        \t\t\tjq1(\".mapMarker\").parent().parent().parent().parent().hide();
\t\t        \tjq1('.mapMarker').val('');
                \tgMapIti();
                }
\t\t}

\t\tfunction gMapMarker() {

            console.log('mapMarker');
            console.log(jq1('.mapMarker').val().length);
            markers = jq1('.mapMarker').val();
        
            markers = jq1('.mapMarker').val();

            console.log('mapMarker2');
            console.log(typeof(markers));
            
            console.log('nameIti');
            console.log(typeof(nameIti));
            
            var url = '{{ url(\"marker_search\", {'markers':'markers'}) }}';
            url = url.replace('markers', markers);
            console.log('url');
            console.log(url);
            \$.ajax({
                url: url,
                success: function(response){
                    response=response.replace(/\\[/g,'');
                    response=response.replace(/\\]/g,'');
                    response=response.replace(/\\\"/g,'');

                    var markersArray = response.split(',');

\t\t\t\t\t/*    On centre la carte sur les première coordonnèes */
\t\t\t\t\tvar infosCenter = markersArray[0].split(';');
\t\t\t\t\tvar latCenter = infosCenter[0];
\t                var lngCenter = infosCenter[1];
\t               
\t\t\t\t\tvar latlng = new google.maps.LatLng(latCenter,lngCenter);
\t\t            var map = new google.maps.Map(document.getElementById('gmap'),{
\t\t                zoom : 4,
\t\t                center: latlng,
\t\t                mapTypeId:  google.maps.MapTypeId.ROADMAP
\t\t            });
\t\t\t\t\t/*    FIN On centre la carte sur les première coordonnèes */

\t\t            console.log('markersArray.length');
\t\t            console.log(markersArray.length);
\t\t            for(var i= 0; i < markersArray.length; i++)
\t\t            {
\t\t
\t\t                console.log('i');
\t\t                console.log(i);
\t\t                console.log('********************FOR*******************');
\t\t                var infos = markersArray[i].split(';');
\t\t                var lat = infos[0];
\t\t                console.log('lat');
\t\t                console.log(lat);
\t\t                var lng = infos[1];
\t\t                console.log('lng');
\t\t                console.log(lng);
\t\t                var type = infos[2]
\t\t                console.log('type');
\t\t                console.log(type);
\t\t                var name = infos[3]
\t\t                console.log('name');
\t\t                console.log(name);
\t\t                var desc = infos[4]
\t\t                console.log('desc');
\t\t                console.log(desc);
\t\t
\t\t                
\t\t                var icon = '';
\t\t                console.log('icon');
\t\t                console.log(icon);
\t\t                switch (type) {
\t\t                    case 'accommodation':
\t\t                        icon = '{{ asset('bundles/frontoffice/images/hostel.png') }}'
\t\t                        break;
\t\t                    case 'divingcenter':
\t\t                        icon = '{{ asset('bundles/frontoffice/images/scubadiving.png') }}'
\t\t                        break;
\t\t                    case 'boat':
\t\t                        icon = '{{ asset('bundles/frontoffice/images/boat.png') }}'
\t\t                        break;
\t\t                    case 'restaurant':
\t\t                        icon = '{{ asset('bundles/frontoffice/images/restaurant.png') }}'
\t\t                        break;
\t\t                    case 'country':
\t\t                        icon = '{{ asset('bundles/frontoffice/images/country.png') }}'
\t\t                        break;
\t\t                    default:
\t\t                        icon = '{{ asset('bundles/frontoffice/images/direction.png') }}'
\t\t                }
\t\t                ;
\t\t\t\t\t\tvar infoWindow = new google.maps.InfoWindow();
\t\t                var marker = new google.maps.Marker({
\t\t                    position: new google.maps.LatLng(lat,lng),
\t\t                    icon: icon,
\t\t                    map: map,
\t\t                    draggable: false,
\t\t                    animation: google.maps.Animation.DROP,
\t\t                    title: name
\t\t                });
\t\t\t\t\t\tgoogle.maps.event.addListener(marker,'click', (
\t\t\t\t\t\t\tfunction(marker,desc,infoWindow){
\t\t\t\t\t\t\treturn function() {
\t\t\t\t\t\t\t\tinfoWindow.close();
\t\t\t\t\t\t\t\tinfoWindow.setContent(desc);
\t\t\t\t\t\t\t\tinfoWindow.open(map,marker);
\t\t\t\t\t\t\t};
\t\t\t\t\t\t})(marker,desc,infoWindow));  
\t\t                
                    }
                }
            })            
        };

\t\tfunction gMapIti() {

            
            
            console.log('mapIti');
            idIti = jq1('.mapIti').val();
        
            console.log('idIti');
            console.log(idIti);
            
            var url = '{{ url(\"nameiti_search\", {'idIti':'idIti'}) }}';
            url = url.replace('idIti', idIti);
            console.log('url');
            console.log(url);
            \$.ajax({
                url: url,
                success: function(response){

                    console.log('******************** gItis *******************');

                    console.log(response);
                    
                    response=response.replace(/\\[/g,'');
                    response=response.replace(/\\]/g,'');
                    response=response.replace(/\\\"/g,'');

                    console.log('******************** gItis *******************');
            
\t\t\t        var ItisMarkers = response.split(',');
\t\t\t
\t\t\t        /*    On centre la carte sur les première coordonnèes */
\t\t\t\t\tvar infosCenter = ItisMarkers[0].split(';');
\t\t\t\t\tvar latCenter = infosCenter[0];
\t                var lngCenter = infosCenter[1];
\t               
\t\t\t\t\tvar latlng = new google.maps.LatLng(latCenter,lngCenter);
\t\t            var map = new google.maps.Map(document.getElementById('gmap'),{
\t\t                zoom : 4,
\t\t                center: latlng,
\t\t                mapTypeId:  google.maps.MapTypeId.ROADMAP
\t\t            });
\t\t\t\t\t/*    FIN On centre la carte sur les première coordonnèes */
\t\t\t       
\t\t\t        wayPointArray = new Array();
\t\t\t        
\t\t            console.log('ItisMarkers');
\t\t            console.log(ItisMarkers);
\t\t            console.log(ItisMarkers.length);
\t\t
\t\t            for(var k= 0; k < ItisMarkers.length; k++)
\t\t            {
\t\t
\t\t
\t\t\t            console.log(' *********** ItisMarkers[k] **********');
\t\t\t            console.log(ItisMarkers[k]);
\t\t                ItisMarkers[k]=ItisMarkers[k].replace(/\\//g,'');
\t\t                ItisMarkers[k]=ItisMarkers[k].replace(/\\\\/g,'');
\t\t
\t\t                var infos = ItisMarkers[k].split(';');
\t\t                var lat = infos[0];
\t\t                console.log('lat iti');
\t\t                console.log(lat);
\t\t                var lng = infos[1];
\t\t                console.log('lng iti');
\t\t                console.log(lng);
\t\t                var type = infos[2]
\t\t                console.log('type iti');
\t\t                console.log(type);
\t\t                var desc = infos[3]
\t\t
\t\t                var infoWindow = new google.maps.InfoWindow();
\t\t                var icon = '';
\t\t                console.log('icon');
\t\t                console.log(icon);
\t\t                switch (type) {
\t\t                    case 'accommodation':
\t\t                        icon = '{{ asset('bundles/frontoffice/images/hostel.png') }}'
\t\t                        break;
\t\t                    case 'divingcenter':
\t\t                        icon = '{{ asset('bundles/frontoffice/images/scubadiving.png') }}'
\t\t                        break;
\t\t                    case 'boat':
\t\t                        icon = '{{ asset('bundles/frontoffice/images/boat.png') }}'
\t\t                        break;
\t\t                    case 'restaurant':
\t\t                        icon = '{{ asset('bundles/frontoffice/images/restaurant.png') }}'
\t\t                        break;
\t\t                    case 'country':
\t\t                        icon = '{{ asset('bundles/frontoffice/images/country.png') }}'
\t\t                        break;
\t\t                    default:
\t\t                        icon = '{{ asset('bundles/frontoffice/images/direction.png') }}'
\t\t                };
\t\t
\t\t                var marker = new google.maps.Marker({
\t\t                    position: new google.maps.LatLng(lat,lng),
\t\t                    icon: icon,
\t\t                    map: map,
\t\t                    draggable: false,
\t\t                    animation: google.maps.Animation.DROP,
\t\t                    title: 'Title'
\t\t                });
\t\t                google.maps.event.addListener(marker, \"click\", function() {
\t\t
\t\t                    infoWindow.close();
\t\t                    infoWindow.setContent(
\t\t                        '<div id=\"content\"> '+desc+' </div>'
\t\t                    );
\t\t                    infoWindow.open(map, this);
\t\t                });
\t\t
\t\t                if (k == 0)
\t\t                {
\t\t                    console.log('**** dans if ****')
\t\t                    var first = new google.maps.LatLng(lat,lng)
\t\t                }
\t\t                else if (k == ItisMarkers.length-1)
\t\t                {
\t\t                    console.log('**** dans else if****')
\t\t                    var last = new google.maps.LatLng(lat,lng)
\t                console.log(' ***  ** last **  ***');
\t                console.log(last);
\t\t                }
\t\t                else
\t\t                {
\t\t                    console.log('**** dans else ****')
\t\t                    var waypoint = new google.maps.LatLng(lat,lng);
\t                console.log(' *** ** waypoint ** ***');
\t                console.log(waypoint);
\t\t                    wayPointArray.push({location: waypoint, stopover: true}) 
\t\t                    console.log(' ***  wayPointArray length ***');
\t                \t\tconsole.log(wayPointArray.length);
\t\t                    
\t\t                }
\t\t
\t\t\t\t\t}
\t\t\t\t\t\t
\t                console.log(' *** ** ** ** wayPointArray ** ** ** ***');
\t                console.log(wayPointArray);
\t                console.log('directionsDisplay');
\t                directionsDisplay = new google.maps.DirectionsRenderer();
\t
\t                console.log(directionsDisplay);
\t
\t                directionsDisplay.setMap(map);
\t
\t                console.log('directionsDisplay Map');
\t                //           function calcRoute() {
\t
\t                console.log('calcRoute');
\t                current_pos = first;
\t                console.log(current_pos);
\t                end_pos = last;
\t                console.log(end_pos);
\t                var request = {
\t                    origin:current_pos,
\t                    destination:end_pos,
\t                    waypoints: wayPointArray,
\t                    optimizeWaypoints: true,
\t                    travelMode: google.maps.TravelMode.DRIVING,
\t                    avoidHighways: true
\t                };
\t                var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
\t
\t                console.log('avant directionsService');
\t                directionsService.route(request, function(result, status) {
\t
\t                    console.log('dans directionsService');
\t                    if (status == google.maps.DirectionsStatus.OK) {
\t                        console.log('dans if directionsService');
\t                        directionsDisplay.setDirections(result);
\t                        directionsDisplay.setMap(map);
\t                        directionsDisplay.setOptions( { suppressMarkers: true } );
\t                    }
\t                });
\t\t\t        
                }
            })
        };

    </script>


{% endblock %}
{% block form %}
{{ parent() }}

    <h1>Map</h1>

    <div id=\"gmap\" style=\"width:100%; height:450px\"></div>
{% endblock %}", "BackOfficeBundle::mapedit.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/mapedit.html.twig");
    }
}
