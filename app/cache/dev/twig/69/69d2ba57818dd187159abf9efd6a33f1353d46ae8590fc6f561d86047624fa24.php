<?php

/* SonataPageBundle::layout.html.twig */
class __TwigTemplate_3ae6af1f8f16c11b37f7df5378af5bc47576dc62c2d597958a83ac2231574320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataPageBundle::base_layout.html.twig", "SonataPageBundle::layout.html.twig", 11);
        $this->blocks = array(
            'sonata_page_container' => array($this, 'block_sonata_page_container'),
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle::base_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1b1c49ac0b4c6497e1bcc2ec4a2ee43ce01cc300e9a300bb4b595fb4ccb0800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b1c49ac0b4c6497e1bcc2ec4a2ee43ce01cc300e9a300bb4b595fb4ccb0800->enter($__internal_d1b1c49ac0b4c6497e1bcc2ec4a2ee43ce01cc300e9a300bb4b595fb4ccb0800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b1c49ac0b4c6497e1bcc2ec4a2ee43ce01cc300e9a300bb4b595fb4ccb0800->leave($__internal_d1b1c49ac0b4c6497e1bcc2ec4a2ee43ce01cc300e9a300bb4b595fb4ccb0800_prof);

    }

    // line 13
    public function block_sonata_page_container($context, array $blocks = array())
    {
        $__internal_864d24586a0be65eb2ad5efc2b712df97c9b109a1527b462fd8dbb53cd2db2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864d24586a0be65eb2ad5efc2b712df97c9b109a1527b462fd8dbb53cd2db2d2->enter($__internal_864d24586a0be65eb2ad5efc2b712df97c9b109a1527b462fd8dbb53cd2db2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_container"));

        // line 14
        echo "    <div class=\"container\">
        <div class=\"content\">
            <div class=\"row page-header\">
                ";
        // line 17
        echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("header", "global");
        echo "
            </div>

            ";
        // line 20
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 28
        echo "
            ";
        // line 29
        if (array_key_exists("page", $context)) {
            // line 30
            echo "                <div class=\"row\">
                    ";
            // line 31
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()) != "global")) {
                // line 32
                echo "                        ";
                echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("content_top", "global");
                echo "
                    ";
            }
            // line 34
            echo "                    ";
            echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("content_top", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                </div>
            ";
        }
        // line 37
        echo "
            <div class=\"row\">
                ";
        // line 39
        $this->displayBlock('page_content', $context, $blocks);
        // line 51
        echo "            </div>

            ";
        // line 53
        if (array_key_exists("page", $context)) {
            // line 54
            echo "                <div class=\"row\">
                    ";
            // line 55
            echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("content_bottom", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "

                    ";
            // line 57
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()) != "global")) {
                // line 58
                echo "                        ";
                echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("content_bottom", "global");
                echo "
                    ";
            }
            // line 60
            echo "                </div>
            ";
        }
        // line 62
        echo "        </div>

        <footer class=\"row\">
            ";
        // line 65
        echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("footer", "global");
        echo "
        </footer>
    </div>
";
        
        $__internal_864d24586a0be65eb2ad5efc2b712df97c9b109a1527b462fd8dbb53cd2db2d2->leave($__internal_864d24586a0be65eb2ad5efc2b712df97c9b109a1527b462fd8dbb53cd2db2d2_prof);

    }

    // line 20
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_1c8503f7bda610f39653eeab39f43595eb896a00dfdb3dc3cf73a7b78cb19275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8503f7bda610f39653eeab39f43595eb896a00dfdb3dc3cf73a7b78cb19275->enter($__internal_1c8503f7bda610f39653eeab39f43595eb896a00dfdb3dc3cf73a7b78cb19275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 21
        echo "                <div class=\"row\">
                    ";
        // line 22
        if ( !array_key_exists("sonata_seo_context", $context)) {
            // line 23
            echo "                        ";
            $context["sonata_seo_context"] = "homepage";
            // line 24
            echo "                    ";
        }
        // line 25
        echo "                    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["sonata_seo_context"]) ? $context["sonata_seo_context"] : $this->getContext($context, "sonata_seo_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
                </div>
            ";
        
        $__internal_1c8503f7bda610f39653eeab39f43595eb896a00dfdb3dc3cf73a7b78cb19275->leave($__internal_1c8503f7bda610f39653eeab39f43595eb896a00dfdb3dc3cf73a7b78cb19275_prof);

    }

    // line 39
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ab1ded99d8eb14c5c2ab02867940eba74c8597c5afdfe391b3fe0331fc185942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1ded99d8eb14c5c2ab02867940eba74c8597c5afdfe391b3fe0331fc185942->enter($__internal_ab1ded99d8eb14c5c2ab02867940eba74c8597c5afdfe391b3fe0331fc185942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 40
        echo "                    ";
        if (array_key_exists("content", $context)) {
            // line 41
            echo "                        ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
                    ";
        } else {
            // line 43
            echo "                        ";
            $context["content"] =             $this->renderBlock("content", $context, $blocks);
            // line 44
            echo "                        ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 45
                echo "                            ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
                        ";
            } elseif (            // line 46
array_key_exists("page", $context)) {
                // line 47
                echo "                            ";
                echo $this->env->getExtension('Sonata\PageBundle\Twig\Extension\PageExtension')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
                        ";
            }
            // line 49
            echo "                    ";
        }
        // line 50
        echo "                ";
        
        $__internal_ab1ded99d8eb14c5c2ab02867940eba74c8597c5afdfe391b3fe0331fc185942->leave($__internal_ab1ded99d8eb14c5c2ab02867940eba74c8597c5afdfe391b3fe0331fc185942_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 50,  188 => 49,  182 => 47,  180 => 46,  175 => 45,  172 => 44,  169 => 43,  163 => 41,  160 => 40,  154 => 39,  143 => 25,  140 => 24,  137 => 23,  135 => 22,  132 => 21,  126 => 20,  115 => 65,  110 => 62,  106 => 60,  100 => 58,  98 => 57,  93 => 55,  90 => 54,  88 => 53,  84 => 51,  82 => 39,  78 => 37,  71 => 34,  65 => 32,  63 => 31,  60 => 30,  58 => 29,  55 => 28,  53 => 20,  47 => 17,  42 => 14,  36 => 13,  11 => 11,);
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
{% extends 'SonataPageBundle::base_layout.html.twig' %}

{% block sonata_page_container %}
    <div class=\"container\">
        <div class=\"content\">
            <div class=\"row page-header\">
                {{ sonata_page_render_container('header', 'global') }}
            </div>

            {% block sonata_page_breadcrumb %}
                <div class=\"row\">
                    {% if sonata_seo_context is not defined %}
                        {% set sonata_seo_context = 'homepage' %}
                    {% endif %}
                    {{ sonata_block_render_event('breadcrumb', { 'context': sonata_seo_context, 'current_uri': app.request.requestUri }) }}
                </div>
            {% endblock %}

            {% if page is defined %}
                <div class=\"row\">
                    {% if page.name != 'global'%}
                        {{ sonata_page_render_container('content_top', 'global') }}
                    {% endif %}
                    {{ sonata_page_render_container('content_top', page) }}
                </div>
            {% endif %}

            <div class=\"row\">
                {% block page_content %}
                    {% if content is defined %}
                        {{ content|raw }}
                    {% else %}
                        {% set content = block('content') %}
                        {% if content|length > 0 %}
                            {{ content|raw }}
                        {% elseif page is defined %}
                            {{ sonata_page_render_container('content', page) }}
                        {% endif %}
                    {% endif %}
                {% endblock %}
            </div>

            {% if page is defined %}
                <div class=\"row\">
                    {{ sonata_page_render_container('content_bottom', page) }}

                    {% if page.name != 'global'%}
                        {{ sonata_page_render_container('content_bottom', 'global') }}
                    {% endif %}
                </div>
            {% endif %}
        </div>

        <footer class=\"row\">
            {{ sonata_page_render_container('footer', 'global') }}
        </footer>
    </div>
{% endblock %}
", "SonataPageBundle::layout.html.twig", "C:\\wamp\\www\\Aparchi\\src\\Application\\Sonata\\PageBundle\\Resources\\views\\layout.html.twig");
    }
}
