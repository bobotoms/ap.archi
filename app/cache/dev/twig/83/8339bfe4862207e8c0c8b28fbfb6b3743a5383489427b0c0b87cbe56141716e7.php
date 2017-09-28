<?php

/* SonataFormatterBundle:Ckeditor:upload.html.twig */
class __TwigTemplate_66810e1d04354c8fee7e2369dd2b1f93bbe47dd9fdf23467f60362fc6f448372 extends Twig_Template
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
        $__internal_8756145a96dac0e8b6150a2f6549ce1f59f522a38e62032f7ff2a94da8f02490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8756145a96dac0e8b6150a2f6549ce1f59f522a38e62032f7ff2a94da8f02490->enter($__internal_8756145a96dac0e8b6150a2f6549ce1f59f522a38e62032f7ff2a94da8f02490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataFormatterBundle:Ckeditor:upload.html.twig"));

        // line 1
        echo "<script>window.parent.CKEDITOR.tools.callFunction(";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \"";
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), twig_escape_filter($this->env, "reference", "js"));
        echo "\");</script>
";
        
        $__internal_8756145a96dac0e8b6150a2f6549ce1f59f522a38e62032f7ff2a94da8f02490->leave($__internal_8756145a96dac0e8b6150a2f6549ce1f59f522a38e62032f7ff2a94da8f02490_prof);

    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Ckeditor:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>window.parent.CKEDITOR.tools.callFunction({{ app.request.get('CKEditorFuncNum')|escape('js') }}, \"{% path object, 'reference'|escape('js') %}\");</script>
", "SonataFormatterBundle:Ckeditor:upload.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\formatter-bundle/Resources/views/Ckeditor/upload.html.twig");
    }
}
