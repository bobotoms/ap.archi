<?php

/* @SonataPage/PageAdmin/field_hybrid.html.twig */
class __TwigTemplate_4db90c6af5c9556eb2054beaabaeaec45b924b1e29845e3d436c00cbbce71600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "@SonataPage/PageAdmin/field_hybrid.html.twig", 11);
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
        $__internal_b4f9c9e50f2a15b3c7bffc5e6ca63511a56ce82458b3bc7f6de0e7e583c186e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f9c9e50f2a15b3c7bffc5e6ca63511a56ce82458b3bc7f6de0e7e583c186e8->enter($__internal_b4f9c9e50f2a15b3c7bffc5e6ca63511a56ce82458b3bc7f6de0e7e583c186e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/PageAdmin/field_hybrid.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4f9c9e50f2a15b3c7bffc5e6ca63511a56ce82458b3bc7f6de0e7e583c186e8->leave($__internal_b4f9c9e50f2a15b3c7bffc5e6ca63511a56ce82458b3bc7f6de0e7e583c186e8_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_f45f9a015ef7f79a54d26736b4ec797245c70fd7fcec705269c8becc0cd565cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45f9a015ef7f79a54d26736b4ec797245c70fd7fcec705269c8becc0cd565cc->enter($__internal_f45f9a015ef7f79a54d26736b4ec797245c70fd7fcec705269c8becc0cd565cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "isHybrid", array())) {
            // line 16
            echo "        <i class=\"fa fa-gears\"></i>
    ";
        } else {
            // line 18
            echo "        <i class=\"fa fa-code\"></i>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f45f9a015ef7f79a54d26736b4ec797245c70fd7fcec705269c8becc0cd565cc->leave($__internal_f45f9a015ef7f79a54d26736b4ec797245c70fd7fcec705269c8becc0cd565cc_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/PageAdmin/field_hybrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  45 => 16,  42 => 15,  40 => 14,  34 => 13,  11 => 11,);
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
{% spaceless %}
    {% if object.isHybrid %}
        <i class=\"fa fa-gears\"></i>
    {% else %}
        <i class=\"fa fa-code\"></i>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "@SonataPage/PageAdmin/field_hybrid.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\PageAdmin\\field_hybrid.html.twig");
    }
}
