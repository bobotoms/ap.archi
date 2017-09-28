<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5101222e8d1be9aba5a14426a0f3d7e90408f60109af9973c368d124b77e8e45 extends Twig_Template
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
        $__internal_e6969501afbae5e940303d301ccb564f176216ae6df8fbc19f17758c31d3916f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6969501afbae5e940303d301ccb564f176216ae6df8fbc19f17758c31d3916f->enter($__internal_e6969501afbae5e940303d301ccb564f176216ae6df8fbc19f17758c31d3916f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e6969501afbae5e940303d301ccb564f176216ae6df8fbc19f17758c31d3916f->leave($__internal_e6969501afbae5e940303d301ccb564f176216ae6df8fbc19f17758c31d3916f_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d4ce2afecd9228acd64aaf80d0f18da7507176658f22b699c5f1933d1ade43dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ce2afecd9228acd64aaf80d0f18da7507176658f22b699c5f1933d1ade43dc->enter($__internal_d4ce2afecd9228acd64aaf80d0f18da7507176658f22b699c5f1933d1ade43dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d4ce2afecd9228acd64aaf80d0f18da7507176658f22b699c5f1933d1ade43dc->leave($__internal_d4ce2afecd9228acd64aaf80d0f18da7507176658f22b699c5f1933d1ade43dc_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_01864ec38919472203b262d80de49cb9b59ce8d8315196269bad73f809904275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01864ec38919472203b262d80de49cb9b59ce8d8315196269bad73f809904275->enter($__internal_01864ec38919472203b262d80de49cb9b59ce8d8315196269bad73f809904275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_01864ec38919472203b262d80de49cb9b59ce8d8315196269bad73f809904275->leave($__internal_01864ec38919472203b262d80de49cb9b59ce8d8315196269bad73f809904275_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6dd8be263a3754d4069b8344d5a1b5d990a228cd0826c828ee47bcc8595a559c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd8be263a3754d4069b8344d5a1b5d990a228cd0826c828ee47bcc8595a559c->enter($__internal_6dd8be263a3754d4069b8344d5a1b5d990a228cd0826c828ee47bcc8595a559c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6dd8be263a3754d4069b8344d5a1b5d990a228cd0826c828ee47bcc8595a559c->leave($__internal_6dd8be263a3754d4069b8344d5a1b5d990a228cd0826c828ee47bcc8595a559c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
