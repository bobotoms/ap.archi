<?php

/* @SonataPage/BlockAdmin/block_core_text_edit.html.twig */
class __TwigTemplate_5727d845a17045564f5a27e75a91c4c8fe06312fb93072fa3a84e8e44f74e576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataPageBundle:BlockAdmin:edit.html.twig", "@SonataPage/BlockAdmin/block_core_text_edit.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle:BlockAdmin:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cb21f10f9b7806d5aa72e5f1e8950f8a42122dd7f36c87dd14a02ac819bde89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb21f10f9b7806d5aa72e5f1e8950f8a42122dd7f36c87dd14a02ac819bde89->enter($__internal_3cb21f10f9b7806d5aa72e5f1e8950f8a42122dd7f36c87dd14a02ac819bde89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/BlockAdmin/block_core_text_edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb21f10f9b7806d5aa72e5f1e8950f8a42122dd7f36c87dd14a02ac819bde89->leave($__internal_3cb21f10f9b7806d5aa72e5f1e8950f8a42122dd7f36c87dd14a02ac819bde89_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_1e6c48b1e95d914efa5413da1658f3cc3045a494a08ebf8777b6ebbc4f384115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6c48b1e95d914efa5413da1658f3cc3045a494a08ebf8777b6ebbc4f384115->enter($__internal_1e6c48b1e95d914efa5413da1658f3cc3045a494a08ebf8777b6ebbc4f384115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <p>
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "settings", array()), "content", array()), 'label');
        echo " <br>
        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "settings", array()), "content", array()), 'widget', array("attr" => array("class" => "title")));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "settings", array()), "content", array()), 'errors');
        echo "
    </p>
";
        
        $__internal_1e6c48b1e95d914efa5413da1658f3cc3045a494a08ebf8777b6ebbc4f384115->leave($__internal_1e6c48b1e95d914efa5413da1658f3cc3045a494a08ebf8777b6ebbc4f384115_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/BlockAdmin/block_core_text_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  47 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataPageBundle:BlockAdmin:edit.html.twig' %}

{% block block %}
    <p>
        {{ form_label(form.settings.content) }} <br>
        {{ form_widget(form.settings.content, {'attr': {'class' : 'title'}}) }}
        {{ form_errors(form.settings.content) }}
    </p>
{% endblock %}
", "@SonataPage/BlockAdmin/block_core_text_edit.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\BlockAdmin\\block_core_text_edit.html.twig");
    }
}
