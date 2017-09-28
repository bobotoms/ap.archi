<?php

/* @SonataPage/Form/form_admin_fields.html.twig */
class __TwigTemplate_6acd7675ce53a31b7c86f6d925b08d06b532da6fd59e9b54e222595c44f71321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_admin_block_settings_sonata_type_immutable_array_row' => array($this, 'block_sonata_page_admin_block_settings_sonata_type_immutable_array_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4f3cba78f0e257d69cd9d6f39e40fcd53efce9b9f6065567cf3860377ece4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f3cba78f0e257d69cd9d6f39e40fcd53efce9b9f6065567cf3860377ece4d3->enter($__internal_b4f3cba78f0e257d69cd9d6f39e40fcd53efce9b9f6065567cf3860377ece4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/Form/form_admin_fields.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_admin_block_settings_sonata_type_immutable_array_row', $context, $blocks);
        
        $__internal_b4f3cba78f0e257d69cd9d6f39e40fcd53efce9b9f6065567cf3860377ece4d3->leave($__internal_b4f3cba78f0e257d69cd9d6f39e40fcd53efce9b9f6065567cf3860377ece4d3_prof);

    }

    public function block_sonata_page_admin_block_settings_sonata_type_immutable_array_row($context, array $blocks = array())
    {
        $__internal_9458375acca4eb1e7095ca5226b89c425fb4e934a06ab021c620ccf9f4a9c0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9458375acca4eb1e7095ca5226b89c425fb4e934a06ab021c620ccf9f4a9c0c7->enter($__internal_9458375acca4eb1e7095ca5226b89c425fb4e934a06ab021c620ccf9f4a9c0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_admin_block_settings_sonata_type_immutable_array_row"));

        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 14
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9458375acca4eb1e7095ca5226b89c425fb4e934a06ab021c620ccf9f4a9c0c7->leave($__internal_9458375acca4eb1e7095ca5226b89c425fb4e934a06ab021c620ccf9f4a9c0c7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/Form/form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  38 => 13,  26 => 12,  23 => 11,);
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

{% block sonata_page_admin_block_settings_sonata_type_immutable_array_row %}
    {% for child in form.children %}
        {{ form_row(child) }}
    {% endfor %}
{% endblock %}
", "@SonataPage/Form/form_admin_fields.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\Form\\form_admin_fields.html.twig");
    }
}
