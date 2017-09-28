<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5aaa53dcadb16c2129f60c73ae5bfa75bd5a069c92dd3fbafc21f465b3a522f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_ddd78e36c90da9b60196ddeff90bbedd963f9b70c34e42e3b4db2632ebb1ce8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd78e36c90da9b60196ddeff90bbedd963f9b70c34e42e3b4db2632ebb1ce8d->enter($__internal_ddd78e36c90da9b60196ddeff90bbedd963f9b70c34e42e3b4db2632ebb1ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddd78e36c90da9b60196ddeff90bbedd963f9b70c34e42e3b4db2632ebb1ce8d->leave($__internal_ddd78e36c90da9b60196ddeff90bbedd963f9b70c34e42e3b4db2632ebb1ce8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f84a4caf3f0363e2555fd86aaaaeede472ca1ec592027d3d71dd49b43ed9051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f84a4caf3f0363e2555fd86aaaaeede472ca1ec592027d3d71dd49b43ed9051->enter($__internal_2f84a4caf3f0363e2555fd86aaaaeede472ca1ec592027d3d71dd49b43ed9051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2f84a4caf3f0363e2555fd86aaaaeede472ca1ec592027d3d71dd49b43ed9051->leave($__internal_2f84a4caf3f0363e2555fd86aaaaeede472ca1ec592027d3d71dd49b43ed9051_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
