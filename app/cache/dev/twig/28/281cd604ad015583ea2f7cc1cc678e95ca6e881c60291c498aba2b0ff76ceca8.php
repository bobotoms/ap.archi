<?php

/* @SonataSeo/Block/_twitter_sdk.html.twig */
class __TwigTemplate_1ab2302a02f94f074686acf9c4d4b0c6bd7a0986acb256f881ba422b716a378e extends Twig_Template
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
        $__internal_a712a3a04b228ecf0a36acf7b36dca3f96f262df0a4dc005337b9da7f1520e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a712a3a04b228ecf0a36acf7b36dca3f96f262df0a4dc005337b9da7f1520e0e->enter($__internal_a712a3a04b228ecf0a36acf7b36dca3f96f262df0a4dc005337b9da7f1520e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataSeo/Block/_twitter_sdk.html.twig"));

        // line 11
        $this->displayBlock('twitter_sdk', $context, $blocks);
        
        $__internal_a712a3a04b228ecf0a36acf7b36dca3f96f262df0a4dc005337b9da7f1520e0e->leave($__internal_a712a3a04b228ecf0a36acf7b36dca3f96f262df0a4dc005337b9da7f1520e0e_prof);

    }

    public function block_twitter_sdk($context, array $blocks = array())
    {
        $__internal_e7af7c68128e66e9305fdf44150bd65342d0571d5799c75a2278b812545c7889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7af7c68128e66e9305fdf44150bd65342d0571d5799c75a2278b812545c7889->enter($__internal_e7af7c68128e66e9305fdf44150bd65342d0571d5799c75a2278b812545c7889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "twitter_sdk"));

        // line 12
        ob_start();
        // line 13
        echo "
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e7af7c68128e66e9305fdf44150bd65342d0571d5799c75a2278b812545c7889->leave($__internal_e7af7c68128e66e9305fdf44150bd65342d0571d5799c75a2278b812545c7889_prof);

    }

    public function getTemplateName()
    {
        return "@SonataSeo/Block/_twitter_sdk.html.twig";
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
", "@SonataSeo/Block/_twitter_sdk.html.twig", "C:\\wamp\\www\\Aparchi\\vendor\\sonata-project\\seo-bundle\\Resources\\views\\Block\\_twitter_sdk.html.twig");
    }
}
