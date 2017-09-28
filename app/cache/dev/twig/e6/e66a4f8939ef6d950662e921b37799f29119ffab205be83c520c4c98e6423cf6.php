<?php

/* @FrontOffice/index.html.twig */
class __TwigTemplate_a13d2829dacfacd53cc66b0a689c6afa1a4efdd81bf662e693b913161dafc202 extends Twig_Template
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
        $__internal_7f62898068bc7484256188d7cc6ca0428192501f759f762b8627ce3d7343eb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f62898068bc7484256188d7cc6ca0428192501f759f762b8627ce3d7343eb85->enter($__internal_7f62898068bc7484256188d7cc6ca0428192501f759f762b8627ce3d7343eb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FrontOffice/index.html.twig"));

        // line 1
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_7f62898068bc7484256188d7cc6ca0428192501f759f762b8627ce3d7343eb85->leave($__internal_7f62898068bc7484256188d7cc6ca0428192501f759f762b8627ce3d7343eb85_prof);

    }

    // line 1
    public function block_page_stylesheets($context, array $blocks = array())
    {
        $__internal_f8d01356ed20d84da5555c857a3f9cd556349dd5f55f4e673cb8f94814e10913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d01356ed20d84da5555c857a3f9cd556349dd5f55f4e673cb8f94814e10913->enter($__internal_f8d01356ed20d84da5555c857a3f9cd556349dd5f55f4e673cb8f94814e10913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_stylesheets"));

        // line 2
        echo "
\t<!-- Bootstrap Select CSS -->
    ";
        // line 5
        echo "
";
        
        $__internal_f8d01356ed20d84da5555c857a3f9cd556349dd5f55f4e673cb8f94814e10913->leave($__internal_f8d01356ed20d84da5555c857a3f9cd556349dd5f55f4e673cb8f94814e10913_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_93a519ccfbb6ceabf96bb3ecc4fdec684a117ef5ea1b3a54363b1b2f10da6f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a519ccfbb6ceabf96bb3ecc4fdec684a117ef5ea1b3a54363b1b2f10da6f41->enter($__internal_93a519ccfbb6ceabf96bb3ecc4fdec684a117ef5ea1b3a54363b1b2f10da6f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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

\t\t\t\t\t\t<img src=\"\">

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"pourquoi\" style=\"background-color:#f2f2f2; right: 0; left: 0\">

\t\t\t\t\t<h1><span style=\"color: #555555\">Pourquoi</span> un architecte ?</h1>

\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<p>";
        // line 52
        echo $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "intro", array());
        echo "</p>

\t\t\t\t\t</div>

\t\t\t\t\t<br/>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>";
        // line 59
        echo $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "firstText", array());
        echo "</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>";
        // line 63
        echo $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "secondText", array());
        echo "</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>";
        // line 67
        echo $this->getAttribute((isset($context["second"]) ? $context["second"] : $this->getContext($context, "second")), "thirdText", array());
        echo "</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"missions\">

\t\t\t\t\t<h1><span style=\"color: #555555\">Les</span> missions possible</h1>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<p>";
        // line 77
        echo $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "intro", array());
        echo "</p>
\t\t\t\t\t</div>

\t\t\t\t\t<br/>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>";
        // line 83
        echo $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "firstText", array());
        echo "</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>";
        // line 87
        echo $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "secondText", array());
        echo "</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>";
        // line 91
        echo $this->getAttribute((isset($context["third"]) ? $context["third"] : $this->getContext($context, "third")), "thirdText", array());
        echo "</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"realisations\" style=\"background-color:#f2f2f2; background-size: cover;\">

\t\t\t\t\t<h1><span style=\"color: #555555\">R</span>éalisations</h1>
\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<p>";
        // line 101
        echo $this->getAttribute((isset($context["fourth"]) ? $context["fourth"] : $this->getContext($context, "fourth")), "intro", array());
        echo "</p>

\t\t\t\t\t</div>
                    ";
        // line 104
        $this->loadTemplate("FrontOfficeBundle:Include:slider.html.twig", "@FrontOffice/index.html.twig", 104)->display($context);
        // line 105
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"contact\">

\t\t\t\t\t<h1><span style=\"color: #555555\">C</span>ontact</h1>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div id=\"wrap\">
\t\t\t\t\t\t\t<div id='form_wrap'>
                                ";
        // line 114
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t\t\t<p>Bonjour Aurèlie,</p>
\t\t\t\t\t\t\t\t<label for=\"email\">Votre Message : </label>
                                ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t<p>Cordialement,</p>
\t\t\t\t\t\t\t\t<label for=\"name\">Nom: </label>
                                ";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t<label for=\"email\">Email: </label>
                                ";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "

                                ";
        // line 124
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
        
        $__internal_93a519ccfbb6ceabf96bb3ecc4fdec684a117ef5ea1b3a54363b1b2f10da6f41->leave($__internal_93a519ccfbb6ceabf96bb3ecc4fdec684a117ef5ea1b3a54363b1b2f10da6f41_prof);

    }

    public function getTemplateName()
    {
        return "@FrontOffice/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  230 => 124,  225 => 122,  220 => 120,  214 => 117,  208 => 114,  197 => 105,  195 => 104,  189 => 101,  176 => 91,  169 => 87,  162 => 83,  153 => 77,  140 => 67,  133 => 63,  126 => 59,  116 => 52,  95 => 34,  91 => 33,  82 => 27,  65 => 12,  63 => 11,  60 => 9,  54 => 8,  46 => 5,  42 => 2,  36 => 1,  29 => 8,  26 => 7,  24 => 1,);
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

\t\t\t\t\t\t<img src=\"\">

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"pourquoi\" style=\"background-color:#f2f2f2; right: 0; left: 0\">

\t\t\t\t\t<h1><span style=\"color: #555555\">Pourquoi</span> un architecte ?</h1>

\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<p>{{ second.intro|raw }}</p>

\t\t\t\t\t</div>

\t\t\t\t\t<br/>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>{{ second.firstText|raw }}</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>{{ second.secondText|raw }}</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>{{ second.thirdText|raw }}</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"row filters\" id=\"missions\">

\t\t\t\t\t<h1><span style=\"color: #555555\">Les</span> missions possible</h1>

\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<p>{{ third.intro|raw }}</p>
\t\t\t\t\t</div>

\t\t\t\t\t<br/>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>{{ third.firstText|raw }}</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>{{ third.secondText|raw }}</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>{{ third.thirdText|raw }}</p>
\t\t\t\t\t</div>

\t\t\t\t</div>

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


{% endblock %}", "@FrontOffice/index.html.twig", "C:\\wamp\\www\\Aparchi\\src\\FrontOfficeBundle\\Resources\\views\\index.html.twig");
    }
}
