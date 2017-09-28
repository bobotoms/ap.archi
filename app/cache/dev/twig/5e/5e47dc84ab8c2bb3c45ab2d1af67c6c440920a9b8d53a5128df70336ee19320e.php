<?php

/* @BackOffice/packageedit.html.twig */
class __TwigTemplate_7d6e52f3bd1762fe7588e3f4c25447ed256d4d3e8b6b456547b0da5bb92681a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "@BackOffice/packageedit.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb697f076e5457b7dd5843ac782c6bede05500c29a941d6aea4aa0150f47ee16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb697f076e5457b7dd5843ac782c6bede05500c29a941d6aea4aa0150f47ee16->enter($__internal_cb697f076e5457b7dd5843ac782c6bede05500c29a941d6aea4aa0150f47ee16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/packageedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb697f076e5457b7dd5843ac782c6bede05500c29a941d6aea4aa0150f47ee16->leave($__internal_cb697f076e5457b7dd5843ac782c6bede05500c29a941d6aea4aa0150f47ee16_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01706de6c3343d943cf29eec2872445511aa3b36b1ecdb4a6cca08c2ea9180b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01706de6c3343d943cf29eec2872445511aa3b36b1ecdb4a6cca08c2ea9180b6->enter($__internal_01706de6c3343d943cf29eec2872445511aa3b36b1ecdb4a6cca08c2ea9180b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "
";
        // line 4
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

   
    <script type=\"text/javascript\">
\t\t\$(document).ready(function(e) {
\t\t
\t\t\tvar production = \$('.production').val();
\t\t\tswitch (production) {
                case 'dunesafari':
                case 'dunetravel':
                case 'suboceatravel':
                case 'suboceasafari':
\t\t        \t\$(\".boat\").parent().parent().hide();
                    break;
                case 'dunecruise':
                case 'suboceacruise':
\t\t        \t\$(\".accommodation\").parent().parent().hide();
                    break;
            };
\t\t
\t\t
\t\t\tconsole.log(' **** ready ****');
\t\t\tvar optionsLength = \$('.option-list li').length;
\t\t\tconsole.log(' **** optionsLength ****');
\t\t\tconsole.log(optionsLength-2);
\t\t\tvar eachOption = optionsLength-2;
\t\t\t
\t\t\tvar values = '';
 
\t\t\t\$('.option-list li').each(function() { values += \$(this).text()+';'; });
\t\t\tvalues = values.replace(/ /g,\"\");
\t\t\tvar tableauValues=values.split(';')
\t\t\tconsole.log(' **** values ****');
\t\t\tconsole.log(tableauValues);
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\tvar url = '";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("option_search", array("optionNb" => "optionNb", "optionVal" => "optionVal")), "html", null, true);
        echo "';
            url = url.replace('optionNb', eachOption).replace('optionVal', tableauValues);
            console.log('url');
            console.log(url);
            \$.ajax({
                url: url,
                success: function(response){
                    response=response.replace(/\\[/g,'');
                    response=response.replace(/\\]/g,'');
                    response=response.replace(/\\\"/g,'');
\t\t\t\t\tvar tabOptions=response.split(';');
                    \$('.option-list li').remove();
\t\t\t\t\tfor (var i=0; i<eachOption; i++) {
\t\t\t\t\t    var option = tabOptions[i].split('#');
\t\t\t\t\t    var idOption = option[0].replace(/\\,/g,'');
\t\t\t\t\t    
\t\t\t\t\t    if (option[2] == 1)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar check = 'checked=\"checked\"';
\t\t\t\t\t\t}
\t\t\t\t\t\telse
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar check = '';
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t                \t\$(\".option-list\").children(\".select2-choices\").prepend('<li class=\"select2-search-choice '+idOption+'\">'+option[1]+'&nbsp;&nbsp;<input onClick=\"checkOption('+idOption+')\" type=\"checkbox\" '+check+' id=\"'+idOption+'\" value=\"'+idOption+'\"></li>');
\t\t\t\t\t    
\t\t\t\t\t}
                }
            })
\t\t});
\t\t
\t\tfunction checkOption(idOption) {
\t\t
\t\t\tconsole.log(' idOption nameOption idOption nameOption ');
\t\t\tconsole.log(idOption);
\t\t\tvar url = '";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("option_check", array("idOption" => "idOption"));
        echo "';
            url = url.replace('idOption', idOption);
            console.log('url');
            console.log(url);
            \$.ajax({
                url: url,
                success: function(response){
                    response=response.replace(/\\[/g,'');
                    response=response.replace(/\\]/g,'');
                    response=response.replace(/\\\"/g,'');
\t\t\t\t\tvar tab=response.split(';');
                    console.log(response);
\t\t\t\t\tconsole.log(idOption);
                    \tif (tab[1] == 1)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar check = 'checked=\"checked\"';
\t\t\t\t\t\t}
\t\t\t\t\t\telse
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar check = '';
\t\t\t\t\t\t}
\t\t\t\t\t\tvar elem = document.getElementById(idOption);
\t\t\t\t\t\telem.parentNode.remove(elem);
\t\t\t\t\t\t
                    \t\$(\".option-list\").children(\".select2-choices\").append('<li class=\"select2-search-choice '+idOption+'\">'+tab[0]+' &nbsp;&nbsp;<input onClick=\"checkOption('+idOption+')\" type=\"checkbox\" '+check+' id=\"'+idOption+'\" value=\"'+idOption+'\"></li>');
                }
            })
\t\t
\t\t}
\t\t
\t\t
\t</script>
";
        
        $__internal_01706de6c3343d943cf29eec2872445511aa3b36b1ecdb4a6cca08c2ea9180b6->leave($__internal_01706de6c3343d943cf29eec2872445511aa3b36b1ecdb4a6cca08c2ea9180b6_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/packageedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 79,  85 => 43,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
\t\t\$(document).ready(function(e) {
\t\t
\t\t\tvar production = \$('.production').val();
\t\t\tswitch (production) {
                case 'dunesafari':
                case 'dunetravel':
                case 'suboceatravel':
                case 'suboceasafari':
\t\t        \t\$(\".boat\").parent().parent().hide();
                    break;
                case 'dunecruise':
                case 'suboceacruise':
\t\t        \t\$(\".accommodation\").parent().parent().hide();
                    break;
            };
\t\t
\t\t
\t\t\tconsole.log(' **** ready ****');
\t\t\tvar optionsLength = \$('.option-list li').length;
\t\t\tconsole.log(' **** optionsLength ****');
\t\t\tconsole.log(optionsLength-2);
\t\t\tvar eachOption = optionsLength-2;
\t\t\t
\t\t\tvar values = '';
 
\t\t\t\$('.option-list li').each(function() { values += \$(this).text()+';'; });
\t\t\tvalues = values.replace(/ /g,\"\");
\t\t\tvar tableauValues=values.split(';')
\t\t\tconsole.log(' **** values ****');
\t\t\tconsole.log(tableauValues);
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\tvar url = '{{ url(\"option_search\", {'optionNb':'optionNb', 'optionVal':'optionVal'}) }}';
            url = url.replace('optionNb', eachOption).replace('optionVal', tableauValues);
            console.log('url');
            console.log(url);
            \$.ajax({
                url: url,
                success: function(response){
                    response=response.replace(/\\[/g,'');
                    response=response.replace(/\\]/g,'');
                    response=response.replace(/\\\"/g,'');
\t\t\t\t\tvar tabOptions=response.split(';');
                    \$('.option-list li').remove();
\t\t\t\t\tfor (var i=0; i<eachOption; i++) {
\t\t\t\t\t    var option = tabOptions[i].split('#');
\t\t\t\t\t    var idOption = option[0].replace(/\\,/g,'');
\t\t\t\t\t    
\t\t\t\t\t    if (option[2] == 1)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar check = 'checked=\"checked\"';
\t\t\t\t\t\t}
\t\t\t\t\t\telse
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar check = '';
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t                \t\$(\".option-list\").children(\".select2-choices\").prepend('<li class=\"select2-search-choice '+idOption+'\">'+option[1]+'&nbsp;&nbsp;<input onClick=\"checkOption('+idOption+')\" type=\"checkbox\" '+check+' id=\"'+idOption+'\" value=\"'+idOption+'\"></li>');
\t\t\t\t\t    
\t\t\t\t\t}
                }
            })
\t\t});
\t\t
\t\tfunction checkOption(idOption) {
\t\t
\t\t\tconsole.log(' idOption nameOption idOption nameOption ');
\t\t\tconsole.log(idOption);
\t\t\tvar url = '{{ url(\"option_check\", {'idOption':'idOption'}) }}';
            url = url.replace('idOption', idOption);
            console.log('url');
            console.log(url);
            \$.ajax({
                url: url,
                success: function(response){
                    response=response.replace(/\\[/g,'');
                    response=response.replace(/\\]/g,'');
                    response=response.replace(/\\\"/g,'');
\t\t\t\t\tvar tab=response.split(';');
                    console.log(response);
\t\t\t\t\tconsole.log(idOption);
                    \tif (tab[1] == 1)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar check = 'checked=\"checked\"';
\t\t\t\t\t\t}
\t\t\t\t\t\telse
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar check = '';
\t\t\t\t\t\t}
\t\t\t\t\t\tvar elem = document.getElementById(idOption);
\t\t\t\t\t\telem.parentNode.remove(elem);
\t\t\t\t\t\t
                    \t\$(\".option-list\").children(\".select2-choices\").append('<li class=\"select2-search-choice '+idOption+'\">'+tab[0]+' &nbsp;&nbsp;<input onClick=\"checkOption('+idOption+')\" type=\"checkbox\" '+check+' id=\"'+idOption+'\" value=\"'+idOption+'\"></li>');
                }
            })
\t\t
\t\t}
\t\t
\t\t
\t</script>
{% endblock %}
    
  



", "@BackOffice/packageedit.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\packageedit.html.twig");
    }
}
