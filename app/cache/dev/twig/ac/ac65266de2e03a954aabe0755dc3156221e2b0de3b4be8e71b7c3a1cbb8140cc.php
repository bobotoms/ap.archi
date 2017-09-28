<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_ae7bdcb153ce365c580f7e32377ee1f75099fab9e67c8501ffb33fbdfb48dc1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_793e375baad7a1b13ca7903ff9f6cc882295427e4e8fd9ee674b51206416ec9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793e375baad7a1b13ca7903ff9f6cc882295427e4e8fd9ee674b51206416ec9e->enter($__internal_793e375baad7a1b13ca7903ff9f6cc882295427e4e8fd9ee674b51206416ec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_793e375baad7a1b13ca7903ff9f6cc882295427e4e8fd9ee674b51206416ec9e->leave($__internal_793e375baad7a1b13ca7903ff9f6cc882295427e4e8fd9ee674b51206416ec9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2821dc7cad3032dccfa06d422bc104cec7aeb010ea8126d1fdf09534399a988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2821dc7cad3032dccfa06d422bc104cec7aeb010ea8126d1fdf09534399a988->enter($__internal_b2821dc7cad3032dccfa06d422bc104cec7aeb010ea8126d1fdf09534399a988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b2821dc7cad3032dccfa06d422bc104cec7aeb010ea8126d1fdf09534399a988->leave($__internal_b2821dc7cad3032dccfa06d422bc104cec7aeb010ea8126d1fdf09534399a988_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
