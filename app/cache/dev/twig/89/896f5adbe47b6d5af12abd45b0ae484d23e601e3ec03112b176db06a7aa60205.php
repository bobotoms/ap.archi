<?php

/* BackOfficeBundle::product.html.twig */
class __TwigTemplate_6a999b96bba58ab2a73ba69fc1f8dbd0aaf3c85eeca9d5e36ba8e66356d207cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "BackOfficeBundle::product.html.twig", 1);
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
        $__internal_78fbe3fc1832b26a7bca4bff722639994f931f4f865b17db0c9cd99d975873a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78fbe3fc1832b26a7bca4bff722639994f931f4f865b17db0c9cd99d975873a9->enter($__internal_78fbe3fc1832b26a7bca4bff722639994f931f4f865b17db0c9cd99d975873a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78fbe3fc1832b26a7bca4bff722639994f931f4f865b17db0c9cd99d975873a9->leave($__internal_78fbe3fc1832b26a7bca4bff722639994f931f4f865b17db0c9cd99d975873a9_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0675dc1f8fa5e26c8b80033a7183d07bb5d2bf432c1d993d735037e50f40c396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0675dc1f8fa5e26c8b80033a7183d07bb5d2bf432c1d993d735037e50f40c396->enter($__internal_0675dc1f8fa5e26c8b80033a7183d07bb5d2bf432c1d993d735037e50f40c396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "
";
        // line 4
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script type=\"text/javascript\">
\$(document).ready(function(e) {

\t\$( \".dayafterday\").parent().prepend('<div style=\"font-size: small;\">Jour : <strong>[shortcode jour]</strong><span style=\"color: red;\">1</span><strong>[shortcode jour]</strong><br>Periode : <strong>[shortcode jour]</strong><span style=\"color: red;\">2</span><strong>[shortcode a]</strong><span style=\"color: red;\">6</span><strong>[shortcode jour]</strong></div>');
\t
\tvar packagesIds = \$.urlParam('packages_ids');
\tvar idArray = packagesIds.split(';');
\t
\tfor(var i=0;i<idArray.length-1;i++){
\t
\t\t\$('.package>option[value=\"'+idArray[i]+'\"]').attr('selected', true);
\t\tvar optval = \$('.package>option[value=\"'+idArray[i]+'\"]').text()
\t
\t\t\$(\".package\").children(\".select2-choices\").prepend('<li class=\"select2-search-choice\"><div>'+optval+'</div><a href=\"#\" class=\"select2-search-choice-close close-package\" id=\"'+idArray[i]+'\" tabindex=\"-1\"></a></li>');

    }
    \$( \".close-package\" ).click(function() {
        var idPackage = \$(this).attr('id');
\t\t\$('.package>option[value=\"'+idPackage+'\"]').attr('selected', false);
\t    \$(this).parent().remove();
\t});
\t
\tvar type = \$.urlParam('type');
\tswitch(type) {
\t    case 'safari':
\t\t\t\$('#select2-chosen-1').text(\"Safari\");
\t        break;
\t    case 'cruise':
\t\t\t\$('#select2-chosen-1').text(\"Croisière\");
\t        break;
\t    case 'travel':
\t\t\t\$('#select2-chosen-1').text(\"Séjour\");
\t        break;
\t    default:
\t        \$('#select2-chosen-1').text(\"Erreur Merci de modifer votre choix\");
\t}
\t\$('.typeproduct>option[value=\"'+type+'\"]').attr('selected', true);
     //   \$('#typeproduct').val(textbtn);
}); 
\$.urlParam = function(name){
\tvar results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
\treturn results[1] || 0;
}
</script>
";
        
        $__internal_0675dc1f8fa5e26c8b80033a7183d07bb5d2bf432c1d993d735037e50f40c396->leave($__internal_0675dc1f8fa5e26c8b80033a7183d07bb5d2bf432c1d993d735037e50f40c396_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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

\t\$( \".dayafterday\").parent().prepend('<div style=\"font-size: small;\">Jour : <strong>[shortcode jour]</strong><span style=\"color: red;\">1</span><strong>[shortcode jour]</strong><br>Periode : <strong>[shortcode jour]</strong><span style=\"color: red;\">2</span><strong>[shortcode a]</strong><span style=\"color: red;\">6</span><strong>[shortcode jour]</strong></div>');
\t
\tvar packagesIds = \$.urlParam('packages_ids');
\tvar idArray = packagesIds.split(';');
\t
\tfor(var i=0;i<idArray.length-1;i++){
\t
\t\t\$('.package>option[value=\"'+idArray[i]+'\"]').attr('selected', true);
\t\tvar optval = \$('.package>option[value=\"'+idArray[i]+'\"]').text()
\t
\t\t\$(\".package\").children(\".select2-choices\").prepend('<li class=\"select2-search-choice\"><div>'+optval+'</div><a href=\"#\" class=\"select2-search-choice-close close-package\" id=\"'+idArray[i]+'\" tabindex=\"-1\"></a></li>');

    }
    \$( \".close-package\" ).click(function() {
        var idPackage = \$(this).attr('id');
\t\t\$('.package>option[value=\"'+idPackage+'\"]').attr('selected', false);
\t    \$(this).parent().remove();
\t});
\t
\tvar type = \$.urlParam('type');
\tswitch(type) {
\t    case 'safari':
\t\t\t\$('#select2-chosen-1').text(\"Safari\");
\t        break;
\t    case 'cruise':
\t\t\t\$('#select2-chosen-1').text(\"Croisière\");
\t        break;
\t    case 'travel':
\t\t\t\$('#select2-chosen-1').text(\"Séjour\");
\t        break;
\t    default:
\t        \$('#select2-chosen-1').text(\"Erreur Merci de modifer votre choix\");
\t}
\t\$('.typeproduct>option[value=\"'+type+'\"]').attr('selected', true);
     //   \$('#typeproduct').val(textbtn);
}); 
\$.urlParam = function(name){
\tvar results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
\treturn results[1] || 0;
}
</script>
{% endblock %}
  



", "BackOfficeBundle::product.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/product.html.twig");
    }
}
