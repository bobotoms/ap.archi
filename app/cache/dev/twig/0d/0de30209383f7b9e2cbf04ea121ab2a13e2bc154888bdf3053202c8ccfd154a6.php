<?php

/* SonataPageBundle:Page:create.html.twig */
class __TwigTemplate_bd7de5de936d6e23a8a85595f8b6edaea490652b6dde208ee3d5c18b8893d774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataPageBundle::layout.html.twig", "SonataPageBundle:Page:create.html.twig", 11);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataPageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cbbda49b44e013e0838291817a59d5a0503f24ab99ca39f85288dc6bb213ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbbda49b44e013e0838291817a59d5a0503f24ab99ca39f85288dc6bb213ff1->enter($__internal_4cbbda49b44e013e0838291817a59d5a0503f24ab99ca39f85288dc6bb213ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Page:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cbbda49b44e013e0838291817a59d5a0503f24ab99ca39f85288dc6bb213ff1->leave($__internal_4cbbda49b44e013e0838291817a59d5a0503f24ab99ca39f85288dc6bb213ff1_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_7395d9bcf3cc2682142420e0264a6286eaffd5e3de40b176c2efd2fb4e4754ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7395d9bcf3cc2682142420e0264a6286eaffd5e3de40b176c2efd2fb4e4754ec->enter($__internal_7395d9bcf3cc2682142420e0264a6286eaffd5e3de40b176c2efd2fb4e4754ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_page_not_found", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_7395d9bcf3cc2682142420e0264a6286eaffd5e3de40b176c2efd2fb4e4754ec->leave($__internal_7395d9bcf3cc2682142420e0264a6286eaffd5e3de40b176c2efd2fb4e4754ec_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2dc6bc3b6f74bdf38515c04838f6f6e10ab45dfec78befb577acfc863950862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dc6bc3b6f74bdf38515c04838f6f6e10ab45dfec78befb577acfc863950862->enter($__internal_b2dc6bc3b6f74bdf38515c04838f6f6e10ab45dfec78befb577acfc863950862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div>
        <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_page_not_found", array("pathInfo" => (isset($context["pathInfo"]) ? $context["pathInfo"] : $this->getContext($context, "pathInfo"))), "SonataPageBundle"), "html", null, true);
        echo "</h2>

        ";
        // line 19
        if ((isset($context["creatable"]) ? $context["creatable"] : $this->getContext($context, "creatable"))) {
            // line 20
            echo "            <p>
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "url", array(0 => "sonata.page.admin.page", 1 => "create", 2 => array("url" => (isset($context["pathInfo"]) ? $context["pathInfo"] : $this->getContext($context, "pathInfo")), "siteId" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "id", array()))), "method"), "html", null, true);
            echo "\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create_page", array("pathInfo" => (isset($context["pathInfo"]) ? $context["pathInfo"] : $this->getContext($context, "pathInfo"))), "SonataPageBundle"), "html", null, true);
            echo "
                </a>
            </p>
        ";
        } else {
            // line 26
            echo "            <p>
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_page_does_not_exist", array("pathInfo" => (isset($context["pathInfo"]) ? $context["pathInfo"] : $this->getContext($context, "pathInfo"))), "SonataPageBundle"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 30
        echo "    </div>
";
        
        $__internal_b2dc6bc3b6f74bdf38515c04838f6f6e10ab45dfec78befb577acfc863950862->leave($__internal_b2dc6bc3b6f74bdf38515c04838f6f6e10ab45dfec78befb577acfc863950862_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Page:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  80 => 27,  77 => 26,  70 => 22,  66 => 21,  63 => 20,  61 => 19,  56 => 17,  53 => 16,  47 => 15,  35 => 13,  11 => 11,);
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
{% extends \"SonataPageBundle::layout.html.twig\" %}

{% block title %}{{ \"title_page_not_found\"|trans({}, 'SonataPageBundle')}}{% endblock %}

{% block content %}
    <div>
        <h2>{{ \"title_page_not_found\"|trans({'pathInfo': pathInfo}, 'SonataPageBundle') }}</h2>

        {% if creatable %}
            <p>
                <a href=\"{{ sonata_admin.url('sonata.page.admin.page', 'create', {'url': pathInfo, 'siteId': site.id}) }}\">
                    {{ \"create_page\"|trans({'pathInfo': pathInfo}, 'SonataPageBundle') }}
                </a>
            </p>
        {% else %}
            <p>
                {{ \"message_page_does_not_exist\"|trans({'pathInfo': pathInfo}, 'SonataPageBundle') }}
            </p>
        {% endif%}
    </div>
{% endblock%}
", "SonataPageBundle:Page:create.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/Page/create.html.twig");
    }
}
