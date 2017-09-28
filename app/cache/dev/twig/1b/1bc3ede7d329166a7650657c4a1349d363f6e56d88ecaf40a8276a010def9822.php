<?php

/* ::base.html.twig */
class __TwigTemplate_c65856f9761686e1977f1e874dae8656345595c4750d28197d7a0719ff865f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8f39b5c685f05612189192f14485416108d415a9b50b466e426f1bfcd795fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f39b5c685f05612189192f14485416108d415a9b50b466e426f1bfcd795fdf->enter($__internal_d8f39b5c685f05612189192f14485416108d415a9b50b466e426f1bfcd795fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d8f39b5c685f05612189192f14485416108d415a9b50b466e426f1bfcd795fdf->leave($__internal_d8f39b5c685f05612189192f14485416108d415a9b50b466e426f1bfcd795fdf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff3334b29d69f955cbd526754e7ca2b3493202e2dd6faac3692ab530bd1c7f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3334b29d69f955cbd526754e7ca2b3493202e2dd6faac3692ab530bd1c7f22->enter($__internal_ff3334b29d69f955cbd526754e7ca2b3493202e2dd6faac3692ab530bd1c7f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ff3334b29d69f955cbd526754e7ca2b3493202e2dd6faac3692ab530bd1c7f22->leave($__internal_ff3334b29d69f955cbd526754e7ca2b3493202e2dd6faac3692ab530bd1c7f22_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_484bbacc8db9f1ae82ef1b0fad44af660d5fe378b13278a59757b800a741196c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484bbacc8db9f1ae82ef1b0fad44af660d5fe378b13278a59757b800a741196c->enter($__internal_484bbacc8db9f1ae82ef1b0fad44af660d5fe378b13278a59757b800a741196c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_484bbacc8db9f1ae82ef1b0fad44af660d5fe378b13278a59757b800a741196c->leave($__internal_484bbacc8db9f1ae82ef1b0fad44af660d5fe378b13278a59757b800a741196c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_54251190d8345c6d0edc52e1f1c71fd488dc718f563c1727f5d14b271aaf8bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54251190d8345c6d0edc52e1f1c71fd488dc718f563c1727f5d14b271aaf8bb1->enter($__internal_54251190d8345c6d0edc52e1f1c71fd488dc718f563c1727f5d14b271aaf8bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_54251190d8345c6d0edc52e1f1c71fd488dc718f563c1727f5d14b271aaf8bb1->leave($__internal_54251190d8345c6d0edc52e1f1c71fd488dc718f563c1727f5d14b271aaf8bb1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe15eabbdf3bcd255bec2f87659544b3ac0247dd42e5fc109b305454ef7c0f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe15eabbdf3bcd255bec2f87659544b3ac0247dd42e5fc109b305454ef7c0f4b->enter($__internal_fe15eabbdf3bcd255bec2f87659544b3ac0247dd42e5fc109b305454ef7c0f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fe15eabbdf3bcd255bec2f87659544b3ac0247dd42e5fc109b305454ef7c0f4b->leave($__internal_fe15eabbdf3bcd255bec2f87659544b3ac0247dd42e5fc109b305454ef7c0f4b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\Aparchi\\app/Resources\\views/base.html.twig");
    }
}
