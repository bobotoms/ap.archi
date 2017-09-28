<?php

/* @BackOffice/product.html.twig */
class __TwigTemplate_099012e322e13e2f69b0942a17d27caff7ab30d204aa33a35b301c23de45f2a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "@BackOffice/product.html.twig", 1);
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
        $__internal_3c208970ea72414048af810509b860c7f25a7563807bf09fe05c017d6756012d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c208970ea72414048af810509b860c7f25a7563807bf09fe05c017d6756012d->enter($__internal_3c208970ea72414048af810509b860c7f25a7563807bf09fe05c017d6756012d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/product.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c208970ea72414048af810509b860c7f25a7563807bf09fe05c017d6756012d->leave($__internal_3c208970ea72414048af810509b860c7f25a7563807bf09fe05c017d6756012d_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91b6d5a5caa5ca6873691b559e3d6ae1a94ed0a295b56652c813af2cfe9a1803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b6d5a5caa5ca6873691b559e3d6ae1a94ed0a295b56652c813af2cfe9a1803->enter($__internal_91b6d5a5caa5ca6873691b559e3d6ae1a94ed0a295b56652c813af2cfe9a1803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_91b6d5a5caa5ca6873691b559e3d6ae1a94ed0a295b56652c813af2cfe9a1803->leave($__internal_91b6d5a5caa5ca6873691b559e3d6ae1a94ed0a295b56652c813af2cfe9a1803_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/product.html.twig";
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
  



", "@BackOffice/product.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\product.html.twig");
    }
}
