<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_2bcae324c89ab92fb991b77b7682e264921f1d995e1079dedd2323c30b10d207 extends Twig_Template
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
        $__internal_17f54d4005597a3ff0cb52f197c80e532e6f94b300bb9acb1c4f327fe4e797bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f54d4005597a3ff0cb52f197c80e532e6f94b300bb9acb1c4f327fe4e797bc->enter($__internal_17f54d4005597a3ff0cb52f197c80e532e6f94b300bb9acb1c4f327fe4e797bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_17f54d4005597a3ff0cb52f197c80e532e6f94b300bb9acb1c4f327fe4e797bc->leave($__internal_17f54d4005597a3ff0cb52f197c80e532e6f94b300bb9acb1c4f327fe4e797bc_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a38dafd0cd50ba8e0cdab025d844748cf4a06e56b345d6772d25fd10759b13dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38dafd0cd50ba8e0cdab025d844748cf4a06e56b345d6772d25fd10759b13dc->enter($__internal_a38dafd0cd50ba8e0cdab025d844748cf4a06e56b345d6772d25fd10759b13dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a38dafd0cd50ba8e0cdab025d844748cf4a06e56b345d6772d25fd10759b13dc->leave($__internal_a38dafd0cd50ba8e0cdab025d844748cf4a06e56b345d6772d25fd10759b13dc_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f06c4e43882a310a04fa901f5022f1de400500494dfd26c89cbe678f76eb82c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06c4e43882a310a04fa901f5022f1de400500494dfd26c89cbe678f76eb82c3->enter($__internal_f06c4e43882a310a04fa901f5022f1de400500494dfd26c89cbe678f76eb82c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f06c4e43882a310a04fa901f5022f1de400500494dfd26c89cbe678f76eb82c3->leave($__internal_f06c4e43882a310a04fa901f5022f1de400500494dfd26c89cbe678f76eb82c3_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7dbcec88196bb996e1bea4fb67a6858a5c680be6a1f4898b07dc4b104931b82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbcec88196bb996e1bea4fb67a6858a5c680be6a1f4898b07dc4b104931b82a->enter($__internal_7dbcec88196bb996e1bea4fb67a6858a5c680be6a1f4898b07dc4b104931b82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7dbcec88196bb996e1bea4fb67a6858a5c680be6a1f4898b07dc4b104931b82a->leave($__internal_7dbcec88196bb996e1bea4fb67a6858a5c680be6a1f4898b07dc4b104931b82a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
