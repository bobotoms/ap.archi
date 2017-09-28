<?php

/* BackOfficeBundle::divingcenterlist.html.twig */
class __TwigTemplate_32f8747353df82443bc45c9c8d8acd4e0105441bb7ad97ab14c89eb1e93acab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "BackOfficeBundle::divingcenterlist.html.twig", 1);
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
        $__internal_d2ba34bd2fdd281095e6c17cfecbe9288ccd47bc24131c12f47cb32a94c8a327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ba34bd2fdd281095e6c17cfecbe9288ccd47bc24131c12f47cb32a94c8a327->enter($__internal_d2ba34bd2fdd281095e6c17cfecbe9288ccd47bc24131c12f47cb32a94c8a327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::divingcenterlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2ba34bd2fdd281095e6c17cfecbe9288ccd47bc24131c12f47cb32a94c8a327->leave($__internal_d2ba34bd2fdd281095e6c17cfecbe9288ccd47bc24131c12f47cb32a94c8a327_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a4dff737947ef0c0e25098ee6485438fd385c4755af18eb66e0265e9ce1ef6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4dff737947ef0c0e25098ee6485438fd385c4755af18eb66e0265e9ce1ef6b->enter($__internal_1a4dff737947ef0c0e25098ee6485438fd385c4755af18eb66e0265e9ce1ef6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<br/>
<t1>Liste des centres de plongées</t1>

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
\t<table id=\"divingcenterlist\" class=\"display\">
        <thead>
        <tr>
            <th>Id Surfprice</th>
            <th>Nom</th>
            <th>Info</th>
            <th>Prestations</th>
            <th>Option</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["divingcenters"]) ? $context["divingcenters"] : $this->getContext($context, "divingcenters")));
        foreach ($context['_seq'] as $context["_key"] => $context["divingcenter"]) {
            // line 31
            echo "            <tr>
                <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["divingcenter"], "surfpriceId", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["divingcenter"], "name", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 34
            if ($this->getAttribute($context["divingcenter"], "info", array(), "any", true, true)) {
            }
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["divingcenter"], "providers", array(), "any", true, true)) {
                // line 36
                echo "                    \t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["divingcenter"], "providers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                    // line 37
                    echo "                    \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "name", array()), "html", null, true);
                    echo "<br/>
                    \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t</td>
\t\t\t\t<td>";
            // line 41
            if ($this->getAttribute($context["divingcenter"], "divingCenterOption", array(), "any", true, true)) {
                // line 42
                echo "                    \t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["divingcenter"], "divingCenterOption", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 43
                    echo "                    \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                    echo "<br/>
                    \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['divingcenter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#divingcenterlist').DataTable({
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
        
        $__internal_1a4dff737947ef0c0e25098ee6485438fd385c4755af18eb66e0265e9ce1ef6b->leave($__internal_1a4dff737947ef0c0e25098ee6485438fd385c4755af18eb66e0265e9ce1ef6b_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::divingcenterlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 49,  140 => 46,  137 => 45,  128 => 43,  123 => 42,  121 => 41,  118 => 40,  115 => 39,  106 => 37,  101 => 36,  99 => 35,  94 => 34,  90 => 33,  86 => 32,  83 => 31,  79 => 30,  61 => 15,  56 => 13,  51 => 11,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
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
<t1>Liste des centres de plongées</t1>

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
\t<table id=\"divingcenterlist\" class=\"display\">
        <thead>
        <tr>
            <th>Id Surfprice</th>
            <th>Nom</th>
            <th>Info</th>
            <th>Prestations</th>
            <th>Option</th>
        </tr>
        </thead>
        <tbody>
        {% for divingcenter in divingcenters %}
            <tr>
                <td> {{ divingcenter.surfpriceId }}</td>
                <td> {{ divingcenter.name }}</td>
                <td> {% if divingcenter.info is defined %}{# divingcenter.info.description #}{% endif %}</td>
                <td>{% if divingcenter.providers is defined %}
                    \t\t{% for provider in divingcenter.providers %}
                    \t\t{{ provider.name }}<br/>
                    \t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t\t<td>{% if divingcenter.divingCenterOption is defined %}
                    \t\t{% for option in divingcenter.divingCenterOption %}
                    \t\t{{ option.name }}<br/>
                    \t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#divingcenterlist').DataTable({
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

    
  



", "BackOfficeBundle::divingcenterlist.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/divingcenterlist.html.twig");
    }
}
