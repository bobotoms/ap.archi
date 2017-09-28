<?php

/* SonataPageBundle:Exceptions:list.html.twig */
class __TwigTemplate_b65f3b75b14472888730f5a3a5fb0d2c93a20f4de4faffde815232cab307ab47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("::base.html.twig", "SonataPageBundle:Exceptions:list.html.twig", 11);
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
        $__internal_5d502854bdc01b8b27c6aca122f751c4f2e08fde07ebc51d86fb1e95768f0c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d502854bdc01b8b27c6aca122f751c4f2e08fde07ebc51d86fb1e95768f0c74->enter($__internal_5d502854bdc01b8b27c6aca122f751c4f2e08fde07ebc51d86fb1e95768f0c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Exceptions:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d502854bdc01b8b27c6aca122f751c4f2e08fde07ebc51d86fb1e95768f0c74->leave($__internal_5d502854bdc01b8b27c6aca122f751c4f2e08fde07ebc51d86fb1e95768f0c74_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d466e0b9eeb33a43101ef91a671b370d22170f7c0d880d2e8eb80ca9b1da94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d466e0b9eeb33a43101ef91a671b370d22170f7c0d880d2e8eb80ca9b1da94a->enter($__internal_5d466e0b9eeb33a43101ef91a671b370d22170f7c0d880d2e8eb80ca9b1da94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_list_exceptions", array(), "SonataPageBundle"), "html", null, true);
        
        $__internal_5d466e0b9eeb33a43101ef91a671b370d22170f7c0d880d2e8eb80ca9b1da94a->leave($__internal_5d466e0b9eeb33a43101ef91a671b370d22170f7c0d880d2e8eb80ca9b1da94a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f14f6f03353363ea229cd960623f91baed8b8bb8f1b7ea28f3e09c22e2b71bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f14f6f03353363ea229cd960623f91baed8b8bb8f1b7ea28f3e09c22e2b71bd->enter($__internal_6f14f6f03353363ea229cd960623f91baed8b8bb8f1b7ea28f3e09c22e2b71bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6f14f6f03353363ea229cd960623f91baed8b8bb8f1b7ea28f3e09c22e2b71bd->leave($__internal_6f14f6f03353363ea229cd960623f91baed8b8bb8f1b7ea28f3e09c22e2b71bd_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Exceptions:list.html.twig";
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
", "SonataPageBundle:Exceptions:list.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/Exceptions/list.html.twig");
    }
}
