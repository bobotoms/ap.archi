<?php

/* @SonataSeo/Block/block_social_container.html.twig */
class __TwigTemplate_ba1d1bfa7f4e09f27ff60590cbfa41913c8034b0d9467e5cbd1986f7628608fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_container", array(), "array"), "@SonataSeo/Block/block_social_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01a6ec443b2589a15e2f28448e1828fe8f2659c802602956bc39e6b97e3a5a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a6ec443b2589a15e2f28448e1828fe8f2659c802602956bc39e6b97e3a5a24->enter($__internal_01a6ec443b2589a15e2f28448e1828fe8f2659c802602956bc39e6b97e3a5a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/block_social_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01a6ec443b2589a15e2f28448e1828fe8f2659c802602956bc39e6b97e3a5a24->leave($__internal_01a6ec443b2589a15e2f28448e1828fe8f2659c802602956bc39e6b97e3a5a24_prof);

    }

    // line 15
    public function block_block($context, array $blocks = array())
    {
        $__internal_1d9abea14e45c57163f6fbedee19f58dd54f2ac8d5d1b23815ab0687e3b2b1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9abea14e45c57163f6fbedee19f58dd54f2ac8d5d1b23815ab0687e3b2b1c9->enter($__internal_1d9abea14e45c57163f6fbedee19f58dd54f2ac8d5d1b23815ab0687e3b2b1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 16
        echo "    <div class=\"col-sm-12\">
        <div class=\"row\">
            ";
        // line 18
        $this->displayParentBlock("block", $context, $blocks);
        echo "
        </div>
        <div class=\"clearfix\"></div>
    </div>
";
        
        $__internal_1d9abea14e45c57163f6fbedee19f58dd54f2ac8d5d1b23815ab0687e3b2b1c9->leave($__internal_1d9abea14e45c57163f6fbedee19f58dd54f2ac8d5d1b23815ab0687e3b2b1c9_prof);

    }

    // line 23
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_d3d43bc1fec9843a00d19737ea7f515c608caa4a4364805f2f3f591530320901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d43bc1fec9843a00d19737ea7f515c608caa4a4364805f2f3f591530320901->enter($__internal_d3d43bc1fec9843a00d19737ea7f515c608caa4a4364805f2f3f591530320901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 24
        echo "    <div class=\"sonata_seo_social pull-left\">
        ";
        // line 25
        $this->displayParentBlock("block_child_render", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_d3d43bc1fec9843a00d19737ea7f515c608caa4a4364805f2f3f591530320901->leave($__internal_d3d43bc1fec9843a00d19737ea7f515c608caa4a4364805f2f3f591530320901_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/block_social_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  62 => 24,  56 => 23,  44 => 18,  40 => 16,  34 => 15,  19 => 12,);
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

{% extends sonata_block.templates['block_container'] %}

{# render container block #}
{% block block %}
    <div class=\"col-sm-12\">
        <div class=\"row\">
            {{ parent() }}
        </div>
        <div class=\"clearfix\"></div>
    </div>
{% endblock %}
{% block block_child_render %}
    <div class=\"sonata_seo_social pull-left\">
        {{ parent() }}
    </div>
{% endblock %}
", "@SonataSeo/Block/block_social_container.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\block_social_container.html.twig");
    }
}
