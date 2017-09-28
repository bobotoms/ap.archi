<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_7803c2d7f13a7c4d3f85326023a77f32726d736f34bbe24411c4900cf22bfbef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_a8c732c770ba482527156c43f8b4763761b255bb887e623ed78e3221bacebbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c732c770ba482527156c43f8b4763761b255bb887e623ed78e3221bacebbc0->enter($__internal_a8c732c770ba482527156c43f8b4763761b255bb887e623ed78e3221bacebbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c732c770ba482527156c43f8b4763761b255bb887e623ed78e3221bacebbc0->leave($__internal_a8c732c770ba482527156c43f8b4763761b255bb887e623ed78e3221bacebbc0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0ea10329d7e57fa81596c8151f9a10fc8e79fc700990fe349c1b69c983a95e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ea10329d7e57fa81596c8151f9a10fc8e79fc700990fe349c1b69c983a95e8->enter($__internal_c0ea10329d7e57fa81596c8151f9a10fc8e79fc700990fe349c1b69c983a95e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c0ea10329d7e57fa81596c8151f9a10fc8e79fc700990fe349c1b69c983a95e8->leave($__internal_c0ea10329d7e57fa81596c8151f9a10fc8e79fc700990fe349c1b69c983a95e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
