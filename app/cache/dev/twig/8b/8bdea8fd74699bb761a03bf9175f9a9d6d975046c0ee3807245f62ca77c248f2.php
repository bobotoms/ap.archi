<?php

/* knp_menu_ordered.html.twig */
class __TwigTemplate_9cbd6a85029ae77fe187dca6180fde59c3a3df99c2947c242bb2d2bbfef4d60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aa39a90d0dc85866f5aa792282d73a5c3de391800214deb50905c2b82e32596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa39a90d0dc85866f5aa792282d73a5c3de391800214deb50905c2b82e32596->enter($__internal_1aa39a90d0dc85866f5aa792282d73a5c3de391800214deb50905c2b82e32596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_ordered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aa39a90d0dc85866f5aa792282d73a5c3de391800214deb50905c2b82e32596->leave($__internal_1aa39a90d0dc85866f5aa792282d73a5c3de391800214deb50905c2b82e32596_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_c7feb7f7cd88d1ae5aa86403e1de28cf7e3681b58eb57de602f3d5d01caf24bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7feb7f7cd88d1ae5aa86403e1de28cf7e3681b58eb57de602f3d5d01caf24bc->enter($__internal_c7feb7f7cd88d1ae5aa86403e1de28cf7e3681b58eb57de602f3d5d01caf24bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
        
        $__internal_c7feb7f7cd88d1ae5aa86403e1de28cf7e3681b58eb57de602f3d5d01caf24bc->leave($__internal_c7feb7f7cd88d1ae5aa86403e1de28cf7e3681b58eb57de602f3d5d01caf24bc_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_ordered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  47 => 7,  45 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}

{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    <ol{{ macros.attributes(listAttributes) }}>
        {{ block('children') }}
    </ol>
{% endif %}
{% endblock %}
", "knp_menu_ordered.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_ordered.html.twig");
    }
}
