<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ac30fc1b00183a0a097c4672cb952408df550259ee49de294c97aaf8be4d58be extends Twig_Template
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
        $__internal_350022968eea01d587b93568e30ba97ec6065307e315c2b3d8aa4519b03fe422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350022968eea01d587b93568e30ba97ec6065307e315c2b3d8aa4519b03fe422->enter($__internal_350022968eea01d587b93568e30ba97ec6065307e315c2b3d8aa4519b03fe422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_350022968eea01d587b93568e30ba97ec6065307e315c2b3d8aa4519b03fe422->leave($__internal_350022968eea01d587b93568e30ba97ec6065307e315c2b3d8aa4519b03fe422_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1f59e9e990825d9eb710a47b7859602483bec6fff8176198c80be9c3c29553e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f59e9e990825d9eb710a47b7859602483bec6fff8176198c80be9c3c29553e4->enter($__internal_1f59e9e990825d9eb710a47b7859602483bec6fff8176198c80be9c3c29553e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1f59e9e990825d9eb710a47b7859602483bec6fff8176198c80be9c3c29553e4->leave($__internal_1f59e9e990825d9eb710a47b7859602483bec6fff8176198c80be9c3c29553e4_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e0572e8479b6e3e9308916f5b898b3c361dad1c74f7364f4fddeb120f10ed96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0572e8479b6e3e9308916f5b898b3c361dad1c74f7364f4fddeb120f10ed96->enter($__internal_7e0572e8479b6e3e9308916f5b898b3c361dad1c74f7364f4fddeb120f10ed96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7e0572e8479b6e3e9308916f5b898b3c361dad1c74f7364f4fddeb120f10ed96->leave($__internal_7e0572e8479b6e3e9308916f5b898b3c361dad1c74f7364f4fddeb120f10ed96_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7a1aa388b3c0530cb620354992d661cc6ae245259d2d71313d14dea40c2e4a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1aa388b3c0530cb620354992d661cc6ae245259d2d71313d14dea40c2e4a44->enter($__internal_7a1aa388b3c0530cb620354992d661cc6ae245259d2d71313d14dea40c2e4a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7a1aa388b3c0530cb620354992d661cc6ae245259d2d71313d14dea40c2e4a44->leave($__internal_7a1aa388b3c0530cb620354992d661cc6ae245259d2d71313d14dea40c2e4a44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
