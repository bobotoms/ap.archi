<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_33e06211eb4fc900bbf84d49f1384b2570f6cf4ee0177a98ba7561f1cbe5facb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_138adfb0f5b3bff946f4270ff30db003d525675bd6e3a77eda8c47f5490bdc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138adfb0f5b3bff946f4270ff30db003d525675bd6e3a77eda8c47f5490bdc00->enter($__internal_138adfb0f5b3bff946f4270ff30db003d525675bd6e3a77eda8c47f5490bdc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_138adfb0f5b3bff946f4270ff30db003d525675bd6e3a77eda8c47f5490bdc00->leave($__internal_138adfb0f5b3bff946f4270ff30db003d525675bd6e3a77eda8c47f5490bdc00_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a4109ee49d015984de35fd19b74d00964736c12fc9a3c20d681a665a299a39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4109ee49d015984de35fd19b74d00964736c12fc9a3c20d681a665a299a39e->enter($__internal_1a4109ee49d015984de35fd19b74d00964736c12fc9a3c20d681a665a299a39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_1a4109ee49d015984de35fd19b74d00964736c12fc9a3c20d681a665a299a39e->leave($__internal_1a4109ee49d015984de35fd19b74d00964736c12fc9a3c20d681a665a299a39e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
