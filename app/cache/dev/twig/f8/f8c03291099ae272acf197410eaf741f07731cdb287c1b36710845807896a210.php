<?php

/* @BackOffice/boatlist.html.twig */
class __TwigTemplate_365d80c37533334f5b756343d00185d3ce9f7d4ec9c04ca2fc375f2cf9ceb843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "@BackOffice/boatlist.html.twig", 1);
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
        $__internal_80775ac336865479f436b8d645366e39b8f9146d6f043a7d717c99547a331a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80775ac336865479f436b8d645366e39b8f9146d6f043a7d717c99547a331a3b->enter($__internal_80775ac336865479f436b8d645366e39b8f9146d6f043a7d717c99547a331a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/boatlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80775ac336865479f436b8d645366e39b8f9146d6f043a7d717c99547a331a3b->leave($__internal_80775ac336865479f436b8d645366e39b8f9146d6f043a7d717c99547a331a3b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fb57a01f87c58e67987fbe93289026d772eceed84c394926c182121a1ce1407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb57a01f87c58e67987fbe93289026d772eceed84c394926c182121a1ce1407->enter($__internal_7fb57a01f87c58e67987fbe93289026d772eceed84c394926c182121a1ce1407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<br/>
<t1>Liste des bateaux</t1>

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
    \t</br>
<div class=\"container\">
\t<table id=\"boatlist\" class=\"display\">
        <thead>
        <tr>
            <th>Id Surfprice</th>
            <th>Nom</th>
            <th>Info</th>
            <th>Prestations</th>
            <th>Option</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boats"]) ? $context["boats"] : $this->getContext($context, "boats")));
        foreach ($context['_seq'] as $context["_key"] => $context["boat"]) {
            // line 32
            echo "            <tr>
                <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["boat"], "surfpriceId", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["boat"], "name", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 35
            if ($this->getAttribute($context["boat"], "info", array(), "any", true, true)) {
            }
            echo "</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["boat"], "providers", array(), "any", true, true)) {
                // line 37
                echo "                    \t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["boat"], "providers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                    // line 38
                    echo "                    \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["boat"], "name", array()), "html", null, true);
                    echo "<br/>
                    \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t</td>
\t\t\t\t<td>";
            // line 42
            if ($this->getAttribute($context["boat"], "boatOption", array(), "any", true, true)) {
                // line 43
                echo "                    \t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["boat"], "boatOption", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 44
                    echo "                    \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                    echo "<br/>
                    \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t</td>
\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["boat"], "description", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#boatlist').DataTable({
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
        
        $__internal_7fb57a01f87c58e67987fbe93289026d772eceed84c394926c182121a1ce1407->leave($__internal_7fb57a01f87c58e67987fbe93289026d772eceed84c394926c182121a1ce1407_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/boatlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 51,  144 => 48,  141 => 47,  138 => 46,  129 => 44,  124 => 43,  122 => 42,  119 => 41,  116 => 40,  107 => 38,  102 => 37,  100 => 36,  95 => 35,  91 => 34,  87 => 33,  84 => 32,  80 => 31,  61 => 15,  56 => 13,  51 => 11,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
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
<t1>Liste des bateaux</t1>

    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('package_list') }}\" >Packages</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('accommodation_list') }}\" >Hebergements</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('diving_center_list') }}\" >Centres de plongées</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"{{  path('boat_list') }}\" >Bateaux</a></p>
    \t
    \t</br>
<div class=\"container\">
\t<table id=\"boatlist\" class=\"display\">
        <thead>
        <tr>
            <th>Id Surfprice</th>
            <th>Nom</th>
            <th>Info</th>
            <th>Prestations</th>
            <th>Option</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        {% for boat in boats %}
            <tr>
                <td> {{ boat.surfpriceId }}</td>
                <td> {{ boat.name }}</td>
                <td> {% if boat.info is defined %}{# boat.info.description #}{% endif %}</td>
                <td>{% if boat.providers is defined %}
                    \t\t{% for provider in boat.providers %}
                    \t\t{{ boat.name }}<br/>
                    \t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t\t<td>{% if boat.boatOption is defined %}
                    \t\t{% for option in boat.boatOption %}
                    \t\t{{ option.name }}<br/>
                    \t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t\t<td>{{ boat.description }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#boatlist').DataTable({
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

    
  



", "@BackOffice/boatlist.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\boatlist.html.twig");
    }
}
