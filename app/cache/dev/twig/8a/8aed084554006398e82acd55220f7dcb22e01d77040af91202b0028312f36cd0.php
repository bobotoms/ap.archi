<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_fa46fbce6eda1c418e1d502d46ecce4cb71514e29cb4980efb0c786d72abbfc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_947434710c6695acde9e9537dbd0a30dcb9bbf579d26d1e9b39abd9ad0b7a0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947434710c6695acde9e9537dbd0a30dcb9bbf579d26d1e9b39abd9ad0b7a0b4->enter($__internal_947434710c6695acde9e9537dbd0a30dcb9bbf579d26d1e9b39abd9ad0b7a0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_947434710c6695acde9e9537dbd0a30dcb9bbf579d26d1e9b39abd9ad0b7a0b4->leave($__internal_947434710c6695acde9e9537dbd0a30dcb9bbf579d26d1e9b39abd9ad0b7a0b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e3bd4134b6bc8d2f18fa96a01d791aeec52cd9f1ce0db7d4e26aa1e671a4a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3bd4134b6bc8d2f18fa96a01d791aeec52cd9f1ce0db7d4e26aa1e671a4a42->enter($__internal_7e3bd4134b6bc8d2f18fa96a01d791aeec52cd9f1ce0db7d4e26aa1e671a4a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7e3bd4134b6bc8d2f18fa96a01d791aeec52cd9f1ce0db7d4e26aa1e671a4a42->leave($__internal_7e3bd4134b6bc8d2f18fa96a01d791aeec52cd9f1ce0db7d4e26aa1e671a4a42_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle/Resources/views/Group/edit.html.twig");
    }
}
