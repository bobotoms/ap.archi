<?php

/* @BackOffice/accommodationdetail.html.twig */
class __TwigTemplate_b6a290b8f479e50251b1b29d47a94cf7bb5f80073c9c428b054d19c090dcc998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "@BackOffice/accommodationdetail.html.twig", 1);
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
        $__internal_c8b33bd69be9e86929d7a351b3daf8d4d3c086dc29ed5089287927cc0682419b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b33bd69be9e86929d7a351b3daf8d4d3c086dc29ed5089287927cc0682419b->enter($__internal_c8b33bd69be9e86929d7a351b3daf8d4d3c086dc29ed5089287927cc0682419b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/accommodationdetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8b33bd69be9e86929d7a351b3daf8d4d3c086dc29ed5089287927cc0682419b->leave($__internal_c8b33bd69be9e86929d7a351b3daf8d4d3c086dc29ed5089287927cc0682419b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_356ed4f40204467d3a81253eb294696ee86b7d8d2167839114be7850dc4b4a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356ed4f40204467d3a81253eb294696ee86b7d8d2167839114be7850dc4b4a14->enter($__internal_356ed4f40204467d3a81253eb294696ee86b7d8d2167839114be7850dc4b4a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<table id=\"accommodationdetail\" class=\"display\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom marketing</th>
\t\t\t\t<th>Id Surfprice</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>options</th>
\t\t\t</tr>
        </thead>
        <tbody>
\t\t\t";
        // line 28
        if (array_key_exists("accommodation", $context)) {
            // line 29
            echo "\t        \t<tr>
\t        \t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accommodation"]) ? $context["accommodation"] : $this->getContext($context, "accommodation")), "name", array()), "html", null, true);
            echo "</td>
\t        \t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accommodation"]) ? $context["accommodation"] : $this->getContext($context, "accommodation")), "surfpriceId", array()), "html", null, true);
            echo "</td>
\t        \t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accommodation"]) ? $context["accommodation"] : $this->getContext($context, "accommodation")), "description", array()), "html", null, true);
            echo "</td>
\t        \t\t<td>";
            // line 33
            if ($this->getAttribute((isset($context["accommodation"]) ? $context["accommodation"] : null), "options", array(), "any", true, true)) {
                // line 34
                echo "\t                    \t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["accommodation"]) ? $context["accommodation"] : $this->getContext($context, "accommodation")), "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 35
                    echo "\t                    \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                    echo "<br/>
\t                    \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t</td>
\t        \t</tr>      \t
\t\t\t";
        } else {
            // line 41
            echo "\t\t\t<tr>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 51
        echo " \t\t</tbody>
    </table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#accommodationdetail').DataTable({
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
        
        $__internal_356ed4f40204467d3a81253eb294696ee86b7d8d2167839114be7850dc4b4a14->leave($__internal_356ed4f40204467d3a81253eb294696ee86b7d8d2167839114be7850dc4b4a14_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/accommodationdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 51,  118 => 41,  113 => 38,  110 => 37,  101 => 35,  96 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  79 => 29,  77 => 28,  61 => 15,  56 => 13,  51 => 11,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
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
\t<table id=\"accommodationdetail\" class=\"display\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom marketing</th>
\t\t\t\t<th>Id Surfprice</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>options</th>
\t\t\t</tr>
        </thead>
        <tbody>
\t\t\t{% if accommodation is defined %}
\t        \t<tr>
\t        \t\t<td>{{ accommodation.name }}</td>
\t        \t\t<td>{{ accommodation.surfpriceId }}</td>
\t        \t\t<td>{{ accommodation.description }}</td>
\t        \t\t<td>{% if accommodation.options is defined %}
\t                    \t\t{% for option in accommodation.options %}
\t                    \t\t{{ option.name }}<br/>
\t                    \t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t        \t</tr>      \t
\t\t\t{% else %}
\t\t\t<tr>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t<td>Aucune donnée</td>
\t\t\t</tr>
\t\t\t{% endif %}
 \t\t</tbody>
    </table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#accommodationdetail').DataTable({
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
{% endblock %}
", "@BackOffice/accommodationdetail.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\accommodationdetail.html.twig");
    }
}
