<?php

/* SonataPageBundle:PageAdmin:compose_hint.html.twig */
class __TwigTemplate_02467ade145be45ffbed434877cfd9814ff9cba6257af54fc72510e0d47f3433 extends Twig_Template
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
        $__internal_0d0503def70c581f1a6905d7e66a97dcc782c8401f6b88c9c12df86c8bab59ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0503def70c581f1a6905d7e66a97dcc782c8401f6b88c9c12df86c8bab59ec->enter($__internal_0d0503def70c581f1a6905d7e66a97dcc782c8401f6b88c9c12df86c8bab59ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataPageBundle:PageAdmin:compose_hint.html.twig"));

        // line 1
        echo "<div class=\"alert alert-warning\">
    <strong>Warning!</strong> Before using the composer option, you need to configure the template layout.
    <br>The configuration must be done in the <code>sonata_page.templates</code> section.<br>

    <br>
    See a complete exemple here:

<pre>
sonata_page:
    # [...]
    templates:
        default:
            path: 'ApplicationSonataPageBundle::demo_layout.html.twig'
            name: 'default'
            containers:
                header:
                    name: Header
                content_top:
                    name: Top content
                content:
                    name: Main content
                content_bottom:
                    name: Bottom content
                footer:
                    name: Footer
            matrix:
                layout: |
                    HHHHHHHH
                    TTTTBBBB
                    TTTTBBBB
                    TTTTBBBB
                    TTTTBBBB
                    CCCCCCCC
                    CCCCCCCC
                    FFFFFFFF

                mapping:
                    H: header
                    T: content_top
                    C: content
                    B: content_bottom
                    F: footer
</pre>
</div>";
        
        $__internal_0d0503def70c581f1a6905d7e66a97dcc782c8401f6b88c9c12df86c8bab59ec->leave($__internal_0d0503def70c581f1a6905d7e66a97dcc782c8401f6b88c9c12df86c8bab59ec_prof);

    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:compose_hint.html.twig";
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
        return new Twig_Source("<div class=\"alert alert-warning\">
    <strong>Warning!</strong> Before using the composer option, you need to configure the template layout.
    <br>The configuration must be done in the <code>sonata_page.templates</code> section.<br>

    <br>
    See a complete exemple here:

<pre>
sonata_page:
    # [...]
    templates:
        default:
            path: 'ApplicationSonataPageBundle::demo_layout.html.twig'
            name: 'default'
            containers:
                header:
                    name: Header
                content_top:
                    name: Top content
                content:
                    name: Main content
                content_bottom:
                    name: Bottom content
                footer:
                    name: Footer
            matrix:
                layout: |
                    HHHHHHHH
                    TTTTBBBB
                    TTTTBBBB
                    TTTTBBBB
                    TTTTBBBB
                    CCCCCCCC
                    CCCCCCCC
                    FFFFFFFF

                mapping:
                    H: header
                    T: content_top
                    C: content
                    B: content_bottom
                    F: footer
</pre>
</div>", "SonataPageBundle:PageAdmin:compose_hint.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle/Resources/views/PageAdmin/compose_hint.html.twig");
    }
}
