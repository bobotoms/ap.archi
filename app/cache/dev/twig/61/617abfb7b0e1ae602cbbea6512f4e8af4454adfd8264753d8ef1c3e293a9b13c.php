<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_d08bf2cc4e34924a807a38e3b995b4eb52433859c6f7c0d389bbf40ca35f5512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_304e8efa8d98df62fe6adcc8c0c9dd079a380ae8bf6f81d5a8ce0da346bf8abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304e8efa8d98df62fe6adcc8c0c9dd079a380ae8bf6f81d5a8ce0da346bf8abd->enter($__internal_304e8efa8d98df62fe6adcc8c0c9dd079a380ae8bf6f81d5a8ce0da346bf8abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_304e8efa8d98df62fe6adcc8c0c9dd079a380ae8bf6f81d5a8ce0da346bf8abd->leave($__internal_304e8efa8d98df62fe6adcc8c0c9dd079a380ae8bf6f81d5a8ce0da346bf8abd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e994665ac0ec356fc2845d076af66aac799b862a1995d0e6ad398795e6a7990f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e994665ac0ec356fc2845d076af66aac799b862a1995d0e6ad398795e6a7990f->enter($__internal_e994665ac0ec356fc2845d076af66aac799b862a1995d0e6ad398795e6a7990f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_e994665ac0ec356fc2845d076af66aac799b862a1995d0e6ad398795e6a7990f->leave($__internal_e994665ac0ec356fc2845d076af66aac799b862a1995d0e6ad398795e6a7990f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
