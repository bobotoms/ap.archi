<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_052a1d5093b2619ea36ac10177b0b16098aa20f1ba2fcaa93173d47f291d07d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_5ddd14c123b639c953adb1832a20791e88600cb9b2ff958a17f0791a67d3b467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddd14c123b639c953adb1832a20791e88600cb9b2ff958a17f0791a67d3b467->enter($__internal_5ddd14c123b639c953adb1832a20791e88600cb9b2ff958a17f0791a67d3b467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ddd14c123b639c953adb1832a20791e88600cb9b2ff958a17f0791a67d3b467->leave($__internal_5ddd14c123b639c953adb1832a20791e88600cb9b2ff958a17f0791a67d3b467_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed34833f15e58c8c4c62904c9b587cbb673fcacce19f409824622a9b4ddc95cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed34833f15e58c8c4c62904c9b587cbb673fcacce19f409824622a9b4ddc95cf->enter($__internal_ed34833f15e58c8c4c62904c9b587cbb673fcacce19f409824622a9b4ddc95cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_ed34833f15e58c8c4c62904c9b587cbb673fcacce19f409824622a9b4ddc95cf->leave($__internal_ed34833f15e58c8c4c62904c9b587cbb673fcacce19f409824622a9b4ddc95cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
