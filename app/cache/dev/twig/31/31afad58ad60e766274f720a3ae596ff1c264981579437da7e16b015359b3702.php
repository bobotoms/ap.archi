<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5100c3e59fef48312bbf452bbde1f64e3939589080597095bf8003d0523349c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_eeddff4855ac120cf29409d703c1b156953c2a147dfc5ca4e25781fd85b54685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeddff4855ac120cf29409d703c1b156953c2a147dfc5ca4e25781fd85b54685->enter($__internal_eeddff4855ac120cf29409d703c1b156953c2a147dfc5ca4e25781fd85b54685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeddff4855ac120cf29409d703c1b156953c2a147dfc5ca4e25781fd85b54685->leave($__internal_eeddff4855ac120cf29409d703c1b156953c2a147dfc5ca4e25781fd85b54685_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2350b2406ca490d4f679fd53d78d07f9ed40bc5c676432d89e823128d4520624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2350b2406ca490d4f679fd53d78d07f9ed40bc5c676432d89e823128d4520624->enter($__internal_2350b2406ca490d4f679fd53d78d07f9ed40bc5c676432d89e823128d4520624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2350b2406ca490d4f679fd53d78d07f9ed40bc5c676432d89e823128d4520624->leave($__internal_2350b2406ca490d4f679fd53d78d07f9ed40bc5c676432d89e823128d4520624_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
