<?php

/* SonataSeoBundle:Block:_facebook_sdk.html.twig */
class __TwigTemplate_b28cb3e07fb059e9fc5f8dc3adc20ef351fca1db357def0977c56c66a7ee5519 extends Twig_Template
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
        $__internal_8cce6053f7845377b73a6531d3238e6fc6c337b63cddc93fd8a37e07a3951dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cce6053f7845377b73a6531d3238e6fc6c337b63cddc93fd8a37e07a3951dac->enter($__internal_8cce6053f7845377b73a6531d3238e6fc6c337b63cddc93fd8a37e07a3951dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:_facebook_sdk.html.twig"));

        // line 11
        $this->displayBlock('facebook_sdk', $context, $blocks);
        
        $__internal_8cce6053f7845377b73a6531d3238e6fc6c337b63cddc93fd8a37e07a3951dac->leave($__internal_8cce6053f7845377b73a6531d3238e6fc6c337b63cddc93fd8a37e07a3951dac_prof);

    }

    public function block_facebook_sdk($context, array $blocks = array())
    {
        $__internal_619271654642f11511fc877e7dd3dc1092f9167de524f0ade6dec718fecf974e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619271654642f11511fc877e7dd3dc1092f9167de524f0ade6dec718fecf974e->enter($__internal_619271654642f11511fc877e7dd3dc1092f9167de524f0ade6dec718fecf974e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "facebook_sdk"));

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
        
        $__internal_619271654642f11511fc877e7dd3dc1092f9167de524f0ade6dec718fecf974e->leave($__internal_619271654642f11511fc877e7dd3dc1092f9167de524f0ade6dec718fecf974e_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:_facebook_sdk.html.twig";
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
", "SonataSeoBundle:Block:_facebook_sdk.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/_facebook_sdk.html.twig");
    }
}
