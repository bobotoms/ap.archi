<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_3629d95f82cc84891a1c18ebcae783a31014774ebca003813c593c47972e1c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_6a2012a5f44b44634c83f1340588c39d09ea82f288f8ab43a29f1579b59197ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2012a5f44b44634c83f1340588c39d09ea82f288f8ab43a29f1579b59197ac->enter($__internal_6a2012a5f44b44634c83f1340588c39d09ea82f288f8ab43a29f1579b59197ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a2012a5f44b44634c83f1340588c39d09ea82f288f8ab43a29f1579b59197ac->leave($__internal_6a2012a5f44b44634c83f1340588c39d09ea82f288f8ab43a29f1579b59197ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fde021a42562d5e24874b00ae73d45e628d7535ccef1e2ffd6ec345d52d00972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde021a42562d5e24874b00ae73d45e628d7535ccef1e2ffd6ec345d52d00972->enter($__internal_fde021a42562d5e24874b00ae73d45e628d7535ccef1e2ffd6ec345d52d00972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_fde021a42562d5e24874b00ae73d45e628d7535ccef1e2ffd6ec345d52d00972->leave($__internal_fde021a42562d5e24874b00ae73d45e628d7535ccef1e2ffd6ec345d52d00972_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
