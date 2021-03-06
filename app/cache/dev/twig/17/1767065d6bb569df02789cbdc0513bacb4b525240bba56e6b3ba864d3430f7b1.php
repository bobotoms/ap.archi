<?php

/* BackOfficeBundle::accommodationlist.html.twig */
class __TwigTemplate_4ef02a031426710972c7220a1f0a3a40f71ba85a1e36719af08924a3b8408c46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "BackOfficeBundle::accommodationlist.html.twig", 1);
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
        $__internal_df33885c3b4e4972fdae338c0b78c8496a47c4a959b50283baadbadc17a5b6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df33885c3b4e4972fdae338c0b78c8496a47c4a959b50283baadbadc17a5b6a4->enter($__internal_df33885c3b4e4972fdae338c0b78c8496a47c4a959b50283baadbadc17a5b6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::accommodationlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df33885c3b4e4972fdae338c0b78c8496a47c4a959b50283baadbadc17a5b6a4->leave($__internal_df33885c3b4e4972fdae338c0b78c8496a47c4a959b50283baadbadc17a5b6a4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_22c526fd22578a551eb65911d2877e052dad3b36fbef0b80a0dec7276f5a459e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c526fd22578a551eb65911d2877e052dad3b36fbef0b80a0dec7276f5a459e->enter($__internal_22c526fd22578a551eb65911d2877e052dad3b36fbef0b80a0dec7276f5a459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<br/>
<t1>Liste des hebergements</t1>
    

    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("package_list");
        echo "\" >Packages</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("diving_center_list");
        echo "\" >Centres de plongées</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("boat_list");
        echo "\" >Bateaux</a></p>
    \t
    \t</br>
<div class=\"container\">
\t<table id=\"accommodationlist\" class=\"display\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Etoiles</th>
            <th>Prestations</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accommodations"]) ? $context["accommodations"] : $this->getContext($context, "accommodations")));
        foreach ($context['_seq'] as $context["_key"] => $context["accommodation"]) {
            // line 29
            echo "            <tr>
                <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["accommodation"], "surfpriceId", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["accommodation"], "name", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["accommodation"], "star", array()), "html", null, true);
            echo "</td>
                <td> <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accommodation_detail", array("id" => $this->getAttribute($context["accommodation"], "surfpriceId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["accommodation"], "providerName", array()), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accommodation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
   </table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#accommodationlist').DataTable({
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
        
        $__internal_22c526fd22578a551eb65911d2877e052dad3b36fbef0b80a0dec7276f5a459e->leave($__internal_22c526fd22578a551eb65911d2877e052dad3b36fbef0b80a0dec7276f5a459e_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::accommodationlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  78 => 29,  74 => 28,  57 => 14,  52 => 12,  47 => 10,  40 => 5,  34 => 4,  11 => 1,);
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
<t1>Liste des hebergements</t1>
    

    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('package_list') }}\" >Packages</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('diving_center_list') }}\" >Centres de plongées</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('boat_list') }}\" >Bateaux</a></p>
    \t
    \t</br>
<div class=\"container\">
\t<table id=\"accommodationlist\" class=\"display\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Etoiles</th>
            <th>Prestations</th>
        </tr>
        </thead>
        <tbody>
        {% for accommodation in accommodations %}
            <tr>
                <td> {{ accommodation.surfpriceId }}</td>
                <td> {{ accommodation.name }}</td>
                <td> {{ accommodation.star }}</td>
                <td> <a href=\"{{ path('accommodation_detail', { 'id': accommodation.surfpriceId }) }}\">{{ accommodation.providerName }}</a></td>
            </tr>
        {% endfor %}
        </tbody>
   </table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#accommodationlist').DataTable({
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

    
  



", "BackOfficeBundle::accommodationlist.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/accommodationlist.html.twig");
    }
}
