<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_fb931a6813af9608c060bf1f089d090653d1f5d931fb9ec9d09f5836020023f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_a678b386eef5fee7fc5376600ce4acec3502e230b55d8487c96e2eb4bcb8fc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a678b386eef5fee7fc5376600ce4acec3502e230b55d8487c96e2eb4bcb8fc1d->enter($__internal_a678b386eef5fee7fc5376600ce4acec3502e230b55d8487c96e2eb4bcb8fc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a678b386eef5fee7fc5376600ce4acec3502e230b55d8487c96e2eb4bcb8fc1d->leave($__internal_a678b386eef5fee7fc5376600ce4acec3502e230b55d8487c96e2eb4bcb8fc1d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2df95caf9ba4fa8ccc12bbb3596e5cb636c6f6f1ae94b592156e06c1bcb0c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2df95caf9ba4fa8ccc12bbb3596e5cb636c6f6f1ae94b592156e06c1bcb0c14->enter($__internal_c2df95caf9ba4fa8ccc12bbb3596e5cb636c6f6f1ae94b592156e06c1bcb0c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_c2df95caf9ba4fa8ccc12bbb3596e5cb636c6f6f1ae94b592156e06c1bcb0c14->leave($__internal_c2df95caf9ba4fa8ccc12bbb3596e5cb636c6f6f1ae94b592156e06c1bcb0c14_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
