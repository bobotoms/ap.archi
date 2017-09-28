<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_4439dc0cc123597d5689378a93ad867d82308ec1c928df2969a44e18ddc947af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_8a18da50dc138527f77c56e40c086cb366714056c3731601e83db8f1362409d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a18da50dc138527f77c56e40c086cb366714056c3731601e83db8f1362409d5->enter($__internal_8a18da50dc138527f77c56e40c086cb366714056c3731601e83db8f1362409d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a18da50dc138527f77c56e40c086cb366714056c3731601e83db8f1362409d5->leave($__internal_8a18da50dc138527f77c56e40c086cb366714056c3731601e83db8f1362409d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ab5208127b1a8e7d82c2a5dee044498014bfa93453c8344a4085e15e5949460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab5208127b1a8e7d82c2a5dee044498014bfa93453c8344a4085e15e5949460->enter($__internal_8ab5208127b1a8e7d82c2a5dee044498014bfa93453c8344a4085e15e5949460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_8ab5208127b1a8e7d82c2a5dee044498014bfa93453c8344a4085e15e5949460->leave($__internal_8ab5208127b1a8e7d82c2a5dee044498014bfa93453c8344a4085e15e5949460_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
