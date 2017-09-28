<?php

/* @SonataPage/Exceptions/list.html.twig */
class __TwigTemplate_7df08e0fcbe78b034e292ac9d27f3c27b891ace57182780f780cd7d7ca4f8399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("::base.html.twig", "@SonataPage/Exceptions/list.html.twig", 11);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ca9cc3953a3d6d37eea2c92257fac5d74845e55e52e27c8f567b6a6b5290d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca9cc3953a3d6d37eea2c92257fac5d74845e55e52e27c8f567b6a6b5290d0c->enter($__internal_1ca9cc3953a3d6d37eea2c92257fac5d74845e55e52e27c8f567b6a6b5290d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/Exceptions/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca9cc3953a3d6d37eea2c92257fac5d74845e55e52e27c8f567b6a6b5290d0c->leave($__internal_1ca9cc3953a3d6d37eea2c92257fac5d74845e55e52e27c8f567b6a6b5290d0c_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f5e253aaf92923d7ca8b3a463ac023c1bfcb42e96352022ec58746817ca0699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5e253aaf92923d7ca8b3a463ac023c1bfcb42e96352022ec58746817ca0699->enter($__internal_9f5e253aaf92923d7ca8b3a463ac023c1bfcb42e96352022ec58746817ca0699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_list_exceptions", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_9f5e253aaf92923d7ca8b3a463ac023c1bfcb42e96352022ec58746817ca0699->leave($__internal_9f5e253aaf92923d7ca8b3a463ac023c1bfcb42e96352022ec58746817ca0699_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d83271b7ab18c5123c4b82abb3a984ee3437a5280e42a55df90a780c0a563f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d83271b7ab18c5123c4b82abb3a984ee3437a5280e42a55df90a780c0a563f3->enter($__internal_6d83271b7ab18c5123c4b82abb3a984ee3437a5280e42a55df90a780c0a563f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div>
        <h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_list_exceptions", array(), "SonataPageBundle"), "html", null, true);
        echo "</h2>

        <ul>
            ";
        // line 20
        if ((isset($context["httpErrorCodes"]) ? $context["httpErrorCodes"] : $this->getContext($context, "httpErrorCodes"))) {
            // line 21
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["httpErrorCodes"]) ? $context["httpErrorCodes"] : $this->getContext($context, "httpErrorCodes")));
            foreach ($context['_seq'] as $context["code"] => $context["page"]) {
                // line 22
                echo "                    <li>
                        <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_page_exceptions_edit", array("code" => $context["code"])), "html", null, true);
                echo "\">
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("manage_exception", array("%code%" => $context["code"]), "SonataPageBundle"), "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            ";
        }
        // line 29
        echo "        </ul>
    </div>
";
        
        $__internal_6d83271b7ab18c5123c4b82abb3a984ee3437a5280e42a55df90a780c0a563f3->leave($__internal_6d83271b7ab18c5123c4b82abb3a984ee3437a5280e42a55df90a780c0a563f3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/Exceptions/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  86 => 28,  76 => 24,  72 => 23,  69 => 22,  64 => 21,  62 => 20,  56 => 17,  53 => 16,  47 => 15,  35 => 13,  11 => 11,);
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
{% extends \"::base.html.twig\" %}

{% block title %}{{ 'title_list_exceptions'|trans({}, 'SonataPageBundle')}}{% endblock %}

{% block body %}
    <div>
        <h2>{{ 'title_list_exceptions'|trans([], 'SonataPageBundle') }}</h2>

        <ul>
            {% if httpErrorCodes %}
                {% for code, page in httpErrorCodes %}
                    <li>
                        <a href=\"{{ path('sonata_page_exceptions_edit', {'code': code}) }}\">
                            {{ 'manage_exception'|trans({'%code%': code}, 'SonataPageBundle') }}
                        </a>
                    </li>
                {% endfor %}
            {% endif %}
        </ul>
    </div>
{% endblock%}
", "@SonataPage/Exceptions/list.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\Exceptions\\list.html.twig");
    }
}
