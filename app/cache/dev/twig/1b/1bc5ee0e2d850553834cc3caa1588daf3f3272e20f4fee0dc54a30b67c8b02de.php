<?php

/* @BackOffice/packagedetail.html.twig */
class __TwigTemplate_eac0d72ae128f34815eda236e17f1cec3bdacc1f19b25555a581eadff624c4af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "@BackOffice/packagedetail.html.twig", 1);
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
        $__internal_773a92a41f749acf461c76d13fc9fca267c68bd09f6fcca58113289e888859f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773a92a41f749acf461c76d13fc9fca267c68bd09f6fcca58113289e888859f9->enter($__internal_773a92a41f749acf461c76d13fc9fca267c68bd09f6fcca58113289e888859f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackOffice/packagedetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_773a92a41f749acf461c76d13fc9fca267c68bd09f6fcca58113289e888859f9->leave($__internal_773a92a41f749acf461c76d13fc9fca267c68bd09f6fcca58113289e888859f9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_90dcb8575a9fd81ef6165d627d971d5f7b39a90a1379f11c845ad44d8ab4d754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90dcb8575a9fd81ef6165d627d971d5f7b39a90a1379f11c845ad44d8ab4d754->enter($__internal_90dcb8575a9fd81ef6165d627d971d5f7b39a90a1379f11c845ad44d8ab4d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<br/>

    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("package_list");
        echo "\" >Packages</a></p>
    \t
    \t<p style=\"width:100%; text-align: center\"><a style=\"text-align:center\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accommodation_list");
        echo "\" >Hebergements</a></p>
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
  

<div class=\"container\">
\t<table id=\"packagedetail\" class=\"display\">
\t\t<thead>\t
\t\t\t<tr>
\t\t\t\t<th>Nom marketing</th>
\t\t\t\t<th>Id surfprice</th>
\t\t\t\t<th>hebergement</th>
\t\t\t\t<th>Pays</th>
\t\t\t\t<th>Options</th>
\t\t\t\t<th>Centres de plongées</th>
\t\t\t\t<th>Infos</th>
\t\t\t\t<th>Assurances</th>
\t\t\t\t<th>Prestation</th>
\t\t\t</tr>
\t\t</thead>
        <tbody>
\t\t\t";
        // line 33
        if (array_key_exists("package", $context)) {
            // line 34
            echo "\t\t        <tr>
            \t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "name", array()), "html", null, true);
            echo "</td>
            \t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "surfpriceId", array()), "html", null, true);
            echo "</td>
            \t\t<td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accommodation_detail", array("id" => $this->getAttribute($this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "accommodation", array()), "surfpriceId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "accommodation", array()), "name", array()), "html", null, true);
            echo "</a></td>
            \t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "country", array()), "name", array()), "html", null, true);
            echo "</td>
            \t\t<td>
            \t\t\t";
            // line 40
            if ($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "options", array(), "any", true, true)) {
                // line 41
                echo "                        \t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 42
                    echo "                        \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                    echo "<br/>
                        \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t\t\t\t\t\t";
            }
            // line 45
            echo "                    </td>
            \t\t<td>
            \t\t\t";
            // line 47
            if ($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "divingCenters", array(), "any", true, true)) {
                // line 48
                echo "                        \t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "divingCenters", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["divingCenter"]) {
                    // line 49
                    echo "                        \t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accommodation_detail", array("id" => $this->getAttribute($this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "accommodation", array()), "surfpriceId", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["divingCenter"], "name", array()), "html", null, true);
                    echo "</a><br/>
                        \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['divingCenter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t\t\t\t\t";
            }
            // line 52
            echo "                    </td>
            \t\t<td>
            \t\t\t";
            // line 54
            if ($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "infos", array(), "any", true, true)) {
                // line 55
                echo "                        \t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "infos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                    // line 56
                    echo "                        \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "description", array()), "html", null, true);
                    echo "<br/>
                        \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "\t\t\t\t\t\t";
            }
            // line 59
            echo "                    </td>
            \t\t<td>
            \t\t\t";
            // line 61
            if ($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "insurances", array(), "any", true, true)) {
                // line 62
                echo "                        \t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "insurances", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["insurance"]) {
                    // line 63
                    echo "                        \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["insurance"], "description", array()), "html", null, true);
                    echo "<br/>
                        \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insurance'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "\t\t\t\t\t\t";
            }
            // line 66
            echo "                    </td>
            \t\t<td>
            \t\t\t";
            // line 68
            if ($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "providers", array(), "any", true, true)) {
                // line 69
                echo "                        \t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["package"]) ? $context["package"] : $this->getContext($context, "package")), "providers", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                    // line 70
                    echo "                        \t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["provider"], "name", array()), "html", null, true);
                    echo "<br/>
                        \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "\t\t\t\t\t\t";
            }
            // line 73
            echo "                    </td>
            \t</tr>      \t
        \t
\t\t\t";
        } else {
            // line 77
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 87
        echo " \t\t</tbody>
\t</table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#packagedetail').DataTable({
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
        
        $__internal_90dcb8575a9fd81ef6165d627d971d5f7b39a90a1379f11c845ad44d8ab4d754->leave($__internal_90dcb8575a9fd81ef6165d627d971d5f7b39a90a1379f11c845ad44d8ab4d754_prof);

    }

    public function getTemplateName()
    {
        return "@BackOffice/packagedetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 87,  225 => 77,  219 => 73,  216 => 72,  207 => 70,  202 => 69,  200 => 68,  196 => 66,  193 => 65,  184 => 63,  179 => 62,  177 => 61,  173 => 59,  170 => 58,  161 => 56,  156 => 55,  154 => 54,  150 => 52,  147 => 51,  136 => 49,  131 => 48,  129 => 47,  125 => 45,  122 => 44,  113 => 42,  108 => 41,  106 => 40,  101 => 38,  95 => 37,  91 => 36,  87 => 35,  84 => 34,  82 => 33,  60 => 14,  55 => 12,  50 => 10,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
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
  

<div class=\"container\">
\t<table id=\"packagedetail\" class=\"display\">
\t\t<thead>\t
\t\t\t<tr>
\t\t\t\t<th>Nom marketing</th>
\t\t\t\t<th>Id surfprice</th>
\t\t\t\t<th>hebergement</th>
\t\t\t\t<th>Pays</th>
\t\t\t\t<th>Options</th>
\t\t\t\t<th>Centres de plongées</th>
\t\t\t\t<th>Infos</th>
\t\t\t\t<th>Assurances</th>
\t\t\t\t<th>Prestation</th>
\t\t\t</tr>
\t\t</thead>
        <tbody>
\t\t\t{% if package is defined %}
\t\t        <tr>
            \t\t<td>{{ package.name }}</td>
            \t\t<td>{{ package.surfpriceId }}</td>
            \t\t<td><a href=\"{{ path('accommodation_detail', { 'id': package.accommodation.surfpriceId }) }}\">{{ package.accommodation.name }}</a></td>
            \t\t<td>{{ package.country.name }}</td>
            \t\t<td>
            \t\t\t{% if package.options is defined %}
                        \t\t{% for option in package.options %}
                        \t\t{{ option.name }}<br/>
                        \t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
                    </td>
            \t\t<td>
            \t\t\t{% if package.divingCenters is defined %}
                        \t\t{% for divingCenter in package.divingCenters %}
                        \t\t<a href=\"{{ path('accommodation_detail', { 'id': package.accommodation.surfpriceId }) }}\">{{ divingCenter.name }}</a><br/>
                        \t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
                    </td>
            \t\t<td>
            \t\t\t{% if package.infos is defined %}
                        \t\t{% for info in package.infos %}
                        \t\t{{ info.description }}<br/>
                        \t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
                    </td>
            \t\t<td>
            \t\t\t{% if package.insurances is defined %}
                        \t\t{% for insurance in package.insurances %}
                        \t\t{{ insurance.description }}<br/>
                        \t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
                    </td>
            \t\t<td>
            \t\t\t{% if package.providers is defined %}
                        \t\t{% for provider in package.providers %}
                        \t\t{{ provider.name }}<br/>
                        \t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
                    </td>
            \t</tr>      \t
        \t
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t\t<td>Aucune donnée</td>
\t\t\t\t</tr>
\t\t\t{% endif %}
 \t\t</tbody>
\t</table>
</div>
   
<script type=\"text/javascript\">
\t\$(document).ready( function () {
\t    \$('#packagedetail').DataTable({
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
", "@BackOffice/packagedetail.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle\\Resources\\views\\packagedetail.html.twig");
    }
}
