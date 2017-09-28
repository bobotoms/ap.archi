<?php

/* SonataPageBundle::2columns_layout.html.twig */
class __TwigTemplate_e3949d3550b816bdef78f2447b2ee36d3d10ad38c4307ab1069691f8869d864f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataPageBundle::layout.html.twig", "SonataPageBundle::2columns_layout.html.twig", 11);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8753778e76bc5562b90fb370a144d7ed93ca3b4a2381a78bbe6ba1caa2dec21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8753778e76bc5562b90fb370a144d7ed93ca3b4a2381a78bbe6ba1caa2dec21->enter($__internal_f8753778e76bc5562b90fb370a144d7ed93ca3b4a2381a78bbe6ba1caa2dec21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle::2columns_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8753778e76bc5562b90fb370a144d7ed93ca3b4a2381a78bbe6ba1caa2dec21->leave($__internal_f8753778e76bc5562b90fb370a144d7ed93ca3b4a2381a78bbe6ba1caa2dec21_prof);

    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_617450c47b104b863e74c275b424ae1f8158385f2aa16cc831c348c42e05e2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617450c47b104b863e74c275b424ae1f8158385f2aa16cc831c348c42e05e2e6->enter($__internal_617450c47b104b863e74c275b424ae1f8158385f2aa16cc831c348c42e05e2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 14
        echo "    ";
        if (array_key_exists("page", $context)) {
            // line 15
            echo "        <div class=\"col-md-6\">
            ";
            // line 16
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()) != "global")) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("left_col", "global");
                echo "
            ";
            }
            // line 19
            echo "            ";
            echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("left_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
        </div>
        <div class=\"col-md-6\">
            ";
            // line 22
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()) != "global")) {
                // line 23
                echo "                ";
                echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("right_col", "global");
                echo "
            ";
            }
            // line 25
            echo "            ";
            echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("right_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
        </div>
        <div style=\"clear: both\"></div>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        $this->displayParentBlock("page_content", $context, $blocks);
        echo "

";
        
        $__internal_617450c47b104b863e74c275b424ae1f8158385f2aa16cc831c348c42e05e2e6->leave($__internal_617450c47b104b863e74c275b424ae1f8158385f2aa16cc831c348c42e05e2e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle::2columns_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 30,  77 => 29,  69 => 25,  63 => 23,  61 => 22,  54 => 19,  48 => 17,  46 => 16,  43 => 15,  40 => 14,  34 => 13,  11 => 11,);
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
{% extends 'SonataPageBundle::layout.html.twig' %}

{% block page_content %}
    {% if page is defined %}
        <div class=\"col-md-6\">
            {% if page.name != 'global'%}
                {{ sonata_page_render_container('left_col', 'global') }}
            {% endif %}
            {{ sonata_page_render_container('left_col', page) }}
        </div>
        <div class=\"col-md-6\">
            {% if page.name != 'global'%}
                {{ sonata_page_render_container('right_col', 'global') }}
            {% endif %}
            {{ sonata_page_render_container('right_col', page) }}
        </div>
        <div style=\"clear: both\"></div>
    {% endif %}

    {{ parent() }}

{% endblock %}
", "SonataPageBundle::2columns_layout.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/2columns_layout.html.twig");
    }
}
