<?php

/* BackOfficeBundle::slideedit.html.twig */
class __TwigTemplate_96dde4d1f0f13618959b842beb86bd02d3d23dea5180b910bb5dd2c889880487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "BackOfficeBundle::slideedit.html.twig", 1);
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
        $__internal_e466aa6b3720d0c755a59f8ff08ff5e56c2817ff1f664bd1319b427f39865f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e466aa6b3720d0c755a59f8ff08ff5e56c2817ff1f664bd1319b427f39865f44->enter($__internal_e466aa6b3720d0c755a59f8ff08ff5e56c2817ff1f664bd1319b427f39865f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::slideedit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e466aa6b3720d0c755a59f8ff08ff5e56c2817ff1f664bd1319b427f39865f44->leave($__internal_e466aa6b3720d0c755a59f8ff08ff5e56c2817ff1f664bd1319b427f39865f44_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d60061895842bafdb5af2bfbb9f474aceb014c899bf49045cd7dde35ae1e10d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60061895842bafdb5af2bfbb9f474aceb014c899bf49045cd7dde35ae1e10d1->enter($__internal_d60061895842bafdb5af2bfbb9f474aceb014c899bf49045cd7dde35ae1e10d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "

    ";
        // line 5
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  
    <script type=\"text/javascript\">
        \$(document).ready( function () {
\t\t\ttype();
\t\t\t
\t\t\t\$(\".typeslide\").click(function() { 
\t\t\t    type();
\t\t    });
\t\t    
\t\t    \$(\".btn-success\").click(function() { 
\t            console.log(' erreur erreur erreur erreur erreur ');
\t\t\t    if(\$( \".typeslide\" ).find( \".select2-chosen\" ).text() == '')
\t            {
\t            console.log(' erreur2 erreur2 erreur2 erreur2 erreur2 ');
//\t\t\t\t\t\$(\".typeslide\").addClass('invalid');
//\t\t\t\t\t\$('.typeslide test').slideDown(300);
//\t\t\t\t\t\$(\".typeslide\").target(\"Entrez une adresse valide. Exemple : contact@nom.com\");
//\t\t\t\t\t\$(\".typeslide\").attr(\"placeholder\", \"New placeholder text\").val(\"\").focus().blur();
\t//\t\t\t\t\t\$( \".typeslide\" ).val('erreur erreur');
\t//\t\t\t\t\t\$( \".typeslide\" ).find( \".select2-focusser\" ).val('erreur erreur');
\t\t\t\t\t\t\$(\".typeslide\").find( \".select2-choice\" ).attr(\"placeholder\", \"New placeholder text\");
\t\t\t\t\t\t\$(\".typeslide\").attr(\"placeholder\", \"New placeholder text\");
\t\t\t\t\t\t\$(\".typeslide label\").val(\"New placeholder text\");
\t            console.log(' erreur3 erreur3 erreur3 erreur3 erreur3 ');
\t            
\t//\t\t\talert(\"Vous avez oublié de remplir un champ. Merci de recommencer\");
\t            console.log(' erreur4 erreur4 erreur4 erreur4 erreur4 ');
\t\t\t        
\t            }
\t            else if(\$( \".typeslide\" ).find( \".select2-chosen\" ).text() == 'Image')
\t            {
\t\t\t        \$(\".pictureSlide\").parent().parent().parent().parent().show();
\t\t\t        \$(\".webmSlide\").parent().parent().parent().parent().hide();
\t\t\t        \$(\".mpfourSlide\").parent().parent().parent().parent().hide();
\t\t\t\t\t\$(\".webmSlide\").prop('required',false);
\t\t\t\t\t\$(\".mpfourSlide\").prop('required',false);
\t\t\t\t\t\$(\".pictureSlide\").prop('required',true);
\t            }
\t            else
\t            {
\t\t\t        \$(\".pictureSlide\").parent().parent().parent().parent().hide();
\t\t\t        \$(\".webmSlide\").parent().parent().parent().parent().show();
\t\t\t        \$(\".mpfourSlide\").parent().parent().parent().parent().show();
\t\t\t\t\t\$(\".pictureSlide\").prop('required',false);
\t\t\t\t\t\$(\".webmSlide\").prop('required',true);
\t\t\t\t\t\$(\".mpfourSlide\").prop('required',true);
\t            }
\t\t    });
\t\t   
\t\t});
\t\t
\t\tfunction type()
\t\t{
            if(\$( \".typeslide\" ).find( \".select2-chosen\" ).text() == '')
            {
\t\t        \$(\".pictureSlide\").parent().parent().parent().parent().hide();
\t\t        \$(\".webmSlide\").parent().parent().parent().parent().hide();
\t\t        \$('.mpfourSlide').parent().parent().parent().parent().hide();
\t\t\t\t\$(\".pictureSlide\").prop('required',true);
\t\t\t\t\$(\".webmSlide\").prop('required',true);
\t\t\t\t\$(\".mpfourSlide\").prop('required',true);
            }
            else if(\$( \".typeslide\" ).find( \".select2-chosen\" ).text() == 'Image')
            {
\t\t        \$(\".pictureSlide\").parent().parent().parent().parent().show();
\t\t        \$(\".webmSlide\").parent().parent().parent().parent().hide();
\t\t        \$(\".mpfourSlide\").parent().parent().parent().parent().hide();
\t\t\t\t\$(\".webmSlide\").prop('required',false);
\t\t\t\t\$(\".mpfourSlide\").prop('required',false);
\t\t\t\t\$(\".pictureSlide\").prop('required',true);
            }
            else
            {
\t\t        \$(\".pictureSlide\").parent().parent().parent().parent().hide();
\t\t        \$(\".webmSlide\").parent().parent().parent().parent().show();
\t\t        \$(\".mpfourSlide\").parent().parent().parent().parent().show();
\t\t\t\t\$(\".pictureSlide\").prop('required',false);
\t\t\t\t\$(\".webmSlide\").prop('required',true);
\t\t\t\t\$(\".mpfourSlide\").prop('required',true);
            }
        }
    </script>


";
        
        $__internal_d60061895842bafdb5af2bfbb9f474aceb014c899bf49045cd7dde35ae1e10d1->leave($__internal_d60061895842bafdb5af2bfbb9f474aceb014c899bf49045cd7dde35ae1e10d1_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::slideedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
        \$(document).ready( function () {
\t\t\ttype();
\t\t\t
\t\t\t\$(\".typeslide\").click(function() { 
\t\t\t    type();
\t\t    });
\t\t    
\t\t    \$(\".btn-success\").click(function() { 
\t            console.log(' erreur erreur erreur erreur erreur ');
\t\t\t    if(\$( \".typeslide\" ).find( \".select2-chosen\" ).text() == '')
\t            {
\t            console.log(' erreur2 erreur2 erreur2 erreur2 erreur2 ');
//\t\t\t\t\t\$(\".typeslide\").addClass('invalid');
//\t\t\t\t\t\$('.typeslide test').slideDown(300);
//\t\t\t\t\t\$(\".typeslide\").target(\"Entrez une adresse valide. Exemple : contact@nom.com\");
//\t\t\t\t\t\$(\".typeslide\").attr(\"placeholder\", \"New placeholder text\").val(\"\").focus().blur();
\t//\t\t\t\t\t\$( \".typeslide\" ).val('erreur erreur');
\t//\t\t\t\t\t\$( \".typeslide\" ).find( \".select2-focusser\" ).val('erreur erreur');
\t\t\t\t\t\t\$(\".typeslide\").find( \".select2-choice\" ).attr(\"placeholder\", \"New placeholder text\");
\t\t\t\t\t\t\$(\".typeslide\").attr(\"placeholder\", \"New placeholder text\");
\t\t\t\t\t\t\$(\".typeslide label\").val(\"New placeholder text\");
\t            console.log(' erreur3 erreur3 erreur3 erreur3 erreur3 ');
\t            
\t//\t\t\talert(\"Vous avez oublié de remplir un champ. Merci de recommencer\");
\t            console.log(' erreur4 erreur4 erreur4 erreur4 erreur4 ');
\t\t\t        
\t            }
\t            else if(\$( \".typeslide\" ).find( \".select2-chosen\" ).text() == 'Image')
\t            {
\t\t\t        \$(\".pictureSlide\").parent().parent().parent().parent().show();
\t\t\t        \$(\".webmSlide\").parent().parent().parent().parent().hide();
\t\t\t        \$(\".mpfourSlide\").parent().parent().parent().parent().hide();
\t\t\t\t\t\$(\".webmSlide\").prop('required',false);
\t\t\t\t\t\$(\".mpfourSlide\").prop('required',false);
\t\t\t\t\t\$(\".pictureSlide\").prop('required',true);
\t            }
\t            else
\t            {
\t\t\t        \$(\".pictureSlide\").parent().parent().parent().parent().hide();
\t\t\t        \$(\".webmSlide\").parent().parent().parent().parent().show();
\t\t\t        \$(\".mpfourSlide\").parent().parent().parent().parent().show();
\t\t\t\t\t\$(\".pictureSlide\").prop('required',false);
\t\t\t\t\t\$(\".webmSlide\").prop('required',true);
\t\t\t\t\t\$(\".mpfourSlide\").prop('required',true);
\t            }
\t\t    });
\t\t   
\t\t});
\t\t
\t\tfunction type()
\t\t{
            if(\$( \".typeslide\" ).find( \".select2-chosen\" ).text() == '')
            {
\t\t        \$(\".pictureSlide\").parent().parent().parent().parent().hide();
\t\t        \$(\".webmSlide\").parent().parent().parent().parent().hide();
\t\t        \$('.mpfourSlide').parent().parent().parent().parent().hide();
\t\t\t\t\$(\".pictureSlide\").prop('required',true);
\t\t\t\t\$(\".webmSlide\").prop('required',true);
\t\t\t\t\$(\".mpfourSlide\").prop('required',true);
            }
            else if(\$( \".typeslide\" ).find( \".select2-chosen\" ).text() == 'Image')
            {
\t\t        \$(\".pictureSlide\").parent().parent().parent().parent().show();
\t\t        \$(\".webmSlide\").parent().parent().parent().parent().hide();
\t\t        \$(\".mpfourSlide\").parent().parent().parent().parent().hide();
\t\t\t\t\$(\".webmSlide\").prop('required',false);
\t\t\t\t\$(\".mpfourSlide\").prop('required',false);
\t\t\t\t\$(\".pictureSlide\").prop('required',true);
            }
            else
            {
\t\t        \$(\".pictureSlide\").parent().parent().parent().parent().hide();
\t\t        \$(\".webmSlide\").parent().parent().parent().parent().show();
\t\t        \$(\".mpfourSlide\").parent().parent().parent().parent().show();
\t\t\t\t\$(\".pictureSlide\").prop('required',false);
\t\t\t\t\$(\".webmSlide\").prop('required',true);
\t\t\t\t\$(\".mpfourSlide\").prop('required',true);
            }
        }
    </script>


{% endblock %}
", "BackOfficeBundle::slideedit.html.twig", "C:\\wamp\\www\\Aparchi\\src\\BackOfficeBundle/Resources/views/slideedit.html.twig");
    }
}
