<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_e10c63e564c9c8fee913f2b528205c39aaa3ea3506d13cc84b583421d4822bd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_1fcf6fcd851c2db5f4c633d935f45eae9547ef0bf767fffa86c3f21ee4cf3c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcf6fcd851c2db5f4c633d935f45eae9547ef0bf767fffa86c3f21ee4cf3c42->enter($__internal_1fcf6fcd851c2db5f4c633d935f45eae9547ef0bf767fffa86c3f21ee4cf3c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fcf6fcd851c2db5f4c633d935f45eae9547ef0bf767fffa86c3f21ee4cf3c42->leave($__internal_1fcf6fcd851c2db5f4c633d935f45eae9547ef0bf767fffa86c3f21ee4cf3c42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68a2a0a80a4ea06292fa2038ac4e337849bb1c2579295687ae205ffbfd7f8074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a2a0a80a4ea06292fa2038ac4e337849bb1c2579295687ae205ffbfd7f8074->enter($__internal_68a2a0a80a4ea06292fa2038ac4e337849bb1c2579295687ae205ffbfd7f8074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_68a2a0a80a4ea06292fa2038ac4e337849bb1c2579295687ae205ffbfd7f8074->leave($__internal_68a2a0a80a4ea06292fa2038ac4e337849bb1c2579295687ae205ffbfd7f8074_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/changePassword.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\friendsofsymfony\\user-bundle\\FOS\\UserBundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
