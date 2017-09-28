<?php

/* @BackOffice/packageprice.html.twig */
class __TwigTemplate_6453871b349e7063af80d8a1db9f6429abdf832873db66321ee8208318e9e5e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "@BackOffice/packageprice.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92e86b3d2a5a21981330f65a1e26f5b25558f49bde02893d599cbf641dac6e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e86b3d2a5a21981330f65a1e26f5b25558f49bde02893d599cbf641dac6e81->enter($__internal_92e86b3d2a5a21981330f65a1e26f5b25558f49bde02893d599cbf641dac6e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/packageprice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92e86b3d2a5a21981330f65a1e26f5b25558f49bde02893d599cbf641dac6e81->leave($__internal_92e86b3d2a5a21981330f65a1e26f5b25558f49bde02893d599cbf641dac6e81_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5dc87b8cd9430541d6312497adea5cc9c2ef1cd57fe1a63716c120ca68a7d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5dc87b8cd9430541d6312497adea5cc9c2ef1cd57fe1a63716c120ca68a7d24->enter($__internal_c5dc87b8cd9430541d6312497adea5cc9c2ef1cd57fe1a63716c120ca68a7d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<br/>


    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("package_list");
        echo "\" >Packages</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accommodation_list");
        echo "\" >Hebergements</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("diving_center_list");
        echo "\" >Centres de plongées</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boat_list");
        echo "\" >Bateaux</a></p>
\t
<div class=\"container\">
\t<table id=\"packageprice\" class=\"display\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Prix</th>
\t\t\t</tr>
\t\t</thead>
\t\t\ttest
\t\t        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prices"]) ? $context["prices"] : $this->getContext($context, "prices")));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 27
            echo "\t\t        \t<tr>
\t\t        \t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["price"], "date", array())), "html", null, true);
            echo "</td>
\t\t        \t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["price"], "pricePerPax", array()), "html", null, true);
            echo "</td>
\t\t        \t</tr>
\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " 
\t\t</tbody>
    </table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#packageprice').DataTable({
\t    \"language\": {
\t    \"sProcessing\":     \"Traitement en cours...\",
\t    \"sSearch\":         \"Rechercher&nbsp;:\",
\t    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
\t    \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
\t    \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
\t    \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
\t    \"sInfoPostFix\":    \"\",
\t    \"sLoadingRecords\": \"Chargement en cours...\",
\t    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
\t    \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
\t    \"oPaginate\": {
\t        \"sFirst\":      \"Premier\",
\t        \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
\t        \"sNext\":       \"Suivant\",
\t        \"sLast\":       \"Dernier\"
\t    },
\t    \"oAria\": {
\t        \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
\t        \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
\t    }
\t    }
\t    }); 
\t} );
</script> 
";
        
        $__internal_c5dc87b8cd9430541d6312497adea5cc9c2ef1cd57fe1a63716c120ca68a7d24->leave($__internal_c5dc87b8cd9430541d6312497adea5cc9c2ef1cd57fe1a63716c120ca68a7d24_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/packageprice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  86 => 29,  82 => 28,  79 => 27,  75 => 26,  61 => 15,  56 => 13,  51 => 11,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BackOfficeBundle::layout.html.twig\" %}


{% block body %}

<br/>


    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('package_list') }}\" >Packages</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('accommodation_list') }}\" >Hebergements</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('diving_center_list') }}\" >Centres de plongées</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('boat_list') }}\" >Bateaux</a></p>
\t
<div class=\"container\">
\t<table id=\"packageprice\" class=\"display\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Prix</th>
\t\t\t</tr>
\t\t</thead>
\t\t\ttest
\t\t        {% for price in prices %}
\t\t        \t<tr>
\t\t        \t\t<td>{{ price.date|date }}</td>
\t\t        \t\t<td>{{ price.pricePerPax }}</td>
\t\t        \t</tr>
\t\t    \t{% endfor %} 
\t\t</tbody>
    </table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#packageprice').DataTable({
\t    \"language\": {
\t    \"sProcessing\":     \"Traitement en cours...\",
\t    \"sSearch\":         \"Rechercher&nbsp;:\",
\t    \"sLengthMenu\":     \"Afficher _MENU_ &eacute;l&eacute;ments\",
\t    \"sInfo\":           \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
\t    \"sInfoEmpty\":      \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
\t    \"sInfoFiltered\":   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
\t    \"sInfoPostFix\":    \"\",
\t    \"sLoadingRecords\": \"Chargement en cours...\",
\t    \"sZeroRecords\":    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
\t    \"sEmptyTable\":     \"Aucune donn&eacute;e disponible dans le tableau\",
\t    \"oPaginate\": {
\t        \"sFirst\":      \"Premier\",
\t        \"sPrevious\":   \"Pr&eacute;c&eacute;dent\",
\t        \"sNext\":       \"Suivant\",
\t        \"sLast\":       \"Dernier\"
\t    },
\t    \"oAria\": {
\t        \"sSortAscending\":  \": activer pour trier la colonne par ordre croissant\",
\t        \"sSortDescending\": \": activer pour trier la colonne par ordre d&eacute;croissant\"
\t    }
\t    }
\t    }); 
\t} );
</script> 
{% endblock %}", "@BackOffice/packageprice.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\packageprice.html.twig");
    }
}
