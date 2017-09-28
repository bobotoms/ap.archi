<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_865ca5f9429ae00cc6be3f6e817795a1ccd4fed6aab88313716fd36fe7b79951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7828c5a9a6a56d361ee48b2908ff8e6d8dbd3236a4b98f919e7ce6d3f83859b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7828c5a9a6a56d361ee48b2908ff8e6d8dbd3236a4b98f919e7ce6d3f83859b->enter($__internal_c7828c5a9a6a56d361ee48b2908ff8e6d8dbd3236a4b98f919e7ce6d3f83859b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c7828c5a9a6a56d361ee48b2908ff8e6d8dbd3236a4b98f919e7ce6d3f83859b->leave($__internal_c7828c5a9a6a56d361ee48b2908ff8e6d8dbd3236a4b98f919e7ce6d3f83859b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b233ce3f96c4cce1609c43e42a8757efaeb16855104d658e828434432509b5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b233ce3f96c4cce1609c43e42a8757efaeb16855104d658e828434432509b5c2->enter($__internal_b233ce3f96c4cce1609c43e42a8757efaeb16855104d658e828434432509b5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b233ce3f96c4cce1609c43e42a8757efaeb16855104d658e828434432509b5c2->leave($__internal_b233ce3f96c4cce1609c43e42a8757efaeb16855104d658e828434432509b5c2_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2a8500acf17ef81fae70d7658b48110234846e56961868d7b996a00c6f1d6108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8500acf17ef81fae70d7658b48110234846e56961868d7b996a00c6f1d6108->enter($__internal_2a8500acf17ef81fae70d7658b48110234846e56961868d7b996a00c6f1d6108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2a8500acf17ef81fae70d7658b48110234846e56961868d7b996a00c6f1d6108->leave($__internal_2a8500acf17ef81fae70d7658b48110234846e56961868d7b996a00c6f1d6108_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_90b929a0788f894d8f56a33a0703a9a60327fb0543b66038f0d66c861a32abd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b929a0788f894d8f56a33a0703a9a60327fb0543b66038f0d66c861a32abd5->enter($__internal_90b929a0788f894d8f56a33a0703a9a60327fb0543b66038f0d66c861a32abd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_90b929a0788f894d8f56a33a0703a9a60327fb0543b66038f0d66c861a32abd5->leave($__internal_90b929a0788f894d8f56a33a0703a9a60327fb0543b66038f0d66c861a32abd5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
