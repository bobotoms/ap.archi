<?php

/* @SonataPage/Block/block_core_children_pages.html.twig */
class __TwigTemplate_1cbbf76f2538c1847c9ad8cdce9fcd00b60982cae4ff8681a6f667303e193dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataPage/Block/block_core_children_pages.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a693035777c4a3a49ea1bbd03aec9311eb8c1ea385b168272a0ef4eccb65f774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a693035777c4a3a49ea1bbd03aec9311eb8c1ea385b168272a0ef4eccb65f774->enter($__internal_a693035777c4a3a49ea1bbd03aec9311eb8c1ea385b168272a0ef4eccb65f774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/Block/block_core_children_pages.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a693035777c4a3a49ea1bbd03aec9311eb8c1ea385b168272a0ef4eccb65f774->leave($__internal_a693035777c4a3a49ea1bbd03aec9311eb8c1ea385b168272a0ef4eccb65f774_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8cf915faeb91753e8e7d94e2284f89ce7e98fff70ed59e001ad625dad781131a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf915faeb91753e8e7d94e2284f89ce7e98fff70ed59e001ad625dad781131a->enter($__internal_8cf915faeb91753e8e7d94e2284f89ce7e98fff70ed59e001ad625dad781131a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"sonata-page-menu-container ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        echo "\">
        ";
        // line 16
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            echo "<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>";
        }
        // line 17
        echo "
        <ul class=\"sonata-page-menu-chilren-list\">
            ";
        // line 19
        if ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))) {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 21
                echo "                \t";
                if ($this->getAttribute($context["child"], "token", array(), "any", true, true)) {
                    // line 22
                    echo "                    <li class=\"sonata-page-menu-children-element\"><a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($context["child"]);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name", array()));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name", array()), "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 24
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
        }
        // line 26
        echo "        </ul>
    </div>
";
        
        $__internal_8cf915faeb91753e8e7d94e2284f89ce7e98fff70ed59e001ad625dad781131a->leave($__internal_8cf915faeb91753e8e7d94e2284f89ce7e98fff70ed59e001ad625dad781131a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/Block/block_core_children_pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  80 => 25,  74 => 24,  64 => 22,  61 => 21,  56 => 20,  54 => 19,  50 => 17,  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"sonata-page-menu-container {{ settings.class }}\">
        {% if settings.title %}<h3>{{ settings.title }}</h3>{% endif %}

        <ul class=\"sonata-page-menu-chilren-list\">
            {% if page %}
                {% for child in page.children %}
                \t{% if child.token is defined %}
                    <li class=\"sonata-page-menu-children-element\"><a href=\"{{ path(child) }}\" title=\"{{ child.name|escape }}\">{{ child.name }}</a></li>
                    {% endif %}
                {% endfor %}
            {% endif %}
        </ul>
    </div>
{% endblock %}
", "@SonataPage/Block/block_core_children_pages.html.twig", "C:\\wamp\\www\\Aparchi\\src\\Application\\Sonata\\PageBundle\\Resources\\views\\Block\\block_core_children_pages.html.twig");
    }
}
