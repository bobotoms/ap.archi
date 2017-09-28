<?php

/* SonataPageBundle:SiteAdmin:list_create_snapshots.html.twig */
class __TwigTemplate_a0ebc2b49fed6fbf609536b2ca9960c1eba071325dc38b510713ac429d4cd362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "SonataPageBundle:SiteAdmin:list_create_snapshots.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57f368e1a852a71e46091596b210394f37be99189bf3c5ca67f6ef06d3bd7e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f368e1a852a71e46091596b210394f37be99189bf3c5ca67f6ef06d3bd7e54->enter($__internal_57f368e1a852a71e46091596b210394f37be99189bf3c5ca67f6ef06d3bd7e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:SiteAdmin:list_create_snapshots.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f368e1a852a71e46091596b210394f37be99189bf3c5ca67f6ef06d3bd7e54->leave($__internal_57f368e1a852a71e46091596b210394f37be99189bf3c5ca67f6ef06d3bd7e54_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c75c5fade9872853ef2de4038463c6e02c549fc407f3e1254ad8e88e3e231b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75c5fade9872853ef2de4038463c6e02c549fc407f3e1254ad8e88e3e231b15->enter($__internal_c75c5fade9872853ef2de4038463c6e02c549fc407f3e1254ad8e88e3e231b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "snapshots", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_create_snapshots", array(), "SonataPageBundle"), "html", null, true);
        echo "</a>
";
        
        $__internal_c75c5fade9872853ef2de4038463c6e02c549fc407f3e1254ad8e88e3e231b15->leave($__internal_c75c5fade9872853ef2de4038463c6e02c549fc407f3e1254ad8e88e3e231b15_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:SiteAdmin:list_create_snapshots.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}

{% block field %}
    <a href=\"{{ admin.generateObjectUrl('snapshots', object) }}\">{{ \"link_create_snapshots\"|trans({}, \"SonataPageBundle\")}}</a>
{% endblock %}
", "SonataPageBundle:SiteAdmin:list_create_snapshots.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/SiteAdmin/list_create_snapshots.html.twig");
    }
}
