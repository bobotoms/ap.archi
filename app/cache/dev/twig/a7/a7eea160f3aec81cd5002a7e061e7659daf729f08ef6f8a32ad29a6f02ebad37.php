<?php

/* @SonataSeo/Block/_facebook_sdk.html.twig */
class __TwigTemplate_8774f68332a9926af7052ed0448770a5661c97f5e4f7558139bbfcee3e4782f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'facebook_sdk' => array($this, 'block_facebook_sdk'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5ce4c15d2ff2ace881b3e3008b3a312861566cf571ebd2a54c4ac29cb1f6036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ce4c15d2ff2ace881b3e3008b3a312861566cf571ebd2a54c4ac29cb1f6036->enter($__internal_f5ce4c15d2ff2ace881b3e3008b3a312861566cf571ebd2a54c4ac29cb1f6036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/_facebook_sdk.html.twig"));

        // line 11
        $this->displayBlock('facebook_sdk', $context, $blocks);
        
        $__internal_f5ce4c15d2ff2ace881b3e3008b3a312861566cf571ebd2a54c4ac29cb1f6036->leave($__internal_f5ce4c15d2ff2ace881b3e3008b3a312861566cf571ebd2a54c4ac29cb1f6036_prof);

    }

    public function block_facebook_sdk($context, array $blocks = array())
    {
        $__internal_f206eeaf853a4037f06610ec9144547e3dcfbe9702bccb80099739b08b03e946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f206eeaf853a4037f06610ec9144547e3dcfbe9702bccb80099739b08b03e946->enter($__internal_f206eeaf853a4037f06610ec9144547e3dcfbe9702bccb80099739b08b03e946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "facebook_sdk"));

        // line 12
        ob_start();
        // line 13
        echo "
    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f206eeaf853a4037f06610ec9144547e3dcfbe9702bccb80099739b08b03e946->leave($__internal_f206eeaf853a4037f06610ec9144547e3dcfbe9702bccb80099739b08b03e946_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/_facebook_sdk.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 13,  35 => 12,  23 => 11,);
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
{% block facebook_sdk %}
{% spaceless %}

    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

{% endspaceless %}
{% endblock %}
", "@SonataSeo/Block/_facebook_sdk.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\_facebook_sdk.html.twig");
    }
}
