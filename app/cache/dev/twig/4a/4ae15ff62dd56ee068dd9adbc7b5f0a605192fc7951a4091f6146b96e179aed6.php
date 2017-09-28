<?php

/* SonataSeoBundle:Block:_twitter_sdk.html.twig */
class __TwigTemplate_006347e08e98adb1c347310e54c3b5dd8a353d664a01e7f425e99529ccf0195f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'twitter_sdk' => array($this, 'block_twitter_sdk'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aab9cf0e18acefdbbbab86baa150386fb4240b9fab9a3355acd441f426b2571a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab9cf0e18acefdbbbab86baa150386fb4240b9fab9a3355acd441f426b2571a->enter($__internal_aab9cf0e18acefdbbbab86baa150386fb4240b9fab9a3355acd441f426b2571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataSeoBundle:Block:_twitter_sdk.html.twig"));

        // line 11
        $this->displayBlock('twitter_sdk', $context, $blocks);
        
        $__internal_aab9cf0e18acefdbbbab86baa150386fb4240b9fab9a3355acd441f426b2571a->leave($__internal_aab9cf0e18acefdbbbab86baa150386fb4240b9fab9a3355acd441f426b2571a_prof);

    }

    public function block_twitter_sdk($context, array $blocks = array())
    {
        $__internal_a3a93ddd3953e16374bdf644ac8698eb2708c4066d2a5f19cd00c8dd32a0e6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a93ddd3953e16374bdf644ac8698eb2708c4066d2a5f19cd00c8dd32a0e6d2->enter($__internal_a3a93ddd3953e16374bdf644ac8698eb2708c4066d2a5f19cd00c8dd32a0e6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "twitter_sdk"));

        // line 12
        ob_start();
        // line 13
        echo "
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a3a93ddd3953e16374bdf644ac8698eb2708c4066d2a5f19cd00c8dd32a0e6d2->leave($__internal_a3a93ddd3953e16374bdf644ac8698eb2708c4066d2a5f19cd00c8dd32a0e6d2_prof);

    }

    public function getTemplateName()
    {
        return "SonataSeoBundle:Block:_twitter_sdk.html.twig";
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
{% block twitter_sdk %}
{% spaceless %}

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

{% endspaceless %}
{% endblock %}
", "SonataSeoBundle:Block:_twitter_sdk.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle/Resources/views/Block/_twitter_sdk.html.twig");
    }
}
