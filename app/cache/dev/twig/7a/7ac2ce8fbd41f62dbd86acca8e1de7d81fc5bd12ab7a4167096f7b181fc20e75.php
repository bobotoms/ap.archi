<?php

/* @SonataPage/PageAdmin/compose_hint.html.twig */
class __TwigTemplate_488e2db1ea51007dc00fb02c7d486b2ee43e1e26b8b5229b07f3c39671caf005 extends Twig_Template
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
        $__internal_b34ed6c0f746763581cc4a81c590402c99f2f0a5b7e8a23fb004baffe00296b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34ed6c0f746763581cc4a81c590402c99f2f0a5b7e8a23fb004baffe00296b1->enter($__internal_b34ed6c0f746763581cc4a81c590402c99f2f0a5b7e8a23fb004baffe00296b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataPage/PageAdmin/compose_hint.html.twig"));

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
        
        $__internal_b34ed6c0f746763581cc4a81c590402c99f2f0a5b7e8a23fb004baffe00296b1->leave($__internal_b34ed6c0f746763581cc4a81c590402c99f2f0a5b7e8a23fb004baffe00296b1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataPage/PageAdmin/compose_hint.html.twig";
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
</div>", "@SonataPage/PageAdmin/compose_hint.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\page-bundle\\Resources\\views\\PageAdmin\\compose_hint.html.twig");
    }
}
