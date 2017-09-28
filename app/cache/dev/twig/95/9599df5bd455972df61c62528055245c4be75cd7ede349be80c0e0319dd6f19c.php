<?php

/* @SonataFormatter/Ckeditor/upload.html.twig */
class __TwigTemplate_f7085dccef92e9c41196a7e4e84f99e955625b37e55770da5290886ec0207966 extends Twig_Template
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
        $__internal_940cc9fd8838c875164ba923eee35ad3a1e3ddda92ce08b424f142e60cee9898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940cc9fd8838c875164ba923eee35ad3a1e3ddda92ce08b424f142e60cee9898->enter($__internal_940cc9fd8838c875164ba923eee35ad3a1e3ddda92ce08b424f142e60cee9898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataFormatter/Ckeditor/upload.html.twig"));

        // line 1
        echo "<script>window.parent.CKEDITOR.tools.callFunction(";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \"";
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), twig_escape_filter($this->env, "reference", "js"));
        echo "\");</script>
";
        
        $__internal_940cc9fd8838c875164ba923eee35ad3a1e3ddda92ce08b424f142e60cee9898->leave($__internal_940cc9fd8838c875164ba923eee35ad3a1e3ddda92ce08b424f142e60cee9898_prof);

    }

    public function getTemplateName()
    {
        return "@SonataFormatter/Ckeditor/upload.html.twig";
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
", "@SonataFormatter/Ckeditor/upload.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\formatter-bundle\\Resources\\views\\Ckeditor\\upload.html.twig");
    }
}
