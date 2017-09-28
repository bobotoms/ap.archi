<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_2528e1a213ba158b42d34f4afa6291222b37515219c71b1b6d80288e3eacbbf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3320f4db929bba74d2b6dc1f4d68d05530dd1c74761d4cdd4137452462a7b147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3320f4db929bba74d2b6dc1f4d68d05530dd1c74761d4cdd4137452462a7b147->enter($__internal_3320f4db929bba74d2b6dc1f4d68d05530dd1c74761d4cdd4137452462a7b147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3320f4db929bba74d2b6dc1f4d68d05530dd1c74761d4cdd4137452462a7b147->leave($__internal_3320f4db929bba74d2b6dc1f4d68d05530dd1c74761d4cdd4137452462a7b147_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3c6535c0828cd7766787b5aaa2f6c3e3d9ca33cf2cbeb4fb343c044d3ed60750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6535c0828cd7766787b5aaa2f6c3e3d9ca33cf2cbeb4fb343c044d3ed60750->enter($__internal_3c6535c0828cd7766787b5aaa2f6c3e3d9ca33cf2cbeb4fb343c044d3ed60750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_3c6535c0828cd7766787b5aaa2f6c3e3d9ca33cf2cbeb4fb343c044d3ed60750->leave($__internal_3c6535c0828cd7766787b5aaa2f6c3e3d9ca33cf2cbeb4fb343c044d3ed60750_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "@SonataAdmin/CRUD/list_email.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_email.html.twig");
    }
}
