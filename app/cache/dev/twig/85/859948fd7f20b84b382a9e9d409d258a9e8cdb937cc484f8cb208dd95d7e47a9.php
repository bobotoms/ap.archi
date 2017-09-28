<?php

/* SonataPageBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_dfd6e13452f2cfd73599e65d92ea334643b5f5a0e50adfaa07f54922fdfead22 extends Twig_Template
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
        $__internal_c9b3e779b50ece3dce429b432d485624b605957ad1d678a98a822acc04fa8278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b3e779b50ece3dce429b432d485624b605957ad1d678a98a822acc04fa8278->enter($__internal_c9b3e779b50ece3dce429b432d485624b605957ad1d678a98a822acc04fa8278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:Form:form_admin_fields.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_admin_block_settings_sonata_type_immutable_array_row', $context, $blocks);
        
        $__internal_c9b3e779b50ece3dce429b432d485624b605957ad1d678a98a822acc04fa8278->leave($__internal_c9b3e779b50ece3dce429b432d485624b605957ad1d678a98a822acc04fa8278_prof);

    }

    public function block_sonata_page_admin_block_settings_sonata_type_immutable_array_row($context, array $blocks = array())
    {
        $__internal_5a60f89331072c09819020aa6c87ca8d60a08c6cad33c3a5d20693b360abcde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a60f89331072c09819020aa6c87ca8d60a08c6cad33c3a5d20693b360abcde9->enter($__internal_5a60f89331072c09819020aa6c87ca8d60a08c6cad33c3a5d20693b360abcde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_admin_block_settings_sonata_type_immutable_array_row"));

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
        
        $__internal_5a60f89331072c09819020aa6c87ca8d60a08c6cad33c3a5d20693b360abcde9->leave($__internal_5a60f89331072c09819020aa6c87ca8d60a08c6cad33c3a5d20693b360abcde9_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:Form:form_admin_fields.html.twig";
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
", "SonataPageBundle:Form:form_admin_fields.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
