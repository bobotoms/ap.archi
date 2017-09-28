<?php

/* FrontOfficeBundle::index.html.twig */
class __TwigTemplate_403f404629f36227cc72d2461e5114b249e231e61ce5e2c136059b2571e29dd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_stylesheets' => array($this, 'block_page_stylesheets'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d082d751de0a5c2c12d03e5e0f1f22d9dd8a359022459502fd293ad74d791830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d082d751de0a5c2c12d03e5e0f1f22d9dd8a359022459502fd293ad74d791830->enter($__internal_d082d751de0a5c2c12d03e5e0f1f22d9dd8a359022459502fd293ad74d791830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::index.html.twig"));

        // line 1
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_d082d751de0a5c2c12d03e5e0f1f22d9dd8a359022459502fd293ad74d791830->leave($__internal_d082d751de0a5c2c12d03e5e0f1f22d9dd8a359022459502fd293ad74d791830_prof);

    }

    // line 1
    public function block_page_stylesheets($context, array $blocks = array())
    {
        $__internal_d77ab3e65f7294ba5fee0f08d52c56e77ee737a9e7f5c32d5c7a0c46a32519f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77ab3e65f7294ba5fee0f08d52c56e77ee737a9e7f5c32d5c7a0c46a32519f7->enter($__internal_d77ab3e65f7294ba5fee0f08d52c56e77ee737a9e7f5c32d5c7a0c46a32519f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_stylesheets"));

        // line 2
        echo "
\t<!-- Bootstrap Select CSS -->
    ";
        // line 5
        echo "
";
        
        $__internal_d77ab3e65f7294ba5fee0f08d52c56e77ee737a9e7f5c32d5c7a0c46a32519f7->leave($__internal_d77ab3e65f7294ba5fee0f08d52c56e77ee737a9e7f5c32d5c7a0c46a32519f7_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8aa16f52f05482529b45fed5ea409d16d6434d85505589d99845125c2aa472b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa16f52f05482529b45fed5ea409d16d6434d85505589d99845125c2aa472b9->enter($__internal_8aa16f52f05482529b45fed5ea409d16d6434d85505589d99845125c2aa472b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "
    ";
        // line 11
        echo "    ";
        // line 12
        echo "

\t<!-- Site Content
        =============================================  -->
\t<section id=\"content\">

\t\t<div class=\"content-wrap\">
\t\t\t<div class=\"container clearfix\">

\t\t\t\t<div class=\"row filters\" id=\"agence\">

\t\t\t\t\t<h1><span style=\"color: #555555\">L'</span>agence</h1>

\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<p>";
        // line 27
        echo $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "intro", array());
        echo "</p>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6\">

\t\t\t\t\t\t<h3>";
        // line 33
        echo $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "subTitle", array());
        echo "</h3>
\t\t\t\t\t\t<p>";
        // line 34
        echo $this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "description", array());
        echo "</p>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6\">

                        ";
        // line 40
        if ($this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "picture", array())) {
            // line 41
            echo "\t\t\t\t\t\t\t<img src=\"/apArchi/web/";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($this->getAttribute((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), "picture", array()), "reference");
            echo "\">
                        ";
        }
        // line 43
        echo "
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"pourquoi\" style=\"background-color:#f2f2f2; right: 0; left: 0\">

\t\t\t\t\t<h1><span style=\"color: #555555\">Pourquoi</span> un architecte ?</h1>

\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<p>";
        // line 54
        echo $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "intro", array());
        echo "</p>

\t\t\t\t\t</div>

\t\t\t\t\t<br/>

\t\t\t\t\t<div class=\"col-md-4\">
                        ";
        // line 61
        if ($this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "pictureOne", array())) {
            // line 62
            echo "\t\t\t\t\t\t\t<img src=\"/apArchi/web/";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "pictureOne", array()), "reference");
            echo "\">
                        ";
        }
        // line 64
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
                        ";
        // line 67
        if ($this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "pictureTwo", array())) {
            // line 68
            echo "\t\t\t\t\t\t\t<img src=\"/apArchi/web/";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "pictureTwo", array()), "reference");
            echo "\">
                        ";
        }
        // line 70
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
                        ";
        // line 73
        if ($this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "pictureThree", array())) {
            // line 74
            echo "\t\t\t\t\t\t\t<img src=\"/apArchi/web/";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "pictureThree", array()), "reference");
            echo "\">
                        ";
        }
        // line 76
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"missions\">

\t\t\t\t\t<h1><span style=\"color: #555555\">Les</span> missions possible</h1>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<p>";
        // line 85
        echo $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "intro", array());
        echo "</p>
\t\t\t\t\t</div>

\t\t\t\t\t<br/>

\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 92
        if ($this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "picture", array())) {
            // line 93
            echo "\t\t\t\t\t\t<img src=\"/apArchi/web/";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "picture", array()), "reference");
            echo "\">
\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t</div>

\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"realisations\" style=\"background-color:#f2f2f2; background-size: cover;\">

\t\t\t\t\t<h1><span style=\"color: #555555\">R</span>éalisations</h1>
\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<p>";
        // line 104
        echo $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "intro", array());
        echo "</p>

\t\t\t\t\t</div>
                    ";
        // line 107
        $this->loadTemplate("FrontOfficeBundle:Include:slider.html.twig", "FrontOfficeBundle::index.html.twig", 107)->display($context);
        // line 108
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"contact\">

\t\t\t\t\t<h1><span style=\"color: #555555\">C</span>ontact</h1>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div id=\"wrap\">
\t\t\t\t\t\t\t<div id='form_wrap'>
                                ";
        // line 117
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t\t\t<p>Bonjour Aurèlie,</p>
\t\t\t\t\t\t\t\t<label for=\"email\">Votre Message : </label>
                                ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t<p>Cordialement,</p>
\t\t\t\t\t\t\t\t<label for=\"name\">Nom: </label>
                                ";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t<label for=\"email\">Email: </label>
                                ";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "

                                ";
        // line 127
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>



\t\t\t</div> <!-- end container -->
\t\t</div> <!-- end content-wrap -->

\t</section> <!-- end section content -->


";
        
        $__internal_8aa16f52f05482529b45fed5ea409d16d6434d85505589d99845125c2aa472b9->leave($__internal_8aa16f52f05482529b45fed5ea409d16d6434d85505589d99845125c2aa472b9_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle::index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  250 => 127,  245 => 125,  240 => 123,  234 => 120,  228 => 117,  217 => 108,  215 => 107,  209 => 104,  198 => 95,  192 => 93,  190 => 92,  180 => 85,  169 => 76,  163 => 74,  161 => 73,  156 => 70,  150 => 68,  148 => 67,  143 => 64,  137 => 62,  135 => 61,  125 => 54,  112 => 43,  106 => 41,  104 => 40,  95 => 34,  91 => 33,  82 => 27,  65 => 12,  63 => 11,  60 => 9,  54 => 8,  46 => 5,  42 => 2,  36 => 1,  29 => 8,  26 => 7,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block page_stylesheets %}

\t<!-- Bootstrap Select CSS -->
    {#     <link rel=\"stylesheet\" href=\"css/components/bs-select.css\" type=\"text/css\" />#}

{% endblock %}

{% block page_content %}

    {# include \"FrontOfficeBundle::layout.html.twig\" #}
    {# include \"FrontOfficeBundle:Include:slider.html.twig\" #}


\t<!-- Site Content
        =============================================  -->
\t<section id=\"content\">

\t\t<div class=\"content-wrap\">
\t\t\t<div class=\"container clearfix\">

\t\t\t\t<div class=\"row filters\" id=\"agence\">

\t\t\t\t\t<h1><span style=\"color: #555555\">L'</span>agence</h1>

\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<p>{{ first.intro|raw }}</p>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6\">

\t\t\t\t\t\t<h3>{{ first.subTitle|raw }}</h3>
\t\t\t\t\t\t<p>{{ first.description|raw }}</p>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6\">

                        {% if first.picture %}
\t\t\t\t\t\t\t<img src=\"/apArchi/web/{% path first.picture, 'reference'%}\">
                        {% endif %}

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"pourquoi\" style=\"background-color:#f2f2f2; right: 0; left: 0\">

\t\t\t\t\t<h1><span style=\"color: #555555\">Pourquoi</span> un architecte ?</h1>

\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<p>{{ second.intro|raw }}</p>

\t\t\t\t\t</div>

\t\t\t\t\t<br/>

\t\t\t\t\t<div class=\"col-md-4\">
                        {% if second.pictureOne %}
\t\t\t\t\t\t\t<img src=\"/apArchi/web/{% path second.pictureOne, 'reference'%}\">
                        {% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
                        {% if second.pictureTwo %}
\t\t\t\t\t\t\t<img src=\"/apArchi/web/{% path second.pictureTwo, 'reference'%}\">
                        {% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
                        {% if second.pictureThree %}
\t\t\t\t\t\t\t<img src=\"/apArchi/web/{% path second.pictureThree, 'reference'%}\">
                        {% endif %}
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"missions\">

\t\t\t\t\t<h1><span style=\"color: #555555\">Les</span> missions possible</h1>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<p>{{ third.intro|raw }}</p>
\t\t\t\t\t</div>

\t\t\t\t\t<br/>

\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t{% if third.picture %}
\t\t\t\t\t\t<img src=\"/apArchi/web/{% path third.picture, 'reference'%}\">
\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"realisations\" style=\"background-color:#f2f2f2; background-size: cover;\">

\t\t\t\t\t<h1><span style=\"color: #555555\">R</span>éalisations</h1>
\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<p>{{ fourth.intro|raw }}</p>

\t\t\t\t\t</div>
                    {%  include \"FrontOfficeBundle:Include:slider.html.twig\" %}
\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"contact\">

\t\t\t\t\t<h1><span style=\"color: #555555\">C</span>ontact</h1>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div id=\"wrap\">
\t\t\t\t\t\t\t<div id='form_wrap'>
                                {{ form_start(form) }}
\t\t\t\t\t\t\t\t<p>Bonjour Aurèlie,</p>
\t\t\t\t\t\t\t\t<label for=\"email\">Votre Message : </label>
                                {{ form_widget(form.message) }}
\t\t\t\t\t\t\t\t<p>Cordialement,</p>
\t\t\t\t\t\t\t\t<label for=\"name\">Nom: </label>
                                {{ form_widget(form.name) }}
\t\t\t\t\t\t\t\t<label for=\"email\">Email: </label>
                                {{ form_widget(form.email) }}

                                {{ form_end(form) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>



\t\t\t</div> <!-- end container -->
\t\t</div> <!-- end content-wrap -->

\t</section> <!-- end section content -->


{% endblock %}", "FrontOfficeBundle::index.html.twig", "C:\\wamp\\www\\Aparchi\\src\\FrontOfficeBundle\\Resources\\views\\index.html.twig");
    }
}
