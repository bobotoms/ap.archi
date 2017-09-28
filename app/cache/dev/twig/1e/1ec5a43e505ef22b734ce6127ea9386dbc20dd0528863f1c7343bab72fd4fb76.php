<?php

/* @SonataSeo/Default/index.html.twig */
class __TwigTemplate_63eca789a3060301d1d233ffeafbc5d9b8f153327d6107335b295eaab5c14ca6 extends Twig_Template
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
        $__internal_506935722be53b587e986d0d59584b2ab0989f9bcccc9e4826d35f026ac42428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506935722be53b587e986d0d59584b2ab0989f9bcccc9e4826d35f026ac42428->enter($__internal_506935722be53b587e986d0d59584b2ab0989f9bcccc9e4826d35f026ac42428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_506935722be53b587e986d0d59584b2ab0989f9bcccc9e4826d35f026ac42428->leave($__internal_506935722be53b587e986d0d59584b2ab0989f9bcccc9e4826d35f026ac42428_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Default/index.html.twig";
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
        return new Twig_Source("Hello {{ name }}!
", "@SonataSeo/Default/index.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Default\\index.html.twig");
    }
}
