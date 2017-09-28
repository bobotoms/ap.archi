<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_25e78ce134ec27c008a9ee19bcb7dfc70e85b69b7540027a91ced3bd517c13ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5a7d12af284d118091e0aab57532cbc381bfffdd56b7ce245298ac0aecd9457f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7d12af284d118091e0aab57532cbc381bfffdd56b7ce245298ac0aecd9457f->enter($__internal_5a7d12af284d118091e0aab57532cbc381bfffdd56b7ce245298ac0aecd9457f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a7d12af284d118091e0aab57532cbc381bfffdd56b7ce245298ac0aecd9457f->leave($__internal_5a7d12af284d118091e0aab57532cbc381bfffdd56b7ce245298ac0aecd9457f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4192eb7bf358c2c42192b14d14ab950d31be7b4a596efb3187dfd8a55dd1d446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4192eb7bf358c2c42192b14d14ab950d31be7b4a596efb3187dfd8a55dd1d446->enter($__internal_4192eb7bf358c2c42192b14d14ab950d31be7b4a596efb3187dfd8a55dd1d446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4192eb7bf358c2c42192b14d14ab950d31be7b4a596efb3187dfd8a55dd1d446->leave($__internal_4192eb7bf358c2c42192b14d14ab950d31be7b4a596efb3187dfd8a55dd1d446_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
