<?php

/* SonataPageBundle:Page:create.html.twig */
class __TwigTemplate_d0134af49992d4f87c9e795d5efe9f60f4809136bc2f4fa9f845a40463dffa67 extends Twig_Template
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
        $__internal_94ad789be0152f109bfeff995f48c5c5f264c0407bdeadaa2a7f18ef799abf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ad789be0152f109bfeff995f48c5c5f264c0407bdeadaa2a7f18ef799abf82->enter($__internal_94ad789be0152f109bfeff995f48c5c5f264c0407bdeadaa2a7f18ef799abf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Page:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94ad789be0152f109bfeff995f48c5c5f264c0407bdeadaa2a7f18ef799abf82->leave($__internal_94ad789be0152f109bfeff995f48c5c5f264c0407bdeadaa2a7f18ef799abf82_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1548dd81a1bf66b2192cf1c6d1c9bb498c46e04216a260c5c42ae45bb10df04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1548dd81a1bf66b2192cf1c6d1c9bb498c46e04216a260c5c42ae45bb10df04->enter($__internal_e1548dd81a1bf66b2192cf1c6d1c9bb498c46e04216a260c5c42ae45bb10df04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_page_not_found", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_e1548dd81a1bf66b2192cf1c6d1c9bb498c46e04216a260c5c42ae45bb10df04->leave($__internal_e1548dd81a1bf66b2192cf1c6d1c9bb498c46e04216a260c5c42ae45bb10df04_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_8ada4dbe84f445915091e28e986da2627ea26474e81d6ad64c521e42c674ede6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ada4dbe84f445915091e28e986da2627ea26474e81d6ad64c521e42c674ede6->enter($__internal_8ada4dbe84f445915091e28e986da2627ea26474e81d6ad64c521e42c674ede6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8ada4dbe84f445915091e28e986da2627ea26474e81d6ad64c521e42c674ede6->leave($__internal_8ada4dbe84f445915091e28e986da2627ea26474e81d6ad64c521e42c674ede6_prof);

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
", "SonataPageBundle:Page:create.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\Page\\create.html.twig");
    }
}
