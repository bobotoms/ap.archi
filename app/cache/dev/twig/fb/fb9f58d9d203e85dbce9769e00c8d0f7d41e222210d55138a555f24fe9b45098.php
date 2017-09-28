<?php

/* @SonataPage/PageAdmin/compose_container_show.html.twig */
class __TwigTemplate_0dbe531dca17b9a78f675214f93971979315b4087ae368468ed4afd59d08bd84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:action.html.twig", "@SonataPage/PageAdmin/compose_container_show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5af1da5ff3a3a14431011da6815c1c8f41d6c03a87f8b47593119453140ec64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af1da5ff3a3a14431011da6815c1c8f41d6c03a87f8b47593119453140ec64a->enter($__internal_5af1da5ff3a3a14431011da6815c1c8f41d6c03a87f8b47593119453140ec64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/PageAdmin/compose_container_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5af1da5ff3a3a14431011da6815c1c8f41d6c03a87f8b47593119453140ec64a->leave($__internal_5af1da5ff3a3a14431011da6815c1c8f41d6c03a87f8b47593119453140ec64a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f38ca23d2dfba7925de9fb8ecac8760cd49d2d41ebd1121471ef6085098fd7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38ca23d2dfba7925de9fb8ecac8760cd49d2d41ebd1121471ef6085098fd7bb->enter($__internal_f38ca23d2dfba7925de9fb8ecac8760cd49d2d41ebd1121471ef6085098fd7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_f38ca23d2dfba7925de9fb8ecac8760cd49d2d41ebd1121471ef6085098fd7bb->leave($__internal_f38ca23d2dfba7925de9fb8ecac8760cd49d2d41ebd1121471ef6085098fd7bb_prof);

    }

    // line 7
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_dbed66f5f50cb2437cc10c03bc46091986c83e91e2eb29f976dffe8c6a870cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbed66f5f50cb2437cc10c03bc46091986c83e91e2eb29f976dffe8c6a870cfb->enter($__internal_dbed66f5f50cb2437cc10c03bc46091986c83e91e2eb29f976dffe8c6a870cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 8
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dbed66f5f50cb2437cc10c03bc46091986c83e91e2eb29f976dffe8c6a870cfb->leave($__internal_dbed66f5f50cb2437cc10c03bc46091986c83e91e2eb29f976dffe8c6a870cfb_prof);

    }

    // line 11
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_8238ee50dfe69a14585cf8cfdd9fb95948b6920f70bedaa47e69262a32e88a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8238ee50dfe69a14585cf8cfdd9fb95948b6920f70bedaa47e69262a32e88a3d->enter($__internal_8238ee50dfe69a14585cf8cfdd9fb95948b6920f70bedaa47e69262a32e88a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed page-composer-page sonata-ba-no-side-menu\"";
        
        $__internal_8238ee50dfe69a14585cf8cfdd9fb95948b6920f70bedaa47e69262a32e88a3d->leave($__internal_8238ee50dfe69a14585cf8cfdd9fb95948b6920f70bedaa47e69262a32e88a3d_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_58b3853c6ed924e85d6178ff6c5f58058a1190e06157b3f5c07e3b72cea905f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b3853c6ed924e85d6178ff6c5f58058a1190e06157b3f5c07e3b72cea905f9->enter($__internal_58b3853c6ed924e85d6178ff6c5f58058a1190e06157b3f5c07e3b72cea905f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "<div class=\"page-composer__container__view block-view-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "id", array()), "html", null, true);
        echo "\"
     data-block-id=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "id", array()), "html", null, true);
        echo "\"
>
    <h2 class=\"page-composer__container__view__header\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "name", array()), "html", null, true);
        echo "</h2>

    <span class=\"page-composer__container__view__notice\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notice", array(), "SonataPageBundle"), "html", null, true);
        echo "</span>

    <div class=\"page-composer__block-type-selector\">
        <label>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("composer.block.add.type", array(), "SonataPageBundle"), "html", null, true);
        echo "</label>
        <select class=\"page-composer__block-type-selector__select\" style=\"width: auto\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockServices"]) ? $context["blockServices"] : $this->getContext($context, "blockServices")));
        foreach ($context['_seq'] as $context["blockServiceId"] => $context["blockService"]) {
            // line 25
            echo "            \t<option value=\"";
            echo twig_escape_filter($this->env, $context["blockServiceId"], "html", null, true);
            echo "\">";
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['blockServiceId'], $context['blockService'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </select>
        <a class=\"btn btn-action btn-small page-composer__block-type-selector__confirm\"
           href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "sonata.page.admin.block.create", 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), 2 => array("composer" => true)), "method"), "html", null, true);
        echo "\"
        ><i class=\"fa fa-plus\"></i></a>
        <span class=\"page-composer__block-type-selector__loader\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("loading", array(), "SonataPageBundle"), "html", null, true);
        echo "</span>

        <small class=\"page-composer__container__child-count pull-right\">
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blocks", array(), "SonataPageBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "children", array())), "html", null, true);
        echo "</span>
        </small>
    </div>

    <ul class=\"page-composer__container__children\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["container"]) ? $context["container"] : $this->getContext($context, "container")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            echo "            ";
            $this->loadTemplate("SonataPageBundle:BlockAdmin:compose_preview.html.twig", "@SonataPage/PageAdmin/compose_container_show.html.twig", 40)->display($context);
            // line 41
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul>
</div>
";
        
        $__internal_58b3853c6ed924e85d6178ff6c5f58058a1190e06157b3f5c07e3b72cea905f9->leave($__internal_58b3853c6ed924e85d6178ff6c5f58058a1190e06157b3f5c07e3b72cea905f9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/PageAdmin/compose_container_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 42,  172 => 41,  169 => 40,  152 => 39,  142 => 34,  136 => 31,  131 => 29,  127 => 27,  117 => 25,  113 => 24,  108 => 22,  102 => 19,  97 => 17,  92 => 15,  87 => 14,  81 => 13,  69 => 11,  59 => 8,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:action.html.twig' %}

{% block title %}
    {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block body_attributes %}class=\"sonata-bc skin-black fixed page-composer-page sonata-ba-no-side-menu\"{% endblock %}

{% block content %}
<div class=\"page-composer__container__view block-view-{{ container.id }}\"
     data-block-id=\"{{ container.id }}\"
>
    <h2 class=\"page-composer__container__view__header\">{{ container.name }}</h2>

    <span class=\"page-composer__container__view__notice\">{{ 'notice'|trans({}, 'SonataPageBundle') }}</span>

    <div class=\"page-composer__block-type-selector\">
        <label>{{ 'composer.block.add.type'|trans({}, 'SonataPageBundle') }}</label>
        <select class=\"page-composer__block-type-selector__select\" style=\"width: auto\">
            {% for blockServiceId, blockService in blockServices %}
            \t<option value=\"{{ blockServiceId }}\">{#{{ blockService.blockMetadata.title|trans({}, blockService.blockMetadata.domain|default('SonataPageBundle')) }}#}</option>
            {% endfor %}
        </select>
        <a class=\"btn btn-action btn-small page-composer__block-type-selector__confirm\"
           href=\"{{ admin.generateObjectUrl('sonata.page.admin.block.create', page, {'composer': true}) }}\"
        ><i class=\"fa fa-plus\"></i></a>
        <span class=\"page-composer__block-type-selector__loader\">{{ 'loading'|trans({}, 'SonataPageBundle') }}</span>

        <small class=\"page-composer__container__child-count pull-right\">
            {{ 'blocks'|trans({}, 'SonataPageBundle') }} <span class=\"badge\">{{ container.children|length }}</span>
        </small>
    </div>

    <ul class=\"page-composer__container__children\">
        {% for child in container.children %}
            {% include 'SonataPageBundle:BlockAdmin:compose_preview.html.twig' %}
        {% endfor %}
    </ul>
</div>
{% endblock %}
", "@SonataPage/PageAdmin/compose_container_show.html.twig", "C:\\wamp\\www\\Aparchi\\src\\Application\\Sonata\\PageBundle\\Resources\\views\\PageAdmin\\compose_container_show.html.twig");
    }
}
