<?php

/* SonataFormatterBundle:Form:ckeditor.html.twig */
class __TwigTemplate_0b93c78d7d874e5ac525e7debb14a39875c45d9b54a94306fcb6dc211b43897c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0bf315792ff09eb9b7c9891237666b92fe7af9ad19008dc635935edc767b04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bf315792ff09eb9b7c9891237666b92fe7af9ad19008dc635935edc767b04f->enter($__internal_d0bf315792ff09eb9b7c9891237666b92fe7af9ad19008dc635935edc767b04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataFormatterBundle:Form:ckeditor.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ckeditor_plugins"]) ? $context["ckeditor_plugins"] : $this->getContext($context, "ckeditor_plugins")));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 2
            echo "\t";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ckeditor_templates"]) ? $context["ckeditor_templates"] : $this->getContext($context, "ckeditor_templates")));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 6
            echo "\t";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderTemplate($context["template_name"], $context["template"]);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget((isset($context["ckeditor_field_id"]) ? $context["ckeditor_field_id"] : $this->getContext($context, "ckeditor_field_id")), (isset($context["ckeditor_configuration"]) ? $context["ckeditor_configuration"] : $this->getContext($context, "ckeditor_configuration")), array("input_sync" => true));
        // line 11
        echo "
";
        
        $__internal_d0bf315792ff09eb9b7c9891237666b92fe7af9ad19008dc635935edc767b04f->leave($__internal_d0bf315792ff09eb9b7c9891237666b92fe7af9ad19008dc635935edc767b04f_prof);

    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Form:ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  54 => 9,  51 => 8,  42 => 6,  38 => 5,  35 => 4,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for plugin_name, plugin in ckeditor_plugins %}
\t{{ ckeditor_plugin(plugin_name, plugin) }}
{% endfor %}

{% for template_name, template in ckeditor_templates %}
\t{{ ckeditor_template(template_name, template) }}
{% endfor %}

{{ ckeditor_widget(ckeditor_field_id, ckeditor_configuration, {
\tinput_sync: true,
}) }}
", "SonataFormatterBundle:Form:ckeditor.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\formatter-bundle/Resources/views/Form/ckeditor.html.twig");
    }
}
