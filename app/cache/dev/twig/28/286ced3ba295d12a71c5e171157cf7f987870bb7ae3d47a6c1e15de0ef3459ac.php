<?php

/* SonataPageBundle:Block:block_core_children_pages.html.twig */
class __TwigTemplate_a3bf4c058131322af837856f5a8c9b182027eeb17e13130443bc2ab3db006c7c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataPageBundle:Block:block_core_children_pages.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9e2bd90f8646b23e702be16494b63b0dfe0a5b5d464b0f3f1682630e367b6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e2bd90f8646b23e702be16494b63b0dfe0a5b5d464b0f3f1682630e367b6ad->enter($__internal_d9e2bd90f8646b23e702be16494b63b0dfe0a5b5d464b0f3f1682630e367b6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Block:block_core_children_pages.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9e2bd90f8646b23e702be16494b63b0dfe0a5b5d464b0f3f1682630e367b6ad->leave($__internal_d9e2bd90f8646b23e702be16494b63b0dfe0a5b5d464b0f3f1682630e367b6ad_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_84783f6ccbd6927d2183c39847a1a10e29fb900b7655cd8b462ffd6da065c97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84783f6ccbd6927d2183c39847a1a10e29fb900b7655cd8b462ffd6da065c97a->enter($__internal_84783f6ccbd6927d2183c39847a1a10e29fb900b7655cd8b462ffd6da065c97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_84783f6ccbd6927d2183c39847a1a10e29fb900b7655cd8b462ffd6da065c97a->leave($__internal_84783f6ccbd6927d2183c39847a1a10e29fb900b7655cd8b462ffd6da065c97a_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Block:block_core_children_pages.html.twig";
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
", "SonataPageBundle:Block:block_core_children_pages.html.twig", "C:\\wamp\\www\\Aparchi\\src\\Application\\Sonata\\PageBundle/Resources/views/Block/block_core_children_pages.html.twig");
    }
}
